
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
  @vite('resources/css/aboute.css')
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

<section class="section_about">
    <h2>دبانک سیسټم پیژندنه</h2>
    <p class="h2_p">
        د بانک د مدیریت سیستم یو داسی سیسټم دی چې د بانک ټول اصلي فعالیتونه اتومات کوي او اداره کوي .دا
        سیستم د ادمین ، بانکي کارکوونکو او پېرودونکو لپاره یوګد
        پالتفورم برابروي، تر څو دوی یو ځای راکړې ورکړې ترسره کړي، او حس ابونه مدیریت کړی.او د بانک کوم فعالیتونه چی دی هغه تنظیم کړی.
    </p>
    
    <h3>  دیدی سیستم موخی</h3>
    <ul>
        <li>اوتومات کول د معاملو. </li>
        <li>دقیق او باوری معلومات ثبت کول. </li>
        <li>چټک او موثر خدامات وړاندی کول. </li>
        <li>خوندیتوب د مشتری د معلوماتو او حصابونو.</li>
        <li>د راپورونو جوړول،اسانه مدیریت،د مشتریانو رضایت.</li>
    </ul>

    <h3>د سیستم اصلي برخې</h3>
    <ul>
      <h4>۱ د بانکی فعالیتونو اتومات کول: </h4>
      <li>د ټولو السي بانکي فعالیتونو لکه د حساب جوړول، معاملې، او د راپورونوجوړول اتومات کوی</li>
      <h4>۲ خوندي مالي اوفریشن اجراکول: </h4>
      <li>د مشتریانو د معلوماتو او مالي ریکارډونو د خوندیتوب او محرمیت ډاډ ترالسه کول.</li>
      <h4>۳ د معاملو مؤثر مدیریت: </h4>
      <li>د پیسو د زخیره کولو، را ایستلو او د پیسو د انتقال لپاره چټک او دقیق پروسس برابرول.</li>
      <h4>۴ د مشتریانو آسانتیا: </h4>
      <li>مشتریانو ته دا زمینه برابرول چېپه اسانی سره بانک ته والړ شي،او خپل بانکي کارونه ترسره کړي. </li>
      <h4>۵ د تېروتنو کمول:</h4>
      <li>د ټرانزکشنونواو ریکارډونو د اتومات کولو له الرې د انساني تېروتنو کمول.</li>
      <h4>۶ شفافیت او راپور جوړونه:</h4>
      <li>د مالي معاملو تفصیلي راپورونه جوړول ترڅو د ښی څارنې او پریکړی نیولو لپاره مرسته وکړی.</li>
      <h4>۷ پراختیا او انعطاف پذیري:</h4>
      <li>د داسې سیسټم جوړول چې په راتلونکي کې د نوو فیچرونو یا د نورو څانګو د زیاتولو وړتیا ولري. </li>
    </ul>
    <br>
<section class="table-container">
  <table>
    <thead>
      <tr>
        <caption><b>ګټه اخیستونکی</b></caption>
        <th>ګټه اخیستونکی</th>
        <th>دنده</th>
        <th>مسولیت</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>مدیر</td>
          <td>دسیستم کنټرولول.</td>
          <td>د ټولو،کارکونکو،مشتریانو،اداره کول ،دسیستم فعالیت څارل،اودټول بانک راپورونه جوړول.</td>
        </tr>
        <tr>
          <td>کارکونکی</td>
          <td>د بانکی عملیو اجراکونکی او مسولین. </td>
          <td>د مشتریانو حصابونه اداره کول،دپیسو زخیره کول،را ایستل،اودهغو انتقالول،د مشتریانو او دهغوی په قرضونو سره دیدویحصابونه نوی کولد مشتریانو مرسته کول په بانکی چارو کی.</td>
        </tr>
        <tr>
          <td>مشتریان</td>
          <td>خدامات چمتو کونکی.</td>
          <td>خپل د بانک اکونټ جوړول،خپلی پیسی بانک کی زخیره کول،دهغو رایستل،او بل اکونت ته لیکل،دبانکرول او قوانین مراعات کول،دخبلمالی حصاب لیدل او د پور غوښتنه کول.</td>
        </tr>
        <tr>
          <td>د سیستم جوړونکی</td>
          <td>د سیستم طرح کونکی،ډیزاین،اوجوړونکی.</td>
          <td>د سیستم برخی ډیزاین کول او پلیکول،دسافټویر ثبات او د معلوماتوډاډمن کول،تیروتنی اصالح کول اوفعالیت ښه کول.</td>
        </tr>
        <tr>
          <td>حصابرس</td>
          <td>مالی څیړونکی.</td>
          <td>د سیستم د راپورونو کتنه،د معاملو.او حصابونو پلټنه،د تیروتنو یادرغلیو پیژندنه،دا هرڅه د مالی مقرراتو سره سم یقینی کول.</td>
        </tr>
      </tbody>
    </table>
</section>
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