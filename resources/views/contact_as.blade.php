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
  @vite('resources/css/contact_as.css')
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
        <button class="btn" id="btn1"><b>ننوتل</b></button>
        <button class="btn" id="btn2"><b>وتل</b></button>
    </div>   
    </nav>
</header>
<!-- contact as section -->
<section class="contact-container">
    <h2>موږ سره اړیکه ونیسی</h2>
    <p>که کومه پوښتنه لری، مهرباني وکړی لاندې فارم ډک کړی</p>
    
    <form id="bankContactForm">
        <div class="input-group">
            <label>بشپړ نوم:</label>
            <input type="text" id="fullName" placeholder="خپل نوم دلته ولیکئ">
            <sapn id="nameError" class="error-text"></sapn>
        </div>

        <div class="input-group">
            <label>ایمیل ادرس:</label>
            <input type="email" id="email" placeholder="gmail@mail.com">
            <span id="emailError" class="error-text"></span>
        </div>

        <div class="input-group">
            <label>موضوع:</label>
            <select id="subject">
                <option value="">یو انتخاب غوره کړی</option>
                <option value="account">د حساب ستونزه</option>
                <option value="loan">د پور (Loan) په اړه پوښتنه</option>
                <option value="cuostomers">د مشتریانو ستونزه</option>
                <option value="operations">د عملیاتو ستونزه</option>
                <option value="About me">رموږ يه اړه کوم نظر</option>
                <option value="technecal">تخنیکي مرسته</option>
            </select>
            <span id="subjectError" class="error-text"></span>
        </div>

        <div class="input-group">
            <label>پیغام:</label>
            <textarea id="message" rows="5" placeholder="خپل پیغام دلته ولیکئ..."></textarea>
            <span id="messageError" class="error-text"></span>
        </div>
        <button type="button" onclick="validateContactForm()" class="button1">پیغام واستوی</button>
    </form>
    <div id="successMessage" class="success-box" style="display:none;">
        ستاسو پیغام په بریالیتوب سره واستول شو .
    </div>
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

  @vite('resources/js/contact_as.js')
</body>
</html>