<!DOCTYPE html>
<html lang="ps" dir="rtl">
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="./images/1.png"type="image/x-icon">
  <meta name="description" content="this is bank static and degital system ">
  <meta name="author" content="Atefullah">
  <meta name="keywords" content="bank,online,transactions,money,account,loan,icons,report,customer">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> بانک مدیریت سیسټم </title>
  
  @vite('resources/css/style.css')
  @vite('resources/css/customers.css')
</head>
<body>
<main> 
<!-- heder -->
    <header class="header">
    <nav class="nav">
      <!-- hambarger -->
    <input type="checkbox" id="menu-toggle">
    <label for="menu-toggle" class="menu-icon">&#9776;</label>

    <a href="index.html"><img src="./images/symbols.png" alt="logo" id="logo"></a>

    <ul class="menu">      
                <li><a href="{{ route('index') }}">کور پاڼه</a></li>
                <li><a href="{{ route('accounts.index') }}">حسابونه</a></li>
                <li><a href="{{ route('transactions.index') }}"> معاملې</a></li>
                <li><a href="{{ route('customers.index') }}">مشتریان</a></li>
                <li><a href="{{ route('loans.index') }}">پورونه</a></li>
                <li><a href="{{ route('reports') }}"> راپورونه</a></li>
                <li><a href="{{ route('about_me') }}"> زموږ په اړه</a></li>
                <li><a href="{{ route('contact_as') }}"> موږ سره اړیکه</a></li>

    </ul>
    <div class="buttons">
       <a href="./login.html"><button class="btn" id="btn1"><b>ننوتل</b></button></a>
        <button class="btn" id="btn2"><b>وتل</b></button>
    </div>   
    </nav>
</header>

<!-- hero -->
<section class="hero">
    <div class="hero-text">
        <h2>بانک مدیریت سیسټم</h2>
        <p>دا سیستم داسی دی چی دا د بانګ منجمنټ سیستم د جوړولو اړتیاوی او اصلی موخی بیان کړی چی یو بانکی
            سیستم څنګه کار کوی څنګه جوړ شوی د کومو فعالیتونو لپاره استعمال کیږی او داسی نور. دا سیستم داسی جوړ
            شوی چی غواړی ټول بانکی فعالیتونه اوتومات کړی 
        </p>

        <div class="hero-buttons">
            <button id="buttone" class="primary_butt"><b>حساب جوړ کړي</b></button>
            <button id="buttone" class="secondary_butt"><b>نور معلومات⬅️</b></button>
        </div>

    </div>

    <div class="hero-image">
        <img src="./images/bank.png" alt="bank photo">
    </div>    
</section>

<!-- services -->
 <div>
    <h2 class="section-title">دبانک مدیریت سیستم مهم کارونه </h2> 
</div>
<section class="grid_contener">
     
</section>

 <!-- API from Customers -->
  <div>
    <h2 class="section-title">مشتریانو API</h2> 
</div>
<section class="customers_container">

</section>


<!-- declear section -->
<section class="section_photo_img">

</section>
<!-- video -->
  <div class="h2_div">
 <h2 class="h2_opinia">ډیمو د بانک لپاره</h2>
 </div>
 <section class="demo_video">
   
</section> 

<!-- customer_opinion -->
 <div class="h2_div">
 <h2 class="h2_opinia">د مشتریانو نظرونه</h2>
 </div>
<section class="customer_opinion">

</section>
<!-- FAQ -->
<section class="FAQ_Section">
    
</section>

<!-- footer -->
<footer class="footer">
  <div class="Social_link">
    <h4>سوشل میډیا لینکونه</h4>  
    <ul>
      <a href="https://www.facebook.com/profile.php?id=61581411182010&mibextid=rS40aB7S9Ucbxw6v"><li class="icone"><img src="./images/communication.png" alt="facebook" class="imge"></li></a>
      <a href="https://youtube.com/@atefullahdarman2024?si=0NYU_P_U1NYrstaZ"><li class="icone"><img src="./images/youtube.png" alt="youtube" class="imge"></li></a>
      <a href="https://www.linkedin.com/in/atefullah-zafar-zoy-2a7019399?utm_source=share_via&utm_content=profile&utm_medium=member_android"><li class="icone"><img src="./images/linkedin.png" alt="linkedin" class="imge"></li></a>
      <a href="https://wa.me/93731597286"><li class="icone"><img src="./images/whatsapp.png" alt="whatsapp" class="imge"></li></a>
    </ul>
  </div>
  <div class="Contact">
    <h4>زموږ شره اړیکه ونیسی</h4> 
    <p id="footer_p">Email: atefullahdarman@gmail.com</p>
    <p id="footer_p">Phone: 0731507286</p>
  </div>
  <hr>
  <div class="address">
  <p>Copyrigth © 2026 Online Bank</p>
  <p>ادرس : کندهار افغانستان</p>
  </div>
</footer>
</main>

 @vite('resources/js/home.js')
 @vite('resources/js/customersAPI.js')
</body>
</html>

