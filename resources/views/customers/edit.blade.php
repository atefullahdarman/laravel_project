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
       <a href="./login.html"><button class="btn" id="btn1"><b>ننوتل</b></button></a>
        <button class="btn" id="btn2"><b>وتل</b></button>
    </div>   
    </nav>
</header>


<section class="form-container">

    <h2>د مشتری معلومات تغیرول</h2>


    <form class="form_class">

        <label for="name">
            نوم
        </label>

        <input
            type="text"
            id="name"
            name="name"
            value="عاطف"
        >


        <label for="email">
            ایمیل
        </label>

        <input
            type="email"
            id="email"
            name="email"
            value="atefullah@gmail.com"
        >


        <label for="phone">
            فون نمبر
        </label>

        <input
            type="text"
            id="phone"
            name="phone"
            value="0731597286"
        >


        <label for="address">
            ادرس
        </label>

        <input
            type="text"
            id="address"
            name="address"
            value="وردګ"
        >


        <label for="identity_document">
            د پېژندنې سند
        </label>

        <select
            id="identity_document"
            name="identity_document"
        >

            <option value="passport" selected>
                پاسپورت
            </option>

            <option value="tazkira">
                تذکره
            </option>

            <option value="master_card">
                ماسټر کارډ
            </option>

            <option value="visa_card">
                ویزه کارت
            </option>

            <option value="card">
                کارت
            </option>

        </select>


        <label for="status">
            حالت
        </label>

        <select
            id="status"
            name="status"
        >

            <option value="active" selected>
                فعال
            </option>

            <option value="inactive">
                غیر فعال
            </option>

        </select>


        <br><br>


        <button type="button" class="button">
            تغیرات ثبتول
        </button>


        <button
            type="button" class="reject-btn"
            onclick="window.location.href='{{ route('customers.index') }}'"
        >
            لغوه
        </button>

    </form>

</section>


</main>

</body>
</html>