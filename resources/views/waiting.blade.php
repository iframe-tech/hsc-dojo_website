@extends('layouts.app_top')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if(session()->has('message'))
            <div class="alert alert-success" role="alert">
                {{session()->get('message')}}
              </div>
            @endif

            
            <div class="card">
                <div class="card-header text-success"> <h1>Waiting List</h1></div>
                
               
                <table class="table" >
                    <thead>
                      <tr>
                        
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Version</th>
                        <th scope="col">Submission Type</th>
                        <th scope="col">Method</th>
                        <th scope="col">Comment</th>
                        <th scope="col">action</th>
                        
                        
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($applications as $application)
                      <tr>
                        
                        <td>{{$application->name}}</td>
                        <td>{{$application->email}}</td>
                        <td>{{$application->version}}</td>
                        <td>{{$application->submission_type}}</td>
                        <td> {{$application->method}}</td>
                        <td>{{$application->comment}}</td>
                        <td>
                            <a href="/Submissions/{{$application->id}}/edit" class="btn btn-primary"> EDIT Submission</a>
                        </td>
                       
                      </tr>
                      @endforeach
                      {{$applications->links()}}
                    </tbody>
                  </table>
               
        </div> <br>
            
         

            
           
         
    </div>
</div>

@endsection
