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


<div class="loan_section">

    <img
        src="{{ asset('images/loan.png') }}"
        alt="loan photo"
        id="loan"
    >

    <h2>د پور مدیریت</h2>

    <ul>

        <li>
            مشتریان کولی شي د پور غوښتنه وکړي د اړینو معلوماتو په وړاندې کولو سره.
        </li>

        <li>
            کارکوونکي به د پور غوښتنې وڅېړي او اډمین ته به یې واستوي.
        </li>

        <li>
            اډمین به د اړتیا پر بنسټ د پور غوښتنه ومني یا رد کړي.
        </li>

    </ul>

</div>

<button
            class="btn_add"
            onclick="window.location.href='{{ route('loans.create') }}'">
            <b>نوی پور اضافه ➕</b>
        </button>
<section class="table-container">
    <div style="margin-bottom: 20px;">

    </div>
    <table>

        <thead>

            <tr>

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

                <td>انتظار کې</td>

                <td>

                    <button
                        class="view-btn"
                        onclick="window.location.href='{{ route('loans.show', ['loan' => 1]) }}'"
                    >
                        کتل
                    </button>

                    <button
                        class="show"
                        onclick="window.location.href='{{ route('loans.edit', ['loan' => 1]) }}'">
                        تغیر
                    </button>

                </td>

            </tr>


            <tr>

                <td>L1002</td>

                <td>نومان</td>

                <td>افغانی 35000</td>

                <td>2026-03-08</td>

                <td>قبول شو</td>

                <td>

                    <button
                        class="view-btn"
                        onclick="window.location.href='{{ route('loans.show', ['loan' => 2]) }}'"
                    >
                        کتل
                    </button>

                     <button
                        class="show"
                        onclick="window.location.href='{{ route('loans.edit', ['loan' => 1]) }}'">
                        تغیر
                    </button>

                </td>

            </tr>


            <tr>

                <td>L1003</td>

                <td>ذکي الله</td>

                <td>افغانی 72000</td>

                <td>2026-03-07</td>

                <td>لغوه</td>

                <td>

                    <button
                        class="view-btn"
                        onclick="window.location.href='{{ route('loans.show', ['loan' => 3]) }}'"
                    >
                        کتل
                    </button>

                     <button
                        class="show"
                        onclick="window.location.href='{{ route('loans.edit', ['loan' => 1]) }}'">
                        تغیر
                    </button>

                </td>

            </tr>


            <tr>

                <td>L1004</td>

                <td>بلال</td>

                <td>افغانی 30600</td>

                <td>2026-07-11</td>

                <td>قبول شو</td>

                <td>

                    <button
                        class="view-btn"
                        onclick="window.location.href='{{ route('loans.show', ['loan' => 4]) }}'"
                    >
                        کتل
                    </button>

                     <button
                        class="show"
                        onclick="window.location.href='{{ route('loans.edit', ['loan' => 1]) }}'">
                        تغیر
                    </button>

                </td>

            </tr>


            <tr>

                <td>L1005</td>

                <td>فرهاد</td>

                <td>افغانی 30000</td>

                <td>2026-01-18</td>

                <td>انتظار کې</td>

                <td>

                    <button
                        class="view-btn"
                        onclick="window.location.href='{{ route('loans.show', ['loan' => 5]) }}'"
                    >
                        کتل
                    </button>

                     <button
                        class="show"
                        onclick="window.location.href='{{ route('loans.edit', ['loan' => 1]) }}'">
                        تغیر
                    </button>

                </td>

            </tr>


            <tr>

                <td>L1006</td>

                <td>عمران</td>

                <td>افغانی 70000</td>

                <td>2026-06-17</td>

                <td>لغوه</td>

                <td>

                    <button
                        class="view-btn"
                        onclick="window.location.href='{{ route('loans.show', ['loan' => 6]) }}'"
                    >
                        کتل
                    </button>

                    <button
                        class="show"
                        onclick="window.location.href='{{ route('loans.edit', ['loan' => 1]) }}'">
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
                    <img
                        src="{{ asset('images/communication.png') }}"
                        alt="facebook"
                        class="imge"
                    >
                </li>
            </a>

            <a href="https://youtube.com/">
                <li class="icone">
                    <img
                        src="{{ asset('images/youtube.png') }}"
                        alt="youtube"
                        class="imge"
                    >
                </li>
            </a>

            <a href="https://www.linkedin.com/">
                <li class="icone">
                    <img
                        src="{{ asset('images/linkedin.png') }}"
                        alt="linkedin"
                        class="imge"
                    >
                </li>
            </a>

            <a href="https://wa.me/93731597286">
                <li class="icone">
                    <img
                        src="{{ asset('images/whatsapp.png') }}"
                        alt="whatsapp"
                        class="imge"
                    >
                </li>
            </a>

        </ul>

    </div>


    <div class="Contact">

        <h4>زموږ سره اړیکه ونیسئ</h4>

        <p id="footer_p">
            Email: atefullahdarman@gmail.com
        </p>

        <p id="footer_p">
            Phone: 0731507286
        </p>

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

