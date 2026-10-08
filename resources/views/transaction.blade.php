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
  @vite('resources/css/transaction.css')
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

 <div class="li_transaction">
  <img src="./images/transfer.png" alt="user_accont photo" id="tran_photo">
  <h2> د معاملو مدیریت</h2>
  <ul>
      <li>امفلویی به د مشتریانو پیسی زخیره کو ی را ویباسی او انتقال کوی ي.</li>
      <li>د هری معاملې وروسته به بیالنسونه په اتومات ډول نوی کیږی.</li>
      <li>د بریالی معاملی وروسته به مشتری ته د ایمیل یا مسیج له لاری خبر ورکړل شي.</li>
  </ul>
 </div>
<section class="table-container">
  <table>
    <thead>
      <tr>
        <th>د معاملی ایډی</th>
        <th>د اکونت نمبر</th>
        <th>نوم</th>
        <th>ډول</th>
        <th>اندازه</th>
        <th>تاریخ</th>
        <th>حالتونه</th>
        <th>عمل</th>
      </tr>
      </thead>
      <tbody>

      <tr>
        <td>TX1001</td>
        <td>1001</td>
        <td>عاطف </td>
        <td>زخیره کول</td>
        <td>افغانی 10000</td>
        <td>2026-03-09</td>
        <td>بشپړ</td>
        <td>
          <button class="view-btn">کتل</button>
          <button class="approve-btn">اجازه</button>
          <button class="reject-btn">لغوه</button>
        </td>
      </tr>

      <tr>
        <td>TX1002</td>
        <td>1002</td>
        <td>فرهاد</td>
        <td>انتقال</td>
        <td>افغانی 5000</td>
        <td>2026-03-08</td>
        <td>نا مکمل</td>
        <td>
          <button class="view-btn">کتل</button>
          <button class="approve-btn">اجازه</button>
          <button class="reject-btn">لغوه</button>
        </td>
      </tr>
      <tr>
        <td>TX1003</td>
        <td>1003</td>
        <td>بلال</td>
        <td>زخیره کول</td>
        <td>افغانی 20000</td>
        <td>2026-03-07</td>
        <td>بشپړ</td>
        <td>
          <button class="view-btn">کتل</button>
          <button class="approve-btn">اجازه</button>
          <button class="reject-btn">لغوه</button>
        </td>
      </tr>
        <tr>
        <td>TX1004</td>
        <td>1004</td>
        <td>عبید الله</td>
        <td>انتقال</td>
        <td>افغانی 10000</td>
        <td>2026-07-07</td>
        <td>نا مکمل</td>
        <td>
          <button class="view-btn">کتل</button>
          <button class="approve-btn">اجازه</button>
          <button class="reject-btn">لغوه</button>
        </td>
      </tr>
      <tr>
        <td>TX1005</td>
        <td>1005</td>
        <td>ذکی الله</td>
        <td>ایستل</td>
        <td>افغانی 12000</td>
        <td>2026-05-10</td>
        <td>بشپړ</td>
        <td>
          <button class="view-btn">کتل</button>
          <button class="approve-btn">اجازه</button>
          <button class="reject-btn">لغوه</button>
        </td>
      </tr>
      <tr>
        <td>TX1003</td>
        <td>1003</td>
        <td>شمس الرحمن</td>
        <td>ذخیره</td>
        <td>افغانی 70000</td>
        <td>2026-09-09</td>
        <td>نا مکمل</td>
        <td>
          <button class="view-btn">کتل</button>
          <button class="approve-btn">اجازه</button>
          <button class="reject-btn">لغوه</button>
        </td>
      </tr>
      </tbody>
    </table>
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
</body>
</html>