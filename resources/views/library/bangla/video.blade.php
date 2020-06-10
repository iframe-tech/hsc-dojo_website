@extends('layouts.app_top')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn-floating btn-large blue" href="{{route('home')}}"> <i class=" fa fa-home"></i> </a> <hr>
        
            <div class="card">
                <div class="card-header font-weight-bold" style="font-family: Comic Sans MS; color: #006064"> <h1> Video LIBRARY </h1>  <small class="text-info font-weight-bold">Bangla Version</small></div>
                @if (auth::user()->role=="admin" || auth::user()->version=="Bangla") 
             <div class="card-body">
                @if(count($posts)>0)
                 @foreach ($posts as $post)
                 <div class="card-panel white w-100">
                  <div class="card-title font-weight-bold black-text" style="font-family: Comic Sans MS"><h5>{{$post->title}}</h5></div>
                  <div class="card-body black-text">
                    <p class="card-text">{!!$post->body!!}</p> <hr>
                    <small style="font-family: Verdana">Posted at: {{$post->created_at}}</small>
                    </div>
              
                
                  </div>
                  <hr style="height:2px;border-width:0;color:gray;background-color:black">
                 @endforeach
                 {{$posts->links()}}
                 @else 
                  <h4 class="text-danger">No Posts Yet</h4>
                 @endif

              </div>
              @endif
        </div>
    </div>
</div>
 @endsection