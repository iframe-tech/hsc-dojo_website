@extends('layouts.app_top')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row">
                <div class="col align-self-start">
                  <a class="btn-floating btn-large blue" href="{{route('home')}}"> <i class=" fa fa-home "></i> </a> 
                  
                </div>
                
                <div class="col align-self-end">
                  <a class="btn-floating btn-large teal" href="{{route('forum.index')}}"> <i class=" material-icons ">forum</i> </a> 
                  
                </div>
            </div> 
            <hr style="height:2px;border-width:0;color:gray;background-color:DarkCyan">
        

            <div class="card-panel  deep-orange lighten-1">
             <div class="card-title text-primary text-center ">
                    <h2 class="text-white font-weight-bold" style="font-family: Comic Sans MS">General Inquiry</h2>
             </div>
                 <div class="card-body">
                    @if(count($questions)>0)
                     @foreach($questions as $question)
                      <div class="card-panel border-primary">
                          
                            <p><b style="font-family: Comic Sans MS"> Topic:</b> {{$question->topic}} </p>
                            <p> <b style="font-family: Comic Sans MS">Title:</b> {{$question ->title}}</p>
                            <strong class="text-primary"> {{$question->question}} </strong> <br>
                            <small class="text-danger font-weight-bold">By: {{$question->user->name}} (Created at: {{$question->created_at}} )</small>
                          @if(auth::user()->role=="admin")
                              <form action="/forum/{{$question->id}}" method="POST">
                                 @csrf
                                 {{method_field('DELETE')}}
                                 <button class="btn btn-warning" type="submit">DELETE</button>
                              </form>
                          @endif
                            <hr style="height:2px;border-width:0;color:gray;background-color:DarkCyan">

                             <strong class="text-primary" style="font-family: Comic Sans MS">ANSWER:</strong> 
                             {!!$question->answer!!}
                          
                            
                            @if(auth::user()->role=="admin")
                              <h5>{{$question->id }}</h5>
                              @if(session()->has('message'))
                                <div class="alert alert-success" role="alert">
                                  {{session()->get('message')}}
                                </div>
                              @endif

                             <form action="Answers/{{$question->id}}" method="POST" >
                                @csrf
                                {{method_field('PUT')}}
                                <label for="answer" class="text-dark font-weight-bold"> <h3> Answer</h3></label>
                                <textarea type="text" class="form-control" rows="5" id="answer" name="answer" autocomplete="off" >  </textarea> <br>
                               <input type="submit" class="btn btn-dark" value="EDIT"><hr>
                             </form> 
                           @endif 
                           
                         
                          </div>
                      <br>
                        @endforeach 
                        <div class="container">
                            {{$questions->links()}}
                        </div>
                     
                     @else
                     <h5 class="font-weight-bold text-center black-text"> You have not asked any question yet</h5>
                     @endif

                    </div>
        </div>
    </div>
</div> 
 @endsection