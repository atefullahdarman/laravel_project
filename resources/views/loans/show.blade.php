<!DOCTYPE html>
<html lang="ps" dir="rtl">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{ asset('images/1.png') }}" type="image/x-icon">
    <meta name="description" content="Bank Management System - Loan Details">
    <meta name="author" content="Atefullah">
    <meta name="keywords" content="bank, online, transactions, money, account, loan, customer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>بانک مدیریت سیسټم - د پور بشپړ معلومات</title>

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

            <label for="menu-toggle" class="menu-icon">
                &#9776;
            </label>

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
                    onclick="window.location.href='{{ route('login') }}'">
                    <b>ننوتل</b>
                </button>

                <button class="btn" id="btn2" type="button"
                    onclick="window.location.href='{{ route('login') }}'">
                    <b>وتل</b>
                </button>
            </div>

        </nav>
    </header>

    <section class="main_container">
        <section class="table-container">

            <h2>د پور بشپړ معلومات</h2>

            @php
                $loanStatus = [
                    'pending' => 'د تایید په انتظار',
                    'approved' => 'تایید شوی',
                    'rejected' => 'رد شوی',
                ];

                $loanNumber = $loan['loan_number']
                    ?? 'L' . str_pad((string) ($loan['id'] ?? 0), 4, '0', STR_PAD_LEFT);

                $status = $loan['status'] ?? 'pending';
            @endphp

            <table>
                <thead>
                    <tr>
                        <th>د پور نمبر</th>
                        <th>مشتری</th>
                        <th>اندازه</th>
                        <th>تاریخ</th>
                        <th>حالت</th>
                        <th>توضیحات</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>{{ $loanNumber }}</td>

                        <td>{{ $loan['customer_name'] ?? '—' }}</td>

                        <td>
                            افغانی
                            {{ number_format((float) ($loan['amount'] ?? 0), 2) }}
                        </td>

                        <td>{{ $loan['date'] ?? '—' }}</td>

                        <td>
                            {{ $loanStatus[$status] ?? $status }}
                        </td>

                        <td>{{ $loan['description'] ?? '—' }}</td>
                    </tr>
                </tbody>
            </table>

            <br>

            <button
                type="button"
                class="button"
                onclick="window.location.href='{{ route('loans.index') }}'"
            >
                بېرته پورونو ته
            </button>

        </section>
    </section>

</main>
</body>
</html>
