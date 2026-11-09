<!DOCTYPE html>
<html lang="ps" dir="rtl">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{ asset('images/1.png') }}" type="image/x-icon">
    <meta name="description" content="Bank Management System - Loan Application">
    <meta name="author" content="Atefullah">
    <meta name="keywords" content="bank, online, transactions, money, account, loan, customer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بانک مدیریت سیسټم - د نوي پور غوښتنه</title>
    @vite('resources/css/style.css')
    @vite('resources/css/loans.css')
    @vite('resources/css/transaction.css')
</head>
<body>
<main>

    <header class="header">
        <nav class="nav">
            <!-- Hamburger -->
            <input type="checkbox" id="menu-toggle">
            <label for="menu-toggle" class="menu-icon">&#9776;</label>
            <!-- Logo -->
            <a href="{{ route('index') }}">
                <img src="{{ asset('images/symbols.png') }}" alt="logo" id="logo">
            </a>
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
                <button class="btn" id="btn1" type="button"
                    onclick="window.location.href='{{ route('login') }}'"><b>ننوتل</b></button>
                <button class="btn" id="btn2" type="button" onclick="window.location.href='{{ route('login') }}'"><b>وتل</b> </button>
            </div>
        </nav>
    </header>

    <section class="main_container">
        <section class="table-container">
            <h2>د نوي پور غوښتنه</h2>
            <!-- Success message -->
            @if (session('success'))
                <div class="success-message">
                    {{ session('success') }}
                </div>
            @endif
            <!-- Validation errors -->
            @if ($errors->any())
                <div class="error-message">
                    <strong>مهرباني وکړئ لاندې تېروتنې اصلاح کړئ:</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="form_class" action="{{ route('loans.store') }}" method="POST">
                @csrf
                <!-- Customer name -->
                <label for="customer_name">د مشتری نوم</label>
                <input type="text"id="customer_name"name="customer_name"value="{{ old('customer_name') }}"placeholder="د مشتری بشپړ نوم"maxlength="255"required>

                @error('customer_name')
                    <p class="error-message">{{ $message }}</p>
                @enderror

                <!-- Loan amount -->
                <label for="amount">د پور اندازه</label>
                <input type="number"id="amount"name="amount"value="{{ old('amount') }}"placeholder="د پور اندازه ولیکئ"min="1"step="0.01"required >

                @error('amount')
                    <p class="error-message">{{ $message }}</p>
                @enderror

                <!-- Loan date -->
                <label for="date">د غوښتنې نېټه</label>
                <input type="date"id="date"name="date"value="{{ old('date', date('Y-m-d')) }}"required>

                @error('date')
                    <p class="error-message">{{ $message }}</p>
                @enderror

                <!-- Description -->
                <label for="description">د پور توضیحات</label>
                <textarea id="description"name="description"rows="4"maxlength="1000"placeholder="د پور د غوښتنې دلیل ولیکئ...">
                {{ old('description') }}
            </textarea>

                @error('description')
                    <p class="error-message">{{ $message }}</p>
                @enderror
                <br><br>
                <button type="submit" class="button"> نوی پور ثبتول</button>
                <button type="button"class="reject-btn"onclick="window.location.href='{{ route('loans.index') }}'"> لغوه</button>
            </form>
        </section>
    </section>
</main>
</body>
</html>
