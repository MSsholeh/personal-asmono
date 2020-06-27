<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Member;
use App\PortfolioCategory;
use App\Portfolio;
use App\GalleryCategory;
use App\User;
use App\Slider;
use App\About;
use App\Message;
use App\GeneralSetting;
use App\Info;
use App\Gallery;

class SiteController extends Controller
{
    protected $viewBase = "webuilder";
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view($this->viewBase.'.pages.home')->with([
            'sliders' => Slider::all(),
            'members' => Member::all(),
            'users' => User::all(),
            'about' => About::first(),
            'infos' => Info::all(),
            'galleryCategory' => GalleryCategory::whereHas('galleries')->get(),
            'galleries' => Gallery::whereHas('category')->orderBy('created_at', 'DESC')->get()
        ]);
    }

    public function projects()
    {
        $projects = Portfolio::orderBy('created_at','DESC')->paginate(10);
        return view($this->viewBase.'.pages.projects')->with([
            'projects' => $projects
        ]);
    }

    public function aboutUs(){
        return view($this->viewBase.'.pages.about-us')->with([
            'abouts' => About::all()
        ]);
    }

    public function gallery(){
        return view($this->viewBase.'.pages.gallery')->with([
            'galleryCategory' => GalleryCategory::whereHas('galleries')->get(),
            'galleries' => Gallery::whereHas('category')->orderBy('created_at', 'DESC')->get()
        ]);
    }

    public function contactUs(){
        return view($this->viewBase.'.pages.contact-us')->with([
            'generalSetting' => GeneralSetting::first()
        ]);
    }

    public function contactUsSubmit(Request $request){
        $request->validate([
           'name' => ['required', 'string', 'max:100'],
           'email'=> ['required', 'email', 'max:255'],
           'subject'=> ['required', 'string', 'max:255'],
           'message'=> ['required', 'string', 'max: 2000'],
           'phone'=> ['required', 'string', 'max: 20'],
        ]);

        Message::create($request->only(['name', 'email', 'subject', 'message','phone']));
        return redirect()->route('contactUs')->with(['status' => 'Message Sent Succesfully']);
    }
}
