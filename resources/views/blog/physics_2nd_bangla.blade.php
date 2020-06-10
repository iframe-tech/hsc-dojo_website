<!DOCTYPE html>
  <html>
    <head>
        <title>Physics 2nd Paper</title>

      <!--Import Google Icon Font-->


      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!--Bootstrap-->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
		crossorigin="anonymous">
      <style>
        body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
        }

        main {
         flex: 1 0 auto;
       }
       .bottom-three {
                   margin-bottom: 1.5cm;
                }

      </style>
    </head>

    <body>


      <!-- Navbar -->
      <nav>
        <div class="nav-wrapper teal darken-2">
         <div class="container">
               <a href="{{ url('/') }}" class="brand-logo"> <b> HSC-dojo</b></a>
               <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
             <ul class="right hide-on-med-and-down">
                <li><a href="{{url('/blog_list')}}">Blog List</a></li>
                <li><a href="badges.html">Free Demo</a></li>
                
             </ul>
          </div>
        </div>
      </nav>
    
      <ul class="sidenav" id="mobile-demo">
        <li> <h5 style="color:teal">Links</h5> </li>
        <li><a href="{{url('/blog_list')}}">Blog List</a></li>
        <li><a href="{{ url('/home') }}">Home</a></li>
        <li><a href="{{ url('/') }}">Welcome</a></li>
        
        
      </ul>

      <!-- Blog Menu -->
    <div class="container">
        <p class="bottom-three"></p>
      <div class="row">
        <div class="col-3">
            <div class="container bg-dark text-white text-center ">
                <br>
            <h6 class="align-center">উচ্চ মাধ্যমিক পদার্থবিজ্ঞান <br></h6>
            <h6 text-align="center">(দ্বিতীয় পত্র)</h6>
            <br>
            <!--list starts from here-->
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link  active"  data-toggle="pill" href="#thermo" role="tab" aria-controls="thermo" aria-selected="true"> তাপগতিবিদ্যা </a>
            <a class="nav-link"  data-toggle="pill" href="#static_electricity" role="tab" aria-controls="static_electricity" aria-selected="false">স্থির তড়িৎ </a>
            <a class="nav-link"  data-toggle="pill" href="#current_electricity" role="tab" aria-controls="current_electricity" aria-selected="false">চল তড়িৎ </a>

            <a class="nav-link"  data-toggle="pill" href="#magnetic_properties_of_current" role="tab" aria-controls="magnetic_properties_of_current" aria-selected="false"> তড়িৎ প্রবাহের চৌম্বক ক্রিয়া ও চুম্বকত্ব </a>
            <a class="nav-link"  data-toggle="pill" href="#magnetic_induction" role="tab" aria-controls="magnetic_induction" aria-selected="false"> তাড়িতচৌম্বকীয় আবেশ ও পরিবর্তী প্রবাহ</a>
            <a class="nav-link"  data-toggle="pill" href="#Geometrical_Optics" role="tab" aria-controls="Geometrical_Optics" aria-selected="false"> জ্যামিতিক আলোকবিজ্ঞান</a>
            <a class="nav-link"  data-toggle="pill" href="#physical_Optics" role="tab" aria-controls="physical_Optics" aria-selected="false"> ভৌত আলোকবিজ্ঞান</a>
            <a class="nav-link"  data-toggle="pill" href="#Introduction_to_Modern_physics" role="tab" aria-controls="Introduction_to_Modern_physics" aria-selected="false"> আধুনিক পদার্থবিজ্ঞানের সূচনা</a>
            <a class="nav-link"  data-toggle="pill" href="#nuclear_physics" role="tab" aria-controls="nuclear_physics" aria-selected="false">পরমাণুর মডেল এবং নিউক্লিয়ার পদার্থবিজ্ঞান</a>
            <a class="nav-link"  data-toggle="pill" href="#semiconductor" role="tab" aria-controls="semiconductor" aria-selected="false">সেমিকন্ডাক্টর ও ইলেক্ট্রনিক্স </a>
            <a class="nav-link"  data-toggle="pill" href="#astrophysics" role="tab" aria-controls="astrophysics" aria-selected="false">জ্যোতির্বিজ্ঞান  </a> <br> <br> <br>

          </div>
        </div>
    </div>
        <div class="col-9">
          <div class="tab-content" id="v-pills-tabContent">
              <!-- thermodynamics -->
            <div class="tab-pane fade show active" id="thermo" role="tabpanel" aria-labelledby="thermo-tab">

              <h3 class="text-danger">Lesson 1:</h3>  <br>
              <b> তাপমাত্রার বিভিন্ন স্কেলঃ</b> <br>

               <table class="table table-striped table-danger">

                  <tr>
                    <th>স্কেল</th>
                    <th>সেলসিয়াস(°C)</th>
                    <th>ফারেনহাইট(°F)</th>
                    <th>কেলভিন (K)</th>
                    <th>র‌্যাংকিন(\(°R_n\))</th>
                    <th>রোমার(°R)</th>
                    </tr>
                    <tr>
                      <th>নিম্ন স্থিরবিন্দু</th>
                      <th>0</th>
                      <th>32</th>
                      <th>273</th>
                      <th>492</th>
                      <th>0</th>
                    </tr>
                    <tr>
                      <th>উর্ধ্ব স্থিরবিন্দু</th>
                      <th>100</th>
                      <th>212</th>
                      <th>373</th>
                      <th>672</th>
                      <th>80</th>
                    </tr>
                  </table><br>
                 <b>স্কেলগুলোর মধ্যে সম্পর্কঃ</b><br><br>
                 <h5 class="text-primary font-weight-bold">\(\frac{C}{5}=\frac{F-32}{9}=\frac{K-273}{5}=\frac{Rn-492}{9}=\frac{R}{4} \)</h5>
                 C=সেলসিয়াস , F=ফারেনহাইট ,K=কেলভিন , Rn=র‌্যাংকিন, R=রোমার <br><br>

                 <b>তাপমাত্রা নির্ণয়ঃ</b><br>
                  <b>১। এক স্থির বিন্দু (ত্রৈধবিন্দু) পদ্ধতিঃ</b><br><br>
                  <h5 class="text-primary font-weight-bold">\(\frac{T}{T_{tr}}=\frac{X_T}{X_{tr}} \)</h5><br>
                  \(T\)=নির্ণেয় তাপমাত্রা(কেলভিন স্কেলে)<br>
		  \(T_{tr}\)=ত্রৈধবিন্দুতে তাপমাত্রা (কেলভিন স্কেলে)<br>	
                  \(X_T\)= T তাপমাত্রায় তাপমিত্রিক ধর্ম <br>
                  \(X_{tr}\)=ত্রৈধবিন্দুতে তাপমিত্রিক ধর্ম <br><br>

                  <b>২। দুই স্থির বিন্দু পদ্ধতিঃ</b><br><br>
                  <h5 class="text-primary font-weight-bold">\(\theta=\frac{X_\theta-X_{ice}}{X_{steam}-X_{ice}}\)</h5><br>
                  \(\theta\)=নির্ণেয় তাপমাত্রা (সেলসিয়াস স্কেলে)<br>
                  \(X_\theta\)=\(\ \theta°\)-এ তাপমাত্রিক ধর্ম <br>
                  \(X_{ice}\)=\(0°\)-এ তাপমাত্রিক ধর্ম <br>
                  \(X_{steam}=100°\)-এ তাপমাত্রিক ধর্ম <br><br>

                  <b>তাপগতিবিদ্যার শূন্যতম সূত্রঃ</b>দুটি বস্তু তৃতীয় কোন বস্তুর সাপেক্ষে তাপীয় সাম্যাবস্থায় থাকলে প্রথমোক্ত বস্তুদ্বয় পরস্পরের সাথে তাপীয় সাম্যাবস্থায় থাকবে। <br><br>
                  <b>তাপগতিবিদ্যার প্রথম সূত্রঃ</b><br>
                  <b>জুল মতবাদঃ </b> যখন কাজ সম্পূর্ণরূপে তাপে বা তাপ সম্পূর্ণরূপে কাজে পরিণত হয়,তখন কাজ ও তাপ পরস্পরের সমানুপাতিক। <br>
                  <h5  class="text-primary font-weight-bold">\(W\propto H\)</h5> W=সম্পাদিত কাজ, H=তাপ <br>
                   W=JH, J=তাপের যান্ত্রিক তুল্যাংক=4.2 J/cal <br><br>
                   <b>ক্লসিয়াস মতবাদঃ </b> কোন সিস্টেম কর্তৃক গৃহীত বা বর্জিত তাপ ঐ সিস্টেমের অভ্যন্তরীণ শক্তির পরিবর্তন এবং
                                                           সিস্টেম কর্তৃক বা সিস্টেমের উপর সম্পাদিত কাজের পরিমাণের সমষ্টির সমান।<br><br>
                   <h5 class="text-primary font-weight-bold">\(dQ=dU+dW\) </h5><br>
                   dQ=গৃহীত বা বর্জিত তাপ <br>
                   dU=অন্তঃস্থ শক্তির পরিবর্তন <br>
                   dW=সম্পাদিত কাজের পরিমাণ <br><br>

                   <b>বিভিন্ন তাপগতীয় পরিবর্তনঃ</b><br>
                   <b>১। সমচাপ প্রক্রিয়াঃ </b> এ তাপগতীয় প্রক্রিয়ায় চাপের পরিবর্তন হয় না অর্থাৎ ∆P=0 <br>
                                                            সম্পাদিত কাজ,<h5 class="text-primary font-weight-bold">\(W=PdV=P(V_2-V_1)\)</h5>
                   dV=আয়তন পরিবর্তন <br>
                   <h5 class="text-primary font-weight-bold">\(\therefore dQ=dU+PdV\)</h5> <br>
                   <div class="text-center">
                    <img src ="image/blog/CP2_1.1.png" height="20%" width="25%" class="img-fluid" alt="সমচাপ প্রক্রিয়া"/><br> <br><br>
                   </div>

                   <b>২। সমআয়তন প্রক্রিয়াঃ </b> এ তাপগতীয় প্রক্রিয়ায় আয়তনের পরিবর্তন হয়না অর্থাৎ ∆V=0 । এতে সম্পাদিত কাজের পরিমাণ শূন্য হয়। অর্থাৎ dW=0 <br>
                   <h5>\(\therefore dQ=dU\)</h5><br>

                   <div class="text-center">
                     <img src ="image/blog/CP2_1.2.png" height="20%" width="25%" class="img-fluid" alt="সমআয়তন প্রক্রিয়া"/><br> <br><br>
                   </div>

                   <b>৩। সমোষ্ণ প্রক্রিয়াঃ </b> যে প্রক্রিয়ায় চাপ ও আয়তনের পরিবর্তন হয় কিন্তু তাপমাত্রা স্থির থাকে অর্থাৎ dT=0। তাপমাত্রার পরিবর্তন না হওয়ায় অন্তঃস্থ শক্তির পরিবর্তন হয়না অর্থাৎ dU=0 <br>
                   <h5 style="text-align: center;">\(\therefore dQ=dW\)</h5> এটি বয়েলের সূত্রকে মেনে চলে। <br><br>

                                                  সমোষ্ণ প্রক্রিয়ায় কৃতকাজ, <h5>\[W=nRT\ln{\frac{V_2}{V_1}}\]</h5>

                  <div class="text-center">
                    <img src ="image/blog/CP2_1.3.png" height="20%" width="25%" class="img-fluid" alt="সমোষ্ণ প্রক্রিয়াা"/><br> <br><br>
                  </div>

                   <b>৪। রুদ্ধতাপীয় প্রক্রিয়াঃ </b> যে প্রক্রিয়ায় সিস্টেম ও পরিবেশের মধ্যে তাপের কোন আদান-প্রদান হয়না,অর্থাৎ dQ=0 <br><br>
                   <h5 style="text-align: center;">\(\therefore dQ=dU+dW=0\)</h5>
                   <h5 style="text-align: center;">\(\therefore dW=-dU\)</h5>
                                                          রুদ্ধতাপীয়ীয় প্রক্রিয়ায় কৃতকাজ,<h5>\(W=\frac{nR}{\gamma-1}(T_1-T_2)\)</h5>
                   <h5 class="text-primary font-weight-bold">\(W=\frac{1}{\gamma-1}(P_1V_1-P_2V_2)\)</h5>
                                                              রুদ্ধতাপীয়ীয় প্রক্রিয়ায় চাপ,আয়তন ও তাপমাত্রার সম্পর্ক,<h5 class="text-primary font-weight-bold">\(PV^\gamma\)=Constant,</h5>
                   <h5 class="text-primary font-weight-bold">\(P_1{V_1}^\gamma=P_2{V_2}^\gamma\)</h5>
                   <h5 class="text-primary font-weight-bold">\(TV^{\gamma-1}\)=Constant</h5>
                   <h5 class="text-primary font-weight-bold">\(T_1{V_1}^{\gamma-1}=T_2{V_2}^{\gamma-1}\)</h5>
                   <h5 class="text-primary font-weight-bold">\(TP^\frac{1-\gamma}{\gamma}\)=Constant</h5>
                   <h5 class="text-primary font-weight-bold">\(T_1{P_1}^\frac{1-\gamma}{\gamma}=T_2{P_2}^\frac{1-\gamma}{\gamma}\)</h5><br>

                   <b>গ্যাসের মোলার আপেক্ষিক তাপ (C):</b>1 mole পরিমান গ্যাসের তাপমাত্রা 1K বাড়াতে যে পরিমাণ তাপের প্রয়োজন হয় তাকে গ্যাসের মোলার আপেক্ষিক তাপ বলে। <br>
                   <h5>\(C=\frac{dQ}{ndT}\)</h5>
                   \(C_p\) = স্থির চাপে গ্যাসের মোলার আপেক্ষিক তাপ <br>
                   \(C_v\) = স্থির আয়তনে গ্যাসের মোলার আপেক্ষিক তাপ <br>
                   \(C_p > C_v\)  এবং \(C_p- C_v=R\) <br><br>
                   <h5 class="text-primary font-weight-bold">\(\gamma=\frac{C_p}{C_v}\)</h5><br>
                   <h1 style="font-size:115%">এক পরমাণুক গ্যাসের জন্য, \(\gamma=\frac{5}{3}\)=1.66 <br>
                   দ্বি পরমাণুক গ্যাসের জন্য, \(\gamma=\frac{7}{5}\)=1.4 <br>
                   বহু পরমাণুক গ্যাসের জন্য, \(\gamma=\frac{4}{3}\)=1.33 <br></h1><br>
			সাধারণভাবে বলা যায়, \(\gamma=\frac{f+2}{f}\) ; এখানে \(f\)= স্বাধীনতার মাত্রা <br><br>

                   <b>তাপগতিবিদ্যার দ্বিতীয় সূত্রঃ</b><br>
                   <b>ক্লসিয়াস মতবাদঃ </b> বহিঃস্থ কোন উৎসের সহায়তা ছাড়া কোন স্বয়ংক্রিয় মেশিনের পক্ষে নিম্ন তাপমাত্রার বস্তু থেকে উচ্চ তাপমাত্রার বস্তুতে তাপশক্তির স্থানান্তর সম্ভব নয়। <br>
                   <b>কেলভিন মতবাদঃ </b> পরিবেশের শীতলতম বস্তুর চেয়ে অধিক শীতল কোন জড় বস্তুর পক্ষে যান্ত্রিক শক্তির সরবরাহ সম্ভব নয়। <br>
                   <b>প্লাংক মতবাদঃ </b> এমন কোন তাপ ইঞ্জিন নির্মাণ সম্ভব নয় যা কোন বস্তু হতে অনবরত তাপ শোষণ করে তাকে সম্পূর্ণরূপে কাজে পরিণত করবে অথচ যন্ত্রের কার্যপ্রণালির কোন পরিবর্তন হবেনা। <br>
                   <b>কার্ণো মতবাদঃ </b> কোন নির্দিষ্ট পরিমাণ তাপ শক্তিকে সম্পূর্ণরূপে যান্ত্রিক শক্তিতে রূপান্তরে সক্ষম এমন যন্ত্র নির্মাণ সম্ভব নয়। <br>
                   <b>প্রত্যাবর্তী প্রক্রিয়া ও অপ্রত্যাবর্তী প্রক্রিয়াঃ </b> যে প্রক্রিয়া বিপরীতমুখী হয়ে প্রত্যাবর্তন করে তাকে প্রত্যাবর্তী প্রক্রিয়া এবং যে প্রক্রিয়া বিপরীতমুখী হয়ে প্রত্যাবর্তন করে না তাকে অপ্রত্যাবর্তী প্রক্রিয়া বলে।প্রত্যাবর্তী প্রক্রিয়া ধীর প্রক্রিয়া,পক্ষান্তরে অপ্রত্যাবর্তী প্রক্রিয়া দ্রুত প্রক্রিয়া। <br>
                   <b>কার্ণোর চক্রঃ </b> যে চক্রে কার্যকরী পদার্থ নির্দিষ্ট আয়তন,চাপ ও তাপমাত্রা হতে শুরু করে একটি সমোষ্ণ প্রসারণ ও একটি রুদ্ধতাপীয়ীয় প্রসারণ এবং একটি সমোষ্ণ সংকোচন ও রুদ্ধতাপীয়ীয় সংকোচনের মাধ্যমে পূর্বাবস্থায় ফিরে আসে তাকে কার্ণোচক্র বলে। <br>

                  <div class="text-center">
                    <img src ="image/blog/CP2_1.4.png" height="90%" width="70%" class="img-fluid" alt="Carnot's Cycle"/><br> <br><br>
                  </div>

                   <b>তাপ ইঞ্জিনঃ </b> যে যন্ত্র তাপশক্তিতে যান্ত্রিক শক্তিতে রূপান্তরিত করে তাকে তাপ ইঞ্জিন বলে। <br><br>

                   <b>তাপ ইঞ্জিনের দক্ষতা বা কর্মদক্ষতাঃ</b>
                   <h5  class="text-primary font-weight-bold">দক্ষতা, \(\eta=\frac{W}{Q_1}\times100%=\frac{Q_1-Q_2}{Q_1}\times100%\)</h5>
                    W=কৃতকাজ, \(Q_1\)=গৃহীত তাপ, \(Q_2\)=বর্জিত তাপ <br>
                    যেহেতু, \(\frac{Q_2}{Q_1}=\frac{T_2}{T_1}\); <br>
                    \(T_1\)=তাপ উৎসের তাপমাত্রা <br>
                    \(T_2\)=তাপ গ্রাহকের তাপমাত্রা <br><br>

                    <b>রেফ্রিজারেটরঃ</b> যে যন্ত্রের সাহায্যে পরিবেশ অপেক্ষা কম তাপমাত্রা বা শীতলতার সৃষ্টি করা যায় তাকে হিমায়ক বা রেফ্রিজারেটর বলে। <br>
                    <b>রেফ্রিজারেটরের দক্ষতা বা কার্যগত সহগঃ</b> <br>
                    কার্যকৃত সহগ,<h5 class="text-primary font-weight-bold"> \(K=\frac{Q_2}{W}=\frac{Q_2}{Q_1-Q_2}\)</h5> <br>
                    \(Q_2\)=প্রতিচক্রে প্রকোষ্ঠ থেকে অপসারিত তাপ <br>
                    \(Q_1\)=প্রতিচক্রে পরিবেশে বর্জিত তাপ <br>
                    যেহেতু,<h5 class="text-primary font-weight-bold">\(\frac{Q_2}{Q_1}=\frac{T_2}{T_1}\) </h5>
                    <h5 class="text-primary font-weight-bold">\(\therefore K=\frac{T_2}{T_1-T_2}\)</h5><br>

                    <b>এন্ট্রপিঃ</b> এন্ট্রপি হচ্ছে সিস্টেমের বিশৃংখলার পরিমাপ। কোন সিস্টেমের শক্তি রূপান্তরের অক্ষমতা বা অপ্রাপ্ততাকে বা অসম্ভাব্যতাকে এন্ট্রপি বলে যা রুদ্ধতাপীয়ীয় প্রক্রিয়ায় স্থির থাকে। <br>
                     স্থির তাপমাত্রায় dQ তাপগ্রহণ বা বর্জন করলে এন্ট্রপির পরিবর্তন dS হয়,<br>
                     <h5  class="text-primary font-weight-bold">\(dS=\frac{dQ}{T}\) </h5> যেখানে , \(dQ=mL\) <br>
                     L=আপেক্ষিক সুপ্ততাপ <br>
                     তাপমাত্রা \(T_1\) থেকে বৃদ্ধি পেয়ে \(T_2\) হলে, <br>
                     এন্ট্রপির পরিবর্তন,  <h5 class="text-primary font-weight-bold"> \(dS=mS\ln{\frac{T_2}{T_1}}\)</h5>
              </div>



            <!--static electricity-->
            <div class="tab-pane fade" id="static_electricity" role="tabpanel" aria-labelledby="static_electricity-tab">
               <h3 class="text-danger">Lesson 1:</h3>  <br>
<b> কুলম্বের সূত্রঃ </b>   <br>
আমরা জানি দুইটি বিপরীত জাতীয় আধান পরস্পরকে আকর্ষণ করে আর সমজাতীয় আধান পরস্পরকে বিকর্ষন করে। দুটি আধানের মধ্যবর্তী এ আকর্ষণ বা বিকর্ষণ বলের মান নির্ভর করে, <br>
১. আধান দুটির পরিমানণের উপর। <br>
২. আধান দুটির মধ্যবর্তী দূরত্বের উপর। <br>
৩. আধান দুটি যে মাধ্যমে অবস্থান করে সেই মাধ্যমের প্রকৃতির উপর। <br> <br>
<strong >সূত্রঃ “নির্দিষ্ট মাধ্যমে দুটি আধানের মধ্যে ক্রিয়াশীল আকর্ষণ বা বিকর্ষণ বলের মান আধানদ্বয়ের গুণফলের সমানুপাতিক, এদের মধ্যবর্তী দূরত্বের বর্গের ব্যস্তানুপাতিক এবং এই বল আধানদ্বয়ের সংযোজক রেখা বরাবর ক্রিয়া করে” </strong> <br>
ধরা যাক, A ও B বিন্দুতে অবস্থিত দুটি আধানের পরিমাণ যথাক্রমে q1 ও  q2 এবং এদের মধ্যবর্তী দূরত্ব d
এদের মধ্যে ক্রিয়াশীল আকর্ষণ বা বিকর্ষণ বলকে স্থির তড়িৎ বল বা কুলম্ব বল বলে এবং এ বলের মান F হলে, কুলম্বের সূত্রানুসারে, <br> <br>
<div class="text-center">
  <img src ="image/blog/CP2_2.1.png" height="30%" width="30%" class="img-fluid" alt="কুলম্বের সূত্র"/><br> <br><br>
</div>



