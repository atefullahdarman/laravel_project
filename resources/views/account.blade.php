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
  @vite('resources/css/account.css')
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

<div class="h2_button_li">
  <img src="./images/check.png" alt="user_accont photo" id="accout_photo">
  <h2> د  حسابونو مدیریت</h2>
  <ul>
    <li>اډمین او کارکوونکی کولی شی د مشتریانوحسابونه جوړ تازه اویا حذف کړی.</li>
    <li>هر حساب به ځانګړی حساب نمبر لري .</li>
    <li>مشتریان به کولی شي خپل حساب بیالنس او حالت په حقیقي وخت کې وګوري.</li>
  </ul>
  <button class="add-btn"><b>د نوی اکونت اضافه ➕</b></button>
</div>
 
<section class="table-container">
  <table>
    <thead>
      <tr>
        <th>اکونت نمبر</th>
        <th>نوم</th>
        <th>ایمیل</th>
        <th>بیالنس</th>
        <th>حالت</th>
        <th>عمل</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1000</td>
          <td> عاطف الله</td>
          <td>atefullahdarman@gmail.com</td>
          <td>افغانی 90000</td>
          <td> فعال</td>
          <td class="button_edit_dele">
            <button class="edit-btn">تغیر</button>
            <button class="delete-btn">حذف</button>
          </td>
        </tr>
        <tr>
          <td>1001</td>
          <td> بلال</td>
          <td>bilal123@gmail.com</td>
          <td>افغانی 50000</td>
          <td> فعال</td>
          <td>
            <button class="edit-btn">تغیر</button>
            <button class="delete-btn">حذف</button>
          </td>
        </tr>
        <tr>
          <td>1002</td>
          <td>فرهاد</td>
          <td>farhad111@gmail.com</td>
          <td>افغانی 35000</td>
          <td>غیر فعال</td>
          <td>
            <button class="edit-btn">تغیر</button>
            <button class="delete-btn">حذف</button>
          </td>
        </tr>
        <tr>
          <td>1003</td>
          <td>سمیم</td>
          <td>samim222@gmail.com</td>
          <td>افغانی 72000</td>
          <td> فعال</td>
          <td>
            <button class="edit-btn">تغیر</button>
            <button class="delete-btn">حذف</button>
          </td>
        </tr>
        <tr>
          <td>1004</td>
          <td>علی</td>
          <td>ali777@gmail.com</td>
          <td>افغانی 7287</td>
          <td>غیر فعال</td>
          <td>
            <button class="edit-btn">تغیر</button>
            <button class="delete-btn">حذف</button>
          </td>
        </tr>
        <tr>
          <td>1005</td>
          <td>نومان</td>
          <td>nooma222@gmail.com</td>
          <td>افغانی 8000</td>
          <td>غیر فعال</td>
          <td class="button">
            <button class="edit-btn"  >تغیر</button>
            <button class="delete-btn" >حذف</button>
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