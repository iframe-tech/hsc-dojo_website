@extends('layouts.app_top')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            <a class="btn-floating btn-large blue" href="{{route('home')}}"> <i class=" fa fa-home"></i> </a> <hr>
   

          @if(session()->has('message'))
            <div class="alert alert-success" role="alert">
             {{session()->get('message')}}
            </div>
          @endif
      <!-- Question Submission -->

            <div class="card teal accent-1">
             <div class="card-header black-text text-center ">
                    <h3 class="font-weight-bold" style="font-family: Comic Sans MS"><i class="prefix material-icons"> question_answer</i> Ask Your Question</h3>
             </div>
                 <div class="card-body">
                    @error('topic')
                    <div class="alert alert-danger" role="alert">
                    {{$errors->first('topic')}} 
                    </div>
                    @enderror 

                    @error('title')
                    <div class="alert alert-danger" role="alert">
                    {{$errors->first('title')}} 
                    </div>
                    @enderror 

                    @error('question')
                    <div class="alert alert-danger" role="alert">
                    {{$errors->first('question')}} 
                    </div>
                    @enderror 

                    @error('subject')
                    <div class="alert alert-danger" role="alert">
                    {{$errors->first('subject')}} 
                    </div>
                    @enderror 

                    <form action="/forum" method="POST">
                      @csrf
                     <div class="input-field">
                        <i class="prefix material-icons">info</i> 
                        <label for="topic" class="black-text font-weight-bold">Add Topic</label> 
                        <input class="col-10"type="text" id="topic" autocomplete="off" name="topic">
                        <hr style="height:0.5px;border-width:0;color:gray;background-color:black">
                     </div>
                      
                     <div class="input-field"> 
                        <i class="prefix material-icons">note_add</i> 
                       <label for="topic" class="black-text font-weight-bold">  Add Title</label> 
                       <input class="col-10" type="text" id="title" autocomplete="off" name="title">
                       <hr style="height:0.5px;border-width:0;color:gray;background-color:black">
                     </div>
                     
                     
                       <label for="question" class="black-text  font-weight-bold"><h5> <i class="material-icons prefix">description </i> Write Your Question</h5>  
                        <small class="text-danger">Clean and Concise</small></label>
                       <textarea type="text" class="form-control" rows="5" id="question" name="question" autocomplete="off"></textarea>
                       <hr style="height:0.5px;border-width:0;color:gray;background-color:black">
                  

                     <div class="input-field col-5">
                        <i class="material-icons prefix">library_add </i>
                        <label for="subject" class="black-text font-weight-bold">Select Subject</label><br>
                        <select name="subject" id="subject">
                        <option ></option>
                        <option value="Physics" class="list-group-item list-group-item-primary">Physics</option>
                        <option value="Math" class="list-group-item list-group-item-primary">Math</option>
                        <option value="Technique" class="list-group-item list-group-item-primary">Strategy Discussion / Study Techniques</option>
                         <option value="General_Query" class="list-group-item list-group-item-primary">Ask General Query</option>
                      </select> 
                    </div>
                      
                      <br><br>
                
                     <input type="submit" class="btn black text-white" value="ASK">
                     <hr style="height:2px;border-width:0;color:gray;background-color:DarkCyan">
            
                     </form>
                 </div>
                </div> <br>
                 <!-- Forum List-->
                 <hr style="height:2px;border-width:0;color:gray;background-color:DarkCyan">
                 <p class="bottom-three"></p>

                <div class="card-panel ">
                    <div class="card-title black-text text-center ">
                      <h3 class="font-weight-bold" style="font-family: Comic Sans MS"> <i class="prefix material-icons">format_list_bulleted</i> Browse Question-Answer </h3>
                    </div>
                    <div class="card-body ">

                        <ul class="collection ">
                            
                            <li class="collection-item"><div style="color:green ;font-size:130%; font-weight:bold">PHYSICS  <a href="/forum_physics" class="secondary-content"><i class="material-icons ">send</i></a></div></li>
                            <li class="collection-item"><div style="color:red ;font-size:130%; font-weight:bold">HIGHER MATHEMATICS<a href="/forum_math" class="secondary-content"><i class="material-icons">send</i></a></div></li>
                            <li class="collection-item"><div style="color:blue ;font-size:130%;font-weight:bold">EXAM STRATEGY & PREPARATION<a href="/forum_preparation" class="secondary-content"><i class="material-icons">send</i></a></div></li>
                            <li class="collection-item"><div style="color:#ff4000  ;font-size:130%;font-weight:bold ">GENERAL INQUIRY<a href="/forum_query" class="secondary-content"><i class="material-icons">send</i></a></div></li>
                        </ul>

                    </div>
                    

                </div> <br>

                <script>
                    document.addEventListener('DOMContentLoaded', function()
                     {
                     var version = document.querySelectorAll('select');
                     var instances1 = M.FormSelect.init(version);
                     });
     
                        
             </script>
                <hr style="height:2px;border-width:0;color:gray;background-color:DarkCyan">
                <p class="bottom-three"></p>

                <div class="card-panel teal ">
                    <div class="card-title  text-center font-weight-bold" >
                           <h3 class="font-weight-bold text-white text-center" style="font-family: Comic Sans MS"><i class="prefix material-icons">search</i> Your Questions</h3>
                    </div>
                        @if($forums->count()>0)
                         <div class="card-body">
                            @foreach($forums as $forum)
                             <div class="card-panel border-primary">
                                 
                                   <p><b style="font-family: Comic Sans MS"> Topic:</b> {{$forum->topic}} </p>
                                   <p> <b style="font-family: Comic Sans MS">Title:</b > {{$forum ->title}}</p>
                                   <strong class="text-primary"> {{$forum->question}} </strong> <br>
                                  
                                         <form action="forum/{{$forum->id}}" method="POST">
                                         @csrf
                                         {{method_field('DELETE')}}
                                         <button class="btn btn-warning" type="submit">DELETE</button>
                                         </form>                         

                                   <hr style="height:2px;border-width:0;color:gray;background-color:DarkCyan">
                                       
                                       {!!$forum->answer!!}
                                 </div>
                                     <br>
                             @endforeach 
                             <div class="container">
                                  {{$forums->links()}}
                             </div>
                            
                          
                             
                           

                        @else <h5 class="font-weight-bold text-center black-text"> You have not asked any question yet</h5>
                        @endif
       
            </div>
        </div>
    </div>
</div> 
 @endsection