@extends('layouts.app')

@section('content')
<div class="container">

  @error("comment")
          <div class="alert alert-danger" role="alert">
          {{$errors->first("comment")}}
          </div>
  @enderror
  <a class="btn btn-primary" href="{{route('home')}}">Go To Home</a> <hr> 

    <div class="row justify-content-center">
          <!-- Request Table -->
          @if(auth::user()->role=="admin" || auth::user()->role=="maintainer")
            <div class="card">
                <div class="card-header"> <h4 class="text-success font-weight-bold"> First Time Request</h4></div>
                
               
                <table class="table" >
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">phone</th>
                        <th scope="col">bkash</th>
                        <th scope="col">version</th>
                        <th scope="col">submission type</th>
                        <th scope="col">Date</th>
                        <th scope="col">Comment</th>
                        <th>Action 1</th>
                        <th>Action 2</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($firsts as $first)
                      <tr>
                        <th scope="row">{{$first->id}}</th>
                        <td>{{$first->name}}</td>
                        <td>{{$first->email}}</td>
                        <td>{{$first->phone}}</td>
                        <td>{{$first->bkash}}</td>
                        <td>{{$first->version}}</td>
                        <td>{{$first->submission_type}}</td>
                        <td>{{$first->created_at}}</td>
                        <td>{{$first->comment}}</td>
                        <td>
                          <form action="Comments/{{$first->id}}" method="POST" >
                            @csrf
                            @method('PUT')
                            <select name="comment" id="comment">
                              <option value=""></option>
                              <option value="ok">Ok</option>  
                              <option value="TrXID not received">TrxID not received</option>
                              <option value="Invalid Input">Invalid Input</option>
                              <input type="submit" class="btn btn-primary"  value="Submit">
                            </select>
                          </form>                       
                        </td>
                        <td>
                             
                                <form action="/Submissions/{{$first->id}}" method="POST">
                                 @csrf
                                 {{method_field('DELETE')}}
                                 <button class="btn btn-warning" type="submit">DELETE</button>
                                </form> 
                        </td> 
                       
                      </tr>
                      @endforeach
                      {{$firsts->links()}}
                    </tbody>
                  </table>
               
                  <hr style="height:2px;border-width:0;color:gray;background-color:blue">
                  
         <div class="card">
          <div class="card-header"> <h4 class="text-success font-weight-bold"> Renewal Request</h4></div>
          
         
          <table class="table" >
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">phone</th>
                  <th scope="col">method</th>
                  <th scope="col">TrXId</th>
                  <th scope="col">version</th>
                  <th scope="col">submission type</th>
                  <th scope="col">Date</th>
                  <th scope="col">Comment</th>
                  <th>Action 1</th>
                  <th>Action 2</th>
              
                </tr>
              </thead>
              <tbody>
                  @foreach ($renewals as $renewal)
                <tr>
                  <th scope="row">{{$renewal->id}}</th>
                  <td>{{$renewal->name}}</td>
                  <td>{{$renewal->email}}</td>
                  <td>{{$renewal->phone}}</td>
                  <td>{{$renewal->method}}</td>
                  <td>{{$renewal->TrXId}}</td>
                  <td>{{$renewal->version}}</td>
                  <td>{{$renewal->submission_type}}</td>
                  <td>{{$renewal->created_at}}</td>
                  <td>{{$renewal->comment}}</td>
                  <td>
                      <form action="Comments/{{$renewal->id}}" method="POST" >
                      @csrf
                      @method('PUT')
                      <select name="comment" id="comment">
                        <option value=""></option>
                        <option value="ok">Ok</option>  
                        <option value="TrXID not received">TrxID not received</option>
                        <option value="Invalid Input">Invalid Input</option>
                        <input type="submit" class="btn btn-primary"  value="Submit">
                      </select>
                      </form>                       
                  </td>
                  <td>
                       
                          <form action="/Submissions/{{$renewal->id}}" method="POST">
                           @csrf
                           {{method_field('DELETE')}}
                           <button class="btn btn-warning" type="submit">DELETE</button>
                          </form> 
                  </td> 
                
                </tr>
                @endforeach
                {{$renewals->links()}}
              </tbody>
            </table>
         
   <br>
          
               @else 
               <h1 class="text-danger">Hello Student!!! This is not your place. We dont know how you get trace of it. Also we do not want to know. <br> Get back to your study. Let us take care of this page.</h1>  
               @endif  
            </div>
            

         
    </div>
</div>

@endsection
