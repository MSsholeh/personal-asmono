<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use App\Portfolio;
use App\Member;
use App\Slider;
use App\Message;
use App\User;

class DashboardController extends Controller
{
    public function index()
    {
        $gallery = Gallery::count();
        $portfolio = Portfolio::count();
        $member = Member::count();
        $slider = Slider::count();
        $message = Message::count();
        $admin = User::count();

        return view('admin.dashboard.index', compact('gallery','portfolio','member','slider','message','admin'));
    }
}
