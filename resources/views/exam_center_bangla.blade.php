<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1" shrink-to-fit="yes">
        <title>Examination Center Bangla</title>
        <!--materialize-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <style>
            #wrapper {
            text-align:center;
            width:450px;
            margin:25px auto;
            padding:25px;
            background-color:#004d40;
            color:#E6F9D2;
            position: relative;
            }

           #myTimer {
             font:50px Tahoma bold;
             padding:20px;
             display:block;
            }

          
        </style>
        
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{URL::asset('image/brand/hsc-dojo.png')}}" height="60" width="110" alt="{{ config('app.name', 'Laravel') }}">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
         <div class="row justify-content-center">
            <div class="col-md-8">
        @if(auth::user()->version=="Bangla" || auth::user()->role=="admin" )
                <h1 class=" font-weight-bold" style="color: #004d40">Exam Center (Bangla Version)</h1>
                <a class="btn-floating btn-large blue" href="{{route('home')}}"> <i class=" fa fa-home "></i> </a>
                <hr style="height:2px;border-width:0;color:gray;background-color:#004d40">
            <div class="row">
              
                  <h2 class="text-primary">Time Left(in hours)</h2>
             
              <div id="wrapper">
                <i class="medium material-icons">access_time</i>
              <div id="myTimer"></div>
              </div>
            </div>  
            <hr style="height:2px;border-width:0;color:gray;background-color:#004d40">
              <div class="card-body">
                @if(count($posts)>0)
                 @foreach ($posts as $post)
                 <div class="card border-success w-100">
                 <div class="card-header text-primary  bg-transparent border-success font-weight-bold">{{$post->title}}</div>
                    <div class="card-body text-success">
                      <p class="card-text">{!!$post->body!!}</p>
                    </div>
                    @if (auth::user()->role=="admin")
                    <div class="card-footer bg-transparent border-primary">
                        <div class="row">

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
                         @endif
                       </div>
                        </div>
                        <hr>
                 @endforeach
                 @else 
                  <h4 class="text-danger">Not an Examination Day</h4>
                 @endif

              </div>
                @endif
        </main>       
        </div>
        </div>
        
   
    
        <footer class="page-footer  green">
            <div class="container">
              <div class="row">
                <div class="col l6 s12">
                    
                       <h2 class=" black-text" style="font-family: Comic Sans MS"><b> HSC-dojo</b> </h2>
                       <p class="text-white "> HSC-dojo is a project of Studio T as a part of their mission to produce high quality education-tools to enhance the quality of the science education system of Bangladesh and make science students more competitive to meet the need of modern world. </p>
                       <p class="text-white">HSC-dojo is a gathering of some gifted and highly renowned instructors who have years of experience of mentoring students in admission arena all over the country accompanied by the talened software developer team of Studio T to ensure pleasant and easy user experience.</p>
                      
                </div>
                <div class="col 12 offset-l2 s12">
    
                    <ul>
                        <li><a class="btn-floating btn-large pink lighten-2 " target="_blank" href="https://www.google.com"><i class="fa fa-instagram"></i></a></li> <br>
                        <li><a class="btn-floating btn-large blue darken-4 " target="_blank" href="#!"><i class="fa fa-facebook"></i></a></li> <br>
                        <li><a class="btn-floating btn-large btn-success " target="_blank" href="#!"><i class="fa fa-whatsapp"></i></a></li> <br>
                        <li><a class="btn-floating btn-large red " target="_blank" href="#!"><i class="material-icons">message</i></a></li> <br>
                        <li><a class="btn-floating btn-large indigo " target="_blank" href="#!"><i class="material-icons">mail</i></a></li> <br>
                        <li><a class="btn-floating btn-large red " target="_blank" href="#!"><i class="fa fa-youtube"></i></a></li>
        
                      </ul>
                </div>
              </div>
            </div>
            <div class="footer-copyright white-text">
              <div class="container">
              © 2020 All Rights Reserved By Studio T
    
              </div>
            </div>
        </footer>
           
    </div>
        <script>
            var sec = 1.5*60*60;
            var myTimer = document.getElementById('myTimer');
           
            window.onload=countDown;
            function countDown() {
                
                hour=Math.floor(sec/3600);
                min= Math.floor(((sec-hour*3600))/60);
                second=sec-hour*3600-min*60;
            
                myTimer.innerHTML =hour+"h "+min+"min "+second+"sec";
             
              if(sec <= 0){
            
                myTimer.innerHTML = "Time Up!";
              }
              if (sec >0 && sec<10) {
                myTimer.innerHTML = "Wrap Up Quickly!";
              }
              sec -= 1;
              window.setTimeout(countDown, 1000);
            }
        </script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
  </body>
</html>
