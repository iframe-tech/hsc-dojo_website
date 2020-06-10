@extends('layouts.app_top')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
        
            <div class="card-panel ">
                <div class="card-title text-center text-success"> 
                    <h3 class="font-weight-bold" style="font-family: Comic Sans MS"> <i class="prefix material-icons">lock_open</i> HSC-dojo demo</h3>
                    <strong class="text-info">Try out some of our features for free</strong>
                </div>
                
                <!--Physics 1st paper Bangla -->
               <div class="card-body">
                <div class="card-panel teal text-white ">
                    <div class="card-title font-weight-bold"><h4> ভেক্টর ( বহুনির্বাচনী প্রশ্ন)</h4></div>
                       <div class="card-body" style="font-family: Comic Sans MS">
                        বহুনির্বাচনী প্রশ্নোত্তর আয়ত্ত এবং অনুশীলন এর জন্য আয়োজন 
                       </div>
                       
                        <a href="{{url('/vector_bangla_mcqs')}}" class="btn btn-dark"> Try Out </a>  

                    </div> 
                    <p class="bottom-three"></p>
                    <hr style="height:2px;border-width:0;color:gray;background-color:teal">
                    <p class="bottom-three"></p>

                 <!--Physics 2nd paper Bangla -->
               
                <div class="card-panel green accent-4 text-white">
                    <div class="card-title font-weight-bold"><h4 > তাপগতিবিদ্যা (জ্ঞানমূলক প্রশ্ন) </h4></div>
                       <div class="card-body" style="font-family: Comic Sans MS">
                          জ্ঞানমূলক প্রশ্নোত্তর আয়ত্ত এবং অনুশীলন এর জন্য আয়োজন  
                       </div>
                       <a href="{{url('/thermodynamics_bangla_shortquestions')}}" class="btn btn-dark"> Try Out </a>  
                    </div> 
                    <p class="bottom-three"></p>
                 <hr style="height:2px;border-width:0;color:gray;background-color:cyan">
                 <p class="bottom-three"></p>
                 <div class="card-panel blue-grey darken-4 text-white">
                    <div class="card-title font-weight-bold"><h4 > পরিমাপ (গাণিতিক প্রশ্ন)</h4></div>
                       <div class="card-body" style="font-family: Comic Sans MS">
                          গাণিতিক সমস্যা অনুশীলনের জন্য আয়োজন
                       </div>
                       <a href="{{url('/measurement_bangla_maths')}}" class="btn btn-dark"> Try Out</a>  
                    </div> 
                    <p class="bottom-three"></p>
                 <hr style="height:2px;border-width:0;color:gray;background-color:#263238">
                  <p class="bottom-three"></p>
                  <strong style="color: teal"> To access all the tools, please try out our premium service!! </strong>
                  <p class="bottom-three"></p>
            </div>
        </div>
    </div>
</div>
</div> 
@endsection