<!DOCTYPE html>
<html lang="ps" dir="rtl">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{ asset('images/1.png') }}" type="image/x-icon">
    <meta name="description" content="Bank management and digital transaction system">
    <meta name="author" content="Atefullah">
    <meta name="keywords" content="bank, online, transactions, money, account, loan, customer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نوې معامله | بانک مدیریت سیسټم</title>
    @vite([
        'resources/css/style.css',
        'resources/css/transaction.css'
    ])
</head>
<body>
<main>
    <!-- Header -->
    <header class="header">
        <nav class="nav">
            <!-- Hamburger -->
            <input type="checkbox" id="menu-toggle">
            <label for="menu-toggle" class="menu-icon"> &#9776;</label>
            <!-- Logo -->
            <a href="{{ route('index') }}">
                <img src="{{ asset('images/symbols.png') }}"alt="logo"id="logo"></a>
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
            <!-- Login / Logout -->
            <div class="buttons">
                <button type="button" class="btn" id="btn1" onclick="window.location.href='{{ route('login') }}'"> <b>ننوتل</b></button>
                <button type="button"class="btn"id="btn2"onclick="window.location.href='{{ route('login') }}'"> <b>وتل</b></button>
            </div>
        </nav>
    </header>
    <!-- Create Transaction Form -->
    <section class="main_container">
        <section class="table-container">
            <h2>د نوې معاملې جوړول</h2>
            <!-- Success Message -->
            @if (session('success'))
                <div class="success-message">
                    {{ session('success') }}
                </div>
            @endif
            <!-- Validation Errors -->
            @if ($errors->any())
                <div class="error-message">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form class="form_class"action="{{ route('transactions.store') }}" method="POST">
                @csrf

                <!-- Account ID -->
                <label for="account_id">د حساب ID</label>
                <input type="number" id="account_id" name="account_id" value="{{ old('account_id') }}" placeholder="د حساب ID ولیکئ" min="1" required>

                <!-- Account Number -->
                <label for="account_number">د حساب نمبر</label>
                <input type="text"id="account_number"name="account_number"value="{{ old('account_number') }}" placeholder="1001"  maxlength="50">

                <!-- Customer Name -->
                <label for="customer_name">د مشتری نوم</label>
                <input type="text" id="customer_name" name="customer_name"value="{{ old('customer_name') }}"placeholder="د مشتری بشپړ نوم"maxlength="255" required >

                <!-- Transaction Type -->
                <label for="type">د معاملې ډول</label>
                <select id="type" name="type" required>
                    <option value="">د معاملې ډول انتخاب کړئ</option>
                    <option value="deposit" @selected(old('type') === 'deposit')> زېرمه کول</option>
                    <option value="withdrawal" @selected(old('type') === 'withdrawal')> پیسې ایستل</option>
                    <option value="transfer" @selected(old('type') === 'transfer')> انتقال</option>
                </select>

                <!-- Amount -->
                <label for="amount">د معاملې اندازه (افغانۍ)</label>
                <input type="number"id="amount"name="amount" value="{{ old('amount') }}"placeholder="10000" min="0.01" step="0.01"  required>
                <!-- Date -->
                <label for="date">د معاملې تاریخ</label>
                <input type="date" id="date"name="date" value="{{ old('date', date('Y-m-d')) }}" required>
                <!-- Description -->
                <label for="description">تشریح (اختیاري)</label>
                <input type="text" id="description" name="description" value="{{ old('description') }}" placeholder="د معاملې په اړه معلومات" maxlength="1000">
                <br><br>
                <!-- Submit -->
                <button type="submit" class="button"> نوې معامله ثبتول</button>
                <!-- Cancel -->
                <button type="button" class="reject-btn" onclick="window.location.href='{{ route('transactions.index') }}'" > لغوه </button>
            </form>
        </section>
    </section>
</main>
</body>
</html>