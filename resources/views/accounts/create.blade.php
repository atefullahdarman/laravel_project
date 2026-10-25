<!DOCTYPE html>
<html lang="ps" dir="rtl">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="./images/1.png" type="image/x-icon">
    <meta name="description" content="this is bank static and degital system">
    <meta name="author" content="Atefullah">
    <meta name="keywords" content="bank,online,transactions,money,account,loan,icons,report,customer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بانک مدیریت سیسټم</title>
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
        <a href="{{ route('index') }}"><img src="{{ asset('images/symbols.png') }}" alt="logo" id="logo"></a>

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
            <button class="btn" id="btn1"><b>ننوتل</b></button>
            <button class="btn" id="btn2"><b>وتل</b></button>
        </div>
    </nav>
</header>
<section class="main_container">
    <section class="table-container">
        <h1>د نوي حساب جوړول</h1>
        @if (session('success'))
            <p>{{ session('success') }}</p>
        @endif
        <form class="form_class"action="{{ route('accounts.store') }}"method="POST">
            @csrf

            <label for="account_number">اکونت نمبر</label>
            <input type="text"id="account_number"name="account_number" value="{{ old('account_number') }}"required>
            @error('account_number')
                <p class="error">{{ $message }}</p>
            @enderror
            <label for="name">نوم</label>
            <input type="text"id="name"name="name"value="{{ old('name') }}" required>
            @error('name')
                <p class="error">{{ $message }}</p>
            @enderror

            <label for="email">ایمیل</label>
            <input type="email"id="email"name="email"value="{{ old('email') }}">
            @error('email')
                <p class="error">{{ $message }}</p>
            @enderror
            <label for="balance">بیالنس</label>
            <input type="number"id="balance"name="balance"value="{{ old('balance', 0) }}"min="0"step="0.01"required>
            @error('balance')
                <p class="error">{{ $message }}</p>
            @enderror
            <label for="status">Status</label>
            <input type="text"id="status"name="status"value="{{ old('status', 'active') }}"required>
            @error('status')
                <p class="error">{{ $message }}</p>
            @enderror
            <button type="submit" class="button">حساب جوړ کړه</button>

            <button
                type="button"class="reject-btn"onclick="window.location.href='{{ route('accounts.index') }}'"> حسابونو ته بېرته تلل
            </button>
        </form>
    </section>
</section>
</body>
</html>
