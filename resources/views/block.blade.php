@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          <!-- Admin Table -->
          
          <a class="btn btn-primary" href="{{route('home')}}">Go To Home</a> <hr>
          @error("status")
          <div class="alert alert-danger" role="alert">
          {{$errors->first("status")}}
          </div>
          @enderror 

            <div class="card">
             
                <div class="card-header"><h3 class="text-danger">Admins</h3></div>
                
               
                <table class="table" >
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                        
                        
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($admins as $admin)
                      <tr>
                        <th scope="row">{{$admin->id}}</th>
                        <td>{{$admin->name}}</td>
                        <td>{{$admin->email}}</td>
                        <td>{{$admin->status}}</td>
                       
                      </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
               
        </div> <br>
        <hr style="height:2px;border-width:0;color:gray;background-color:green">
         <!-- Maintainer table-->
        <div class="card">
             
          <div class="card-header"><h3 class="text-danger">Database Maintainer</h3></div>
          
         
          <table class="table" >
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                  
                  
                </tr>
              </thead>
              <tbody>
                  @foreach ($maintainers as $maintainer)
                <tr>
                  <th scope="row">{{$maintainer->id}}</th>
                  <td>{{$maintainer->name}}</td>
                  <td>{{$maintainer->email}}</td>
                  <td>{{$maintainer->status}}</td>
                  <td>
                    <form action="Users/{{$maintainer->id}}" method="POST" >
                    @csrf
                    @method('PUT')
                    <select name="status" id="status">
                      <option ></option>
                      <option value="active">Active</option>  
                      <option value="blocked">Block</option>
                      <input type="submit" class="btn btn-primary"  value="Submit">
                    </select>
                    </form>                       
                    </td> 
                    <td>
                      <div class="col-3"> 
                          <form action="/Users/{{$maintainer->id}}" method="POST">
                           @csrf
                           {{method_field('DELETE')}}
                           <button class="btn btn-warning" type="submit">DELETE</button>
                          </form> 
                  </td>
                
                </tr>
                 
                </tr>
                @endforeach
                
              </tbody>
            </table>
         
  </div> <br>
  <hr style="height:2px;border-width:0;color:gray;background-color:green">
 
           <!--USER TABLE -->

            <div class="card">
                <!-- Active Users -->
                <div class="card-header"><h3 class="text-danger">Active Users</h3></div>
                
               
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Version</th>
                        <th scope="col" >Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($activeusers as $activeuser)
                      <tr >
                        <th scope="row">{{$activeuser->id}}</th>
                        <td>{{$activeuser->name}}</td>
                        <td>{{$activeuser->email}}</td>
                        <td>{{$activeuser->version}}</td>
                        <td >{{$activeuser->status}}</td>
                          
                        <td>
                        <form action="Users/{{$activeuser->id}}" method="POST" >
                        @csrf
                        @method('PUT')
                        <select name="status" id="status">
                          <option ></option>
                          <option value="active">Active</option>  
                          <option value="blocked">Block</option>
                          <input type="submit" class="btn btn-primary"  value="Submit">
                        </select>
                        </form>                       
                        </td> 
                       
                        
                        <td>
                            <div class="col-3"> 
                                <form action="/Users/{{$activeuser->id}}" method="POST">
                                 @csrf
                                 {{method_field('DELETE')}}
                                 <button class="btn btn-warning" type="submit">DELETE</button>
                                </form> 
                        </td>
                      
                      </tr>
                      @endforeach
                      
                    </tbody>
   
                  </table>
                  {{$activeusers->links()}}
                  <hr style="height:2px;border-width:0;color:gray;background-color:green"> 
              <!--- Blocked User -->

              <div class="card-header"><h3 class="text-danger">Blocked Users</h3></div>
                
               
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Version</th>
                        <th scope="col" >Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($blockedusers as $blockeduser)
                      <tr >
                        <th scope="row">{{$blockeduser->id}}</th>
                        <td>{{$blockeduser->name}}</td>
                        <td>{{$blockeduser->email}}</td>
                        <td>{{$blockeduser->version}}</td>
                        <td >{{$blockeduser->status}}</td>
                          
                        <td>
                        <form action="Users/{{$blockeduser->id}}" method="POST" >
                        @csrf
                        @method('PUT')
                        <select name="status" id="status">
                          <option ></option>
                          <option value="active">Active</option>  
                          <option value="blcoked">Block</option>
                          <input type="submit" class="btn btn-primary"  value="Submit">
                        </select>
                        </form>                       
                        </td> 
                      
                        <td>
                            <div class="col-3"> 
                                <form action="/Users/{{$blockeduser->id}}" method="POST">
                                 @csrf
                                 {{method_field('DELETE')}}
                                 <button class="btn btn-warning" type="submit">DELETE</button>
                                </form> 
                        </td>
                    
                      </tr>
                      @endforeach
                     
                      
                    </tbody>
                   
                  </table>
                  {{$blockedusers ->links()}}
              
              
              
            </div>

    </div>
</div>

@endsection
