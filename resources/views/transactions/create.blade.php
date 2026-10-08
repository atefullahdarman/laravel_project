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

        <h2>د نوي Transaction جوړول</h2>

        <form class="form_class">
            <!-- Transaction ID -->
            <label for="transaction_id">
                د معاملې ایډی
            </label>
            <input type="text"
                   id="transaction_id"
                   name="transaction_id"
                   placeholder="TX1007">


            <!-- Account Number -->
            <label for="account_number">
                د اکونت نمبر
            </label>

            <input type="text"
                   id="account_number"
                   name="account_number"
                   placeholder="1006">


            <!-- Name -->
            <label for="name">
                نوم
            </label>

            <input type="text"
                   id="name"
                   name="name"
                   placeholder="د مشتری نوم">


            <!-- Type -->
            <label for="type">
                ډول
            </label>

            <select id="type" name="type">

                <option value="">
                    د معاملې ډول انتخاب کړئ
                </option>

                <option value="deposit">
                    زخیره کول
                </option>

                <option value="transfer">
                    انتقال
                </option>

                <option value="withdraw">
                    ایستل
                </option>

            </select>


            <!-- Amount -->
            <label for="amount">
                اندازه
            </label>

            <input type="number"
                   id="amount"
                   name="amount"
                   placeholder="10000">


            <!-- Date -->
            <label for="date">
                تاریخ
            </label>

            <input type="date"
                   id="date"
                   name="date">


            <!-- Status -->
            <label for="status">
                حالت
            </label>

            <select id="status" name="status">

                <option value="">
                    حالت انتخاب کړئ
                </option>

                <option value="complete">
                    بشپړ
                </option>

                <option value="incomplete">
                    نا مکمل
                </option>

            </select>


            <br><br>

            <button type="submit" class="button">
                نوی Transaction جوړول
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