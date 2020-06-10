@extends('layouts.app_top')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn-floating btn-large blue" href="{{route('home')}}"> <i class=" fa fa-home"></i> </a> <hr>
        
            <div class="card">
                <div class="card-header text-danger" style="font-family: Comic Sans MS"> <h1> Higher Mathematics ACTIVITY </h1>  <small class="text-info font-weight-bold">English Version</small></div>
                @if (auth::user()->role=="admin" || auth::user()->version=="English") 
             <div class="card-body">
                @if(count($posts)>0)
                 @foreach ($posts as $post)
                 <div class="card-panel green accent-3 w-100">
                  <div class="card-title font-weight-bold black-text" style="font-family: Comic Sans MS"><h5>{{$post->title}}</h5></div>
                  <div class="card-body black-text">
                    <p class="card-text">{!!$post->body!!}</p> <hr>
                    <small style="font-family: Verdana">Posted at: {{$post->created_at}}</small>
                    </div>
                    @if (auth::user()->role=="admin")
                 <div class="card-footer bg-transparent border-danger">
                    
                    <div class="row">
                        <div class="col-5">
                         
                     </div>
                     
                     <div class="col-3"> 
                       <a href="/Posts/{{$post->id}}/edit" class="btn btn-primary"> EDIT Post</a> 
                     </div>
                     <div class="col-3"> 
                       <form action="/Posts/{{$post->id}}" method="POST">
                        @csrf
                         {{method_field('DELETE')}}
                         <button class="btn btn-warning" type="submit">DELETE Post </button>
                        </form> 
                     </div>
                    </div>

                 </div>
                 @endif
                
                  </div>
                  <hr style="height:2px;border-width:0;color:gray;background-color:red">
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