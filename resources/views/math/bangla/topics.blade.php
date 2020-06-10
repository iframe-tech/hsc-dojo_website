@extends('layouts.app_top')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">           
              <a class="btn-floating btn-large blue" href="{{route('home')}}"> <i class=" fa fa-home"></i> </a>
          <hr>
              <div class="container">
                   <h1 class="text-center font-weight-bold" style="font-family: Comic Sans MS; color:red"> Higher Mathematics</h1>
              
          <!--Tabs-->
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              
              <a class="nav-item nav-link active" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="true">উচ্চতর গণিত প্রথম পত্র</a>
              <a class="nav-item nav-link " id="math_2nd-tab" data-toggle="tab" href="#math_2nd" role="tab" aria-controls="math-2nd" aria-selected="false"> উচ্চতর গণিত দ্বিতীয় পত্র</a>
              
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                          <div class="card-panel">

                                      

    <h2 class="text-center font-weight-bold" style="color: orange; font-family:Comic Sans MS">Matrix</h2>

    1. \( A=\left[\begin{array}{ccc}
    3 & 1 & -1 \\
    2 & 3 & 4 \\
    -4 & 5 & 6
    \end{array}\right] ; B=\left[\begin{array}{ccc}
    1 & -4 & 6 \\
    2 & 0 & -7 \\
    3 & 5 & 0
    \end{array}\right]\)  হলে \(7A - 5B\) নির্ণয় করো। 
    <br>উত্তরঃ \(\left[\begin{array}{ccc}
    16 & 27 & -37 \\
    4 & 21 & 63 \\
    -43 & 10 & 42
    \end{array}\right] \) <br><br>
    2. \(A=\left[\begin{array}{lll}
    1 & 2 & 3 \\
    4 & 5 & 6
    \end{array}\right], B=\left[\begin{array}{l}
    4 \\
    6 \\
    -1
    \end{array}\right], C=|1 \quad 2 \quad-5 \quad 6| \) 
    হলে প্রমাণ করো যে, \((AB)C = A(BC)\) 
    <br><br>
    3. \(A=\left[\begin{array}{lll}
    1 & 2 & 2 \\
    2 & 1 & 2 \\
    2 & 2 & 1
    \end{array}\right] \text { then }, A^{2}-4 A-5 \; then \;I=?\left[\text { here }, I=I_{3}\right]\)
    <br>উত্তরঃ  \( \left[\begin{array}{lll}
       0 & 0 & 0 \\
       0 & 0 & 0 \\
       0 & 0 & 0
       \end{array}\right]=0_{(3,3)}\) <br><br>
    4.
    \( A=\left[\begin{array}{ccc}
    1 & 0 & -2 \\
    2 & -1 & 3
    \end{array}\right], B=\left[\begin{array}{cc}
    -3 & 1 \\
    2 & 4 \\
    1 & -2
    \end{array}\right]\) 
    হলে দেখাও যে, \((A B)^{T}=B^{T} A^{T}\) <br><br>
    5. \( A=\left[\begin{array}{ll}
    1 & 2 \\
    3 & 4
    \end{array}\right]\) এর Inverse Matrix বের করো।
    <br>উত্তরঃ  \(\left[\begin{array}{ccc}
    1 & 2 & -2 \\
    2 & 5 & -4 \\
    3 & 7 & -5
    \end{array}\right]\) <br><br>
        
    6. \( \left(\begin{array}{cc}
    \alpha+2 & 2 \\
    8 & \alpha-4
    \end{array}\right) \) একটি ব্যতিক্রমী ম্যাট্রিক্স হয় তবে, \(\alpha \) এর মান বের করো।
    <br>উত্তরঃ  \(\alpha=-4,6\) <br><br>
    7. \( A=\left|\begin{array}{lll}
    1 & 2 & 3 \\
    4 & 5 & 6 \\
    7 & 8 & 9
    \end{array}\right|\) এ -6 উপাদানের অনুরাশি কত? 
    <br>উত্তরঃ  \(\alpha=-4,6\) <br><br>
    
    8. প্রমাণ করো, <br>
    (a) \(
    \left|\begin{array}{ccc}
    1 & 1 & 1 \\
    1 & p & p^{2} \\
    1 & p^{2} & p^{4}
    \end{array}\right|=p(p-1)^{2}\left(p^{2}-1\right) \)<br>
    (b) \(\left|\begin{array}{ccc}
    a+b+2 c & a & b \\
    c & b+c+2 a & b \\
    c & a & c+a+2 b
    \end{array}\right|=2(a+b+c)^{3} \)<br>
    (c) \(\left|\begin{array}{ccc}
    a-b-c & 2 a & 2 a \\
    2 b & b-c-a & 2 b \\
    2 c & 2 c & c-a-b
    \end{array}\right|=(a+b+c)^{3}
    \)<br>
    (d) \(\begin{array}{|lll|}
    \log x & \log y & \log z \\
    \log 2 x & \log 2 y & \log 2 z \\
    \log 3 x & \log 3 y & \log 3 z
    \end{array}=0 \)<br>
    
    (e) \(\left|\begin{array}{ccc}
    1+a^{2}-b^{2} & 2 a b & -2 b \\
    2 a b & 1-a^{2}+b^{2} & 2 a \\
    2 b & -2 a & 1-a^{2}-b^{2}
    \end{array}\right|=\left(1+a^{2}+b^{2}\right)^{3}  \)<br>
    
    
    (f) \(\left|\begin{array}{ccc}
    a & b & a x+b y \\
    b & c & b x+c y \\
    a x+b y & b x+c y & 0
    \end{array}\right|=\left(b^{2}-a c\right)\left(a x^{2}+2 b x y+c y^{2}\right)\)
    
    <br><br>
    
    9.
    \(\omega \) এককের জটিল ঘনমূলের মান নির্ণয় করো। 
    <br>উত্তরঃ  \(0\) <br><br>
    
    10. \( \left|\begin{array}{ccc}
    x+4 & 3 & 3 \\
    3 & x+4 & 5 \\
    5 & 5 & x+1
    \end{array}\right|=0\) থেকে x এর মান নির্ণয় করো
    <br>উত্তরঃ  \(x=-1,-11,3\) <br><br>
    
    10। ক্রোমারের নিয়মে সমাধান করো, <br>
    (a) \( \begin{array}{l}
    x+y+z=1 \\
    x+2 y+z=2 \\
    x+y+2 z=0
    \end{array} \)  \( \; \; Ans.x=1, y=1, z=-1  \)  <br>
    (b) \( \left|\begin{array}{ccc}
    x+4 & 3 & 3 \\
    3 & x+4 & 5 \\
    5 & 5 & x+1
    \end{array}\right|=0 \)  \( \; \; Ans.x=2, y=2, z=-1  \)  <br>
    
    11. \(A=\left[\begin{array}{ll}
    4 & 3 \\
    2 & 1
    \end{array}\right]\) এবং \(A B=\left[\begin{array}{cc}10 & 17 \\ 4 & 7\end{array}\right]\)
    হয় তবে B ম্যাট্রিক্সের উপাদান সংখ্যা নির্ণয় করো।
    <br>উত্তরঃ  \(B=\left[\begin{array}{ll}
    1 & 2 \\
    2 & 3
    \end{array}\right]\) <br><br>
    <hr style="height:2px;border-width:0;color:gray;background-color:teal">
    
    <h2 class="font-weight-bold text-center" style="font-family: Comic Sans MS; color:orange">Vector</h2> <br>
    1. \( \overrightarrow{\mathrm{OA}}=2 \hat{i}+3 \hat{j}-4 \hat{k} \) এবং \(\overrightarrow{\mathrm{OB}}=4 \hat{i}-3 \hat{j}+2 \hat{k}\) হলে \( | \overrightarrow{\mathrm{AB}}|\) এর মান নির্ণয় করো। 
    <br>উত্তরঃ \( 2 \sqrt{19} \) <br><br>
    2. \(\underline{a}=2 \hat{i}+2 \hat{j}+\hat{k}\)  ও  \(\underline{b}=2 \hat{i}+10 \hat{j}-11 \hat{k}\) ভেক্টরদুটির অন্তর্ভুক্ত কোণের মান নির্ণয় করো।
    <br>উত্তরঃ  \(73 \cdot 21^{\circ}\) <br><br>
    3. \(\bar{A}=\hat{i}+2 \hat{j}-3 \hat{k}\) এবং  \(\overline{\mathrm{B}}=3 \hat{i}-\hat{j}+2 \hat{k}\) হলে দেখাও যে, \(\bar{A}+\bar{B} \) এবং \(\bar{A}-\bar{B} \) ভেক্টরদুটি পরস্পর লম্ব।
    <br><br>
    4. \(a \hat{i}-2 \hat{j}+\hat{k} \) এবং \( 2 a \hat{i}-a \hat{j}-4 \hat{k} \) ভেক্টরদুটি পরস্পর লম্ব হলে \(a\) এর মান নির্ণয় করো।
    \(\underline{a}  \) \(-2, 1\)<br><br>
    5. যদি \( \underline{a}+\underline{b}+\underline{c}=\underline{0} \) এবং \(|\underline{a}|=3,|\underline{b}|=5,|\underline{c}|=7 \) হয়, তাহলে \(\underline{a}  \) এবং \(\underline{b}  \) এর মধ্যবর্তী কোণ নির্ণয় করো।
    <br>উত্তরঃ \(60^{\circ}\)<br><br>
    6. \(2 \hat{i}-\hat{j}+2 \hat{k}\) অক্ষত্রয়ের সাথে যে কোন নির্ণয় করো।
    <br>উত্তরঃ \(\cos ^{-1} \frac{2}{3}, \cos ^{-1} \frac{-1}{3}, \cos ^{-1} \frac{2}{3}\)<br><br>
    7. \(a\) এর মান কপ্ত হলে \(A=a \hat{i}+4 \hat{j}+3 \hat{k}\) ভেক্টরটি X অক্ষের সাথে \(30^{\circ}\) কোণ উৎপন্ন করে?
    <br>উত্তরঃ \(a=5 \sqrt{3}\)<br><br>
    8. \( \overrightarrow{\mathrm{a}}=\hat{\mathrm{i}}+2 \hat{\mathrm{j}}+2 \hat{\mathrm{k} }\)  এবং \( \overrightarrow{\mathrm{b}}=4 \hat{\mathrm{i}}+8 \hat{\mathrm{j}}-\hat{\mathrm{k} } \) হলে \(\vec{a}\) ভেক্টরের উপর   \(\vec{b}\) ভেক্টরের অভিক্ষেপ এবং \(\vec{a}\) ভেক্টরের উপর   \(\vec{b}\) ভেক্টরের উপাংশ নির্ণয় করো। 
    <br>উত্তরঃ \(6 \; , \; \; (2 \hat i+4  \hat j+4  \hat k) \)<br><br>
    9. P ও Q বিন্দুর স্থানাঙ্ক যথাক্রমে \( (1,1,1)\) এবং \( (3,2,-1)\) হলে \(\overrightarrow{PQ}\) ভেক্টরের সমান্তরাল একক ভেক্টর নির্ণয় করো। 
    <br>উত্তরঃ \(\pm \frac{1}{3}(2 \hat i+\hat j-2\hat k)\)<br><br>
    10. A ও B বিন্দুর অবস্থান যথাক্রমে, \(2 \hat i+3\hat j-4 \hat k\) ও \( \hat{i}-3 \hat{j}+2 \hat{k}\).  \(\overrightarrow{A B}\) এর মান নির্ণয় করো।
    <br>উত্তরঃ \( \frac{2 \hat  i-6 \hat j+6 \hat k}{\sqrt{76}} \)<br><br>
    11. দুটি ভেক্টর \(\vec{A}=2 \hat  i+\hat  k+2 \hat j\) ও \(\vec{B}=-3\hat  j+6\hat  i+2\hat  k \) দ্বারা গঠিত সমতলের উপর একটি লম্ব একক ভেক্টর নির্ণয় করো।
    <br>উত্তরঃ \(\pm \frac{7 \hat i+2 \hat j-18 \hat k}{\sqrt{377}}\)<br><br>
    12. \(\underline{a}=\hat{i}+\hat{j}-k, \underline{b}=\hat{i}-\hat{j}+\hat{k}\) হলে , এমন একটি ভেক্টর \(\underline{c}\) নির্ণয় করো, যা \(\underline{a}\) ও \(\underline{b}\) এর সাথে সমতলীয় হবে এবং \(\underline{a}\) এর উপর লম্ব হবে। 
    <br>উত্তরঃ \(\pm \frac{1}{\sqrt{6}}(2 \hat{i}-\hat{j}+\hat{k})\)<br><br>
    13. a এর মান নির্ণয় করো যেন, \(2 \hat i+\hat j-\hat k \; , \; 3 \hat i-2 \hat j+4 \hat k \; , \;\hat i-3 \hat j+a \hat k\) এই তিনটি ভেক্টর একই সমতলে থাকে। 
    <br>উত্তরঃ \(a=5\)<br><br>
    14. \(\vec{a}=3 \hat{i}-3 \hat{j}+6 \hat{k}, \vec{B}=\hat{i}-\hat{j}+m \hat{k}, \; \; m\) এর মান কত হলে \(\overrightarrow{\mathrm{A}} \| \overrightarrow{\mathrm{B}}\)।
    <br>উত্তরঃ \(m=2\)<br><br>
    15. \(\vec{A B}=3 \hat i+2 \hat j- \hat k\) এবং \(\vec{ A C}=5\hat  i-\hat j+2\hat k \) হলে AB ও AC কে সন্নিহিত বাহু ধরে অঙ্কিত সামান্তরিকের ক্ষেত্রফল নির্ণয় করো।
    <br>উত্তরঃ \(\sqrt{299}\)<br><br>
    16. ভেক্টর পদ্ধতিতে দেখাও যে , ত্রিভূজের মধ্যমা তিনটি সমবিন্দু।<br><br>
    17. ভেক্টর পদ্ধতিতে প্রমাণ করো যে অর্ধ বৃত্তস্থ কোণ এক সমকোণ। <br><br>
    18. ভেক্টর পদ্ধতিতে প্রমাণ করো যে, যেকোন ত্রিভুজ ABC তে, \(\cos C=\frac{a^{2}+b^{2}-c^{2}}{2 a b}\) <br><br>
    19. \(2 \hat{i}+3 \hat{j}-4 \hat{k} \) বিন্দুগামী সরলরেখা \(5 \hat{i}+6 \hat{j}+8 \hat{k}\) ভেক্টরের সমান্তরাল একক ভেক্টর নির্ণয় করো।
    <br>উত্তরঃ \(\underline{r}=2 \hat{i}+3 \hat{j}-4 \hat{k}+\mathrm{t}(5 \hat{i}+6 \hat{j}+8 \hat{k})\)<br><br>
    20. \(1,2,-6\) বিন্দুগামী এবং \(A(2,-3,0)\) ও  \(B(4,-4,1)\) বিন্দুদ্বয়ের সংযোগ সরলরেখার সমান্তরাল সরলরেখার ভেক্টর সমীকরণ নির্ণয় করো।
    <br>উত্তরঃ \(\underline{r}=\hat i+2\hat  j-6 \hat  k+t(2 \hat i-\hat j+\hat k)\)<br><br>
    21. ভেক্টর পদ্ধতিতে প্রমাণ করো যে, সামান্তরিকের কর্ণদ্বয় পরস্পরকে সমদ্বিখন্ডিত করে।
    
    
    <hr style="height:2px;border-width:0;color:gray;background-color:teal">

    <h2 class="font-weight-bold text-center" style="font-family: Comic Sans MS; color:orange">Straigt Line</h2> <br>

    1. \((-\sqrt{3}, 1) \) কার্তেসীয় স্থানাঙ্ককে পোলার স্থানাঙ্কে প্রকাশ করো।
    <br>উত্তরঃ \(\left(2,150^{\circ}\right)  \)<br><br>
    2.  \(\left(4,60^{\circ}\right)  \) পোলার  স্থানাঙ্ককে কার্তেসীয় স্থানাঙ্কে প্রকাশ করো।
    <br>উত্তরঃ \( 2, 2\sqrt{3}     \)<br><br>
    3. \(\left(x^{2}+y^{2}\right)=2 a^{2} x y\)  কার্তেসীয় সমীকরণকে  পোলার সমীকরণে প্রকাশ করো।
    <br>উত্তরঃ \(r^{2}=a^{2} \sin 2 \theta\)<br><br>
    4. \(r \cos \theta=2 \operatorname{a sin}^{2} \theta) \)  সমীকরণকে কার্তেসীয় সমীকরণে প্রকাশ করো।
    <br>উত্তরঃ \(x^{3}=y^{2}(2 a-x)\)<br><br>
    5. y অক্ষ এবং (7,2) বিন্দু থেকে (a,5) দূরত্ব সমান হলে, a এর মান কত?
    <br>উত্তরঃ \(a=\frac{29}{7}\)<br><br>
    6.একটি সমবাহু ত্রিভূজের দুইটি শীর্ষবিন্দুর স্থানাঙ্ক (0,-4) এবং (0,4) হলে ৩য় শীর্ষবিন্দুর স্থানাঙ্ক নির্ণয় করো।
    <br>উত্তরঃ \((\pm 4 \sqrt{3}, 0)\)<br><br>
    7.P(1.-1) এবং Q(8,6) বিন্দুদ্বয়ের সংযোগ রেখাকে যে বিন্দুতে 3:4 অনুপাতে অন্তর্বিভক্ত এবং বহির্বিভিক্ত করে, তাদের স্থানাঙ্ক নির্ণয় করো। 
    <br>উত্তরঃ \((4,2) \; \; \; \; (-20,-22) \)<br><br>
    8. (-2,3) এবং (4,-7) বিন্দুদ্বয়ের সংযোগ রেখাংশকে X-অক্ষ এবং Y অক্ষ যে অনুপাতে বিভক্ত করে তা নির্ণয় করো।
    <br>উত্তরঃ \(  3: 7 \; , \; 1: 2   \)<br><br>
    9.  A ও B বিন্দুর স্থানাঙ্ক যথাক্রমে (-2,4) ও (4,-5)।  AB রেখাংশকে C পর্যন্ত বর্ধিত করা হলো যেন AB=3BC হয়। C বিন্দুর স্থানাঙ্ক নির্ণয় করো। 
    <br>উত্তরঃ \( (6, -8)\)<br><br>
    10. দেখাও যে, \( y=m x, y=m_{1} x \) এবং \( y=b\) রেখাত্রয় দ্বারা গঠিত ত্রিভূজের ক্ষেত্রফল \(\frac{b^{2}}{2}\left(\frac{1}{m} \sim \frac{1}{m_{1}}\right)\) বর্গ একক।
    <br>
    11.কোন সামান্তরিকের একটি কর্ণের প্রান্তবিন্দুদ্বয়ের স্থানাঙ্ক (3,-4) এবং (-6,5); এর তৃতীয় শীর্ষ (-2,-1) হলে, ৪র্থ শীর্ষবিন্দুর স্থানাঙ্ক নির্ণয় করো।
    <br>\( (-2, -1 ) \)<br>
    12. ABC ত্রিভূজের শীর্ষত্রয় \(A(-3,-2), B(-3,9)\) এবং \(C(5,-8) \); ত্রিভূজের ক্ষেত্রফল নির্ণয় করো এবং এর সাহায্যে B হতে CA এর উপর লম্বের দৈর্ঘ নির্ণয় করো।
    <br>উত্তরঃ \(44\) বর্গএকক , \(8 \frac{4}{5}\) <br><br>
    13. কোন ত্রিভূজের শীর্ষত্রয়ের স্থানাঙ্ক \((t+1,1),(2 t+1,3),(2 t+2,2 t)\)। ত্রিভুজটির ক্ষেত্রফল নির্ণয় করো এবং দেখাও যে \(t=2\) অথবা \(t= - \frac{1}{2}\) হলে বিন্দুগুলি সমরেখ হবে? 
    <br>উত্তরঃ \(\frac{1}{2}\left|2 t^{2}-3 t-2\right|\)  বর্গএকক<br><br>
    14. যদি \(A(3,4), B(2 t, 5) \) ও \(C(6, t) \) বিন্দুত্রয় দ্বারা উৎপন্ন ত্রিভূজের ক্ষেত্রফল \(19 \frac{1}{2}\) বর্গএকক হয়, তবে t এর মান নির্ণয় করে।
    <br>উত্তরঃ \( -2, \frac{15}{ 2}\)<br><br>
    15. \( a \) এর মান কত হলে , \((a, 2-2 a),(1-a, 2 a) , (-4-a, 6-2 a)\) বিন্দুত্রয় সমরেখ হবে?
    <br>উত্তরঃ \((a=-1,1 / 2)\)<br><br>
    16. (a, 0) এবং (0,a) বিন্দু দুইটি হতে একটি সেটের যেকোনাে বিন্দুর দূরত্বের বর্গের অন্তর \(2a\) এর সমান হলে সঞ্চার পথটির সমীকরণ নির্ণয় কর।
    
    <br>উত্তরঃ \(  y = x \pm  1  \)<br><br>
    17. A(2,3) এবং B(-1, 4) দুইটি স্থির বিন্দু । A এবং B বিন্দু হতে একটি সেটের যেকোনাে বিন্দুর দূরত্বের | অনুপাত 2:3 হলে সঞ্চার পথটির সমীকরণ নির্ণয় কর।।
    <br>উত্তরঃ \( 5x^2 + 5y^2 - 44x -22y + 49 = 0 \)<br><br>
    18.  (-1,3) এবং (4,-2) বিন্দুগামী সরলরেখা সমীকরণ নির্ণয় করো। এবং অক্ষ দুটির মধ্যবর্তী খন্ডিতাংশের দৈর্ঘ নির্ণয় করো।
    <br>উত্তরঃ \(  (x+y=2,2 \sqrt{2})   \)<br><br>
    19.A(h, k) বিন্দুটি \(6x – y = 1\) রেখার উপর এবং B(k , h) বিন্দুটি \(2x - 5y = 5\) রেখার উপর অবস্থিত । AB সরলরেখাটির সমীকরণ নির্ণয় কর।
    <br>উত্তরঃ \(x+y - 6 = 0 \)<br><br>
    20. \( x - 4 = 0 \; , \; y - 5 = 0 \; ,\;  x + 3 = 0\) এবং \(y + 2 = 0\) রেখাগুলি দ্বারা উৎপন্ন চর্তুভুজের কর্ণদ্বয়ের সমীকরণ নির্ণয় কর।
    <br>উত্তরঃ \(   x – y + 1= 0, x + y -2 = 0  \)<br><br>
    21. \( 3x + 3 y + 2 = 0\) এবং \(x \cos \alpha+ y \sin \alpha = p\) একই সরলরেখা নির্দেশ করলে \(p\) এর মান নির্ণয় কর।
    <br>উত্তরঃ \(  \frac{1} {\sqrt 3}  \)<br><br>
    22. \(x + 2y + 7 = 0\) রেখাটির অক্ষদ্বয়ের মধ্যবর্তী খন্ডিতাংশের মধ্যবিন্দুর স্থানাঙ্ক নির্ণয় কর। উপরি উক্ত খন্ডিতাংশ কোনাে বর্গের বাহু হলে, তার ক্ষেত্রফল নির্ণয় কর।
    <br>উত্তরঃ \( (-\frac{7}{2}-\frac{7}{4} \; , \; 61 \frac{1}{4} \) বর্গএকক<br><br>
    23.যে সরলরেখার অক্ষদ্বয়ের মধ্যবর্তী খন্ডিত অংশ (6, 2) বিন্দুতে 2 : 3 অনুপাতে অন্তর্বিভক্ত হয় তার সমীকরণ নির্ণয় কর।
    <br>উত্তরঃ \( x + 2y = 10\)<br><br>
    24. একটি সরলরেখার সমীকরণ নির্ণয় কর যা অক্ষদ্বয়ের সাথে 16 বর্গ একক ক্ষেত্রফলবিশিষ্ট ত্রিভূজ গঠন করে | এবং মূলবিন্দু থেকে যার উপর অঙ্কিত লম্ব x-অক্ষের ধনাত্মক দিকের সাথে 45° কোণ উৎপন্ন করে।
    <br>উত্তরঃ \(x+y+ 4 \sqrt 2 = 0\)<br><br>
    25.এমন একটি সরলরেখার সমীকরণ নির্ণয় কর যা (-2,-5) বিন্দু দিয়ে যায় এবং x ও y-অক্ষকে যথাক্রমে A ও B বিন্দুতে ছেদ করে যেন \(OA + 2.OB = 0 \) হয় , যখন O মূলবিন্দু। 
    <br>উত্তরঃ \(x = 6y, \; 2x = 3y\)<br><br>
    26. x + 3y – 12 = 0 রেখার অক্ষদ্বয়ের মধ্যবর্তী খন্ডিতাংশের ত্রিখন্ডক বিন্দুদ্বয়ের সাথে মূলবিন্দুর সংযােগ রেখার সমীকরণ নির্ণয় কর।।
    <br>উত্তরঃ \(x = 6y, \; 2x = 3y \)<br><br>
    27. y অক্ষের সমান্তরাল এবং \(2 x-7 y+11=0 \text { ও } x+3 y-8=0 \) রেখাদ্বয়ের ছেদবিন্দুগামী রেখার সমীকরণ নির্ণয় করো।
    <br>উত্তরঃ \( 13 x-23=0\)<br><br>
    28. a এর মান কত হলে \(3 x+2 y-5=0, a x+4 y-9=0\) এবং \( x+2 y-7=0) \) রেখাত্রয় সমবিন্দু?
    <br>উত্তরঃ \(    a=7   \)<br><br>
    29. \( 4x- 3y = 8\) সরলরেখার সমান্তরাল এবং তা থেকে 2 একক দূরে অবস্থিত রেখাসমূহের সমীকরণ নির্ণয় কর।
    <br>উত্তরঃ \(4 x-3 y+2=0,4 x-3 y-18=0\)<br><br>
    30. মূলবিন্দু থেকে 7 একক দূরত্বে এবং \(3x-4y +7= 0\) রেখার উপর লম্ব রেখাসমূহের সমীকরণ নির্ণয় কর।
    <br>উত্তরঃ \(4 x+3 y \pm 35=0\)<br><br>
    31. \(y = 2x + 1\) ও \(2y - x = 4\) রেখা দুইটির অন্তর্ভুক্ত কোণগুলির সমদ্বিখন্ডক y-অক্ষকে P ও Q বিন্দুতে।
    ছেদ করে। PQ এর দূরত্ব নির্ণয় কর। 
    <br>উত্তরঃ \(4/3 \)<br><br>
    32.\(4y-3x = 3\) এবং \(3y - 4x =5\) রেখা দুইটির অন্তর্ভুক্ত স্কুলকোণের সমীকরণ নির্ণয় কর। 
    <br>উত্তরঃ \(y+x+2=0\)<br><br>
    33. \(4x-4y + 3 = 0\) এবং \(x + 7y-2 = 0\) রেখা দুইটির অন্তর্ভুক্ত কোণগুলির সমদ্বিখন্ডকের সমীকরণ নির্ণয়
    <br>উত্তরঃ \(11 x+3 y-17=0\)<br><br>
    
    <hr style="height:2px;border-width:0;color:gray;background-color:teal">

    <h2 class="font-weight-bold text-center" style="font-family: Comic Sans MS; color:orange">Circle</h2> <br>
    
    
    1. \(3x – y - 2x = 2y - 1\) বৃত্তের কেন্দ্র এবং ব্যাসার্ধ বের করো।
    <br>উত্তরঃ \(\frac{3}{4},-\frac{1}{4}, \frac{3 \sqrt{2}}{4}\)<br><br>
    2. বৃত্তের পােলার সমীকরণ নির্ণয় কর: কেন্দ্র \(4,30^{\circ} \) এবং ব্যাসার্ধ 5  
    <br>উত্তরঃ \(r^{2}-8 r \cos \theta-\frac{\pi}{6}-9=0 \)<br><br>
    3. বৃত্তের কেন্দ্র ও ব্যাসার্ধ নির্ণয় কর: \(r^{2}-4 \sqrt{3} r \cos \theta-4 r \sin \theta+15=0\)
    <br>উত্তরঃ \( 4, \frac{\pi}{6}, 1\)<br><br>
    4.  k এর কোন মানের জন্য \((x – y + 3)2 + (Kx + 2)(y - 1) = 0 \) সমীকরণটি একটি বৃত্ত নির্দেশ করে? 
    <br>উত্তরঃ \( k=2 \)<br><br>
    5. একটি বৃত্ত (3,5) ও (6,4) বিন্দু দিয়ে অতিক্রম করে যার কেন্দ্র (i) \(x + 2y - 10 = 0\) সরলরেখা উপর (ii) x অক্ষের উপর অবস্থিত।
    উপর অবস্থিত। বৃত্তটির সমীকরণ বের কর।
    <br>উত্তরঃ \(x^{2}+y^{2}-8 x-6 y+20=0\)<br><br>
    6.  \(\frac{\sqrt 10}{2} \) ব্যাসার্ধ বিশিষ্ট একটি বৃত্ত (1, 1) বিন্দু দিয়ে অতিক্রম করে এবং বৃত্তের কেন্দ্র \(y = 3x - 7\) রেখার উপর অবস্থিত।
    বৃত্তের সমীকরণ নির্ণয় কর। 
    <br>উত্তরঃ \(x^{2}+y^{2}-5 x-y+4=0 \)<br><br>
    7.  (2, 3) বিন্দুতে কেন্দ্রবিশিষ্ট এবং x-অক্ষকে স্পর্শ করে এরূপ বৃত্তের সমীকরণ নির্ণয় কর। বৃত্তটি y-অক্ষ হতে
    যে পরিমাণ অংশ ছেদ করে তা নির্ণয় কর।
    <br>উত্তরঃ \( x^2 + y^2 –4x – 6y + 4 = 0, 2 \sqrt 5 \)<br><br>
    8. একটি বৃত্ত (- 6, 5), ( 3, - 4) এবং (2, 1) বিন্দু তিনটি দ্বারা অতিক্রম করে। বৃত্তটির সমীকরণ, কেন্দ্রের
    স্থানাঙ্ক এবং ব্যাসার্ধ নির্ণয় কর।
    <br>উত্তরঃ \(x + y + 6x-2y - 15 = 0, (-3, 1), 5 \)<br><br>
    9. একটি বৃত্ত (1,2) ও (3,2) বিন্দু দিয়ে যায় এবং x অক্ষ স্পর্শ করে। তার সমীকরণ নির্ণয় কর।
    <br>উত্তরঃ \(2 x^{2}+2 y^{2}-8 x-5 y+8=0 \)<br><br>
    10. এরূপ বৃত্তের সমীকরণ নির্ণয় কর যা মূলবিন্দু থেকে 2 একক দূরে x-অক্ষকে দুইটি বিন্দুতে ছেদ করে এবং যার ব্যাসার্ধ 5 একক।
    <br>উত্তরঃ \( x^{2}+y^{2} \pm 2 \sqrt{21} y-4=0 \)<br><br>
    11.  এরূপ বৃত্তের সমীকরণ নির্ণয় কর যা y-অক্ষকে \( (0, \sqrt 3 ) \) বিন্দুতে স্পর্শ করে এবং (- 1, 0) বিন্দু দিয়ে অতিক্রম করে। বৃত্তটির কেন্দ্র ও ব্যাসার্ধ নির্ণয় কর। 
    <br>উত্তরঃ \(x^{2}+y^{2}+4 x-2 \sqrt{3} y+3=0 ;(-2, \sqrt{3}) ; 2\)<br><br>
    12.  এরূপ বৃত্তের সমীকরণ নির্ণয় কর যা x-অক্ষকে (4, 0) বিন্দুতে স্পর্শ করে এবং y-অক্ষ থেকে 6 একক দীর্ঘ
    একটি জ্যা কর্তন করে। 
    <br>উত্তরঃ \(x^{2}+y^{2}-8 x \pm 10 y+16=0\)<br><br>
    13.  (-4, 3) ও (12,-1) বিন্দু দুইটির সংযােগ রেখাকে ব্যাস ধরে অঙ্কিত বৃত্তের সমীকরণ নির্ণয় কর। বৃত্তটি
    দ্বারা y-অক্ষের ছেদাংশের দৈর্ঘ্য নির্ণয় কর।
    <br>উত্তরঃ \(x^{2}+y^{2}-8 x-2 y-51=0 ; 4 \sqrt{13}\)<br><br>
    14.এরূপ বৃত্তের সমীকরণ নির্ণয় কর যা উভয় অক্ষকে স্পর্শ করে এবং (1, 8) বিন্দু দিয়ে অতিক্রম করে। |
    <br>উত্তরঃ \(x^{2}+y^{2}-10 x-10 y+25=0, x^{2}+y^{2}-26 x-26 y+169=0\)<br><br>
    15. একটি বৃত্তের সমীকরণ নির্ণয় কর যার কেন্দ্র (6 , 0) এবং যা \(x^2 + y^2 - 4x = 0\) বৃত্ত ও \(x = 3\) রেখার
    ছেদ বিন্দু দিয়ে যায়।
    <br>উত্তরঃ \(x^2+y^2 -12x +24 = 0\)<br><br>
    16. মূলবিন্দু দিয়ে যায় এবংx ও y অক্ষকে ধনাত্মক দিক হতে যথাক্রমে 3 ও 5 অংশ ছেদ করে এরূপ বৃত্তের সমকরণ নির্ণয়।
    <br>উত্তরঃ \(x^{2}+y^{2}-3 x-5 y=0\)<br><br>
    17. \(x^2 + y^2 – 4x – 6y + c = 0\) বৃত্তটি x-অক্ষকে স্পর্শ করে। c এর মান ও স্পর্শবিন্দুর স্থানাঙ্ক নির্ণয় কর।
    <br>উত্তরঃ \( 4, (2 , 0 )\)<br><br>
    18. \(x^2 + y^2 - 2x - 4y – 4 = 0\) বৃত্তে অঙ্কিত স্পর্শক \(3x - 4y + 5 = 0\) রেখার উপর লম্ব । স্পর্শকের সমীকরণ নির্ণয় কর। |
    <br>উত্তরঃ \(4 x+3 y-25=0,4 x+3 y+5=0\)<br><br>
    19. দেখাও যে, \(x + my = 1\) রেখাটি \(x^2 + y^2 – 2ax = 0\) বৃত্তকে স্পর্শ করবে যদি \(a^2 m^2 + 2al = 1\) হয়।
    
    <br>উত্তরঃ \(     \)<br><br>
    20. \(x ^2 + y^Y2 – 2x - 4y - 4 = 0\) বৃত্তে অঙ্কিত স্পর্শক \(3x - 4y -1 = 0\) রেখার সমান্তরাল। স্পর্শকের সমীকরণ নির্ণয় কর।।
    
    <br>উত্তরঃ \(3x – 4y + 20 = 0, \; 3x – 4y – 10 = 0\)<br><br>
    21.\(x^2+y^2 = 144\) বৃত্তের একটি জ্যা এর সমীকরণ নির্ণয় কর যার মধ্যবিন্দু (4, –6) বিন্দুতে অবস্থিত।
    
    <br>উত্তরঃ \( 2x - 3y = 26\)<br><br>
    22. \( x^2 + y^ 2 + 6x + 2y + 6 = 0\) ও \(x^2 + y^2 + 8x + y + 10 = 0 \) বৃত্ত দুইটির সাধারণ জ্যাকে ব্যাস ধরে অঙ্কিত বৃত্তের সমীকরণ নির্ণয় কর।
    <br>উত্তরঃ \(5(x^2 + y^2 ) + 26x + 12y + 22 = 0\)<br><br>
    23. \(x^ 2 + y^2 - 4x + 6y - 36 = 0\) ও \(x ^2 + y^ 2 – 5x + 8y - 43 = 0\) বৃত্ত দুইটির সাধারণ জ্যা এর সমীকরণ নির্ণয় কর।
    <br>উত্তরঃ \(x-2y+ 7 = 0\)<br><br>
    24.দেখাও যে, \(x^2 + y^2 – 2x + 4y - 31 = 0 \) ও \(x^2 + y^2 + 4x - 4y + 7 = 0\) বৃত্ত দুইটি পরস্পরকে
    অন্তঃস্থভাবে স্পর্শ করে। সাধারণ স্পর্শক ও স্পর্শ বিন্দু নির্ণয় কর।
    
    <br>উত্তরঃ \(3x – 4y + 19 = 0,\; (15,14) \)<br><br>
    25.  \(x + y + 4x = 8y + 2 = 0 \) বৃত্তের স্পর্শক অক্ষ দুইটি হতে একই চিহ্নবিশিষ্ট সমমানের অংশ ছেদ করে। স্পর্শকের সমীকরণ নির্ণয় কর।
    <br>উত্তরঃ \( x + y + 4 = 0, x + y – 8 = 0\)<br><br>
    26. \(x^2 + y^2 = 16\) বৃত্তে অঙ্কিত স্পর্শক ২-অক্ষের ধনাত্মক দিকের সাথে 30° কোণ উৎপন্ন করে। স্পর্শকের | সমীকরণ নির্ণয় কর।
    <br>উত্তরঃ \( 3 y = x + 8\)<br><br>
    27. \(x^2+y^2– 3x + 10y-15 =0\) বৃত্তের (4, -11) বিন্দুতে স্পর্শকের সমীকরণ নির্ণয় কর।
    
    <br>উত্তরঃ \(5x – 12y – 152 = 0\)<br><br>
    28.  \(y = 2x \) রেখাটি \(x^ 2 + y ^2 = 10x\) বৃত্তের একটি জ্যা । উক্ত জ্যাকে ব্যাস ধরে অঙ্কিত বৃত্তের সমীকরণ নির্ণয় কর।
    <br>উত্তরঃ \(x^2 + y^2 – 2x - 4y = 0\)<br><br>
    
    <hr style="height:2px;border-width:0;color:gray;background-color:teal">

    <h2 class="font-weight-bold text-center" style="font-family: Comic Sans MS; color:orange">বিন্যাস ও সমাবেশ</h2> <br>
  
    
    1. \( n-1 p_{3} : n+1 p_{3}=5: 12 \) হলে n এর মান কত?
    <br>উত্তরঃ \(8\)<br><br>
    2.  'MATHEMATICS' শব্দটির বর্ণগুলিকে কত রকমে সাজানাে যায় যখন, 
    (a) সবগুলি বর্ণ ব্যবহার করা হয়। 
    (b) স্বরবর্ণগুলি একত্রে থাকে।
    (c) স্বরবর্ণগুলি একত্রে থাকে না।
    (d) প্রথমে T এবং শেষে T থাকে। 
    (e) স্বরবর্ণগুলি ক্রম পরিবর্তন করে না ।
    (f) স্বরবর্ণগুলি স্থান পরিবর্তন করে না।
    (g) স্বরবর্ণ ও ব্যঞ্জনবর্ণ আপেক্ষিক পরিবর্তন করে না ।
    <br>উত্তরঃ \(a= 4এ989600 \; b = 120960 \; c=486870 \; d= 90720 \; e= 415800 \; f=1260 \; g=15120 \)<br><br>
    3. প্রমাণ কর যে, AMERICA' শব্দটির বর্ণগুলি একত্রে নিয়ে বিন্যাস সংখ্যা ‘ CANADA' শব্দটির বর্ণগুলির একত্রে নিয়ে বিন্যাস সংখ্যার 21 গুণ <br><br>
    4.\(ENGINEERING \) শব্দটির সব কয়টি বর্ণকে কত প্রকারে সাজানাে যায় তা নির্ণয় কর। তাদের
    কতগুলিতে তিনটি E একত্রে থাকবে এবং কতগুলিতে এরা প্রথমে থাকবে।
    <br>উত্তরঃ \(  277200,15120,1680\)<br><br>
    5.স্বরবর্ণগুলিকে পাশাপাশি না রেখে ‘ TRIANGLE শব্দটির বর্ণগুলি কত সংখ্যক উপায়ে সাজানাে যায় তা নির্ণয় কর?
    <br>উত্তরঃ \( 7700 \)<br><br>
    6. স্বরবর্ণগুলিকে স্থান পরিবর্তন না করে ' PERMUTATION ' শব্দটির বর্ণগুলি কত উপায়ে পুনর্বিন্যাস করা
    
    <br>উত্তরঃ \( 359 \)<br><br>
    7. স্বরবর্ণগুলিকে কেবল (i) জোড় স্থানে (ii) বিজোড় স্থানে রেখে ARTICLE' শব্দটির অক্ষরগুলিকে কত প্রকারে সাজানাে যায় তা নির্ণয় কর।
    <br>উত্তরঃ \( (i) 144 (ii) 576 \)<br><br>
    8.  10 টি বস্তুর 5টি একবারে নিয়ে কতগুলি বিন্যাসের মধ্যে 2টি বিশেষ বস্তু সর্বদা অন্তর্ভুক্ত থাকবে?
    <br>উত্তরঃ \(6720 \)<br><br>
    9. দুইজন B.Sc. ক্লাসের ছাত্রকে পাশাপাশি না বসিয়ে 14 জন I.Sc. ক্লাসের ও 10 জন B.Sc. ক্লাসের ছাত্রকে কত রকমে একটি লাইনে সাজানাে যায়, তা নির্ণয় কর।
    <br>উত্তরঃ \( 14 ! \times^{15} \mathrm{P}_{10} \)<br><br>
    10. প্রত্যেক অঙ্ককে প্রত্যেক সংখ্যায় একবার মাত্র ব্যবহার করে 6, 5, 2, 3, 0 অঙ্কগুলি দ্বারা পাঁচ অঙ্ক বিশিষ্ট কতগুলি অর্থপূর্ণ বিজোড় সংখ্যা গঠন করা যায়? 
    <br>উত্তরঃ \(36 \)<br><br>
    11. 1, 2 3, 4, 5, 6 অঙ্কগুলিকে প্রতি সংখ্যায় একবার মাত্র ব্যবহার করে, 
    (i) তিন অঙ্কবিশিষ্ট কতগুলাে সংখ্যা গঠন করা যায়? <br>
    (ii) তিন অঙ্ক বিশিষ্ট কতগুলাে বিজোড় সংখ্যা গঠন করা যায়?  <br>
    (iii) তিন অঙ্ক বিশিষ্ট কতগুলাে জোড় সংখ্যা গঠন করা যায়?  <br>
    (iv) 4000 এর চেয়ে বড় কিন্তু 6000 এর চেয়ে ছােট সংখ্যাগুলাে অবশ্যই চার অঙ্কবিশিষ্ট হবে এবং সংখ্যাগুলাে 4 অথবা 5 দ্বারা শুরু। হবে।।
    
    <br>উত্তরঃ \( 
    (i) 60, \;
    (ii)  60, \;
    (iii) 20, \;
    (iv)  120
    \)<br><br>
    12. একটি প্রফেসরের পদের জন্য 3 জন প্রার্থী 5 জন লােকের ভােটে একজন নিবাচিত হবে। কত প্রকারে ভােট দেওয়া
    <br>উত্তরঃ \(243 \)<br><br>
    13.  8 জন মেয়ে বৃত্তাকারে নাচবে। কত প্রকারে পৃথক পৃথক ভাবে তারা বৃত্তাকারে দাঁড়াবে?
    <br>উত্তরঃ \(5040. \)<br><br>
    14. ৪ টি ভিন্ন ধরনের মুক্তা কত রকমে একটি ব্যান্ডে লাগিয়ে একটি হার তৈরি করা যেতে পারে?
    
    <br>উত্তরঃ \(2520\)<br><br>
    15. দুইজন কলা বিভাগের ছাত্রকে পাশাপাশি না বসিয়ে ৪ জন বিজ্ঞান বিভাগের ছাত্র ও 7 জন কলা বিভাগে ছাত্রকে কত রকমে একটি গােল টেবিলের চারপাশে বসানাে যায়, তা নির্ণয় কর।
    <br>উত্তরঃ \(7 ! \times^{8} P_7\)<br><br>
    16. একজন সংকেত-কারকের 6 টি পতাকা আছে, যাদের মধ্যে 1 টি সাদা, 2 টি সবুজ এবং 3 টি লাল। সে একসঙ্গে 6 টি
    পতাকা ব্যবহার করে একসঙ্গে 5 টি পতাকা ব্যবহার করে কতটি বিভিন্ন সংকেত দিতে পারে?
    <br>উত্তরঃ \(60 , 60\)<br><br>
    17. 6 জন বিজ্ঞান ও 4 জন কলা বিভাগের ছাত্র থেকে 6 জনের একটি কমিটি গঠন করতে হবে। বিজ্ঞানের ছাত্রদেরকে সংখ্যা গরিষ্ঠতা দিয়ে কত প্রকারে কমিটি গঠন করা যাবে ?
    <br>উত্তরঃ \(115\)<br><br>
    18.  একজন পরীক্ষার্থীকে 12 টি প্রশ্ন থেকে 6 টি প্রশ্নের উত্তর দিতে হবে। তাকে প্রথম 5 টি থেকে ঠিক 4 টি প্রশ্ন
    বাছাই করতে হবে। সে কত প্রকারে প্রশ্নগুলি বাছাই করতে পারবে? 
    
    <br>উত্তরঃ \(105\)<br><br>
    19. সাতটি সরল রেখার দৈর্ঘ্য যথাক্রমে 1, 2, 3, 4, 5, 6, 7 সে.মি. । দেখাও যে, একটি চতুর্ভুজ গঠন করার।
    জন্য চারটি সরল রেখা যত প্রকারে বাছাই করা যায় তার সংখ্যা 32
    20. 9 ব্যক্তির একটি দল দুইটি যানবাহনে ভ্রমন করবে, যার একটিতে সাত জনের বেশি এবং অন্যটিতে চার জনের
    বেশি ধরে না। দলটি কত প্রকারে ভ্রমণ করতে পারবে? 
    <br>উত্তরঃ \( 246\)<br><br>
    21.  'PROFESSOR' শব্দটির অক্ষরগুলাে হতে প্রতিবারে চারটি অক্ষর নিয়ে কতভাবে শব্দ গঠন করা যাবে?
    <br>উত্তরঃ \(738\)<br><br>
    22.  “Examination” শব্দটি হতে 4টি অক্ষর নিলে তাদের সমাবেশ ও বিন্যাস সংখ্যা কত হবে?
    <br>উত্তরঃ \(156,2454\)<br><br>
    
    <hr style="height:2px;border-width:0;color:gray;background-color:teal">
    <h2 class="font-weight-bold text-center" style="font-family: Comic Sans MS; color:orange"> ত্রিকোণমিতিক অনুপাত </h2> <br>
  
    
    1. <img src="image/math/Picture1.png" height="300" width="280" \><br>
    (i) বৃত্তকলা ABC এর ক্ষেত্রফল নির্ণয় করো। <br>
    (ii) ABCD এর পরিসীমা নির্ণয় করো। <br>
    (iii) ছায়াঘেরা অংশের ক্ষেত্রফল বের করো।
    
    <br>উত্তরঃ \((i) 18.1947 \; sq. cm , \;   (ii) 16.3982 \; cm , \;     (iii) 101.053 \; sq. cm , \; \)<br><br>
    
    
    2. <img src="image/math/Picture2.png" height="300" width="300" \><br>
    O কেন্দ্র বিশিষ্ট বৃত্তের ব্যাসার্ধ 10 cm, AB চাপের দৈর্ঘ্য 14 cm <br>
    (i) AOB এর নির্ণয় মান করো। <br>
    (ii) ছায়াঘেরা অংশের ক্ষেত্রফল বের করো।
    
    <br>উত্তরঃ \((i) 1.4 \; rad , \;   (ii) 20.73 \; sq. cm , \;    \)<br><br>
    
    3. <img src="image/math/Picture3.png" height="300" width="300" \><br>
    বৃত্তের ক্ষেত্রফল \(49 \; \pi \) হলে ছায়াঘেরা অংশের ক্ষেত্রফল নির্ণয় করো। 
    <br>উত্তরঃ \(51.313   \) বর্গে একক <br><br>
    
    
    4. <img src="image/math/Picture4.png" height="300" width="300" \><br>
    ABCD আয়তক্ষত্রের AB= 4 m, BC=3 m, ACE একটি বৃতকলা।। বৃত্তাাংশ CE এর দৈর্ঘ্য এবং ছায়াঘেরা অংশের ক্ষেত্রফল নির্ণয় কর। 
    
    <br>উত্তরঃ \((4.635 m 5, 5. 58758 m) \)<br><br>
    
    5. \(a \cos \theta-b \sin \theta=c\) হলে দেখাও যে \(a \sin \theta+b \cos \theta=\pm \sqrt{a^{2}+b^{2}-c^{2}}\)
    <br><br>
    6. \(\sin \theta+\operatorname{cosec} \theta=2\) হলে দেখাও যে \(\sin ^{n} \theta+\operatorname{cosec}^{n} \theta=2\)
    <br><br>
    7. \(\cot A+\cot B+\cot C=0\) হলে দেখাও যে \((\Sigma \tan A)^{2}=\Sigma \tan ^{2} A\)
    <br><br>
    8. \(\cos \theta+\sec \theta=5 / 2\) হলে দেখাও যে \(\cos ^{n} \theta+\sec ^{n} \theta=2^{n}+2^{-n}\)
    <br><br>
    9. \(\sin ^{2} A+\sin ^{4} A=1\) হলে দেখাও যে \(\tan ^{4} A-\tan ^{2} A=1\)
    <br><br>
    10. \( \cos \theta=\frac{4}{5} \) হলে \(\tan \frac{1-\tan ^{2} \theta}{1+\tan ^{2} \theta}\) এর মান নির্ণয় করো।
    <br><br>
    11. \( \tan \theta+\sin \theta=m \) হলে দেখাও যে \( m^{2}-n^{2}-4 \sqrt{m n}\) 
    
    12.নীচের ফাংশংগুলোর লেখচিত্র অঙ্কন করো। (যখনঃ \(- \pi \leq x \leq \pi   \)  )<br>
    (a) \(y=\sin x\) <br>
    (b) \(y=\cos x\) <br>
    (C) \(y=\sin 2 x\) <br>
    (d) \(y=\cos 2 x\) <br>
    (e) \(  y=\sin 3x \) <br>
    (f) \(y=\cos 3x\) <br>
    (g) \(  y=\sin^2 x \) <br>
    (h) \(y=\cos^2 x\) <br>
    (i) \(  y=\sin^3 x \) <br>
    (j) \(y=\cos^3 x\) <br>
    (k) \(y=\tan x\) <br>
    
    
    12. লেখচিত্রের সাহায্যে সমাধান করো। (যখনঃ \(- \pi \leq x \leq \pi   \)  )<br>
    \( \text { (a) } \sin x-\cos x=0,0 \leq x \leq \frac{\pi}{2}  \) (উত্তরঃ \(\frac{\pi}{4}\) )<br>
    \(  \text { (b) } x-\tan x=0,0 \leq x \leq \frac{\pi}{2}  \) (উত্তরঃ \(0, \frac{\pi}{18}\) )<br>
    \(  \text { (b) }\cot x-\tan x=2  \) (উত্তরঃ \(0 \leq x \leq \pi \frac{\pi}{8}, \frac{5 \pi}{8}\) )
    <br><br>
    
    
    <hr style="height:2px;border-width:0;color:gray;background-color:teal">
    <h2 class="font-weight-bold text-center" style="font-family: Comic Sans MS; color:orange"> সংযুক্ত কোণের ত্রিকোণমিতিক অনুপাত </h2> <br>
    
   
    
    1. \(\sin ^{2} \frac{\pi}{7}+\sin ^{2} \frac{5 \pi}{14}+\sin ^{2} \frac{8 \pi}{7}+\sin ^{2} \frac{9 \pi}{14}\) এর মান নির্ণয় করো।
    <br>উত্তরঃ \(2\)<br><br>
    2. \(\tan \theta=\frac{3}{4} \text { ও } \cos \theta \) ঋণাত্বক হলে  \(\frac{\sin \theta+\cos \theta}{\sec \theta+\tan \theta} \) এর মান নির্ণয় করো। <br>
    3. \( \theta= \pi / 20 \) হলে দেখাও যে, \( \cot \theta \cot 3 \theta \cot 5 \theta \cdots \cdots \cdots \cot 19 \theta=-1 \) <br>
    4. প্রমাণ করো যে, <br>
    \( \text { (a) } \frac{\cos 25^{\circ}-\sin 25^{\circ}}{\cos 25^{\circ}+\sin 25^{\circ}}=\tan 20^{\circ}\) <br>
    \(\text { (b) }  \frac{\sin 75^{\circ}+\sin 15^{\circ}}{\sin 75^{\circ}-\sin 15^{\circ}}=\sqrt{3}\)  <br>
    \( \text { (c) }  \frac{\cos 8^{\circ}+\sin 8^{\circ}}{\cos 8^{\circ}-\sin 8^{\circ}}=\tan 53^{\circ} \)  <br> <br>
    
    5. \(A+B+C=\pi \text {ও} \cos A=\cos B \cos C \)  হলে প্রমাণ করো যে, \(\tan A=\tan B+\tan C\)<br>
    6. \( a \cos (x+a)=b \cos (x-a)\) হলে দেখাও যে \((a+b) \tan x=(a-b) \cot a\)
    <br><br>
    7. \(a \sin (x+\theta)=b \sin (x-\theta)\) হলে দেখাও যে \((a+b) \tan \theta+(a-b) \tan x=0\)
    <br><br>
    8. \(\tan \theta+\sec \theta=\frac{x}{y}\) হলে দেখাও যে \(\sin \theta=\frac{x^{2}-y^{2}}{x^{2}+y^{2}}\)
    <br><br>
    9. \(a \sin (\theta+\alpha)=b \sin (\theta+\beta)\) হলে দেখাও যে \(\cot \theta=\frac{a \cos a-b \cos \beta}{b \sin \beta-a \sin \alpha}\)
    <br><br>
    10. \( \cot \alpha+\cot \beta=a, \tan \alpha+\tan \beta=b \text{and } a+\beta=\theta \) হলে \((a-b) \tan \theta=a b\) এর মান নির্ণয় করো।
    <br><br>
    11. \(A+B=\frac{\pi}{4} \) হলে দেখাও যে \((1+\tan A)(1+\tan B)=2\) 
    <br><br>
    12. \( \sin \alpha \sin \beta-\cos \alpha \cos \beta+1=0 \) হলে দেখাও যে \( 1+\cot \alpha \tan \beta=0\) 
    <br><br>
    13. \( \tan \beta=\frac{2 \sin \alpha \sin \gamma}{\sin (\alpha+\gamma)} \) হলে দেখাও যে \(\frac{1}{\tan \alpha}+\frac{1}{\tan \gamma}=\frac{2}{\tan \beta}\) 
    <br><br>
    14. \(\sin x+\sin y=a \) এবং \(\cos x+\cos y=b\) হলে দেখাও যে \(\sin \frac{1}{2}(x-y)=\pm \frac{1}{2} \sqrt{4-a^{2}-b^{2}}\) 
    <br><br>
    15. \(\tan \alpha=\frac{b}{a} \) হলে দেখাও যে \(a \cos \theta+b \sin \theta=\sqrt{a^{2}+b^{2}} \cos (\theta-\alpha)\) 
    <br><br>
    
    16. \(\cos a+\cos \beta=a \) এবং \( \sin \alpha+\sin \beta=b \) হলে দেখাও যে \(\cos (\alpha-\beta)=\frac{1}{2}\left(a^{2}+b^{2}-2\right)\) 
    <br><br>
    
    17. \(\cos (\alpha+\beta) \sin (\gamma+\theta)=\cos (\alpha-\beta) \sin (\gamma-\theta) \) হলে দেখাও যে \(\tan \theta=\tan \alpha \tan \beta \tan y\) 
    <br><br>
    
    18. দেখাও যে \(\tan \frac{45^{\circ}+\theta}{2} \tan \frac{45^{\circ}-\theta}{2}=\frac{\sqrt{2} \cos \theta-1}{\sqrt{2} \cos \theta+1}\) 
    <br><br>
    
    19. প্রমাণ করো যে \(\tan 20^{\circ} \tan 40^{\circ} \tan 60^{\circ} \tan 80^{\circ}=3\) 
    <br><br>
    
    20. \(a \cos a+b \sin \alpha=a \cos \beta+b \sin \beta\) হলে দেখাও যে \(\cos ^{2} \frac{\alpha+\beta}{2}-\sin ^{2} \frac{\alpha+\beta}{2}=\frac{a^{2}-b^{2}}{a^{2}+b^{2}}\) 
    <br><br>
    21. যদি \(\operatorname{cosec} A+\sec A=\operatorname{cosec} B+\sec B\) তাহলে প্রমাণ করো যে \(\tan A \tan B=\cot \frac{A+B}{2}\) 
    <br><br>
    22.প্রমাণ করো যে \(\sin 20^{\circ} \sin 40^{\circ} \sin 60^{\circ} \sin 80^{\circ}=\frac{3}{16}\) 
    <br><br>
    23. যদি \(\sin a+\sin \beta=a \) এবং \(\cos \alpha+\cos \beta=b\) তাহলে প্রমাণ করো যে \(\cos (\alpha+\beta)=\frac{b^{2}-a^{2}}{b^{2}+a^{2}}\) 
    <br><br>
    24. যদি \(\sin a+\sin \beta=a \) এবং \(\cos \alpha+\cos \beta=b\) তাহলে প্রমাণ করো যে \(\cos (\alpha+\beta)=\frac{b^{2}-a^{2}}{b^{2}+a^{2}}\) 
    <br><br>
    25. প্রমাণ করো যে \(\cos ^{2}\left(A-120^{\circ}\right)+\cos ^{2} A+\cos ^{2}\left(A+120^{\circ}\right)=3 / 2\) 
    <br><br>
    
    26. প্রমাণ করো যে \(\sec \theta=\frac{2}{\sqrt{2+\sqrt{2}+2 \cos 4 \theta}}\) 
    <br><br>
    
    27. \(2 \tan a=3 \tan A \) হলে দেখাও যে \(\tan (\alpha-\beta)=\frac{\sin 2 \beta}{5-\cos 2 \beta}\) 
    <br><br>
    
    
    28. \(a \cos \alpha+b \sin \alpha=a \cos \beta+b \sin \beta \) হলে দেখাও যে \(\cos ^{2} \frac{\alpha+\beta}{2}-\sin ^{2} \frac{\alpha+\beta}{2}=\frac{a^{2}-b^{2}}{a^{2}+b^{2}}\) 
    <br><br>
    
    
    30. প্রমাণ করো যে \(\sin 20^{\circ} \sin 40^{\circ} \sin 60^{\circ} \sin 80^{\circ}=\frac{3}{16}\) 
    <br><br>
    31.  \(\tan \frac{\theta}{2}=\sqrt{\frac{1-e}{1+e}} \tan \frac{\varphi}{2} \) হলে দেখাও যে \(\cos \varphi=\frac{\cos \theta-e}{1-e \cos \theta}\) 
    <br><br>
    32.  \(A+B+C=\pi \) হলে দেখাও যে \(\sin 2 A+\sin 2 B+\sin 2 C=4 \sin A \sin B \sin C\) 
    <br><br>
    33.  \(A+B+C=\pi \) হলে প্রমাণ করো যে \(\cos A+\cos B+\cos C=1+4 \sin \frac{A}{2} \sin \frac{B}{2} \sin \frac{C}{2}\) 
    <br><br>
    34.  \(A+B+C=\pi \) হলে দেখাও যে \(\tan A+\tan B+\tan C=\tan A \tan B \tan C\) 
    <br><br>
    35.  \(A+B+C=\pi \) হলে প্রমাণ করো যে \(\sin A+\sin B+\sin C=4 \cos \frac{A}{2} \cos \frac{B}{2} \cos \frac{C}{2}\) 
    <br><br>
    36. \(A+B+C=\pi \) হলে প্রমাণ করো যে, <br>
    \( (a) \; \sin ^{2} A-\sin ^{2} B+\sin ^{2} C=2 \sin A \cos B \sin C\)<br>
    \( (b) \; \cos ^{2} A+\cos ^{2} B-\cos ^{2} C=1-2 \sin A \sin B \cos C\)<br>
    \( (c) \; \cos ^{2} A+\cos ^{2} B+\cos ^{2} C+2 \cos A \cos B \cos C=1 \)<br>
    <br>
    36 pro. \(ABC\) ত্রিভূজে হলে প্রমাণ করো যে, <br>
    \( (a) \; \cos \frac{B-C}{2}=\frac{b+c}{a} \sin \frac{A}{2}\)<br>
    \( (b) \;a(\cos C-\cos B)=2(b-c) \cos ^{2} \frac{A}{2}\)<br>
    \( (c) \; a \sin \left(\frac{A}{2}+B\right)=(b+c) \sin \frac{A}{2} \)<br>
    \( (d) \; \tan \frac{B-C}{2}=\frac{b-c}{b+c} \cot \frac{A}{2} \)<br><br>
    
    37. \(ABC\) ত্রিভূজে \(\cos A=\sin B-\cos C\) হলে দেখাও যে ত্রিভূজটি সমকোণী <br>
    38. \(\frac{1}{a+c}+\frac{1}{b+c}=\frac{3}{a+b+c}\) হলে দেখাও যে \(C=60^{\circ}\) <br>
    <br>
    39. \(a^{4}+b^{4}+c^{4}=2 c^{2}\left(a^{2}+b^{2}\right)\) হলে দেখাও যে \(C=45^{\circ} \; or \; C=135^{\circ}\) <br><br>
    40. \((a+b+c)(b+c-a)=3 b c\) হলে A এর মান নির্ণয় করো। <br><br>
    41. \(ABC\) এ \(A=60 ^{\circ} \) হলে দেখাও যে , \(b+c=2 a \cos \frac{B-C}{2}\) <br><br>
    42. \(ABC\) এ \(A=60 ^{\circ} \) হলে দেখাও যে , \(\frac{1}{a+c}+\frac{1}{b+c}=\frac{3}{a+b+c}\) <br><br>
    43. কোনাে ত্রিভুজের বাহুগুলি \(\mathrm{m}, \mathrm{n}, \sqrt{m^{2}+m n+n^{2}}\) হলে , বৃহত্তম কোণটি নির্ণয় কর।।
    <br>উত্তরঃ \(120 ^\circ\)<br><br>
    44. দেখাও যে, কোনাে ত্রিভুজের বাহুর দৈর্ঘ্য 3, 5 ও 7 হলে ত্রিভুজটি একটি স্থূলকোণী ত্রিভুজ ; স্থূলকোণটির মান নির্ণয় কর।
    <br>উত্তরঃ \(120 ^\circ\)<br><br>
    45. ABC -এ যদি A = 75° , B = 45° হয় , তবে দেখাও যে, \(c: b=\sqrt{3}: \sqrt{2}\) <br>
    46. কোন ত্রিভুজের বাহুগুলি 13, 14 এবং 15 হলে ত্রিভুজটির ক্ষেত্রফল নির্ণয় করো।
    <br>উত্তরঃ \(84 \) বর্গএকক<br><br>
    
    <hr style="height:2px;border-width:0;color:gray;background-color:teal">
    <h2 class="font-weight-bold text-center" style="font-family: Comic Sans MS; color:orange"> ফাংশন ও ফাংশনের লেখচিত্র </h2> <br>
 
    
    1. \( f(x)=\left\{\begin{array}{c}
    3 x-1, x>3 \\
    x^{2}-2,-2 \leq x \leq 3 \\
    2 x+3, x<-2 
    \end{array}\right.\) হলে, \(f(2), f(4), f(-1) \) এবং \( f(-3) \) এর মান নির্ণয় করো।
    <br>উত্তরঃ \(2,11,-1,-3\)<br><br>
    
    2. \(f(x)=b \frac{x-a}{b-a}+a \frac{x-b}{a-b}\) হলে দেখাও যে \( f(a)+f(b)=f(a+b)\) <br>
    <br>
    
    3.  \(y=f(x)=\frac{4 x-7}{2 x-4}\) হলে দেখাও যে \(f(y)=x\) <br>
    <br>
    4.  \(f(x)=e^{x}+e^{-x}\) হলে দেখাও যে \(f(x+y) f(x-y)=f(2 x)+f(2 y)\) <br>
    <br>
    5. \(f(x)=\cos (\ln x)\)  হলে \(f(x) f(y)-\frac{1}{2}\left[f\left(\frac{x}{y}\right)+f(x y)\right] \) এর মান নির্ণয় করো।
    <br>
    6. \( \mathrm{f}: \mathbb{R} \rightarrow \mathbb{R} \) যেখানে \( \mathrm{f}(x)=x^{2}-2|x| \) এবং \( \mathrm{g}: \mathbb{R} \rightarrow \mathbb{R} \) ; যেখানে \( g(x)=x^{2}+1 \) হলে মান নির্ণয় করো। <br>
    (a) \((go f)(-4)\) <br>
    (b)  \( (fog)(-2) \)
    <br>উত্তরঃ \((a) 65,  \; (b) 15\)<br><br>
    7. \( f(x)=\frac{x}{x-1} \) এর ডোমেন ও রেঞ্জ নির্ণয় করো। 
    <br>উত্তরঃ ডোমেন \( = R-\{1\}  \),  রেঞ্জ \( = R-\{1\}  \)<br><br>
    8. \(f(x)=\frac{x}{|x|} \) এর ডোমেন ও রেঞ্জ নির্ণয় করো। 
    <br>উত্তরঃ ডোমেন \( f=\mathbb{R}-\{0\}  \),  রেঞ্জ \( f= \{-1,1\}  \)<br><br>
    
    9. \(f(x)=\sqrt{16-x^{2}}\) এর ডোমেন ও রেঞ্জ নির্ণয় করো। 
    <br>উত্তরঃ ডোমেন \(f=\{x \in R:-4 \leq x \leq 4\} \),  রেঞ্জ \( f=\{x \in \mathbb{R}: 0 \leq x \leq 4\}\)<br><br>
    10. নিমের ফাংশনটি এক-এক এবং সার্বিক কিনা কারণসহ উল্লেখ কর। এক-এক এবং সার্বিক ফাংশনের জন্য বিপরীত ফাংশন নির্ণয় কর।
    \(f: \mathbb{R} \rightarrow \mathbb{R} ; f(x)=2 x-3\) 
    <br>উত্তরঃ এক-এক এবং সার্বিক , \(f^{-1}(x)=\frac{1}{2}(x+3) \)<br><br>
    
    11. A, B বাস্তব সংখ্যার সেট R -এর দুইটি উপসেট এবং f;A → B; যেখানে \(f(x)=\frac{x-3}{2 x+1}\) <br>
    (i) ফাংশনটির ডােমেন এবং রেঞ্জ নির্ণয় কর।<br>
    (ii) দেখাও যে, ফাংশনটি এক-এক। <br>
    (iii) f(x) নির্ণয় কর।।
    <br>উত্তরঃ (i) ডােমেন \(f=R-\left(-\frac{1}{2}\right)\) , রেঞ্জ \( (f)=R-\left(\frac{1}{2}\right) \), (iii) \(f^{-4}(x)=\frac{x+3}{1-2 x}  \)<br><br>
    12. \(f: \mathbb{R} \rightarrow \mathbb{R}, f(x)=x^{2}\) দ্বারা সজ্ঞায়িত করা হলে \(f^{-1}(25)\) এর মান নির্ণয় করো।
    <br>উত্তরঃ \(  {-5, 5}\)<br><br>

    <hr style="height:2px;border-width:0;color:gray;background-color:teal">
    <h2 class="font-weight-bold text-center" style="font-family: Comic Sans MS; color:orange"> অন্তরীকরণ</h2> <br>
    
    
    1. মান নির্ণয় করো। <br>
    (a) \(\lim _{x \rightarrow \infty} \frac{2 x^{4}-3 x^{2}+1}{6 x^{4}+x^{3}-3 x}\);     উত্তরঃ \(  \frac{1}{3}\)<br>
    (b) \( \lim _{x \rightarrow 0} \frac{1-\cos 7 x}{3 x^{2}}  \);       উত্তরঃ \(  \frac{49}{6}\)<br>
    (c) \(\lim _{x \rightarrow 0} \frac{\cos 2 x-\cos 3 x}{x^{2}}\);          উত্তরঃ \(  \frac{5}{2}\)<br>
    (d) \(\lim _{x \rightarrow 0} \frac{\tan x-\sin x}{x^{3}}\)   ;       উত্তরঃ \(  \frac{1}{2}\)<br>
    (e) \(\lim _{x \rightarrow \frac{5}{2}}\left(\frac{\pi}{2}-x\right) \tan x\)   ;       উত্তরঃ \( 1\)<br>
    (f) \(\lim _{x \rightarrow \frac{5}{2}} \frac{1-\sin x}{\cos x}\)       ;   উত্তরঃ \( 0\)<br>
    (g) \(\lim _{x \rightarrow \frac{1}{2}} \frac{\sec x-\tan x}{\frac{x}{2}-x}\)   ;      উত্তরঃ \(  \frac{1}{2}\)<br>
    (h) \(\lim _{x \rightarrow \frac{1}{2}} \frac{1-\sin x}{\left(\frac{\pi}{2}-x\right)^{2}}\)      ;    উত্তরঃ \( \frac{1}{2}\)<br>
    (i) \(\lim _{x \rightarrow 0} \frac{\tan x-\sin x}{\sin ^{3} x}\)       ;   উত্তরঃ \( \frac{1}{2}\)<br>
    (j) \(\lim _{\theta \rightarrow \frac{\pi}{2}} \frac{\sec ^{3} \theta-\tan ^{3} \theta}{\tan \theta}\) ;         উত্তরঃ \( \frac{3}{2}\)<br>
    (k) \(\lim _{x \rightarrow 0}(1+5 x)^{(3 x+2) / x}\)       ; উত্তরঃ \( e^{10}\)<br>
    (l) \(\lim _{x \rightarrow 0} \frac{e^{x}+e^{-x}-2}{x^{2}}\)   ;       উত্তরঃ \(1\)<br>
    <br>
    2. মূল নিয়মে x এর সাপেক্ষে ফাংশনগুলীর মান নির্ণয় কর, <br>
    \(\text { (*) } x^{n} \quad \text {; Ans: } n x^{n-1} \) <br>
    \(\text { (*) }  a^{x} \quad \text {; Ans: } a^{x} \ln a \) <br>
    \(\text { (*) } \ln x \quad \text {; Ans: } \frac{1}{x} \) <br>
    \(\text { (*) } \log _{a} x \quad \text {; Ans: } \frac{1}{x \ln a} \) <br>
    \(\text { (*) } \sin x \quad \text {; Ans: } \cos x \) <br>
    \(\text { (*) } \cos x \quad \text {; Ans:} -\sin x \) <br>
    \(\text { (*) } \tan x \quad \text {; Ans: } \sec ^{2} x \) <br>
    \(\text { (*) } \sec 2 x \quad \text {; Ans: } 2 \sec 2 x \tan 2 x \) <br>
    \(\text { (*) } \operatorname{cosec} x \quad \text {; Ans: } \operatorname{cosec} x \text { cot } x \) <br>
    \(\text { (*) } e^{a x} \quad \text {; Ans: ae }^{a x} \) <br>
    <br>
    3. এর সাপেক্ষে ফাংশংগুলোর অন্তরজ নির্ণয় কর <br>
    (a) \(\frac{\sqrt{x}+1}{\sqrt{x}-1}\) ;   উত্তরঃ \(\frac{d}{d x}\left\{\frac{\sqrt{x}+1}{\sqrt{x}-1}\right\}=\frac{-1}{\sqrt{x}(\sqrt{x}-1)^{2}}\)<br>
    (b) \(\frac{1-\tan x}{1+\tan x}\) ;   উত্তরঃ \(\frac{-2 \sec ^{2} x}{(1+\tan x)^{2}}\)<br>
    
    (c) \(\frac{1+\sin x}{1-\sin x}\) ;   উত্তরঃ \(\frac{2 \cos x}{(1-\sin x)^{2}}\)<br>
    
    (d) \(\frac{\cos x-\cos 2 x}{1-\cos x}\) ;   উত্তরঃ \(-2 \sin x\)<br>
    
    (e) \(\frac{\sin x+\cos x}{\sqrt{1+\sin 2 x}}\) ;   উত্তরঃ \(0\)<br>
    
    (f) \(10^{\ln (\sin x)}\) ;   উত্তরঃ \(10^{\ln (\sin x)}. \cot x. ln 10\)<br>
    
    (g) \(e^{2 \ln (\tan 5x)}\) ;   উত্তরঃ \(10 \tan 5 x \sec ^{2} 5 x\)<br>
    
    (h) \(\ln (\sin 2 x)\) ;   উত্তরঃ \(2 \cot 2 x\)<br>
    
    (i) \(\ln \sqrt{\frac{1-\cos x}{1+\cos x}}\) ;   উত্তরঃ \(\operatorname{cosec} x\)<br>
    
    (j) \(\sin ^{2}[\ln (\sec x)]\) ;   উত্তরঃ \(\tan x \sin [2 \ln (\sec x)]\)<br>
    (k) \(\sin ^{2}\left(\ln \left(x^{2}\right)\right)\) ;   উত্তরঃ \(\frac{2}{x} \sin (4 \ln x)\)<br>
    (l) \(\sqrt{\sin \sqrt{x}}\) ;   উত্তরঃ \(\frac{\cos \sqrt{x}}{4 \sqrt{x} \sqrt{\sin \sqrt{x}}}\)<br>
    
    (m) \(\sqrt{e^{\sqrt{x}}}\) ;   উত্তরঃ \(\frac{\sqrt{e^{\sqrt{x}}}}{4 \sqrt{x}}\)<br>
    
    (n) \(\sqrt{\tan e^{a^{2}}}\) ;   উত্তরঃ \(\frac{x e^{x^{2}} \sec ^{2} e^{x^{2}}}{\sqrt{\tan e^{x^{2}}}}\)<br>
    (o) \(\frac{\ln (\cos x)}{x}\) ;   উত্তরঃ \(\frac{-\{x \tan x+\ln (\cos x)\}}{x^{2}}\)<br>
    (p) \(2 x^{0} \cos 3 x^{0}\) ;   উত্তরঃ \(\frac{\pi}{90}\left[-\frac{\pi}{60} x \sin 3 x^{0}+\cos 3 x^{0}\right]\)<br>
    (q) \(\tan ^{-1}\left(e^{x}\right)\) ;   উত্তরঃ \(\frac{e^{x}}{1+e^{2 x}}\)<br>
    (r) \(\sin ^{-1}(2 x \sqrt{1-x^{2}}\}\) ;   উত্তরঃ \(\frac{2}{\sqrt{1-x^{2}}}\)<br>
    (s) \(x^{2} \sin ^{-1}(1-x)x^{2} \sin ^{-1}(1-x)\) ;   উত্তরঃ \(2 x \sin ^{-1}(1-x)=\frac{x^{2}}{\sqrt{2 x-x^{2}}}\)<br>
    (t) \(\tan ^{-1} \frac{e+b x}{a-b x}\) ;   উত্তরঃ \(\frac{a b}{a^{2}+b^{2} x^{2}}\)<br>
    (u) \(\tan ^{-1} \frac{4 \sqrt{x}}{1-4 x}\) ;   উত্তরঃ \(\frac{2}{\sqrt{x}(1+4 x)}\)<br>
    (v) \(\cos ^{-1}(2 x \sqrt{1-x^{2}})\) ;   উত্তরঃ \(\frac{-2}{\sqrt{1-x^{2}}}\)<br>
    (w) \(\tan \left(\sin ^{-1} x\right)\) ;   উত্তরঃ \(\left(1-x^{2}\right)^{-3 / 2}\)<br>
    
    (x) \(\tan ^{-1} \sqrt{\frac{1-\cos x}{1+\cos x}}\) ;   উত্তরঃ \( \frac{1}{2} \)<br>
    (y) \(\sin \left(2 \tan ^{-1} \sqrt{\frac{1-x}{1+x}}\right)\) ;   উত্তরঃ \(\frac{-x}{\sqrt{1-x^{2}}}\)<br>
    (z) \(x^{\cos ^{-1} x}\) ;   উত্তরঃ \(x^{\cos ^{-1} x}\left(\frac{\cos ^{-1 x} }{x}-\frac{\ln x}{\sqrt{1-x^{2}}}\right)\)<br>
    
    (aa) \(x^{\ln x}\) ;   উত্তরঃ \(\frac{2 \ln x}{x} x^{\ln x}\)<br>
    (ab) \(\tan ^{-1} \frac{\operatorname{acos} x-b \sin x}{b \cos x+a \sin x}\) ;   উত্তরঃ \( -1  \)<br>
    <br>
    
    3. \( \frac{d y}{d x} \) নির্ণয় করো <br>
    
    (a) \(x^{y}=y^{x}\) ;   উত্তরঃ \(\frac{d y}{d x}=\frac{y(x \ln y-y)}{x(y \ln x-x)}\)<br>
    (b) \((\cos x)^{y}=(\sin y)^{x}\) ;   উত্তরঃ \(\frac{\ln (\sin y)+y \tan x}{\ln (\cos x)-x \cot y}\)<br>
    (c) \(\ln (x y)=x+y\) ;   উত্তরঃ \(\frac{y(x-1)}{x(1-y)}\)<br>
    <br>
    4.  \(y=\frac{\ln x}{x}\) হলে দেখাও যে \(\frac{d^{2} y}{d x^{2}}=\frac{2 \ln x-3}{x^{3}} \) <br>
    <br>
    5.  \(y=\left(\cos ^{-1} x\right)^{2}\) হলে দেখাও যে \(\left(1-x^{2}\right) \frac{d^{2} y}{d x^{2}}-x \frac{d y}{d x}=2 \) <br>
    <br>
    6.  \(y=\sqrt{x}+\frac{1}{\sqrt{x}}\) হলে দেখাও যে \(2 x \frac{d y}{d x}+y=2 \sqrt{x} \) <br>
    <br>
    7.  \(y=p x^{2}+q x^{\frac{1}{2}}\) হলে দেখাও যে \(2 x^{2} \frac{d^{2} y}{d x^{2}}-x \frac{d y}{d x}=2 y\) <br>
    <br>
    8.  \(y=\sec x\) হলে দেখাও যে \(y_{2}=y\left(2 y^{2}-1\right) \) <br>
    <br>
    9.  \( y=\tan x+\sec x \) হলে দেখাও যে \(\frac{d^{2} y}{d x^{2}}=\frac{\cos x}{(1-\sin x)^{2}}\) <br>
    <br>
    10.  \(y=a \cos (\ln x)+b \sin (\ln x)\) হলে দেখাও যে \(x^{2} y_{2}+x y_{1}+y=0 \) <br>
    <br>
    11.  \(y=\sqrt{(4+3 \sin x)}\) হলে দেখাও যে \(2 y \frac{d^{2} y}{d x^{2}}+2\left(\frac{d y}{d x}\right)^{2}+y^{2}=4\) <br>
    <br>
    12.  \(\ln (y)=\tan ^{-1} x\) হলে দেখাও যে \(\left(1+x^{2}\right) y_{2}+(2 x-1) y_{1}=0\) <br>
    <br>
    13.  \(y=\tan \left(m \tan ^{-1} x\right)\) হলে দেখাও যে \(\left(1+x^{2}\right) y_{1}=m\left(1+y^{2}\right) \) <br>
    <br>
    14.  \(y=\tan ^{-1} x\) হলে দেখাও যে \(\left(1+x^{2}\right) y_{2}+2 x y_{1}=0 \) <br>
    <br>
    15. a-এর মান কত হলে, \(y=a x(1-x)\) বক্ররেখার মূলবিন্দুতে স্পর্শকটি x-অক্ষের সাথে 60° কোণ উৎপন্ন করে।
    
    <br>উত্তরঃ \(\pm 3\)<br><br>
    16.\(f(x)=2 x^{3}-21 x^{2}+36 x-20\) এর সর্বোচ্চ ও সর্বনিম্ন মান কত?
    <br>উত্তরঃ \(-3, -128\)<br><br>
    17. দেখাও যে, \(f(x)=x^{3}-3 x^{3}+6 x+3\) এর সর্বোচ্চ ও সর্বনিম্ন মান নেই।
      
    18. দেখাও যে, \(x+\frac{1}{x} \) এর গুরুমান তার লঘুমান অপেক্ষা ক্ষুদ্রতর।<br>
    19. দেখাও যে, \(4 e^{x}+9 e^{-x}\) এর লঘুমান 12<br>
    20. দেখাও যে,\(\frac{x}{\ln (x)} \) এর লঘুমান \(e\)<br>
    21. দেখাও যে,\(\frac{\ln x}{x} \) এর লঘুমান \(\frac{1}{e}\)
    
    <hr style="height:2px;border-width:0;color:gray;background-color:teal">
    <h2 class="font-weight-bold text-center" style="font-family: Comic Sans MS; color:orange"> যোগজীকরণ </h2> <br>
  
    1.  যোগজ নির্ণয় করো। <br>
    (a) \(\int \frac{d x}{1+\cos x}\);     উত্তরঃ \(  \frac{1}{3}\)<br>
    (b) \(\int \sec ^{2} x \cos x^{2} x d x\);       উত্তরঃ \( \tan x - \cot x + c  \)<br>
    (c) \(\int 5 \cos 4 x \sin 3 x d x\);       উত্তরঃ \(   \)<br>
    (d) \(\text { (e) } \int \sqrt{1-\cos 2 x} d x\);       উত্তরঃ \(-\sqrt{2} \cos x+c\)<br>
    
    (e) \(\int \frac{\cos 2 x}{\sqrt{1-\sin 2 x}} d x\);       উত্তরঃ \((b) \pm(\sin x-\cos x)+c\)<br>
    (f) \(\int \cos ^{4} x d x\);       উত্তরঃ \(\frac{1}{4}\left(\frac{3}{2} x+\sin 2 x+\frac{1}{8} \sin 4 x\right)+c\)<br>
    
    (g) \(\int \frac{x^{2}}{\sqrt{1-x^{6}}} d x\);       উত্তরঃ \(x+50 \ln |x-25|+c\)<br>
    (h) \(\int \frac{x^{2}-1}{x^{2}-4} d x\);       উত্তরঃ \(x+\frac{3}{4} \ln \left|\frac{x-2}{x+2}\right|+c\)<br>
    (i) \(\int \frac{d x}{(x-3) \sqrt{(x+1)}}\);       উত্তরঃ \(\frac{1}{2} \ln \left|\frac{\sqrt{x+1}-2}{\sqrt{x+1}+2}\right|+c\)<br>
    (j) \(\int \sin ^{2} x \cos ^{2} x d x\);       উত্তরঃ \(-\frac{1}{4} \ln |3+4 \cos x|+c\)<br>
    
    (k) \(\int \sin ^{2} x \cos 2 x d x\);       উত্তরঃ \(\frac{1}{32}(4 x-\sin 4 x)+c\)<br>
    (l) \(\int \tan ^{2} x d x\);       উত্তরঃ \(\frac{1}{4}\left(\sin 2 x-x-\frac{1}{4} \sin 4 x\right)+c\)<br>
    (m) \(\int e^{x} \sin 2 x d x\);       উত্তরঃ \(\frac{1}{5} e^{x}(\sin 2 x-2 \cos 2 x)+c\)<br>
    (n) \(\int \ln x d x, x>0\);       উত্তরঃ \(x \ln x-x+c\)<br>
    
    (o) \(\int x \tan ^{2} x d x\);       উত্তরঃ \(x \tan x+\ln |\cos x|-\frac{x^{2}}{2}+c\)<br>
    (p) \(\int x \ln x d x\);       উত্তরঃ \(\frac{1}{2} x^{2} \ln x-\frac{1}{4} x^{2}+c\)<br>
    (q) \(\int(\ln x)^{2} d x\);       উত্তরঃ \(x(\ln x)^{2}-2 x \cdot \ln x+2 x+c\)<br>
    (r) \(\int \tan ^{-1} x d x\);       উত্তরঃ \(x \tan ^{-1} x-\frac{1}{2} \ln \left(1+x^{2}\right)+c\)<br>
    (s) \(\int \sin ^{-1} x d x\);       উত্তরঃ \(x \sin ^{-1} x+\sqrt{1-x^{2}}+c\)<br>
    (t) \(\int x \tan ^{-1} x d x\);       উত্তরঃ \(\frac{1}{2}\left(x^{2}+1\right) \tan ^{-1} x-\frac{1}{2} x+c\)<br>
    (u) \(\int e^{x} \cos x d x\);       উত্তরঃ \(\frac{e^{x}}{2}(\cos x+\sin x)+c\)<br>
    (v) \(\int e^{x}(\sin x+\cos x)dx\);       উত্তরঃ \(e^{x} \sin x+c\)<br>
    (w) \(\int e^{x} \sec x(1+\tan x) d x\);       উত্তরঃ \(e^{x} \sec x+c\)<br>
    (x) \(\int \frac{x d x}{(x-1)\left(x^{2}+1\right)}\);       উত্তরঃ \(\frac{1}{2}\left[\ln |x-1|-\frac{1}{2} \ln \left|x^{2}+1\right|+\tan ^{-1} x\right]+c\)<br>
    
    
    2. মান নির্ণয় করো <br>
    (a) \(\int_{0}^{\pi / 4} \frac{1}{1+\sin x} d x\);       উত্তরঃ \(2-\sqrt{2}\)<br>
    (b) \(\int_{0}^{\pi / 2} \cos ^{3} x \sqrt{\sin x} d x\);       উত্তরঃ \(8 / 21\)<br>
    (c) \(\int_{0}^{1} \frac{\left(\tan ^{-1} x\right)^{2}}{1+x^{2}} d x\);       উত্তরঃ \(\frac{\pi^{3}}{192}\)<br>
    (d) \(\int_{1}^{e^{2}} \frac{d x}{x(1+\ln x)^{2}}\);       উত্তরঃ \(\frac{2}{3}\)<br>
    (e) \(\int_{0}^{4} \sqrt{16-x^{2}} d x\);       উত্তরঃ \(4 \pi\)<br>
    (f) \(\int_{-1}^{1} x^{2} \sqrt{4-x^{2}} d x\);       উত্তরঃ \(\frac{2 \pi}{3}-\frac{\sqrt{3}}{2}\)<br>
    (g) \(\int_{0}^{\pi / 3} \frac{1}{1-\sin x} d x\);       উত্তরঃ \(\sqrt{3}+1\)<br>
    (h) \(\int_{0}^{\infty / 2} \cos ^{2} x d x\);       উত্তরঃ \(\frac{\pi}{4}\)<br>
    (i) \(\int_{0}^{1} \frac{x d x}{\sqrt{1-x^{2}}}\);       উত্তরঃ \(1\)<br>
    (j) \(\int_{0}^{1} x^{2} d x\);       উত্তরঃ \(\frac{1}{2}(e-1)\)<br>
    
    
    3. \( x^{2}+y^{2}=16 \) বৃত্তের ক্ষেত্রফল নির্ণয় করো।
    <br>উত্তরঃ \(16 \pi\)<br><br>
    
    4. \(\frac{x^{2}}{3^{2}}+\frac{y^{2}}{2^{2}}=1 \) উপবৃত্তের ক্ষেত্রফল নির্ণয় করো।
    <br>উত্তরঃ \(6 \pi\)<br><br>
    
    5. দেখাও যে \( y^{2}=4 a x  \; \text { ও } \; x^{2}=4 a y \) পরাবৃত্ত দ্বারা সীমাবদ্‌ধ সমতল ক্ষেত্রের ক্ষেত্রফল \(\frac{16}{3} a^{2}\) <br>
    x + y = 25  x = 3 সরলরেখা দ্বারা সীমাবদ্ধ ক্ষুদ্রতর ক্ষেত্রটির ক্ষেত্রফল নির্ণয় কর। <br><br>
    
    6. \(x^{2}+y^{2}=25\) বৃত্ত এবং \( x=3\) সরলরেখা দ্বারা সীমাবদ্ধ ক্ষুদ্রতর ক্ষেত্রটির ক্ষেত্রফল নির্ণয় কর।
    <br>উত্তরঃ \(\left(\frac{25 \pi}{2}-25 \sin ^{-1} \frac{3}{5}-12\right)\) বর্গএকক<br><br>
    
    7. \( y^2 = 4x\) পরাবৃত্ত এবং \( y = 2x \) সরলরেখা দ্বারা সীমাবদ্ধ ক্ষেত্রের ক্ষেত্রফল নির্ণয় কর।
    <br>উত্তরঃ \(\frac{1}{3}\) বর্গএকক<br><br>
    
    8. \(y = x^2\) বক্ররেখা এবং \( x – y + 2 = 0\) সরলরেখা দ্বারা সীমাবদ্ধ ক্ষেত্রের ক্ষেত্রফল নির্ণয় কর।
    <br>উত্তরঃ \(\frac{9}{2}\) বর্গএকক<br><br>
    
    


                          </div>


            </div>
           
       
            <div class="tab-pane " id="math_2nd" role="tabpanel" aria-labelledby="math-2nd-tab">
                 <div class="card-panel ">
                    
                    
                             <h2 class="text-center font-weight-bold" style="color: teal; font-family: Comic Sans MS">বাস্তব সংখ্যা ও অসমতা </h2>
                              ১. মান নির্ণয় কর: <br>
                              \( \left|\left|2-6\right|-\left|1-9\right|\right| \)  উত্তরঃ 4 <br><br>
                              ২. নিম্নের অসমতাগুলি পরমমান চিহ্ন ব্যতীত প্রকাশ করঃ <br>
                              (a) \( \left|2x+3\right|< 7 \);  উত্তরঃ \(-5< x < 2 \) <br> 
                              (b) \( \frac{1}{\left|3x+1\right|}\geq5, \) এখানে,\( x\neq-\frac{1}{3} \);  উত্তরঃ \(-\frac{2}{5}\le\ x<\frac{1}{3} অথবা \(-\frac{1}{3}< x\le-\frac{4}{15} \) <br><br>
                              ৩. নিম্নের অসমতাগুলি পরমমান চিহ্নের সাথে প্রকাশ কর। <br> 
                              \( -7< x <-1\);   উত্তরঃ \( \left|x+4\right|< 3 \)  <br> 
                              \( -1< 2 x -3 < 5 \);  উত্তরঃ \( \left|2x-5\right|< 3 \)<br> <br> 
                              
                              ৪. নিম্নের অসমতাগুলি সমাধান কর এবং সমাধান সেট সংখ্যারেখায় দেখাওঃ <br> 
                                        \( \left|2x-5\right|< 3 \); উত্তরঃ \( {x\in\ R:\ 1< x < 4} \) <br> 
                                        \( \left|3x-4\right|< 2\);  উত্তরঃ \( {x\in\ R:\ \frac{2}{3}< x< 2} \)<br>
                                        \( \frac{1}{\left|3x-5\right|}>2 \)  উত্তরঃ  \(  x\in\ R:\ \frac{3}{2}< x<\frac{5}{3} \) অথবা \( \frac{5}{3}< x<\frac{11}{6} \) <br> <br>


                              ৫. সংখ্যারেখার সাহায্যে সমাধান করঃ <br> <br>
                              \( \left|\frac{2x}{x-2}\right|\le1\);  উত্তরঃ \( -2\le\ x\le\frac{2}{3}  \)<br> <br>
                              \( \left|x+1\right|\le\left|x-1\right|\);  উত্তরঃ \( x\le0  \)<br> <br>
                              \( \frac{3x+4}{5x+3}\le\frac{x+2}{2x+3}\);  উত্তরঃ \(  -\frac{3}{2}\le\ x\le-\frac{3}{5}  \)<br> <br>
                              ৬.\( \left|x-1\right|<\frac{1}{10}\);  হলে প্রমান কর যে, \( \left|x^2-1\right|<\frac{21}{100}  \)<br><br>
                              ৭. বাস্তব সংখ্যার উপসেট \(S= x:\ 5x^2-16x+3< 0 \) এর বৃহত্তম নিম্নসীমা ও ক্ষুদ্রতম উর্ধ্বসীমান নির্ণয় কর।<br><br>
                              ৮. দেখাও যে,\(\sqrt3\) অমূলদ সংখ্যা। <br><br>
                              ৯. প্রমাণ কর, সকল \(a,b\in\ R\) এর জন্য \( \left|a+b\right|\le\left|a\right|+\left|b\right| \)<br><br><br>
                              <hr style="height:2px;border-width:0;color:gray;background-color:teal">
                              <h2 class="text-center font-weight-bold" style="color: teal; font-family: Comic Sans MS">যোগাশ্রয়ী প্রোগ্রাম</h2>

                              ১. নিচের প্রোগ্রামগুলিকে লেখচিত্রের সাহায্যে সমাধান করে সর্বোচ্চকরণ করঃ <br>
                              \( z=2x+3y,\) সীমাবদ্ধতাঃ \(x+2y\le10,\ x+y\le6,\ x\le4,\ x\geq0,\ y\geq0\) ; উত্তরঃ \(x=2,\ y=4,\ Z_{max}=16\)<br>
                              \( z=3x+4y,\) সীমাবদ্ধতাঃ \( x+y\le7,\ 2x+5y\le20,\ x\geq0,y\geq0 \); উত্তরঃ \(x=5,\ y=2,\ Z_{max}=23 \)<br><br>
                              ২. নিচের প্রোগ্রামগুলিকে লেখচিত্রের সাহায্যে সমাধান করে সর্বনিম্নকরণ করঃ <br>
                              \(z=2x-y, \) সীমাবদ্ধতাঃ  \( x+y\le5,\ x+2y\geq8,\ x,y\geq0  \); উত্তরঃ  \( x=0,y=5,\ Z_{min}=-5 \)<br>
                              \(z=2y-x, \) সীমাবদ্ধতাঃ  \( 3y-x\le10,\ x+y\le6,\ x-y\le2,x,y\geq0  \); উত্তরঃ   \( x=2,\ y=0,\ Z_{min}=-2 \)<br><br>
                              ৩. একজন ব্যবসায়ী তার দোকানের জন্য রেডিও ও তেলিভিশন মিলে 100 টি সেট কিনতে পারেন। রেডিও সেট ও টেলিভিশন সেট প্রতিটির ক্রয়মূল্য যথাক্রমে 40 ও 120 ডলার। প্রতি রেডিও ও টেলিভিশন সেটে লাভ যথাক্রমে 16 ও 32 ডলার। সর্বোচ্চ10400 ডলার বিনিয়োগ করে তিনি সর্বোচ্চ কত লাভ করতে পারেন?;  উত্তরঃ 2880 ডলার <br><br>
                              ৪. এক ব্যক্তি 500 টাকার মধ্যে কমপক্ষে 6 খানা গামছা এবং 4 খানা তোয়ালে কিনতে চান। প্রতিখানা গামছার দাম 30 টাকা এবং প্রতিখানা তোয়ালের দাম 40 টাকা। প্রত্যেক প্রকারের কতখানা জিনিস কিনলে সে প্রদরত্ত শর্তাধীনে সর্বাপেক্ষা বেশি জিনিস কিনতে পারবেন?; উত্তরঃ  গামছা 10 খানা, তোয়ালে 5 খানা অথবা গামছা 11 খানা, তোয়ালে 4 খানা <br><br>
                              ৫. A এবং B দুইধরনের খাবার আছে, যেগুলির প্রতি কিলোতে নিম্নছক অনুযায়ী প্রোটিন ও ফ্যাট আছেঃ
                              খাদ্যের নাম	প্রতি কেজিতে প্রোটিন	প্রতি কেজিতে ফ্যাট	প্রতি কেজির মূল্য <br>
                              A	1	3	2 টাকা<br>
                              B	3	2	3 টাকা<br>
                              দৈনিক ন্যূনতম প্রয়োজন	9	12	<br>
                              খাদ্যের এমন একটি সমন্বয় নির্ণয় কর যা সর্বনিম্ন খরচে ওই ব্যক্তির দৈনিক প্র্যোজন মিটাবে। <br>
                              উত্তরঃ সবচেয়ে কম খরচ 11\frac{4}{7} টাকা। সুতরাং, \frac{18}{7} কেজি A ধরনের খাদ্য ও \frac{15}{7} কেজি B ধরনের খাদ্য প্র্যয়োজন<br><br>
                    
                              <br>
                    
                              <hr style="height:2px;border-width:0;color:gray;background-color:teal">
                    
                              <h2 class="text-center font-weight-bold" style="color: teal; font-family: Comic Sans MS">জটিল সংখ্যা</h2>
                              ১. নিচের জটিল সংখ্যাগুলির মডুলাস ও আর্গুমেন্ট নির্ণয় কর এবং তাদেরকে পোলার আকারে প্রকাশ কর।<br>
                              \( 1+\sqrt3\ i \) ; উত্তরঃ \( 2,\frac{\pi}{3},2(\cos{\frac{\pi}{3}}+i\ \sin{\frac{\pi}{3}}) \)<br>
                              \( -\sqrt3+\ i \) ; উত্তরঃ \( 2,\frac{5\pi}{6},2(\cos{\frac{5\pi}{3}}+i\ \sin{\frac{5\pi}{3}}) \) <br><br>
                              ২. বর্গমূল নির্ণয় করঃ<br>
                              \( \sqrt{-8-6i} \) ;  উত্তরঃ \( \pm\left(1-3i\right) \) <br>
                              \( -7+24i  \) ;   উত্তরঃ \( \pm(3+4i) \) <br>
                              \(  \frac{5+12i}{3-4i}  \) ;  উত্তরঃ \( \pm\frac{4}{5}+\frac{7}{5}i \) <br> <br>
                              ৩. মান নির্ণয় করঃ <br>
                              \( \sqrt[4]{-81}\) ;  উত্তরঃ \(  \pm\frac{3}{\sqrt2}(1\pm\ i)  \) <br> 
                              \( \sqrt[3]{i} \) ;  উত্তরঃ \( -i,\ \frac{1}{2}(i\pm\sqrt3)  \) <br> 
                              \( \sqrt[3]{-i} \) ;  উত্তরঃ \( i,\ \frac{1}{2}(-i\pm\sqrt3)  \) <br> 
                              \( \sqrt[6]{-64}\ \) ;  উত্তরঃ \( \pm2i,\ \pm(\sqrt3\pm\ i)  \) <br> 
                              ৪. দেখাও যে,\( \sqrt i+\sqrt{-i}=\sqrt2  \) <br>  <br> 
                              ৫. \( \sqrt[3]{a+ib}=x+iy \) হলে দেখাও যে, 
                               \( \sqrt[3]{a-ib}=x-iy \)  <br> 
                              \( -2(x^2+y^2)=\frac{a}{x}-\frac{b}{y} \)  <br> 
                              \( 4(x^2-y^2)=\frac{a}{x}+\frac{b}{y} \) <br>  <br> 
                              ৬. \( (a+ib)(c+id)=x+iy \) হলে দেখাও যে, \((a-ib)(c-id)=x-iy\) <br> <br>
                              ৭.\( a^2+b^2=1 \) হলে দেখাও যে, x এর একটি বাস্তব মান \( \frac{1-ix}{1+ix}=a-ib \) সমীকরণকে সিদ্ধ করে; যেখানে \( a,b\in\ R \)  <br> <br>
                              ৮. \( x:y=(a+ib):(c+id) \) হলে দেখাও যে, \( (c^2+d^2)x^2-2(ac+bd)xy+(a^2+b^2)y^2=0 \) <br> <br>
                              ৯. যদি \( x=2+\sqrt{-3} \) হয়, তবে \({3x}^4-{17x}^3+{41x}^2-35x+5 \) এর মান নির্ণয় কর। <br> <br>
                              ১০. \(z=x+iy\) এবং  \(\left|2z-1\right|=\left|z-2\right|\) হলে দেখাও যে, \(x^2+y^2=1\) <br> <br>
                              ১১. একের জটিল ঘনমূল \omega হলে দেখাও যে,  <br>
                              \( {(x+y)}^2+{(x\omega+{y\omega}^2)}^2+{({x\omega}^2+y\omega)}^2=6xy \) <br>
                              \( (1-\omega+\omega^2)(1-\omega^2+\omega^4)(1-\omega^4+\omega^8)(1-\omega^8+\omega^{16})=16 \)  <br>
                              \( {(-1+\sqrt3)}^4+{(-1-\sqrt{-3})}^4=-16 \) <br> <br>
                              ১২.
                              \( {(a\omega^2+b+c\omega^2)}^3+{(a\omega+b+c\omega^2)}^3=0\) হলে দেখাও যে, \( a=\frac{1}{2}(b+c) \) অথবা, \( b=\frac{1}{2}(c+a)\) অথবা \(c=\frac{1}{2}(a+b)\) <br> <br>
                              \( p=\frac{1}{\sqrt2}(1+\sqrt{-1}) \)  হলে দেখাও যে, \( p^6+p^4+p^2+1=0 \) <br>
                              \( {(a+b\omega+c\omega^2)}^2+{(a\omega+b+c\omega^2)}^2+{(a\omega+b\omega^2+c)}^2=0 \) হলে দেখাও যে, a=c অথবা, \( b=\frac{1}{2}(a+c)\)  <br> <br>
                              ১৩. 
                              \( x+y+z=0 \) হলে দেখাও যে,\( {(x+y\omega+z\omega^2)}^3+{(x+y\omega^2+z\omega)}^3=27xyz \)  <br> <br>
                              প্রমাণ কর যে, \( ([1/2(-1+i√3)])^n+([1/2(-1-i√3)])^n=2 \) এবং -1, যখন n এর মান যথাক্রমে 3 দ্বারা বিভাজ্য ও 3 দ্বারা অবিভাজ্য.  <br> <br>
                              ১৪. 
                              \( z=x+iy \) হলে, \( \left|z-5\right|=3,\) বৃত্তের কেন্দ্র ও ব্যসার্ধ নির্ণয় কর।;  উত্তরঃ (5,0), 3  <br>
                              \( z=x+iy \) হলে  \( \left|z-8\right|+\left|z+8\right|=20 \) দ্বারা নির্দেশিত সঞ্চারপথের সমীকরণ নির্ণয় কর।;  উত্তরঃ \(9x^2+25y^2=900 \)  <br> <br>
                              <br><br>
                              <hr style="height:2px;border-width:0;color:gray;background-color:teal">
                              <h2 class="text-center font-weight-bold" style="color: teal; font-family: Comic Sans MS">বহুপদী ও বহুপদী সমীকরণ</h2>
                              ১. দেখাও যে, a=b না হলে \(2x^2-2(a+b)x+a^2+b^2=0\) সমীকরণের মূলগুলি বাস্তব হতে পারে না। <br>
                              ২. k এর মান কত হলে \( (k+1)x^2+2(k+3)x+2k+c \) রাশিটি পূর্ণবর্গ হবে? উত্তরঃ k=2,3  <br>
                              ৩. k এর মান কত হলে \( (k-1)x^2-(k+2)x+4=0 \)  সমীকরণের মূলদ্বয় বাস্তব ও সমান হবে? উত্তরঃ k=2,10  <br>
                              ৪. k এর মান কত হলে \( (3k+1)x^2-(k+11)x+9=0 \)  সমীকরণের মূলদ্বয় জটিল হবে?;  উত্তরঃ \(1< k < 85\)  <br>
                              ৫. K এর মান কত হলে, \( (k^2-3)x^2+3kx+3k+1=0 \) সমীকরণের মূলদ্বয় পরস্পর উলটো হবে? উত্তরঃ k=4, -1 <br><br>
                    
                              ৬. \( \frac{h^2}{a^2}+\frac{k^2}{b^2}=1 \) হলে দেখাও যে, \( (h^2-a^2)x^2-2hkx+k^2-b^2 \) রাশিটি পূর্ণবর্গ হবে। <br>
                              ৭. \( 4x^2-6x+1=0 \) সমীকরণের মূল দুইটি \(\alpha\) ও \(\beta\) হলে, \(\alpha+\frac{1}{\beta} \) এবং \( \beta+\frac{1}{\alpha}\) মূল বিশিষ্ট সমীকরণ নির্ণয় কর। উত্তরঃ \(4x^2-30x+25=0 \) <br> <br>
                              ৮. \( 7x^2-5x-3=0  \) সমীকরণের মূলদ্বয় \(\alpha\) ও \(\beta\) হলে \(\frac{1}{\alpha}+\frac{2}{\beta} \) এবং \( \frac{1}{\beta}+\frac{2}{\alpha} \) মূলবিশিষ্ট সমীকরণ নির্ণয় কর। উত্তরঃ \( 9x^2+45x+29=0 \) <br><br>
                              ৯. \( 2x^2+3x+5=0 \) সমীকরণের মূলদ্বয় \(\alpha\) ও \(\beta\) হলে  \( \frac{1}{\alpha^3} এবং \frac{1}{\beta^3} \) দ্বারা গঠিত সমীকরণ নির্ণয় কর। উত্তরঃ\( 125x^2-117x+8=0 \) <br><br>
                              ১০. \( ax^2+bx+c=0 \) সমীকরণের মূলদ্বয় \( \alpha \) ও \( \beta \)  হলে প্রমাণ কর যে, \( {(a\alpha+b)}^{-2}+{(a\beta+b)}^{-2}=\frac{b^2-2ac}{a^2c^2} \) <br><br>
                    
                              ১১. \( ax^2+bx+c=0 \)  সমীকরণের মূলদ্বয়  \(\alpha\) ও \(\beta\)  হলে, \( cx^2-2bx+4a=0 \) সমীকরণের মূলদ্বয়কে  \(\alpha\) ও \(\beta\)  এর মাধ্যমে প্রকাশ কর। উত্তরঃ \( -\frac{2}{\alpha},\ -\frac{2}{\beta} \) <br><br>
                              ১২.  এমন একটি সমীকরণ নির্ণয় কর যার মূল দুইটি যথাক্রমে \(  x^2-2bx+b^2-a^2=0 \) সমীকরণের মুলদ্বয়ের সমষ্টির এবং অন্তরফলের ধনাত্নক মান হবে। উত্তরঃ \( x^2-2(a+b)+4ab=0, x^2+2(a-b)-4ab=0 \) <br><br>
                              ১৩. \( x^2-bx+c=0 \)  ও \( x^2-cx+b=0 \)  সমীকরণের মূলদ্বয়ের পার্থক্য একটি ধ্রুবরাশি হলে প্রমাণ কর যে, \( b+c+4=0 \) <br><br>
                              ১৪. \( ax^2+bx+b=0 \)  সমীকরণের মূলদ্বয়ের অনুপাত m: হলে দেখাও যে \( \sqrt{\frac{m}{n}}+\sqrt{\frac{n}{m}}+\sqrt{\frac{b}{a}}=0 \) <br><br>
                              ১৫. \( 27x^2+6x-(p+2)=0 \)  সমীকরণের একটি মূল অপরটির বর্গ হলে p এর মান নির্ণয় কর। উত্তরঃ 6, -1 <br><br>
                              ১৬. \( x^2+px+q=0 \)  সমীকরণের মূলদ্বয়ের পার্থক্য 1 হলে দেখাও যে, \( p^2+4q^2={(1+2q)}^2 \) <br><br>
                              ১৭. \( \frac{1}{x}+\frac{1}{p-x}=\frac{1}{q}  \) সমীকরণের মূলদ্বয়ের অন্তর r হলে p কে q ও r এর মাধ্যমে প্রকাশ কর। উত্তরঃ \( p=2q \pm \sqrt{ {4q}^2+r^2} \) <br><br>
                              ১৮. যদি \( x^2-px+q=0 \) সমীকরণের মূলদ্বয় পূর্ণ সংখ্যা হয় তবে প্রমাণ কর যে, \( p^2-4q-1=0 \) <br><br>
                              ১৯. \( 2bx^2+2(a+b)x+3a=2b \)  সমীকরণের একটি মূল অপরটির দ্বিগুণ হলে দেখাও যে, a=2b অথবা \( 4a=11b \) <br><br>
                              ২০. \( mx^2+nx+l=0 \)  সমীকরণের মূল দুইটির অনুপাত r হলে দেখাও যে,\(  \frac{ {(r+l)}^2}{r}=\frac{n^2}{ml} \) <br><br>
                              ২১. \( x^2+kx-6k=0 \)  এবং \( x^2-2x-k=0 \) সমীকরণদ্বয়ের একটি সাধারণ মূল থাকলে k  এর মান নির্ণয় কর। উত্তরঃ 0,3,8 <br><br>
                              ২২. \( ax^2+bx+c=0  \) এবং \( cx^2+bx+a=0 \)সমীকরণদ্বয়ের একটি সাধারণ্মূল থাকলে দেখাও যে, \( c+a=\pm b \) <br><br>
                              ২৩. \( ax^2+bx+c=0 \)  এর একটি মূল \( cx^2+bx+a=0 \)  এর মূলের দ্বিগুণ হলে দেখাও যে, 2a=c অথবা \(  { (2a+c) }^2=2b^2 \) <br><br>
                              ২৪. দুইটি মূলের অনুপাত 3:4 হলে \( 2x^3-x^2-22x-24=0 \)  সমীকরণটির সমাধান কর। উত্তরঃ \(  (-\frac{3}{2},-2,4) \) <br><br>
                              ২৫. \( 3x^3-26x^2+52x-24=0 \)  সমীকরণের মূলগুলি গুনোত্তর শ্রেণীভুক্ত হলে সমীকরণটির সমাধান কর। উত্তরঃ \( (\frac{2}{3},2,6) \) <br><br>
                              ২৬. \( 3x^4-5x^3+10x^2-10x+4=0 \)  সমীকরণের একটি মূল (1+i) হলে অপর মূলগুলি নির্ণয় কর। উত্তরঃ (1,2,1-i) <br><br>
                              ২৭. \( 32x^3-48x^2+22x-3=0 \)  সমীকরণের মূলগুলি সমান্তর শ্রেণীভুক্ত হলে সমীকরণটির সমাধান কর। উত্তরঃ \(  (\frac{2\pm\sqrt7}{4},\frac{1}{2}) \) <br><br>
                              ২৮. \( 8x^4-2x^3-27x^2+6x+9=0 \)  সমীকরণের যেকোনো দুইটি মূলের যোগফল শূন্য হলে সমীকরণটির অপর দুইটির মূলের মান নির্ণয় কর। উত্তরঃ\(  (\frac{3}{4},-\frac{1}{2}) \) <br><br>
                              ২৯. বাস্তব সহগের একটি দ্বিঘাত সমীকরণের একটি মূল \( 3+2i \) হলে সমীকরণটি নির্ণয় কর। উত্তরঃ \(  x^2-6x+13=0 \) <br><br>
                              ৩০. মূলদ সহগ বিশিষ্ট দ্বিঘার সমীকরণ গঠন কর যার একটি মূল \(  \frac{1}{2-\sqrt5} \) উত্তরঃ \(  (x^2+4x-1=0) \) <br><br>
                              ৩১. \( 6x^3-x+13=0 \)  সমীকরণের মূলগুলি \( \alpha,\beta,\gamma \) হলে  \( \sum{(\alpha-\beta)}^2 \) এর মান কত? উত্তরঃ 1  <br><br>
                              ৩২. \( x^3+px^2+qx+r=0 \)  সমীকরণের মূলগুলো \( \alpha,\beta,\delta \)  হলে  \( \sum\alpha^3 \)  নির্ণয় কর। উত্তরঃ \( 3pq-p^3-3r \) <br><br>
                              
                              
                              <hr style="height:2px;border-width:0;color:gray;background-color:teal">
                    
                    
                        <h2 class="text-center font-weight-bold" style="color: teal; font-family: Comic Sans MS"> দ্বিপদী </h2>
                    1. \(\left(2 x-\frac{1}{4 x^{2}}\right)^{12}\)  এর বিস্তৃতিতে x মুক্ত পদ নির্ণয় কর। 
                    <br>উত্তরঃ \(495\) <br><br>
                    
                    2. \(\left(\frac{x^{4}}{y^{3}}+\frac{y^{2}}{2 x}\right)^{10}\) এর বিস্তৃতিতে y মুক্ত পদ নির্ণয় কর। 
                    <br>উত্তরঃ \(\left(\frac{105}{32} x^{10}\right)\) <br><br>
                    
                    3.  নিম্নের বিস্তৃতিতে ধ্রুব পদটির মান নির্ণয় করঃ <br>
                    (a) \( (1+x)^{p}\left(1+\frac{1}{x}\right)^{2}\);  উত্তরঃ \(^{p+q} C_{q}\)<br>
                    (b) \( \left(x^{2}-2+\frac{1}{x^{2}}\right)^{6} \);  উত্তরঃ \(924\)<br>
                    (c) \( \left(2 x^{2}-\frac{1}{2 x^{3}}\right)^{10} \);  উত্তরঃ \(840\)<br>
                    (d) \( \left(2 x^{2}-\frac{3}{x}\right)^{11} \);  উত্তরঃ \(^{11} C_{4} \cdot 2^{7} \cdot 3^{4}\)<br><br>
                    
                    4. \( (a+2 x)^{5} \) এর বিস্তৃতিতে \(x^3\) এর সহগ 320 হলে , a এর মান নির্ণয় কর
                    <br>উত্তরঃ \( \pm 2\) <br><br>
                    
                    
                    5. \( (1-x)^{8}(1+x)^{7} \) এর বিস্তৃতিতে \(x^7\) এর সহগ নির্ণয় কর
                    <br>উত্তরঃ \(35\) <br><br>
                    
                    6. \( (1+x)(a-b x)^{12} \) এর বিস্তৃতিতে \(x^8\) এর সহগ 0 হলে , \( \frac{a}{b} \) এর মান নির্ণয় কর
                    <br>উত্তরঃ \( 5/8 \) <br><br>
                    
                    7. \( (1+x)^{44} \) এর বিস্তৃতিতে 21 তম এবং 22 তম পদ দইটি সমান হলে x এর মান নির্ণয় কর।
                    <br>উত্তরঃ \( \frac{7}{8}  \) <br><br>
                    
                    8. \( \left(3+\frac{x}{2}\right)^{n} \) এর বিস্তৃতিতে \(x^7\) এবং \(x^ 8\) এর সহগদ্বয় পরস্পর সমান হলে \( \mathbf{n} \in \mathbb{N} \) এর মান নির্ণয় কর।
                    <br>উত্তরঃ \(n = 55\) <br><br>
                    9.  \( (a + 3x)^n \) এর বিস্তৃতিতে প্রথম তিনটি পদ যথাক্রমে \( b, \frac{21}{2} b x \; \text {  ও   } \; \frac{189}{4} b x^{2} \) হলে, a, b এবং n এর মান নির্ণয় কর।
                    এর মান নির্ণয় কর। 
                    <br>উত্তরঃ \(a=2, n=7, b=2^{7} \) <br><br>
                    
                    9 pro. \( (x+a)^{n} \) এর বিস্তৃতিতে প্রথম তিনটি পদ যথাক্রমে 729, 7290 এবং 30375 হলে a এর মান নির্ণয় কর।
                    <br>উত্তরঃ \(a=5 \) <br><br>
                    
                    10. \( (x+a)^{n} \) এর বিস্তৃতিতে প্রথম তিনটি পদের ক্রমিক সহগের অনুপাত 1:7:42 হলে n এর মান নির্ণয় কর। যেখানে \( \mathrm{n} \in \mathbb{N} \)
                    <br>উত্তরঃ \( n = 55 \) <br><br>
                    
                    11.  n ধনাত্মক পূর্ণসংখ্যা হলে \( \left(\frac{a}{x}+\frac{x}{a}\right)^{2 n+1} \) এর বিস্তৃতির মধ্যপদ নির্ণয় কর।
                    <br>উত্তরঃ \( ^{2 n+1} C_{n} \cdot \frac{a}{x} \) <br><br>
                    12. \(\left(x-\frac{1}{x}\right)^{16} \) এর বিস্তৃতিতে মধ্যপদের মান বের করো।
                    <br>উত্তরঃ \( 12870 \) <br><br>
                    13. দেখাও যে, \( \left(x-\frac{1}{x}\right)^{2 n} \) এর বিস্তৃতিতে মধ্যপদ \( \frac{1.3 .5 \ldots \ldots(2 n-1)}{n !}(-2)^{n} \)<br><br>
                    14. দেখাও যে, \( (1-2 x)^{ \frac{-1}{2}} \) এর বিস্তৃতিতে \( (r+1 ) \) তম পদের সহগ \( \frac{(2 r) !}{(r !)^{2} 2^{\prime}} \) <br><br>
                    15. দেখাও যে, \( (1-4 x)^{-\frac{1}{2}} \) এর বিস্তৃতিতে \( x^r \) এর সহগ \( \frac{(2 r) !}{(r !)^{2}} \) <br><br>
                    16. দেখাও যে, \( (1-4 x)^{-\frac{1}{2}} \) এর বিস্তৃতিতে \( x^n \) এর সহগ \(\frac{1}{2}\left[1-\frac{1}{3^{2+1}}\right] \) <br><br>
                    17. \( |\mathbf{x}|<\frac{1}{3} \) হলে \( \left(1-5 x+6 x^{2}\right)^{-1} \) এর বিস্তৃতিতে \( x^n \) এর সহগ নির্ণয় করো।
                    <br>উত্তরঃ \( 3^{n+1}-2^{n+1} \) <br><br>
                    
                    18. \( y=x+x^{2}+x^{3}+\dots \dots \dots \infty \) হলে দেখাও যে, \(x=y-y^{2}+y^{3}-y^{4}+\dots \dots \dots \infty \) <br><br>
                    19. \( y=2 x+3 x^{2}+4 x^{3}+\dots \dots \infty \) হলে দেখাও যে, \(x=\frac{1}{2} y-\frac{3}{8} y^{2}+\frac{5}{16} y^{3}-\cdots \infty \) <br><br>
                    20. ধারার যোগফল নির্ণয় করো।।<br>
                    (a) \( 1+\frac{3}{4}+\frac{3 \cdot 5}{4 \cdot 8}+\frac{3 \cdot 5 \cdot 7}{4 \cdot 8 \cdot 22}+\dots \cdot \infty \) ; উত্তরঃ \(2 \sqrt{2}\) <br>
                    (b) \(1-\frac{1}{4}+\frac{1.3}{4.8}-\frac{1.3 .5}{4.8 .12}+\cdots \cdot \infty \)  ; উত্তরঃ \(\sqrt{\frac{2}{3}}\) <br>
                    (c) \(1+2 \cdot \frac{1}{3^{2}}+\frac{2}{1} \cdot \frac{5}{2} \cdot \frac{1}{3^{4}}+\frac{2}{1} \cdot \frac{5}{2} \cdot \frac{8}{3} \cdot \frac{1}{3^{6}}+\dots \infty \)  ; উত্তরঃ \(\left(\frac{2}{3}\right)^{-2 / 3} \) <br>
                    <br>
                    
                    
                    
                    <h2 class="text-center font-weight-bold" style="color: teal; font-family: Comic Sans MS">কণিক</h2>
                    
                    1. নিচের প্রতিটি পরাবৃন্ডের শীর্ষবিন্দু, উপকেন্দ্র, উপকেন্দ্রিক লম্ব অক্ষরেখা ও নিয়ামকরের সমীকরণ নির্ণয় কর: <br>
                    (a) \( y^{2}=4 y+4 x-8\) ; উত্তরঃ \( (1,2) ; (2,2) ;  4 ;  y=2 ;  x=0\) <br>
                    (b) \(5 x^{2}+15 x-10 y-4=0 \)  ; উত্তরঃ \(\left(-\frac{3}{7},-\frac{61}{40}\right) ; \left(-\frac{3}{2},-\frac{41}{40}\right) ;  2 ;  x+\frac{3}{2}=0 ;  y+\frac{81}{40}=0\) <br><br>
                    
                    2. \( y ^2 = 4px \) পরাবৃত্তটি (3, - 2) বিন্দু দিয়ে অতিক্রম করলে এর উপকেন্দ্রিক লম্বের দৈর্ঘ্য এবং উপকেন্দ্রের স্থানাঙ্ক নির্ণয় কর।
                    <br>উত্তরঃ \(\frac{4}{3} ;\left(\frac{1}{3}, 0\right) \) <br><br>
                    3. একটি পরাবৃত্তের উপকেন্দ্র ও শীর্ষবিন্দু যথাক্রমে (3, 4) ও (0, 0) বিন্দুতে অবস্থিত হলে তার নিয়ামকরেখার | সমীকরণ নির্ণয় কর।
                    <br>উত্তরঃ \(3x + 4y + 25 = 0 \) <br><br>
                    
                    4.  (-8, -2) উপকেন্দ্র ও \(2x -y-9 = 0 \) নিয়ামকরেখা বিশিষ্ট পরাবৃত্তের সমীকরণ নির্ণয় কর।
                    <br>উত্তরঃ \( (x+2 y)^{2}+116 x+2 y+259=0  \) <br><br>
                    5. \( y^2 = 16x \) পরাবৃত্তের উপরিস্থিত কোন বিন্দুর উপকেন্দ্রিক দূরত্ব 6 ; ঐ বিন্দু স্থানাঙ্ক নির্ণয় কর।
                    <br>উত্তরঃ \( (2, \pm 4 \sqrt{2}) \) <br><br>
                    
                    6. একটি পরাবৃত্তের সমীকরণ নির্ণয় কর যার উপকেন্দ্র (1, -1) বিন্দুতে অবস্থিত এবং \(x – y + 2 = 0 \) রেখাটি।
                    শীর্ষবিন্দুতে অক্ষরেখার উপর লম্ব । 
                    <br>উত্তরঃ \( (x + y) 2 – 16x + 16y - 32 = 0  \) <br><br>
                    
                    7. (2, 5) বিন্দুগামী পরাবৃত্তের সমীকরণ নির্ণয় কর যার শীর্ষ (0, 2) বিন্দুতে অবস্থিত এবং অক্ষরেখা y-অক্ষের সমান্তরাল।
                    <br>উত্তরঃ \( 3x^2 = 4y- 2 \) <br><br>
                    8.  একটি পরাবৃত্তের সমীকরণ নির্ণয় কর যার শীর্ষ (4,- 3) বিন্দুতে অবস্থিত, উপকেন্দ্রিক লম্বের দৈর্ঘ্য 4 একক। | এবং অক্ষটি x-অক্ষের সমান্তরাল।
                    <br>উত্তরঃ \((y+3)^{2}=\pm 4(x-4) \) <br><br>
                    9. \( y=a x^{2}+b x+c \) পরাবৃত্তটির শীর্ষ (-2, 3) বিন্দুতে অবস্থিত এবং তা (0, 5) বিন্দু দিয়ে অতিক্রম করে। a, b, c এর মান নির্ণয়।
                    <br>উত্তরঃ \(a = 1/2 , b = 2 , c = 5 \) <br><br>
                    10. \( 3 x^{2}+4 y^{2}=12 \) উপবৃত্তের উৎকেন্দ্রিকতা, উপকেন্দ্র, উপকেন্দ্রিক লম্বের দৈর্ঘ্য ও সমীকরণ এবং নিয়ামকরেখার সমীকরণ নির্ণয় কর।
                    <br>উত্তরঃ \(e=1 / 2,(\pm 1,0), 3, x=\pm 1, x=\pm 4\) <br><br>
                    11. p এর মান কত হলে \( \frac{x^{2}}{p}+\frac{y^{2}}{5^{2}}=1 \) উপবৃত্তটি (6, 4) বিন্দু দিয়ে অতিক্রম করবে ? উপবৃত্তটির উৎকেন্দ্রিকতা
                    এবং উপকেন্দ্রের অবস্থান নির্ণয় কর।
                    <br>উত্তরঃ \(p=100, e=\sqrt{3} / 2,(\pm 5 \sqrt{3}, 0) \) <br><br>
                    12. উপবৃত্তের অক্ষ দুইটিকে x ও y-অক্ষ ধরে (2,2) ও (3 , 1) বিন্দুগামী উপবৃত্তের সমীকরণ নির্ণয় কর। এর
                    উৎকেন্দ্রিকতাও নির্ণয় কর।
                    <br>উত্তরঃ \(3 x^{2}+5 y^{2}=32, \sqrt{2 / 5} \) <br><br>
                    13. একটি উপবৃত্তের সমীকরণ নির্ণয় কর যার একটি উপকেন্দ্রের স্থানাঙ্ক (1.-1), অনুরূপ নিয়ামকরেখা \(x – y - 4 = 0\) এবং যা (1, 1) বিন্দু দিয়ে অতিক্রম করে।
                    <br>উত্তরঃ \( 3x^2 + 3y^2+2xy - 8 = 0. \) <br><br>
                    14. বৃহৎ অক্ষ ও ক্ষুদ্র অক্ষকে যথাক্রমে x-অক্ষ ও y-অক্ষ ধরে উপত্তের সমীকরণ নির্ণয় কর যার উৎকেন্দ্রিকতা \( 4/5 \) এবং যা \( \left(\frac{10}{3}, \sqrt{5}\right) \) বিন্দুগামী। 
                    <br>উত্তরঃ \(\frac{x^{2}}{25}+\frac{y^{2}}{9}=1\) <br><br>
                    15. বৃহৎ অক্ষ ও ক্ষুদ্র অক্ষকে যথাক্রমে x-অক্ষ ও y-অক্ষ ধরে একটি উপবৃত্তের সমীকরণ নির্ণয় কর যার
                    উপকেন্দ্রিক লম্বের দৈর্ঘ্য ক্ষুদ্র অক্ষের অর্ধেক এবং যা (0, 1) বিন্দু দিয়ে অতিক্রম করে।
                    <br>উত্তরঃ \(x^{2}+4 y^{2}=4\) <br><br>
                    16. বৃহৎ অক্ষ ও ক্ষুদ্র অক্ষকে যথাক্রমে x-অক্ষ ও y-অক্ষ ধরে একটি উপবৃত্তের সমীকরণ নির্ণয় কর যার
                    উৎকেন্দ্রিকতা 1/3 এবং উপকেন্দ্রিক লম্বের দৈর্ঘ্য ৪ একক।
                    <br>উত্তরঃ \(\frac{4 x^{2}}{81}+\frac{y^{2}}{18}=1\) <br><br>
                    17. বৃহৎ অক্ষ ও ক্ষুদ্র অক্ষকে যথাক্রমে x-অক্ষ ও y-অক্ষ ধরে একটি উপবৃত্তের সমীকরণ নির্ণয় কর যার উপকেন্দ্র। দুইটির মধ্যবর্তী দূরত্ব ৪ এবং নিয়ামকরেখা দুইটির মধ্যবর্তী দূরত্ব 18 ।
                    <br>উত্তরঃ \(5 x^{2}+9 y^{2}=180\) <br><br>
                    18. একটি উপবৃত্তের উপকেন্দ্রিক লম্বের দৈর্ঘ্য তার ক্ষুদ্র অক্ষের অর্ধেক। তার উৎকেন্দ্রিকতা নির্ণয় কর।
                    <br>উত্তরঃ \(c=3 \sqrt{2}\) <br><br>
                    19.  একটি উপবৃত্তের ক্ষুদ্র অক্ষের দৈর্ঘ্য তার উপকেন্দ্র দুইটির মধ্যবর্তী দূরত্বের সমান এবং তার উপকেন্দ্রিক লম্বের দৈর্ঘ্য 10 একক। উপবৃত্তটির উৎকেন্দ্রিকতা ও সমীকরণ নির্ণয় কর।।
                    <br>উত্তরঃ \(e=1 / \sqrt{2}: x^{2}+2 y^{2}=100\) <br><br>
                    20. কোনাে উপাত্তের একটি উপকেন্দ্র ও অনুরুপ নিয়ামকরেখার মধ্যকার দূরত্ব 16 ইঞ্চি এবং তার উপকেন্দ্রিকতা 3/5 ; অক্ষ দুইটির দৈর্ঘ্য নির্ণয় কর। 
                    <br>উত্তরঃ  30 ইঞ্চি এবং 24 ইঞ্চি। <br><br>
                    
                    21. একটি উপবৃত্তের সমীকরণ নির্ণয় কর যার উপকেন্দ্র দুইটির স্থানাঙ্ক \( ( \pm 2, 0) \) এবং যার বৃহৎ অক্ষের দৈর্ঘ্য ৪।
                    <br>উত্তরঃ \(\frac{x^{2}}{16}+\frac{y^{2}}{12}=1\) <br><br>
                    
                    22. একটি উপবৃত্তের সমীকরণ নির্ণয় কর যার উপকেন্দ্র দুইটির স্থানাঙ্ক (-1, - 1) ও (1, 1) এবং বৃহৎ অক্ষের দৈর্ঘ্য \( 2 \sqrt 3\) একক।
                    <br>উত্তরঃ \(2 x^{2}+2 y^{2}-2 x y-3=0\) <br><br>
                    
                    23. একটি উপবৃত্তের অক্ষ দুইটি স্থানাঙ্কের অক্ষ দুইটির উপর অবস্থিত। উপবৃত্তটি \( \frac{x}{9}+\frac{y}{4}=1 \) রেখাকে x-অক্ষের উপর এবং \(\frac{x}{2}+\frac{y}{3}=1\) রেখাকে y-অক্ষের উপর ছেদ করে । তার সমীকরণ, উৎকেন্দ্রিকতা এবং উপকেন্দ্র দুইটির স্থানাঙ্ক নির্ণয় কর।
                    <br>উত্তরঃ \(\frac{x^{2}}{81}+\frac{y^{2}}{9}=1 ; \frac{\sqrt{72}}{9} ;(\pm \sqrt{72}, 0)\) <br><br>
                    
                    24. একটি অধিবৃত্ত (6, 4) ও ( 3, 1) বিন্দু দিয়ে অতিক্রম করে। এর কেন্দ্র মূলবিন্দুতে এবং আড় অক্ষ x-অক্ষ বরাবর হলে , অধিবৃত্তটির সমীকরণ নির্ণয় কর।
                    <br>উত্তরঃ \(\frac{5 x^{2}}{36}-\frac{y^{2}}{4}=1\) <br><br>
                    
                    25.  অক্ষ দুইটিকে স্থানাঙ্কের অক্ষ ধরে একটি অধিবৃত্তের সমীকরণ নির্ণয় কর যার আড় অক্ষ এবং অনুবন্ধী অক্ষের দৈর্ঘ্য যথাক্রমে 6 এবং 8 একক।
                    <br>উত্তরঃ \(16 x^{2}-9 y^{2}=144\) <br><br>
                    
                    26. অক্ষ দুইটিকে স্থানাঙ্কের অক্ষ ধরে একটি অধিবৃত্তের সমীকরণ নির্ণয় কর যার অনুবন্ধী অক্ষের দৈর্ঘ্য 24 একক। এবং উপকেন্দ্রের স্থানাঙ্ক \( (0, \pm 13) \) ।
                    <br>উত্তরঃ \(\frac{y^{2}}{25}-\frac{x^{2}}{144}=1\) <br><br>
                    
                    27. অক্ষ দুইটিকে স্থানাঙ্কর অক্ষ ধরে একটি অধিবৃত্তের সমীকরণ নির্ণয় কর যার উপকেন্দ্র দুইটির মধ্যবর্তী দূরত্ব
                    16 একক এবং উৎকেন্দ্রিকতা \( \sqrt 2 \) ।
                    <br>উত্তরঃ \(x^{2}-y^{2}=32\) <br><br>
                    
                    <hr style="height:2px;border-width:0;color:gray;background-color:teal">
                    
                    
                    <h2 class="text-center font-weight-bold" style="color: teal; font-family: Comic Sans MS">বিপরীত ত্রিকোণমিতিক ফাংশন ও ত্রিকোণমিতিক সমীকরণ </h2>
                    1. প্রমাণ করো যে, <br> <br>
                    (a) \( \sin ^{-1} \frac{4}{5}+\cos ^{-1} \frac{2}{\sqrt{5}}=\tan ^{-1} \frac{11}{2} \) ;<br><br>
                    (b) \(5 x^{2}+15 x-10 y-4=0   \) <br><br>
                    (c)  \(\tan ^{-1} \frac{2}{3}=\frac{\pi}{2}-\sec ^{-1} \frac{\sqrt{13}}{2}\) <br><br>
                    (d)  \(4\left(\sin ^{-1} \frac{1}{\sqrt{5}}+\cot ^{-1} 3\right)=\pi\) <br><br> 
                    (e)  \(\tan ^{-1}\{(\sqrt{2}+1) \tan \alpha)-\tan ^{-1}\{(\sqrt{2}-1) \tan a\}=\tan ^{-1}(\sin 2 \alpha)\) <br><br> 
                    (f)  \(\tan \left(2 \tan ^{-1} x\right)=2 \tan \left(\tan ^{-1} x+\tan ^{-1} x^{3}\right)\) <br><br> 
                    (g)  \(2 \tan ^{-1}\left\{\sqrt{\frac{a-b}{a+b}} \tan \frac{\theta}{2}\right\}=\cos ^{-1} \frac{b+a \cos \theta}{a+b \cos \theta}\) <br><br> 
                    (h)  \(\sin ^{-1} \frac{3}{5}+\frac{1}{2} \cos ^{-1} \frac{5}{13}-\cot ^{-1} 2=\tan ^{-1} \frac{28}{29}\) <br><br> 
                    (i)  \(\cos ^{-1} \frac{1}{\sqrt{5}}-\frac{1}{2} \sin ^{-1} \frac{3}{5}+\tan ^{-1} \frac{1}{3}=\tan ^{-1} 2\) <br><br> 
                    (j)  \(\sin \cot ^{-1} \tan \cos ^{-1} x=x\) <br><br> 
                    (k)  \(\sin \cos ^{-1} \tan \sec ^{-1} \frac{x}{y}=\frac{\sqrt{2 y^{2}-x^{2}}}{y}\) <br><br> 
                    (l)  \(\cot \cos ^{-1} \sin \tan ^{-1} \frac{3}{4}=\frac{3}{4}\) <br><br> 
                    (m)  \(2 \tan ^{-1}\left(\operatorname{cosec} \tan ^{-1} x-\tan \cot ^{-1} x\right)=\tan ^{-1} x\) <br><br> 
                    (n)  \(\sec ^{2}\left(\tan ^{-1} 2\right)+\operatorname{cosec}^{2}\left(\cot ^{-1} 3\right)=15\) <br><br> 
                    (o)  \(\sin ^{2}\left(\cos ^{-1} \frac{1}{3}\right)-\cos ^{2}\left(\sin ^{-1} \frac{1}{\sqrt{3}}\right)=\frac{2}{9}\) <br><br> 
                    (p)  \(\sin ^{-1}(\sqrt{2} \sin \theta)+\sin ^{-1}(\sqrt{\cos 2 \theta})=\frac{\pi}{2}\) <br><br> 
                    2. \(\sin ^{-1} x+\sin ^{-1} y=\frac{\pi}{2}\) হলে দেখাও যে \(x^{2}+y^{2}=1\) <br><br> 
                    3. \(\cos ^{-1} \frac{x}{a}+\cos ^{-1} \frac{y}{b}=\theta\) হলে দেখাও যে \(\frac{x^{2}}{a^{2}}-\frac{2 x y \cos \theta}{a b}+\frac{y^{2}}{b^{2}}=\sin ^{2} \theta\) <br><br> 
                    4. \(\sin ^{-1} \frac{2 a}{1+a^{2}}-\cos ^{-1} \frac{1-b^{2}}{1+b^{2}}=2 \tan ^{-1} x\) হলে দেখাও যে \(x=\frac{a-b}{1+a b} \) <br><br> 
                    5. \(\sin (\pi \cos \theta)=\cos (\pi \sin \theta)\) হলে দেখাও যে \(\theta=\pm \frac{1}{2} \sin ^{-1} \frac{3}{4}\) <br><br> 
                    6. \(\sin ^{-1} x+\sin ^{-1} y=\frac{\pi}{2} \) হলে দেখাও যে \(x \sqrt{1-y^{2}}+y \sqrt{1-x^{2}}=1 \) <br><br> 
                    7. \(A+B+C=\pi, A=\tan ^{-1} 2 \text { ও } B=\tan ^{-1} 3 \) হলে দেখাও যে \(C=\frac{\pi}{4} \) <br><br> 
                    8. সমাধান করঃ <br> <br>
                    (a) \( \sin x+\cos x=\sqrt{2},-\pi < x < \pi \) ;<br>   উত্তরঃ \(\frac{\pi}{4}\)<br> <br>
                    (b) \(\tan 2 \theta \tan \theta=1\)   ;  <br> উত্তরঃ \(\theta=n \pi \pm \frac{\pi}{6} ; n \in \mathbb{Z}\) <br> <br>
                    (c) \(\sqrt{3} \cos x+\sin x=1,-2 \pi < x < 2 \pi \)   ; <br>  উত্তরঃ \(-\frac{3 \pi}{2},-\frac{\pi}{6}, \frac{\pi}{2}, \frac{11 \pi}{6}\) <br> <br>
                    (d) \(\sqrt{3} \sin x-\cos x=2, \text { when ,  }-2 \pi< x < 2 \pi \)   ; <br>  উত্তরঃ \(-\frac{4 \pi}{3}, \frac{2 \pi}{3}\) <br> <br>
                    (e) \(4\left(\sin ^{2} \theta+\cos \theta\right)=5,-2 \pi < \theta< 2 \pi \)   ; <br>   উত্তরঃ \(\pm \frac{\pi}{3}, \pm \frac{5 \pi}{3} \) <br> <br>
                    (f) \(\frac{\sqrt{3}}{\sin 2 x}-\frac{1}{\cos 2 x}=4\)   ;<br>  উত্তরঃ \((3 n+1) \frac{\pi}{6},(6 n+1) \frac{\pi}{18}\) <br> <br>
                    (g) \(\cos 6 x+\cos 4 x=\sin 3 x+\sin x \)   ;<br>   উত্তরঃ \((2 n+1) \frac{\pi}{2},(4 n+1) \frac{\pi}{14},(4 n-1)\) <br> <br>
                    (h) \(\sqrt{2} \cos 3 \theta-\cos \theta=\cos 5 \theta \)   ;  <br>  উত্তরঃ \((2 n+1) \frac{\pi}{6}, n r \pm \frac{\pi}{8}\) <br> <br>
                    (i) \(4 \cos x \cos 2 x \cos 3 x=1,0 < x < \pi \)   ; <br>   উত্তরঃ \(\frac{\pi}{8}, \frac{\pi}{3}, \frac{2 \pi}{3}, \frac{3 \pi}{8}, \frac{5 \pi}{8}, \frac{7 \pi}{8}\) <br> <br>
                    (j) \(2 \sin \theta \sin 3 \theta=1,0 \leq \theta \leq \pi \)   ; <br>   উত্তরঃ \(\frac{\pi}{4}, \frac{\pi}{6}, \frac{5 \pi}{6}, \frac{3 \pi}{4}\) <br> <br>
                    (k) \(\cot \theta+\tan \theta=2 \sec \theta ; \text { Where,  }-2 \pi<\theta < 2 \pi \)   ; <br>   উত্তরঃ \(\theta=\frac{\pi}{6}, \frac{5 \pi}{6},-\frac{7 \pi}{6},-\frac{11 \pi}{6}\) <br> <br>
                    (l) \(\cos x+\sin x=\cos 2 x+\sin 2 x \)   ; <br>   উত্তরঃ \(x=2 n \pi \cdot \frac{2}{3}\left(n \pi+\frac{\pi}{4}\right) ; n \in Z \) <br> <br>
                    <br><br>
                    <br>

                    <hr style="height:2px;border-width:0;color:gray;background-color:teal">
                    
                    <h2 class="text-center font-weight-bold" style="color: teal; font-family: Comic Sans MS"> স্থিতিবিদ্যা  </h2>
                    1. কোনাে বিন্দুতে ক্রিয়ারত P ও 2P বল দুইটির লব্ধি R যদি P এর ক্রিয়ারেখার উপর লম্ব হয় তবে বলদ্বয়ের মধ্যবর্তী কোণ নির্ণয় কর।
                    <br>উত্তরঃ \(120^o\) <br><br>
                    2. কোনাে কণার উপর ক্রিয়ারত দুইটি বলের লব্ধি একটি বলের উপর লম্ব এবং এর মান অপরটির মানের এক তৃতীয়াংশের সমান। দেখাও যে, বল দুইটির অনুপাত 22:3 <br><br>
                    3. কোনাে বিন্দুতে ক্রিয়ারত P ও Q ( P > Q) বল দুইটির লব্ধি তাদের অন্তর্গত কোণকে এক-তৃতীয়াংশে বিভক্ত করে। দেখাও যে, বলদ্বয়ের অন্তর্গত কোণের পরিমাণ \(3 \cos ^{-1}\left(\frac{P}{2 Q}\right) \) এবং লব্ধির মান \(\frac{P^{2}-Q^{2}}{Q}\) <br><br>
                    4. \( 2 \alpha \) কোণে ক্রিয়ারত দুইটি সমান বলের লব্ধি , \( 2 \beta \) কোণে ক্রিয়ারত বল দুইটির লব্ধির দ্বিগুণ হলে, প্রমাণ কর যে, \( cos \alpha = 2 cos \beta \)  <br><br>
                    5. পরস্পর \( \theta \) কোণে ক্রিয়াশীল P, Q মানের বল দুইটির লব্ধির মান \((2 m+1) \sqrt{P^{2}+Q^{2}} \) তারা যখন
                    \( \left(\frac{\pi}{2}-\theta\right) \) কোণে ক্রিয়া করে , তখন লব্ধির মান \( (2 m+1) \sqrt{P^{2}+Q^{2}} \) হয়। প্রমাণ কর যে, \(\tan \theta=\frac{m-1}{m+1}\)  <br><br>
                    6. কোনাে বিন্দুতে ক্রিয়ারত দুইটি বলের বৃহত্তম ও ক্ষুদ্রতম লব্ধির মান যথাক্রমে F ও G। প্রমাণ কর যে, বল
                    দুইটির ক্রিয়ারেখার মধ্যবর্তী কোণ \( \alpha \) হলে তাদের লব্ধির মান, \( \sqrt{\mathrm{F}^{2} \cos ^{2} \frac{\alpha}{2}+G^{2} \sin ^{2} \frac{\alpha}{2}} \) হবে।  <br><br>
                    7.  কোনাে কণার উপর একই সময়ে ক্রিয়াশীল দুইটি বলের লব্ধি এদের একটির ক্রিয়ারেখার সাথে 60° কোণ উৎপন্ন করে। এই বলটিকে দ্বিগুণ করলে উক্ত কোণটি 30° হয়। বল দুইটির অন্তর্গত কোণ নির্ণয় কর।
                    <br>উত্তরঃ \(120°\) <br><br>
                    8. P ও Q(P>Q) বল দুইটি পরস্পর \( \alpha \) কোলে ক্রিয়ারত। এদের অবস্থান বিনিময় করলে লব্ধি \( \theta \) কোণে ঘুরে । যায়। প্রমাণ কর যে, \( \tan \frac{\theta}{2}=\frac{P-Q}{P+Q} \tan \frac{\alpha}{2} \) <br><br>
                    9. O বিন্দুতে ক্রিয়াশীল 4P, 3P মানের বল দুইটির লব্ধির মান 5P। যদি কোনাে ছেদক এদের ক্রিয়া রেখাকে যথাক্রমে R, S, T বিন্দুতে ছেদ করে তবে দেখাও যে, \(\frac{4}{O R}+\frac{3}{O S}=\frac{5}{O T}\) <br><br>
                    10. কোনাে একটি বিন্দুতে 2P এবং P মানের দুইটি বল ক্রিয়ারত। প্রথমটিকে দ্বিগুণ করলে এবং দ্বিতীয়টির মান ৪ একক বৃদ্ধি করলে লব্ধির দিক অপরিবর্তিত থাকে। P এর মান নির্ণয় কর। 
                    <br>উত্তরঃ \(P = 8 \; unit\) <br><br>
                    11. P ও Q (P> Q) বলদ্বয়ের বৃহত্তম ও ক্ষুদ্রতম লব্ধি যথাক্রমে R ও S। কোনাে বিন্দুতে 2a কোণে কার্যরত R এবং s বল দুইটির লব্ধি এদের অন্তর্গত কোণের সমদ্বিখন্ডকের সাথে ।
                    কোণ উৎপন্ন করে। দেখাও যে, \(P \tan \theta= Q  \tan \alpha\) <br><br>
                    12.  কোনাে বিন্দুতে ক্রিয়ারত P ও 2P বল দুইটির লব্ধি R যদি P এর ক্রিয়ারেখার উপর লম্ব হয় তবে বলদ্বয়ের মধ্যবর্তী কোণ নির্ণয় কর।
                    <br>উত্তরঃ \(120^o\) <br><br>
                    13. কোনাে কণার উপর ক্রিয়ারত দুইটি বলের লব্ধি একটি বলের উপর লম্ব এবং এর মান অপরটির মানের এক । তৃতীয়াংশের সমান। দেখাও যে, বল দুইটির অনুপাত 22 : 3 <br><br>
                    14. কোনাে বিন্দুতে ক্রিয়ারত P ও Q (P > Q) বল দুইটির লব্ধি তাদের অন্তর্গত কোণকে এক-তৃতীয়াংশে বিভক্ত করে। দেখাও যে, বলদ্বয়ের অন্তর্গত কোণের পরিমাণ \( 3 \cos ^{-1}\left(\frac{P}{2 Q}\right) \) এবং লব্ধির মান \( \frac{P^{2}-Q^{2}}{Q} \) <br><br>
                    15. \( 2 \alpha \) কোণে ক্রিয়ারত দুইটি সমান বলের লব্ধি ,  \( 2 \beta \) কোণে ক্রিয়ারত বল দুইটির লব্ধির দ্বিগুণ হলে, প্রমাণ কর যে, \( \cos \alpha=2 \cos \beta \) <br><br>
                    16. কোনাে বিন্দুতে 1 , 2 ও \( \sqrt 3 \) একক বলয় ক্রয়া করে সাম্যাবস্থা সৃষ্টি করে। বলগলির মধ্যবর্তী কোণ নির্ণয় কর।।
                    <br>উত্তরঃ \(120^{\circ}, 150^{\circ}, 90^{\circ}\) <br><br>
                    17. 6 একক ওজনের একটি বস্তুকে দুইটি বল দ্বারা টেনে রাখা হয়েছে। তাদের একটি আনুভমিক এবং অপরটি। আনুভূমিকের সাথে 30° কোণ করেছে। বলদ্বয় নির্ণয় কর। 
                    <br>উত্তরঃ \( 6 \sqrt 3 \) একক ও 12 একক। <br><br>
                    
                    18. ABC ত্রিভুজের O লম্বকেন্দ্র। O থেকে BC, CA, AB বাহর উপর লম্ব বরাবর কার্যরত যথাক্রমে P, Q, R বল তিনটি সাম্যাবস্থায় আছে। প্রমাণ কর যে, <br>
                    (a) \(P: Q: R=\sin A: \sin B: \sin C \) <br>
                    (b) \(P: Q: R=a: b: c \)<br><br>
                    
                    19. ABC ত্রিভুজের শীর্ষবিন্দু A, B, C হতে বিপরীত বাহুর উপর লম্ব বরাবর ক্রিয়ারত যথাক্রমে P, Q, R
                    বলত্রয় সাম্যাবস্থা সৃষ্টি করলে প্রমাণ কর যে, \( P : Q: R = a: b :c \)  <br><br>
                    
                    
                    20. 6 ft ও 8 ft দৈর্ঘ্যের দুইটি রশির সাহায্যে 20 পাউন্ড-ওজনের একটি বস্তুকে ঝুলনি হলাে। রাশ দুইটির অপর
                    প্রান্ত 10 ft দৈর্ঘ্যের একটি দন্ডের দুই প্রান্তে বাঁধা আছে। দন্ডটি এরূপভাবে স্থাপন করা হলে যেন বস্তুটি এর
                    মধ্যবিন্দুর ঠিক খাড়া নিচে থাকে। রশিদ্বয়ের টান নির্ণয় কর। 
                    <br>উত্তরঃ 12 ও 16 কেজি-ওজন। <br><br>
                    21. \( l \) দৈর্ঘ্যবিশিষ্ট একটি সুতার এক প্রান্ত একটি উল্লম্ব দেয়ালের আটকানাে আছে এবং অন্য প্রান্ত \( a \) ব্যাসাধবিশিষ্ট একটি সুষম গােলকের উপরস্থ কোনাে বিন্দুতে যুক্ত আছে। গােলকটির ওজন \( w \) হলে দেখাও যে, রশির টান \( \mathrm{T}=\frac{w(l+a)}{\sqrt{2 a l+l^{2}}} \)
                    <br><br>
                    
                    22. একটি হেলানাে সমতলের দৈর্ঘ্যে ও ভূমির সমান্তরালে ক্রিয়াশীল যথাক্রমে P ও Q বলদ্বয় প্রত্যেকে
                    এককভাবে W ওজনের কোন বস্তুকে তলের উপর স্থির রাখতে পারে। প্রমাণ কর যে, \( \frac{1}{P^{2}}-\frac{1}{Q^{2}}=\frac{1}{W^{2}} \)
                    <br><br>
                    23.  20 cm দৈর্ঘ্য AB হালকা দন্ডটি 10 cm ব্যবধানে দুইটি পেরেকের উপর আনুভূমিক ভাবে অবস্থিত। A ও B
                    বিন্দুতে যথাক্রমে 2W ও 3W ওজন ঝুলানাে হলে পেরেক দুইটির কোন্ অবস্থানের জন্য এদের উপর চাপ। সমান হবে?
                    <br>উত্তরঃ 7 cm ও 3 cm <br><br>
                    24. ভূমিতলের সমান্তরাল একই রেখাস্থ দু’টি মসৃণ পেরেক P ও Q এর উপর ৪ মি. দীর্ঘ একটি বাঁশের প্রায় অবস্থান করছে। বাঁশটির উপরস্থ R বিন্দুতে একটি ভারী বােঝা ঝুলানাে হল, যদি PR = 3RQ হয় এবং Q বিন্দুতে চাপ P বিন্দুতে চাপ অপেক্ষা 325 গ্রাম-ওজন বেশী হয় তবে বােঝাটির ওজন নির্ণয় কর।
                    <br>উত্তরঃ 650 গ্রাম-ওজন। <br><br>
                    25. P ও Q মানের দুইটি সদৃশ সমান্তরাল বলের লব্ধি O বিন্দুতে ক্রিয়া করে। P কে R পরিমাণে এবং Q কে S
                    পরিমাণে বৃদ্ধি করলেও লদ্ধি O বিন্দুতে ক্রিয়া করে। আবার P, Q এর পরিবর্তে যথাক্রমে Q, R ক্রিয়া
                    করলেও লব্ধি O বিন্দুতে ক্রিয়া করে। প্রমাণ কর যে, \(S=R-\frac{(Q-R)^{2}}{P-Q}\)  <br><br>
                    26. P ও Q দুইটি সদৃশ সমান্তরাল বল। P বলটির ক্রিয়ারেখা সমান্তরাল রেখে তার ক্রিয়া বিন্দুকে x দূরত্বে সরালে, দেখাও যে, এদের লব্ধি \( \frac{P x}{P+Q} \) দূরত্বে সরে যাবে। <br><br> 
                    27. দুইটি বিসদৃশ সমান্তরাল P ও Q (P > Q) বল দুইটি যথাক্রমে A ও B বিন্দুতে কার্যরত আছে। উভয় বলকে R পরিমাণে বৃদ্ধি করা হলে যদি এদের লব্ধি d দূরত্বে সরে যায়, তবে দেখাও যে, \(  d=\frac{R}{P-Q} A B \)  <br><br>
                    28. ABC ত্রিভুজের পরিকেন্দ্র O। একটি বল P, AO বরাবর ক্রিয়ারত। দেখাও যে, B ও C বিন্দুতে P এর সমান্তরাল উপাংশদ্বয়ের অনুপাত \( \sin 2 B: \sin 2 C \) <br><br>
                    29. P, Q, R সদৃশ সমান্তরাল বল তিনটি যথাক্রমে ABC ত্রিভুজের কৌণিক বিন্দু A, B, C তে ক্রিয়া করে। এদের লব্ধির ক্রিয়ারেখা যদি ত্রিভুজটির অন্তঃকেন্দ্রগামী হয়, তবে দেখাও যে, <br>
                    (a) \( \frac{P}{a}=\frac{Q}{b}=\frac{R}{c} \) <br>
                    (b) \( P: Q: R=\sin A: \sin B: \sin C \)<br><br>
                    30. P, Q, R তিনটি সদৃশ সমান্তরাল বল যথাক্রমে ABC ত্রিভুজের কৌণিক বিন্দু A, B, C তে ক্রিয়া
                    করে। এদের লব্ধির ক্রিয়ারেখা যদি ত্রিভুজটির লম্ববিন্দু গামী হয়, তাহলে প্রমাণ কর যে,<br>
                    (a) \( P: Q: R=\tan A: \tan B: \tan C \) <br>
                    (b) \( P\left(b^{2}+c^{2}-a^{2}\right)=Q\left(c^{2}+a^{2}-b^{2}\right)=R\left(a^{2}+b^{2}-c^{2}\right) \)<br><br>
                    31. একজন লােক একটি সুষম লাঠির একপ্রান্তে একটি বােঝা কাঁধে বহন করছে। বােঝটির ওজন w এবং কাকটির কী হতে বােঝাটির ও লােকটির হাতের দুরত্ব যথাক্রমে a ও x হলে, দেখাও যে, কাঁধের উপর চাপ \(w\left(1+\frac{a}{x}\right)\)  <br><br>
                    32. 4 m দীর্ঘ এবং 15 kg ওজনের একটি সমরূপ AB তক্তা দুইটি অবলম্বনের উপর আনুভূমিকভাবে স্থির আছে। একটি অবলম্বন A প্রান্তে এবং অন্যটি B প্রান্ত হতে 50 cm ভিতরে অবস্থিত। একটি বালক তক্তাটিকে
                    উল্টিয়ে এর উপর দিয়ে B প্রান্তে পৌঁছতে সক্ষম হলে বালকটির ওজন কত?
                    <br>উত্তরঃ \(45 \mathrm{kg}-\mathrm{wt}\) <br><br>
                    33. 2a দীর্ঘ এবং W ওজন বিশিষ্ট একটি সুষম তক্তা ৮ দূরত্বে অবস্থিত দুইটি খুটির উপর আনুভূমিক ভাবে অবস্থিত। একে না উল্টিয়ে এর দুই প্রান্তে পর্যায়ক্রমে সর্বাধিক \( W_1 \), এবং \( W_2 \), ওজন ঝুলানাে যায়। প্রমাণ করো যে, \( \frac{W_{1}}{W+W_{1}}+\frac{W_{2}}{W+W_{2}}=\frac{b}{a} \)  <br><br>
                    
                    
                    
                    <hr style="height:2px;border-width:0;color:gray;background-color:teal">
                    <h2 class="text-center font-weight-bold" style="color: teal; font-family: Comic Sans MS"> সমতলে বস্তুকণার গতি  </h2>

                    1.দেখাও যে, দুইটি সমমানের সমবিন্দু বেগের লব্ধি তাদের অন্তর্গত কোণকে সমদ্বিখন্ডিত করে।
                    <br><br>
                    2.  একজন সাঁতারু স্রোতের বেগের v2 গুণ বেগে সাঁতরিয়ে একটি নদী সােজাসুজি পার হতে চায়। স্রোতের সাথে। কোন্ দিকে সাঁতার দিলে সে সফল হতে পারবে?
                    <br>উত্তরঃ  স্রোতের সাথে \(120^0\) কোণে। <br><br>
                    3.  স্রোত না থাকলে এক ব্যক্তি 100 মিটার চওড়া একটি নদী সাঁতার দিয়ে ঠিক সােজাসােজিভাবে 4 মিনিটে পার হয় এবং স্রোত থাকলে ঐ একই পথে সে নদীটি 5 মিনিটে পার হতে পারে। স্রোতের গতিবেগ নির্ণয় কর।
                    <br>উত্তরঃ  15 মি./মিনিট।<br><br>
                    4. সােজাসুজি একটি নদী পার হতে একজন সাঁতারুর t সময় লাগে। স্রোতের অনুকূলে তীর বরাবর একই দূরত্ব অতিক্রম করতে \(t_1 \) লাগে। সীতারুর গতিবেগ u এবং স্রোতের গতিবেগ v হলে, প্রমাণ কর যে, \(t: t_{1}=\sqrt{u+v}=\sqrt{u-v} \) যেখানে, \( u>v \) <br><br>
                    5. কোনাে বন্দর হতে একখানা জাহাজ উত্তর-পশ্চিম দিকে 15 km/h বেগে যাত্রা করল। একই সময়ে একই স্থান হতে অপর একখানা জাহাজ দক্ষিণ-পশ্চিম দিকে 12 km/h বেগে যাত্রা করল। তাদের বেতার যন্ত্রের গ্রহণ শক্তির সীমা সর্বোচ্চ 500 km হলে, কতক্ষণ তারা একে অপরের সাথে যােগাযােগ রক্ষা করতে পারবে?
                    <br>উত্তরঃ 26.02 ঘণ্টা তারা একে অপরের সাথে যােগাযােগ রক্ষা করতে পারবে। <br><br>
                    6. দুইটি বেগের বৃহত্তম লব্ধি এদের ক্ষুদ্রতম লব্ধির n গুণ। বেগদ্বয়ের মধ্যবর্তী কোণ \( \alpha \) হলে, লব্ধি বেগের মান এদের সমষ্টির অর্ধেক হয়। প্রমাণ কর যে, \( \cos \alpha=\frac{n^{2}+2}{2\left(1-n^{2}\right)} \) <br><br>
                    7. u বেগে একটি জাহাজ পূর্বদিকে চলছে। অপর একটি জাহাজ প্রথমটির দিকের সাথে উত্তর দিকে \( \theta \) কোণে আনত রেখায় 2u বেগে চলছে। প্রথম জাহাজের যাত্রীদের নিকট মনে হচ্ছে দ্বিতীয় জাহাজটি উত্তর-পূর্ব দিকে চলছে। প্রমাণ কর যে, \( \theta=\frac{1}{2} \sin ^{-1} \frac{3}{4} \) <br><br>
                    8. গতিসূত্র প্রমাণ করোঃ <br>
                    (a) \( s=u t+\frac{1}{2} f t^{2} \) <br>
                    (b) \( \mathbf{v}^{2}=\mathbf{u}^{2}+2 \mathbf{f s} \) <br><br>
                    
                    9. একটি বুলেট কোনাে দেয়ালের ভিতর 2 ইঞ্চি ঢুকবার পর এর অর্ধেক বেগ হারায়। বুলেটটি দেয়ালের ভিতর আর কত দূর ঢুকবে?
                    <br>উত্তরঃ \(\frac{2}{3}\)  ইঞ্চি <br><br>
                    10. একটি বুলেট একটি তক্তা ভেদ করতে এর বেগের \( \frac{1}{10} \) অংশ হারায়। মন্দন সুষম হলে, বুলেটটি থামার পূর্বে
                    পরপর স্থাপিত অনুরূপ কতগুলি তক্তা ভেদ করবে?
                    <br>উত্তরঃ \( 5 \frac{5}{19}  \) টি<br><br>
                    
                    11. একটি কণা f সুষম ত্বরণে চলে ধারাবাহিক t ও \( t^{/}\) সময়ে সমান দূরত্ব d অতিক্রম করে। প্রমাণ কর যে, \( f=2 d\left(t-t^{\prime}\right) / t t^{\prime}\left(t+t^{\prime}\right) \) <br><br>
                    12. একটি ট্রেন সরল রেলপথে 4 কি,মি, ব্যবধানে দুইটি স্টেশনে থামে। এক স্টেশন থেকে অন্য স্টেশনে পােহাতে
                    সময় লাগে ৪ মিনিট । ট্রেনটি এর গতিপথের প্রথম অংশ x সমত্বরণে এবং দ্বিতীয় অংশ y সমমন্দনে চলে। প্রমাণ কর যে, \( \frac{1}{x}+\frac{1}{y}=8 \) <br><br>
                    
                    13.  একটি বস্তুকণা স্থিরাবস্থা থেকে একটি সরলরেখা বরাবর যাত্রা করে প্রথমে \( f_1 \) সুষম ত্বরণে এবং পরে \( f_2 \)
                    সুষম মন্দনে চলে। যদি তা t সময়ে যাত্রা বিন্দু থেকে s দুরতে গিয়ে থামে, তবে প্রমাণ কর যে, \( \frac{t^{2}}{2 s}=\frac{1}{f_{1}}+\frac{1}{f_{2}} \) <br><br>
                    
                    14. সুষম ত্বরণে সরলরেখা বরাবর চলন্ত একটি বিন্দুকণা পরপর \( t_{1}, t_{2}, t_{3} \) সময়ে যথাক্রমে সমান তিনটি ক্রমিক দূরত্ব অতিক্রম করলে, প্রমাণ কর  \( \frac{1}{t_{1}}-\frac{1}{t_{2}}+\frac{1}{t_{3}}=\frac{3}{t_{1}+t_{2}+t_{3}} \)   <br><br>
                    
                    15. একটি সরলরেখায় সমত্বরণে চলমান কোন বিন্দুর ধারাবাহিক \( t_{1}, t_{2}, t_{3} \) সময়ে গড়বেগ যথাক্রমে \( v_{1}, v_{2}, v_{3} \) হলে দেখাও যে, \( \frac{v_{1}-v_{2}}{v_{2}-v_{3}}=\frac{t_{1}+t_{2}}{t_{2}+t_{3}}  \)  <br><br>
                    16. একটি বন্ত কণা f সমরণে একটি সরলরেখা বরাবর চলে t সময়ে s দুরত্ব এবং পরবর্তী \(t^{/}\) সময়ে \( s^{/} \) দূরত্ব অতিক্রম করে। দেখাও যে, \( f=2\left(\frac{s^{\prime}}{t^{\prime}}-\frac{s}{t}\right) /\left(t+t^{\prime}\right) \)  <br><br>
                    17. একটি রেলগাড়ি একটি স্টেশন থেকে সরল রেলপথে যাত্রা করে অপর স্টেশনে গিয়ে থামে। গাড়িটি যদি মােট
                    দুরত্বের প্রথম \( \frac{1}{m} \) অংশ সমত্বরণে, শেষ \(\frac{1}{n} \) অংশ সমমন্দনে এবং বাকি অংশ সমবেগে যায়, তবে প্রমাণ কর যে, এর সর্বোচ্চ বেগ এবং গড়বেগের অনুপাত \( \left(1+\frac{1}{m}+\frac{1}{n}\right): 1 \) <br><br>
                    18. একটি পাথর কুয়ার ভিতর ফেলার t সময় পরে পানিতে এর পতন শব্দ শোনা গেল। শব্দের বেগ v এবং কয়ার গভীরতা h হলে, বাতাসের বাধা অগ্রাহ্য করে, প্রমাণ কর যে, <br>
                    (a) \( t=\sqrt{\frac{2 h}{g}}+\frac{h}{v} \) <br>
                    (b) \(g v^{2} t^{2}-2 g h v+h\left(g h-2 v^{2}\right)=0\) <br>
                    (c) \(g t^{2}=2 h\left(1+\frac{g t}{v}\right), \text { when, } v>h\) <br><br>
                    
                    19.  নির্দিষ্ট বেগে উল্লম্বভাবে ভূমি থেকে নিক্ষিপ্ত একটি বস্তুকণা t সেকেন্ড সময়ে h উচ্চতায় উঠে এবং
                    আরও \(t^{/}\) সেকেন্ড সময় পরে এটা ভূমিতে ফিরে আসে। প্রমাণ কর যে, <br>
                    (a) \(\frac{1}{2} g \left(t+t^{\prime}\right) \) <br>
                    (b) \(h=\frac{1}{2} g t t^{\prime}\) <br>
                    (c) বৃহত্তম উচ্চতা \(=\frac{1}{8} g\left(t+t^{\prime}\right)^{2} \) <br><br>
                    
                    20.  একটি বল u বেগে খাড়া উপরেরর দিকে নিক্ষেপ করলে তা \( t_{1} \) ও  \( t_{2} \) সেকেন্ডে h উচ্চতায় অবস্থান করে। প্রমাণ কর যে,<br>
                    (a) \(h=\frac{1}{2} g t_{1} t_{2} \) <br>
                    (b) \(u=\frac{1}{2} g\left(t_{1}+t_{2}\right)\) <br><br>
                    
                    21. একটি টাওয়ারের শীর্ষবিন্দু হতে অবাধে পড়ন্ত একখন্ড পাথর x মিটার দূরত্বে পৌছিলে টাওয়ারের শীর্ষবিন্দুর y মিটার নিচে কোনাে বিন্দু থেকে আর একখন্ড পাথর নিচে ফেলা হল। এরা একই সাথে ভূমিতে পড়লে
                    দেখাও যে, টাওয়ারের উচ্চতা \( =\frac{(x+y)^{2}}{4 x} \) মিটার। <br><br>
                    
                    22. ভূমি থেকে একটি কণা u বেগে খাড়া উপরের দিকে নিক্ষেপ করার t সেকেন্ড পরে একই স্থান হতে একই বেগে অপর একটি কণা একই দিকে ছােড়া হলে, প্রমাণ কর যে, তারা \( \frac{4 u^{2}-g^{2} t^{2}}{8 g} \) মিটার উঁচুতে মিলিত হবে।  <br><br>
                    
                    23. একটি বস্তু \( 196 ms^{-1} \) বেগে খাড়া উপরের দিকে নিক্ষেপ করা হল। অপর একটি বস্তু এর 6 সেকেন্ড পরে একই স্থান থেকে একই দিকে নিক্ষেপ করলে এরা পরস্পর প্রথম বস্তুটির বৃহত্তম উচ্চতায় মিলিত হয়। দ্বিতীয় বস্তুটির নিক্ষেপ বেগ নির্ণয় কর।
                    <br>উত্তরঃ  \( 208.6  ms^{-1} \)<br><br>
                    24. একটি গােলা 9.8 মি. দূরে অবস্থিত 2.45 মি. উচ্চ একটি দেওয়ালের ঠিক উপর দিয়ে আনুভূমিকভাবে চলে যায়। গােলার প্রক্ষেপ বেগের মান ও দিক নির্ণয় কর।<br><br>
                    25. একজন খেলােয়াড় 3.5 মি. উচ্চতায় ভূমির সাথে 30° কোণে 9.8 মি./সে. বেগে একটি ক্রিকেট বল ছুঁড়ে মারলে অপর একজন খেলােয়াড় 2.1 মি. উঁচুতে একে ধরে ফেলে। খেলােয়াড় দুইজন কত দূরে ছিল?
                    <br>উত্তরঃ  \(10.44 \; m\)<br><br>
                    26. একটি বস্তু u বেগে শূন্য নিক্ষেপ করা হল। আনুভূমিক পাল্লা R, সর্বাধিক উচ্চতা H এবং বিচরণকাল T হলে, দেখাও যে,<br>
                    (a) \(16 g H^{2}-8 u^{2} H+g R^{2}=0 \) <br>
                    (b) \(g^{2} T^{4}-4 T^{2} u^{2}+4 R^{2}=0\) <br><br>
                    
                    27. t সময় অন্তে একটি প্রক্ষেপক এর বিচরণ পথের P বিন্দুতে পৌঁছে। আরও \(t^{/} \) সময় শেষে তা P বিন্দু হতে নিক্ষেপণ বিন্দুর আনুভূমিক সমতলে ফিরে আসে। দেখাও যে, P বিন্দুর উচ্চতা \( h=\frac{1}{2} g t t^{\prime} \) <br><br>
                    
                    28. একটি ভাড়া দেয়ালের পাদদেশ হতে ভূমি বরাবর x দূরত্বে কোনাে বিন্দু হতে 45° কোণে একটি বস্তু নিক্ষেপ করা হলে কোনাে রকমে তা দেয়ালের ঠিক উপর দিয়ে গেল এবং দেয়ালের অপর পার্শ্বেy দুরত্বে মাটিতে
                    পড়ল। দেখাও যে, দেয়ালটির উচ্চতা \( \frac{x y}{x+y} \) <br><br>
                    
                    29.  একটি ক্রিকেট বলকে আঘাত করলে তা নিক্ষেপ বিন্দু থেকে যথাক্রমে b ও a দূরত্বে অবস্থিত a ও b। উচ্চতা বিশিষ্ট দুইটি দেওয়াল কোনাে রকমে অতিক্রম করে। দেখাও যে, এর পাল্লা \( R=\frac{a^{2}+a b+b^{2}}{a+b} \) <br><br>
                    <br>
                    
                    
                    
                    <hr style="height:2px;border-width:0;color:gray;background-color:teal">
                    <h2 class="text-center font-weight-bold" style="color: teal; font-family: Comic Sans MS"> বিস্তার পরিমাপ ও সম্ভাব্যতা  </h2>
                    
                    1. \( 12, 5, 0, 7, 2, 9, 4 \) সংখ্যাগুলির পরিমিত ব্যবধান নির্ণয় কর।
                    <br>উত্তরঃ  \( 6.57 \)<br><br>
                    2. নিচের তথ্যাদির গণসংখ্যা নিবেশণ সারণি থেকে গড় হতে নির্ণীত গড় ব্যবধান এবং পরিমিত ব্যবধান নির্ণয় কর। <br>
                    <table   class="table table-hover" style="background-color: #BEE4FF">
                            <thead>
                              <tr>
                                <th>সংখ্যা, \(x_i \) </th>
                                <td>10</td>
                                <td>13</td>
                                <td>25</td>
                                <td>30</td>
                                <td>37</td>
                                <td>42</td>
                                <td>45</td>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th>গণসংখ্যা, \(f_i \) </th>
                                <td>3</td>
                                <td>7</td>
                                <td>8</td>
                                <td>15</td>
                                <td>10</td>
                                <td>5</td>
                                <td>2</td>
                              </tr>
                            </tbody>
                            </table>
                    উত্তরঃ  \(7.91, \; 10 \)<br><br>
                    3. প্রথম n সংখ্যক জোড় স্বাভাবিক সংখ্যার ভেদাংক নির্ণয় কর।
                    <br>উত্তরঃ  \(\frac{n^{2}-1}{3}\)<br><br>
                    4. 11, 13, 15, ••• ••• 25 সংখ্যাগুলির ভেদাংক নির্ণয় কর।
                    <br>উত্তরঃ  \(21\)<br><br>
                    5.
                    <table  class="table table-hover" style="background-color: #BEE4FF">
                        <thead>
                          <tr>
                            <th>শ্রেণি ব্যাপ্তি </th>
                            <td>20-24</td>
                            <td>25-29</td>
                            <td>30-34</td>
                            <td>35-39</td>
                            <td>40-44</td>
                            <td>45-49</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th>গণসংখ্যা </th>
                            <td>7</td>
                            <td>10</td>
                            <td>15</td>
                            <td>13</td>
                            <td>9</td>
                            <td>6</td>
                          </tr>
                        </tbody>
                        </table>
                    তথ্যাদির গণসংখ্যা নিবেষণ সারণি থেকে ভেদাংক নির্ণয় কর।
                    <br>উত্তরঃ  \(54.50\)<br><br>
                    6. \( P(A \cap B)=\frac{1}{3}, P(A \cup B)=\frac{5}{6} \) এবং \( P(A)=\frac{1}{2} \) হলে \( P(B) \) এবং \( P\left(B^{c}\right) \) এর মান নির্ণয় কর।
                    <br>উত্তরঃ  \(2/3,   1/3\)<br><br>
                    7. \( P\left(A)=\frac{1}{3}, P(B)=\frac{3}{4}, A \text{ও} B\right. \) স্বাধীন হলে  \( P(A \cap B)\) এবং \( P(A \cup B) \)  নির্ণয় কর।
                    <br>উত্তরঃ  \(1/4, 5/6   \)<br><br>
                    
                    8. একজন ছাত্রের বাংলায় পাসের সম্ভাব্যতা \( \frac{2}{3} \), বাংলা ও অঙ্ক দুইটি বিষয়ে পাসের সম্ভাব্যতা \( \frac{14}{45} \) এবং দুইটির যেকোনাে একটিতে পাসের সম্ভাব্যতা \( \frac{4}{5} \) হলে, তার অঙ্কে পাসের সম্ভাব্যতা কত?
                    <br>উত্তরঃ   \( \frac{4}{9} \)<br><br>
                    9. 10 থেকে 30 পর্যন্ত স্বাভাবিক সংখ্যাগুলাে হতে যেকোনাে একটিকে ইচ্ছামত নিলে সেই সংখ্যাটি মৌলিক ,
                    অথবা 5 এর গুণিতক হওয়ার সম্ভাব্যতা নির্ণয় কর। 
                    <br>উত্তরঃ  \( \frac{11}{21}  \)<br><br>
                    10. একটি ব্যাগে 5টি সাদা 7টি লাল এবং 8টি কালাে বল আছে। যদি বিনিময় না করে একটি একটি করে পর পর 4টি বল তুলে নেয়া হয় তবে, সবগুলি বল সাদা হবার সম্ভাব্যতা কত?
                    <br>উত্তরঃ  \( \frac{1}{969}  \)<br><br>
                    11. একটি বাক্সে 6টি সাদা ও 5টি লাল বল আছে। বাক্স হতে পুনঃস্থাপন করে দুটি বল নেয়া হল। কল বুট সালা হওয়ার সম্ভাব্যতা কত?
                    <br>উত্তরঃ  \( \frac{36}{121}  \)<br><br>
                    
                    12.  একটি থলিতে 3টি সাদা এবং 2টি কালাে বল আছে। অপর একটি থলিতে 2টি সাদা এবং 5টি কালাে। বল আছে। নিরপেক্ষভাবে প্রত্যেক থলি হতে একটি করে বল তােলা হল। দুইটি বলের মধ্যে অন্তত একটি সাদা। হওয়ার সম্ভাব্যতা নির্ণয় কর। 
                    <br>উত্তরঃ  \( \frac{5}{7}  \)<br><br>
                    
                    13.  তিনটি একই রকম বাক্সের প্রথমটিতে 4টি সাদা ও 3টি লাল, দ্বিতীয়টিতে 3টি সাদা ও 7টি লাল বল এবং তৃতীয়টিতে 6টি সাদা, 7টি লাল এবং 9টি কালাে বল আছে।।
                    <br>(a)  তৃতীয় বাক্স থেকে এলােমেলােভাবে 3টি বল তুলে নেয়া হল। বলগুলি লাল বা সাদা হওয়ার সম্ভাব্যতা কত?
                    <br>উত্তরঃ  \( \frac{1}{28}  \)<br>
                    <br>(b) সমসম্ভব উপায়ে প্রথম ও দ্বিতীয় বাক্স থেকে একটি বাক্স নির্বাচন করা হল। ঐ বাক্স হতে নিরপেক্ষভাবে একটি বল। টানা হলে, বলটি সাদা হওয়ার সম্ভাব্যতা নির্ণয় কর।
                    <br>উত্তরঃ  \( \frac{61}{140}  \)<br><br>
                    
                    14. একটি ব্যাগে 4টি সাদা এবং 5টি কালাে বল আছে। একজন লােক নিরপেক্ষভাবে তিনটি বল উঠালেন। তিনটি বলই কালাে হওয়ার সম্ভাব্যতা নির্ণয় কর।
                    <br>উত্তরঃ  \( \frac{5}{42}  \)<br><br>
                    
                    15. একটি বাক্সে 5টি লাল ও 10টি সাদা বল আছে। একটি বালক যেমন খুশি টানলে প্রতিবারে (i) দুইটি ভিন্ন। রঙের বল (ii) দুইটি একই রঙের বল পাবার সম্ভাব্যতা কত?
                    <br>উত্তরঃ (i) \( \frac{10}{21}  \) , (ii) \( \frac{11}{21}  \)  <br><br>
                    
                    
                    16. একটি কলেজে একাদশ শ্রেণীর 40 জন ছাত্রের ভিতর 20 জন ফুটবল খেলে, 25 জন ক্রিকেট। খেলে এবং 10 জন ফটবল ও ক্রিকেট খেলে। তাদের মধ্য হতে দৈবচয়নে একজনকে নির্বাচন করা হল। যদি ছেলেটি ফুটবল খেলে, তবে ক্রিকেট খেলার সম্ভাব্যতা কত?
                    <br>উত্তরঃ  \( \frac{1}{2}   \)  <br><br>
                    
                    17.  A ও B এর এককভাবে একটি অঙ্কের সমাধান করতে পারার সম্ভাব্যতা যথাক্রমে \( \frac{1}{3}   \) 
                    এবং \( \frac{1}{4}   \). তারা একত্রে অঙ্কটি সমাধানের চেষ্টা করলে অঙ্কটির সমাধান নির্ণয়ের সম্ভাব্যতা কত? 
                    <br>উত্তরঃ  \(\frac{1}{2} \)<br><br>
                    
                    18. 52 খানা তাসের প্যাকেট হতে একখানা তাস দৈবভাবে উঠানো হল। (i) তসটি লাল টেক্কা হওয়ার সম্ভাব্যতা কত? (ii) তাসটি লাল অথবা টেক্কা হওয়ার সম্ভাব্যতা কত? 
                    <br>উত্তরঃ (i) \( \frac{10}{21}  \) , (ii) \( \frac{11}{21}  \)  <br><br>
                    
                    19. একটি ছক্কা ও দুইটি মুদ্রা একত্রে নিক্ষেপ করা হল। নমুনাক্ষেত্রটি লিখ। (i) 2টি হেড ও জোড় সংখ্যা (ii) ছক্কার 4 পাবার সম্ভাব্যতা নির্ণয় কর।
                    <br>উত্তরঃ (i) \( \frac{1}{8}  \) , (ii) \( \frac{1}{6}  \)  <br><br>
                    
                    20. দুইটি ছক্কা একত্রে নিক্ষেপ করা হলে তাদের নমুনাক্ষেত্র তৈরি কর। দুটি ছয় উঠার সম্ভাব্যতা নির্ণয় কর।
                    <br>উত্তরঃ  \( \frac{1}{36}   \)  <br><br>
                    
                    
                    21. একটি মুদ্রা তিন বার টস করা হল। পর্যায়ক্রমে মুদ্রাটির হেড এবং টেইল পাবার সম্ভাব্যতা নির্ণয় কর।<br>উত্তরঃ  \( \frac{1}{36}   \)  <br><br>
                    <br>উত্তরঃ  \( \frac{1}{2}   \)  <br><br>
                    
                    22. একটি ছক্কা ও দুইটি মুদ্রা একত্রে নিক্ষেপ করা হলে তাদের নমুনাক্ষেত্র তৈরি কর। ছক্কার 4 উঠার সম্ভাব্যতা নির্ণয় কর।।
                    <br>উত্তরঃ  \( \frac{1}{4}   \)  <br><br>
   



                 </div>


            </div>
           




            <hr style="height:2px;border-width:0;color:gray;background-color:red">
  </div>

          <!-- end tabs -->


    
        </div>
    </div>
</div>

</div>


</div> 



@endsection 