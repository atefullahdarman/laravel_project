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

        <h2>د معاملې تغیر</h2>

        <!-- HTML only - database update not implemented -->

        <form class="form_class">

            <label for="transaction_id">
                د معاملې ID
            </label>

            <input type="text"
                   id="transaction_id"
                   name="transaction_id"
                   value="{{ $id ?? 'TX1001' }}">


            <label for="account_number">
                د اکونت نمبر
            </label>

            <input type="text"
                   id="account_number"
                   name="account_number"
                   value="1001">


            <label for="name">
                نوم
            </label>

            <input type="text"
                   id="name"
                   name="name"
                   value="عاطف">


            <label for="type">
                د معاملې ډول
            </label>

            <select id="type" name="type">

                <option value="deposit" selected>
                    زخیره کول
                </option>

                <option value="transfer">
                    انتقال
                </option>

                <option value="withdraw">
                    ایستل
                </option>

            </select>


            <label for="amount">
                اندازه
            </label>

            <input type="number"
                   id="amount"
                   name="amount"
                   value="10000">


            <label for="date">
                تاریخ
            </label>

            <input type="date"
                   id="date"
                   name="date"
                   value="2026-03-09">


            <label for="status">
                حالت
            </label>

            <select id="status" name="status">

                <option value="complete" selected>
                    بشپړ
                </option>

                <option value="incomplete">
                    نا مکمل
                </option>

            </select>


            <br><br>

            <button type="submit"  class="button"> 
                معلومات Update کول
            </button>


            <button type="button" class="reject-btn"
                    onclick="window.location.href='{{ route('transactions.index') }}'">

                لغوه

            </button>

        </form>

    </section>

</main>

</body>
</html>