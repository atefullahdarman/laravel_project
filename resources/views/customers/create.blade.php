<!DOCTYPE html>
<html lang="ps" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/1.png') }}" type="image/x-icon">
    <meta name="description" content="This is a bank management system.">
    <meta name="author" content="Atefullah">
    <meta name="keywords" content="bank, online, transactions, money, account, loan, customer">
    <title>نوی مشتری اضافه کول | بانک مدیریت سیسټم</title>
    @vite([
        'resources/css/style.css',
        'resources/css/customers.css',
        'resources/css/transaction.css'
    ])
</head>
<body>
<header class="header">
    <nav class="nav">
        <!-- Hamburger -->
        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="menu-icon"> &#9776;</label>
        <!-- Logo -->
        <a href="{{ route('index') }}"><img src="{{ asset('images/symbols.png') }}" alt="لوګو" id="logo"></a>
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
            <button type="button" class="btn" id="btn1"><b>ننوتل</b></button>
            <button type="button" class="btn" id="btn2"><b>وتل</b></button>
        </div>
    </nav>
</header>
<main class="main_container">
    <section class="table-container">
        <h2>نوی مشتری اضافه کول</h2>        <!-- Success Message -->
        @if (session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif
        <!-- Validation Errors -->
        @if ($errors->any())
            <div class="error-message">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- Create Customer Form -->
        <form
            class="form_class" action="{{ route('customers.store') }}" method="POST">
            @csrf

            <label for="name">نوم</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="د مشتری نوم" required>

            <label for="email">ایمیل</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="د مشتری ایمیل">

            <label for="phone">د تلیفون شمېره</label>
            <input type="text" id="phone" name="phone" value="{{ old('phone') }}" placeholder="د تلیفون شمېره" required>

            <label for="address">پته</label>
            <input type="text" id="address" name="address" value="{{ old('address') }}" placeholder="د مشتری پته"required>
            <label for="identity_document"> د پېژندنې سند </label>

            <select id="identity_document" name="identity_document">
                <option value="">سند انتخاب کړئ</option>
                <option value="passport" {{ old('identity_document') == 'passport' ? 'selected' : '' }}>  پاسپورټ </option>
                <option value="tazkira" {{ old('identity_document') == 'tazkira' ? 'selected' : '' }}>تذکره</option>
                <option value="master_card" {{ old('identity_document') == 'master_card' ? 'selected' : '' }}>  ماسټر کارډ</option>
                <option value="visa_card" {{ old('identity_document') == 'visa_card' ? 'selected' : '' }}> ویزه کارت </option>
                <option value="card" {{ old('identity_document') == 'card' ? 'selected' : '' }}>  کارت</option>
            </select>
            <label for="status">حالت</label>
            <select id="status" name="status" required>
                <option value="active" {{ old('status', 'active') == 'active' ? 'selected' : '' }}>فعال </option>
                <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}> غیرفعال </option>
            </select>
            <br><br>
            <button type="submit" class="button">  نوی مشتری جوړول </button>
            <button type="button" class="reject-btn" onclick="window.location.href='{{ route('customers.index') }}'"> لغوه </button>
        </form>
    </section>
</main>
</body>
</html>
