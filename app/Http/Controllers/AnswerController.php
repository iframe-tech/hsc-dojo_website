<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\forum;

class AnswerController extends Controller
{   



    public function update(Request $request, $id)
    {
        
        
        $ques=forum::find($id);

        $ques->answer=request("answer");
        $ques->save();
        return redirect()->back()->with('message','Answer Placed Successfully!!');
    }
}
