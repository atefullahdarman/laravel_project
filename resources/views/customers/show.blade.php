<!DOCTYPE html>
<html lang="ps" dir="rtl">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{ asset('images/1.png') }}" type="image/x-icon">
    <meta name="description" content="This is a bank management system">
    <meta name="author" content="Atefullah">
    <meta name="keywords" content="bank, online, transactions, money, account, loan, customer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>د مشتری بشپړ معلومات | بانک مدیریت سیسټم</title>
    @vite([
        'resources/css/style.css',
        'resources/css/customers.css',
        'resources/css/transaction.css'
    ])
</head>
<body>
<main>
    <header class="header">
        <nav class="nav">
            <!-- Hamburger -->
            <input type="checkbox" id="menu-toggle">
            <label for="menu-toggle" class="menu-icon">  &#9776; </label>
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
            <!-- Buttons -->
            <div class="buttons">
                <button type="button"class="btn"id="btn1" onclick="window.location.href='{{ route('login') }}'"> <b>ننوتل</b> </button>
                <button type="button" class="btn" id="btn2" onclick="window.location.href='{{ route('login') }}'" >  <b>وتل</b> </button>
            </div>
        </nav>
    </header>
    <section class="main_container">
        <section class="table-container">
            <h2>د مشتری بشپړ معلومات</h2>
            @php
                $documents = [
                    'passport' => 'پاسپورټ',
                    'tazkira' => 'تذکره',
                    'master_card' => 'ماسټر کارت',
                    'visa_card' => 'ویزا کارت',
                    'card' => 'کارت',
                ];
                $statuses = [
                    'active' => 'فعال',
                    'inactive' => 'غیرفعال',
                ];
            @endphp
            <table>
                <thead>
                    <tr>
                        <th>نوم</th>
                        <th>ایمیل</th>
                        <th>فون نمبر</th>
                        <th>آدرس</th>
                        <th>د پېژندنې سند</th>
                        <th>حالت</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $customer['name'] ?? '—' }}</td>
                        <td>{{ $customer['email'] ?? '—' }}</td>
                        <td>{{ $customer['phone'] ?? '—' }}</td>
                        <td>{{ $customer['address'] ?? '—' }}</td>
                        <td>
                            {{ $documents[$customer['identity_document'] ?? ''] ?? ($customer['identity_document'] ?? '—') }}
                        </td>
                        <td>
                            {{ $statuses[$customer['status'] ?? ''] ?? ($customer['status'] ?? '—') }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <br>
            <button type="button" class="button"onclick="window.location.href='{{ route('customers.index') }}'"> بېرته مشتریانو ته </button>
        </section>
    </section>
</main>
</body>
</html>