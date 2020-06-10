@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
            <div class="card">
                <div class="card-header text-success"> <h2 > Edit Your Submission</h2></div>
               <div class="card-body">
                <form action="/Submissions/{{$submission->id}}" method="POST">
                    @method('PUT')
                    @csrf
                    <label for="name" class="text-success font-weight-bold" required >Name</label><br>
                     <input class="col-5" type="text" id="name" name="name" placeholder="Type Your Formal Name" value="{{$submission->name}}"><hr>
                    <label for="email" class="text-success font-weight-bold">E-Mail</label><br>
                    <input class="col-5" id="email" name="email" type="email" placeholder="Type Your Own Mail Address" value="{{$submission->email}}" required><hr>
                    <label for="phone" class="text-success font-weight-bold">Telephone</label><br>
                    <input class="col-5" type="tel" id="phone" name="phone" placeholder="01XXX NNNNNN" value="{{$submission->phone}}"  required><hr>

                    <label for="method" class="text-success font-weight-bold">Select Your Payment Method</label><br>
                    <select name="method" class="col-5" id="method" >
                      <option ></option>
                      <option value="bKash" class="list-group-item list-group-item-primary">bKash</option>
                      <option value="Rocket" class="list-group-item list-group-item-primary">Rocket</option>
                      <option value="Nogod" class="list-group-item list-group-item-primary">নগদ</option>
                    </select> <br>
                    
                    @error('method')
                    <div class="alert alert-danger" role="alert">
                    {{$errors->first('method')}} 
                    </div>
                    @enderror 
                    
                    <hr>
                    <label for="TrXId" class="text-success font-weight-bold" required >TrXID</label><br>
                    <input class="col-5" type="text" id="TrXId" name="TrXId" placeholder="Give Transaction Id" value="{{$submission->bkash}}" required><hr>
                  
                    <label for="version" class="text-success font-weight-bold">Select Your Version</label><br>
                    <select name="version" class="col-5" id="version">
                      <option ></option>
                      <option value="English" class="list-group-item list-group-item-primary">English Version</option>
                      <option value="Bangla" class="list-group-item list-group-item-primary">Bangla Version</option>
                    </select> <br>
                    
                    @error('version')
                    <div class="alert alert-danger" role="alert">
                    {{$errors->first('version')}} 
                    </div>
                    @enderror 
                    <hr>

                    <label for="apply" class="text-success font-weight-bold">Select Submission Type</label><br>
                    <select name="apply" class="col-5" id="req">   
                      <option ></option>               
                      <option value="First" class="list-group-item list-group-item-primary">First Time Submission</option>
                      <option value="Renewal" class="list-group-item list-group-item-primary">Renewal</option>
                    </select> 
                    <br>
                    
                    @error('apply')
                    <div class="alert alert-danger" role="alert">
                    {{$errors->first('apply')}}  
                    </div> <br>
                    @enderror 
                    
                    
                    <hr style="height:2px;border-width:0;color:gray;background-color:green">
                    <input type="submit" class="btn btn-success" value="EDIT">
                
                </form>
               </div>
            </div>
        </div>
    </div>
</div> 
 @endsection