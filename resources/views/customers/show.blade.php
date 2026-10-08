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
    <header class="header">

        <nav class="nav">

            <!-- Hamburger -->
            <input type="checkbox" id="menu-toggle">

            <label for="menu-toggle"
                   class="menu-icon">
                &#9776;
            </label>

            <!-- Logo -->
            <a href="{{ route('index') }}">
                <img src="{{ asset('images/symbols.png') }}"
                     alt="logo"
                     id="logo">
            </a>

            <!-- Menu -->
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

            <!-- Buttons -->
            <div class="buttons">

                <button class="btn" id="btn1">
                    <b>ننوتل</b>
                </button>

                <button class="btn" id="btn2">
                    <b>وتل</b>
                </button>

            </div>

        </nav>

    </header>


<section class="table-container">

    <h2>د مشتری بشپړ معلومات</h2>

    <table>

        <thead>

            <tr>
                <th>نوم</th>
                <th>ایمیل</th>
                <th>فون نمبر</th>
                <th>ادرس</th>
                <th>د پېژندنې سند</th>
                <th>حالت</th>
            </tr>

        </thead>


        <tbody>

            <tr>

                <td>عاطف</td>

                <td>atefullah@gmail.com</td>

                <td>0731597286</td>

                <td>وردګ</td>

                <td>پاسپورت</td>

                <td>فعال</td>

            </tr>

        </tbody>

    </table>


    <br>


   


    <button
        type="button" class="button"
        onclick="window.location.href='{{ route('customers.index') }}'"
    >
        بېرته مشتریانو ته
    </button>

</section>


</main>

</body>
</html>
