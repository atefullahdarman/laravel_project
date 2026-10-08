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
  @vite('resources/css/report.css')
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
<section class="report">
    <img src="./images/health-check.png" alt="report photo" id="report_photo">
    <h2>د راپور جوړونه</h2>
    <ul>
       <li>اډمین به کولی شی ورځنی، میاشتنی، او کلنی مالی راپورونه جوړ کړي</li>
        <li> په راپورونو کی به د معاملو، پورونو، او د مشتریانو خالصه معلومات شامل وي</li>
        <li>کارکوونکی به یوازی محدودو راپورونوته السرسی لري</li>
    </ul>

</section>
<h2 id="card_h2">ټول راپورونه</h2>

<section class="cards">
       
    <div class="card">
        <img src="./images/transfer.png" alt="photo" id="card_photo">
        <h3> ټولی کلنی معاملی</h3>
        <p>3200</p>
    </div>

    <div class="card">
        <img src="./images/transacti.png" alt="photo" id="card_photo">
        <h3>دیدی میاشتی معاملی</h3>
        <p>266</p>
    </div>

    <div class="card">
        <img src="./images/revenue.png" alt="photo" id="card_photo">
        <h3>ټوټل عواید</h3>
        <p>1600000 افغانی</p>
    </div>

    <div class="card">
        <img src="./images/customer-satisfaction.png" alt="photo" id="card_photo">
        <h3>د ټول مشتریانو شمیر</h3>
        <p>3100</p>
    </div>

    <div class="card">
        <img src="./images/venture-capital.png" alt="photo" id="card_photo">
        <h3>قبول شوی پورونه</h3>
        <p>80</p>
    </div>

    <div class="card">
        <img src="./images/check.png" alt="photo" id="card_photo">
        <h3>نوی اکونتونه</h3>
        <p>50</p>
    </div> 
    
    <div class="card">
        <img src="./images/team.png" alt="photo" id="card_photo">
        <h3>د ټولو کارکونکو میاشتنی معاشونه</h3>
        <p>120000 افغانی</p>
    </div>
</section>

<section class="table-container">

    <label for="reportType">راپور انتخاب کړي:</label>
    <select id="reportType">
        <option>ورځنی </option>
        <option>میاشتی</option>
        <option>کلنی</option>
    </select>
   
    <table>
        <thead>
            <tr>
                <caption><b> مالی راپور</b></caption>
                <th>ریفورټ ایډي</th>
                <th>نوعه</th>
                <th>تاریخ</th>
                <th>ټولی معاملی</th>
                <th>ټول عواید</th>
                <th>عمل</th>
            </tr>
      </thead>
      <tbody>
            <tr>
                <td>R1001</td>
                <td>ورځنی</td>
                <td>2026-03-09</td>
                <td>220</td>
                <td>افغانی 150000</td>
                <td>
                    <button class="view-btn">کتل</button>
                    <button class="export-btn">صادرول</button>
                </td>
            </tr>
            <tr>
                <td>R1002</td>
                <td>میاشتی</td>
                <td>2026-02</td>
                <td>9200 </td>
                <td>افغانی 1250000</td>
                <td>
                    <button class="view-btn">کتل</button>
                    <button class="export-btn">صادرول</button>
                </td>
            </tr>
            <tr>
                <td>R1003</td>
                <td>کلنی</td>
                <td>2025</td>
                <td>110500</td>
                <td>افغانی 15000000</td>
                <td>
                    <button class="view-btn">کتل</button>
                    <button class="export-btn">صادرول</button>
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


