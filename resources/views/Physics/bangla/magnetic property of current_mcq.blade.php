@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="row">
                
                    <div class="col align-self-start">
                      <a class="btn btn-primary" href="{{route('home')}}">Go To Home</a> 
                    </div>
                    <div class="col align-self-center">
                        <a class="btn btn-primary" href="{{url('/blog_list')}}">Go To Lessons</a> 
                     </div>
                    <div class="col align-self-end">
                       <a class="btn btn-primary" href="{{url('/Physics_bangla_tools')}}">Chapter List</a> 
                    </div>
                </div> <hr>
            <div class="card">
                <div class="card-header text-success"> <h2 >Magnetic Property of Current</h2></div>
               <div class="card-body">
                <h4 class="text-bold text-primary">বহুনির্বাচনী প্রশ্ন</h4>
                @foreach($mcqs as $mcq)
                   <div class="card border-success w-100">
                       <div class="card-body">
                           @if($mcq->image!=null)
                       <img src="{{$mcq->image}}" class="img-fluid" height="300" width="300"  alt="No Photo">
                       @endif
                        <h3 class="card-text text-success text-bold">{!!$mcq->question!!}</h3>
                        <div id="options">
                           @csrf
                           <input type="radio" id="r1" name="rate" value="A"> {{$mcq->A}} <br>
                           <input type="radio" id="r2" name="rate" value="B"> {{$mcq->B}} <br>
                           <input type="radio" id="r3" name="rate" value="C"> {{$mcq->C}} <br>
                           <input type="radio" id="r4" name="rate" value="D"> {{$mcq->D}} <br>
                           <p><button onclick="Check()" class="btn btn-success"> Submit</button>
                        </div>
                       </div>
                   </div> 
                   <h2 class="card-text text-primary text-bold" id ="mcq">Result: </h2>
                   <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#explain" aria-expanded="false" aria-controls="collapseExample">
                       View  Explanation
                     </button> <br>
                     <div class="collapse" id="explain">
                       <div class="card border-success card-body">
                           @if($mcq->Explanation != null)
                          {!!$mcq->Explanation !!}
                          @else 
                          <p class="text-danger font-weight-bold">No Explanation Available Here. Sorry!</p>
                          @endif 
                     </div>
                     </div>
                   <script>
                       function Check() {
                          if (document.getElementById('r1').checked) {
                         x = document.getElementById('r1').value;
                       }
                       else  if (document.getElementById('r2').checked) {
                          x = document.getElementById('r2').value;
                       } 
                       else  if (document.getElementById('r3').checked) {
                          x = document.getElementById('r3').value;
                       } 
                       else  if (document.getElementById('r4').checked) {
                          x = document.getElementById('r4').value;
                       } 
                       
                       switch(x){
                       case "A":
                        if(x!="{{$mcq->CorrectAnswer}}") {document.getElementById('mcq').innerHTML="Result: Incorrect";}
                                          
                        else {document.getElementById('mcq').innerHTML="Result: Correct";}
                        break;
                        case "B":
                        if(x!="{{$mcq->CorrectAnswer}}") {document.getElementById('mcq').innerHTML="Result: Incorrect";}
                                          
                        else {document.getElementById('mcq').innerHTML="Result: correct";}
                        break;
                        case "C":
                        if(x!="{{$mcq->CorrectAnswer}}") {document.getElementById('mcq').innerHTML="Result: Incorrect";}
                                          
                        else {document.getElementById('mcq').innerHTML="Result: correct";}
                        break;
                        case "D":
                        if(x!="{{$mcq->CorrectAnswer}}") {document.getElementById('mcq').innerHTML="Result: Incorrect";}
                                          
                        else {document.getElementById('mcq').innerHTML="Result: correct";}
                        break;
                     
                       }
                     
                       }
                     </script>
                @endforeach
                {{$mcqs->links()}} 
            

            </div>
        </div>
    </div>
</div>
</div> 
@endsection