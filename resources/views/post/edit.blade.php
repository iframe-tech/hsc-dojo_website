@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <a class="btn btn-primary" href="{{route('home')}}">Go To Home</a> <hr>
        
            <div class="card">
                <div class="card-header text-success"> <h2 > Create Posts and Announcements</h2></div>
               <div class="card-body">
               <form action="/Posts/{{$post->id}}" method="POST">
                    @method('PUT')
                    @csrf
                    <label for="title" class="text-success font-weight-bold">Add Title</label> <hr>
                <input class="col-10"type="text" id="title" value="{{$post->title}}" name="title"><hr>
                    <label for="body" class="text-success font-weight-bold">Add Post-Body</label>
                    <p class="text-danger font-weight-bold ">Do not Forget to put HTML tags</p>
                <textarea type="text" class="form-control" rows="4"  id="body" name="body">{{$post->body}}</textarea><hr>
                    <label for="subject" class="text-success font-weight-bold">Select Announcement Type</label><br>
                    <select name="subject" class="col-5" id="subject">
                        <option value="Physics_English" class="list-group-item list-group-item-primary">Physics English Version</option>
                        <option value="Physics_Bangla" class="list-group-item list-group-item-primary">Physics Bangla Version</option>
                        <option value="Math_English" class="list-group-item list-group-item-primary">Math English Version</option>
                        <option value="Math_Bangla" class="list-group-item list-group-item-primary">Math Bangla Version</option>
                        <option value="Timeline" class="list-group-item list-group-item-primary">Timeline</option>
                        <option value="Question_English" class="list-group-item list-group-item-primary">Question English Version</option>
                        <option value="Question_Bangla" class="list-group-item list-group-item-primary">Question Bangla Version</option>
                    </select> <hr>


                     <!--Category-->
                     <label for="category" class="text-success font-weight-bold">Select Category</label><br>
                     <select name="category" class="col-5"id="category">
                       <option value="Video_English" class="list-group-item list-group-item-primary">Video English Version</option>
                       <option value="Video_Bangla" class="list-group-item list-group-item-primary">Video Bangla Version</option>
                       <option value="pdf_English" class="list-group-item list-group-item-primary">pdf English Version</option>
                       <option value="pdf_Bangla" class="list-group-item list-group-item-primary">pdf Bangla Version</option>
                       <option value="Solve_English" class="list-group-item list-group-item-primary">Question-solve English Version</option>
                       <option value="Solve_Bangla" class="list-group-item list-group-item-primary">Question-solve Bangla Version</option>
                     </select> <hr>
                    <input type="submit" class="btn btn-success" value="Broadcast">
                
                </form>
               </div>
            </div>
        </div>
    </div>
</div> 
 @endsection