<h5>\(F\propto \frac{q_1q_2}{d^2} \)</h5> <br>
<h5>\(F=C \frac{q_1q_2}{d^2}\) </h5><br>
এখানে C একটি সমানুপাতিক ধ্রুবক যার মান রাশিগুলোর একক এবং বিন্দু আধানদ্বয়ের মধ্যবর্তী মাধ্যমের প্রকৃতির উপর নির্ভর করে। এ ধ্রূবক অনেক সময় কুলম্ব ধ্রুবক বলা হয়। <br>
<b> আধানের এককঃ কুলম্ব <br>
<p class="text-primary">সংজ্ঞাঃ কোন পরিবাহকের মধ্যদিয়ে এক এম্পিয়ার (1A) প্রবাহ এক সেকেন্ড (1s) চললে এর যেকোন প্রস্থচ্ছেদ দিয়ে যে পরিমাণ আধান প্রবাহিত হয় তাকে এক কুলম্ব (1C) বলে। </p> </b>
<b>শূন্যস্থানে কুলম্বের সূত্রঃ </b> <br>
এস. আই এককে বলকে নিউটন, দূরত্বকে মিটার এবং আধানকে কুলম্ব এ পরিমাণ করলে কুলম্বের সূত্র এর সমানুপাতিক ধ্রূবক এর মান শূন্যস্থানের জন্য পাওয়া যায়,
\(9 \times 10^9 \; Nm^2C^{-2}\) <br>

এস. আই পদ্ধতিতে এই সমানুপাতিক ধ্রূবককে  লেখা হয়, <br>
<h5 >\(C=\frac{1}{4 \pi \epsilon_o} \) </h5> <br>

শূন্যস্থানের জন্য কুলম্বের সূত্রের রূপ হল, <br>
<h5>\(F=\frac{1}{4 \pi \epsilon_o}\frac{q_1q_2}{d^2} \) <h5> <br>

<b>যেকোন মাধ্যমে কুলম্বের সূত্রঃ </b> <br>
মাধ্যমের যে তড়িৎ ধর্মের উপর এ বল নির্ভর করে তা হচ্ছে ভেদনযোগ্যতা । সুতরাং দুটি শূন্যস্থানের পরিবর্তে ভেদনযোগ্যতা বিশিষ্ট কোনো মাধ্যমে অবস্থিত হলে সমীকরণে এর পরিবর্তে হবে। ফলে কুলম্বের সূত্রের রূপ হবে, <br>
<h5>\(F_m=\frac{1}{4 \pi \epsilon}\frac{q_1q_2}{d^2} \) </h5><br>

<b>তড়িৎ মাধ্যমাঙ্কের সংজ্ঞাঃ </b> <br>
যেকোন দুটি আধানের মধ্যে নির্দিষ্ট দূরত্বে শূন্যস্থানে ক্রিয়াশীল বল এবং ঐ দুই আধানের মধ্যে ঐ একই দূরত্বে অন্যকোন মাধ্যমে ক্রিয়াশীল বলের অনুপাত একটি ধ্রুব সংখ্যা হয়। এ ধ্রুব সংখ্যাকে ওই মাধ্যমের তড়িৎ মাধ্যমাঙ্ক বলে।
একে K দ্বারা প্রকাশ করা হয়। <br>
ধরা যাক, <br> F = শূন্যস্থানে দুটি আধানের মধ্যকার বল। <br>
F<sub>m </sub> = যেকোন মাধ্যমে একই দূরত্বে ঐ দুই আধানের মধ্যকার বল <br>
K = ওই মাধ্যমের তড়িৎ মাধ্যমাঙ্ক <br>
 <h5>\(\therefore \; K=\frac{F}{F_m} \) </h5>
 <strong> তড়িৎ মাধ্যমাঙ্ক একই জাতীয় দুটি রাশির অনুপাত বলে এর কোনো একক নাই।</strong>  <br>
 তড়িৎ মাধ্যমাঙ্ককে ঐ মাধ্যমের আপেক্ষিক ভেদনযোগ্যতাও বলে। অনেক সময় <strong> \(\epsilon_r\)</strong> দ্বারা প্রকাশ করা হয়। <br>
যেকোন মাধ্যমে কুলম্বের সূত্রের সাধারণ রূপ হল, <br> <br>
 <h3 class="text-primary"> \(F=\frac{1}{4 \pi K \epsilon_o}\frac{q_1q_2}{d^2} \)</h3>

 <h3 class="text-danger">Lesson 2:</h3>  <br>
 <b>তড়িৎক্ষেত্রঃ</b> একটি আহিত বস্তুর চারদিকে যে অঞ্চল ব্যাপী তার প্রভাব বজায় থাকে অর্থাৎ অন্যকোন আহিত বস্তু আনা হলে সেটি আকর্ষণ বা বিকর্ষণ বল লাভ করে সেই অঞ্চলকে ঐ আহিত বস্তুর তড়িৎ বলক্ষেত্র বা তড়িতক্ষেত্র বলে।<br><br>
<b>তড়িৎক্ষেত্রের প্রাবল্য বা তীব্রতা বা সবলতাঃ</b> তড়িৎক্ষেত্রের কোন বিন্দুতে একটি একক ধনাত্মক পরখ আধান স্থাপন করলে যে বল অনুভব করে তাকে ঐ বিন্দুর তড়িতপ্রাবল্য বলে।<br>
তড়িৎক্ষেত্রের কোন বিন্দুওতে স্থাপিত +q পরখ আধান যদি F বল অনুভব করে তাহলে ঐ বিন্দুতে প্রাবল্যের মান হবে,<br>
<h5 class="text-primary font-weight-bold"> \( E = \frac{F}{q} \) </h5>
<div class="text-center">
  <img src ="image/blog/CP2_2.2.png" height="30%" width="30%" class="img-fluid" alt="তড়িৎক্ষেত্র"/><br> <br><br>
</div>

যেহেতু তড়িৎ প্রাবল্য হল একক ধনাত্মক পরখ আধানের উপর ক্রিয়াশীল বল, সুতরাং প্রাবল্যের দিক আছে এবং একটি ভেক্টর রাশি। একক ধনাত্মক পরখ আধান যেদিকে বল অনুভব করে তড়িৎ প্রাবল্যের দিক সে দিকে। <br><br>
<b>বিন্দু আধানের দরুন তড়িৎ প্রাবল্যের রাশিমালাঃ</b><br>
ধরা যাক, K তড়িৎ মাধ্যমাঙ্ক বিশিষ্ট কোন মাধ্যমে A বিন্দুতে একটি ধনাত্মক আধান +q অবস্থিত। এই আধান থেকে r দূরত্বে অবস্থিত P একটি বিন্দু। <br>
+q চার্জটি শূন্যস্থান বা বায়ু মাধ্যমে স্থাপিত হলে তড়িৎ মাধ্যমাঙ্ক K এর মান 1 ধরা হয়। সেক্ষেত্রে তড়িৎ প্রাবল্য হবে, <br>
<div class="text-center">
  <img src ="image/blog/CP2_2.3.png" height="30%" width="30%" class="img-fluid" alt="িন্দু আধানের দরুন তড়িৎ প্রাবল্য"/><br> <br><br>
</div>


<h5 class="text-primary font-weight-bold"> \( E=\frac{1}{4 \pi \epsilon_o}\frac{q}{r^2} \) </h5>

<b>দিকঃ</b> E একটি ভেক্টর রাশি। এর দিক হবে A ও P বিন্দুর সিংযোজক সরলরেখা বরাবর। q ধনাত্মক হলে বহির্মুখী অর্থাৎ PB বরাবর আর  q  ঋনাত্নক হলে অন্তর্মূখী অর্থাৎ PA বরাবর। কোনো স্থানে একাধিক বিন্দু আধান স্থাপিত হলে সকল আধান কর্তৃক সৃষ্ট তড়িৎক্ষেত্রের কোন বিন্দুতে লব্ধি প্রাবল্য নির্ণয়ের জন্য প্রদত্ত বিন্দুতে প্রতিটি আধানের জন্য পৃথক পৃথকভাবে তড়িৎ প্রাবল্য নির্ণয় করে তাদের ভেক্টর সমষ্টি নির্ণয় করতে হবে। কোন বিন্দুতে \(q_1,q_2,q_3,…\)  ইত্যাদি আধানের জন্য সৃষ্ট তড়িতপ্রাবল্য যথাক্রমে, \(E_1,E_2,E_2\)  ইত্যাদি হলে ঐ বিন্দুর লব্ধি প্রাবল্য হবে,<br>
<h5 class="text-primary font-weight-bold"> \( E=\vec E_1 + \vec E_2+ \vec E_3+ .... = \sum \vec E_n \) </h5>



<h3 class="text-danger">Lesson 3: </h3>
<b>বিভবের পরিমাপঃ</b> অসীম থেকে প্রতি একক ধনাত্মক আধানকে পরিবাহকের খুব নিকটে আনতে তড়িৎ বল দ্বারা বা তড়িৎ বলের বিরুদ্ধে যে পরিমান কাজ সম্পন্ন হয়, তাকে ঐ পরবাহকের বিভব বলে।  <br>
আবার অসীম থেকে প্রতি একক ধনাত্মক আধানকে তড়িতক্ষেত্রের কোনো বিন্দুতে আনতে সম্পন্ন কাজের পরিমাণকে ঐ বিন্দুর তড়িৎ বিভব বলে। <br>
<b>ব্যাখ্যাঃ</b> অসীম থেকে ক্ষুদ্র পরখ আধান q কে পরিবাহকের খুব নিকটে বা তড়িৎক্ষেত্রের কোন বিন্দুতে আনতে যদি সম্পন্ন কাজের পরিমাণ W  হয় তবে ঐ পরিবাহকেরবা ওই বিন্দুর বিভব V হবে, <br>
<h5 class="text-primary font-weight-bold"> \[ V= \frac{W}{q} \] </h5><br>

<b>বিন্দু আধান কর্তৃক সৃষ্ট তড়িৎক্ষেত্রের কোন বিন্দুতে বিভবের জন্য রাশিমালাঃ</b>  <br>
ধরা যাক, K তড়িৎ মাধ্যমাঙ্কবিশিষ্ট কোনো মাধ্যম A বিন্দুতে একটি ক্ষুদ্র পরিবাহক স্থাপিত আছে এবং এতে +q পরিমাণ আধান আছে। এই আধান কর্তৃক সৃষ্ট তড়িৎক্ষেত্র A বিন্দু থেকে  r দূরত্বে  B বিন্দুতে বিভব
<h5 class="text-primary font-weight-bold"> \[ V= \frac{1}{4 \pi \epsilon_o}\frac{q}{r} \] </h5>  <br>
<div class="text-center">
  <img src ="image/blog/CP2_2.4.png" height="40%" width="40%" class="img-fluid" alt="বিন্দু আধান কর্তৃক সৃষ্ট তড়িৎক্ষেত্রের কোন বিন্দুতে বিভব"/><br> <br><br>
</div>

<b>একধিক আধানের জন্য সৃষ্ট তড়িৎক্ষেত্রের কোনো বিন্দুতে বিভবঃ </b><br>
ধরা যাক, k তড়িৎ মাধ্যমাঙ্কবিশিষ্ট  কোনো মাধ্যমের বিন্দুতে \(q_1,q_2,q_3,…  \) আধান বন্টিত আছে। এই আধানগুলোর জন্য মাধ্যমের P বিন্দুতে বিভব নির্ণয় করতে হবে।  <br>
যেহেতু বিভব স্কেলার রাশি, সুতরাং এর কোনদিক নাই এবং P বিন্দুতে মোট বিভব হবে প্রতিটি আধানের জন্য সৃষ্ট বিভবের বীজগাণিতিক সমষ্টি। সুতরাং P বিন্দুতে মোট বিভব
<h5 class="text-primary font-weight-bold"> \[ V=\sum (V_i) \] </h5><br>
<div class="text-center">
  <img src ="image/blog/CP2_2.5.png" height="35%" width="35%" class="img-fluid" alt="একধিক আধানের জন্য সৃষ্ট তড়িৎক্ষেত্রের কোনো বিন্দুতে বিভব"/><br> <br><br>

</div>

<h3 class="text-danger">Lesson 4: </h3> <br>
<b>ধারকত্বঃ</b> কোন পরিবাহকের বিভব প্রতি একক বাড়াতে যে পরিমাণ আধানের প্রয়োজন হয় তাকে ঐ পরিবাহকের আধান ধারকত্ব বলে। কোনো পরিবাহকের বিভব \(V\) পরিমাণ বাড়াতে যদি \(Q\) পরিমান আধানের প্রয়োজন হয়, তবে বিভব একক পরিমাণ বাড়াতে পরিমাণ আধানের প্রয়োজন হয়। সুতরাং আধান ধারকত্ব, <br>
<h5 class="text-primary font-weight-bold"> \[C=\frac{Q}{V} \] </h5>
ধারকত্বের এই একককে বলা হয় ফ্যারাড (F)।  <br>
<b>ফ্যারাডের সংজ্ঞাঃ</b> কোনো পরিবাহকের বিভব এক ভোল্ট বাড়াতে যদি এক কুলম্ব আধানের প্রয়োজন হয়,তাহলে ঐ পরিবাহকের ধারকত্বকে এক ফ্যারাড বলা হয়।  <br>
এক ফ্যারাড অনেক বড় একক বিধায় এর চেয়ে ছোট একক মাইক্রোফ্যারাড \(  1 \mu \;  F \) সচরাচর ব্যবহার করা হয়।  <br>
<b>ধারকঃ</b> কাছাকাছি স্থাপিত দুটি পরিবাহকের মধ্যবর্তী স্থানে অন্তরক পদার্থ রেখে তড়িৎ আধানরূপে শক্তি সঞ্চয় করার যান্ত্রিক কৌশলকে ধারক বলে।  <br>
<b>ধারকের ধারকত্বঃ</b> কোনো ধারকের প্রত্যেক পাতে যে পরিমাণ আধান জমা হলে পাতদ্বয়ের মধ্যে একক বিভব পার্থক্য বজায় থেক তাকে ঐ ধারকের ধারকত্ব বলে।  <br>
<b>সমান্তরাল পাত ধারকঃ</b> দুটি সমান্তরাল পাত দ্বারা এই ধারক তৈরী করা হয়। একই আকৃতির এবং ক্ষেত্রফল বিশিষ্ট দুটি পাত সমান্তরালভাবে পাশাপাশি রেখে কোন অন্তরক মাধ্যম দ্বারা যদি বিছিন্ন করা হয় তাহলে একটি সমান্তরান পাত ধারণ তৈরি হয়। একটি তড়িৎ কোষের সাথে সংযোগ দিয়ে ধারকটিকে আহিত করা হয়।  <br> <br>
<div class="text-center">
  <img src ="image/blog/CP2_2.6.png" height="30%" width="30%" class="img-fluid" alt="সমান্তরাল পাত ধারক"/><br> <br><br>
</div>

ধরা যাক,  <br>
ধারকের প্রত্যেক পাতের ক্ষেত্রফল = A  <br>
পাতদ্বয়ের মধ্যবর্তী দূরত্ব = d  <br>
পাতদ্বয়ের মধ্যবর্তী মাধ্যমের ভেদনযোগ্যতা= \(\epsilon  \)<br>
প্রত্যেক পাতে মোট আধান= Q  <br>
পাতদ্বয়ের বিভব পার্থক্য= V  <br>
<h5 class="text-primary font-weight-bold"> প্রত্যেক পাতে আধান ঘনত্ব, \( \sigma = \frac{Q}{V}  \)<br>
সুতরাং ধারকের ধারকত্ব, \( C= \frac{Q}{V} \Rightarrow \; C=\frac{\epsilon A}{d}\)  <br> <br> </h5>
<h3 class="text-danger"> Lesson 5: </h3>
<b>ধারকের সমবায় বা সন্নিবেশ বা সমন্বয়ঃ</b> বিশেষ কাজে একাধিক ধারককে একসাথে ব্যবহার করার প্রয়োজন হয়। একাধিক ধারককে একত্রে ব্যবহার করাকে ধারকের সমবায় বা সন্নিবেশ বলে।  <br>  <br>
ধারকের সমবায় দুই প্রকার,  <br>
১. শ্রেণি সমবায় বা অনুক্রমিক সমবায় ও  <br>
২. সমান্তরাল সমবায়  <br>
<b>তূল্য ধারকত্বঃ</b> ধারকের সমবায়ের পরিবর্তে যে  একটি মাত্র ধারক ব্যবহার করলে সমবায়ের বিভব পার্থক্য ও আধানের কোনো পরিবর্তন হয় না তার ধারকত্বকে সমবায়ের তূল্য ধারকত্ব বলে।  <br>
<b>১. শ্রেণি সমবায়ের তূল্য ধারকত্বঃ</b> ধারকের যে সমবায়ে প্রথম ধারকের দ্বিতীয়পাতের সাথে দ্বিতীয় ধারকের প্রথম পাত, দ্বিতীয় ধারকের দ্বিতীয় পাতের সাথে তৃতীয় ধারকের প্রথম পাত এবং এরূপে ধারকগুলো সংযুক্ত থাকে তাকে ধারকের শ্রেণী সমবায় বা অনুক্রমিক সমবায় বলে।   <br>
<h5 class="text-primary font-weight-bold"> \[ \frac{1}{C_s}=\sum \frac{1}{C_i}  \] </h5> <br>
<div class="text-center">
  <img src ="image/blog/CP2_2.7.png" height="50%" width="50%" class="img-fluid" alt="শ্রেণি সমবায়"/><br> <br><br>
</div>

<b>২. সমান্তরাল সমবায়ের তূল্য ধারকত্বঃ</b> যে সমবায়ে ধারকগুলোর ধনাত্মক পাতগুলো একটি সাধারণ বিন্দুতে এবং ঋনাত্নক পাতগুলো আরেকটি সাধারণ বিন্দুতে বা ভূমির সাথে সংযুক্ত থাকে তাকে ধারকের সমান্তরাল সমবায় বলে।  <br>
<h5 class="text-primary font-weight-bold"> \[ C_p = \sum C_i \] </h5>

<div class="text-center">
  <img src ="image/blog/CP2_2.8.png" height="30%" width="30%" class="img-fluid" alt="সমান্তরাল সমবায়"/><br> <br><br>
</div>



