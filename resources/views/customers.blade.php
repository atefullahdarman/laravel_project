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
        <button class="btn" id="btn1"><b>ننوتل</b></button>
        <button class="btn" id="btn2"><b>وتل</b></button>
    </div> 
    </nav>
</header>

<div class="section_customers">
  <img src="./images/customer-satisfaction.png" alt="customers photo" id="customers">
  <h2>د مشتریانود معلوماتو مدیریت</h2>
  <ul>
    <li>کارکوونکي به د مشتری شخصی معلومات زیات تازه او حذب کولی شي.</li>
    <li>سیسټم به معلومات لکه نوم، پته، تلیفون، ایمیل، او پېژند اسناد ذخیره کړي.</li>
    <li>د معلومات به په منظم ډول کافی اخیستل کېږي د بیا ترالسه کولو لپاره.</li>
  </ul>
</div>

 <section class="table-container">
  <table>
      <thead>
        <tr>
          <th>نوم</th>
          <th>ایمیل</th>
          <th>فون نمبر</th>
          <th>ادرس</th>
          <th>د پیژندنی سند </th>
          <th>حالت</th>
          <th>عمل</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>عاطف</td>
          <td>atefullah@gmail.com</td>
          <td>0731597286</td>
          <td>وردګ</td>
          <td>پاسپورد</td>
          <td>فعال</td>
          <td>
            <button class="edit-btn">تغیر</button>
            <button class="delete-btn">حذب</button>
            <button class="copy-btn">کافی</button>

          </td>
        </tr>
        <tr>
          <td>عمران</td>
          <td>imaran1212@gmail.com</td>
          <td>0798765432</td>
          <td>کابل</td>
          <td>تذکیره</td>
          <td>غیری فعال</td>
          <td>
            <button class="edit-btn">تغیر</button>
            <button class="delete-btn">حذب</button>
            <button class="copy-btn">کافی</button>
          </td>
        </tr>
        <tr>
          <td>معین</td>
          <td>moien5454@gmail.com</td>
          <td>0789012345</td>
          <td>هیرات</td>
          <td>ماسټر کارد</td>
          <td>فعال</td>
          <td>
            <button class="edit-btn">تغیر</button>
            <button class="delete-btn">حذب</button>
            <button class="copy-btn">کافی</button>
          </td>
        </tr>
         <tr>
          <td>همزه</td>
          <td>hamza0000@gmail.com</td>
          <td>0789098745</td>
          <td>وردګ</td>
          <td>پاسپورد</td>
          <td>فغال</td>
          <td>
           <button class="edit-btn">تغیر</button>
            <button class="delete-btn">حذب</button>
            <button class="copy-btn">کافی</button>
          </td>
        </tr>
         <tr>
          <td>جلیل</td>
          <td>jalil5454@gmail.com</td>
          <td>0780002345</td>
          <td>کابل</td>
          <td>ویزه کارت</td>
          <td>غیری فعال</td>
          <td>
            <button class="edit-btn">تغیر</button>
            <button class="delete-btn">حذب</button>
            <button class="copy-btn">کافی</button>
          </td>
        </tr>
         <tr>
          <td>جلال</td>
          <td>jalal5454@gmail.com</td>
          <td>0780982345</td>
          <td>غزنی</td>
          <td>کارد</td>
          <td>فعال</td>
          <td>
            <button class="edit-btn">تغیر</button>
            <button class="delete-btn">حذب</button>
            <button class="copy-btn">کافی</button>
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

 @vite('resorces/js/customersAPI.js')
 
</main>
</body>
</html>