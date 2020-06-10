<?php

namespace App\Http\Controllers;

use App\User;
use App\forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $id=auth()->user()->id;
         
         $forums=forum:: where("user_id",$id)->orderby("created_at","desc")->paginate(10);

        
         return view ('Forum.forum')->with('forums',$forums);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'topic'=>'required',
            'question'=>'required',
            'subject'=>'required',
            
          ]);

        $forum = new Forum();
       
        $forum->title=request("title");
        $forum->topic=request("topic");
        $forum->question=request("question");
        $forum->subject=request("subject");
        $forum->user_id = auth()->user()->id;
       

        $forum->save();

        
        return redirect()->back()->with('message','Success!! 
        Your question is placed. We will provide answer ASAP!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function show(forum $forum)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, forum $forum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question =forum::find($id);
        $question->delete();
        return redirect()->back();
        
    }
}
