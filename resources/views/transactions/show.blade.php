<!DOCTYPE html>
<html lang="ps" dir="rtl">

<head>
    <meta charset="UTF-8">

    <link rel="shortcut icon"
          href="{{ asset('images/1.png') }}"
          type="image/x-icon">

    <meta name="description" content="Bank management and digital transaction system">
    <meta name="author" content="Atefullah">
    <meta name="keywords" content="bank, online, transactions, money, account, loan, customer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>د معاملې معلومات | بانک مدیریت سیسټم</title>

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

            <label for="menu-toggle" class="menu-icon">
                &#9776;
            </label>

            <!-- Logo -->
            <a href="{{ route('index') }}">
                <img
                    src="{{ asset('images/symbols.png') }}"
                    alt="logo"
                    id="logo"
                >
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
                <button
                    type="button"
                    class="btn"
                    id="btn1"
                    onclick="window.location.href='{{ route('login') }}'"
                >
                    <b>ننوتل</b>
                </button>

                <button
                    type="button"
                    class="btn"
                    id="btn2"
                    onclick="window.location.href='{{ route('login') }}'"
                >
                    <b>وتل</b>
                </button>
            </div>

        </nav>
    </header>

    <!-- Transaction Details -->
    <section class="main_container">
        <section class="table-container">

            <h2>د معاملې معلومات</h2>

            @php
                $types = [
                    'deposit' => 'زېرمه کول',
                    'withdrawal' => 'پیسې ایستل',
                    'transfer' => 'انتقال',
                ];

                $statuses = [
                    'pending' => 'د تایید انتظار',
                    'completed' => 'بشپړه شوې',
                    'rejected' => 'رد شوې',
                ];

                $transactionType = $types[$transaction['type'] ?? ''] 
                    ?? ($transaction['type'] ?? 'نامعلوم');

                $transactionStatus = $statuses[$transaction['status'] ?? ''] 
                    ?? ($transaction['status'] ?? 'نامعلوم');
            @endphp

            @if (session('success'))
                <div class="success-message">
                    {{ session('success') }}
                </div>
            @endif

            <table>
                <tr>
                    <th>د معاملې ID</th>
                    <td>
                        {{ $transaction['transaction_number'] ?? ('TX' . ($transaction['id'] ?? '')) }}
                    </td>
                </tr>

                <tr>
                    <th>د حساب ID</th>
                    <td>
                        {{ $transaction['account_id'] ?? '—' }}
                    </td>
                </tr>

                <tr>
                    <th>د حساب نمبر</th>
                    <td>
                        {{ $transaction['account_number'] ?? '—' }}
                    </td>
                </tr>

                <tr>
                    <th>د مشتری نوم</th>
                    <td>
                        {{ $transaction['customer_name'] ?? $transaction['name'] ?? '—' }}
                    </td>
                </tr>

                <tr>
                    <th>د معاملې ډول</th>
                    <td>{{ $transactionType }}</td>
                </tr>

                <tr>
                    <th>اندازه</th>
                    <td>
                        {{ number_format((float) ($transaction['amount'] ?? 0), 2) }}
                        افغانۍ
                    </td>
                </tr>

                <tr>
                    <th>تاریخ</th>
                    <td>
                        {{ $transaction['date'] ?? '—' }}
                    </td>
                </tr>

                <tr>
                    <th>تشریح</th>
                    <td>
                        {{ $transaction['description'] ?? '—' }}
                    </td>
                </tr>

                <tr>
                    <th>حالت</th>
                    <td>{{ $transactionStatus }}</td>
                </tr>
            </table>

            <br>

            <button
                type="button"
                class="button"
                onclick="window.location.href='{{ route('transactions.index') }}'"
            >
                بېرته معاملاتو ته
            </button>
        </section>
    </section>

</main>
</body>
</html>