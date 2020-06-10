@extends('layouts.app_top')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
        
            <div class="card-panel ">
                <div class="card-title text-center text-success"> 
                    <h3 class="font-weight-bold" style="font-family: Comic Sans MS"> <i class="prefix material-icons">book</i> HSC-dojo Blog</h3>
                    <strong class="text-info">High Quality Education Materials for Free</strong>
                </div>
                
                <!--Physics 1st paper Bangla -->
               <div class="card-body">
                <div class="card-panel teal text-white ">
                    <div class="card-title font-weight-bold"><h4> পদার্থবিজ্ঞান প্রথম পত্র </h4></div>
                       <div class="card-body" style="font-family: Comic Sans MS">
                          বিশেষজ্ঞ শিক্ষক মণ্ডলী প্রণীত পদার্থবিজ্ঞান প্রথম পত্রের (বাংলা ভার্সন) পাঠ সংকলন। <br>
                       </div>
                       
                        <a href="{{route('Blog Physics 1st Bangla')}}" class="btn btn-dark"> Let's Go to Blog </a>  

                    </div> 
                    <p class="bottom-three"></p>
                    <hr style="height:2px;border-width:0;color:gray;background-color:teal">
                    <p class="bottom-three"></p>

                 <!--Physics 2nd paper Bangla -->
               
                <div class="card-panel green accent-4 text-white">
                    <div class="card-title font-weight-bold"><h4 > পদার্থবিজ্ঞান দ্বিতীয় পত্র </h4></div>
                       <div class="card-body" style="font-family: Comic Sans MS">
                          বিশেষজ্ঞ শিক্ষক মণ্ডলী প্রণীত পদার্থবিজ্ঞান দ্বিতীয়  পত্রের (বাংলা ভার্সন) পাঠ সংকলন। 
                       </div>
                       <a href="{{route('Blog Physics 2nd Bangla')}}" class="btn btn-dark"> Let's Go to Blog </a>  
                    </div> 
                    <p class="bottom-three"></p>
                 <hr style="height:2px;border-width:0;color:gray;background-color:cyan">
                  <p class="bottom-three"></p>
                  <strong style="color: teal"> We are working very hard to post more and more great education materials for free!! Please Stay around.  </strong>
                  <p class="bottom-three"></p>
            </div>
        </div>
    </div>
</div>
</div> 
@endsection