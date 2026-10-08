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


    <!-- Account Information -->

    <div class="h2_button_li">

        <img src="{{ asset('images/check.png') }}"
             alt="user account photo"
             id="accout_photo">

        <h2>
            د حسابونو مدیریت
        </h2>

        <ul>

            <li>
                اډمین او کارکوونکی کولی شي د مشتریانو حسابونه جوړ، تازه او یا حذف کړي.
            </li>

            <li>
                هر حساب به ځانګړی حساب نمبر لري.
            </li>

            <li>
                مشتریان به کولی شي خپل حساب بیلانس او حالت په حقیقي وخت کې وګوري.
            </li>

        </ul>

        <a class="addbtnc" href="{{ route('accounts.create') }}"
           class="add-btn">

            <b>
                د نوي اکونت اضافه ➕
            </b>

        </a>

    </div>


    <!-- Accounts Table -->

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
                    <td>عاطف الله</td>
                    <td>atefullahdarman@gmail.com</td>
                    <td>افغاني 90000</td>
                    <td>فعال</td>

                    <td class="button_edit_dele">

                        <a href="{{ route('accounts.edit', 1005) }}"
                           class="btnedit">
                            تغیر
                        </a>

                        <a href="{{ route('accounts.show', 1005) }}"
                           class="show">
                            کتل
                        </a>

                    </td>

                </tr>


                <tr>

                    <td>1001</td>
                    <td>بلال</td>
                    <td>bilal123@gmail.com</td>
                    <td>افغاني 50000</td>
                    <td>فعال</td>

                    <td>

                        <a href="{{ route('accounts.edit', 1005) }}"
                           class="btnedit">
                            تغیر
                        </a>

                        <a href="{{ route('accounts.show', 1005) }}"
                           class="show">
                            کتل
                        </a>

                    </td>

                </tr>


                <tr>

                    <td>1002</td>
                    <td>فرهاد</td>
                    <td>farhad111@gmail.com</td>
                    <td>افغاني 35000</td>
                    <td>غیر فعال</td>

                    <td>

                       <a href="{{ route('accounts.edit', 1005) }}"
                           class="btnedit">
                            تغیر
                        </a>

                        <a href="{{ route('accounts.show', 1005) }}"
                           class="show">
                            کتل
                        </a>

                    </td>

                </tr>


                <tr>

                    <td>1003</td>
                    <td>سمیم</td>
                    <td>samim222@gmail.com</td>
                    <td>افغاني 72000</td>
                    <td>فعال</td>

                    <td>

                         <a href="{{ route('accounts.edit', 1005) }}"
                           class="btnedit">
                            تغیر
                        </a>

                        <a href="{{ route('accounts.show', 1005) }}"
                           class="show">
                            کتل
                        </a>
                    </td>

                </tr>


                <tr>

                    <td>1004</td>
                    <td>علی</td>
                    <td>ali777@gmail.com</td>
                    <td>افغاني 7287</td>
                    <td>غیر فعال</td>

                    <td>

                         <a href="{{ route('accounts.edit', 1005) }}"
                           class="btnedit">
                            تغیر
                        </a>

                        <a href="{{ route('accounts.show', 1005) }}"
                           class="show">
                            کتل
                        </a>
                    </td>

                </tr>


                <tr>

                    <td>1005</td>
                    <td>نومان</td>
                    <td>nooma222@gmail.com</td>
                    <td>افغاني 8000</td>
                    <td>غیر فعال</td>

                    <td class="button">

                        <a href="{{ route('accounts.edit', 1005) }}"
                           class="btnedit">
                            تغیر
                        </a>

                        <a href="{{ route('accounts.show', 1005) }}"
                           class="show">
                            کتل
                        </a>

                    </td>

                </tr>

            </tbody>

        </table>

    </section>


    <!-- Footer -->

    <footer class="footer">

        <div class="Social_link">

            <h4>
                سوشل میډیا لینکونه
            </h4>

            <ul>

                <a href="#">
                    <li class="icone">
                        <img src="{{ asset('images/communication.png') }}"
                             alt="facebook"
                             class="imge">
                    </li>
                </a>

                <a href="#">
                    <li class="icone">
                        <img src="{{ asset('images/youtube.png') }}"
                             alt="youtube"
                             class="imge">
                    </li>
                </a>

                <a href="#">
                    <li class="icone">
                        <img src="{{ asset('images/linkedin.png') }}"
                             alt="linkedin"
                             class="imge">
                    </li>
                </a>

                <a href="#">
                    <li class="icone">
                        <img src="{{ asset('images/whatsapp.png') }}"
                             alt="whatsapp"
                             class="imge">
                    </li>
                </a>

            </ul>

        </div>


        <div class="Contact">

            <h4>
                زموږ سره اړیکه ونیسئ
            </h4>

            <p id="footer_p">
                Email: atefullahdarman@gmail.com
            </p>

            <p id="footer_p">
                Phone: 0731507286
            </p>

        </div>

        <hr>


        <div class="address">

            <p>
                Copyright © 2026 Online Bank
            </p>

            <p>
                ادرس: کندهار افغانستان
            </p>

        </div>

    </footer>

</main>

</body>
</html>