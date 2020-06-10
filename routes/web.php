<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes(['register' => false,'reset' => false,]);
Route::get('/waiting_list', 'PagesController@waiting')->name('Waiting List');


//blog
Route::get('/blog_list', 'BlogController@blog_list')->name('Blog List');
Route::get('/blog_physics_1st_bangla', 'BlogController@blog_physics_1st_bangla')->name('Blog Physics 1st Bangla');
Route::get('/blog_physics_2nd_bangla', 'BlogController@blog_physics_2nd_bangla')->name('Blog Physics 2nd Bangla');
//public submission
Route::post('/Submissions','SubmissionController@store');
Route::get('/Submissions/{Submission}/edit','SubmissionController@edit');
Route::put('/Submissions/{Submission}','SubmissionController@update');
//demo
Route::get('/demo', function(){
return view('demo');

});
Route::get('/thermodynamics_bangla_shortquestions', 'PhysicsController@thermodynamics_SQ');
Route::get('/vector_bangla_mcqs', 'PhysicsController@vector_MCQ');
Route::get('/measurement_bangla_maths', 'PhysicsController@measurement_Math');



//middleware for database

Route::group(['middleware' => ['auth', 'database']], function() {

    Route::get('/Submissions','SubmissionController@index');
    Route::put('/Comments/{Submission}','WaitingController@update');
    Route::delete("/Submissions/{Submission}","SubmissionController@destroy");
    Route::get('/block', 'UserController@index');
    Route::resource('Users', 'UserController',['except'=>['show','create','store']]);

});



//Middleware for admin role
    Route::group(['middleware' => ['auth', 'admin']], function() {
    
    Route::resource('Posts','PostController',['except'=>'show']);
   
    //Adding answer
    Route::put('/Answers/{forum}','AnswerController@update');
   
   
});



