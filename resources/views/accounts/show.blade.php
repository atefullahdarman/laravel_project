<!DOCTYPE html>
<html lang="ps" dir="rtl">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{ asset('images/1.png') }}" type="image/x-icon">
    <meta name="description" content="Bank management system">
    <meta name="author" content="Atefullah">
    <meta name="keywords" content="bank, online, transactions, money, account, loan, customer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>د حساب معلومات - بانک مدیریت سیسټم</title>
    @vite('resources/css/style.css')
    @vite('resources/css/account.css')
    @vite('resources/css/transaction.css')
</head>
<body>
    <header class="header">
        <nav class="nav">
            <!-- Hamburger -->
            <input type="checkbox" id="menu-toggle">
            <label for="menu-toggle" class="menu-icon">&#9776;</label>
            <!-- Logo -->
            <a href="{{ route('index') }}"><img src="{{ asset('images/symbols.png') }}" alt="logo"id="logo"></a>
            <!-- Menu -->
            <ul class="menu">
                <li><a href="{{ route('index') }}">کور پاڼه</a></li>
                <li><a href="{{ route('accounts.index') }}">حسابونه</a></li>
                <li><a href="{{ route('transactions.index') }}">معاملې</a></li>
                <li><a href="{{ route('customers.index') }}">مشتریان</a></li>
                <li><a href="{{ route('loans.index') }}">پورونه</a></li>
                <li><a href="{{ route('reports') }}">راپورونه</a></li>
                <li><a href="{{ route('about_me') }}">زموږ په اړه</a></li>
                <li><a href="{{ route('contact_as') }}">موږ سره اړیکه</a></li>
            </ul>
            <!-- Buttons -->
            <div class="buttons">
                <button class="btn" id="btn1" type="button"> <b>ننوتل</b></button>
                <button class="btn" id="btn2" type="button"> <b>وتل</b></button>
            </div>
        </nav>
    </header>
    <section class="main_container">
        <section class="table-container">
            <h2>د حساب معلومات</h2>
            <div class="form_class">
                <label>اکونټ نمبر</label>
                <input type="text"value="{{ $account['account_number'] ?? '' }}"readonly>

                <label>نوم</label>
                <input type="text" value="{{ $account['name'] ?? '' }}"readonly>

                <label>ایمیل</label>
                <input type="email" value="{{ $account['email'] ?? '' }}"readonly>

                <label>بیالنس</label>
                <input type="text" value="{{ number_format((float) ($account['balance'] ?? 0), 2) }}"readonly>

                <label>حالت</label>
                <input type="text"value="{{ ($account['status'] ?? '') === 'active' ? 'فعال' : (($account['status'] ?? '') === 'inactive' ? 'غیر فعال' : ($account['status'] ?? '')) }}" readonly>
                <button type="button" class="reject-btn" onclick="window.location.href='{{ route('accounts.index') }}'"> حسابونو ته بېرته تلل</button>
            </div>
        </section>
    </section>
</body>
</html>
