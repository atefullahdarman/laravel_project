<!DOCTYPE html>
<html lang="ps" dir="rtl">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{ asset('images/1.png') }}" type="image/x-icon">
    <meta name="description" content="Bank management and digital transaction system">
    <meta name="author" content="Atefullah">
    <meta name="keywords" content="bank, online, transactions, money, account, loan, customer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>د معاملو مدیریت | بانک مدیریت سیسټم</title>
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
            <label for="menu-toggle" class="menu-icon">&#9776;</label>

            <!-- Logo -->
            <a href="{{ route('index') }}">
                <img
                    src="{{ asset('images/symbols.png') }}"
                    alt="logo"
                    id="logo"></a>

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
                    onclick="window.location.href='{{ route('login') }}'"><b>ننوتل</b></button>
                <button
                    type="button"
                    class="btn"
                    id="btn2"
                    onclick="window.location.href='{{ route('login') }}'"><b>وتل</b></button>
            </div>
        </nav>
    </header>

    <!-- Transaction Information -->
    <div class="li_transaction">
        <img
            src="{{ asset('images/transfer.png') }}"
            alt="Transaction"
            id="tran_photo"
        >
        <h2>د معاملو مدیریت</h2>
        <ul>
            <li>کارکوونکي د مشتریانو پیسې جمع کوي، باسي او انتقالوي.</li>
            <li>د هرې معاملې وروسته باید د حساب بیلانس په سمه توګه تازه شي.</li>
            <li>د بریالۍ معاملې وروسته مشتری ته د ایمیل یا پیغام له لارې خبر ورکول کېدای شي.</li>
        </ul>
    </div>

    <!-- Transactions Table -->
    <section class="table-container">
        <h2>د ټولو معاملو لېست</h2>
        @if (session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="error-message">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <table>
            <thead>
                <tr>
                    <th>د معاملې ایډي</th>
                    <th>د حساب نمبر</th>
                    <th>نوم</th>
                    <th>ډول</th>
                    <th>اندازه</th>
                    <th>تاریخ</th>
                    <th>حالت</th>
                    <th>عمل</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($transactions as $transaction)
                    @php
                        $types = [
                            'deposit' => 'زېرمه کول',
                            'withdrawal' => 'پیسې ایستل',
                            'transfer' => 'انتقال',
                        ];
                        $statuses = [
                            'completed' => 'بشپړ',
                            'pending' => 'نا بشپړ',
                            'rejected' => 'لغوه شوی',
                        ];
                        $transactionId = $transaction['id'] ?? '';
                        $transactionType = $transaction['type'] ?? '';
                        $transactionStatus = $transaction['status'] ?? '';
                    @endphp
                    <tr>
                        <td>
                            {{ $transaction['transaction_number'] ?? ('TX' . $transactionId) }}
                        </td>
                        <td>
                            {{ $transaction['account_number'] ?? $transaction['account_id'] ?? '—' }}
                        </td>
                        <td>
                            {{ $transaction['customer_name'] ?? $transaction['name'] ?? '—' }}
                        </td>
                        <td>
                            {{ $types[$transactionType] ?? $transactionType }}
                        </td>
                        <td>
                            افغانی {{ number_format((float) ($transaction['amount'] ?? 0), 2) }}
                        </td>
                        <td>
                            {{ $transaction['date'] ?? '—' }}
                        </td>
                        <td>
                            {{ $statuses[$transactionStatus] ?? $transactionStatus }}
                        </td>
                        <td>
                            <a
                                class="view-btn"
                                href="{{ route('transactions.show', ['transaction' => $transactionId]) }}">
                                کتل</a>
                            @if ($transactionStatus === 'pending')
                                <form
                                    action="{{ route('transactions.update', ['transaction' => $transactionId]) }}"
                                    method="POST"
                                    style="display:inline;"
                                    onsubmit="return confirm('ایا غواړې دا معامله لغوه کړې؟');">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="action" value="reject">
                                    <button type="submit" class="reject-btn"> لغوه</button>
                                </form>
                            @else
                                <span>—</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8">
                            تر اوسه هېڅ معامله ثبت شوې نه ده.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </section>
    <!-- Footer -->
    <footer class="footer">
        <div class="Social_link">
            <h4>د ټولنیزو رسنیو لینکونه</h4>
            <ul>
                <a href="https://www.facebook.com/profile.php?id=61581411182010&mibextid=rS40aB7S9Ucbxw6v"target="_blank"rel="noopener noreferrer"><li class="icone"><img src="{{ asset('images/communication.png') }}" alt="Facebook" class="imge">/li></a>
                <a href="https://youtube.com/@atefullahdarman2024?si=0NYU_P_U1NYrstaZ"target="_blank"rel="noopener noreferrer"><li class="icone"><img src="{{ asset('images/youtube.png') }}" alt="YouTube" class="imge"></li></a>
                <a href="https://www.linkedin.com/in/atefullah-zafar-zoy-2a7019399?utm_source=share_via&utm_content=profile&utm_medium=member_android"target="_blank"rel="noopener noreferrer">
                <li class="icone"><img src="{{ asset('images/linkedin.png') }}" alt="LinkedIn" class="imge"></li></a><a href="https://wa.me/93731597286"target="_blank"rel="noopener noreferrer"><li class="icone"><img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp" class="imge"></li></a>
            </ul>
        </div>
        <div class="Contact">
            <h4>زموږ سره اړیکه ونیسئ</h4>
            <p id="footer_p">Email: atefullahdarman@gmail.com</p>
            <p id="footer_p">Phone: 0731507286</p>
        </div>
        <hr>
        <div class="address">
            <p>Copyright © 2026 Online Bank</p>
            <p>آدرس: کندهار، افغانستان</p>
        </div>
    </footer>
</main>
</body>
</html>