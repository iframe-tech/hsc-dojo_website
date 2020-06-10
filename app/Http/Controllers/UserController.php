<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{ 

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activeusers=User::where('role','user')->where('status','active')->orderby("id","desc")->paginate(50,['*'],'activeusers');
        $blockedusers=User::where('role','user')->where('status','blocked')->orderby("id","desc")->paginate(50,['*'],'blockedusers');
        $admins=User::where('role','admin')->paginate(5,['*'],'admins');
        $maintainers=User::where('role','maintainer')->paginate(5,['*'],'maintainers');

        //return view('block',['activeusers'=>$activeusers,'admins'=>$admins,'blockedusers'=>$blockedusers]);
        return view('block')->with(compact('activeusers','blockedusers','admins','maintainers'));
      
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $data=request()->validate([
            'status'=>'required'
            
          ]);
        $user=User::find($id);

        $user->status=request("status");
        $user->save();
        return redirect("block");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user =User::find($id);
        $user->delete();
        return redirect()->back();
        
    }
}