//Middleware for active user
     Route::group(['middleware' => ['auth', 'active_user']], function() {
    //Content Library bangla
    Route::get('/library_video_bangla', 'PagesController@libraryVideo_bangla')->name('Content Library Bangla Video');
    Route::get('/library_pdf_bangla', 'PagesController@libraryPDF_bangla')->name('Content Library Bangla pdf');
    Route::get('/library_solve_bangla', 'PagesController@librarySolve_bangla')->name('Content Library Bangla Solve');
    
    //Content Library English
    Route::get('/library_video_english', 'PagesController@libraryVideo_english')->name('Content Library English Video');
    Route::get('/library_pdf_english', 'PagesController@libraryPDF_english')->name('Content Library English pdf');
    Route::get('/library_solve_english', 'PagesController@librarySolve_english')->name('Content Library English Solve');

     
    //forum
    Route::resource('forum','forumController',['except'=>['create','edit'.'show','update']]);
    Route::get('/forum_physics', 'PagesController@forumPhysics');
    Route::get('/forum_math', 'PagesController@forumMath');
    Route::get('/forum_preparation', 'PagesController@forumPreparation');
    Route::get('/forum_query', 'PagesController@forumQuery');

    //pages
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/Physics_post_bangla', 'PagesController@physics_post_bangla')->name('Physics Post Bangla');
    Route::get('/Physics_post_english', 'PagesController@physics_post_english')->name('Physics Post English');
    Route::get('/math_post_bangla', 'PagesController@math_post_bangla')->name('Math Post Bangla');
    Route::get('/math_post_english', 'PagesController@math_post_english')->name('Math Post English');
    Route::get('/exam_center_bangla', 'PagesController@exam_center_bangla')->name('Exam Center Bangla');
    Route::get('/exam_center_english', 'PagesController@exam_center_english')->name('Exam Center English');
    
    //physics  bangla
    Route::get('/Physics_bangla', 'PagesController@physics_bangla')->name('Physics Bangla');
    Route::get('/Physics_bangla_tools', 'PagesController@physics_1st_bangla_chapters')->name('Physics  Bangla Chapters');
    
    //physics english
    Route::get('/Physics_english', 'PagesController@physics_english')->name('Physics English');


    
    //math bangla
    Route::get('/math_bangla', 'PagesController@math_bangla')->name('Math Bangla');

    //math english
    Route::get('/math_english', 'PagesController@math_english')->name('Math English');
    
    
    //vector
    Route::get('/vector_bangla_shortquestions', 'PhysicsController@vector_SQ');
    Route::get('/vector_bangla_maths', 'PhysicsController@vector_Math');

    //measurement
    Route::get('/measurement_bangla_shortquestions', 'PhysicsController@measurement_SQ');
    Route::get('/measurement_bangla_mcqs', 'PhysicsController@measurement_MCQ'); 
    

    //kinematics
    Route::get('/kinematics_bangla_shortquestions', 'PhysicsController@kinematics_SQ');
    Route::get('/kinematics_bangla_mcqs', 'PhysicsController@kinematics_MCQ');
    Route::get('/kinematics_bangla_maths', 'PhysicsController@kinematics_Math');

  //newtonian mechanics
  Route::get('/newtonian_mechanics_bangla_shortquestions', 'PhysicsController@newtonian_mechanics_SQ');
  Route::get('/newtonian_mechanics_bangla_mcqs', 'PhysicsController@newtonian_mechanics_MCQ');
  Route::get('/newtonian_mechanics_bangla_maths', 'PhysicsController@newtonian_mechanics_Math');

  //work energy and power
  Route::get('/WPE_bangla_shortquestions', 'PhysicsController@work_energy_power_SQ');
  Route::get('/WPE_bangla_mcqs', 'PhysicsController@work_energy_power_MCQ');
  Route::get('/WPE_bangla_maths', 'PhysicsController@work_energy_power_Math');

  //properties of matter
  Route::get('/properties_of_matter_bangla_shortquestions', 'PhysicsController@properties_of_matter_SQ');
  Route::get('/properties_of_matter_bangla_mcqs', 'PhysicsController@properties_of_matter_MCQ');
  Route::get('/properties_of_matter_bangla_maths', 'PhysicsController@properties_of_matter_Math');

  //gravitation
 Route::get('/gravitation_bangla_shortquestions', 'PhysicsController@gravitation_SQ');
 Route::get('/gravitation_bangla_mcqs', 'PhysicsController@gravitation_MCQ');
 Route::get('/gravitation_bangla_maths', 'PhysicsController@gravitation_Math');

 //shm

 Route::get('/SHM_bangla_shortquestions', 'PhysicsController@SHM_SQ');
 Route::get('/SHM_bangla_mcqs', 'PhysicsController@SHM_MCQ');
 Route::get('/SHM_bangla_maths', 'PhysicsController@SHM_Math');

 //wave
 Route::get('/wave_bangla_shortquestions', 'PhysicsController@wave_SQ');
 Route::get('/wave_bangla_mcqs', 'PhysicsController@wave_MCQ');
 Route::get('/wave_bangla_maths', 'PhysicsController@wave_Math');
 //thermodynamics
 
 Route::get('/thermodynamics_bangla_mcqs', 'PhysicsController@thermodynamics_MCQ');
 Route::get('/thermodynamics_bangla_maths', 'PhysicsController@thermodynamics_Math');

 //heat and gas

 Route::get('/heat_and_gas_bangla_shortquestions', 'PhysicsController@gas_SQ');
 Route::get('/heat_and_gas_bangla_mcqs', 'PhysicsController@gas_MCQ');
 Route::get('/heat_and_gas_bangla_maths', 'PhysicsController@gas_Math');


 //static electricity
 Route::get('/static_electricity_bangla_shortquestions', 'PhysicsController@static_electricity_SQ');
 Route::get('/static_electricity_bangla_mcqs', 'PhysicsController@static_electricity_MCQ');
 Route::get('/static_electricity_bangla_maths', 'PhysicsController@static_electricity_Math');

 //current electricity
 Route::get('/current_electricity_bangla_shortquestions', 'PhysicsController@current_electricity_SQ');
 Route::get('/current_electricity_bangla_mcqs', 'PhysicsController@current_electricity_MCQ');
 Route::get('/current_electricity_bangla_maths', 'PhysicsController@current_electricity_Math');

 //magnetic property of current
 Route::get('/magnetic_property_of_current_bangla_shortquestions', 'PhysicsController@magnetic_property_of_current_SQ');
 Route::get('/magnetic_property_of_current_bangla_mcqs', 'PhysicsController@magnetic_property_of_current_MCQ');
 Route::get('/magnetic_property_of_current_bangla_maths', 'PhysicsController@magnetic_property_of_current_Math');

 //magnet
 Route::get('/magnet_bangla_shortquestions', 'PhysicsController@magnet_SQ');
 Route::get('/magnet_bangla_mcqs', 'PhysicsController@magnet_MCQ');
 Route::get('/magnet_bangla_maths', 'PhysicsController@magnet_Math');

 //ac
 Route::get('/ac_bangla_shortquestions', 'PhysicsController@ac_SQ');
 Route::get('/ac_bangla_mcqs', 'PhysicsController@ac_MCQ');
 Route::get('/ac_bangla_maths', 'PhysicsController@ac_Math');

 //optics
 Route::get('/optics_bangla_shortquestions', 'PhysicsController@optics_SQ');
 Route::get('/optics_bangla_mcqs', 'PhysicsController@optics_MCQ');
 Route::get('/optics_bangla_maths', 'PhysicsController@optics_Math');

 //physical optics
 Route::get('/physical_optics_bangla_shortquestions', 'PhysicsController@physical_optics_SQ');
 Route::get('/physical_optics_bangla_mcqs', 'PhysicsController@physical_optics_MCQ');
 Route::get('/physical_optics_bangla_maths', 'PhysicsController@physical_optics_Math');

 //modern physics
 Route::get('/modern_physics_bangla_shortquestions', 'PhysicsController@modern_physics_SQ');
 Route::get('/modern_physics_bangla_mcqs', 'PhysicsController@modern_physics_MCQ');
 Route::get('/modern_physics_bangla_maths', 'PhysicsController@modern_physics_Math');

 //electronics
 Route::get('/electronics_bangla_shortquestions', 'PhysicsController@electronics_SQ');
 Route::get('/electronics_bangla_mcqs', 'PhysicsController@electronics_MCQ');
 Route::get('/electronics_bangla_maths', 'PhysicsController@electronics_Math');

 //astronomy
 Route::get('/astronomy_bangla_shortquestions', 'PhysicsController@astronomy_SQ');
 Route::get('/astronomy_bangla_mcqs', 'PhysicsController@astronomy_MCQ');
 Route::get('/astronomy_bangla_maths', 'PhysicsController@astronomy_Math');

 //atom
 Route::get('/atom_bangla_shortquestions', 'PhysicsController@atom_SQ');
 Route::get('/atom_bangla_mcqs', 'PhysicsController@atom_MCQ');
 Route::get('/atom_bangla_maths', 'PhysicsController@atom_Math');


 });

