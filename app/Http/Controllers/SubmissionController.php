<?php

namespace App\Http\Controllers;

use App\submission;
use Illuminate\Http\Request;


class SubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $firsts= submission::where("submission_type","First")->orderby("id","desc")->paginate(50,['*'],'firsts');
        $renewals= submission::where("submission_type","Renewal")->orderby("id","desc")->paginate(50,['*'],'renewals');
        return view("submission")->with(compact('firsts','renewals'));
       

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
          'name'=>'required',
          'phone'=>'required',
          'email'=>'required',
          'TrXId'=>'required',
          'method'=>'required',
          'version'=>'required',
          'apply'=>'required',
        ]);

        $submission = new Submission();

        $submission->name=request("name");
        $submission->phone=request("phone");
        $submission->email=request("email");
        $submission->method=request("method");
        $submission->TrXId=request("TrXId");
        $submission->version=request("version");
        $submission->submission_type=request("apply");

        $submission->save();

        
        return redirect('waiting_list')->with('message','Success!! 
        Check the submit list to verify if everthing is okay. We will get in touch soon!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function show(submission $submission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $submission = submission::find($id);
       return view('submission_edit')->with('submission',$submission);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $data=request()->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'TrXId'=>'required',
            'method'=>'required',
            'version'=>'required',
            'apply'=>'required',
          ]);
            

        $submission =submission::find($id);

        $submission->name=request("name");
        $submission->phone=request("phone");
        $submission->email=request("email");
        $submission->method=request("method");
        $submission->TrXId=request("TrXId");
        $submission->version=request("version");
        $submission->submission_type=request("apply");

        $submission->save();

        
        return redirect('waiting_list')->with('message','Success!! Your Submission is updated. We will get in touch soon!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $submission =submission::find($id);
        $submission->delete();
        return redirect()->back();
        
    }
}
