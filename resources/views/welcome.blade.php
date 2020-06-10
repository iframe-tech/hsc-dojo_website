<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Welcome to dojo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
       

        <!-- Styles -->
        <!--Materialize -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

             .links > a {
                color: rgb(255, 251, 251);
                padding: 100px;
                font-size: 18px;
                font-weight: 800;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
             } 
              .bottom-three {
                   margin-bottom: 3cm;
                }  
                .column {
                    float: left;
                    width: 50%;
                    padding: 5px;
                }


               .row::after {
                   content: "";
                   clear: both;
                   display: table;
                }  
                @media screen and (max-width: 500px) {
                      .column {
                                width: 100%;
                        } 
                }

           
        </style>
    </head>
    <body>
            
                <div class="jumbotron text-center green">
                         
                          <h1 class="black-text font-weight-bold display-4" >HSC-dojo</h1>      
                            <p class="text-white font-weight-bold  lead">HSC শ্রেণীর পড়াশোনা এবং ভর্তি প্রস্তুতির জন্য একটি আধুনিক প্লাটফর্ম</p>
        
                            @if (Route::has('login'))
                            <div class="top-right links">
                                @auth
                                    <a  href="{{ url('/home') }}">Home</a>
                                @else
                                    <a  href="{{ route('login') }}">Login</a>
            
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                     </div>
        
        <div class="container">
      
            <div class="card-deck">
           

           
           
                <div class="card text-white bg-primary mb-3" style="width: 18rem;">
                
                    <img class="card-img-top" src="image/brand/dashbord.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">User Dashboard</h5>
                      <p class="card-text">Go to the member Dashboard and start using the tools to learn effectively.</p>
                      <a href="{{ route('home') }}" class="btn btn-outline-light">Go</a>
                    </div>
                </div> 
                <div class="card text-white bg-success mb-3" style="width: 18rem;">
                    <img class="card-img-top" src="image/brand/demo.jpg" alt="Card image cap">
                     <div class="card-body">
                      <h5 class="card-title">Built in Practice Platform </h5>
                      <p class="card-text">Try out some of our innovative tools to make firm preparation for you Exam</p>
         
                     <a href="{{url('/demo')}}" class="btn btn-outline-light">Try the Demo</a>

                </div> 
             </div> 
             
             <div class="card text-white bg-danger mb-3" style="width: 18rem;">
                <img class="card-img-top" src="image/brand/blog.jpg"   alt="blog">
                <div class="card-body">
                 <h5 class="card-title">Blog </h5>
                 <p class="card-text">High quality study materials for free</p>
                 
                <a href="{{route('Blog List')}}" class="btn btn-outline-light">Go to BLOG</a> 
                </div> 
             
            </div> 
             
            </div>
            
            <p class="bottom-three"></p>
             <div class="card-panel">
                 <div class="text-center">
                     <img src="image/brand/why hsc dojo.png"  class="img-fluid" alt="Why HSC-dojo" height="300" >
             
                 </div>
             </div>
             <p class="bottom-three"></p>

             <div class="card-panel">
               
                    <div class="row">
                        <div class="column">
                                  <img src="image/brand/crash_physics_math.jpg"  class="img-fluid" alt="Why HSC-dojo" height="800" style="width:100%">
                        </div>
                        <div class="column">
                                  <img src="image/brand/Discount.jpg" class="img-fluid"  alt="Why HSC-dojo" height="800" style="width:100%">
                        </div>
                    </div>
               
            </div>

             
             <p class="bottom-three"></p>
              <!--form card -->
            <div class="card-panel">
                <div class="card-title green-text"> <h2 class="font-weight-bold text-center" style="font-family: Comic Sans MS" > Transaction Id Submission Form </h2>
                    <p class="text-danger font-weight-bold text-center ">After Sending Tk 599 (on 60% off) to the number 01838660303 (Personal Number), fill the following fields and press submit </p>
                    <hr style="height:2px;border-width:0;color:gray;background-color:green">
                </div>
               <div class="card-body">
                   
                   <br>
                   <form action="/Submissions" method="POST" >
                    @csrf
                    <!--Name-->

                    <div class="input-field  " >  
                       <i class="material-icons prefix">account_circle</i>
                       <label for="name" class="text-success font-weight-bold"  required >Name </label>
                       <input  type="text"  id="name" name="name" value="{{old('name')}}" placeholder="Type Your Formal Name">
                        <br> <br>
                    </div>
                    <!--email-->
                    <div class="input-field ">
                          <i class="material-icons prefix">contact_mail</i>
                          <input  id="email" name="email" type="email" value="{{old('email')}}" placeholder="Type Your Own Mail Address" required>
                        <label for="email" class="text-success font-weight-bold"> E-Mail</label> <br> <br>
                    </div>
                    <!--phone-->
                    <div class="input-field">
                        <i class="material-icons prefix">contact_phone</i>
                        <input  type="tel" id="phone" name="phone" value="{{old('phone')}}" placeholder="01XXX NNNNNN"  required>
                        <label for="phone" class="text-success font-weight-bold">  Telephone</label> <br> <br>
                    </div>

                    <!-- method -->
                    <div class="input-field "> 
                    <i class="material-icons prefix">credit_card</i>
                     <select name="method" id="method" >
                        <option ></option>
                        <option value="bKash">bKash</option>
                        <option value="Rocket">Rocket</option>
                        <option value="Nogod">নগদ</option>
                     </select> 
                          <label for="method" class="text-success font-weight-bold ">  Select Your Payment Method</label>
                    </div>
                   
                    
                    @error('method')
                    <div class="alert alert-danger" role="alert">
                    {{$errors->first('method')}} 
                    </div>
                    @enderror 
                    <br>
                    <!--TrXId-->
                    <div class="input-field "> 
                        <i class="material-icons prefix">attach_money</i>                   
                        <input  type="text" id="TrXId" name="TrXId" value="{{old('TrXId')}}" placeholder="Give Transaction Id" required>
                        <label for="TrXId" class="text-success font-weight-bold" required >  TrXID</label><br> <br>
                    </div>  
                   
                    <!-- version -->
                    <div class="input-field "> 
                        <i class="material-icons prefix">school</i>
                        
                        <select name="version"  id="version" >
                              <option></option>
                              <option value="English" class="list-group-item list-group-item-primary">English Version</option>
                              <option value="Bangla" class="list-group-item list-group-item-primary">Bangla Version</option>
                        </select> 
                        <label for="version" class="text-success font-weight-bold"> Select Your Version</label><br>
                    </div>
                     
                    @error('version')
                    <div class="alert alert-danger" role="alert">
                    {{$errors->first('version')}} 
                    </div>
                    @enderror 
                    
                    <br>

                    <!-- apply -->
                    <div class="input-field "> 
                        <i class="material-icons prefix">list</i>
                        <select name="apply"  id="req" >
                            <option></option>
                            <option value="First" > First Time Submission</option>
                            <option value="Renewal" >Renewal</option>
                        </select> 
                        <label for="apply" class="text-success font-weight-bold">Select Submission Type</label><br>
                    </div>
                    
                    @error('apply')
                    <div class="alert alert-danger" role="alert">
                    {{$errors->first('apply')}}  
                    </div> <br>
                    @enderror 
                    
                    
                    
                    <hr style="height:2px;border-width:0;color:gray;background-color:green">
                    <input type="submit" class="btn btn-success" value="SUBMIT">
                
                </form>
                 <hr>
                <a href="/waiting_list" class="btn btn-dark">Check Your Submission</a>
                 </div>

            </div>



            <p class="bottom-three"></p>
            
      
        <div class="media ">
            <img src="image/brand/hsc-dojo.png" class="align-self-start mr-3" width="200" height="200" alt="Logo of eEDU">
            <div class="media-body">
           <h5 class=" font-weight-bold text-success" style="font-family: Comic Sans MS">About HSC-dojo</h5>
           <p style="font-family:verdana"> HSC-dojo is a project of Studio T as a part of their mission to produce high quality education-tools to enhance the quality of the science education system of Bangladesh and make science students more competitive to meet the need of modern world. </p>
          <p style="font-family:verdana">HSC-dojo is a gathering of some gifted and highly renowned instructors who have years of experience of mentoring students in admission arena all over the country accompanied by the talened software developer team of Studio T to ensure pleasant and easy user experience.</p>
          </div>
        </div>   
    </div> 
    
    <!--footer-->
    <footer class="page-footer  green">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
                
                   <h1 class=" black-text" style="font-family: Comic Sans MS"><b> HSC-dojo</b> </h1>
                   <ul >
                    <li ><h2>We arrange programs on</h2></li> <br>
                    <li style="font-family:verdana">  &#9755; HSC crash course (usual duration 2 months)  </li>
                    <li style="font-family:verdana"> &#9755; HSC foundation course (usual duration 5 months) </li>
                    <li style="font-family:verdana"> &#9755; Engineering admission preparation </li>
                    <li style="font-family:verdana"> &#9755; University admission preparation</li>
                    <li style="font-family:verdana"> &#9755; Medical admission preparation </li>
                  </ul>
                      <br> <br>
                      <strong style="font-family: Comic Sans MS">We collect email and phone number to enable students to use our platform; We never store any kind of user data and after each program we erase all their credentials permanently </strong>
                  
            </div>
            <div class="col 12 offset-l2 s12">

                <ul>
                    <li><a class="btn-floating btn-large pink lighten-2 " target="_blank" href="https://www.instagram.com/hscdojo"><i class="fa fa-instagram"></i></a></li> <br>
                    <li><a class="btn-floating btn-large blue darken-4 " target="_blank" href="https://www.facebook.com/hscdojo"><i class="fa fa-facebook"></i></a></li> <br>
                    <li><a class="btn-floating btn-large btn-success " target="_blank" href="https://wa.me/8801838660303"><i class="fa fa-whatsapp"></i></a></li> <br>
                    <li><a class="btn-floating btn-large red " target="_blank" href="https://www.facebook.com/hscdojo"><i class="material-icons">message</i></a></li> <br>
                    <li><a class="btn-floating btn-large indigo " target="_blank" href="mailto:hscdojo.bd@gmail.com?subject=website inquiry"><i class="material-icons">mail</i></a></li> <br>
                    <li><a class="btn-floating btn-large red darken-4 " target="_blank" href="https://www.youtube.com/channel/UCc0C7a3xN1vIBl80GiTUrFQ"><i class="fa fa-youtube"></i></a></li>
    
                  </ul>

            </div>
          </div>
        </div>
        <div class="footer-copyright white-text">
          <div class="container text-center">
          <h5>© 2020 All Rights Reserved By Studio T</h5>

          </div>
        </div>
    </footer>

        <script>
               document.addEventListener('DOMContentLoaded', function()
                {
                var version = document.querySelectorAll('select');
                var instances1 = M.FormSelect.init(version);
                });

                   
        </script>
            
 <!-- Optional JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    
   
    </body>
</html>
