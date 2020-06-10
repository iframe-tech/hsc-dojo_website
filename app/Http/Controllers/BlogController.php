<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function blog_list(){
        return view ('blog.blog_list');
        
    }

    public function blog_physics_1st_bangla(){
   
        return view ('blog.physics_1st_bangla');
    
    }

    public function blog_physics_2nd_bangla(){
   
        return view ('blog.physics_2nd_bangla');
    
    }
}
