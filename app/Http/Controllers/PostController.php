<?php

namespace App\Http\Controllers;

use App\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $data=request()->validate([
            'title'=>'required',
            'body'=>'required',
            'subject'=>'required',
            'category'=> 'required',
            
          ]);

        $post = new Post();

        $post->title=request("title");
        $post->body=request("body");
        $post->subject=request("subject");
        $post->category=request("category");
        $post->save();

        return redirect("home")->with('message','Success!! You haveve placed
        Question  Successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $post = post::find($id);
       return view('post.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {    

        $data=request()->validate([
            'title'=>'required',
            'body'=>'required',
            'subject'=>'required',
            'category'=> 'required',
            
          ]);

        $post =post::find($id);

        $post->title=request("title");
        $post->body=request("body");
        $post->subject=request("subject");
        $post->category=request("category");
        $post->save();

        return redirect("home");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post =post::find($id);
        $post->delete();
        return redirect()->back();
        
    }
}
