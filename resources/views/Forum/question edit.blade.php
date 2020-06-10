@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row">
                <div class="col align-self-start">
                  <a class="btn btn-primary" href="{{route('home')}}">Go To Home</a> 
                </div>
                
                <div class="col align-self-end">
                  <a class="btn btn-primary" href="{{route('forum.index')}}">Go To Forum</a> 
                </div>
            </div> 
            <hr style="height:2px;border-width:0;color:gray;background-color:black">
        

            <div class="card">
             <div class="card-header text-dark ">
                    <h2 class="font-weight-bold"> Edit Your Answer</h2>
             </div>
                  <div class="card-body">
                    
                    @if(auth::user()->role=="admin")
                            <form action="Answers/{forum}" method="POST" >
                                @csrf
                                {{method_field('PUT')}}
                                <label for="answer" class="text-dark font-weight-bold"> <h3> Answer</h3></label>
                                <textarea type="text" class="form-control" rows="5" id="answer" name="answer" autocomplete="off" > </textarea> <br>
                               <input type="submit" class="btn btn-dark" value="EDIT"><hr>
                            </form> 
                    @endif 
               
                 </div>
        </div>
    </div>
</div> 
 @endsection