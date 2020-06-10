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
                <div class="card-header text-success"> <h2 > Newtonian Mechanics</h2></div>
               <div class="card-body">
                <h4 class="font-weight-bold text-primary">জ্ঞানমূলক প্রশ্নোত্তর </h4>
                @foreach ($sqs as $sq)
                 <!--Short Question-->
                <div class="card border-success w-100">
                    <div class="card-body">
                      
                    <h3 class="card-text text-success">{{$sq->question}}</h3>
                    <h4 id="sq">উত্তর: </h4>
                    <div class="row justify-content-between">
                        <div class="col-4">
                          <ul>
                           <a onclick="Seeansswer()" class="btn btn-success text-white">উত্তর শিখ</a>
                          </ul>
                        </div>
                        <div class="col-4">
                            <ul>
                                <a onclick="Clearanswer()" class="btn btn-success text-white">পুনরায় চেষ্টা কর</a>
                            </ul>
                          
                        </div>
                       </div>
                
                    </div>
                </div>
                 <script>
                     function Seeansswer(){
                         
                        document.getElementById('sq').innerHTML="উত্তর: "+"{{$sq->answer}}";
                
                     }
                    </script>
                    <script>
                     function Clearanswer(){
                         
                         document.getElementById('sq').innerHTML="উত্তর: ";
                
                      }
                    </script>
                
                @endforeach
                {{$sqs->links()}} 
                <p class="text-danger font-weight-bold">Try to answer on your own.Stuck?? Don't worry. We've got your back.Hit the answer button and learn the answer.Hit "Try Again" button to repeat.</p> <hr >
                
                

            </div>
        </div>
    </div>
</div>
</div> 
@endsection