<h3 class="text-danger"> Lesson 6: </h5>
<b>একটি আহিত ধারকের সঞ্চিত শক্তিঃ</b>  একটি আহিত ধারক প্রচুর পরিমাণে শক্তি তড়িৎ বিভব শক্তি হিসেবে সঞ্চয় করে। একটি আহিত ধারকের শক্তি হল একে আহিত করতে প্রয়োজনীয় মোট কাজের পরিমাণ। আবার একে ক্ষরিত হতে দেওয়া হলে ঐ শক্তি ফিরে পাওয়া যায়।   <br>
<h5 class="text-primary font-weight-bold">  \( \fcolorbox{white}{white}{${\color{red}\\U=\frac{1}{2}  \frac{Q^2}{C}=\frac{1}{2} C V^2=\frac{1}{2}QV}$} \) </h5>  <br> <br>



           </div>
            <!-- others section here between div class-->


            <div class="tab-pane fade" id="current_electricity" role="tabpanel" aria-labelledby="current_electricity-tab">
              <h3 class="text-danger">Lesson-01:</h3>  <br>
              <b>তাড়ন বেগঃ</b> কোন পরিবাহকের মধ্যে মুক্ত ইলেকট্রনগুলো যে গড় বেগে প্রবাহিত হয়ে তড়িৎ প্রবাহ সৃষ্টি করে তাকে তাড়ন বেগ বলে।  <br>
              <h5 class="text-primary font-weight-bold"> \[ I = nAv_de \]</h5>
              <div class="text-center">
                <img src ="image/blog/CP2_3.1.png" height="40%" width="40%" class="img-fluid" alt="তাড়ন বেগ"/><br> <br><br>
              </div>

              এখানে,<br>
              A = পরিবাহকের প্রস্থচ্ছেদের ক্ষেত্রফল <br>
              n = প্রতি একক আয়তনে মুক্ত ইলেকট্রনের সংখ্যা <br>
              e = প্রত্যেক ইলেকট্রনে আধানের পরিমাণ <br>
              \(v_d\) = ইলেকট্রনের তাড়ন বেগ <br><br>

              <b>প্রবাহ ঘনত্বঃ</b> কোন পরিবাহকের প্রতি একক প্রস্থচ্ছেদের ক্ষেত্রফলের মধ্য দিয়ে প্রবাহিত তড়িৎ প্রবাহকের প্রবাহ j ঘনত্ব বলে। <br>
              \( j =\frac{I}{A} \) <br>
              \(=nv_de \) <br> <br>

              <h3 class="text-danger">Lesson-02:</h3>  <br>

              <b>ও’মের সূত্রঃ তাপমাত্রা স্থির থাকলে কোন নির্দিষ্ট পরিবাহকের মধ্যদিয়ে যে তড়িৎ প্রবাহ চলে তা পরিবাহকের দুই প্রান্তের বিভব পার্থক্যের সমানুপাতিক। <br></b>
              স্থির তাপমাত্রায় পরিবাহকের ভেতর দিয়ে প্রবাহিত তড়িৎ প্রবাহ I হলে, ও’মের সূত্রানুসারে,<br>
              \(I \propto V \)<br>
              \( \Rightarrow I = GV\) <br>
              এখানে, G একটি সমানুপাতিক ধ্রুবক, একে পরিবাহকের তড়িৎ পরিবাহিতা বলে। G এর বিপরীত রাশি \( R = \frac{1}{G}  \)<br>
              উপরিউক্ত সমীকরণে বসালে আমরা পাই,
              \( I = \frac{V}{R }\)<br>
              এ ধ্রুব সংখ্যা R কে পরিবাহকের রোধ বলে। <br><br>
              <b>রোধের এককঃ</b> রোধের এস. আই. বা আন্তর্জাতিক একক ও’ম। <br>
              <b>সংজ্ঞাঃ</b> যে পরিবাহকের দুই প্রান্তের বিভব পার্থক্য 1 ভোল্ট (V) হলে তার মধ্য দিয়ে অ্যাম্পিয়ার (A) তড়িৎ প্রবাহ চলে সেই পরিবাহকের রোধকে 1 ও’ম (Ω) বলে। <br>
              \(1 Ω = \frac{1 V }{ 1 A}  = 1  VA^{-1}  \) <br>
              পরিবাহিতার একক সিমেন্স (S)।<br><br>
              <b>সিমেন্সঃ</b> যে পরিবাহকের দুই প্রান্তের বিভব পার্থক্য 1 ভোল্ট(V) হলে তার মধ্য দিয়ে 1 অ্যাম্পিয়ার (A) তড়িৎ প্রবাহ চলে সেই পরিবাহকের পরিবাহিতাকে 1 সিমেন্স (S) বলে। <br><br>
              <b>রোধের সমবায়</b>
              অনেক সময় বিভিন্ন কাজে একাধিক রোধকে একসাথে ব্যভার করার প্র্যোজন হয়। একাধিক রোধকে একত্রে ব্যবহার করাকেই রোধের সমবায় বা সন্নিবেশ বলে। রোধের সমবায় তিন প্রকার। <br>
              ১. শ্রেণী বা অনুক্রমিক সমবায় (Series combination)<br>
              ২. সমান্তরাল সমবায় (Parallel combination)<br>
              ৩. মিশ্র সমবায় (Mixed combination)<br><br>
              <b>তুল্য রোধঃ</b> রোধের কোন সমবায়ের রোধগুলোর পরিবর্তে যে একটি মাত্র রোধ ব্যবহার করলে বর্তনীর প্রবাহ ও বিভব পার্থক্যের কোন পরিবর্তন হয় না তাকে ঐ সমবায়ের তুল্য রোধ বলে। <br><br>
              <b>১. শ্রেণী বা অনুক্রমিক সমবায়ঃ</b> কতগুলো রোধকে যদি পর পর এরূপে সাজানো হয় যে, প্রথম রোধের শেষ প্রান্তের সাথে দ্বিতীয় রোধের প্রথম প্রান্ত, দ্বিতীয় রোধের শেষ প্রান্তের সাথে তৃতীয় রোধের প্রথম প্রান্ত এবং এরূপে বাকিগুলোও সংযুক্ত থাকে এবং একই প্রবাহ সব কয়টী রোধের মধ্য দিয়ে প্রবাহিত হয় তাহলে সেই সমবায়কে রোধের শ্রেণী বা অনুক্রমিক সমবায় বলে।<br>
              <h5 class="text-primary font-weight-bold">\[ R_s = \sum R_i \]</h5><br>
              <div class="text-center">
                <img src ="image/blog/CP2_3.2.png" height="50%" width="50%" class="img-fluid" alt="শ্রেণী বা অনুক্রমিক সমবায়"/><br> <br><br>
              </div>


              <b>২. সমান্তরাল সমবায়ঃ</b> কতগুলো রোধ যদি এমনভাবে সাজানো থাকে যে,  এদের সবার এক প্রান্ত একটি সাধারণ বিন্দুতে এবং অপর প্রান্ত গুলো অন্য একটি সাধারণ বিন্দুতে সংযুক্ত থাকে এবং প্রত্যেকটি রোধের দুই প্রান্তে একই বিভব পার্থক্য বজায় থাকে তাহলে সেই সম্বায় কে রোধের সমান্তরাল সমবায় বলে।<br>
              <h5 class="text-primary font-weight-bold">\[\frac{1}{R_p}= \sum(\frac{1}{R_i}) \]</h5><br>

              <div class="text-center">
                <img src ="image/blog/CP2_3.3.png" height="30%" width="30%" class="img-fluid" alt=" সমান্তরাল সমবায়"/><br> <br><br>
              </div>


              <h3 class="text-danger">Lesson-03:</h3>  <br>

              <b>তড়িচ্চালক শক্তি:</b> প্রতি একক আধানকে কোষ সমেত কোন এক বর্তনীর এক বিন্দু থেকে সম্পূর্ণ বর্তনী ঘুরিয়ে আবার ঐ বিন্দুতে আনতে যে পরিমাণ কাজ সম্পন্ন হয় অর্থাৎ কোষ যে তড়িৎ শক্তি সরবরাহ করে তাকে ঐ কোষের তড়িচ্চালক শক্তি বলে। <br>
              q আধানকে কোষ সমেত কোন বর্তনীর এক বিন্দু থেকে সম্পূর্ণ বর্তনী ঘুরিয়ে পুনরায় ঐ বিন্দুতে আনতে যদি W কাজ সম্পন্ন হয় তাহলে কোষের তড়িচ্চালক শক্তি, <br>
              <h5 class="text-primary font-weight-bold">\[ E =\frac{W}{q} \] </h5><br>
              <b>কোষের সমবায়:</b> শক্তিশালী প্রবাহ পাওয়ার জন্য একাধিক কোষ একত্রে ব্যবহার করাকে কোষের সমবায় বলে।<br>
              একাধিক কোষ এক সাথে ব্যবহার করলে তাকে ব্যাটারিও বলে। কোষের সমবায় তিন প্রকার হয়ে থাকে। <br>
              ১. শ্রেণী সমবায় (Series combination)<br>
              ২. সমান্তরাল সমবায় (Parallel combination)<br>
              ৩. মিশ্র সমবায় (Mixed combination)<br><br>
              <b>শ্রেনী বা অনুক্রমিক সমবায়ঃ</b> কতগুলো তড়িৎকোষ যদি পর পর এমনভাবে সাজানো থাকে যে, প্রথম কোষের ঋণাত্মক পাতের সাথে দ্বিতীয় কোষের ধনাত্মক পাত, দ্বিতীয় কোষের ঋণাত্মক পাতের সাথে তৃতীয় কোষের ধনাত্মক পাত এবং বাকিগুলো এরূপে সংযুক্ত থাকে তাকে শ্রেণি সমবায় বলে।<br>
              <h5 class="text-primary font-weight-bold">\[ I_s = \frac{nE}{R+nr} \] </h5><br>
              <div class="text-center">
                <img src ="image/blog/CP2_3.5.png" height="30%" width="30%" class="img-fluid" alt="শ্রেনী বা অনুক্রমিক সমবায়"/><br> <br><br>
              </div>

              <b>সমান্তরাল সমবায়ঃ</b> কতগুলো কোষ যদি এমনভাবে সাজানো থাকে যে, তাদের ধনাত্মক পাতগুলো একটি সাধারণ বিন্দুতে এবং ঋণাত্মক পাতগুলো অপর একটি সাধারণ বিন্দুতে সংযুক্ত থাকে তখন তাকে কোষের সমান্তরাল সমবায় বলে।
              <h5 class="text-primary font-weight-bold">\[ I_p = \frac{mE}{mR+r} \] </h5>

              <div class="text-center">
                <img src ="image/blog/CP2_3.6.png" height="30%" width="30%" class="img-fluid" alt="সমান্তরাল সমবায়"/><br> <br><br>
              </div>


              <b>মিশ্র সমবায়ঃ</b> কতগুলো কোষ যদি এমনভাবে সাজানো থাকে যে, এগুলো কতগুলো সারিতে বিভক্ত থাকে এবং প্রত্যেকটি সারিতে কতগুলো কোষ শ্রেণি সমবায়ে থাকে তবে সেইন সমবায়কে মিশ্র সমবায় বলে।
              <h5 class="text-primary font-weight-bold">\[ I_{mixed} =\frac{mnE}{mR+nr} \] </h5>
              \[ N=m \times n =Total \; number \; of \; cells \] <br>
		মিশ্র সমবায়ে সর্বোচ্চ প্রবাহমাত্রা পাওয়ার শর্তঃ \(mR=nr\)<br><br><br>


              <h3 class="text-danger">Lesson-05:</h3>  <br>

              <b>কার্শফের সূত্র:</b><br>
              <b>প্রথম সূত্রঃ</b> তড়িৎ বর্তনীর কোন সংযোগ বিন্দুতে মিলিত প্রবাহগুলোর বীজগাণিতিক সমষ্টি শূন্য হয়।<br><br>
              <div class="text-center">
                <img src ="image/blog/CP2_3.7.png" height="55%" width="55%" class="img-fluid" alt="কার্শফের সূত্র"/><br> <br><br>
              </div>

              <b>দ্বিতীয় সূত্রঃ</b> কোন আবদ্ধ তড়িৎ বর্তনীর বিভিন্ন অংশগুলোর রোধ এবং তাদের আনুষঙ্গিক প্রবাহের গুণফলের বীজগাণীতিক সমষ্টি ঐ বর্তনীর অন্ত্ররভুক্ত মোট তড়িচ্চালক শক্তির সমান। <br><br>
              <div class="text-center">
                <img src ="image/blog/CP2_3.8.png" height="50%" width="50%" class="img-fluid" alt="দ্বিতীয় সূত্র"/><br>
              </div>

              <h3 class="text-danger">Lesson-06:</h3>  <br>
              <b>হুইটস্টোন ব্রীজ নীতি:</b> চারটি রোধ পরপর শ্রেণীবদ্ধভাবে যদি এমন ভাবে সাজানো হয় যে, প্রথমটির প্রবাহ প্রান্তের সাথে শেষটির শেষ প্রান্ত মিলে একটি বদ্ধ বর্তনী তৈরী হয়  এবং যে কোন দুইটি সংযোগস্থল ও অপর দুটি রোধের সংযোগস্থলের মধ্যে একটি কোষ এবং অপর দুটি সংযোগস্থলের মধ্যে একটি গ্যালভানোমিটার সংযুক্ত থাকে তবে সেই বর্তনীটিকে হুইটস্টোন ব্রীজ বলে।<br>
              সাম্যাবস্থার শর্ত :  <br>
              <div class="text-center">
                <img src ="image/blog/CP2_3.9.png" height="30%" width="30%" class="img-fluid" alt="হুইটস্টোন ব্রীজ"/><br> <br><br>
              </div>

              <h5 class="text-primary font-weight-bold">\[  \frac{P}{Q} = \frac{R}{S}\] </h5>
              <h3 class="text-danger">Lesson-07:</h3>  <br>

              <b>মিটার ব্রীজ:</b> যে যন্ত্রে এক মিটার লম্বা সুষম প্রস্থচ্ছেদের একটি তারকে কাজে লাগিয়ে হুইটস্টোন ব্রীজের নীতি ব্যবহার করে কোন অজানা রোধ নির্ণয় করা হয় তাকে মিটার ব্রীজ বলে।
              <h5 class="text-primary font-weight-bold">\[ \frac{P}{Q}= \frac{l}{100-l} \] </h5>
              <div class="text-center">
                <img src ="image/blog/CP2_3.10.png" height="45%" width="55%" class="img-fluid" alt="মিটার ব্রীজ"/><br> <br><br>
              </div>






              </div>

     <!--magnetic Properties of Current-->
     <div class="tab-pane fade" id="magnetic_properties_of_current" role="tabpanel" aria-labelledby="magnetic_properties_of_current-tab">

      <h3 class="text-danger">Lesson-01:চৌম্বক ক্ষেত্র</h3>  <br>

      <b>চৌম্বক ফ্লাক্স এবং চৌম্বক ফ্লাক্স ঘনত্ব বা চৌম্বকক্ষেত্রঃ</b><br>
       চৌম্বকক্ষেত্রের দিকের সাথে লম্বভাবে স্থাপিত বাস্তব বা কল্পিত তলের মধ্য দিয়ে অতিক্রান্ত চৌম্বক বলরেখার সংখ্যাকে চৌম্বক ফ্লাক্স \((\varphi)\) বলে। <br>
       চৌম্বকক্ষেত্রের দিকের সাথে লম্বভাবে স্থাপিত বাস্তব বা কল্পিত তলের একক ক্ষেত্রফলের মধ্য দিয়ে অতিক্রান্ত চৌম্বক বলরেখার সংখ্যাকে চৌম্বক ফ্লাক্স ঘনত্ব বা চৌম্বক ক্ষেত্র \((\vec{B})\) বলে। <br>
       <h5 class="text-primary font-weight-bold">\(\varphi=\vec{A}.\vec{B}=AB\cos{\theta}\)</h5>
       <div class="text-center">
         <img src ="image/blog/CP2_4.2.png" height="30%" width="30%" class="img-fluid" alt="চৌম্বক ফ্লাক্স"/><br> <br><br>
       </div>


       \(\vec{A}\)=তলের ক্ষেত্রফল ভেক্টর যার দিক তলের লম্ব দিকে <br>
       \(\vec{B}\)=চৌম্বকক্ষেত্র <br>
        \(\theta = \vec{A}\)ও \(\vec{B}\) মধ্যবর্তী কোণ <br>

       <b>বায়োট-স্যাভার্ট এর সূত্রঃ</b> <br>
       ক্ষুদ্র দৈর্ঘ্য \(dl\) এর কোনো পরিবাহীর মধ্য দিয়ে I বিদ্যুৎ প্রবাহিত হলে এর চারপাশে যে চৌম্বকক্ষেত্র সৃষ্টি হয় তার আশেপাশের কোনো বিন্দু P তে চৌম্বকক্ষেত্রের মান dB- <br>
        1.বিদ্যুৎ প্রবাহ (I) এর সমানুপাতিক <br>
        2.ক্ষুদ্র দৈর্ঘ্য \(dl\) এর সমানুপাতিক <br>
        3. এবং এর মধ্যবর্তী কোণ (\(\theta\)) এর সাইনের সমানুপাতিক  <br>
        4.\(dl\) হতে ঐ বিন্দুর দূরত্ব (r) এর বর্গের ব্যস্তানুপাতিক <br>
        <h5 class="text-primary font-weight-bold">\(dB=\frac{\mu_0}{4\pi}\frac{Idl\sin{\theta}}{r^2}\)</h5>
        <h5>\(\mu_0=4\pi\times{10}^{-7}TmA^{-1}\) =শূন্যস্থানে চৌম্বক প্রবেশ্যতা</h5>
        <div class="text-center">
          <img src ="image/blog/CP2_4.3.png" height="30%" width="30%" class="img-fluid" alt="বায়োট-স্যাভার্ট এর সূত্র"/><br> <br><br>
        </div>


          ভেক্টর রূপ, <h5>\(\vec{dB}=\frac{\mu_0I}{4\pi r^3}(\vec{dl}\times\vec{r})\)</h5>
           <b>বায়োট-স্যাভার্টের সূত্রের প্রয়োগঃ</b> <br>
            1.তড়িৎবাহী লম্বা সোজা অসীম দৈর্ঘ্যের তারের ক্ষেত্রে তারের আশপাশের কোনো বিন্দুতে চৌম্বকক্ষেত্র B হলে, <br>
             <h5 class="text-primary font-weight-bold">\(B=\frac{\mu_0I}{2\pi a}\)</h5>
             <div class="text-center">
               <img src ="image/blog/CP2_4.4.png" height="20%" width="20%" class="img-fluid" alt="তড়িৎবাহী লম্বা সোজা অসীম দৈর্ঘ্যের তারের ক্ষেত্রে"/><br> <br><br>
             </div>
              a=তার হতে ঐ বিন্দুর দূরত্ব <br>

           2. তড়িৎবাহী বৃত্তাকার কুন্ডলীর কেন্দ্রে চৌম্বকক্ষেত্র, <h5 class="text-primary font-weight-bold">\( B=N\frac{\mu_0I}{2\pi a}\)</h5>
              N=কুন্ডলীর পাকসংখ্যা <br>
              r=কুন্ডলীর ব্যাসার্ধ <br><br>

     <h3 class="text-danger">Lesson-02: চৌম্বকবল</h3>  <br>
         চৌম্বকক্ষেত্রে স্থাপিত গতিশীল চার্জের উপর চৌম্বকবল \((\vec{F})\) <br>
          <h5 class="text-primary font-weight-bold">\(\vec{F}=q(\vec{v}\times\vec{B})=qvB\sin{\theta}\)</h5>
          \(\vec{B}\)=চৌম্বকক্ষেত্র <br>
          \(\vec{v}\)=চার্জের বেগ <br>
          <div class="text-center">
            <img src ="image/blog/CP2_4.5.png" height="30%" width="30%" class="img-fluid" alt="চৌম্বকক্ষেত্রে স্থাপিত গতিশীল চার্জের উপর চৌম্বকবল"/><br> <br><br>
          </div>


          <b>নোটঃ</b> চৌম্বকক্ষেত্রে লম্বভাবে স্থাপিত গতিশীল চার্জের গতিপথ বৃত্তাকার হবে। <br><br>

          <b>লরেঞ্জ বলঃ </b>কোন স্থানে তড়িৎক্ষেত্র ও চৌম্বকক্ষেত্রের সম্মিলিত ক্রিয়ায় একটি গতিশীল চার্জ যে লব্ধি বল অনুভব করে তাকে লরেঞ্জ বল বলে। <br>

          <h5 class="text-primary font-weight-bold">\(\vec{F_L}=q(\vec{v}\times\vec{B})+q\vec{E}\)</h5>
          \(\vec{v}\)=চার্জের বেগ <br>
          \(\vec{B}\)=চৌম্বকক্ষেত্র <br>
          \(\vec{E}\)=তড়িৎক্ষেত্র <br>
          <b>চৌম্বকক্ষেত্রে স্থাপিত তড়িৎবাহী তারের উপর চৌম্বকবল:</b>
          <h5 class="text-primary font-weight-bold">\(\vec{F}=I(\vec{l}\times\vec{B})=IlB\sin{\theta}\)</h5>
           l=পরিবাহীর দৈর্ঘ্য <br>
           (\(\vec{l}\) এর দিক হচ্ছে তড়িৎ প্রবাহের দিকে) <br>
           <b>তড়িৎবাহী দুটি সমান্তরাল পরিবাহীর মধ্যকার ক্রিয়াশীল বল:</b>
           পরিবাহীর একক দৈর্ঘ্যে ক্রিয়াশীল বল, <h5>\(F=\frac{\mu_0I_1I_2}{2\pi r}\)</h5>
<div class="text-center">
  <img src ="image/blog/CP2_4.6.png" height="25%" width="25%" class="img-fluid" alt="কুলম্বের সূত্র"/><br> <br><br>
  <img src ="image/blog/CP2_4.7.png" height="30%" width="30%" class="img-fluid" alt="কুলম্বের সূত্র"/><br> <br><br>
</div>


     <h3 class="text-danger">Lesson-03: হল ক্রিয়া</h3>  <br>
          <b>হল ক্রিয়াঃ </b> কোন ফলক বা পাত আকৃতির তড়িৎবাহী পরিবাহীকে চৌম্বকক্ষেত্রে স্থাপন করলে তড়িৎপ্রবাহ ও চৌম্বকক্ষেত্র উভয়ের সমকোণে একটি বিভব পার্থক্যের সৃষ্টি হয় যাকে হল বিভব বলে এবং যে ক্রিয়ায় হল বিভব সৃষ্টি হয় তাকে হল ক্রিয়া বলে। <br>
           হল ভোল্টেজ, <h5>\(V_H=Bvd\)</h5>
           হল ভোল্টেজ, <h5 class="text-primary font-weight-bold">\(V_H=\frac{BI}{ntq}\)</h5>
           <div class="text-center">
             <img src ="image/blog/CP2_4.8.png" height="30%" width="30%" class="img-fluid" alt="হল ক্রিয়া"/><br> <br><br>
           </div>

           v=চার্জ বাহকের তাড়নবেগ <br>
           d=যে বরাবর বিভব পার্থক্য সৃষ্টি হয় সে বরাবর পাতের মাত্রা <br>
           n=পরিবাহকের একক আয়তনে চার্জ বাহক সংখ্যা <br>
           t=পুরুত্ব,যে দিকে \(\vec{B}\) ক্রিয়াশীল সেদিকে পাতের মাত্রা <br>

     <h3 class="text-danger">Lesson-04: চৌম্বকক্ষেত্রে স্থাপিত তড়িৎবাহী লুপের উপর ক্রিয়ারত টর্ক</h3>  <br>

      <div class="text-center">
        <img src ="image/blog/CP2_4.9.png" height="30%" width="30%" class="img-fluid" alt="তড়িৎবাহী লুপের উপর ক্রিয়ারত টর্ক"/><br> <br><br>
      </div>

          লুপের চৌম্বক ভ্রামক, <h5>\(\vec{M}=NI\vec{A}\)</h5>
          ক্রিয়াশীল টর্ক, <h5>\(\vec{\tau}=\vec{M}\times\vec{B}\)</h5>
          <h5 class="text-primary font-weight-bold">\(\vec{\tau}=NI(\vec{A}\times\vec{B})=NIAB\sin{\theta}\)</h5>
          ( \(\vec{A}\) এর দিকে তলের লম্বদিকে) <br>
          N=কুন্ডলী পাকসংখ্যা <br>
         \(\theta = \vec{A}\) ও \(\vec{B}\) এর মধ্যবর্তী কোণ <br>
          কুন্ডলীর অবস্থান পরিবর্তনে কৃতকাজ, <h5>\(W=\int_{\theta_1}^{\theta_2}\tau d\theta\)</h5>
          <h5 class="text-primary font-weight-bold">\(W=NIAB(\cos{\theta_1-}\cos{\theta_2)}\)</h5>

     <h3 class="text-danger">Lesson-05:</h3>
	
	<b>চৌম্বক পদার্থ ও ভূ-চুম্বকত্ব</b> <br>
      জ্যামিতিক দৈর্ঘ্যঃ কোন চুম্বকের দুই প্রান্তের মধ্যবর্তী দূরত্বকে এর জ্যামিতিক দৈর্ঘ্য বলে। চিত্রে AB চুম্বকের জ্যামিতিক দৈর্ঘ্য।  <br>
      চৌম্বক দৈর্ঘ্য বা চুম্বকের কার্যকরী দৈর্ঘ্যঃ কোন চুম্বকের দুই মেরুর মধ্যবর্তী দূরত্বকে চৌম্বক দৈর্ঘ্য বলে।  <br>
      চৌম্বক দৈর্ঘ্য কে ভেক্টর হিসেবে গণ্য করা হয়। একে \(2\overrightarrow{l} \) দিয়ে প্রকাশ করা হয়এবং এর দিক ধরা হয় চুম্বকের দক্ষিণ মেরু থেকে উত্তর মেরুর দিকে। <br>
      চুম্বকের মেরুদ্বয়ের শেষ প্রান্তে অবস্থিত নয় বলে চৌম্বক দৈর্ঘ্য জ্যামিতিক দৈর্ঘ্যের চেয়ে কম। <br>
      কোন চুম্বকের , চৌম্বক দৈর্ঘ্য / জ্যামিতিক দৈর্ঘ্য = 0.85  <br>
      সুতরাং, চৌম্বক দৈর্ঘ্য = 0.85 × চৌম্বক দৈর্ঘ্য  <br> <br>
      <b>চৌম্বক দ্বিপোল ভ্রামক বা চৌম্বক ভ্রামক বা চৌম্বক মোমেন্টঃ</b> কোন চুম্বকের যেকোন একটি মেরুর মেরুশক্তি ও চৌম্বক দৈর্ঘ্যের গুণফলকে ঐ চুম্বকের দ্বিপোল ভ্রামক বা চৌম্বক ভ্রামক বলে।  <br>
      <br><b>ব্যখ্যাঃ </b>  চৌম্বক ভ্রামক একটি ভেক্টর এবং একে   দিয়ে প্রকাশ করা হয়। কোন চুম্বকের মেরু শক্তি m এবং চৌম্বক দৈর্ঘ্য  হলে       
      চৌম্বকক্ষেত্রকে B দিয়ে প্রকাশ করা হয়। এটি একটি ভেক্টর রাশি। এর দিক ডান হাতি স্ক্র নিয়ম থেকে পাওয়া যায়। এর একক টেসলা \( T \) বা \( \mathrm{NA}^{-1} \mathrm{m}^{-1} \)   এর সমতূল্য।  <br>
      <br><b>চৌম্বক তীব্রতা বা চৌম্বক প্রাবল্যঃ </b> কোন বিন্দুর চৌম্বকক্ষেত্র এবং চৌম্বক প্রবেশ্যতার অনুপাতকে চৌম্বক তীব্রতা বলে।   <br>
      তীব্রতা H হলে,  <br>
      অন্য কোন মাধ্যমে চৌম্বক তীব্রতা হবে,\( H = \frac{B }{\mu} \)  <br> 
      এখানে, \( \mu \) হচ্ছে মাধ্যমের চৌম্বক প্রবেশ্যতা।  <br> 
      সুতরাং, \( B = \mu H \)  <br> 
      অর্থাৎ, চৌম্বকক্ষেত্র = চৌম্বক প্রবেশ্যতা × চৌম্বক তীব্রতা  <br> 
      <br><b>এককঃ </b> চোউম্বক তীব্রতার একক হল \( \frac{ T }{(TmA^{-1})}=Am^{-1} \) [ অ্যাম্পিয়ার / মিটার]  <br>  
      <b>চুম্বকায়ন তীব্রতা বা চুম্বকায়নের মাত্রা বা চুম্বকায়নঃ </b> চুম্বকায়ন ক্ষেত্র প্রয়োগ করলে কোন চৌম্বক পদার্থের প্রতি একক আয়তনে যে চৌম্বক ভ্রামকের উদ্ভব হয় তাকে চৌম্বকায়ন তীব্রতা বলে।  <br> 

      <b>চৌম্বক ভ্রামকঃ </b> V আয়তনের কোন চৌম্বকায়িত পদার্থে যদি প্রতিটি Mi চৌম্বক ভ্রামকের N সংখ্যক চৌম্বক দ্বিপোল  থাকে তাহলে ঐ পদার্থের লব্ধি চৌম্বক ভ্রামক হবে,
