<!DOCTYPE html>
  <html>
    <head>
        <title>Physics 1st Paper</title>
    
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
            <h6 text-align="center">(প্রথম পত্র)</h6>
            <br>
            <!--list starts from here-->   
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active"  data-toggle="pill" href="#Measurement" role="tab" aria-controls="Measurement" aria-selected="true"> পরিমাপ </a>
            <a class="nav-link"  data-toggle="pill" href="#Vector" role="tab" aria-controls="Vector" aria-selected="false">ভেক্টর</a>
            <a class="nav-link "  data-toggle="pill" href="#Kinematics" role="tab" aria-controls="Kinematics" aria-selected="true">গতিবিদ্যা</a>
            <a class="nav-link "  data-toggle="pill" href="#Newtonian-Mechanics" role="tab" aria-controls="Newtonian-Mechanics" aria-selected="true">নিউটনিয় বলবিদ্যা</a>
            <a class="nav-link "  data-toggle="pill" href="#work_energy" role="tab" aria-controls="work_energy" aria-selected="true"> কাজ  ক্ষমতা  ও শক্তি</a>
            <a class="nav-link "  data-toggle="pill" href="#gravitation" role="tab" aria-controls="gravitation" aria-selected="true">মহাকর্ষ ও অভিকর্ষ</a>
            <a class="nav-link "  data-toggle="pill" href="#ilasticity" role="tab" aria-controls="ilasticity" aria-selected="true">স্থিতিস্থাপকতা</a>
            <a class="nav-link "  data-toggle="pill" href="#fluid" role="tab" aria-controls="fluid" aria-selected="true">প্রবাহী</a>
            <a class="nav-link "  data-toggle="pill" href="#shm" role="tab" aria-controls="shm" aria-selected="true">সরল ছন্দিত স্পন্দন</a>
            <a class="nav-link "  data-toggle="pill" href="#wave" role="tab" aria-controls="wave" aria-selected="true">তরঙ্গ</a>
            <a class="nav-link "  data-toggle="pill" href="#heatGas" role="tab" aria-controls="heatGas" aria-selected="true">তাপ এবং গ্যাস</a>
            <br><br><br><br>

          </div>
        </div>
    </div>
        <div class="col-9">
          <div class="tab-content" id="v-pills-tabContent">
            
            <div class="tab-pane fade show active" id="Measurement" role="tabpanel" aria-labelledby="Measurement-tab">
				
				<h5 class="text-success"><b>Lesson 1: গুরুত্বপূর্ণ সঙ্গা</b></h5><br>
				<b>ধারণা বা প্রত্যয় (concept):</b> ধারণা হচ্ছে কোন বস্তু বা ঘটনা সম্পর্কে মনের মাঝে গড়ে উঠা একটি ছবি। অর্থের বোধগত এককই হলো ধারণা।<br><br>
	<b>সূত্র (Laws):</b> সূত্র হলো সত্য ঘটনার পর্যবেক্ষণমূলক ও পরীক্ষিত বিবৃতি।<br><br>
	<b>নীতি (Principle):</b> নীতি হলো বৈজ্ঞানিক ধারণা যা ভৌত আচরণসমূহে প্রায়োগিক পর্যবেক্ষণের মাধ্যমে গঠিত হয়। নীতি এক ধরণের গাণিতিক বা যৌক্তিক সংজ্ঞা। পদার্থবিজ্ঞানের ভিত্তিকে নীতি বলে।<br><br>
	<b>স্বতঃসিদ্ধ স্বীকার্য (Postulates):</b> বিনা প্রমাণে কোন কিছু মেনে নেওয়াকে স্বীকার্য বলে।<br><br>
	<b>অনুকল্প (Hypothesis):</b> অনুকল্প হচ্ছে স্বশিক্ষিত অনুমান বা সংগত ব্যাখ্যা।বার বার পরীক্ষার পরেও প্রকৃত সত্য না পাওয়া গেলে ঐ পর্যবেক্ষণ বা পরীক্ষার যুক্তিসংগত ব্যাখ্যাই হলো অনুকল্প।<br><br>
	<b>তত্ত্ব (Theory):</b> অনুকল্প এবং সূত্র ইত্যাদির ভিত্তিতে পর্যবেক্ষিত প্রকৃতির সুশৃংখল ক্রম ব্যাখ্যা করাকে তত্ত্ব বলে।কোন কিছুর ব্যাখ্যার জন্য যে আনুষ্ঠানিক চিন্তাধারা তাকে তত্ত্ব বলে। তত্ত্ব মূলত অনুকল্পের উন্নত রূপ।পরীক্ষা দ্বারা প্রমাণিত অনুকল্পই হচ্ছে তত্ত্ব।<br><br>
	পদার্থবিজ্ঞানকে দুই ভাগে ভাগ করা হয়েছে-<br>
	<ol>
		<li> চিরায়ত (সনাতন) পদার্থবিজ্ঞান (Classical Physics)</li>
		<li>	 আধুনিক পদার্থবিজ্ঞান (Modern Physics)</li></ol>
	<b>মৌলিক এককঃ</b> মৌলিক রাশির একককে মৌলিক একক বলে।<br><br>
	<b>মৌলিক একক তিনটিঃ</b> দৈর্ঘ্যের একক,ভরের একক,সময়ের একক।<br><br>
	<b>লব্ধ একক বা যৌগিক এককঃ</b> মৌলিক একক থেকে প্রাপ্ত এককসমূহ।যেমনঃক্ষেত্রফলের একক বর্গমিটার,বলের একক নিউটন ইত্যাদি।<br><br>
	<b>ব্যবহারিক এককঃ</b> ব্যবহারিক কাজের সুবিধার্তে মৌলিক কাজের উপগুণিতক বা গুণিতক কে অথবা সুবিধাজনক নতুন একক ব্যবহার হয় যা হচ্ছে ব্যবহারিক একক। যেমনঃ কিলোমিটার,মিলিগ্রাম,অশ্বক্ষমতা (HP)<br><br>
	
	<h5 class="text-success"><b>Lesson 2: পরিমাপের মূলনীতিঃ</b></h5><br>
	মৌলিক একক প্রকাশের তিনটি পদ্ধতি আছে-<br>
	<ol>
	<li> F.P.S পদ্ধতি বা ব্রিটিশ পদ্ধতি</li>
	<li> C.G.S পদ্ধতি বা ফ্রেঞ্চ পদ্ধতি</li>
	<li> M.K.S পদ্ধতি</li></ol>
	<b>এককের আন্তর্জাতিক পদ্ধতি(S.I Unit):</b>  বিভিন্ন দেশে বিভিন্ন একক চালু থাকায় বাস্তব ক্ষেত্রে মাপ-ঝোকের বেশ অসুবিধা হয়।এই অসুবিধা দূর করার জন্য ১৯৬০ খ্রীষ্টাব্দে বিজ্ঞানীরা আন্তর্জাতিকভাবে একটি পদ্ধতির সুপারিশ করেন যা হচ্ছে এস.আই একক পদ্ধতি।<br><br><br>
	
	<h5 class="text-success"><b>Lesson 2: পরিমাপের ত্রূটিঃ</b></h5><br>
	<ol>
		<li>	যান্ত্রিক ত্রূটি তিন ধরণের- ১. শূণ্য যান্ত্রিক ত্রূটি ২. পিছট ত্রূটি ৩. লেভেলের ত্রূটি বা অনুভূমিক রেখা ত্রূটি</li>
	<li>	পর্যবেক্ষণ ত্রুটিঃ পাঁচ ধরণের- ১. প্রান্ত দাগ ত্রূটি ২. লম্বন ত্রূটি ৩. সূচক ত্রূটি ৪. পরিবেশগত ত্রূটি ৫. ব্যক্তিগত ত্রূটি</li>
	<li>	অনিয়মগত বা এলোমেলো ত্রূটি</li>
	<li>	নিয়মিত বা পুনরাবৃত্তিক ত্রূটি</li>
	</ol>
	<b>পরিমাপের ত্রূটি নির্ণয়ঃ</b>
	<ol>
	<li>পরম ত্রূটি = প্রকৃত মান-পরীক্ষালব্ধ মান</li>
	<li>আপেক্ষিক ত্রূটি = (পরম ত্রূটি)/প্রকৃতমান</li>
	<li>শতকরা ত্রূটি = আপেক্ষিক ত্রূটি × ১০০%</li>
	<li>গড় ত্রূটি বা গড় বিচ্যুতি,\(d = \frac{\left|d_1\right|+\left|d_2\right|+.......+\left|d_n\right|}{n}\)
	এখানে,n সংখ্যক পাঠের বিচ্যুতিসমূহ হচ্ছে d1,d2,………,dn
	যেখানে,d1 = x1-A , d2 = x2-A ,……dn = xn-A
	n সংখ্যক পাঠের প্রাপ্ত মান x1,x2,…..,xn
	গড়মান, \(A=\frac{\left|x_1\right|+\left|x_2\right|+.......+\left|x_n\right|}{n}\)
	প্রকৃত মাপ ,\(x=\ A\pm d\)</li>
	<li>প্রমাণ ত্রূটি বা প্রমাণ বিচ্যুতি(D):
	\(D=\sqrt{\frac{d_1^2 + d_2^2+\ldots\ldots.+d_n^2}{n}}\)</li>
	
	<li>সম্ভাব্য ত্রূটি বা সম্ভাব্য বিচ্যুতি , \(P\ =\frac{2D}{3\sqrt n}\)</li>
	<li>পরিমাপের শুদ্ধমাত্রাঃ x একটি পরিমাপ্য ভৌত রাশি যা a,b ও c তিনটি রাশির সাথে সম্পর্কযুক্তঃ \(x\ =\frac{a^mb^n}{c^p}\)
	a,b ও c পরিমাপে সর্বোচ্চ সম্ভাব্য ত্রূটি যথাক্রমে \(\pm∆a,±∆b,\ \pm∆c\)  এবং এর ফলে x পরিমাপের সর্বোচ্চ সম্ভাব্য ত্রূটি \(\pm∆x
	\therefore x\) এর সর্বোচ্চ সম্ভাব্য আনুপাতিক ত্রূটি,  \((∆x/x)_max=m(∆a/a)+n(∆b/b)+p(∆c/c)\)</li>
	</ol>
	
	<h5 class="text-success"><b>Lesson 3: বিভিন্ন সূত্রাবলীঃ</b></h5><br>
	<ol>
	<li>লঘিষ্ঠ গুণন বা ধ্রুবক  LC=পীচ/(বৃত্তাকার স্কেলের ভাগসংখ্যা)</li>
	<li>স্ফেরোমিটারের সাহায্যে পাতের পুরুত্ব (h) নির্ণয়ঃ<br>
	\(h = L + C \times L_c - \pm e\)<br>
	L= রৈখিক স্কেল পাঠ <br>
	C=বৃত্তাকার স্কেল পাঠ<br>
	LC=লঘিষ্ঠ ধ্রুবক<br>
	e=যান্ত্রিক ত্রূটি</li>
	<li>স্ফেরোমিটারের সাহায্যে গোলকীয় তলের বক্রতার ব্যাসার্ধ (R) নির্ণয়ঃ<br>
	\(R=\frac{d^2}{6h}+\frac{h}{2}\)<br>
	\([h = L + C \times L_c - (\pm e)]\)<br>
	d=স্ফেরোমিটারের তিন পায়ের গড় দূরত্ব</li>
	h=তিনটি পায়ের তল হতে বক্রতলের উচতা বা নিম্নতা</li>
	</ol>
	<br><br><br>

			</div>
			<!--vector-->
            
            <div class="tab-pane fade" id="Vector" role="tabpanel" aria-labelledby="Vector-tab">
				<b>Idea 01:</b> ভেক্টর প্রকাশ করতে মান ও দিক উভয়ই প্রয়োজন। কোন কোন ক্ষেত্রে ভেক্টরের মান দ্বারা অন্য কোন স্কেলার রাশিকে প্রকাশ করা যায়। <br> 
				<b>Idea 02: </b> যেকোন ভেক্টরের দুটি বিন্দু থাকে- আদিবিন্দু ও শেষবিন্দু। ভেক্টরের দিক হবে আদিবিন্দু থেকে শেষবিন্দুর দিকে।  <br> 
				<b>Idea 03:</b>  সরণঃ অবস্থান ভেক্টরের পরিবর্তনকে সরণ বলে। অর্থাৎ, কোন কণার যাত্রাপথের আদিবিন্দু ও শেষবিন্দুর মধ্যবর্তী ন্যূনতম সরলরৈখিক দূরত্বই হল সরণ। <br> 
				অতিক্রান্ত দূরত্বঃ কোন কণার যাত্রাপথের সম্পূর্ণ পথকেই মোট অতিক্রান্ত দূরত্ব বলে। <br><br>
			
				<img src ="image/blog/CP_1.1.png" height="30%" width="35%"  alt="Vector Path Example"/><br> <br>
				
				উপরের চিত্রে A বিন্দু হতে B বিন্দুতে যাওয়ার তিনটি পথ দেখানো হয়েছে। রঙিন পথগুলো দূরত্ব নির্দেশ করে এবং কালো সরলরেখাটি নির্দেশ করে কণাটির সরণ। খেয়াল করে দেখ, রঙিন পথগুলোর শেষে কোন তীরচিহ্ন দেয়া হয়নি। এবার নিশ্চয়ই বলতে পারবে কোন রাশিটি স্কেলার আর কোনটি ভেক্টর। </p><br>
				
					  <h5 class="text-success"><b>Lesson 2: অবস্থান ভেক্টরঃ</b></h5>
					  <b>Idea 01:</b>
					  \(XYZ \) ত্রিমাত্রিক স্থানাঙ্ক ব্যবস্থায় মূলবিন্দু “O” এর সাপেক্ষে যে কোন বিন্দু “A” এর অবস্থান ভেক্টর নিম্নরূপে প্রকাশ করা হয় <br> 
				\( OA=A=r \) <br> 
				
					  <img src ="image/blog/CP_1.2.png" height="30%" width="35%"  alt="অবস্থান ভেক্টর"/><br> 
				
				
				
				
				<b>Idea 02:</b> একক ভেক্টরঃ কোন ভেক্টরকে তার মান দ্বারা ভাগ করলে নতুন যে ভেক্টরটি পাওয়া যায় তাকে একক ভেক্টর বলে। <br> 
				<img src ="image/blog/CP_1.3.png" height="40%" width="50%"  alt="একক ভেক্টর"/><br> 
				<b>Idea 03:</b> আয়ত একক ভেক্টরঃ ত্রিমাত্রিক স্থানাঙ্ক ব্যবস্থায় তিনটি ধনাত্মক অক্ষ বরাবর যে তিনটি একক ভেক্টর কল্পনা করা হয়, তাদের আয়ত একক ভেক্টর বলে। যদি A বিন্দুর স্থানাঙ্ক (x, y, z) হয় তবে আমরা আয়ত একক ভেক্টরের সাহায্যে নিম্নরূপে প্রকাশ করতে পারি। </p>
				\( \vec{A}=x \hat{i}+y \hat {j} + z \hat{k} \) <br> 
				\( |\vec{A}|= \sqrt{x^2+y^2+z^2} \) <br> <br> 
		  
				<h5 class="text-success"><b>Lesson 3: ভেক্টর যোগঃ</b></h5> 
				<br>দুটি ভেক্টর তখনই যোগের উপযোগী হবে যখন তারা একজাতীয় রাশি। এরূপ ভেক্টর যোগফলকে তাদের লব্ধি বলা হয়। যেমনঃ কোন বিন্দুতে ক্রিয়ারত দুটি ত্বরণের লব্ধি ভেক্টর যোগের মাধ্যমে বের করা সম্ভব। কিন্তু বেগ ও ত্বরণের লব্ধি বের করা সম্ভব নয়, কেননা, দুটি ভিন্ন জাতীয় রাশি একটি অপরটির উপর উপরিপাতিত হয় না।
				
					  <img src ="image/blog/CP_1.4.png" height="60%" width="70%" " alt=" ভেক্টর যোগ"/>
				<br>
			   <b>সামান্তরিক সূত্রঃ </b><br><br>
			   কোন নির্দিষ্ট বিন্দুতে দুটি ভেক্টর একই সময়ে ক্রিয়া করলে তাঁদের লব্ধি (ভেক্টর যোগফল) এ সূত্রের সাহায্যে সহজেই বের করা যায়।  <br><br>
			   <h5 class="text-primary"> \( R= \sqrt {P^2+Q^2+2PQ \cos \theta} \)</h5>  <br> <br>
			   <h5 class="text-primary"> \( \tan \theta  = \frac{P \sin \alpha }{Q +P \cos \alpha} \) </h5> <br> <br>
		  
		  
				<h5 class="text-success"><b>Lesson 4: ভেক্টর বিয়োগঃ</b></h5><br> ভেক্টর বিয়োগ হচ্ছে এক প্রকার ভেক্টর যোগ, যেখানে বিয়োগকৃত ভেক্টর রাশিটিকে ১৮০ ডিগ্রী ঘুরিয়ে দিয়ে লব্ধি বের করা হয়। অর্থাৎ, P এবং -Q এর লব্ধি হচ্ছে  P হতে Q এর বিয়োগফল। -Q হল Q এর বিপরীত ভেক্টর; Q কে ১৮০ ডিগ্রী কোণে ঘুরালেই -Q পাওয়া যাবে।
				কাজেই সামান্তরিক সূত্র থেকে পাই,<br>
				<img src ="image/blog/CP_1.5.png" height="60%" width="70%"  alt="  সামান্তরিক সূত্র "/><br>
			  
				\(R'= \sqrt {P^2+Q^2+2PQ \cos (180^{\circ}-\alpha)}  \)  <br> 
				\( \Rightarrow  R'= \sqrt {P^2+Q^2-2PQ \cos (\alpha)}  \)  <br>  <br>
		  
				\(\tan {\theta}'  = \frac{ P \sin (180-\alpha)}{P+Q \cos (180-\alpha) }   \)  <br> <br>
				\(\Rightarrow  \tan  {\theta}' = \frac{P \sin \alpha}{P-Q \cos \alpha}   \) <br> <br> 
		  
		  
					  <h5 class="text-success"><b>Lesson 5: আপেক্ষিক বেগ</b></h5><br>
				আপেক্ষিক বেগ হল ভেক্টর বিয়োগের একটি বাস্তব প্রয়োগের ক্ষেত্র। \( v_1\) এর সাপেক্ষে\( v_2 \) এর আপেক্ষিক বেগ হচ্ছে \(v_2\) হতে \(v_1 \) এর ভেক্টর বিয়োগ। 
				\( v_{21}= v_2-v_1 \) <br> 
				<p >মোটকথা, যার সাপেক্ষে আপেক্ষিক বেগ বের করতে হবে সেই বেগটিকে বিয়োগ করতে হয়। ব্যাপারটা এভাবে কল্পনা করা যায়-<br> 
				আমরা যখন কোনো যানবাহনে গতিশীল থাকি, তখন আমরা নিজেদেরকে স্থির মনে করি। সেই বিবেচনা থেকে আমরা যখন অন্য কোন গতিশীল বস্তুর বেগ বের করি, তখন আমরা নিজেদের বেগটাকে বিয়োগ দিয়ে নিজেদেরকে স্থির করে নিই।
				</p>
				<p><b>Example:</b>
				ধরা যাক, উল্লম্বভাবে পতিত বৃষ্টির বেগ \( 4 \;m/s \) এবং এক ব্যক্তি \(3\;m/s \) বেগে রাস্তা দিয়ে দৌড়ে যাচ্ছে। ব্যক্তিটি স্থির থাকলে তাকে , উল্লম্বভাবে ছাতা মেলতে হত। কিন্তু ব্যক্তিটি চলমান বিধায় তাকে বৃষ্টি থেকে বাঁচার জন্য তার নিজের সাপেক্ষে বৃষ্টির আপেক্ষিক বেগের দিকে ছাতা মেলতে হবে। 
				যেহেতু ব্যক্তিটির সাপেক্ষে বৃষ্টির বেগ, তাই ব্যক্তির বেগকে  ১৮০ ডিগ্রী কোণে ঘুরানো হল। </p>
				
				<img src ="image/blog/CP_1.6.png" height="60%" width="70%"  alt="Relative velocity Example"/><br> 
			  
				চিত্র হতে, 
				\(34^0\)  কোণে ছাতা ধরতে হবে। <br> <br> 
				
				
				
				<h5 class="text-success"><b>Lesson 6: ভেক্টর বিভাজনঃ </b></h5><br>
				একটি ভেক্টরকে যদি দুই বা ততোধিক ভেক্টরে এমনভাবে বিভক্ত করা যায়, যাদের লব্ধি হবে মূল ভেক্টর, তবে এ বিভক্তিকরণ প্রক্রিয়াকে বলে ভেক্টর বিভাজন। বিভাজিত অংশগুলোকে মূল ভেক্টরের উপাংশ বলে।  OAB ত্রিভুজ হতে পাই,</p>
				<img src ="image/blog/CP_1.7.png" height="60%" width="70%"  alt="ভেক্টর বিভাজন"/><br> 
			  
				
				\( \vec{P} \) ও  \( \vec{Q} \) ভেক্টরদ্বয় \( \vec{R} \) এর উপাংশ। ত্রিভুজের ধর্মানুসারে,  <br> 
				\( P = \frac{R \sin \beta}{\sin(\alpha + \beta)} \) <br> 
				\( Q = \frac{R \sin \alpha}{\sin(\alpha + \beta)}\) <br>  <br> 
				
				<b>লম্বাংশ বিভাজনঃ</b> <br>
					যদি উপাংশদ্বয় পরস্পর লম্ব হয়,<br>
				   \( P = \frac{R \sin 90-\alpha}{\sin 90} \) <br> 
				\( \boxed{ P = R \cos \alpha } \) <br> <br> 
				
				\( Q = \frac{R \sin \alpha}{\sin 90}\) <br>
				\( \boxed{Q = R \sin \alpha }\) <br>  <br> 
				
				
				<h5 class="text-success"> <b>Lesson 7: ডট গুণনঃ </b></h5>ডট গুণনের ফলে আমরা একটি স্কেলার রাশি পাই।<br>
					  <img src ="image/blog/CP_1.74.png" height="30%" width="35%"  alt="Dot Product"/><br> 
			  
				\( \overrightarrow{A} \cdot \overrightarrow{B} = AB \cos(\theta) \) <br> 
				[মধ্যবর্তী কোণ নির্ণয়ের জন্য ভেক্টরদ্বয়কে tail to tail যুক্ত করতে হয়]<br>
				\( \therefore \theta = \cos^{-1}{(\frac{\overrightarrow{A} \cdot \overrightarrow{B}}{|AB|}) } \) <br> 
				যা মধ্যবর্তী কোণ নির্ণয়ে ব্যবহার করা যায়।<br> 
				\(A = A_x \hat i + A_y \hat j + A_z \hat k \)  এবং 
				\(B = B_x \hat i + B_y \hat j + B_z \hat k \) <br>  হলে, 
				  \( \boxed{ \overrightarrow{A} \cdot \overrightarrow{B} = A_x B_x +A_y B_y + A_z B_z }\) <br> <br> 
				
					  <b>দুটি ভেক্টর লম্ব কিনা যাচাইকরণঃ </b> <br> 
				\( if \; \vec{A} \wedge \vec{B} = 90  \)  <br>
				\( \Rightarrow \; \cos \theta =  \cos 90 = 0  \)  <br>
					  \( \boxed{\therefore \; \vec{A} \cdot \vec{B} = 0} \)  <br><br> 
		  
					  <b>আয়ত একক ভেক্টরের ডট গুণফলঃ </b> <br> 
				\( \hat{i} \cdot \hat{i} = \hat{j} \cdot \hat{j} = \hat{k} \cdot \hat{k} = 1 \)  <br>
				\( \hat{i} \cdot \hat{j} = \hat{j} \cdot \hat{k} = \hat{k} \cdot \hat{i} = 0 \)  <br> <br>
					 
				  <b>ভেক্টরের ডট গুণফলঃ </b> <br> 
				\( \vec{A} \cdot \vec{B} = \vec{B} \cdot \vec{A}  \)  <br> <br>
					  
				<b>লম্ব অভিক্ষেপ ও আনুভূমিক উপাংশঃ </b> <br> 
				\( \vec{A} \cdot \vec{B} = AB \cos \theta  \)  <br>
				\( \vec{A} \cdot \vec{B} = A \times B \cos \theta  \)  <br>
				\( \vec{A} \cdot \vec{B} = \vec{A} \times  \vec{A}  \) এর উপর  \( \vec{B} \) এর অভিক্ষেপ  <br><br>
		  
				<h5 class="text-success"><b>Lesson 8: ভেক্টরের ক্রস গুণন বা ভেক্টর গুণনঃ</b></h5>
				\(\vec{A} \times \vec{B} = AB \sin{\theta} \hat{n} \)<br>
				\(\hat{n}\) হল \(\vec{A}\) ও \(\vec{B}\) উভয় ভেক্টরের উপর লম্ব একক ভেক্টর। <br><br>
				
					 
					  <h5 class="text-success"><b>Lesson 9: স্রোত এবং নৌকা সংক্রান্ত সমস্যাঃ</h5></b><br> 
		  
					  <img src ="image/blog/CP_1.8.png" height="40%" width="50%" alt="Boat & River"/><br> 
			  
		  
				<p>দৈর্ঘ্য বরাবর লব্ধির উপাংশ =   \( u\cos 0 + v \cos \alpha = u+v \cos \alpha \) [এটি দৈর্ঘ্য বরাবর আনুভুমিক সরণ ঘটায়] </p>
				<p>প্রস্থ বরাবর লব্ধির উপাংশ = \(u\sin 0 + v\sin \alpha = v \sin \alpha \) [এটি নদী পাড় হতে সাহাজ্য করে]
				কাজেই নদী পার হতে প্রয়োজনীয় সময় = \( \frac{d}{v \sin \alpha} \) </p>
				<p >সরবনিম্ন সময় = \( \frac{d}{v} \)<br>
				এক্ষেত্রে নৌকা চালানোর দিক, \( \alpha = 90 \;degree \) <br>
				অর্থাৎ নৌকার আনুভূমিক সরণ, \( s=(u+v \cos \alpha)t \) </p>
				<p>এখন যদি নৌকাটি সরাসরি বিপরীত বিন্দুতে যেতে চায় তাহলে \(  s=0 \Rightarrow u+v \cos \alpha=0\) <br>
				সেক্ষেত্রে নৌকা চালানোর দিক হবে, \( \alpha =  \cos^{-1}(\frac{-u}{v}) \)</p><br><br>
		  
				
				
				<h5 class="text-success"><b>Lesson 10: ভেক্টর ক্যালকুলাসঃ</b></h5><br>
				<img src ="image/blog/CP_1.12.png" height="30%" width="30%"  alt="navla"/><br> <br><br><br>
					  <p ><b>গ্র‍্যাডিয়েন্টঃ</b></p>
				<img src ="image/blog/CP_1.9.png" height="30%" width="40%"   alt="Gradient"/><br> <br><br>
				<p ><b>কার্লঃ</b></p>
				<img src ="image/blog/CP_1.10.png" height="20%" width="30%"   alt="Curl"/><br> <br><br><br><br><br><br><br>
				<p ><b>ডাইভারজেন্সঃ</b></p>
				<img src ="image/blog/CP_1.11.png" height="30%" width="40%"   alt="Divergance"/><br> 
					  <br> <br> <br><br><br>
     
     
            </div>
			
	
	 <!--Kinematics-->
    <div class="tab-pane fade" id="Kinematics" role="tabpanel" aria-labelledby="Kinematic-tab">
    
    <h3 class="text-success">Lesson 1: একমাত্রিক গতি</h3><br>
    একমাত্রিক গতি সম্পন্ন কণার গতির প্রতিটি পদের সাথে একটি করে মাত্রা জড়িত থাকে। তাই আমরা বীজগাণিতিক ভাবে এদের যোগ বিয়োগ করতে পারি। 
    আমাদের মনে রাখতে হবে, এক্ষেত্রে প্রতিটি গতীয় সমীকরণে ত্বরণ সমত্বরণ হয়ে থাকে 
        \(   v = u \pm at \)<br>
    \(   v^2 = u^2 \pm 2as \)<br>
    \(   s = ut \pm \frac{1}{2} a t^2\)<br><br>
    
    ত্বরণের ক্ষেত্রে  \(a\) ধনাত্মক এবং মন্দনের ক্ষেত্রে \( a \) ঋণাত্মক হয়ে থাকে। একই ভাবে আমরা পড়ন্ত বস্তুর ক্ষেত্রে সূত্র গুলোকে লিখতে পারি,
    \(   v = u \pm gt \)<br>
    \(   v^2 = u^2 \pm 2gh \)<br>
    \(   h = ut \pm \frac{1}{2} g t^2\)<br><br>
    
    
    <p >খাড়া উপরের দিকে নিক্ষিপ্ত বস্তুুর সর্বাধিক উচ্চতায় \(H_{max}\) উঠতে \(t_1\)  এবং নামতে  \( t_2\) সমান সময় লাগে .</p>
    \(  t_1 = t_2 = \frac{u}{g}\)<br>
    \( H_{max} = \frac{u^2}{2g}\)<br><br>
    
    <p >বস্তুটি যতক্ষণ পর পুনরায় নিক্ষেপন বিন্দুতে ফিরে আসে তাকে উড্ডয়নকাল \( T\) বলে.</p>
    \( T = t_1 + t_2 = \frac{2u}{g}\)<br><br><br>
  
  
    
    <h3 class="text-success">Lesson 2: দ্বিমাত্রিক গতি</h3><br>
    <p >দ্বিমাত্রিক গতিসম্পন্ন কণার গতীয় সমীকরণের প্রতিটি পদের দুইটি করে উপাংশ থাকে, যার ফলে দ্বিমাত্রিক গতি সম্পন্ন কনার সকল ক্যালকুলেশন ভেক্টর উপায়ে করতে হয়। দ্বিমাত্রিক গতিসম্পন্ন কনার গতিপথ বক্ররেখা হলে, কোন নির্দিষ্ট সময়ে কনার রৈখিক বেগের অভিমুখ ঐ সময়ে কনার অবস্থান বিন্দুতে অঙ্কিত স্পর্শক বরাবর হয়ে থাকে।</p>
    <img src ="image/blog/CP_3.1.png"  alt="" height="30%" width="50%"/><br> <br> 
    
    
    চিত্র অনুযায়ী  \(t \) সময়ে কনার বেগ, \( v = \sqrt{v_x^2+v_y^2} \) <br> <br> 
    
    <h3 class="text-success">Lesson 3: প্রক্ষেপক</h3><br>
      <img src ="image/blog/CP_3.2.png"  alt="" height="40%" width="60%"/><br> <br> 
        
        
    নিক্ষেপণ বেগ, \(   u \Rightarrow \)<br>
    \(   u_x = u \cos \theta_0 \)<br>
    \(  u_y = u \sin \theta_0 \)<br><br>
      
    অভিকর্ষজ ত্বরণ: \(   g \Rightarrow  g_x =0 \; , \; g_y = -g\)<br> <br>
    
    তাৎক্ষনিক বেগ:\(  v = u + at  \Rightarrow    \)<br>
    \(  v_x = u_x   \)<br>
    \(  v_y = u_y -gt   \)<br><br>
    
    প্রাসের অবস্থান, :\( s \)<br> 
    \(  \vec s = x \hat{i} + y \hat{j} \Rightarrow  \)<br>
    \(  x= u_xt   \)<br>
    \(  y= u_y t - \frac{1}{2} g t^2  \)<br><br> 
    
    কাজেই  \(t\) সময়ে প্রক্ষেপকের বেগের মান এবং দিক :<br> 
        \(  v = \sqrt{ v_x^2 + v_y^2 } \)<br>
    \(  \tan \theta  = \frac{v_y}{v_x} \)<br>
    


    <img src ="image/blog/CP_3.3.png"  alt="" height="50%" width="40%"/><br> <br> 
    <p >প্রক্ষেপকের ক্ষেত্রে সর্বাধিক উচ্চতায় (H) উঠার জন্য প্রয়োজনীয় সময় এবং সর্বাধিক উচ্চতা থেকে নামার জন্য প্রয়োজনীয় সময় সমান </p>
    \(  t_1 = t_2 = \frac{u \; \sin \theta_0 }{g}\)<br>
    \( H_{max} = \frac{u^2 \; \sin^2 \theta_0 }{2g}\)<br><br>
    
    
    <p ><b>উড্ডয়নকাল,</b> \( T\): প্রক্ষেপকটি যে সময়ে \(0\)  থেকে \(X\) তে পৌছায়, </p>
    \(T =  t_1 + t_2 = \frac{2 u \; \sin \theta_0 }{g} \) <br> 
    
    <p ><b>সর্বোচ্চ উচ্চতা,</b> \( H\): প্রক্ষেপকের উল্লম্ব দিকে অতিক্রান্ত সর্বাধিক দূরত্ব,</p>
    \(H_{max} = \frac{u^2 \; \sin^2 \theta_0 }{2g}\) <br> 
    
    <p ><b>পাল্লা,</b> \( R\): প্রক্ষেপকের আনুভুমিক দিকে অতিক্রান্ত দূরত্ব, </p>
    \(R = \frac{u^2 \; \sin( 2 \theta_0 )}{g}\) <br> 
    
    <p ><b>সর্বাধিক আনুভূমিক পাল্লা,</b>  নিক্ষেপণ কোন 45 ডিগ্রি হলে আনুভূমিক পাল্লা সর্বাধিক হবে। </p>
    \(R_{max} = \frac{u^2}{g} \) <br><br> 

        <img src ="image/blog/CP_3.4.png" alt="" height="50%" width="40%"/><br> <br> 
    
    নিক্ষেপণ বেগ, \(   u \Rightarrow \)<br>
    \(   u_x = u \)<br>
    \(  u_y = 0 \)<br><br>
      
    তাৎক্ষনিক বেগ:\(  v = u + at  \Rightarrow    \)<br>
    \(  v_x = u  \)<br>
    \(  v_y = u_y - gt   \)<br><br>
    
    প্রাসের অবস্থান, :\( s \)<br> 
    \(  \vec s = x \hat{i} + y \hat{j} \Rightarrow  \)<br>
    \(  x= u_xt = ut   \)<br>
    \(  y= u_y t + \frac{1}{2} g t^2 = \frac{1}{2} g t^2  \)<br><br> 
    
                     কাজেই  \(t\) সময়ে প্রক্ষেপকের বেগের মান এবং দিক :<br> 
        \(  v = \sqrt{ v_x^2 + v_y^2 } \)<br>
    \(  \tan \theta  = \frac{v_y}{v_x} \)<br><br>  
  </div>  

     <!-- Newtonian Mechanics -->
  <div class="tab-pane fade" id="Newtonian-Mechanics" role="tabpanel" aria-labelledby="Newtonian-Mechanics-tab">
	 <h5 class="text-success font-weight-bold"> বল</h5>	  
	<p >একটি সিস্টেমের উপর একই সময় একাধিক বল ক্রিয়া করতে পারে। নির্দিষ্ট সময়ে ক্রিয়ারত সকল বলের লব্ধি সিস্টেমের ভর এবং ত্বরণের গুনফলের সমান হয়।</p>
      <h5 class="text-primary font-weight-bold">\( \boxed{ \sum F = m a }\)<h5> <br>
      বস্তুর গতির দিকে বলের লব্ধি = সিস্টেমের ভর × ত্বরণ <br><br>
      
      <h5 class="font-weight-bold text-success">রকেটের গতি </h5>
      
      রকেটের জ্বালানির সমবেগ = \(V_r \)<br>
      জ্বালানি হ্রাসের হার \( = \frac{dm}{dt} \)<br><br>
      
      জ্বালানি দ্বারা প্রযুক্ত ঊর্ধ্বমুখী ধাক্কা ,<br>
      \(F_r = v_r  \frac{dm}{dt} \)<br><br>
      
      রকেটের উপর প্রযুক্ত ঊর্ধ্বমুখী লব্ধি বল,<br>
      \(\sum F = F_r - mg\)<br><br>
      
      রকেটের ত্বরণ<br>
      \( a = \frac{\sum F}{m}\)<br><br>
      
      <p >এখন, রকেটের গতিকালে রকেটের ভর  \(m\) নিয়মিত পরিবর্তিত হবে। সাধারনতঃ দুইটি নির্দিষ্ট সময়ে আমাদের মান নির্ণয় করতে বলা হয়, যথাঃ  </p>
      (i)উৎক্ষেপণের সময়  <br>
      (ii)জ্বালানি শেষ হবার মুহূর্তে<br><br>
      
      
      <h5 class="text-success font-weight-bold">ভরবেগের সংরক্ষণ সূত্র </h5>
      <p >বস্তুর ভর এবং বেগের গুণফলকে ভরবেগ বলা হয়। <br>
      অর্থাৎ ভরবেগ  \(P = mv\)<br><br>
      
      ক্রিয়া প্রতিক্রিয়া ছাড়া অন্য কোন বাহ্যিক বল না থাকলে নির্দিষ্ট দিকে একটি সিস্টেমের ভরবেগ সংরক্ষিত থাকে
      অর্থাৎ নির্দিষ্ট দিকে , </p>
      মোট আদি ভরবেগ =মোট শেষ ভরবেগ  <br>
      \(\sum \vec { P } _ { i } = \sum \overrightarrow { P _ { f } } \)<br>
      <h5 class="font-weight-bold text-primary">\( \Rightarrow \sum m \vec { u } = \sum m \vec { v }\)</h5>
      \( \text{if initialy the system was static then,}\)<br>
      \( \sum \vec { P } _ { f } = 0 \)<br>
      \( \Rightarrow \overrightarrow { P _ { 1 f } } + \overrightarrow { P _ { 2 f } } + \ldots + \overrightarrow { P _ { n f } } = 0 \)<br>
      <h5 class="text-primary font-weight-bold">\( \overrightarrow { P _ { n f } } = - ( \overrightarrow { P _ { 1 f } } + \overrightarrow { P _ { 2 f } } + \ldots )\) </h5><br>

         
    <h5 class="font-weight-bold text-success">বলের ঘাত </h5>
      <p >খুব অল্প সময়ের জন্য ক্রিয়াশীল বলকে  ঘাত বল বলা হয়। 
       ঘাত বল এবং ঘাত বলের ক্রিয়াকালের গুণফলকে বলের ঘাত বলে </p>
      \(\vec{J}=\int_{t_{1}}^{t_{2}} \vec{F} d t\)<br>
\(\Rightarrow \vec{J}=\overrightarrow{P_{f}}-\overrightarrow{P_{i}}=\overrightarrow{\Delta P}\)<br>
\(=m \vec{v}-m \vec{u}\)  <br><br>
      
      বলের ঘাত=বল ×বলের ক্রিয়াকাল  = ভরবেগের পরিবর্তন <br>
      ধরা যাক একটি বস্তু ধনাত্মক \( X\) অক্ষ বরাবর লম্বভাবে অবস্থিত একটি প্রতিবন্ধকতাকে ধাক্কা দিয়ে  \(-X\) অক্ষ বরাবর ফিরে আসল<br>
      \(\vec{u}=u \hat{i}\)<br>
\(\vec{v}=v(-\hat{i})=-v \hat{i}\)<br>
\(\therefore \vec{J}=J \hat{i}=-m(u+v) \hat{i}\)<br>
  <h5 class="text-primary font-weight-bold">\(J =-m(u+v)\)</h5><br>

      <h5 class="text-success font-weight-bold">জড়তার ভ্রামকঃ</h5>
      <p >কোন অক্ষের সাপেক্ষে ঘূর্ণায়মান দৃঢ় বস্তুর প্রতিটি কণার জড়তার ভ্রামকের সমষ্টিকে ওই দৃঢ় বস্তুর জড়তার ভ্রামক বলে। এখানে প্রতিটি কণার জড়তার ভ্রামক আমরা আলোচ্য কণার ভর এবং ঘূর্ণন অক্ষ থেকে দূরত্বের গুনফল দ্বারা পরিমাপ করে থাকি। </p>
      \( \sum m_i x_i^2 \)<br><br>
      
      <h5 class="text-success font-weight-bold" > চক্রগতির ব্যাসার্ধঃ </h5>
      ঘূর্ণন অক্ষ থেকে যে দূরত্বে সম্পূর্ণ বস্তুর ভর পুঞ্জিভূত ধরলে উক্ত দূরত্বের জন্য প্রাপ্ত জড়তার ভ্রামক বস্তুটির জড়তার ভ্রামকের সমান হয় সেই দূরত্বকে আমরা চক্রগতির ব্যাসার্ধ বলে থাকি। 
      \( K = \sqrt{ \frac{ \sum m_i x_i^2 }{\sum m_i}}\)<br><br>
      
      
      
      <h5 class="font-weight-bold text-success">ভিন্ন ভিন্ন আকৃতির বস্তুর জন্য জড়তার ভ্রামক: </h5>
      
    <table class="table-success">
          <tr>
              <th>আকৃতি</th>
              <th>জড়তার ভ্রামক</th>
          </tr>
        <tr>
              <td>সুষম এবং সরু দন্ডের মধ্যবিন্দু দিয়ে দন্ডের সাথে অবিলম্বভাবে গমনকারী অক্ষের সাপেক্ষ জড়তার ভ্রামক</td>
              <td>\( I =  \frac{1}{12}Ml^2  \)</td>
          </tr>
          <tr>
              <td>সুষম এবং সরু দন্ডের প্রান্ত দিয়ে দন্ডের সাথে অবিলম্বভাবে গমনকারী অক্ষের সাপেক্ষ জড়তার ভ্রামক</td>
              <td>\( I =\frac{1}{3}Ml^2  \)</td>
          </tr>
        <tr>
              <td>সুষম বৃত্তাকার চাকতির কেন্দ্র দিয়ে পৃষ্ঠের সাথে অবিলম্বভাবে গমনকারী অক্ষের সাপেক্ষ জড়তার ভ্রামক</td>
              <td>\( I =\frac{1}{2}Mr^2  \) </td>
          </tr>
        <tr>
              <td>নিজ অক্ষের চতুর্দিকে ঘুর্নায়মান নিরেট সিলিন্ডারের জড়তার ভ্রামক</td>
              <td>\( I =\frac{1}{2}Mr^2  \)</td>
          </tr>
        <tr>
              <td>কেন্দ্রীয় অক্ষের সাপেক্ষ নিরেট সিলিন্ডারের জড়তার ভ্রামক</td>
              <td>\( I =\frac{2}{5}MR^2 \)</td>
          </tr>
      </table><br><br><br>
      
      <h5 class="text-success font-weight-bold">কৌণিক গতিসূত্র এবং রৈখিক গতি সূত্রের সাদৃশ্য </h5><br>
      <table class="table-info">
          <tr>
              <th>রৈখিক গতি সূত্র</th>
              <th>কৌণিক গতিসূত্র</th>
          </tr>
          <tr>
              <td>ভরঃ \(  m \)</td>
              <td>জড়তার ভ্রামকঃ  \(I\)</td>
          </tr>
        <tr>
              <td>সরণঃ  \(s\)</td>
              <td>কৌণিক সরনঃ \( \theta - \theta_o \) </td>
          </tr>
        <tr>
              <td>বেগঃ  \(v\)</td>
              <td>\( \omega \)</td>
          </tr>
        <tr>
              <td>ত্বরণঃ \(a\)</td>
              <td>\( \alpha \)</td>
          </tr>
      </table>
      <br> <br> 
      
      
    
      <h5 class="text-success font-weight-bold">গতীয় সূত্রাবলীঃ</h5><br> 
      
        <table class="table-secondary" >
          <tr>
              <th>রৈখিক </th>
              <th>কৌণিক</th>
          </tr>
          <tr>
              <td>\( v= u+at  \)</td>
              <td> \(  \omega = \omega_o+\alpha t \) </td>
          </tr>
        <tr>
              <td>\( s = ut+\frac{1}{2}at^2   \) </td>
              <td> \(  \theta - \theta_o = \omega_o t + \frac {1}{2} \alpha t^2 \) </td>
          </tr>
        <tr>
              <td>\( v^2 = u^2+2as  \) </td>
              <td>\(  \omega^2 = \omega_o^2+2\alpha \theta \) </td>
          </tr>
      </table>  <br> <br>
      
      <h5 class="text-success font-weight-bold">ভরবেগ গতিশক্তি বল</h5>
      <table class="table-success">
          <tr>
              <th>রৈখিক </th>
              <th>কৌণিক</th>
          </tr>
          <tr>
              <td>ভরবেগঃ \( p=mv \)</td>
              <td> \( \text{Angular Momentum}, L=I \omega \) </td>
          </tr>
        <tr>
              <td>গতিশক্তিঃ  \(E=\frac{1}{2}mv^2 \) </td>
              <td> \(  \theta - \theta_o = \omega_o t + \frac {1}{2} \alpha t^2 \) </td>
          </tr>
        <tr>
              <td>  বলঃ \( F = ma \) </td>
              <td>\(  \tau = I \alpha \) </td>
          </tr>
      </table>  <br> <br>
      
      
      
      <h5 class="font-weight-bold text-success">কেন্দ্রমুখী ত্বরণ এবং কেন্দ্রমুখী বল</h5><br> 
      <p >
      বক্রপথে যে কোন গতিতেই ত্বরণ জড়িত থাকবে। বক্রপথে কোন বস্তুকে চলমান রাখার জন্য বক্রপথের কেন্দ্র অভিমুখে এক প্রকার বল ক্রিয়াশীল থাকে। এই বলকে কেন্দ্রমুখী বল বলা হয়।</p>
      <h5 class="font-weight-bold text-primary">\( a_{c}= v \times \omega=\omega^{2} r = \frac{v^{2}}{r} \)</h5>  
        <h5 class="text-primary font-weight-bold">\( F_{c} = m a_c= m \omega^{2} r = m \frac{v^2}{r} \) </h5><br>
      
      <h5 class="font-weight-bold text-success">বক্রপথে সাইকেল আরোহীর গতি</h5>
      <p >বক্রপথে চলার সময় সাইকেল আরোহীকে প্রয়োজনীয় কেন্দ্রমুখী বল যোগান দেওয়ার জন্য উল্লম্বের সাথে একটি নির্দিষ্ট কোণ তৈরি করে বক্রপথের কেন্দ্রের দিকে হেলে থাকতে হয়। এই কোণ  \( \theta \) হলে</p>
      <h5 class="text-primary font-weight-bold">\(  \tan \theta = \frac{v^2}{rg} \) </h5>
      <b> Tips: θ কোণটি উল্লম্বের সাথে  </b> <br> <br>
  </div>


     <!-- Work Energy and Power -->
  <div class="tab-pane fade" id="work_energy" role="tabpanel" aria-labelledby="work_energy-tab">
          
	  <h5 class="text-success font-weight-bold">কাজ = বল × ভরকেন্দ্রের সরণ </h5>
	  
      \(\begin{aligned} & P=\frac{W o r k}{\text {time}} \\ &=\frac{W}{t} \\ &=\frac{\vec{F} \cdot \vec{x}}{t} \\ &=\vec{F} \cdot \frac{d \vec{x}}{d t} \\ & P=\vec{F} \cdot \vec{v} \end{aligned}\)<br><br>
      
      
      <img src ="image/blog/CP_4.1.png"  alt="" height="40%" width="70%"/><br> <br> 
    
      মার্কারটিকে খাড়াভাবে রাখতে হলে কত কাজ করতে হবে ? ব্যাখ্যাসহ সমাধান দাও ।  (Hints :\( W=mgh \))  <br>  <br> 
      <b>সমাধান : </b>
      দেওয়া আছে , মার্কারটির ভর , \( m = 100 \; g = 0.1 \; kg \) <br> <br>
      এখানে , মার্কারটির ভারকেন্দ্রের আদি উচ্চতা   \( = \frac{2}{2} \; cm \; = 1 \; cm = 0.01\; m  \) <br>
      এবং পরবর্তী উচ্চতা  \( = \frac{5}{2} \; cm = 2.5 \; cm = 0.025 \; m  \) <br> <br>
      অতএব, মার্কারটির ভারকেন্দ্রের অতিক্রান্ত দূরত্ব  \(= ( 0.025 – 0.01) \; m = 0.015 \; m  \) <br> <br>
      সুতরাং, মাটি কে খাড়াভাবে রাখতে কৃতকাজ , \(  W = m \times g \times h = (0.1×9.8×0.015) \; J = 0.0147 \; J  \) <br><br>


			<h5 class="font-weight-bold text-success">কাজ: </h5> 
			\(F\) বল প্রয়োগের ফলে কোন বিন্দু বস্তুর  \(x\) পরিমাণ সরণ হলে কাজ, <br>
            <h5 class="text-primary font-weight-bold"> \( \boxed{W = \vec{F} . \vec{x} } \) </h5><br>


	  <h5 class="text-success font-weight-bold">ক্ষমতা, </h5> 
	    \( P = \frac{W}{t }  \) <br>
        \( P =  \frac{\vec{F} . \vec{x} }{t } \) 
        <h5 class="text-primary font-weight-bold">\( \boxed{ P = \vec{F} . \vec{v}} \) </h5> <br>
      
      <h5 class="text-success font-weight-bold">ইটের স্তম্ভ তৈরিতে কৃতকাজ</h5>
      <p >ধরা যাক, 
      সংখ্যক ইটকে একটির উপর আরেকটি তুলে স্তম্ভ তৈরি করতে হবে।
      এক্ষেত্রে প্রথম ইট যেহেতু কোন উল্লম্ব উচ্চতা অতিক্রম করে না কাজেই স্তম্ভের নিচের ইটের জন্য আমাদের কোন কাজ করতে হবে না। 
      এবার প্রথম ইটের উপর দ্বিতীয় ইট তুলে স্তম্ভ তৈরির কাজ শুরু করতে হবে। লক্ষণীয় হচ্ছে আমরা যখন দ্বিতীয় ইটকে প্রথম ইটের উপর রাখব, তখন দ্বিতীয় ইটের ভরকেন্দ্রেরসরণ হবে  \(\frac{h}{2} +\frac{h}{2} =h \)<br> 
      এভাবে অগ্রসর হলে আমরা পাই, </p>
      
      \begin{array}{l}W_{1}=m g(0)=0 \\ W_{2}=m g(h) \\ W_{3}=m g(2 h) \\ \cdot \\ \cdot \\ \dot{W}_{n}=m g(n-1) h \\ \therefore \sum W=W_{1}+W_{2}+\ldots+W_{n} \\ =0+m g h+\ldots \ldots m g(n-1) h \\ =m g h(1+2+\ldots+(n-1)) \\ =m g h \frac{n(n-1)}{2}=^{n} C_{2} \times m g h\end{array}
        


      <h5 class="font-weight-bold text-success">যখন ভরকেন্দ্রের সরণ নির্ণয় করা কঠিন – সেক্ষেত্রে কাজের পরিমাণ নির্ণয় :</h5> 
      <p >এক্ষেত্রে HSC Level এর গুরুত্বপূর্ণ সমস্যা হল চৌবাচ্চা খালি করা । যেহেতু  চৌবাচ্চাকে পানিশূন্য করার সময় বিভিন্ন স্তর বিভিন্ন দূরত্ব অতিক্রম করে , সেহেতু এসকল ক্ষেত্রে গড় সরণ নির্ণয় করা সুবিধাজনক ।</p>
            <img src ="image/blog/CP_4.2.png"  alt="hgxdjzl" height="30%" width="50%"/><br> <br> 
      ধরি , চৌবাচ্চায় পানির উচ্চতা   \( h \) ব্যাসার্ধ  \(= r \) <br> 
      চিত্রমতে , \(h = h_2 - h_1 \)<br> 
      \(x \) গভীরতায়  \(dx\) পুরুত্বের এবং\(  dm \) ভরের একটি পানির স্তর বিবেচনা করি । কাজেই এই স্তরকে উপরে তুলতে কৃতকাজ  \(dw = (dm).g.x = x\times g \times dm \) <br>
      ভর = ঘনত্ব × আয়তন <br> 

      
      \( dm = \rho (\pi r^2) dx  \)<br> 
            \( W = \rho (\pi r^2) g x dx \)<br> <br> 
      <p >
      \( \; W = \int dw  \)<br> 
            \( \;\;\;\;\;= \int_{h_1}^{h_2} \rho \pi r^2  g x\; dx  \;\;\;\;\;\;\; [putting \;W \;and \; integrating ]\) <br>     
            \( \;\;\;\;\;= \rho A g [\frac{h_2^2-h_1^2}{2}] \; \;\;\;\;\;\;\;\;\;\;\; [as \; A=\pi r^2 ]  \)<br>  
      \( \;\;\;\;\;= \rho A g (h_2-h_1) [\frac{h_2+h_1}{2}]   \)<br> 
      \( \;\;\;\;\;= \rho (A \times h) g  [\frac{h_2+h_1}{2}]    \)<br> 
      \( \;\;\;\;\;= \rho V g  (\frac{h_2+h_1}{2})  \;\;\;\; \;\;\;\;\;\;\; [\because \; A\times h=V ]  \)<br> 
      \( \;\;\;\;\;= m g  (\frac{h_2+h_1}{2})   \;\;\;\;\;\;\;\;\;\;\;\; [\because \; \rho \times V = m  ]  \)<br> </p>
      <h5 class="text-primary font-weight-bold">\( \boxed{W = m g  (\frac{h_2+h_1}{2}) } \) </h5>  <br>
      
      
      
      <h5 class="font-weight-bold text-success">যান্ত্রিকশক্তির সংরক্ষণশীলতা :</h5><br>
      
      \(System\) এর মোট যান্ত্রিকশক্তি = গতিশক্তি + বিভবশক্তি <br>
      \( E_{total}= E_k + E_p \)<br>
      \( E_{total}=  \frac{1}{2} mv^2 + mgh \)<br>
      \( E_{total}= Constant\)<br><br>
      <p >যেহেতু এদের সমষ্টি শূন্য এবং শক্তির সৃষ্টি বা বিনাশ নাই; সেহেতু এরা একটি অন্যটিতে রূপান্তরিত হয়ে নিজেদেরকে হ্রাস-বৃদ্ধি করার মাধ্যমে এদের মোট মানকে \(Constant\) রাখে ।
      অর্থাৎ কোন System এর \(E_k\) বাড়লে \( E_p\) কমবে । আবার \(E_k\) কমলে \( E_p\) বাড়বে যাতে এদের যোগফল  Constant থাকে ।  </p><br> 
      
      <p class="text-primary font-weight-bold">Example : \(10\;m\) উচ্চতা হতে পড়ন্ত বস্তুর জন্য কত উচ্চতায় গতিশক্তি বিভবশক্তির দিগুণ হবে ?  </p> 
            <img src ="image/blog/CP_4.6.png"  alt="" height="40%" width="50%"/><br> <br> 

      <p >A বিন্দুতে বস্তুটির বেগ শূন্য । তাই এই অবস্থানে গতিশক্তি সর্বনিম্ন অর্থাৎ শূন্য এবং বিভবশক্তি সর্বোচ্চ ।  <br> 
      B বিন্দুতে বস্তুটির উচ্চতা শূন্য ।  তাই এই অবস্থানে বিভবশক্তি সর্বনিম্ন অর্থাৎ শূন্য এবং গতিশক্তি সর্বোচ্চ ।  <br> 
      C বিন্দুতে বস্তুটির  \( E_p\)এবং  \( E_k\) উভয়ই আছে ।  <br> 
      \( \therefore\) বস্তুটি যত নিচে পরছে ততই বস্তুর  \( E_p\) ,  \( E_k\) তে রূপান্তরিত হয়ে এদের মোট  \( \sum E\) কে স্থির রাখছে ।<br> 
      \( \therefore\) C বিন্দুতে বিভবশক্তি \( E_p = mgh \) অর্থাৎ বস্তুর অতিক্রান্ত দূরত্ব\( (H-h) \) এর সমতুল্য বিভবশক্তি  \(mg(H-h)\) <br>  ;
      গতিশক্তি  \( E_k\) তে পরিণত হয়েছে । কাজেই আমরা বলতে পারি C তে গতিশক্তি \(E_k = mg(H-h)\)  </p>
      প্রমাণ : \( v = u + 2g(H-h) \)<br>
      \(v = 0 + 2g(H-h) = 2g(H-h) \)<br>
      <h5 class="font-weight-bold text-primary">\( \boxed{\therefore \frac{1}{2} mv^2 = mg(H-h)} \)</h5><br>
         প্রশ্নটি সমাধান করা যাক এখন ,<br>
      C বিন্দুতে , \( E_k = 2E_p \)<br>
      বা,\(  mg(H-h) = 2mgh \)<br>
      বা, \( H = 3h \)<br>
      \( h =  \frac{H}{3} =   \frac{10}{3} \; m \)<br><br>

      
      <h5 class="text-success font-weight-bold">দোলক</h5><br>
      <img src ="image/blog/CP_4.3.png" alt="" height="30%" width="50%"/><br> <br> 

      চিত্রে , <br> 
      \(l = \) সুতার দৈঘ্য  <br> 
      \( d=\) রৈখিক বিস্তার   <br> 
      \(\alpha = \) কৌণিক বিস্তার  <br> 
      \( A \) বিন্দুতে :    \( E_p = mgh \;\;\;\;\; E_k = 0 \)   <br> 
      \(B \) বিন্দুতে : \( E_p = 0 \;\;\;\;\;  E_k = \frac{1}{2} mv^2 \)  <br> 
      এখানে , \(v\) হচ্ছে সাম্যাবস্থার বেগ ; একে বেগও বলে । কারণ সাম্যাবস্থায় বরের বেগ সর্বোচ্চ । <br> 
      <h5 class="font-weight-bold text-primary">\(\therefore mgh =  \frac{1}{2} mv^2 \rightarrow v^2 = 2gh \) ..... (i) </h5> <br> 

      <h5 class="text-success font-weight-bold">“d”দেওয়া থাকলে: </h5> <br>  
      <img src ="image/blog/CP_4.4.png" alt="" height="30%" width="50%"/><br> <br> 
   
      চিত্র হতে ,\(  h=l-s \)   <br> 
      পিথাগোরাসের উপপাদ্য অনুযায়ী ,
      \(l^2 = d^2 + s^2 \rightarrow s = \sqrt{l^2-d^2 } \)   <br>  
       <h5 class="font-weight-bold text-primary">\(h = l- \sqrt{l^2-d^2} \) </h5> 
      \(h\) এর মান (i) এ বসিয়ে  v এর মান নির্ণয় করা যায় ।<br>  <br>  
      
      
      <h5 class="text-success font-weight-bold">“\(\alpha\)”দেওয়া থাকলে: </h5> <br>  
      <img src ="image/blog/CP_4.5.png"  alt="" height="30%" width="50%"/><br> <br> 
  
      চিত্র হতে ,  <br> 
      \( s = l \cos \alpha  \)   <br> 
      \(h = l-l \cos ⁡   \alpha   \)   <br> 
      \( h = l(1- \cos ⁡   \alpha )  \)   <br> 
      \( h= 2l \sin^2 \frac{ \alpha }{2} \)   <br> 
       <h5 class="font-weight-bold text-primary">\( \boxed{ h = 2l \sin^2 \frac{ \alpha }{2} }  \)   </h5>  <br>  <br> 
  </div>

  <!-- Gravitation -->

  <div class="tab-pane fade" id="gravitation" role="tabpanel" aria-labelledby="gravitation-tab">
   
    <h5 class="font-weight-bold text-success">নিউটনের সার্বজনীন মহাকর্ষ সূত্রঃ </h5>
    <img src ="image/blog/CP_5.56.png"  alt=""height="50%" width="60%"/><br> <br> 
    
    <p >এই মহাবিশ্বের প্রতিটি বস্তুকণা একে অপরকে নিজের দিকে আকর্ষণ করে এবং এই আকর্ষণ বলের মান বস্তু কণাদ্বয়ের ভরের গুণ ফলের সমানুপাতিক, এদের মধ্যবর্তী দূরত্বের বর্গের ব্যাস্তানুপাতিক এবং এই বল বস্তুদ্বয়ের কেন্দ্র সংযোজক সরলরেখা বরাবর ক্রিয়া করে।
    মনে করি, \(m_1 \) এবং \( m_2 \) ভরের দুইটি বস্তু পরস্পর \(r\) দূরত্বে অবস্থান করছে। নিউটনের সূত্র অনুযায়ী দুইটি বস্তু পরস্পরকে আকর্ষণ করছে।  \(m_1 \) বস্তুটি  \(m_2\) বস্তুটিকে  \(F_1\) বল দ্বারা এবং  \(m_2\) বস্তুটি \( m_1\) বস্তুটিকে  \(F_2\) বল দ্বারা আকর্ষণ করছে। অর্থাৎ \(F_1=F_2 \)। মনে করি,  \(F_1=F_2=F\)। তাহলে, নিউটনের সূত্র অনুযায়ী, </p>
	<h5 class="text-primary font-weight-bold">\[F=G  \frac{m_1 m_2}{r^2 }\; \;\; [ G = 6.67×10^{-11}] \] </h5>
	
	<h5 class="text-success font-weight-bold">মহাকর্ষীয় তীব্রতা</h5>
	মহাকর্ষীয় তীব্রতা:  মহাকর্ষ ক্ষেত্রের অভ্যন্তরে কোন বিন্দুতে একটি 1 kg ভরের বস্তু স্থাপন করা হলে বস্তুটির উপর ক্রিয়ারত মহাকর্ষ বলকে মহাকর্ষ ক্ষেত্রের উক্ত বিন্দুর মহাকর্ষীয় তীব্রতা/প্রাবল্য বলে। <br>
	M ভরের বস্তুর জন্য মহাকর্ষ ক্ষেত্র তৈরি হয়েছে ধরা যাক। <br>
    এর কেন্দ্র থেকে r দূরত্বের কোন বিন্দুতে m ভরের বস্তু এনে স্থাপন করা হলে যদি বস্তুটি F বল অনুভব করে তাহলে উক্ত বিন্দুর মহাকর্ষ প্রাবল্য হবে
    <h5 class="font-weight-bold text-primary">\(E=\frac{F}{M}=\frac{G M}{d^2 }\)</h5>
    <strong>Tips: “M” — যার জন্য মহাকর্ষ ক্ষেত্র তৈরী হয়েছে। </strong> <br> <br>
	<h5 class="text-success font-weight-bold"> মহাকর্ষীয় বিভব </h5>
	অসীম থেকে 1 kg ভরের কোন বস্তুকে মহাকর্ষ ক্ষেত্রের কোন বিন্দুতে এনে স্থাপন করতে যে পরিমান কাজ সম্পাদন করতে হয়, তাকে ঐ বিন্দুর মহাকর্ষ বিভব বলে।
    <h5 class="font-weight-bold text-primary">\( V = - \frac{GM}{d} \) </h5>
	<strong>Tips: “M” — যার জন্য মহাকর্ষ ক্ষেত্র তৈরী হয়েছে। </strong><br> <br>
	
	<h5 class="font-weight-bold text-success">Gravitation Shell Theory </h5>
	
    <ul class="collection">
		<li class="collection-item">A spherically symmetric body affects external objects gravitationally as though all of its mass were concentrated at a point at its centre.</li>
		<li class="collection-item">If the body is a spherically symmetric shell (i.e., a hollow ball), no net gravitational force is exerted by the shell on any object inside, regardless of the object's location within the shell</li>
		
	  </ul> <br><br>

    <h5 class="text-success font-weight-bold">মহাকর্ষ বিভব শক্তিঃ</h5>
    
    <img src ="image/blog/CP_5.1.png"  alt="gravitational potential energy" height="60%" width="80%"/><br> <br> 
    <p >যদি  ভরের একটি বস্তুকে অসীম থেকে  বিন্দুতে স্থাপন করা হলে, 
    বস্তুটির মধ্যে সঞ্চিত বিভবশক্তি,  \(U_p =( V_p )(m)= - \frac{hMm}{r} \)  
    অসীমে মহাকর্ষ বিভিবশক্তি,  \( U_∞=-\frac{hMm}{∞}\) যা মহাকর্ষ বিভবশক্তির সর্বোচ্চ মান। <br>
    তাহলে শক্তির নিত্যতা নীতি থেকে আমরা পাই, (অভিকর্ষ ক্ষেত্রে)   \( (Ep+Ek) \) <br>
    ভূপৃষ্ঠে =\( E_p+ E_k =\frac{1}{2} mu^2-\frac{GMm}{R} \) <br>
    \(=1/2 mv^2-\frac{GMm}{(R+h) } \) <br>
    \(h\) উচ্চতায়,.<br> </p>
    
    এখন বস্তুটি অসীমে চলে গেলে\( h=∞\), <br>
    তখন শেষবেগ \(v=0\) হবে।  <br>
    কাজেই     \( 1\frac{1}{2} mu^2-\frac{GMm}{R}=0 \) <br>

    \(  u=\sqrt{(\frac{2GM}{R})} \) <strong>একে আমরা মুক্তিবেগ বলি।</strong> <br>
    অর্থাৎ মুক্তিবেগ, <h5 class="font-weight-bold text-primary">\( \boxed{ V_e=\sqrt{(\frac{2GM}{R})}  } \)</h5> <br>
    
    <h5 class="font-weight-bold text-success">মহাকর্ষ ক্ষেত্রে কৃতকাজ </h5>
    <img src ="image/blog/CP_5.2.png"  alt=""height="60%" width="80%"/><br> <br> 
    <p > \(M\) ভরের বস্তুর জন্য ধরা যাক মহাকর্ষ ক্ষেত্র তৈরী হয়েছে। সংজ্ঞা অনুযায়ী \(1\;kg \) ভরের একটি বস্তুকে  \(r=∞\) থেকে \( r=r \) এ আনতে কৃতকাজ  \( \frac{-GM}{r} \)  . কাজেই বিপরীত ক্রমে  \(1\;kg \) ভরের বস্তুকে  দূরত্ব থেকে অসীমে নিতে কৃতকাজ\( \frac{GM}{r} \)</p> <br>
     \(m\) ভরের বস্তুর জন্য কৃতকাজ,\(  \frac{GMm}{r} \) <br>
                  \( \therefore  w \propto \frac{1}{r} \) <br>
    কাজেই গুরুভার বস্তুর কেন্দ্র থেকে যদি থেকে দূরত্বে ম ভরের একটি বস্তুকে নেওয়া হয় তাহলে বাহ্যিক এজেন্ট দ্বারা কৃতকাজ হবে,  <br>
     <h5 class="text-success font-weight-bold">\( W=  \frac{GM}{r}- \frac{GM}{(r+h)} \) </h5> <br>
    
    <h5 class="text-success font-weight-bold"> কৃত্রিম উপগ্রহ </h5>
    <img src ="image/blog/CP_5.3.png"  alt=" Satellite" height="70%" width="70%"/><br> <br> 
    
    <b>বেগঃ </b>  <br>  \(F_c=F_h \) <br> 
        বা, \( \frac{mv^2}{(R+h)}=\frac{hMm}{(R+h)^2 } \) <br> 
             <h5 class="font-weight-bold text-primary"> \(  \boxed{V=\sqrt{\frac{hM}{Rm}}} \) </h5>    
    
    
    <b>পর্যায়কালঃ</b><br>
     <h5 class="font-weight-bold text-primary"> \( T=\frac{2π(r+h)}{V}=\sqrt{ \frac{4\pi^2{(R+h)}^3}{GM}} \)</h5>
    যদি পর্যায়কাল  \( T= 24 \; hr \) হয় তাহলে উপগ্রহটিকে ভূস্থির উপগ্রহ বলে। <br> <br> 
    
    
    <b>উচ্চতাঃ</b> <br>
    ভূ-পৃষ্ঠ থেকে উচ্চতা,  <h5 class="text-primary font-weight-bold">\(h= \sqrt[3]{ \frac{T^2 GM}{4π^2}}-R \)</h5>
    \( T^2 \propto (R+h)^3 \)  <br> <br>
    
    
    <h5 class="font-weight-bold text-success">g এর তারতম্যঃ </h5> 
    পৃথিবীপৃষ্ঠে,  <h5 class="text-primary font-weight-bold"> \( g_e=\frac{GM}{R^2 } \) </h5>
    ভূপৃষ্ঠ থেকে \(h\) উচ্চতায়, <h5 class="font-weight-bold text-primary">\(g_h=g_e (\frac{R}{(R+h)})^2 \) </h5>
    \(g_h= g(\frac{1+h}{R})^{-2} \) <br><br>
    
   <h5 class="text-danger font-weight-bold">যদি \(h\ll R\) হয়, \(g_h=g(1-\frac{2h}{R}) \)  <strong> Not for  problem  solving</strong>  </h5>
    ভূপৃষ্ঠ থেকে d গভীরতায়, \( g_d=g_e (1 -\frac{d}{R}) \)<br>
	পৃথিবীর ঘুর্ণন ক্রিয়ার ফলে\( λ \) অক্ষাংশে  \(g\) এর মান,
	<h5 class="font-weight-bold text-primary">\( g_λ=g_e-ω^2 R\cos^2 λ \) </h5>

	<ul class="collection">
		<li class="collection-item"> নিরক্ষীয় অঞ্চলে, λ=0 \(\Rightarrow \) \(g_E=g_e-ω^2 R\) </li>
		<li class="collection-item"> মেরু অঞ্চলে, λ=90 \(\Rightarrow \)    \(g_P=g_e \) </li>
	  </ul>

  </div>
			   <!--Elasticity -->
			   
  <div class="tab-pane fade" id="ilasticity" role="tabpanel" aria-labelledby="ilasticity-tab">
    
	<h5 class="text-success font-weight-bold">পীড়ন: </h5> 
 
	কোন বস্তুর প্রতি একক ক্ষেত্রফলে প্রযুক্ত আকার পরিবর্তনকারী বলকে আমরা পীড়ন বলি।
       পীড়ন = <h5 class="font-weight-bold text-primary">\( \frac{\text{Force}}{\text{Area}} \\ = \frac{F}{A} \) </h5>
       <strong>এককঃ \( Nm^{-2} \) </strong> <br> <br>


      <h5 class="font-weight-bold text-success">বিকৃতিঃ</h5> বস্তুর একক মাত্রার পরিবর্তনকে বিকৃতি বলা হয়ে থাকে। <br>
       বিকৃতি= <h5 class="text-primary font-weight-bold"> \( \frac{\Delta x}{x_o} \) </h5>
      <strong>এটি একক বিহীন। </strong>  <br>

      
	  এখানে মাত্রা রৈখিক, আয়তনিক, কৃন্তন হয়ে থাকে. <br>
	  
      রৈখিক বিকৃতি \( = \frac{\Delta L}{L} \)<br>
      আয়তন বিকৃতি    \(  = \ \frac{\Delta V}{V} \)
      </p><br><br>

      <h5 class="text-success font-weight-bold">হুকের সুত্রঃ </h5>
      <p>স্থিতিস্থাপক সীমার মাঝে পীড়ন বিকৃতির সমানুপাতিক, এই সমানুপাতিক ধুবক কে আমরা স্থিতিস্থাপক গুনাংক বলি। </p>
      স্থিতিস্থাপক গুনাংক=  <h5 class="text-primary font-weight-bold">\( \frac{\text{Stress}}{strain} \) </h5>


      <h5 class="font-weight-bold text-success">ইয়াংয়ের গুনাংক </h5>
      <h5 class="text-primary font-weight-bold">\( Y=\frac{(F/A)}{(\Delta L/L)}\) <br>
      \( =\frac{FL}{A \Delta L}\) </h5>

      যদি দৈর্ঘ্য বরাবর M ভর ঝুলানো হয় তাহলে F = Mg <br> <br>

      <h5 class="text-success font-weight-bold">কৃন্তন গুনাংক</h5>
      <h5 class="text-primary font-weight-bold">\( \eta = \frac{Shearing Stress}{Shearing Strain}\) <br>
      \(=\frac{F/A}{\tan \theta} \) </h5> <br> 

      <h5 class="font-weight-bold text-success">আয়তন গুনাংকঃ</h5>
       <h5 class="text-primary font-weight-bold">\( B =\frac{1}{K}= \) আয়তন  পীড়ন / আয়তন বিকৃতি <br>
      \( = \frac{F/A}{\Delta V/ V} \) <br>
      \( =\frac {Pressure \times V}{\Delta V} \) </h5> 
      <strong>এখানে K হচ্ছে সংনম্যতা। </strong> <br> <br>

      <h5 class="text-success font-weight-bold">পয়সনের অনুপাতঃ</h5>
      <h5 class="text-primary font-weight-bold">\( \sigma = \frac{Lateral \; Strain}{Longitudinal \; Strain} \)  <br>
      \( =\frac {\frac{- \Delta R}{R}}{\frac{\Delta L}{L}} \) </h5>
      <strong>ইহা একক বিহীন </strong><br> <br>


      <h5 class="font-weight-bold text-success">সঞ্চিত স্থিতিস্থাপক শক্তি </h5>

      সঞ্চিত স্থিতিস্থাপক শক্তি  \( = \frac{1}{2} \times  \) পীড়ন  \( \times\)  বিকৃতি \( \times \) আয়তন <br><br>
      কাজেই শক্তি ঘনত্ব  \(=\)  সঞ্চিত শক্তি/আয়তন \( = \frac{1}{2} \times \) পীড়ন  \( \times \) বিকৃতি <br><br>

  </div>

  <div class="tab-pane fade" id="fluid" role="tabpanel" aria-labelledby="fluid-tab">
          
      <h5 class="font-weight-bold text-success">পৃষ্ঠটান:</h5>
 
      প্রবাহীর পৃষ্ঠে একটি সরল রেখা কল্পনা করা হলে উক্ত সরলরেখার প্রতি একক দৈর্ঘ্যে ওই রেখার দুই পার্শের তরলের পৃষ্ঠ তলে এক অংশ অন্য অংশের উপর যে স্পর্শক বল প্রয়োগ করে তাকেই তরলের পৃষ্ঠটান বলে। <br>
      পৃষ্ঠ টান, <h5 class="text-primary font-weight-bold"> \[T = \frac{F}{L} \] </h5> 
      এখানে  \(L\) হচ্ছে বস্তুর যতটুকু “দৈর্ঘ্য” তরলের সংস্পর্শে থাকে।  <br>
      যেমন পানিতে একটি সুচ থাকলে  \(L \) হবে সুচের দুই পাশের মোট দৈর্ঘ্য  \(2l\) <br><br>
        
      

      
      <h5 class="font-weight-bold text-success">পৃষ্ঠ শক্তিঃ </h5>
      কোন একটি প্রবাহী পৃষ্ঠের ক্ষেত্রফল একক পরিমান বৃদ্ধি করতে প্রয়োজনীয় কাজের পরিমাণকে বুঝায়।
      গানিতিকভাবে এটি পৃষ্ঠ টানের সমান। কাজেই, 
    
      পৃষ্ঠ শক্তি, <h5 class="text-primary font-weight-bold">\[E =T= \frac{W}{\Delta A} \]</h5>
     
      
      আমরা এখন একটি গুরুত্বপূর্ণ গানিতিক সমসস্যা শিখব।
      ধরা যাক \( R \) ব্যাসারধের একটি বাবল কে স্প্রে করে \( N \) সংখ্যক \( r\) ব্যাসার্ধের ছোট বাবল তৈরি করা হয়েছে। আমাদের শক্তির শোষণ বের করতে হবে। <br> <br>
            
            <b>Step 1:</b> Volume for both the sysytems will remain equal. কাজেই 
             <h5>\( \frac{4}{3}\pi R^3 = N \times \frac{4}{3}\pi r^3 \)</h5> থেকে আমরা \( r\) বের করে নিব।<br><br>

            <b>Step 2:</b> এখানে ক্ষেত্রফলের বৃদ্ধি  \( \Delta A = 4\pi(Nr^2-R^2) \) <br><br>

            <b>Step 3:</b> সুতরাং শক্তির পরিবর্তন \( W = T \times \Delta A \) । যদি বাবলের দুইটি পৃষ্ঠ থাকে (যেমন সাবানের বাবল) তাহলে \(2\) দ্বারা গুন করতে হবে। <br><br>
            
            <b>Quiz:</b> একটি সাবানের বুদবুদ তৈরিতে কত কাজ করতে হবে?<br>
         
           
            \( \\ \Delta A = 4 \pi r^2 - 0 \) <br>
            because the bubble is being formed here not sprayed. Therefore no initial surface area.<br>
            Hence, \( W = 2 \times \Delta A\times T \) <br>
            \( =8\pi r^2T \) <br><br>
           
            
      <h5 class="font-weight-bold text-success">সান্দ্রতাঃ </h5>
      যে ধর্মের দরুন প্রবাহী তার অভ্যন্তরস্থ বিভিন্ন স্তরের আপেক্ষিক বেগ রোধ করার চেষ্টা করে। <br>

      সান্দ্রতা সংক্রান্ত Newton এর সুত্রঃ<br>
      <h5 class="text-primary font-weight-bold">\( F= \eta A \frac{\delta v}{\delta y} \) </h5>
     <div class="card border-success">
		<div class="card-body">
         এখানে,
            \( \frac{\delta v}{\delta y}= velocity \; gradient \) <br>
            \( A = area \; of \; liquid \; layer \) <br>
            <p>\( \eta \) = সান্দ্রতাংক </p>
            \( The \; unit \; of \; coefficient \; of \; viscosity \; in \; CGS \; is \; poise.  \) <br>
            \( SI \; unit \; of \; coefficient \; of \; viscosity \; = poiseuille = 10 \; poise  \) <br> <br>
		 </div>
		</div>
           

          
      <h5 class="font-weight-bold text-success">Stokes law: </h5>
	  কোন সান্দ্র তরলের মাঝে দিয়ে পড়ন্ত একটি \(r\) ব্যাসার্ধের গোলক, যে মুহূর্তে এর বেগ \(v \) থাকে, 
	  সেই মুহূর্তে যে পরিমান সান্দ্র বল অনুভব করেঃ 
      <h5 class="text-primary font-weight-bold">\( F_v =6\pi \eta vr \) </h5>

      
      <h5 class="text-success font-weight-bold">অন্তবেগ: </h5>
      সান্দ্র তরলের মাঝে দিয়ে পড়ন্ত বস্তুর জন্য আমরা বলতে পারি
      \( \sum F = W - U- F_v = ma \)
      পড়ন্ত বস্তুর বেগ সময়ের সাথে বারতে থাকে যেহেতু ত্বরণ বিদ্যমান। এভাবে বারতে বারতে বেগটি এমন একটি সর্বাধিক মানে পৌছায় জার পড়ে আর বেগের মান বারে না, বেগটি সুষম হয়ে যায়, ফলে ত্বরণ শূন্য হয়। অর্থাৎ তখন \( W=U+F_v \) হয়ে যায়। 
      এই সমবেগ কে আমরা বলি অন্তবেগ বা প্রান্তিক \(v_t\) বেগ। 
      <h5 class="font-weight-bold text-primary">\( v_t= \frac{2}{9} \frac{r^2 (\rho_{solid}-\rho_{liquid})g}{\eta} \) </h5>

              
            <h5 class="text-success font-weight-bold">কৈশিকতাঃ</h5>
      কৈশিক নলে তরলের উত্থান পতনকে কৈশিকতা বলে। 
      এক্ষেত্রে প্রয়োজনীয়, সুত্রটি হচ্ছেঃ
       <h5 class="font-weight-bold text-primary">\( T=\frac{hr \rho g}{2\cos\theta} \) </h5>
      পানির উত্থান হলে  h ধনাত্মক এবং অবনমন হলে ঋণাত্মক হয়ে থাকে।<br><br>

              
            <b>Quiz:</b><br>একটি কৈশিক নলের ব্যাস \(0.2 \; mm\) একে  \(0.072\; N/m \) পৃষ্ঠটান এবং \(1000 \; kg/m^3 \) ঘনত্বের পানিতে ডুবানো হলে নলের কত উচ্চতায় পানি উঠবে? </p>
            \(
            \begin{split}
            \\h=\frac{2T}{r \rho g}

            =\frac{2 \times 72\times 10^{-3} }{\frac{0.2\times 10^{-3}}{2} \times 10^{3} \times 9.8}\\

            =0.1469 m
            \end{split}
            \)<br><br> </p>
  </div>

  <div class="tab-pane fade" id="shm" role="tabpanel" aria-labelledby="shm-tab">
	
	      <!-- SHM -->
      
            নিম্নবর্ণিত  বৈশিষ্ট্য থাকলে একটি কণার গতিকে সরল ছন্দিত স্পন্দন বলেঃ<br>
        <ul class="collection">
         <li class="collection-item">এর গতি পর্যায় গতি</li>
         <li class="collection-item">এর গতি স্পন্দন গতি</li>
         <li class="collection-item">এর গতি একটি সরল্রেখায় ঘটে </li>
         <li class="collection-item">ত্বরণ সরণের সমানুপাতিক</li>
         <li class="collection-item">ত্বরণ সরণের বিপরীতমুখী</li>
	    </ul>   
            
      অর্থাৎ ,<br> 
      
      <h5 class="text-primary font-weight-bold" >\( a \propto -x \)</h5> 
       Restoring  Force,  F = -kx \(\Rightarrow  ma = -kx \) <br> 
            \(a =-(k/m)x \) <br>
      \(\frac{\mathrm{d^2}x }{\mathrm{d} x^2} = - \omega^2 x \;[Assuming \omega^2=\frac{k}{m}] \) <br>
      \( Therefore \; the \; differential \; equation \;of\;SHM: \) <br>
      <h5 class="text-primary font-weight-bold">\( \frac{\mathrm{d^2}x }{\mathrm{d} x^2} + \omega^2 x=0 \) </h5>
       

      এই ডিফারেন্সিয়াল সমীকরণকে সমাধান করলে আমরা পাই, <br>
      <h5 class="font-weight-bold text-primary">\( x=A\sin (\omega t + \delta ) \)</h5>
      এখানে \( \delta \) হচ্ছে আদি দশা; যাকে আমরা \( t=0\;s \) এ কৌণিক সরণ দ্বারা বুঝে থাকি। <br><br>
         
      <h5 class="text-success font-weight-bold">বেগঃ </h5>
     
      \(v= \frac{\mathrm{d} x}{\mathrm{d} x} \) <br>
      \(v =A \omega \cos(\omega t + \delta) \) <br>
      or, <h5 class="text-primary font-weight-bold">\( \boxed{v =\omega  \sqrt{A^2 - x^2}} \) </h5>
      \( \begin{matrix}v_{max} = \omega A & when \;x=0\\v_{min}=0\;&when\; x=A\end{matrix} \)
      <br><br>

      <h5 class="font-weight-bold text-success">ত্বরণঃ </h5>
      \( a= \frac{\mathrm{d} v}{\mathrm{d} x}  \) <br>
      \(a =-A \omega^2 \sin(\omega t + \delta) \) <br>
      <h5 class="text-primary font-weight-bold">\( \boxed{a = - \omega^2x  }\) </h5>
      \( \begin{matrix}\mid a_{max}\mid = \omega^2 A & when \;x=A\\a_{min}=0\;&when\; x=0\end{matrix} \)

      <h5 class="font-weight-bold text-success">শক্তির রাশিমালাঃ</h5>
      গতিশক্তি, \( \\E_p = \frac{1}{2}kx^2 \) <br>
      বিভবশক্তি, \( \\E_k = \frac{1}{2}k(A^2 - x^2) \) <br>
      মোটশক্তি, <h5 class="font-weight-bold text-primary">\( \boxed{\sum E = E_p+E_k = \frac{1}{2}k A^2} \)</h5> <br> <br>

      
           
		</div>
		
		<!-- wave -->
    <div class="tab-pane fade" id="wave" role="tabpanel" aria-labelledby="wave-tab">

	<h5 class="font-weight-bold text-success">অগ্রগামী তরঙ্গ : </h5>
    তরঙ্গ বিস্তৃত মাধ্যমের এক স্থান থেকে অন্য স্থানে সঞ্চালিত হয়।  <br>
    <h5 class="text-primary font-weight-bold">\( y = A\sin \frac{2\pi}{\lambda} (vt \pm x) \) </h5>
    গানিতিক সমস্যা সমাধানের জন্য মনে রাখতে হবে “x” এর সহগ 1 রেখে সাধারণ সমীকরণের সাথে তুলনা করতে হবে।    <br>
    <p ><b>Quiz:</b> \( y=1.15\sin(2000t+.01x) \) থেকে বিস্তার এবং তরঙ্গ দৈর্ঘ্য নির্ণয় কর.  <br> <br> </p>
    
  
    \( \Rightarrow 1.15\sin 0.01(\frac{2000}{0.01}t+x) \)  <br>
    \( \Rightarrow A=1.15 \)  <br>
    \( \Rightarrow \frac{2\pi}{\lambda }=0.01\Rightarrow \lambda =628 \;m \) <br><br>
    
    
    <h5 class="font-weight-bold text-success">স্থির তরঙ্গঃ</h5>
    স্থির তরঙ্গ মাধ্যমের একটি নির্দিষ্ট স্থানে সীমাবদ্ধ থাকে।   <br>
    <p >স্থির তরঙ্গের সমীকরণে একটি sine এবং একটি cosine অংশ থাকে। আমরা গানিতিক সমস্যা সমাধানের জন্য কেবলমাত্র ”x” এবং “t” এর সহগ বিবেচনা করব।  </p>
    <h5 class="text-primary font-weight-bold"> \( y=2A \cos (\frac{2\pi}{\lambda}x) \sin (\frac{2\pi}{\lambda  }vt) \)</h5>
    <ul class="collection">
        <li class="collection-item"> সুস্পন্দ বিন্দুঃ যে স্থানে বিস্তার সর্বাধিক (Antinode)</li>   
        <li class="collection-item">নিস্পন্দ বিন্দুঃ যে স্থানে বিস্তার শূন্য (Node) </li>
        <li class="collection-item">পর পর দুইটি সুস্পন্দ বিন্দুর মধকার দূরত্ব = পর পর দুটি নিস্পন্দ বিন্দুর মধ্যকার দূরত্ব = \( \frac{\lambda }{2} \) </li>
        <li class="collection-item">পর পর দুইটি সুস্পন্দ এবং নিস্পন্দ বিন্দুর মধ্যকার দূরত্ব= \(  \frac{\lambda }{4} \) </li>
    </ul>
    

    <h5 class="text-success font-weight-bold">বিট </h5>
    <p aling="left">সমান বা প্রায় সমান তীব্রতা এবং প্রায় সমান কম্পাংকবিশিষ্ট একই দিকে অগ্রগামী দুটি শব্দ তরঙ্গের উপরিপাতনের ফলে শব্দের লব্ধি প্রাবল্যের হ্রাসবৃদ্ধির ঘটনাকে বিট বলে।</p>

    \(1\) সেকেন্ডে বিট সংখ্যা = শব্দ কম্পাংকদ্বয়ের পার্থক্য  <br>
    \( N= f_1 - f_2 \)  <br>
    \( N= f_1 \sim f_2  \)  <br>
    \( Assuming \;f_1>f_2  \) <br>
    \( If\; N \uparrow \Rightarrow f_1 \uparrow  \;or \; f_2\downarrow \)
    \(else \;if\;N\downarrow \Rightarrow f_1 \downarrow  \; or \; f_2\uparrow  \) <br>  <br>
    

    <h5 class="font-weight-bold text-success">তীব্রতা এবং তীব্রতা লেভেল</h5>
    Weber Fechner এর সুত্রনুসারে,
    শব্দোচ্চতা তীব্রতার 10 ভিত্তিক logarithm এর সমানুপাতিক<br>
    \( S \propto  \log_{10}I \)<br>
    প্রমান তীব্রতা  \( I_o = 10_12 Wm^{-2} \)<br>
    ধরা যাক, দুইটি কম্পাংকের শব্দের তীব্রতা এবং শব্দোচ্চতা যথাক্রমে \( S\rightarrow I \;and\; S_o\rightarrow I_o \) <br>
    \( S =K \log_{10}I \)<br>
    \( S_o=K\log_{10}I_o\)<br>

    তাহলে শব্দোচ্চতার পার্থক্য \( \beta = S-S_0=K\;log_{10}{\frac{I}{I_o}} \) <br>
    \( \beta \) কে তীব্রতা লেভেল বলে। <br>

	In db, <p class="text-primary font-weight-bold">\(\beta =10log_{10}{\frac{I}{I_o}}dB \) </p>

    শব্দের তীব্রতা \(I_1\) থেকে পরিবর্তিত হয়ে \(I_2\) হলে তীব্রতা লেভেলের পরিবর্তন<br>
    <p class="text-primary font-weight-bold">\( \Delta \beta =10 log_{10}({\frac{I_2}{I_1}})dB \)</p>
    অনুরুপভাবে উৎসের ক্ষমতা  \(P_1\) থেকে \(P_2\) তে পরিবর্তিত হলে<br>
    <p class="text-primary font-weight-bold">  \(\Delta \beta =10 log_{10}({\frac{P_2}{P_1}})dB \) </p>

        <br> <br>
  </div>

   <!-- Heat and Gas -->

    <div class="tab-pane fade" id="heatGas" role="tabpanel" aria-labelledby="heatGas-tab">
    
    <b><p >বয়েলের সূত্রঃ </b>\( Volume, V \propto \frac{1}{Pressure, P} \) </p>
    <b><p >চার্লসের সূত্রঃ </b>\( Volume, V \propto  Temperature, T  \)</p> 
    <b><p >অ্যাভোগাড্রোর প্রকল্পঃ </b>\( Volume, V \propto  Amount \;of\; gas\; in\;moles, n  \)</p> <br>

    \( Combining \;we\; get\; PV \propto nT \)<br>
    \( PV=nRT \)<br>
    আদর্শ গ্যাসের জন্য \(Constant\) টি হচ্ছে  \(R \) <br>
    \(SI\) এককে  \(R = 8.316 \; Jmol^{-1}K^{-1} \) <br><br>
    

  

    গ্যাসের গতিতত্ত্ব থেকে পাই, <br>
    \( PV =\frac{1}{3}mn  \overline{c^2} \)<br>
    \( Here ,\; m=mass \;of\;one\;gas\;molecule \)<br>
    \(n= number \;of\;gas\;molecule\;in \;the\;system  \)<br>
    \( \therefore mn=mass\;of\;the\;gaseous\;system \)<br><br>

    \( PV=\frac{2}{3}(\frac{1}{2}mn\overline{c^2}) \)<br>
    \( PV=\frac{2}{3}(Kinetic\; Energy, E)  \)<br>
    \( \Rightarrow E= \frac{3}{2} PV \)<br>
    \( \Rightarrow \) <h5 class="font-weight-bold text-primary"> \(\boxed{E= \frac{3}{2}nRT }\)</h5>
    কাজেই গড় গতিশক্তি, <br>
    \( \overline E = \frac{E}{N_A}=\frac{3}{2} \frac{R}{N_A}T \)<br>
    <h5 class="text-primary font-weight-bold">\( \boxed{\overline E=\frac{3}{2}K_BT} \)</h5>
    \( Here \; K_B=Boltzmann \; Constant \)<br><br>

    এখন যদি আমরা  \(1\; mole\) গ্যাস বিবেচনা করি তাহলে  \(mn=M \)  (মোলার ভর) <br>
    \( \therefore RT=\frac{1}{3}M \overline{c^2} \)<br>
    \( \Rightarrow  \overline{c^2}=\frac{3RT}{M}\)<br><br>

    কাজেই সংজ্ঞানুসারে মূল গড় বর্গবেগ , <br>
    <h5 class="text-primary font-weight-bold">\( \boxed{C_{rms}=\sqrt{\overline{c^2}}=\sqrt{\frac{3RT}{M}} } \)</h5>


  

     <h5 class="text-success font-weight-bold"><b>তাপমাত্রার বিভিন্ন স্কেলের মধ্যে রুপান্তর  </h5></b>

	<h5 class="font-weight-bold text-primary"> \( \boxed{ \frac{C}{5}= \frac{F-32}{9} = \frac{K-273}{5}=\frac{R}{4}=\frac{R_n-492}{9} } \)</h5>
	

    এখানে,<br>
    \(C=\) সেলসিয়াসের তাপমাত্রা<br>
    \(F=\)ফারেনহাইটের তাপমাত্রা<br>
    \(K=\)কেলভিনের তাপমাত্রা<br>
    \(R=\)রোমারের তাপমাত্রা<br>
    \(R_n=\) রাংকিনের তাপমাত্রা<br><br>

    মুলতঃ সকল থার্মোমিটারের জন্য নিম্নের সম্পর্কটি প্রযোজ্য থাকেঃ <br>

    <h5 class="font-weight-bold"> (পাঠ - নিম্ন স্থিরাংক)/(ঊর্ধ্ব স্থিরাংক-নিম্ন স্থিরাংক)</h5>  <br>



    <h5 class="font-weight-bold text-success">আর্দ্রতামিতিঃ</h5>

    <b>শিশিরাংকঃ</b> যে তাপমাত্রায় একটি নির্দিষ্ট আয়তনের বায়ু তার ভিতরের জলীয় বাষ্প দ্বারা সম্পৃক্ত হয় তাকে ঐ বায়ুর শিশিরাংক বলে। <br>

    শুষ্ক এবং সিক্ত বাল্ব হাইগ্রোমিটারঃ এই যন্ত্রে দুইটি থার্মোমিটার থাকে। এদের একটির বাল্ব সিক্ত এবং অন্যটির বাল্ব শুষ্ক। শুষ্ক বাল্ব থার্মোমিটার স্বাভাবিক ভাবেই বাতাসের তাপমাত্রা প্রদর্শন করবে। এই বাল্বদ্বয়ে প্রদর্শিত তাপমাত্রার ব্যবধান থেকে আমরা বায়ুর শিশিরাংক নির্ণয় করতে পারি। 
	 
	<h5 class="text-primary font-weight-bold">\(\theta_1= \theta + G_{\theta 1}(\theta_1 - \theta_2) \) </h5>
                    \(\theta_1 \)= শুষ্ক বাল্বের বায়ুর তাপমাত্রা <br>
                     \( \theta_2 \)= সিক্ত বাল্বের বায়ুর তাপমাত্রা <br>
                      \( \theta \)= শিশিরাংকের তাপমাত্রা <br>
					   \(G_{\theta 1}\) = বায়ুর তাপমাত্রায় গ্লেইসার উৎপাদক <br>
		<strong> আপেক্ষিক আর্দ্রতা</strong>			   
					   <h5 class="font-weight-bold text-primary">\(Relative  Humidity=\frac{f}{F} \times 100 \% \) </h5>
                   \(f= \theta^o C \) তাপমাত্রায় (অর্থাৎ শিশিরাংকে) সম্পৃক্ত  জলীয় বাস্পচাপ <br>
                   \( F= \theta_1^o C \) তাপমাত্রায়  (অর্থাৎ বায়ুর তাপমাত্রায়)  সম্পৃক্ত  জলীয় বাস্পচাপ


        <br><br><br>
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
                    <li><a class="btn-floating btn-medium " target="_blank" href="https://www.facebook.com/hscdojo?subject=Inquiry to HSC-dojo"><i class="fa fa-facebook"></i></a></li> <br>
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