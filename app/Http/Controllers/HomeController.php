<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   

        $timelines = post::where("subject","Timeline")->orderby("created_at","asc")->get();
        return view('home')->with("timelines",$timelines);
    }
}
