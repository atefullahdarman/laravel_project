<!DOCTYPE html>
<html lang="ps" dir="rtl">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{ asset('images/1.png') }}" type="image/x-icon">

    <meta name="description" content="This is a bank management and digital system">
    <meta name="author" content="Atefullah">
    <meta name="keywords" content="bank, online, transactions, money, account, loan, customer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>بانک مدیریت سیسټم</title>

    @vite([
        'resources/css/style.css',
        'resources/css/transaction.css',
        'resources/css/account.css'
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

            <!-- Login / Logout -->
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

    <!-- Transaction Information -->
    <div class="li_transaction">

        <img
            src="{{ asset('images/transfer.png') }}"
            alt="Transaction photo"
            id="tran_photo"
        >

        <h2>د معاملو مدیریت</h2>

        <ul>
            <li>کارکوونکي د مشتریانو پیسې زېرمه کوي، باسي او انتقالوي.</li>
            <li>د هرې معاملې وروسته باید د حساب بیلانس په سمه توګه تازه شي.</li>
            <li>د بریالۍ معاملې وروسته مشتری ته د ایمیل یا پیغام له لارې خبر ورکول کېدای شي.</li>
        </ul>

    </div>

    <!-- Flash Messages -->
    <section class="table-container">

        @if (session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="error-message">
                {{ session('error') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="error-message">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <!-- Add Transaction Button -->
        <div class="transaction-add">
            <button
                type="button"
                class="btn_add"
                onclick="window.location.href='{{ route('transactions.create') }}'"
            >
                <b>د نوې معاملې اضافه کول ➕</b>
            </button>
        </div>

        <!-- Transaction Table -->
        <table>
            <thead>
                <tr>
                    <th>د معاملې ایډي</th>
                    <th>د اکونټ نمبر</th>
                    <th>نوم</th>
                    <th>ډول</th>
                    <th>اندازه</th>
                    <th>تاریخ</th>
                    <th>حالت</th>
                    <th>عمل</th>
                </tr>
            </thead>

            <tbody>
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
                @endphp

                @forelse ($transactions as $transaction)

                    @php
                        $id = $transaction['id'] ?? null;
                        $type = $transaction['type'] ?? '';
                        $status = $transaction['status'] ?? '';
                    @endphp

                    <tr>
                        <td>
                            {{ $transaction['transaction_number'] ?? ('TX' . $id) }}
                        </td>

                        <td>
                            {{ $transaction['account_number'] ?? $transaction['account_id'] ?? '—' }}
                        </td>

                        <td>
                            {{ $transaction['customer_name'] ?? $transaction['name'] ?? '—' }}
                        </td>

                        <td>
                            {{ $types[$type] ?? $type }}
                        </td>

                        <td>
                            افغانی {{ number_format((float) ($transaction['amount'] ?? 0), 2) }}
                        </td>

                        <td>
                            {{ $transaction['date'] ?? '—' }}
                        </td>

                        <td>
                            {{ $statuses[$status] ?? $status }}
                        </td>

                        <td>
                            <a
                                class="view-btn" style="text-decoration: none; margin-left: 6px; color:black;"
                                href="{{ route('transactions.show', ['transaction' => $id]) }}"
                            >
                                کتل
                            </a>

                            <a
                                class="show"
                                href="{{ route('transactions.edit', ['transaction' => $id]) }}"
                            >
                                تغیر
                            </a>

                            @if ($status === 'pending')
                                

                        
                            @endif

                            <form
                                action="{{ route('transactions.destroy', ['transaction' => $id]) }}"
                                method="POST"
                                style="display: inline;"
                                onsubmit="return confirm('ایا ډاډه یې چې دا معامله حذف کړې؟');"
                            >
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="reject-btn">
                                    حذف
                                </button>
                            </form>
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
            <h4>سوشل میډیا لینکونه</h4>

            <ul>
                <li class="icone">
                    <a
                        href="https://www.facebook.com/profile.php?id=61581411182010&mibextid=rS40aB7S9Ucbxw6v"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        <img
                            src="{{ asset('images/communication.png') }}"
                            alt="Facebook"
                            class="imge"
                        >
                    </a>
                </li>

                <li class="icone">
                    <a
                        href="https://youtube.com/@atefullahdarman2024?si=0NYU_P_U1NYrstaZ"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        <img
                            src="{{ asset('images/youtube.png') }}"
                            alt="YouTube"
                            class="imge"
                        >
                    </a>
                </li>

                <li class="icone">
                    <a
                        href="https://www.linkedin.com/in/atefullah-zafar-zoy-2a7019399?utm_source=share_via&utm_content=profile&utm_medium=member_android"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        <img
                            src="{{ asset('images/linkedin.png') }}"
                            alt="LinkedIn"
                            class="imge"
                        >
                    </a>
                </li>

                <li class="icone">
                    <a
                        href="https://wa.me/93731597286"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        <img
                            src="{{ asset('images/whatsapp.png') }}"
                            alt="WhatsApp"
                            class="imge"
                        >
                    </a>
                </li>
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