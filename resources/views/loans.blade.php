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
  @vite('resources/css/loans.css')
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

<div class="loan_section">
    <img src="./images/loan.png" alt="loan photo" id="loan">
    <h2>د پور مدیریت</h2>

    <ul>
        <li>مشتریان کولی شی د پور غوښتنه وکړی داړینو معلوماتو په وړاندې کولو سره</li>
        <li>کارکوونکی به د پور غوښتنی وڅېړی او اډمین ته به یی واستوي</li>
        <li>ډمین به د اړتیا پر بنسټ د پور غوښتنه ومنی یا رد کړي</li>
  </ul>
</div>

 <section class="table-container">
    <table>
        <thead>
            <tr>
                <caption><b>د پور غوښتنه</b></caption>
                <th>د پور نمبر</th>
                <th>مشتری</th>
                <th>اندازه</th>
                <th>تاریخ</th>
                <th>حالت</th>
                <th>عمل</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>L1001</td>
                <td>عاطف</td>
                <td>افغانی 50000</td>
                <td>2026-03-09</td>
                <td>انتظار کی</td>
                <td>
                    <button class="view-btn">کتل</button>
                    <button class="approve-btn">اجازه</button>
                    <button class="reject-btn">لغوه</button>
                </td>
            </tr>

            <tr>
                <td>L1002</td>
                <td>نومان</td>
                <td>افغانی 35000</td>
                <td>2026-03-08</td>
                <td>قبول شو</td>
                <td>
                    <button class="view-btn">کتل</button>
                    <button class="approve-btn">اجازه</button>
                    <button class="reject-btn">لغوه</button>
                </td>
            </tr>
            <tr>
                <td>L1003</td>
                <td>ذکی الله</td>
                <td>افغانی 72000</td>
                <td>2026-03-07</td>
                <td>لغوه</td>
                <td>
                    <button class="view-btn">کتل</button>
                    <button class="approve-btn">اجازه</button>
                    <button class="reject-btn">لغوه</button>
                </td>
            </tr>
            <tr>
                <td>L1004</td>
                <td>بلال</td>
                <td>افغانی 30600</td>
                <td>2026-07-11</td>
                <td>قبول شو</td>
                <td>
                    <button class="view-btn">کتل</button>
                    <button class="approve-btn">اجازه</button>
                    <button class="reject-btn">لغوه</button>
                </td>
            </tr>
            <tr>
                <td>L1005</td>
                <td>فرهاد</td>
                <td>افغانی 30000</td>
                <td>2026-01-18</td>
                <td>انتظار کی</td>
                <td>
                    <button class="view-btn">کتل</button>
                    <button class="approve-btn">اجازه</button>
                    <button class="reject-btn">لغوه</button>
                </td>
            </tr>
            <tr>
                <td>L1006</td>
                <td>عمران</td>
                <td>افغانی 70000</td>
                <td>2026-06-17</td>
                <td>لغوه</td>
                <td>
                    <button class="view-btn">کتل</button>
                    <button class="approve-btn">اجازه</button>
                    <button class="reject-btn">لغوه</button>
                </td>
            </tr>
      </tbody>
    </table>
</section>

</div>
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