\(M = \sum (M_i)\).  
যেহেতু চৌম্বক ভ্রামকের একক \(AM^2\) , সুতরাং চুম্বকআয়ন তিব্রতার একক হবে,
<b>চৌম্বক প্রবেশ্যতাঃ </b> কোন চৌম্বক পদার্থের চৌম্বক আবেশ এবং চৌম্বক তিব্রতার অনুপাতকে ঐ পদার্থের চৌম্বক প্রবেশ্যতা বলে। একে µ দিয়ে প্রকাশ করা হয়। <br>
 <b>চৌম্বকগ্রাহীতা বা প্রবনতাঃ</b> কোন চৌম্বক পদার্থের চুম্বকায়ন তীব্রতা এবং চৌম্বক তীব্রতার অনুপাতকে ঐ পদার্থের চৌম্বকগ্রাহীতা বলে।
<b>আপেক্ষিক চুম্বকায়ন তিব্রতাঃ</b>কোন চৌম্বক পদার্থের চৌম্বক পদার্থের চৌম্বক প্রবেশ্যতা ও শুন্যস্থানের চৌম্বক প্রবেশ্যতার অনুপাতকে ঐ পদার্থের আপেক্ষিক চৌম্বক প্রবেশ্যতা বলে। একে \( \mu_r\) দারা প্রকাশ করা হয়।
ব্যাখ্যাঃ শূন্যস্থানের চৌম্বক প্রবেশ্যতা \(\mu_0\) এবং কোন মাদ্ধমের চৌম্বক প্রবেশ্যতা µ হলে,                                      
      <h5 class="text-primary">\( \mu_r = \frac{\mu}{\mu_0} \)</h5>
এককঃ আপেক্ষিক চৌম্বক প্রবেশ্যতা যেহেতু একই জাতীয় দুটি রাশির অনুপাত; সুতরাং এর কোন একক নেই।
<b>পৃথিবীর চৌম্বক উপাদানঃ</b> কোন স্থানে পৃথিবীর চৌম্বকক্ষেত্রকে সম্পূর্ণরূপে বর্ণনা করার জন্য সাধারনত নিম্নোক্ত তিনটি 
রাশি নির্ণয় করা হয়। <br>
(ক) বিচ্যুতি, Ø <br>
(খ) বিনতি <br>
(গ) ভু চৌম্বক্ষেত্রের অনুভুমিক উপাংশ, \(B_H\) বা H <br>
<b>(ক) বিচ্যুতিঃ</b> কোন স্থানে মুক্তভাবে স্থাপিত চুম্বক শলাকা ভৌগলিক উত্তর-দক্ষিন থেকে যে কনে বিচ্যুত হয় অর্থাৎ ভৌগলিক উত্তর-দক্ষিন মধ্যতলের অন্তরভুক্ত কোণকে ঐ স্থানের বিচ্যুতি বলে। <br>
<b>(খ) বিনতিঃ </b>কোন স্থানের ভূ-চৌম্বক ক্ষেত্র অনুভুমিকের সাথে যে কোণ উৎপন্ন করে অর্থাৎ চৌম্বক মধ্যতলে মুক্তভাবে স্থাপিত চুম্বক শলাকা অনুভুমিক তল থেকে যে কনে নত অবস্থায় থাকে তাকে ঐ স্থানের বিনতি বলে। <br>
<b>(গ) ভূ চৌম্বক্ষেত্রের অনুভুমিক উপাংশ, \(B_H\) বা H: </b> কোন স্থানে অনুভূমিক বরাবর ভূ-চৌম্বক ক্ষেত্রের যে উপাংশ থাকে তাকে ভু চৌম্বক্ষেত্রের অনুভুমিক উপাংশ বলে।ভু চৌম্বক্ষেত্রের অনুভুমিক উপাংশকে  BH বা শুধু H দারা প্রকাশ করা হয়। <br>
<b> ভূ চৌম্বক্ষেত্রের উল্লম্ব উপাংশ, V:</b>কোনো স্থানের ভূ-চৌম্বক ক্ষেত্রের প্রাবল্যের  উল্লম্ব উপাংশকে ঐ স্থানের ভূ-চৌম্বক ক্ষেত্রের উল্লম্ব প্রাবল্য বলে।

<ul class="collection">
  <li class="collection-item">\(H=Bcos\delta\)</li>
  <li class="collection-item">\(V=Bsin\delta\)</li>
  <li class="collection-item">\(\frac{V}{H}=\tan\delta\)</li>
  <li class="collection-item">\(B=\sqrt{V^2+H^2}\)</li>
