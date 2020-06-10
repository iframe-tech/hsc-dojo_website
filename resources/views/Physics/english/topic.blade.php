@extends('layouts.app_top')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">           
              <a class="btn-floating btn-large blue" href="{{route('home')}}"> <i class=" fa fa-home"></i> </a>
          <hr>   
             
                   <div class="card-panel grey">

                         <div class="container">
                         <h3 class="text-white" style="font-family: Comic Sans MS"> Hello, {{auth::user()->name}}</h3>
                         <h4 style="color:black; font-family: Comic Sans MS"><i class="prefix material-icons ">sentiment_very_dissatisfied</i> We are very sorry!! We have not arranged practice section for English version yet. We are working on it.</h4>
                         <p class="bottom-three"></p>
                         <ul class="collection with-header">
                            <li class="collection-header"><h4>For English Version, we have</h4></li>
                            <li class="collection-item">Weekly "to the point" lecture video (completely in English).</li>
                            <li class="collection-item">24/7 problem solving (completely in English)</li>
                            <li class="collection-item">Weekly exam and solution discussion(completely in English)</li>
                            <li class="collection-item">Advanced lecture and assignment (completely in English)</li>
                          </ul>
                          <p class="bottom-three"></p>
                          <h4 style="color: #4a148c; font-family: Comic Sans MS"><i class="prefix material-icons">free_breakfast</i> Also you can access practice arrangements for Bangla Version anytime for free!! <a href="/Physics_bangla" >here</a> </h4>
                          <p class="bottom-three"></p>
                         </div>


                   </div>

        
                   


          <hr style="height:2px;border-width:0;color:gray;background-color:#00c853">
  </div>

          <!-- end tabs -->


    
        </div>
    </div>
</div>

</div>


</div> 



@endsection 