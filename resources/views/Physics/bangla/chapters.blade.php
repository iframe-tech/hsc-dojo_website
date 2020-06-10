@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
               <a class="btn btn-primary" href="{{route('home')}}">Go To Home</a> 
            <hr>
            <div class="card">
                <div class="card-header text-info font-weight-bold"> <h2 >পদার্থবিজ্ঞান প্রথম পত্র (বাংলা)</h2></div>
                @foreach ($firsts as $first)
                     <div class="card bg-success text-white" >
                            <div class="card-title text-center">
                                <h3 style="font-family: Comic Sans MS">{{$first->title}}</h3>
                            </div>

                            <div class="card-body">

                                <div class="row">
                                    <div class="col align-self-start">
                                        <a href="{{$first->route[0]}}" class="btn btn-primary" >Short Question</a>
                                    </div>
                                    <div class="col align-self-center">
                                     <a href="{{$first->route[1]}}" class="btn btn-primary"> Multiple Choice</a>
                                    </div>
                                    <div class="col align-self-end">
                                     <a href="{{$first->route[2]}}"  class="btn btn-primary">Numerical Question</a>
                                    </div>
                                </div>
                            </div>

                     </div>
                 @endforeach
                 {{$firsts->links()}}
                 <hr style="height:2px;border-width:0;color:gray;background-color:blue">

                   
            </div>
               <p class="bottom-three"></p>
            <div class="card">
                <div class="card-header text-info font-weight-bold"> <h2 >পদার্থবিজ্ঞান দ্বিতীয় পত্র (বাংলা)</h2></div>
               
                @foreach ($seconds as $second)
                <div class="card bg-danger text-white" >
                       <div class="card-title text-center">
                           <h3 style="font-family: Comic Sans MS">{{$second->title}}</h3>
                       </div>

                       <div class="card-body">
                           <div class="row">
                               <div class="col align-self-start">
                                   <a href="{{$second->route[0]}}" class="btn btn-primary" >Short Question</a>
                               </div>
                               <div class="col align-self-center">
                                <a href="{{$second->route[1]}}" class="btn btn-primary"> Multiple Choice</a>
                               </div>
                               <div class="col align-self-end">
                                <a href="{{$second->route[2]}}"  class="btn btn-primary">Numerical Question</a>
                               </div>
                           </div>
                       </div>

                </div>
            @endforeach
            {{$seconds->links()}}
            <hr style="height:2px;border-width:0;color:gray;background-color:red">


                   
            </div>
        </div>
    </div>
</div>
</div> 


@endsection 