</ul>


     </div>

       <!--magnetic Induction-->

     <div class="tab-pane fade" id="magnetic_induction" role="tabpanel" aria-labelledby="magnetic_induction-tab">
      <h3 class="text-danger">Lesson-01: তাড়িতচৌম্বক আবেশ</h3>
      <b>তাড়িতচৌম্বক আবেশঃ </b> একটি গতিশীলচুম্বক বা বিদ্যুৎবাহী তার কুন্ডলীর সাহায্যে অপর কোন বদ্ধ তার কুন্ডলীতে ক্ষণস্থায়ী তড়িচ্চালক শক্তি এবং তড়িৎপ্রবাহ উৎপন্ন হওয়ার পদ্ধতিকে তাড়িতচৌম্বকীয় আবেশ বলে। <br>
       <b>ফ্যারাডের সূত্রঃ</b> <br>
       <b>প্রথম সূত্রঃ</b> যখনই কোন বদ্ধ তার কুন্ডলীর সাথে সংযুক্ত চৌম্বক ফ্লাক্সে পরিবর্তন ঘটে,তখনই উক্ত কুন্ডলীতে তড়িচ্চালক শক্তি তথা তড়িৎ প্রবাহ আবিষ্ট হয়। <br>
       <b>দ্বিতীয় সূত্রঃ </b> আবিষ্ট তড়িচ্চালক শক্তির মান বদ্ধ কুন্ডলীর সাথে সংযুক্ত চৌম্বক ফ্লাক্সের পরিবর্তনের হারের ঋণাত্মক মানের সমানুপাতিক। <br>
        <h5>\(\varepsilon=-N\frac{d\varphi}{dt}\)</h5>
         N=কুন্ডলীর পাকসংখ্যা <br>
        \(d\varphi = dt\) সময়ে ফ্লাক্সের পরিবর্তন <br>
        <b>লেঞ্জ-এর সূত্রঃ </b> আবিষ্ট তড়িচ্চালক শক্তি তথা তড়িৎ প্রবাহের দিক এমন হয় যে এটা উৎপন্ন হওয়ার মূল কারণকেই বাধা দেয়। <br>
        <b>স্বকীয় আবেশঃ</b> একটি মাত্র বর্তনী বা তার কুন্ডলীতে তড়িৎ প্রবাহের ফলে অথবা কোন চৌম্বকক্ষেত্রে বদ্ধ বর্তনী বা কুন্ডলীর গতির ফলে এর সাথে সংশ্লিষ্ট চৌম্বক ফ্লাক্সের পরিবরতনজনিত যে তাড়িতচৌম্বক আবেশ ঘটে তাকে স্বকীয় আবেশ বলে। <br>
        \(N\varphi=LI \) <br>
        \(N\varphi\) =মোট চৌম্বক ফ্লাক্স <br>
         L=স্বকীয় আবেশ গুণাংক <br>
         কুন্ডলীতে আবিষ্ট তড়িচ্চালক শক্তি, <h5>\(\varepsilon=-L\frac{dI}{dt}\)</h5>
        \(dI=dt\) সময়ে প্রবাহ মাত্রার পরিবর্তন <br>
         বৃত্তাকার কুন্ডলীতে স্বকীয় আবেশ গুণাংক, <h5>\(L=\frac{\pi\mu_0N^2r}{2}\)</h5>
         N=কুন্ডলীর পাকসংখ্যা <br>
         r=কুন্ডলীর ব্যাসার্ধ <br>
        <b>পারস্পরিক আবেশঃ</b> মুখ্য কুন্ডলীতে অসম তড়িৎ প্রবাহের ফলে গৌণ কুন্ডলীর সাথে সংযুক্ত চৌম্বক ফ্লাক্সের পরিবর্তনের দরুণ যে তাড়িতচৌম্বক আবেশ ঘটে তাকে পারস্পরিক আবেশ বলে। <br>
        <h5>\(N_s\varphi_s=MI\)</h5>
        গৌণ কুন্ডলীতে আবিষ্ট তড়িচ্চালক শক্তি, <h5>\(\varepsilon_s=-M\frac{dI}{dt}\)</h5>
        \(N_s\varphi_s\)= গৌণ কুন্ডলীর মোট চৌম্বক ফ্লাক্স <br>
         M=পারস্পরিক আবেশ গুণাংক <br>
         I=মুখ্য কুন্ডলীর প্রবাহ মাত্রা <br>
        \(dI= dt\) সময়ে মুখ্য কুন্ডলীতে প্রবাহ মাত্রার পরিবর্তন <br>
        <b>ট্রান্সফর্মারঃ</b> যে তড়িৎ যন্ত্রের সাহায্যে দিক পরিবর্তী উচ্চ বিভবকে নিম্ন বিভবে অথবা নিম্ন বিভবকে উচ্চ বিভবে রূপান্তরিত করা যায় ,তাকে ট্রান্সফর্মার বলে। <br>
        <h5>\(\frac{\varepsilon_p}{\varepsilon_s}=\frac{N_p}{N_s}=\frac{I_s}{I_p}=\sqrt{\frac{R_p}{R_s}}\)</h5>
        \(\varepsilon_p,\varepsilon_s\)=মুখ্য ও গৌণ কুন্ডলীতে আবিষ্ট তড়িচ্চালক শক্তি <br>
        \(N_p,N_s\)=মুখ্য ও গৌণ কুন্ডলীর পাকসংখ্যা <br>
        \(I_p,I_s\)=মুখ্য ও গৌণ কুন্ডলীর প্রবাহমাত্রা <br>
        \(R_p,\ R_s\)=মুখ্য ও গৌণ কুন্ডলীর রোধ <br>

     <h3 class="text-danger">Lesson-02: দিক পরিবর্তী প্রবাহ</h3>
       <b>দিক পরিবর্তী প্রবাহঃ</b> কোন বর্তনীতে তড়িৎ প্রবাহ বৃদ্ধি যদি একটি নির্দিষ্ট সময় পর পর দিক পরিবর্তন করে এবং সর্বোচ্চ ও সর্বনিম্ন মান প্রাপ্ত হয়,তাকে দিক পরিবর্তী প্রবাহ বা AC প্রবাহ বলে। <br>
       <b>দিক পরিবর্তী তড়িচ্চালক শক্তিঃ </b> যে তড়িচ্চালক শক্তির ক্রিয়ায় কোন বর্তনীর প্রবাহমাত্রা একটি নির্দিষ্ট সময় পর পর দিক পরিবর্তন করে এবং সর্বোচ্চ ও সর্বনিম্ন মান প্রাপ্ত হয়,তাকে দিক পরিবর্তী তড়িচ্চালক শক্তি বলে। <br>
       <h5>\(I=I_0\sin{\omega t}\) <br>
        \(\varepsilon=\varepsilon_0\sin{\omega t}\)</h5>
        \(I_0,\varepsilon_0\)=শীর্ষমান <br>
        <div class="text-center">
          <img src ="image/blog/CP2_5.1.png" height="30%" width="30%" class="img-fluid" alt="দিক পরিবর্তী প্রবাহ"/><br> <br><br>
          <img src ="image/blog/CP2_5.2.png" height="30%" width="30%" class="img-fluid" alt="দিক পরিবর্তী প্রবাহ"/><br> <br><br>
        </div>


      <b>দিক পরিবর্তী তড়িৎ প্রবাহ ও তড়িচ্চালক শক্তির গড় মান</b><br>
        <b>পূর্ণচক্রের জন্যঃ </b> গড় প্রবাহ, \(\bar{I}=0\); গড় তড়িচ্চালক শক্তি, \(\bar{\varepsilon}=0\) <br>
        <b>অর্ধচক্রের জন্যঃ </b> গড় প্রবাহ, \(\bar{I}=\frac{2}{\pi}I_0=0.637I_0\) <br>
         গড় তড়িচ্চালক শক্তি, <h5>\(\bar{\varepsilon}=\frac{2}{\pi}\varepsilon_0=0.637\varepsilon_0\)</h5>
         <b>দিক পরিবর্তী প্রবাহ ও তড়িচ্চালক শক্তির গড় বর্গের বর্গমূলের মান বা কার্যকর মান বা আপাত মানঃ</b> <br>
         <h5>\(I_{rms}=\frac{I_0}{\sqrt2}=0.707I_0\) <br>
             \(\varepsilon_{rms}=\frac{\varepsilon_0}{\sqrt2}=0.707I_0\)</h5>
          <b>আকৃতি গুণাংক(Form Factor):</b> <h5>\(\frac{I_{rms}}{\bar{I}}=\frac{0.707I_0}{0.637I_0}=1.11\)</h5>
          <b>শীর্ষ গুণাংক(Peak Factor):</b> <h5>\(\frac{I_0}{I_{rms}}=\frac{I_0}{0.707I_0}=1.414\)</h5>

     </div>

     <!--Geometrical Optics-->
     <div class="tab-pane fade" id="Geometrical_Optics" role="tabpanel" aria-labelledby="Geometrical_Optics-tab">
      <h3 class="text-danger">Lesson-01</h3>

      <b>জ্যামিতিক পথঃ</b> কোনো মাধ্যমের মধ্যদিয়ে আলোকরশ্মি কোনো নির্দিষ্ট স্ময়ে যে পথ অতিক্রম করে তাকে জ্যামিতিক পথ বলে। <br>
      <b>আলোকীয় পথঃ</b> কোনো মাধ্যমের একটি নির্দিষ্ট জ্যামিতিক পথ অতিক্রম করতে আলোর যে সময় লাগে সেই সময়ে শূন্য বা বায়ু মাধ্যমের মধ্যদিয়ে আলো যে পথ অতিক্রম করে তাকে আলোকীয় পথ বলে।                     <br>
      <b>সূত্রঃ</b> আলোকীয় পথ= মাধ্যমের প্রতিসরণাঙ্ক × অতিক্রান্ত জ্যামিতিক পথ <br><br>
      <b>ফার্মাটের নীতিঃ </b> “আলোকরশ্মি একবিন্দু থেকে অন্যবিন্দুতে যাওয়ার সময় আলোকরশ্মির যত সংখ্যকবার প্রতিফলন বা প্রতিসরণ যাই ঘটুক না কেন অনুসৃত পথ সর্বদা ক্ষুদ্রতম অথবা বৃহত্তম অথবা স্থির                                              থাকে” সূত্রানুসারে বস্তু ও বিম্বের মধ্যবর্তী আলোকীয় পথ সকল রশ্মির জন্য
                                   সর্বদা (প্রতিফলিত বা প্রতিসৃত) সমান থাকে। <br>
      <b>Note:</b>ফার্মাটের সময় নীতিঃ \(\frac{dt}{dx}=0\), পথের নীতিঃ \(\frac{ds}{dx}=0\) <br><br>
      <b>আলোর প্রতিফলনের সূত্রঃ </b> <br>
      <b>প্রথম সূত্রঃ </b> আপতিত রশ্মি, প্রতিফলিত রশ্মি, এবং আপতন বিন্দুতে প্রতিফলকের উপর অঙ্কিত অভিলম্ব একই সমতলে থাকে। <br>
      <div class="text-center">
        <img src ="image/blog/CP2_6.3.png" height="45%" width="45%" class="img-fluid" alt="আলোর প্রতিফলন"/><br> <br><br>
      </div>

      <b>দ্বিতীয় সূত্রঃ </b> আপতন কোণ (i) এবং প্রতিফলন কোণ (r) সর্বদা সমান থাকে। <br> <br>
      <b>আলোর প্রতিসরণের সূত্রঃ </b> <br>
      <b>প্রথম সূত্রঃ </b> আপতিত রশ্মি, প্রতিফলিত রশ্মি, এবং আপতন বিন্দুতে বিভেদতলের উপর অঙ্কিত অভিলম্ব একই সমতলে থাকে। <br>
      <div class="text-center">
        <img src ="image/blog/CP2_6.5.png" height="40%" width="40%" class="img-fluid" alt="আলোর প্রতিসরণ"/><br> <br><br>
      </div>


      <b>দ্বিতীয় সূত্র বা স্নেলের সূত্রঃ </b> আলোকরশ্মি যখন একমাধ্যম থেকে অন্য মাধ্যমে তির্যকভাবে প্রবেশ করে, তখন একজোড়া নির্দিষ্ট মাধ্যম ও নির্দিষ্ট বর্ণের আলোকরশ্মির জন্য আপতন কোণের Sine ও                                         প্রতিফলন কোণের Sine এর অনুপাত একটি ধ্রুব সংখ্যা হয়। <br>
      <b>“ধ্রুব সংখ্যাটিকে প্রথম মাধ্যমের স্বাপেক্ষে দ্বিতীয় মাধ্যমের প্রতিসরণাঙ্ক বলে”</b> <br>
                              উপরের চিত্র হতের স্নেলের সূত্রানুসারে,<br>
       \({_a}\mu_b=\frac{\sin{i}}{\sin{r}}=\frac{\mu_b}{\mu_a}\)
       <h5 class=" text-primary font-weight-bold" >\[\therefore\ \mu_a\sin{i}=\mu_b\sin{r}\] <br></h5>
                                         এটিই স্নেলের সূত্রের সাধারণ রূপ। <br><br>

       <li>যে মাধ্যমের প্রতিসরণাঙ্ক বেশি তার আলোকীয় ঘনত্ব বেশি। অর্থাৎ সেটি আলোকের সাপেক্ষে ঘনতর। </li>
       <li>শূন্য বা বায়ু মাধ্যমের সাপেক্ষে অপর কোনো স্বচ্ছ মাধ্যমের প্রতিসরণাঙ্ককে পরম বা চরম প্রতিসরণাঙ্ক বলে। এর মান সর্বদা ১ এর চেয়ে বেশি হয়। </li>
       <li>শূন্য বা বায়ু মাধ্যম ছাড়া এক স্বচ্ছ মাধ্যমের সাপেক্ষে অপর কোনো স্বচ্ছ মাধ্যমের প্রতিসরণাঙ্কে আপেক্ষিক প্রতিসরণাঙ্ক বলে। এর মান ১ এর চেয়ে কম বা বেশি হতে পারে।</li>

       <b>প্রতিসরণাঙ্ক সম্পর্কিত বিভিন্ন সূত্রাবলীঃ</b> <br>
       <li>	<h5>\[_a \mu _b = \frac{1}{ _b \mu _a}\]</h5></li>
       <li> a মাধ্যমের মধ্যে b ও c দুটি ভিন্ন মাধ্যম থাকলে, <h5>\(_b \mu _c =  \frac{_a \mu _c}{ _a \mu _c}\)</h5></li>
       <li> a এবং b মাধ্যমে আলোর বেগ ও তরঙ্গদৈর্ঘ্য যথাক্রমে \(c_a\) ও \(\lambda _a\)এবং \(c_b\) ও \(\lambda _b\) হলে,<br>
           <h5>\(_a \mu _b =  \frac{\mu _b}{\mu _a}=\frac{c_a}{c_b}= \frac{\lambda _a}{ \lambda _b}\)</h5> </li>
       <li>আলোকরশ্মি a মাধ্যম থেকে b মাধ্যমে,b হতে c মাধ্যমে এবং সবশেষে a মাধ্যমে প্রতিসরিত হলে, <br>
        <h5>\(_a \mu _b  \times _b\mu_c  \times _c \mu _a =1\)</h5></li>
       <b>সংকট কোণঃ </b> নির্দিষ্ট বর্ণের আলোকরশ্মি ঘন মাধ্যম থেকে হালকা মাধ্যমে প্রতিসরিত হওয়ার সময় আপতন কোণের যে মানের জন্য প্রতিসরণ কোণ  ৯০° হয় তাকে ঐ বর্ণের আলোর জন্য হালকা মাধ্যম                                              সাপেক্ষে ঘন মাধ্যমের সংকট কোণ বলে। <br>
             <p>(মনে রাখতে হবে যে সংকট কোণ অবশ্যই ঘন মাধ্যমে হবে)</p> <br>
        <div class="text-center">
          <img src ="image/blog/CP2_6.4.png" height="30%" width="30%" class="img-fluid" alt="সংকট কোণ"/><br> <br><br>
        </div>

                              স্নেলের সূত্রানুসারে, <br>
       <h5> \(\mu_a \sin  \Theta _c = \mu_b \sin90\)</h5>
       <h5>\(\sin \theta _c = \frac{ \mu_b}{ \mu _a}= _a\mu_b=\frac{1}{_b\mu_a}\)  </h5>
       <li>কাচের সংকট কোণ  ৪২° বলতে বুঝি আলোকরশ্মি কাচ হতে বায়ুতে প্রতিসরণের সময় কাচে আপতন কোণ  ৪২° হলে বায়ুতে প্রতিসরণ কোণ ৯০° হবে।</li>
       <b>পূর্ণ অভ্যন্তরীণ প্রতিফলনঃ </b> আলোকরশ্মি যখন ঘন মাধ্যম থেকে হালকা মাধ্যমে সংকট কোণের চেয়ে বেশি কোণে আপতিত হয় তখন আলোকরশ্মি প্রতিফলিত না হয়ে প্রতিফলনের নিয়মানুযায়ী ঘন মাধ্যমে                                            প্রতিফলিত হয়।এই ঘটনা কে পূর্ণ অভ্যন্তরীণ প্রতিফলন বলে। <br>
                                                      (ঘটনা ঘটে যখন  \(i>\theta_c\))<br>

     <h3 class="text-danger">Lesson-02: লেন্স</h3>
        <b>বিভিন্ন ধরনের লেন্সঃ</b> <br>
        <div class="text-center">
        <figure>
          <img src ="image/blog/CP2_6.7.png" height="5%" width="5%" class="img-fluid" alt="উভোত্তল লেন্স"/>
          <figcaption>উভোত্তল লেন্স</figcaption> 
        
          <img src ="image/blog/CP2_6.8.png" height="3%" width="3%" class="img-fluid" alt="সমতলোত্তল লেন্স"/>
          <figcaption>সমতলোত্তল লেন্স</figcaption> 
          <img src ="image/blog/CP2_6.9.png" height="5%" width="5%" class="img-fluid" alt="অবতলোত্তল লেন্স"/>
          <figcaption>অবতলোত্তল লেন্স</figcaption> 
          <img src ="image/blog/CP2_6.10.png" height="7%" width="7%" class="img-fluid" alt="উভাবতল লেন্স"/>
          <figcaption>উভাবতল লেন্স</figcaption> 
          <img src ="image/blog/CP2_6.11.png" height="5%" width="5%" class="img-fluid" alt="সমতলাবতল লেন্স"/>
          <figcaption>সমতলাবতল লেন্স</figcaption> 
          <img src ="image/blog/CP2_6.12.png" height="5%" width="5%" class="img-fluid" alt="উত্তলাবতল লেন্স"/>
          <figcaption>উত্তলাবতল লেন্স</figcaption> 
         </figure>
        </div>


        অর্থাৎ লেন্সের নামের শেষ অংশ লেন্সের প্রকৃতি নির্ধারণ করে। <br>
        <b>নোটঃ</b> উত্তল লেন্সের ফোকাস দূরত্ব, f = “\(+ve\)” <br>
                    অবতল লেন্সের ফোকাস দূরত্ব, f = “\(-ve\)” হয়। <br>
         <b>লেন্সের ক্ষমতাঃ </b> লেন্স দ্বারা আলোকরশ্মিগুচ্ছের অভিসারিতা বা অপসারিতা করার সামর্থ্যকে লেন্সের ক্ষমতা বলে। <br>
         লেন্সের ক্ষমতা, <h5>\(p=\frac{1}{f}\)</h5> f= মিটারে লেন্সের ফোকাস দূরত্ব <br>
         ক্ষমতার একক ডায়াপ্টর (D) মাত্রা হলো, \([L^1]\)<br>
         উত্তল লেন্সের P = “\(+ve\)” এবং অবতল লেন্সের P = “\(-ve\)” <br>
         <b>বিবর্ধন বা রৈখিক বিবর্ধনঃ </b> রৈখিক বিবর্ধন হলো প্রতিবিম্বের দৈর্ঘ্য এবং লক্ষ্যবস্তুর দৈর্ঘ্য এর অনুপাত। অথবা প্রতিবিম্বের দূরত্ব এবং বস্তুর দূরত্ব এর অনুপাত। <br>
         রৈখিক বিবর্ধন, <h5>\(m=\frac{l^\prime}{l}=-\frac{v}{u}\)</h5>
         <b>প্রতিসরণের চিহ্ন প্রথাঃ</b>
         <li>সকল বাস্তব দূরত্ব ধনাত্মক হবে এবং অবাস্তব দূরত্ব (যে দূরত্ব অতিক্রম করে বলে মনে হয়) ঋনাত্নক হবে।</li>
         <li>বাস্তব বিম্বের ক্ষেত্রে (প্রতিবিম্ব অবশীর্ষ) বিবর্ধন ঋণাত্মক এবং অবাস্তব বিম্বের ক্ষেত্রে (প্রতিবিম্ব সমশীর্ষ) বিবর্ধন ধনাত্নক।</li>
         <li>গোলীয় পৃষ্ঠের যে পাশে আলো প্রতিসরিত হয়,সে পাশে বক্রতার কেন্দ্র থাকলে বক্রতার ব্যাসার্ধ ধনাত্নক,আর বিপরীত পাশে থাকলে ঋণাত্মক হবে।</li>
         <div class="text-center">
           <img src ="image/blog/CP2_6.6.png" height="80%" width="80%" class="img-fluid" alt="চিহ্ন"/><br> <br><br>
           <img src ="image/blog/CP2_6.13.png" height="80%" width="80%" class="img-fluid" alt="চিহ্ন"/><br> <br><br>
         </div>


         <b>লেন্সের সমীকরণঃ </b> <h5>\[\frac{1}{u}+\frac{1}{v}=\frac{1}{f}\]</h5>
         u= লক্ষ্যবস্তুর দূরত্ব, v=বিম্বের দূরত্ব, f=লেন্সের ফোকাস দূরত্ব <br>
         <b>লেন্সের সমবায়ঃ </b> \(P_1, P_2,………P_n\) ক্ষমতা বিশিষ্ট n সংখ্যক লেন্সকে পরস্পর সংযুক্ত করলে তুল্য লেন্সের ক্ষমতা,<br>
         <h5>\[P=P_1+P_2+………P_n\]</h5> <br><br>
         <b>লেন্সের প্রতিবিম্বের অবস্থান ও প্রকৃতিঃ</b><br>
         <b>উত্তল লেন্সঃ</b><br><br>


         <table class="table table-dark">
          <thead>
            <tr>
              <th>বস্তুর অবস্থান</th>
              <th>বিম্বের অবস্থান</th>
              <th>বিম্বের প্রকৃতি,আকার ও বিবর্ধন</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>অসীমে,u=\(\infty\)</td>
              <td>অপর পাশে প্রধান ফোকাস তলে, v= f</td>
              <td>বাস্তব,উল্টো,অত্যন্ত খর্বিত</td>
            </tr>
            <tr>
              <td>\(\infty>u>f\)</td>
              <td> f &lt; v &gt; 2f  </td>
             <td> বাস্তব,উল্টো ও খর্বিত</td>
            </tr>
            <tr>
              <td>u=2f</td>
              <td>v=2f</td>
              <td>বাস্তব,উল্টো,বস্তুর সমান</td>
            </tr>
            <tr>
              <td> f &lt;u &lt;2f</td>
              <td> \(\infty\)>v>2f </td>
              <td> বাস্তব,উল্টো ও বিবর্ধিত</td>
            </tr>
             <tr>
              <td> u = f </td>
              <td> V=\(\infty\) (অসীমে) </td>
              <td> বাস্তব ও উল্টো অথবা অবাস্তব ও সোজা,অত্যন্ত বিবর্ধিত</td>
             </tr>
             <tr>
               <td> 0 &lt;u &lt;f </td>
               <td> একই পাশে বস্তুর পেছনে, v > u </td>
               <td>বাস্তব,বিবর্ধিত,সোজা</td>
             </tr>
          </tbody>
         </table>
             <b>অবতল লেন্সঃ </b> বস্তুর যে কোন অবস্থানের সাপেক্ষে বিম্ব সর্বদাই অবাস্তব, সোজা ও খর্বিত হবে। <br><br>
             [<b>নোটঃ</b> <h5> \(\frac{1}{u}\ +\ \frac{1}{v}=\frac{1}{f}\)</h5>  সূত্রে বস্তুর অবস্থান (u) বসিয়ে খুব সহজেই বিম্বের অবস্থান (v) বের করা যায় এবং <h5>\(m=-\frac{v}{u\ \ }\)</h5> সুত্রে u, v এর মান বসিয়ে বিম্বের প্রকৃতি , আকার আকৃতি বের করা যায়।] <br>
            <b>লেন্স প্রস্তুতকারক সমীকরণঃ</b> <br>
            <b>Case-1:</b><br>
            <div class="text-center">
              <img src ="image/blog/CP2_6.14.png" height="40%" width="40%" class="img-fluid" /><br> <br><br>
            </div>

            \[\frac{\mu}{u}+\frac{\mu_3}{v}=\frac{\mu_2-\mu_1}{r_1}+\frac{\mu_3-\mu_2}{r_2}\] <br>
            <b>Case-2: </b> Case-1 অনুসারে,<br>
            <div class="text-center">
              <img src ="image/blog/CP2_6.15.png" height="40%" width="40%" align="center" /><br> <br><br>
            </div>

            \[\frac{\mu_1}{u}+\frac{\mu_1}{v}=\frac{\mu_2-\mu_1}{r_1}+\frac{\mu_1-\mu_2}{r_2}\] <br>
            \[\mu_1(\frac{1}{u}+\frac{1}{v})=(\mu_2-\mu_1)(\frac{1}{r_1}-\frac{1}{r_2})\] <br>
            \[(\frac{1}{u}+\frac{1}{v})=(\frac{\mu_2}{\mu_1}-1)(\frac{1}{r_1}-\frac{1}{r_2})\] <br>
            \(u=\infty\) হলে v=f হবে <br>
            \[(\frac{1}{\infty}+\frac{1}{f})=(\frac{\mu_2}{\mu_1}-1)(\frac{1}{r_1}-\frac{1}{r_2})\] <br>
            \[\frac{1}{f}=(\frac{\mu_2}{\mu_1}-1)(\frac{1}{r_1}-\frac{1}{r_2})\]<br>
            এখানে,  \(\mu_2\)= লেন্সের উপাদানের প্রতিসরণাঙ্ক <br>
             \(\mu_1\)= লেন্স যে মাধ্যমে রাখা হয়েছে সে মাধ্যমের প্রতিসরণাঙ্ক <br>
             f= লেন্সের ফোকাস দূরত্ব <br><br>

          <h3 class="text-danger">Lesson-03: আলোক যন্ত্র</h3>
          <b>বীক্ষণ কোণঃ </b> লক্ষ্যবস্তু চক্ষুলেন্সে যে কোণ উতপন্ন করে তাকে বীক্ষণ কোণ বা দৃষ্টি কোণ বলে। <br>
          <b>কৌণিক বিবর্ধনঃ </b> প্রতিবিম্ব দ্বারা দৃষ্টিকোণ \((\beta)\)এবং লক্ষ্যবস্তু দ্বারা দৃষ্টিকোণ \((\alpha)\)এর অনুপাতকে কৌণিক বিবর্ধন বলে। \[m=\frac{\beta}{\alpha}\] <br>
          <b>সরল অনুবীক্ষণ যন্ত্র বা বিবর্ধক কাচঃ </b> অবাস্তব ও বিবর্ধিত বিম্ব সৃষ্টি হবে । তাই v = ‘-‘ হয়। <br>
           <li>যন্ত্রের বিবর্ধন ক্ষমতা, \[m\ =\ 1-\frac{v}{f}\]</li>
           <li>স্পষ্ট দৃষ্টির নূন্যতম দূরত্বে অবাস্তব বিম্ব গঠিত হলে, v = -D <br>
               \[m=1+\frac{D}{f} , D=25 cm\] </li>
            <li>লেন্স হতে চোখের দুরত্ব a হলে, \[m=1+\frac{D-a}{f}\]</li>
          <b>যৌগিক বা জটিল অনুবীক্ষণ যন্ত্রঃ </b> অবাস্তব ও বিবর্ধিত বিম্ব সৃষ্টি হয়। <br>
          <div class="text-center">
            <img src ="image/blog/CP2_6.16.png" height="80%" width="80%" align="center" alt="যৌগিক বা জটিল অনুবীক্ষণ যন্ত্র"/><br> <br><br>
          </div>


          অভিলম্বের ক্ষেত্রে, \[\frac{1}{u_0}+\frac{1}{v_0}=\frac{1}{f_0}\]
          অভিনেত্রের ক্ষেত্রে, \[\frac{1}{u_e}+\frac{1}{v_e}=\frac{1}{f_e}\]
          \(v_e\) সর্বদাই ঋনাত্নক হবে <br>
          অভিলক্ষ্যের বিবর্ধন, \[m_0=-\frac{v_0}{u_0}\]
          অভিনেত্রের বিবর্ধন, \[m_e=-\frac{v_e}{u_e}\]
          যন্ত্রের বিবর্ধন, \(m=m_0\times m_e\) <br>
          \(\therefore m=(-\frac{v_0}{u_0})\times(-\frac{v_e}{u_e})\)
          \[m=(1-\frac{v_0}{f_0})(1-\frac{v_e}{f_e})\]



          <div class="card" style="background-color: #7FF0CE " style="width: 16rem;">
            <div class="card-body">
              <h5 class="card-title">Note:</h5>
              <p class="card-text"><h5>\(\frac{1}{u_0}+\frac{1}{v_0}=\frac{1}{f_0}\)</h5> <br>
                <h5>বা, \(\frac{v_0}{u_0}+1=\frac{v_0}{f_0}\)</h5>
                <h5>\(\therefore-\frac{v_0}{u_0}=1-\frac{v_0}{f_0}\)</h5> <br>
                অনুরূপভাবে, <h5>\(\therefore-\frac{v_e}{u_e}=1-\frac{v_e}{f_e}\)</h5> </p></p>
              </div>
            </div>

          স্পষ্ট দৃষ্টির নূন্যতম দূরত্বে বিম্ব গঠিত হলে, \(v_e=-D\) <br>
          \[m=(-\frac{v_0}{u_0})(1+\frac{D}{f_e})\]
          অভিনেত্র থেকে চোখের দুরত্বে হলে, \[m=(-\frac{v_0}{u_0})(1+\frac{D-a}{f_e})\]
          <b>যন্ত্রের দৈর্ঘ্যঃ </b> লেন্স দুটির মধ্যবর্তী দূরত্ব বা যন্ত্রের দৈর্ঘ্য, \[L=v_0+u_e\]
          <b>টেলিস্কোপ বা নভোদূরবীক্ষণ যন্ত্রঃ</b> <br>
          <div class="text-center">
            <img src ="image/blog/CP2_6.17.png" height="80%" width="80%" class="img-fluid" alt="টেলিস্কোপ বা নভোদূরবীক্ষণ যন্ত্র"/><br> <br><br>
          </div>


          এক্ষেত্রে, যন্ত্রের বিবর্ধন বা কৌণিক বিবর্ধন, \[m=\frac{\beta}{\alpha}=\frac{\tan{\beta}}{\tan{\alpha}}=\frac{v_0}{u_e}\]
          এবং যন্ত্রের দৈর্ঘ্য, \(L=v_0+u_e\)
          এখন, <br>
          \[\frac{1}{u_e}+\frac{1}{v_e}=\frac{1}{f_e}\]
          \[\frac{1}{u_e}=\frac{1}{f_e}-\frac{1}{v_e}=\frac{v_e-f_e}{v_ef_e}\]
          \[u_e=\frac{v_ef_e}{v_e-f_e}\]
          স্পষ্ট দৃষ্টির নূন্যতম দূরত্বে ফোকাসিং বা নিকট ফোকাসিং, \[v_0=f_0, v_e=-D\]
          বিবর্ধন, \(m=\frac{v_0}{u_e}=f_0(\frac{1}{f_e}-\frac{1}{v_e})\)
          \[\therefore m=\ f_0(\frac{1}{f_e}+\frac{1}{D})\]
          যন্ত্রের দৈর্ঘ্য, \(L=v_0+u_e\) <br>
          \(=f_0+\frac{v_ef_e}{v_e-f_e}\)
          \(=f_0+\frac{-D\ f_e}{-D\ -f_e}\)
          \[\therefore L=f_0+\frac{D\ f_e}{D+f_e}\]
          <b>অসীমে ফোকাসিং বা স্বাভাবিক ফোকাসিংঃ </b><br>
          \(u_0=\infty\) বলে \(v_0=f_0\); \(v_e=\infty\) বলে \(u_e=f_e\) <br>
          বিবর্ধন, \[m=\frac{v_0}{u_e}\] <br>
          \[\therefore m=\frac{f_0}{f_e}\]
          যন্ত্রের দৈর্ঘ্য, \[L=v_0+u_e; L=f_0+f_e\]

        <h3 class="text-danger">Lesson-04: প্রিজম</h3>
        <div class="text-center">
          <img src ="image/blog/CP2_6.18.png" height="40%" width="40%" class="img-fluid" alt=" প্রিজম"/><br> <br><br>
        </div>


          এখানে, <br>
          \(i_1\)=প্রথম আপতন কোণ <br>
          \(r_1\)=প্রথম প্রতিসরণ কোণ <br>
          \(r_2\)=২য় আপতন কোণ <br>
          \(r_2\)=২য় প্রতিসরণ কোণ <br>
          A=প্রিজম কোণ=প্রতিসারক পৃষ্ঠদ্বয়ের মধ্যবর্তী কোণ <br>
          \(\delta\)=বিচ্যুতি কোণ= প্রিজমে আপতিত রশ্মিকে সামনের দিকে এবং নির্গত রশ্মিকে পেছনের দিকে বাড়ালে যে বহিস্থ কোণ উৎপন্ন হয়। <br>
          \(\mu_m\)=মাধ্যমের প্রতিসরাংক <br>
          \(\mu_p\)=প্রিজমের উপাদানের প্রতিসরাংক <br> <br>

          <b>সুত্রাবলীঃ</b><br>
           ১ম প্রতিসারক তলের ক্ষেত্রে, \[\mu_m\sin{i_1}=\mu_p\sin{r_1}\]
           ২য় প্রতিসারক তলের ক্ষেত্রে, \[\mu_m\sin{i_2=\mu_p\sin{r_2}}\]
           প্রিজম কোণ, \[A=r_1+r_2\]
           বিচ্যুতি কোণ, \[\delta=i_1+i_2-A\]
           <b>নূন্যতম বিচ্যুতি কোণের ক্ষেত্রেঃ</b> আপতন কোণ বাড়ার সাথে সাথে বিচ্যুতি কোণের মান কমতে থাকে। বিচ্যুতি কোণ কমে নুন্যতম মানে পৌছার পর আপতন কোণ বাড়ার সাথে সাথে বিচ্যুতি কোণ বাড়তে থাকে। ঐ ন্যূনতম কোণকে বিচ্যুতি কোণ \((\delta_m)\) বলে। <br>
           <div class="text-center">
             <img src ="image/blog/CP2_6.19.png" height="35%" width="35%" class="img-fluid" alt="নূন্যতম বিচ্যুতি কোণ"/><br> <br><br>
           </div>


           যখন, \(i_1=i_2\) এবং \(r_1=r_2\) হবে তখন \(\delta=\delta_m\) <br>
           সুতরাং নুন্যতম বিচ্যুতিতে, \[A=r_1+r_2=r_1+r_1=2r_1\ ;\ r_1=\frac{A}{2}\]
            Again, \[\delta=i_1+i_2-A\] <br>
           বা, \[\delta=i_1+i_1-A=2i_1-A\] <br>
           \[\therefore i_1=\frac{A+\delta_m}{2}\] <br>
           \[\mu_m\sin{i_1}=\mu_p\sin{r_1}\]<br>
           বা, \[\frac{\mu_p}{\mu_m}=\frac{\sin{i_1}}{\sin{r_1}}\] <br>
           \[\therefore\frac{\mu_p}{\mu_m}=\frac{\sin{\frac{A+\delta_m}{2}}}{\sin{\frac{A}{2}}}\]
           বায়ু মাধ্যমে, \(\mu_m=1\); তখন \[\mu_p=\frac{\sin{\frac{A+\delta_m}{2}}}{\sin{\frac{A}{2}}}\]
           <b>সরু প্রিজমঃ</b>প্রিজম কোণ ৬° এর অধিক না হলে সরু প্রিজমের ক্ষেত্রে, \[\delta=(\mu-1)A\]
           <b>আলোর বিচ্ছুরণঃ </b> যৌগিক বা সাদা আলোকরশ্মির বিভিন্ন বর্ণে বিভক্ত হওয়ার প্রক্রিয়াকে আলোর বিচ্ছুরণ বলে। এর ফলে মূল বর্ণসমূহের যে সজ্জা পাওয়া যায় তাকে বর্ণালী বলে। <br>
           <b>Note:</b> লাল আলোর তরঙ্গদৈর্ঘ্য সবচেয়ে বেশি,এ আলোর জন্য মাধ্যমের প্রতিসরাংক কম এবং তার প্রতিসরণ কম। তাই লাল বর্ণের বিচ্যুতি সবচেয়ে কম।অপরদিকে বেগুনি আলোর তরঙ্গদৈর্ঘ্য সবচেয়ে কম (4000A°) তাই বিচ্যুতি সবচেয়ে বেশি। <br>
           <b>কৌণিক বিচ্ছুরণঃ </b> কৌণিক বিচ্ছুরণ, \[\theta=\delta_v-\delta_R\]
           \(\delta_v\)= বেগুনী রশ্মির বিচ্যুতিকোণ <br>
           \(\delta_R\)= লাল রশ্মির বিচ্যুতিকোণ <br>
           \[\therefore\theta=(\mu_v-1)A-(\mu_R-1)A\]
           \[\therefore\theta=(\mu_v-\mu_R)A\]
           <b>বিচ্ছুরণ ক্ষমতাঃ</b> বিচ্ছুরণ ক্ষমতা, \[\omega=\frac{\theta}{\bar{\delta}}\]
           \(\bar{\delta}\)=গড় বিচ্যুতি: \[\frac{\delta_v+\delta_R}{2}\]
           \[\therefore\omega=\frac{\delta_v-\delta_R}{\bar{\delta}}\]

         </div>


      <!--physical Optics-->
      <div class="tab-pane fade" id="physical_Optics" role="tabpanel" aria-labelledby="physical_Optics-tab">

          <h3 class="text-danger">Lesson-01:</h3>
            <b>আলোর বিভিন্ন তত্ত্বঃ </b> চারটি তত্ত্ব প্রচলিত আছে। <br>
          <div class="container">
            <table class="table table-hover" style="background-color: #BEE4FF  ">
               <thead>
                 <tr>
                   <th>তত্ত্বের নাম</th>
                   <th>আবিষ্কারক ও সাল</th>
                   <th>ব্যাখা করা যায়</th>
                   <th>ব্যাখা করা যায়না</th>
                 </tr>
               </thead>
               <tbody>
                  <tr>
                    <td>কণাতত্ত্ব বা নিঃসরণ তত্ত্ব</td>
                    <td>নিউটন, ১৬৭২</td>
                    <td>আলোর ঋজুগতি বা সরলরৈখিক গতি,প্রতিফলন,প্রতিসরণ</td>
                    <td>ব্যতিচার, অপবর্তন, সমবর্তন বা পোলারায়ন, ফটোতড়িৎ ক্রিয়া</td>
                  </tr>
                  <tr>
                    <td>তরঙ্গ তত্ত্ব (আলো ইথার মাধ্যমের মধ্য দিয়ে সঞ্চালিত হয়)</td>
                    <td>হাইগেনস ১৬৭৮</td>
                    <td>প্রতিফলন, প্রতিসরণ,ব্যতিচার, অপবর্তন</td>
                    <td>সমবর্তন বা পোলারায়ন, ফটোতড়িৎ ক্রিয়া</td>
                  </tr>
                  <tr>
                    <td>তড়িৎ চুম্বকীয় তত্ত্ব</td>
                    <td>ম্যাক্সওয়েল ১৮৬৪</td>
                    <td>সমবর্তন বা পোলারায়ন, অপবর্তন</td>
                    <td>ফটোতড়িৎ ক্রিয়া</td>
                  </tr>
                  <tr>
                    <td>কোয়ান্টাম তত্ত্ব</td>
                    <td>ম্যাক্সপ্লাংক, ১৯০০ (পরবর্তীতে আইনস্টাইন সম্প্রসারিত করেন)</td>
                    <td>ফটোতড়িৎ ক্রিয়া, কম্পটন ক্রিয়া,রমন ক্রিয়া</td>
                    <td>ব্যতিচার, অপবর্তন</td>
                  </tr>
               </tbody>
            </table>

          </div>
                  <b>তড়িৎ চুম্বকীয় তরঙ্গঃ </b> পরিবর্তনশীল তড়িৎক্ষেত্র ও চৌম্বকক্ষেত্রের সম্মিলিত স্পন্দনের ফলে এই তরঙ্গের উদ্ভব ঘটে। X অবস্থানে t সময়ে পরিবর্তনশীল তড়িৎক্ষেত্র (E) এবং চৌম্বকক্ষেত্র (B) এর সমীকরণ,<br>
                  <div class="text-center">
                    <img src ="image/blog/CP2_7.1.png" height="30%" width="30%" class="img-fluid" alt="তড়িৎ চুম্বকীয় তরঙ"/><br> <br><br>
                  </div>
                  \[E=E_0 \sin \frac {2 \pi }{ \lambda } (ct-x)\] এবং \[B=B_0 \sin \frac {2 \pi }{ \lambda } (ct-x)\]
                  যেখানে, \(E_0\)=তড়িৎক্ষেত্রের বিস্তার <br>
                  \(B_0\)=চৌম্বকক্ষেত্রের বিস্তার, C=আলোর বেগ <br>
                  এখানে , আলোর বেগ,\[C=\frac{E_0}{B_0}=\frac{E}{B}\]

                  <b>বিভিন্ন মাধ্যমে আলোর বেগঃ </b> তড়িৎ চৌম্বকীয় তরঙ্গের বেগ আলোর বেগের সমান। <br>
                  ম্যাক্সওয়েল দেখান, শূন্য মাধ্যমে আলোর বেগ,  \[C=\frac{1}{\sqrt{\in_0\mu_0}};\] \(\in_0\)= তড়িৎ ভেদনযোগ্যাতা; \(\mu_0\)= চৌম্বক প্রবেশ্যতা <br>
                  যে কোন মাধ্যমে আলোর বেগ, \[C_m=\frac{1}{\sqrt{\in\mu}}\]
                  \(\in=k\in_0\) এবং \(\mu=\mu_r\mu_0\) ; k= পরাবৈদ্যুতিক ধ্রুবক; \(\mu_r\)=আপেক্ষিক চৌম্বক প্রবেশ্যতা। <br>
                  \[C_m=\frac{C}{\sqrt{k\mu_r}}\]
                  <b>পয়েন্টিং ভেক্টরঃ</b> তড়িৎ চুম্বকীয় তরঙ্গের গতিপথে লম্বভাবে স্থাপিত কোন একক ক্ষেত্রফলের মধ্য দিয়ে যে পরিমাণ শক্তি অতিক্রম করে তাকে পয়েন্টিং ভেক্টর বলে।এর একক \(Wm^{-2}\)। <br>
                  পয়েন্টিং ভেক্টর,  \[\vec{S}=\frac{1}{\mu_0}\vec{E}\times\vec{B}\]
                  \[\therefore\ \vec{S}=\vec{E}\times\vec{H}\;\]
                  (চৌম্বক প্রাবল্য, \[\vec{H}=\frac{\vec{B}}{\mu_0}\]
                  <b>আলোকবর্ষঃ</b> আলোকরশ্মির এক বছরের অতিক্রান্ত দূরত্বকে এক আলোক বর্ষ বলে। <br>
                  এক আলোক বর্ষ (1 ly) =\(9.4×10^{15}\) m <br>
                                  =\(9.4×10^{12}\) km <br>
                                  =\(5.85×10^{12}\) mile <br>
                  <b>তরঙ্গমুখঃ</b> তরঙ্গস্থিত সমদশা সম্পন্ন কণাগুলো যে তলে অবস্থান করে তাকে তরঙ্গমুখ বলে। <br>
                  <b>হাইগেনসের নীতিঃ </b> তরঙ্গমুখের প্রতিটি বিন্দু অণুতরঙ্গের বা গৌণতরঙ্গের উৎস হিসেবে বিবেচিত হয়।
                  প্রতিটি গৌণ উৎস থেকে অণু তরঙ্গ উৎপন্ন হয়ে মূল তরঙ্গের বেগে সঞ্চালিত হয়।
                  কোন মুহূর্তে অণুতরঙ্গগুলোর সাধারণ স্পর্শতল ঐ মুহূর্তে তরঙ্গমুখের নতুন অবস্থান নির্দেশ করে। <br>

            <h3 class="text-danger">Lesson-02: আলোর ব্যতিচার</h3>
                 <b>আলোর ব্যতিচারঃ </b> একই বিস্তার,কম্পাংক ও তরঙ্গদৈর্ঘ্য বিশিষ্ট দুটি আলোক তরঙ্গের উপরিপাতনের ফলে পর্যায়ক্রমে উজ্জ্বল ও অন্ধকার বিন্দুর সৃষ্টি হওয়াকে আলোর ব্যতিচার বলে। <br>
                 উজ্জ্বলতা সৃষ্টি হওয়াকে গঠনমূলক ব্যতিচার এবং অন্ধকার সৃষ্টি হওয়াকে ধ্বংসাত্মক ব্যতিচার বলে। <br><br>
                 দশা পার্থক্য= \[\frac {2 \pi}{\lambda } \times  \Delta x\]
                 \(\lambda\) = তরঙ্গদ্বয়ের তরঙ্গদৈর্ঘ্য <br>
                 \(\Delta x\) = পথ পার্থক্য <br>
                 <b>গঠনমূলক ব্যতিচারের শর্তঃ</b>
                 তরঙ্গদ্বয়ের পথপার্থক্য শূন্য বা  \(\frac{ \lambda }{2}\) এর জোড় গুনিতক। <br>
                 \(\Delta x=2n \frac{\lambda }{2}; n=0,\ \pm1,\pm2,\pm3,.......\) অর্থাৎ দশা পার্থক্য শূন্য বা \(\pi\) এর জোড় গুনিতক। <br>
                 \[\Delta \delta =2n \pi\]
                 <b>ধ্বংসাত্মক ব্যতিচারের শর্তঃ</b><br>
                 পথ পার্থক্য  \(\frac{\pi}{2}\)  এর বিজোড় গুনিতক। <br>
                 \[\Delta x=(2n+1)\frac{ \lambda }{2}\]
                 দশা পার্থক্য \(\pi\) এর বিজোড় গুনিতক।
                 \[\Delta  \delta =(2n+1) \pi\]
                 <b>সুসঙ্গত উৎসঃ</b> দুটি উৎস হতে সমদশায় বা নির্দিষ্ট দশা পার্থক্যে একই বিস্তার,কম্পাংক ও তরঙ্গদৈর্ঘ্যের আলোক তরঙ্গ নির্গত হলে,ঐ উৎসদ্বয়কে সুসংগত আলোক উৎস বলে। <br>
                 <div class="text-center">
                   <img src ="image/blog/CP2_7.2.png" height="55%" width="55%" class="img-fluid" alt="আলোর ব্যতিচার"/><br> <br><br>
                 </div>

                 এখানে, a=চিড়দ্বয়ের মধ্যবর্তী দূরত্ব, D=চিড়দ্বয় হতে পর্দার দূরত্ব,  \(\lambda\)=ব্যবহৃত আলোর তরঙ্গদৈর্ঘ্য <br>
                 <b>পর্দার P বিন্দুতে গঠনমূলক ব্যতিচার বা উজ্জ্বল ডোরা পাওয়ার শর্তঃ</b> <br>
                 \[a\sin \theta = 2n\frac{ \lambda }{2}=n \lambda, n=0,1,2,3…….\]
                 <b>এবং ধ্বংসাত্মক ব্যতিচার বা অন্ধকার ডোরা পাওয়ার শর্তঃ</b> <br>
                 \[a\sin \theta = (2n+1)\frac{ \lambda }{2}=n \lambda, n=0,1,2,3……\]
                 কেন্দ্রীয় উজ্জ্বল ডোরা হতে n-তম উজ্জ্বল ডোরার অবস্থান,<br>
                 \[X_n=2n\frac{ \lambda D}{2a}=\frac{n \lambda D}{a}, n=1,2,3,……\] (n=0 হলে কেন্দ্রীয় উজ্জ্বল ডোরা পাওয়া যায়)<br>
                 কেন্দ্রীয় উজ্জ্বল ডোরা হতে -তম অন্ধকার ডোরার অবস্থান, <br>
                 \[X_n=(2n+1)\frac{ \lambda D}{2a}, n= 0,1,2,3,……\] (n=0 এর জন্য প্রথম অন্ধকার , পর্যায়ক্রমে বাকীগুলো)<br>
                 পরপর দুটি উজ্জ্বল ডোরা অথবা অন্ধকার ডোরার মধ্যবর্তী দূরত্ব,  \[\Delta x=\frac{ \lambda D}{a}\]
                 যে কোন ডোরার প্রস্থ, \[\beta =\frac{ \lambda D}{2a}\]

              <h3 class="text-danger">Lesson-03: আলোর অপবর্তন বা বিবর্তন</h3>
                <b>আলোর অপবর্তনঃ</b>কোন প্রতিবন্ধকের ধার ঘেঁষে যাবার পথে আলোক রশ্মি প্রকৃত গতিপথ থেকে বিচ্যুত হওয়ার ঘটনাকে আলোর অপবর্তন বলে। <br>
                <b>একক চিড় বা একক রেখাছিদ্রের জন্য অপবর্তনঃ</b> <br>
                <div class="text-center">
                  <img src ="image/blog/CP2_7.3.png" height="50%" width="50%" class="img-fluid" alt="একক চিড় বা একক রেখাছিদ্রের জন্য অপবর্তন"/><br> <br><br>
                </div>


                <b>অবমের (অন্ধকার) শর্তঃ</b> \[a\sin \theta = 2n\frac{ \lambda }{2}=n \lambda, n=1,2,3…… (n≠0)\]
                <b>চরমের (উজ্জ্বল) শর্তঃ </b> \[a\sin \theta = (2n+1)\frac{ \lambda }{2}, n=1,2,3……\]
                যেখানে, a=চিড়ের প্রস্থ, \(\theta\)=n-তম চরম বা অবমের জন্য অপবর্তন কোণ, \(\lambda\) = ব্যবহৃত আলোর তরঙ্গদৈর্ঘ্য <br>
                n-তম চরম গুলোর অথবা n-তম অবমগুলোর মধ্যবর্তী কৌণিক ব্যবধান= \(2\theta\) <br>
                <b>গ্রেটিং কর্তৃক অপবর্তনঃ</b> <br>
                চরমের (উজ্জ্বল) শর্তঃ \[d\sin \theta = 2n\frac{ \lambda }{2}=n \lambda, n=0,1,2,3……\] (n=0 এর জন্য কেন্দ্রীয় চরম ও পর্যায়ক্রমে বাকীগুলো)<br>
                অবমের (অন্ধকার) শর্তঃ শর্তঃ \[d\sin \theta = (2n+1)\frac{ \lambda }{2}, n=0,1,2,3……\] (n=0 এর জন্য ১ম অবম ও পর্যায়ক্রমে বাকীগুলো) <br>
                এখানে, d=গ্রেটিং ধ্রবক =চিড়ের প্রস্থ (a) + রেখার প্রস্থ(b) <br>
                একক দৈর্ঘ্যে রেখার সংখ্যা, \[N=\frac{1}{d} =\frac{1}{a+b}\]
                \(\theta\)= n-তম চরম বা অবমের জন্য অপবর্তন কোণ <br> <br>
              <h3 class="text-danger" >Lesson-04: আলোর সমবর্তন বা পোলারায়ন</h3>
                <b>আলোর সমবর্তনঃ </b> যে প্রক্রিয়ায় বিভিন্ন তলে কম্পমান আলোক তরঙ্গকে একটি নির্দিষ্ট তল বরাবর কম্পনক্ষম করা যায় তাকে আলোর সমবর্তন বা পোলারায়ন বলে। <br>
                <b>সমবর্তন কোণঃ </b> কোন প্রতিফলক মাধ্যমে আপতন কোণের যে মানের জন্য সমবর্তন সর্বাধিক হয় সেই আপতন কোণকে সমবর্তন কোণ বলে। <br>
                <b>ব্রুস্টারের সূত্রঃ</b> সমবর্তন কোণের ট্যানজেন্ট সংখ্যাগত ভাবে প্রতিফলক মাধ্যমের প্রতিসরংকের সমান। <br>
                \(\mu\) =প্রতিফলক মাধ্যমের প্রতিসরাঙ্ক <br>
                \(\theta_p\)=সমবর্তন কোণ <br>
                r=প্রতিসরণ কোণ <br>
                ব্রুস্টারের সূত্রমতে, \[\tan \theta_p = \mu\]
                <div class="text-center">
                  <img src ="image/blog/CP2_7.4.png" height="45%" width="45%" class="img-fluid" alt="ব্রুস্টারের সূত্র"/><br> <br><br>
                </div>

                চিত্রে, \(r +\theta_p=900\)
                <b>দ্বৈত বা দ্বি-প্রতিসরণ দ্বারা সমবর্তনঃ </b> ক্যালসাইট কেলাসের মধ্য দিয়ে আলোকরশ্মি দুটি প্রতিসরিত রশ্মিতে বিভক্ত হয়।যেটি প্রতিসরণের সূত্র মেনে চলে তা সাধারণ রশ্মি এবং যেটি সূত্র মেনে চলে না তা অসাধারণ রশ্মি। <br>
                <div class="text-center">
                  <img src ="image/blog/CP2_7.5.png" height="50%" width="50%"  alt="দ্বি-প্রতিসরণ দ্বারা সমবর্তন"/><br> <br><br>
                </div>

                <b>ম্যালাসের সূত্রঃ </b> সমবর্তিত আলোক বিশ্লেষক এর মধ্য দিয়ে গমনের ফলে এর তীব্রতা সমবর্তক এ বিশ্লেষকের নিঃসরণ তলের মধ্যবর্তী কোণের  Cosine-এর বর্গের সমানুপাতিক। <br>
                বিশ্লেষক থেকে নির্গত আলোর তীব্রতা,<br> \(I=I_0 \cos ^2 \theta\)<br>
                \(I\)= পোলারয়ডে আপতিত আলোর তীব্রতা <br>

            </div>

            <!--Introduction_to_Modern_physics-->
            <div class="tab-pane fade" id="Introduction_to_Modern_physics" role="tabpanel" aria-labelledby="Introduction_to_Modern_physics-tab">

                <h3 class="text-danger">Lesson-01: আপেক্ষিকতা</h3>
                 <b>প্রসঙ্গ কাঠামোঃ </b> ত্রিমাত্রিক স্থানে কোন বস্তুর গতি বর্ণনার জন্য যে স্থানাংক ব্যবস্থাকে নির্দিষ্ট করে নেওয়া হয় এবং যার সাপেক্ষে বস্তুর গতি সম্পর্কে সিদ্ধান্ত গ্রহণ করা হয়,তাকে প্রসঙ্গ কাঠামো বলে। <br>
                 <b>জড় প্রসঙ্গ কাঠামোঃ </b> পরস্পরের সাপেক্ষে ধ্রুববেগে গতিশীল যে সকল প্রসঙ্গ কাঠামোতে জড়তার সূত্র বা নিউটনের গতিসূত্র অর্জন করা যায়,তাদেরকে জড় প্রসঙ্গ কাঠামো বলে। <br>
                 <b>অজড় প্রসঙ্গ কাঠামোঃ</b> যে প্রসঙ্গ কাঠামোতে জড়তার সূত্র বা নিউটনের গতিসূত্র প্রযোজ্য হয় না,তাকে অজড় প্রসঙ্গ কাঠামো বলে। <br>
                 <b>মাইকেলসন-মর্লির পরীক্ষাঃ </b> বিজ্ঞানী মাইকেলসন এবং মর্লি ১৮৮৭ খ্রীষ্টাব্দে একটি পরীক্ষার মাধ্যমে প্রমাণ করেন যে,মহাবিশ্বে ইথার নামক কোনো কল্পিত পদার্থের অস্তিত্ব নেই <br>
                 <b>আইনস্টাইনের আপেক্ষিকতার বিশেষ তত্ত্বের মৌলিক স্বীকার্যঃ</b><br>
                 <b>প্রথম স্বীকার্যঃ </b> পরস্পরের সাথে সমবেগে গতিশীল সকল প্রসঙ্গ কাঠামোতে পদার্থবিজ্ঞানের সূত্রগুলো একইরূপ সমীকরণ দ্বারা প্রকাশ করা যায়। <br>
                 <b>দ্বিতীয় স্বীকার্যঃ </b> শূন্যস্থানে সকল জড় প্রসঙ্গ কাঠামোতে আলোর বেগ ধ্রুব থাকীবং এ বেগ আলোর উৎস ও পর্যবেক্ষকের আপেক্ষিক বেগের উপর নির্ভরশীল নয়। <br>
                 <b>গ্যালিলীয়ন রূপান্তরঃ </b> সময়কে পরম ধরে এবং আপেক্ষিকতার বিশেষ তত্ত্বের মৌলিক স্বীকার্যদ্বয় মেনে না চলে পরস্পরের সাপেক্ষে ধ্রুব বেগে গতিশীল দুটি প্রসঙ্গ কাঠামোর স্থান ও কালের মধ্যে সম্পর্ক স্থাপনকারী যেসব সমীকরণ পাওয়া যায় তাদেরকে গ্যালিলীয়ান রূপান্তর বলে। <br>
                 <div class="text-center">
                   <img src ="image/blog/CP2_8.3.png" height="70%" width="70%" class="img-fluid" alt="গ্যালিলীয়ন রূপান্তর"/><br> <br><br>

                 </div>

                 s’ কাঠামো s কাঠামোর সাপেক্ষে v সুষমবেগে ধনাত্মক x-অক্ষ বরাবর গতিশীল। <br>
                 <b>লরেন্টজ রূপান্তরঃ</b> সময়কে পরম না ধরে এবং আপেক্ষিকতার বিশেষ তত্ত্বের মৌলিক স্বীকার্যদ্বয় মেনে চলে পরস্পরের সাপেক্ষে ধ্রুব বেগে গতিশীল দুটি প্রসঙ্গ কাঠামোর স্থান ও কালের মধ্যে সম্পর্ক স্থাপনকারী যেসব সমীকরণ পাওয়া যায় তাদেরকে লরেন্টজ রূপান্তর বলে। <br>
                 s’ কাঠামো s কাঠামোর সাপেক্ষে v ধ্রুবেগে ধনাত্মক x-অক্ষ বরাবর গতিশীল। <br>
                 <div class="text-center">
                   <img src ="image/blog/CP2_8.4.png" height="70%" width="70%" class="img-fluid" alt="লরেন্টজ রূপান্তর"/><br> <br><br>
                 </div>

                 <b>সময়ের আপেক্ষিকতাঃ কাল দীর্ঘায়ন বা সময় সম্প্রসারণ</b><br>
                 কোন পর্যবেক্ষকের সাপেক্ষে গতিশীল অবস্থায় সংঘটিত দুটি ঘটনার মধ্যবর্তী সময় ব্যবধান ঐ পর্যবেক্ষকের সাপেক্ষে স্থির অবস্থায় ঐ একই ঘটনাদ্বয়ের মধ্যবর্তী সময় ব্যবধানের চেয়ে বেশি হয়।একে কাল দীর্ঘায়ন বলে। <br>
                 <b>সূত্রঃ</b> \[t=\frac{1}{\sqrt{1-\frac{v^2}{c^2}}};t>t_0\]
                 \(t_0\)=যে কাঠামোতে ঘটনা ঘটে সেই কাঠামোর পর্যবেক্ষকের সাপেক্ষে পরিমাপকৃত সময় <br>
                 t=যে কাঠামোতে ঘটনা ঘটে তার সাপেক্ষে গতিশীল কাঠামোর পর্যবেক্ষকের সাপেক্ষে পরিমাপকৃত সময় <br>
                 v=এক কাঠামোর সাপেক্ষে অপর কাঠামোর বেগ <br>
                 c=শূন্য মাধ্যমে আলোর বেগ <br>
                 <b>ভরের আপেক্ষিকতাঃ ভর বৃদ্ধি</b> <br>
                 কোন বস্তুর গতিশীল অবস্থার ভর এর নিশ্চল অবস্থার ভরের চেয়ে বেশি। একে ভরের আপেক্ষিকতা বলে। <br>
                 <b>সূত্রঃ</b> \[m=\frac{m_0}{\sqrt{1-\frac{v^2}{c^2}}};m>m_0\]
                 \(m_0\)=বস্তুর নিশ্চল ভর <br>
                 m=বস্তুর গতিশীল অবস্থার ভর <br>
                 <b>দৈর্ঘ্যের আপেক্ষিকতাঃদৈর্ঘ্য সংকোচন</b> <br>
                 কোন বস্তুর গতিশীল অবস্থার দৈর্ঘ্য,ঐ বস্তুর স্থিতিশীল অবস্থার দৈর্ঘ্যের চেয়ে ছোট।একে দৈর্ঘ্য সংকোচন বলে। <br>
                 <b>সূত্রঃ</b> \[L=L_0\sqrt{1-\frac{v^2}{c^2}}; L &lt; L_0 \]
                 \(l_0\)=বস্তুর স্থিতিশীল অবস্থায় দৈর্ঘ্য <br>
                 \(l\)= বস্তুর গতিশীল অবস্থায় দৈর্ঘ্য <br>
                 <b>ভর-শক্তির সম্পর্কঃ</b>
                 বস্তুর নিশ্চল শক্তি, \[E_0=m_0c^2\]
                 বস্তুর গতিশক্তি, \[E_k=(m-m_0)c^2\]
                 বস্তুর মোট শক্তি, \[E=mc^2\]
                 <b>এক পারমাণবিক ভর এক (1 amu):</b> একটি কার্বন-12 পরমাণুর ভরের \(\frac{1}{12}\) অংশকে 1 amu বলে। <br>
                 1 amu = \(1.66057× 10^{-27}\)kg <br>
                 1 amu সমতুল্য শক্তি = 931.5 MeV <br>
                 <b>মৌলিক বলঃ </b> যে সকল বল অন্য কোন বল থেকে উৎপন্ন হয়না বরং অন্যান্য বল এসকল বলের কোন না কোন রূপের প্রকাশ,তাদেরকে মৌলিক বল বলে। <br>
                 প্রকৃতিতে মৌলিক বল চার প্রকার। <br>
                 <div class="container">
                   <table class="table table-hover" style="background-color: #FFCACA ">
                     <thead>
                       <tr>
                         <th>মৌলিক বল</th>
                         <th>পাল্লা</th>
                         <th>বাহক কণা</th>
                         <th>আপেক্ষিক তীব্রতা</th>
                       </tr>
                     </thead>
                     <tbody>
                       <tr>
                         <td>১। মহাকর্ষ বল</td>
                         <td>অসীম</td>
                         <td>গ্রাভিটন</td>
                         <td>1</td>
                       </tr>
                       <tr>
                         <td>২। দুর্বল নিউক্লিয় বল</td>
                         <td>\(10^{-16}\)m</td>
                         <td>W এবং Z বোসন</td>
                         <td>\(10^30\)</td>
                       </tr>
                       <tr>
                         <td>৩। তড়িৎ চৌম্বক বল</td>
                         <td>অসীম</td>
                         <td>ফোটন</td>
                         <td>\(10^39\) বা \(10^40\)</td>
                       </tr>
                       <tr>
                         <td>৪। সবল নিউক্লিয় বল</td>
                         <td>\(10^{-15}\)m</td>
                         <td>মেসন বা গ্লুওন</td>
                         <td>\(10^41\) বা \(10^42\)</td>
                       </tr>
                     </tbody>
                 </table>
                 </div>

              <h3 class="text-danger">Lesson-02: ইলেকট্রন ও ফোটন</h3>
                  ফোটনের শক্তি, \[E=hf=\frac{hc}{ \lambda }\]
                  f=ফোটনের কম্পাংক , \(\lambda\) =ফোটনের তরঙ্গদৈর্ঘ্য <br>
                  h=প্লাংকের ধ্রুবক = \(6.63×10^{-34}\) Js <br>
                  <b>ফটোতড়িৎ ক্রিয়া বা আলোকতড়িৎ ক্রিয়াঃ </b> ধাতব পৃষ্ঠে উপযুক্ত কম্পাংকের বা তরঙ্গদৈর্ঘ্যের আলো পড়লে ঐ ধাতুর পৃষ্ঠ থেকে ইলেকট্রন নিঃসৃত হয়। এ ঘটনাকে ফটোতড়িৎ ক্রিয়া বলে।নিঃসৃত ইলেকট্রনকে ফটোইলেকট্রন এবং ইলেকট্রন নিঃসরণে যে তড়িৎ প্রবাহ সৃষ্টি হয় তাকে
                   ফটোতড়িৎ প্রবাহ বলে। <br>
                   <b>কার্যাপেক্ষকঃ</b> কোন ধাতব পৃষ্ঠ থেকে শূন্য বেগ সম্পন্ন ইলেকট্রন নির্গত করতে যতটুকু শক্তির প্রয়োজন তাকে ঐ ধাতুর কার্যাপেক্ষক বলে। <br>
                   <b>সূচন কম্পাংক(f): </b> আপতিত আলোকের কম্পাংক একটি নির্দিষ্ট মানের নিচে হলে ধাতু হতে ইলেকট্রন নির্গত হয়না। কম্পাংকের এ সর্বনিম্ন মানকে ঐ ধাতুর সূচন কম্পাংক বলে। <br>
                   <b>সূচন তরঙ্গদৈর্ঘ্য\((\lambda)\): </b> আপতিত আলোকের তরঙ্গদৈর্ঘ্য একটি নির্দিষ্ট মানের উপরে হলে ধাতু হতে ইলেকট্রন নির্গত হয়না। তরঙ্গদৈর্ঘ্যের এ সর্বোচ্চ মানকে ঐ ধাতুর সূচন তরঙ্গদৈর্ঘ্য বলে। <br>
                    কার্যাপেক্ষক, \[\phi =hf_0=h\frac{c}{ \lambda _0}\]
                    \(f_0\)=সূচন কম্পাংক  , \(\lambda _0\) =সূচন তরঙ্গদৈর্ঘ্য <br>
                    <b>নিবৃত্তি বিভবঃ </b> অ্যানোড পাতের সাপেক্ষে ক্যাথোড পাতে যে ন্যূনতম ধনাত্মক বিভব দিলে ফটোতড়িৎ প্রবাহ মাত্রা সম্পূর্ণ বন্ধ হয়ে যায়,তাকে ঐ ধাতুর নিবৃত্তি বিভব বলে। <br>
                    কোন ধাতুর উপর f কম্পাংকের আলো পড়লে ফটোতড়িৎ ক্রিয়া ঘটলে- <br>
                    \[hf= \phi + \frac{1}{2}mv_{max}^2\]
                    \[hf= hf_0 + \frac{1}{2}mv_{max}^2\]
                    \[hf= hf_0 + eV_s\]
                    m=ইলেকট্রনের ভর <br>
                    \(v_{max}\)=ইলেকট্রনের সর্বোচ্চ গতিবেগ <br>
                    e=ইলেকট্রনের চার্জ <br>
                    \(V_s\)=নিবৃত্তি বিভব <br>
                    <b>ডি-ব্রগলির তরঙ্গঃ </b> প্রত্যেকটি চলমান বস্তুকণার সাথে একটি তরঙ্গযুক্ত থাকে।একে বস্তু তরঙ্গ বা ডি-ব্রগলির তরঙ্গ বলে। এই তরঙ্গের তরঙ্গদৈর্ঘ্য কে ডি-ব্রগলির তরঙ্গদৈর্ঘ্য বলে। <br>
                    <li>	ডি-ব্রগলির তরঙ্গদৈর্ঘ্য, \[\lambda = \frac{h}{P}\ = \frac{h}{mv}\]
                    ভরবেগ = P= mv</li>
                    <li>ইলেকট্রনের ডি-ব্রগলির তরঙ্গদৈর্ঘ্য, = \[\lambda=\frac{h}{mv}=\frac{h}{ \sqrt{2meV}}=\frac{h}{ \sqrt{2mE_k}}\]  </li>
                    m=ইলেকট্রনের ভর <br>
                    e=ইলেকট্রনের চার্জ <br>
                    v=ইলেকট্রনের বেগ <br>
                    V=বিভব পার্থক্য <br>
                    \(E_k\)=ইলেকট্রনের গতিশক্তি <br>
                    <b>লেখচিত্রঃ</b>
                    <div class="text-center">
                      <img src ="image/blog/CP2_8.1.png" height="25%" width="25%" class="img-fluid" alt="লেখচিত্র"/><br> <br><br>
                    </div>

                    <b>কম্পটন প্রবাহ বা ক্রিয়াঃ </b> কোন শক্তিশালী ফোটন হালকা মৌলের পরমাণুর ইলেকট্রন দ্বারা বিক্ষিপ্ত হলে বিক্ষিপ্ত ও আপতিত ফোটনের তরঙ্গদৈর্ঘ্য তথা কম্পাঙ্কের মধ্যে ব্যবধান পরিলক্ষিত হয়। এ ঘটনাকে কম্পটন ক্রিয়া বলে। <br>
                    <div class="text-center">
                      <img src ="image/blog/CP2_8.2.png" height="50%" width="50%" class="img-fluid" alt="কম্পটন প্রবাহ"/><br> <br><br>
                    </div>

                    <h5>\[\lambda'= \lambda +\frac{h}{m_0c} (1- \cos  \phi )\]</h5>
                    \(\lambda\) =আপতিত ফোটনের তরঙ্গদৈর্ঘ্য <br>
                    \(\lambda'\) =বিক্ষিপ্ত ফোটনের তরঙ্গদৈর্ঘ্য <br>
                    \(m_0c\)=নিশ্চল ইলেকট্রনের ভর <br>
                    এখানে, \(\lambda'-\lambda = \Delta  \lambda\) =কম্পটন ভ্রংশ বা কম্পটন শিফট <br>
                    \(\frac{h}{m_0c}\) =কম্পটন তরঙ্গদৈর্ঘ্য=\( 0.02468 A^0 \) <br>
                    <b>হাইজেনবার্গের অনিশ্চয়তা নীতিঃ</b> কোন নির্দিষ্ট দিকে কণার অবস্থান ও ভরবেগ যুগপৎভাবে সঠিকভাবে পরিমাণ করা যায়না। নির্দিষ্ট দিকে কণার অবস্থান ও ভরবেগ একই সাথে নির্ণয়ে অনিশ্চয়তার পরিমাণদ্বয়ের গুণফল \(\hbar \) (এইচকাট) এর সমান
                    অথবা বৃহত্তর,কখনই এর চেয়ে ছোট হবেনা। <br>
                    <h5>\[\Delta x. \Delta p \geq \hbar\]</h5>
                    \(\Delta x\) =অবস্থানের অনিশ্চয়তা <br>
                    \(\Delta p\) =ভরবেগের অনিশ্চয়তা <br>
                    \(\hbar \)=প্রাঙ্কের হ্রাসকৃত ধ্রূবক =\(\frac{h}{2\pi}\) <br><br>
                    <b>বর্তমানে সংশোধিত গাণিতিক রূপঃ    </b>
                    <h5>\[\Delta x. \Delta p  \geq \frac{\hbar}{2}\]</h5>
                    অনুরূপে, <h5>\[\Delta E. \Delta t \geq \frac{\hbar}{2}\]</h5>
                    <h5>\[\Delta \theta. \Delta L \geq \frac{\hbar}{2}\]</h5>
                    \(\Delta E\) =শক্তির অনিশ্চয়তা <br>
                    \(\Delta t\) =সময়ের অনিশ্চয়তা <br>
                    \(\Delta \theta\) =কৌণিক অবস্থানের অনিশ্চয়তা <br>
                    \(\Delta L\) =কৌণিক ভরবেগের অনিশ্চয়তা <br>

                </div>


                <div class="tab-pane fade" id="nuclear_physics" role="tabpanel" aria-labelledby="nuclear_physics-tab">

                  <h3 class="text-danger">Lesson-01: পরমাণুর মডেল</h3>
                   <b>থমসনের পরমাণুর মডেলঃ <br>  </b>কোন পরমাণুতে যতগুলো ঋণাত্মক চার্জিত ইলেকট্রন কণিকা থাকে,ঠিক তত সংখ্যক ধনাত্মক চার্জিত কণিকা থাকে।ফলে সার্বিকভাবে পরমাণুটি তড়িৎ নিরপেক্ষ থাকে।বিজ্ঞানী থমসন সমগ্র পরমাণুটি ধনাত্মকভাবে চার্জিত গোলক হিসেবে বিবেচনা করেন এবং ঋণাত্মকভাবে চার্জিত ইলেকট্রনসমূহ পরমাণুর মধ্যে এমনভাবে ছড়িয়ে থাকে যে,পরমাণুটি নিস্তরিত হয়।ইলেকট্রনের ভর নগন্য বলে ধনাত্মক চার্জে চার্জিত গোলকের ভরকেই পরমাণুর ভর হিসেবে বিবেচনা করা হয়। <br>
                   <b>রাদারফোর্ডের পরমাণু মডেলঃ <br> </b>
                   ১। পরমাণুর সমস্ত ধন চার্জের কেন্দ্রে কেন্দ্রীভূত থাকে।একে নিউক্লিয়াস বলে।  <br>
                   ২। রাদারফোর্ড তার পরমাণু মডেলকে সৌরজগতের গঠনের সাথে তুলনা করেন।সৌরজগতে সূর্যকে কেন্দ্র করে গ্রহ যেমন আবর্তন করে,পরমাণুতেও তেমনি ধনাত্মক নিউক্লিয়াসকে কেন্দ্র করে ইলেকট্রনগুলো বিভিন্ন কক্ষপথে বৃত্তাকারে আবর্তন করে।  <br>
                   ৩। নিউক্লিয়াসে যতসংখ্যক ধনাত্মক চার্জবাহী কণা থাকে,নিউক্লিয়াসের বাইরে ঠিক সমান সংখ্যক ঋণাত্মক চার্জিত ইলেকট্রন থাকে।ফলে সার্বিকভাবে পরমাণুটি তড়িৎ নিরপেক্ষ হয়।  <br>
                   <b>বোরের পরমাণু মডেলঃ <br>
                   প্রথম স্বীকার্যঃ </b> নিউক্লিয়াসকে কেন্দ্র করে ইলেকট্রনসমূহ কতগুলো অনুমোদিত স্থায়ী কক্ষপথে আবর্তন করে।স্থায়ী অনুমোদিত কক্ষপথে আবর্তনরত অবস্থায় কোন ইলেকট্রনের কৌণিক ভরবেগ  \( \frac{h}{2\pi}\ \)  এর পূর্ণসংখ্যার গুণিতক।
                   কৌণিক ভরবেগ,  <h5 style="text-align: center;" class="text-primary font-weight-bold">\(L=mvr=\frac{nh}{2\pi}  \)  </h5> <br>
                    \(  n= \) অনুমোদিত কক্ষপথ 1,2,3………  <br>
                    m =ইলেকট্রনের ভর  <br>
                    v  =ইলেকট্রনের রৈখিক দ্রুতি  <br>
                    r =কক্ষপথের ব্যাসার্ধ  <br> <br>

                    <b>দ্বিতীয় স্বীকার্যঃ</b>
                    অনুমোদিত স্থায়ী কক্ষপথে আবর্তনরত অবস্থায় ইলেকট্রন কোন শক্তির বিকিরণ বা শোষণ করেনা।  <br>
                    <b>তৃতীয় স্বীকার্যঃ</b> কোন ইলেকট্রন যখন এক স্থায়ী কক্ষপথ থেকে অন্য কোন স্থায়ী কক্ষপথে চলে যায় তখন এটি শক্তির বিকিরণ বা শোষণ করে।নিঃসৃত বা শোষিত শক্তির পরিমাণ হয় শক্তিস্তর দুটির শক্তির ব্যবধানের সমান এবং এর মান এক কোয়ান্টাম অর্থাৎ \(hf\)।
                    নিম্ন কক্ষপথে ইলেকট্রনের শক্তি \(E_1\) এবং উচ্চ কক্ষপথে ইলেকট্রনের শক্তি \(E_2\) হলে,  <br>
                    <h5 style="text-align: center;" class="text-primary font-weight-bold">\(E_2– E_1 = hf \)  </h5><br>
                    \( f \) = বিকিরিত বা শোষিত আলোর কম্পাংক  <br> <br>
                    <b>বোরের মডেল অনুসারে হাইড্রোজেন পরমাণুর কক্ষপথের ব্যাসার্ধ ও শক্তির রাশিমালাঃ</b>
                    <h5 style="text-align: center;" class="text-primary font-weight-bold">কক্ষপথের ব্যাসার্ধ, \( r_n = \frac{n^{2} h^{2} \epsilon_{0}}{\pi m e^{2}} \) </h5><br>

                    যেখানে, r1 =প্রথম স্থায়ী কক্ষপথের ব্যাসার্ধ \(=0.53 A^0\) <br>
                    n=শক্তিস্তর <br>
                    h=প্লাংকের ধ্রুবক \( = 6.63×10^{-34} \; Js = 8.854×10^{-12} \; C^2 N^{-1}m^{-2} \) <br>
                    m=ইলেকট্রনের ভর \( =9.1×10^{-31} \; kg \) <br>
                    e=ইলেকট্রনের চার্জ \( =1.6×10-{19} \; C \) <br><br>
                    <b>ইলেকট্রনের রৈখিক দ্রুতি,</b>  <h5 class="text-primary font-weight-bold"> \(  V_{n}=\frac{e^{2}}{2 \epsilon_{0} n h} \) </h5> <br>
                    <b>কক্ষপথের গতিশক্তি,</b>  <h5 class="text-primary font-weight-bold"> \(E_{k}=\frac{e^{2}}{8 \pi \epsilon_{0} r_{n}}\)  </h5><br>
                    <b>কক্ষপথের বিভবশক্তি,</b>  <h5 class="text-primary font-weight-bold">\(E_{p}=-\frac{e^{2}}{4 \pi \epsilon_{0} r_{n}}\) </h5> <br>
                    <b>কক্ষপথের মোট শক্তি,</b> <br><h5 class="text-primary font-weight-bold"> \(
                    E_{n}=-\frac{m e^{4}}{8 \epsilon_{0}^{2} n^{2} h^{2}} \) </h5> <br>
                    \(|E_{n}|=|E_{k}|=\frac{1}{2}|E_{p}| \)  <br>
                    \( E_{n}=\frac{E_{1}}{n^{2}} ) \)<br>
                    যেখানে, \(E_1=\)প্রথম স্থায়ী কক্ষপথের শক্তি \( =-13.6eV \) <br><br>

                    <b>তৃতীয় স্বীকার্য অনুসারে, </b> <br>
                    \(E=E_{2}-E_{1}=h f\)  <br>
                    \( =\frac{m e^{4}}{8 \epsilon_{0}^2 h^{2}} (\frac{1}{n_{1}^{2}}-\frac{1}{n_{2}^{2}} )\) <br>
                    <h5 class="text-primary font-weight-bold">\( \therefore f=\frac{me^{4}}{8 \epsilon_{0}^{2} h^{3}} (\frac{1}{n_{1}^{2}}-\frac{1}{n_{2}^{2}})\) </h5>
                    <br>
                    \(E =\) নিঃসৃত বা শোষিত ফোটনের শক্তি <br>
                    \(f =\) নিঃসৃত বা শোষিত ফোটনের কম্পাংক<br><br>

                    <b>নিউক্লিয়াসঃ</b> পরমাণুর অভ্যন্তরে যে স্থানে এর সমস্ত ধনাত্মক চার্জ এবং পরমাণুর সমস্ত ভর পুঞ্জীভূত থাকে,তাকে নিউক্লিয়াস বলে।<br>
                    নিউক্লিয়াসের ব্যাসার্ধ \(10^{-14} \; m\) । পরমাণুর গড় ব্যাসার্ধ \(10^{-10} \;m\)। হাইড্রোজেন নিউক্লিয়াসের ব্যাস \(10^{-15} \;m\)থেকে \(10^{-14} \;m\)। <br>
                    নিউক্লিয়াসের ব্যাসার্ধ r হলে, <br>
                    <h5 class="text-primary font-weight-bold"> \( r=r_{o} A^{\frac{1}{3}} \) </h5><br>
                    \( r_o= 1.4 \times 10^{-15} \) <br>
                    A= নিউক্লিয়াসের ভর সংখ্যা বা নিউক্লিয়ন সংখ্যা <br>
                    নিউক্লিয়াসের ঘনত্ব ρ হলে, <br>
                    <h5 class="text-primary font-weight-bold"> \( \rho=\frac{3 m}{4 \pi v^{3}} \) </h5> <br>
                    m=নিউক্লিয়নগুলোর গড় ভর <br><br>


                    <h3 class="text-danger">Lesson-02: তেজস্ক্রিয়তা</h3>


                    <b>তেজস্ক্রিয়তাঃ</b> তেজস্ক্রিয় মৌল থেকে স্বতঃস্ফুর্তভাবে তেজস্ক্রিয় রশ্মি নির্গমনের ঘটনাকে তেজস্ক্রিয়তা বলে। <br>
                    <b>এককঃ</b> বেকরেল (Bq) (SI একক) \(1Bq = 1 decays.s^{-1 }\)<br>
                    কুরি (Ci) (SI একক) \(1 \; Ci = 3.7×10 ^10 decays.s^{-1 } \)<br>
                    রাদারফোর্ড (ra) (SI একক) \(1 \; ra  = 10^6 decays.s^{-1 } \) <br><br>

                    <b> \( \alpha \) -রশ্মি \(^4 _2He \) বিকিরণঃ</b> পরমাণুর পারমাণবিক সংখ্যা ২ কমে এবং ভরসংখ্যা ৪ কমে যায়।<br><br>
                    <b> \( \beta \) -রশ্মি \(^0 _{-1}e\) বিকিরণঃ</b> পরমাণুর পারমাণবিক সংখ্যা ১ বেড়ে যায় এবং ভরসংখ্যা অপরিবর্তিত থাকে। <br><br>

                    <b> তেজস্ক্রিয় ক্ষয়সূত্রঃ</b> কোন মুহূর্তে তেজস্ক্রিয় পরমাণুর ভাঙ্গনের বা অবক্ষয়ের হার,ঐ মুহূর্তে অক্ষত পরমাণু সংখ্যার সমানুপাতিক। <br>
                    অর্থাৎ \( -\frac{d N}{d t} \propto N \)<br>
                    <h5 style="text-align: center;" class="text-primary font-weight-bold">\( \frac{dN}{dt}=\lambda N \)</h5> <br>
                    \( \lambda = \)  ক্ষয় ধ্রুবক <br><br>
                    <div class="text-center">
                      <img src ="image/blog/CP2_9.1.png" height="25%" width="25%" class="img-fluid" alt="তেজস্ক্রিয় ক্ষয়সূত্র"/><br> <br><br>
                    </div>

                    <b>তেজস্ক্রিয় রূপান্তর সমীকরণঃ</b> প্রাথমিক পরমাণু সংখ্যা \(N_0\) হলে t সময় পর অক্ষত পরমাণু সংখ্যা, \(N=N_0e^{-\lambda t}\)<br><br>
                    <b> অর্ধায়ু (\( T _ {\frac{1}{2}}\)):</b> যে সময়ে তেজস্ক্রিয় পদার্থের অর্ধেক ভেঙ্গে যায় তাকে ঐ পদার্থের অর্ধায়ু বলে। <br>

                    <h5 style="text-align: center;" class="text-primary font-weight-bold"> \( T_\frac{1}{2}=\frac{ln2}{\lambda}=\frac{0.693}{\lambda} \)</h5> <br>

                    <b>গড় আয়ুঃ</b> কোন তেজস্ক্রিয় পদার্থের সবগুলো পরমাণুর আয়ুর যোগফলকে প্রারম্ভিক পরমাণু সংখ্যা দিয়ে ভাগ করলে যে মান পাওয়া যায়,তাকে ঐ তেজস্ক্রিয় পদার্থের গড় আয়ু বলে। <br>
                    <h5 style="text-align: center;" class="text-primary font-weight-bold"> \(\tau=\frac{1}{\lambda} \)</h5><br>
                    <h5 style="text-align: center;" class="text-primary font-weight-bold">\( T_{\frac{1}{2}}=(\ln 2) \tau=0.693 \tau \)</h5> <br>

                    <b>ভর ত্রুটিঃ</b> কোন স্থায়ী নিউক্লিয়াসের ভর এর গাঠনিক উপাদানসমূহের মুক্ত অবস্থার ভরের সমষ্টি অপেক্ষা কিছুটা কম হয়,তাকে ভর ত্রুটি বলে। <br><br>
                    <b>বন্ধনশক্তিঃ</b> প্রয়োজনীয় নিউক্লিয়ন একত্রিত হয়ে স্থায়ী নিউক্লিয়াস গঠনে যে পরিমাণ শক্তি নির্গত হয় অথবা নিউক্লিয়াস ভাঙ্গলে উপাদানসমূহকে পরস্পরের প্রভাব থেকে মুক্ত করতে যে পরিমাণ শক্তি বাইরে থেকে সরবরাহ করতে হয় তাকে নিউক্লিয় বন্ধনশক্তি বলে। <br>
                    বন্ধনশক্তি, <h5 class="text-primary font-weight-bold">\( BE=\Delta mc^2 \) </h5> এখানে, \( \Delta m= \) ভরত্রুটি <br><br>
                    <b>চেইনরিয়েকশান বা শৃংখল বিক্রিয়াঃ</b> যে নিউক্লিয় বিক্রিয়া একবার শুরু হলে তাকে চালিয়ে রাখার জন্য অতিরিক্ত কোন শক্তির প্রয়োজন হয়না তাকে চেইন বিক্রিয়া বলে। <br><br>

                    <b> নিউক্লিয়ার ফিউশনঃ</b> যে নিউক্লিয় বিক্রিয়ার একাধিক হালকা নিউক্লিয়াস একত্র হয়ে অপেক্ষাকৃত একটি ভারী নিউক্লিয়াস গঠন করে এবং প্রচুর শক্তির উৎপত্তি ঘটে,তাকে নিউক্লিয়ার ফিউশন বলে। <br><br>
                    <b> নিউক্লিয়ার ফিশানঃ</b> যে নিউক্লিয় বিক্রিয়ায় অপেক্ষাকৃত ভারী পরমাণুর নিউক্লিয়াসকে ভেঙ্গে একাধিক নিউক্লিয়াস উৎপন্ন করে এবং বিপুল পরিমাণ শক্তির উৎপত্তি ঘটে,তাকে নিউক্লিয়ার ফিশান বলে। <br><br>

                  </div>


                  <div class="tab-pane fade" id="semiconductor" role="tabpanel" aria-labelledby="semiconductor-tab">

                    <h3 class="text-danger">সেমিকন্ডাক্টর ও ইলেক্ট্রনিক্স </h3>
                    <b>ব্যান্ডতত্ত্বঃ</b> যে তত্ত্বের সাহায্যে কঠিন পদার্থের তড়িৎ পরিবহন ধর্ম বর্ণনা করা হয় তাকে ব্যান্ড তত্ত্ব বলা হয়।<br><br>
                    <b>যোজন ব্যান্ডঃ</b> যোজ্যতা স্তরের ইলেক্ট্রনের শক্তির পাল্লা <br><br>
                    <b>পরিবহন ব্যান্ডঃ</b> মুক্ত ইলেকট্রনের শক্তির পাল্লা। <br><br>
                    <b>নিষিদ্ধ ব্যান্ডঃ</b> যোজন ব্যান্ড এবং পরিবহন ব্যান্ডের মধ্যবর্তী শক্তির পাল্লা। <br><br>

                    <div class="text-center">
                      <img src ="image/blog/CP2_10.1.png" height="30%" width="30%" class="img-fluid" alt="নিষিদ্ধ ব্যান্ড"/><br> <br><br>
                    </div>
                    <b>পরিবাহীঃ</b> নিষিদ্ধ ব্যান্ড থাকেনা,যোজন ব্যান্ড এবং পরিবহন ব্যান্ড একে অন্যের উপর উপরিপাতিত হয়।আপেক্ষিক রোধ \( 10^{-8} \Omega m \) ক্রমের। <br><br>
                    <b>অন্তরক বা অপরিবাহীঃ</b> নিষিদ্ধ ব্যান্ড অনেক বেশি,প্রায় \(6 eV\) থেকে \(15 eV\) এর মতো।<br><br>
                    <b>অর্ধপরিবাহী বা সেমিকন্ডাক্টরঃ</b> নিষিদ্ধ ব্যান্ড খুব কম,প্রায় \(1 eV\) বা \(1.1 eV\) এর কম।আপেক্ষিক রোধ  \( 10^{-4} \Omega m \) ক্রমের।<br><br>
                    <b>ডোপিং বা ডোপায়নঃ</b> বিশুদ্ধ অর্ধপরিবাহীর সাথে নিয়মিত ও উপযুক্ত উপায়ে অপদ্রব্য (ত্রি বা পঞ্চযোজী মৌল) মেশানোর প্রক্রিয়াকে ডোপিং বলে।<br><br>
                    <b>p-type অর্ধপরিবাহীঃ</b> চতুর্যোজী বিশুদ্ধ অর্ধপরিবাহীর সাথে ত্রিযোজী মৌলকে অপদ্রব্য হিসেবে মেশালে যে কেলাস গঠিত হয় তাকে অর্ধপরিবাহী বলে।<br><br>
                    <b>n-type অর্ধপরিবাহীঃ</b> চতুর্যোজী বিশুদ্ধ অর্ধপরিবাহীর সাথে পঞ্চযোজী মৌলকে অপদ্রব্য হিসেবে মেশালে যে কেলাস গঠিত হয় তাকে অর্ধপরিবাহী বলে।<br><br>
                    <b>p-n জাংশন ডায়োডঃ</b> একই পদার্থের একটি এবং একটি অর্ধপরিবাহীকে বিশেষ ব্যবস্থায় পরস্পরের সংস্পর্শে স্থাপন করলে যে যুগ্মের সৃষ্টি হয় তাকে p-n জাংশন ডায়োড বলে। একে রেকটিফায়ার হিসেবে ব্যবহার করা যায়।<br><br>
                    <div class="text-center">
                      <img src ="image/blog/CP2_10.2.png" height="40%" width="40%" class="img-fluid" alt="p-n জাংশন ডায়োড"/><br> <br><br>
                    </div>

                    <b>সম্মুখী ঝোঁক বা Forward Bias:</b> p-n জাংশনের p-প্রান্তের সাথে ব্যাটারীর ধনাত্মক প্রান্ত এবং n-প্রান্তের সাথে ব্যাটারীর ঋণাত্মক প্রান্ত সংযোগ করলে যে ঝোঁক ব্যবস্থা প্রাপ্ত হয় তাকে সম্মুখী ঝোঁক বলে।<br><br>

                    <div class="text-center">
                      <img src ="image/blog/CP2_10.3.png" height="40%" width="40%" class="img-fluid" alt="Forward Bias"/><br> <br><br>
                    </div>
                    <b>বিমুখী ঝোঁক বা Riverse Bias:</b> p-n জাংশনের p-প্রান্তের সাথে ব্যাটারীর ঋণাত্মক প্রান্ত এবং n-প্রান্তের সাথে ব্যাটারীর ধনাত্মক প্রান্ত সংযোগ করলে যে ঝোঁক ব্যবস্থা প্রাপ্ত হয় তাকে বিমুখী ঝোঁক বলে।<br><br>
                    <b>Knee Voltage (নী ভোল্টেজ):</b> সম্মুখী ভোল্টেজের যে মানের জন্য সম্মুখী তড়িৎ প্রবাহ দ্রুত বৃদ্ধি পায় তা হলো নীল ভোল্টেজ। <br><br>
                    <div class="text-center">
                      <img src ="image/blog/CP2_10.4.png" height="50%" width="50%" class="img-fluid" /><br> <br><br>
                    </div>
                    <b>Zener Voltage (জেনার ভোল্টেজ):</b> বিমুখী ভোল্টেজ বাড়াতে থাকলে একটি বিশেষ ভোল্টেজে তড়িৎ প্রবাহ হঠাৎ খুব বেশি বৃদ্ধি পায়। এই সময় ডায়োডের জাংশন রোধ সম্পূর্ণভাবে ভেঙ্গে যায় বা শূন্য হয়। এই বিশেষ ভোল্টেজকে জেনার ভোল্টেজ বা বিনাশী ভোল্টেজ (Break down Voltage) বলে এবং এই ঘটনাকে জেনার ক্রিয়া বলে।<br><br>
                    <b>গতিয় রোধঃ </b>

                    <h5 class="text-primary font-weight-bold">\( R=\frac{\Delta V}{\Delta I} \) </h5>
                    যা বৈশিষ্ট্য লেখের ঢাল থেকে পাওয়া যায়। <br><br>
                    <b>ট্রানজিস্টরঃ</b> দুটি একই ধরনের অর্ধপরিবাহীর মধ্যস্থলে এদের বিপরীত ধরনের অল্প পুরুত্বের অর্ধপরিবাহীকে বিশেষ প্রক্রিয়ায় স্থাপন করলে যে যান্ত্রিক ব্যবস্থা তৈরি হয় তাকে ট্রানজিস্টর বলে।<br>
                    ট্রানজিস্টর অ্যাম্পলিফায়ার এবং সুইচ হিসেবে কাজ করে।<br>
                    <div class="text-center">
                      <img src ="image/blog/CP2_10.5.png" height="30%" width="30%" class="img-fluid" alt="ট্রানজিস্টর"/><br> <br><br>
                      <img src ="image/blog/CP2_10.6.png" height="30%" width="30%" class="img-fluid" alt="ট্রানজিস্টর"/><br> <br><br>
                    </div>

                    অ্যাম্পলিফায়ারের জন্য, <br>
                    <h5 class="text-primary font-weight-bold">\( I_E=I_B+I_C\) </h5>
                    যেখানে, \( I_E =\)  নিঃসারক প্রবাহ ,\( I_C =\) সংগ্রাহক প্রবাহ ,\( I_B =\) পীঠ প্রবাহ<br>
                    প্রবাহ বিবর্ধক গুণক, <br>
                    <h5 class="text-primary font-weight-bold">\(\alpha=\frac{I_{c}}{I_{E}}, \alpha <  1 \)  </h5> <br>
                    প্রবাহ লাভ,   <h5 class="text-primary font-weight-bold"> \( \beta=\frac{I_{C}}{I_{B}}, \beta \gg 1 \) </h5>  <br>
                    এবং,  <h5 class="text-primary font-weight-bold"> \( \alpha=\frac{\beta}{1+\beta}, \beta=\frac{\alpha}{1-\alpha} \) </h5>   <br><br>

                    <b>নম্বর পদ্ধতি বা সংখ্যা পদ্ধতিঃ</b> কোন সংখ্যা লেখা বা প্রকাশ করার পদ্ধতি। ডিজিটাল পদ্ধতি হলো এমন একটি প্রক্রিয়া যাতে পৃথক একক ব্যবহৃত হয় আর এনালগ পদ্ধতি হলো এমন একটি প্রক্রিয়া যাতে সরাসরি পরিমাপযোগ্য পরিমাণ ব্যবহৃত হয়। <br><br>
                    <div class="text-center">
                      <img src ="image/blog/CP2_10.7.png" height="30%" width="30%" class="img-fluid" alt="Digital Signal"/><br> <br><br>
                      <img src ="image/blog/CP2_10.8.png" height="30%" width="30%" class="img-fluid" alt="Analog Signal"/><br> <br><br>
                    </div>

                    <b>লজিক গেইটঃ</b> যে সকল ডিজিটাল ইলেকট্রনিক বর্তনী ইনপুটের যুক্তিভিত্তিক সংকেতের প্রবাহ নিয়ন্ত্রণ করে আউটপুট প্রদান করে সে সকল বর্তনীকে লজিক গেইট বলে। <br><br>
                    <b>মৌলিক লজিক গেইট ৩ প্রকারঃ</b> NOT গেইট,OR গেইট,AND গেইট <br><br>
                    <b>যৌগিজ লজিক গেইট ৪ প্রকারঃ</b> NOR গেইট, XOR গেইট, NAND গেইট,X-NOR গেইট<br><br>

                    <b>NOT গেইট (NOT gate):</b> যে গেটে একটিমাত্র ইনপুট ও একটিমাত্র আউটপুট এবং প্রাপ্ত আউটপুট প্রয়োগকৃত ইনপুটের বিপরীত হয় তাকে NOT গেইট বলে। <br><br>
                    <div class="text-center">
                      <img src ="image/blog/CP2_10.9.png" height="30%" width="30%" class="img-fluid" alt="NOT Gate"/><br> <br><br>
                      <img src ="image/blog/CP2_10.10.png" height="30%" width="30%" class="img-fluid" alt="NOT Gate Circuit"/><br> <br><br>
                    </div>

                    <b>OR গেইট (OR gate):</b> যে ইলেকট্রনিক বর্তনী দুই বা ততোধিক ইনপুটের যৌক্তিক যোগফল হিসেবে আউটপুট প্রদান করে তাকে OR গেইট বলে। <br><br>
                    <div class="text-center">
                      <img src ="image/blog/CP2_10.11.png" height="30%" width="30%" class="img-fluid" alt="OR Gate"/><br> <br><br>
                      <img src ="image/blog/CP2_10.12.png" height="30%" width="30%" class="img-fluid" alt="OR Gate Circuit"/><br> <br><br>
                    </div>

                    <b>AND গেইট(AND gate):</b> যে ইলেকট্রনিক বর্তনী দুই বা ততোধিক ইনপুটের যৌক্তিক গুণফল হিসেবে আউটপুট প্রদান করে তাকে AND গেইট বলে। <br><br>
                    <div class="text-center">
                      <img src ="image/blog/CP2_10.13.png" height="30%" width="30%" class="img-fluid" alt="AND Gate"/><br> <br><br>
                      <img src ="image/blog/CP2_10.14.png" height="30%" width="30%" class="img-fluid" alt="AND Gate Circuit"/><br> <br><br>
                    </div>

                    <b>NOR গেইট(NOR gate):</b> NOR গেইট হলো একটি যৌগিক ও সার্বজনীন গেট।এর দ্বারা মৌলিক গেটসমূহ পাওয়া যায়। OR গেইট এবং NOT গেইটের সমন্বয়ে NOR গেইট তৈরি হয়।<br><br>
                    <div class="text-center">
                      <img src ="image/blog/CP2_10.15.png" height="30%" width="30%" class="img-fluid" alt="NOR Gate"/><br> <br><br>
                      <img src ="image/blog/CP2_10.16.png" height="30%" width="30%" class="img-fluid" alt="NOR Gate Circuit"/><br> <br><br>
                    </div>

                    <b>XOR গেট (XOR gate):</b> এটি একটি যৌগিক গেট। XOR গেট মৌলিক গেট OR, AND কিংবা NOT গেট দিয়ে তৈরি করা যায়। <br><br>
                    <div class="text-center">
                      <img src ="image/blog/CP2_10.17.png" height="30%" width="30%" class="img-fluid" alt="XOR Gate"/><br> <br><br>
                    </div>

                    <b>NAND গেট (NAND gate):</b> গেট একটি যৌগিক ও সার্বজনীন ইলেকট্রনিক গেট।AND গেট এবং NOT গেটের সমন্বয়ে NAND গেট তৈরি হয়। <br><br>
                    <div class="text-center">
                      <img src ="image/blog/CP2_10.18.png" height="30%" width="30%" class="img-fluid" alt="NAND Gate"/><br> <br><br>
                      <img src ="image/blog/CP2_10.19.png" height="30%" width="30%" class="img-fluid" alt="NAND Gate Circuit"/><br> <br><br>
                    </div>

                    <b>X-NOR গেট(X-NOR gate):</b> XOR গেটের আউটপুটে NOT গেট যুক্ত করলে X-NOR গেট পাওয়া যায়। <br><br>
                    <div class="text-center">
                      <img src ="image/blog/CP2_10.20.png" height="30%" width="30%" class="img-fluid" alt="X-NOR Gate"/><br> <br><br>
                    </div>



                  </div>



                  <div class="tab-pane fade" id="astrophysics" role="tabpanel" aria-labelledby="astrophysics-tab">

                    <h3 class="text-danger">জ্যোতির্বিজ্ঞান </h3>

                    <b>হাবলের মহাসম্প্রসারণ সূত্র বা হাবল বিধিঃ </b> মহাবিশ্ব অত্যন্ত দ্রুত গতিতে সম্প্রসারিত হচ্ছে।সম্প্রসারিত বেগের মান তাদের দূরত্বের সমানুপাতিক। <br>
                    পৃথিবী থেকে কোন গ্যালাক্সির দূরত্ব d এবং ক্রমশ সরে যাওয়ার বেগ v হলে হাবল সূত্রানুসারে,<br>
                    <h5 class="text-primary font-weight-bold"> \(v=Hd\)</h5>

                    \( H = \)হাবল ধ্রুবক=\(  72 \mathrm{kms}^{-1} / \mathrm{MPC}=2.334 \times 10^{-18} \mathrm{s}^{-1} \) <br>

                    <br>
                    \(\begin{aligned}
                    1 \mathrm{MPC} \text { (Mega Parsec) } &=10^{6} \mathrm{PC}(\text { Parsec }) \\
                    &=3.26 \times 10^{6} \mathrm{ly} \text { (light year) } \\
                    &=3.084 \times 10^{10} \mathrm{km} \\
                    &=3.084 \times 10^{22} \mathrm{m}
                    \end{aligned}
                    \)
                    <br>
                    হাবল ধ্রুবকের একক \(s^{-1}\) ।এর বিপরীত সংখ্যাকে \(H^{-1}\) হাবল সময় বলা হয়।<br> <br>
                    <b>ঈশ্বর কণাঃ </b> হিগস বোসন কণাকে ঈশ্বর কণা বলা হয়।<br>
                    <b>কোয়ার্কঃ</b> অতি পারমাণবিক কণা যা দ্বারা প্রোটন ও নিউট্রনসমূহ গঠিত হয়।<br>
                    <b>সুপারনোভাঃ</b> নক্ষত্রের ভর যখন দুই থেকে পাঁচ সৌরভারে মধ্যে থাকে তখন তা সংকোচনের সময় এমন একটি ধাপে পৌঁছায় যে এটি এর বহিস্থ আস্তরণ ছুড়ে দিয়ে অত্যন্ত উজ্জ্বল হয়ে যায়।একে বলা হয় সুপারনোভা।<br><br>
                    <b>রক্তিম দৈত্যঃ</b> নক্ষত্রের হাইড্রোজেন জ্বালানি ফুরিয়ে গেলে সংকোচনের ফলে বহির্ভাগে প্রসারণ ঘটে, ফলে নক্ষত্রের আকার অনেক বড় হয় এবং তাপমাত্রা কমে যাওয়ায় পৃষ্ঠ থেকে নির্গত আলোর লালাভ দেখা যায়।এই নক্ষত্রকে রক্তিম দৈত্য বলে।<br>
                    ⚫ যে সমস্ত নক্ষত্রের ভর সূর্যের ভরের 1.4 গুণ থেকে কম সেগুলো <b>শ্বেত বামন</b> হবে। তারা আস্তে আস্তে তাপীয় শক্তি বিকিরণে স্তিমিত হয়ে কালো বামন হবে এবং নক্ষত্রের জীবনচক্র শেষ করবে।<br>
                    ⚫ যে সমস্ত নক্কত্রের ভর সূর্যের ভরের প্রায় 1.4 গুণ থেকে 3 গুণের মধ্যে সেগুলো <b>নিউট্রন স্টার বা নিউট্রন নক্ষত্র।</b> <br>
                    ⚫ যে সমস্ত নক্ষত্রের ভর সূর্যের ভরের গুনের চেয়ে বেশি সেগুলো <b>কৃষ্ণবিবর বা কৃষ্ণগহবর(Black hole)</b> হবে। <br><br>
                    <b>কৃষ্ণগহবরঃ</b> প্রচন্ড মহাকর্ষ বলের জন্য মহাকাশে এমন কিছু বস্তু বা জায়গা আছে যা থেকে আলো বা কোন কিছু বেরিয়ে আসতে পারেনা।এরূপ বস্তু বা জায়গাকে কৃষ্ণগহবর বলে।<br><br>
                    <b>ঘটনা দিগন্তঃ</b> কৃষ্ণবিবর অঞ্চলের সীমাকে ঘটনা দিগন্ত বলে।ঘটনা দিগন্তের ব্যাসার্ধকে শোয়ার্জ শিল্ড ব্যাসার্ধ বা সংকট ব্যাসার্ধ \( R_{5} \) বলে।<br>
                    <h5 class="text-primary font-weight-bold">  \(R_s=\frac{2GM}{C}\)</h5>
                    M = নক্ষত্রের ভর<br><br>

                    </div>



          </div>
        </div>
      </div>
    </div>







     <!--Footer -->

        <footer class="page-footer  teal darken-2">
            <div class="container">
              <div class="row">
                <div class="col l6 s12">
                  <h4 class="white-text">  <b>HSC-dojo</b>  </h4>
                  <p class="grey-text  text-lighten-4">We have arranged high-quality education materials. They will help you to
                      get better grasp within minutes. And guess what! They are
                      absolutely free!! <br>
                      We are constantly working to enrich the blog section. <br>
                      Support our journey.  <i class="material-icons ">favorite</i>

                  </p>
                </div>
                <div class="col l4 offset-l2 s12">

                  <ul>
                    <li><a class="btn-floating btn-medium " target="_blank" href="https://www.instagram.com/hscdojo"><i class="fa fa-instagram"></i></a></li> <br>
                    <li><a class="btn-floating btn-medium " target="_blank" href="https://www.facebook.com/hscdojo"><i class="fa fa-facebook"></i></a></li> <br>
                    <li><a class="btn-floating btn-medium " target="_blank" href="https://wa.me/8801838660303"><i class="fa fa-whatsapp"></i></a></li> <br>
                    <li><a class="btn-floating btn-medium " target="_blank" href="https://www.facebook.com/hscdojo"><i class="material-icons">message</i></a></li> <br>
                    <li><a class="btn-floating btn-medium " target="_blank" href="mailto:hscdojo.bd@gmail.com?subject=Website Inquiry"><i class="material-icons">mail</i></a></li> <br>
                    <li><a class="btn-floating btn-medium " target="_blank" href="https://www.youtube.com/channel/UCc0C7a3xN1vIBl80GiTUrFQ"><i class="fa fa-youtube"></i></a></li> <br>

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
     <script>
               document.addEventListener('DOMContentLoaded', function() {
              var elems = document.querySelectorAll('.sidenav');
              var instances = M.Sidenav.init(elems);
                });





     </script>

      <!--JavaScript at end of body for optimized loading-->

      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <!-- Bootstrap script -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      </body>
  </html>