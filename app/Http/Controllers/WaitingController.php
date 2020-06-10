<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\submission;

class WaitingController extends Controller
{
    public function update(Request $request, $id)
    {
        $data=request()->validate([
            'comment'=>'required',
            
          ]);
        
        $submission=submission::find($id);

        $submission->comment=request("comment");
        $submission->save();
        return redirect()->back();
    }
}
