<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

use App\Message;
use App\About;
use App\Experiences;
use App\Portfolio;
use App\Testimonial;
use App\GeneralSetting;

class SiteController extends Controller
{
    protected $viewBase = "webuilder";

    public function index()
    {
        return view($this->viewBase.'.pages.home')->with([
            'setting' => GeneralSetting::first(),
            'experiences' => Experiences::All(),
            'testimonials' => Testimonial::All(),
            'podcasts' => Portfolio::where('type','podcast')->where('status','1')->orderBy('created_at','DESC')->limit(3)->get(),
            'videos' => Portfolio::where('type','video')->where('status','1')->orderBy('created_at','DESC')->limit(3)->get()
        ]);
    }

    public function about(){
        return view($this->viewBase.'.pages.about')->with([
            'about' => GeneralSetting::first(),
            'experiences' => Experiences::All()
        ]);
    }

    public function photo()
    {
        $photos = Portfolio::where('type','photo')->where('status','1')->orderBy('created_at','DESC')->paginate(9);
        return view($this->viewBase.'.pages.photo')->with([
            'photos' => $photos
        ]);
    }

    public function podcast()
    {
        $podcasts = Portfolio::where('type','podcast')->where('status','1')->orderBy('created_at','DESC')->paginate(5);
        return view($this->viewBase.'.pages.podcast')->with([
            'podcasts' => $podcasts,
            'generalSetting' => GeneralSetting::first(),
            'related' => Portfolio::where('type','podcast')->where('status','1')->inRandomOrder()->limit(3)->get()
        ]);
    }

    public function podcast_detail($id)
    {
        return view($this->viewBase.'.pages.podcastDetail')->with([
            'podcast' => Portfolio::where('id',$id)->first(),
            'related' => Portfolio::where('type','podcast')->where('status','1')->inRandomOrder()->limit(3)->get()
        ]);
    }

    public function Video()
    {
        $videos = Portfolio::where('type','video')->where('status','1')->orderBy('created_at','DESC')->paginate(6);
        return view($this->viewBase.'.pages.video')->with([
            'videos' => $videos
        ]);
    }

    public function Video_detail($id)
    {
        return view($this->viewBase.'.pages.videoDetail')->with([
            'video' => Portfolio::where('id',$id)->first(),
            'related' => Portfolio::where('type','video')->where('status','1')->inRandomOrder()->limit(3)->get()
        ]);
    }


    public function contact(){
        return view($this->viewBase.'.pages.contact')->with([
            'generalSetting' => GeneralSetting::first()
        ]);
    }

    public function contactSubmit(Request $request){
        $request->validate([
           'name' => ['required', 'string', 'max:100'],
           'email'=> ['required', 'email', 'max:255'],
           'subject'=> ['required', 'string', 'max:255'],
           'message'=> ['required', 'string', 'max: 2000'],
        ]);

        Message::create($request->only(['name', 'email', 'subject', 'message','phone']));
        return redirect()->route('contact')->with(['status' => 'Message Sent Succesfully']);
    }
}
