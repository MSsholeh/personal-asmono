<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

use App\Message;
use App\About;
use App\Article;
use App\ArticleCategory;
use App\Comment;
use App\Experiences;
use App\Services;
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
            'services' => Services::All(),
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

    public function article()
    {
        $articles = Article::where('status','1')->orderBy('created_at','DESC')->paginate(6);
        return view($this->viewBase.'.pages.article')->with([
            'articles' => $articles,
            'generalSetting' => GeneralSetting::first(),
            'related' => Article::where('status','1')->inRandomOrder()->limit(5)->get(),
            'category' => ArticleCategory::all()
        ]);
    }

    public function article_category($slug)
    {
        $categories = ArticleCategory::where('slug',$slug)->first();
        $articles = Article::where('category_id', $categories->id)->where('status','1')->orderBy('created_at','DESC')->paginate(6);
        return view($this->viewBase.'.pages.articleCategory')->with([
            'articles' => $articles,
            'articleCount' => Article::where('status','1')->orderBy('created_at','DESC')->get(),
            'generalSetting' => GeneralSetting::first(),
            'related' => Article::where('status','1')->inRandomOrder()->limit(5)->get(),
            'category' => ArticleCategory::all(),
            'categories' => $categories
        ]);
    }

    public function article_detail($slug)
    {
        return view($this->viewBase.'.pages.articleDetail')->with([
            'articles' => Article::where('status','1')->orderBy('created_at','DESC')->get(),
            'article' => Article::with(['comments', 'comments.child'])->where('slug',$slug)->first(),
            'generalSetting' => GeneralSetting::first(),
            'recent' => Article::where('status','1')->orderBy('created_at','DESC')->limit(5)->get(),
            'category' => ArticleCategory::all()
        ]);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }

    public function comment(Request $request)
    {
        $request->validate([
           'name' => ['required', 'string', 'max:100'],
           'email'=> ['required', 'email', 'max:100'],
           'website'=> ['string', 'max:255'],
           'message'=> ['required', 'string', 'max: 2000'],
        ]);

        Comment::create([
            'article_id' => $request->article_id,
            //JIKA PARENT ID TIDAK KOSONG, MAKA AKAN DISIMPAN IDNYA, SELAIN ITU NULL
            'user_id'   => $request->user_id,
            'parent_id' => $request->parent_id != '' ? $request->parent_id:NULL,
            'name'      => $request->name,
            'email'     => $request->email,
            'website'   => $request->website,
            'message'   => $request->message,
        ]);
        return redirect()->back()->with(['success' => 'Komentar Ditambahkan']);
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
