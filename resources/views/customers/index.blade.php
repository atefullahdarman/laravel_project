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

    <!-- Header -->
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


<div class="section_customers">

    <img
        src="{{ asset('images/customer-satisfaction.png') }}"
        alt="customers photo"
        id="customers"
    >

    <h2>د مشتریانو د معلوماتو مدیریت</h2>

    <ul>
        <li>کارکوونکي به د مشتری شخصي معلومات زیات، تازه او حذف کولی شي.</li>
        <li>سیسټم به معلومات لکه نوم، پته، تلیفون، ایمیل او پېژندنې اسناد ذخیره کړي.</li>
        <li>معلومات به په منظم ډول ساتل کېږي ترڅو بیا ترلاسه شي.</li>
    </ul>

</div>


<section class="table-container">

    <div style="margin-bottom: 20px;">

        <button
            class="btn_add"
            onclick="window.location.href='{{ route('customers.create') }}'"
        >
            <b>نوی مشتری اضافه ➕</b>
        </button>

    </div>


    <table>

        <thead>
            <tr>
                <th>نوم</th>
                <th>ایمیل</th>
                <th>فون نمبر</th>
                <th>ادرس</th>
                <th>د پېژندنې سند</th>
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
                <td>پاسپورت</td>
                <td>فعال</td>

                <td>

                    <button
                        class="view-btn"
                        onclick="window.location.href='{{ route('customers.show', ['customer' => 1]) }}'"
                    >
                        کتل
                    </button>

                    <button
                        class="show"
                        onclick="window.location.href='{{ route('customers.edit', ['customer' => 1]) }}'">
                        تغیر
                    </button>

                </td>
            </tr>


            <tr>
                <td>عمران</td>
                <td>imaran1212@gmail.com</td>
                <td>0798765432</td>
                <td>کابل</td>
                <td>تذکره</td>
                <td>غیر فعال</td>

                <td>

                    <button
                        class="view-btn"
                        onclick="window.location.href='{{ route('customers.show', ['customer' => 2]) }}'"
                    >
                        کتل
                    </button>

                    <button
                        class="show"
                        onclick="window.location.href='{{ route('customers.edit', ['customer' => 1]) }}'">
                        تغیر
                    </button>

                </td>
            </tr>


            <tr>
                <td>معین</td>
                <td>moien5454@gmail.com</td>
                <td>0789012345</td>
                <td>هیرات</td>
                <td>ماسټر کارډ</td>
                <td>فعال</td>

                <td>

                    <button
                        class="view-btn"
                        onclick="window.location.href='{{ route('customers.show', ['customer' => 3]) }}'"
                    >
                        کتل
                    </button>

                    <button
                        class="show"
                        onclick="window.location.href='{{ route('customers.edit', ['customer' => 1]) }}'">
                        تغیر
                    </button>

                </td>
            </tr>


            <tr>
                <td>همزه</td>
                <td>hamza0000@gmail.com</td>
                <td>0789098745</td>
                <td>وردګ</td>
                <td>پاسپورت</td>
                <td>فعال</td>

                <td>

                    <button
                        class="view-btn"
                        onclick="window.location.href='{{ route('customers.show', ['customer' => 4]) }}'"
                    >
                        کتل
                    </button>

                    <button
                        class="show"
                        onclick="window.location.href='{{ route('customers.edit', ['customer' => 1]) }}'">
                        تغیر
                    </button>

                </td>
            </tr>


            <tr>
                <td>جلیل</td>
                <td>jalil5454@gmail.com</td>
                <td>0780002345</td>
                <td>کابل</td>
                <td>ویزه کارت</td>
                <td>غیر فعال</td>

                <td>

                    <button
                        class="view-btn"
                        onclick="window.location.href='{{ route('customers.show', ['customer' => 5]) }}'"
                    >
                        کتل
                    </button>

                    <button
                        class="show"
                        onclick="window.location.href='{{ route('customers.edit', ['customer' => 1]) }}'">
                        تغیر
                    </button>

                </td>
            </tr>


            <tr>
                <td>جلال</td>
                <td>jalal5454@gmail.com</td>
                <td>0780982345</td>
                <td>غزني</td>
                <td>کارت</td>
                <td>فعال</td>

                <td>

                    <button
                        class="view-btn"
                        onclick="window.location.href='{{ route('customers.show', ['customer' => 6]) }}'"
                    >
                        کتل
                    </button>

                   <button
                        class="show"
                        onclick="window.location.href='{{ route('customers.edit', ['customer' => 1]) }}'">
                        تغیر
                    </button>

                </td>
            </tr>

        </tbody>

    </table>

</section>


<footer class="footer">

    <div class="Social_link">

        <h4>سوشل میډیا لینکونه</h4>

        <ul>

            <a href="https://www.facebook.com/">
                <li class="icone">
                    <img src="{{ asset('images/communication.png') }}" alt="facebook" class="imge">
                </li>
            </a>

            <a href="https://youtube.com/">
                <li class="icone">
                    <img src="{{ asset('images/youtube.png') }}" alt="youtube" class="imge">
                </li>
            </a>

            <a href="https://www.linkedin.com/">
                <li class="icone">
                    <img src="{{ asset('images/linkedin.png') }}" alt="linkedin" class="imge">
                </li>
            </a>

            <a href="https://wa.me/93731597286">
                <li class="icone">
                    <img src="{{ asset('images/whatsapp.png') }}" alt="whatsapp" class="imge">
                </li>
            </a>

        </ul>

    </div>

    <div class="Contact">

        <h4>زموږ سره اړیکه ونیسئ</h4>

        <p id="footer_p">Email: atefullahdarman@gmail.com</p>

        <p id="footer_p">Phone: 0731507286</p>

    </div>

    <hr>

    <div class="address">

        <p>Copyright © 2026 Online Bank</p>

        <p>ادرس: کندهار افغانستان</p>

    </div>

</footer>

</main>

</body>
</html>


