<!DOCTYPE html>
<html lang="ps" dir="rtl">

<head>
    <meta charset="UTF-8">

    <link rel="shortcut icon" href="{{ asset('images/1.png') }}" type="image/x-icon">
    <meta name="description" content="Bank management and digital loan system">
    <meta name="author" content="Atefullah">
    <meta name="keywords" content="bank, online, transactions, money, account, loan, customer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>د پورونو مدیریت | بانک مدیریت سیسټم</title>

    @vite([
        'resources/css/style.css',
        'resources/css/loans.css'
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

    <!-- Loan Information -->
    <div class="loan_section">

        <img
            src="{{ asset('images/loan.png') }}"
            alt="loan photo"
            id="loan"
        >

        <h2>د پورونو مدیریت</h2>

        <ul>
            <li>مشتریان کولی شي د اړینو معلوماتو په وړاندې کولو سره د پور غوښتنه وکړي.</li>
            <li>کارکوونکي د پور غوښتنې ارزوي او د تایید لپاره یې وړاندې کوي.</li>
            <li>مسؤول کس د پور غوښتنه مني یا ردوي.</li>
        </ul>

    </div>

    <!-- Messages -->
    <section class="table-container">

        <h2>د پور غوښتنې</h2>

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

        <!-- Add Loan Button -->
        <p>
            <a href="{{ route('loans.create') }}" class="button">
                + د نوي پور ثبتول
            </a>
        </p>

        <!-- Loans Table -->
        <table>
            <caption><b>د پورونو لېست</b></caption>

            <thead>
                <tr>
                    <th>د پور نمبر</th>
                    <th>مشتری</th>
                    <th>اندازه</th>
                    <th>تاریخ</th>
                    <th>حالت</th>
                    <th>عملیات</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($loans as $loan)

                    @php
                        $loanId = $loan['id'] ?? null;

                        $loanNumber = $loan['loan_number']
                            ?? ('L' . str_pad((string) $loanId, 4, '0', STR_PAD_LEFT));

                        $customerName = $loan['customer_name']
                            ?? $loan['name']
                            ?? '—';

                        $loanAmount = (float) ($loan['amount'] ?? 0);

                        $loanDate = $loan['date']
                            ?? $loan['application_date']
                            ?? '—';

                        $loanStatus = $loan['status'] ?? 'pending';

                        $statusLabels = [
                            'pending' => 'د تایید انتظار',
                            'approved' => 'تایید شوی',
                            'accepted' => 'منل شوی',
                            'rejected' => 'رد شوی',
                        ];

                        $displayStatus = $statusLabels[$loanStatus]
                            ?? $loanStatus;
                    @endphp

                    <tr>
                        <td>{{ $loanNumber }}</td>

                        <td>{{ $customerName }}</td>

                        <td>
                            {{ number_format($loanAmount, 2) }} افغانۍ
                        </td>

                        <td>{{ $loanDate }}</td>

                        <td>{{ $displayStatus }}</td>

                        <td>
                            <!-- View -->
                            <a
                                href="{{ route('loans.show', ['loan' => $loanId]) }}"
                                class="view-btn"
                            >
                                کتل
                            </a>

                            <!-- Edit -->
                            <a
                                href="{{ route('loans.edit', ['loan' => $loanId]) }}"
                                class="button"
                            >
                                تغیر
                            </a>

                            <!-- Approve / Reject -->
                            @if ($loanStatus === 'pending')

                                <form
                                    action="{{ route('loans.update', ['loan' => $loanId]) }}"
                                    method="POST"
                                    style="display: inline;"
                                >
                                    @csrf
                                    @method('PUT')

                                    <input
                                        type="hidden"
                                        name="action"
                                        value="approve"
                                    >

                                    <button type="submit" class="approve-btn">
                                        تایید
                                    </button>
                                </form>

                                <form
                                    action="{{ route('loans.update', ['loan' => $loanId]) }}"
                                    method="POST"
                                    style="display: inline;"
                                    onsubmit="return confirm('ایا د دې پور غوښتنه رد کول غواړئ؟');"
                                >
                                    @csrf
                                    @method('PUT')

                                    <input
                                        type="hidden"
                                        name="action"
                                        value="reject"
                                    >

                                    <button type="submit" class="reject-btn">
                                        ردول
                                    </button>
                                </form>

                            @endif

                            <!-- Delete -->
                            <form
                                action="{{ route('loans.destroy', ['loan' => $loanId]) }}"
                                method="POST"
                                style="display: inline;"
                                onsubmit="return confirm('ایا په یقین سره دا پور حذف کول غواړئ؟');"
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
                        <td colspan="6">
                            تر اوسه د پورونو معلومات نه دي ثبت شوي.
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
                        <img src="{{ asset('images/communication.png') }}" alt="Facebook" class="imge">
                    </a>
                </li>

                <li class="icone">
                    <a
                        href="https://youtube.com/@atefullahdarman2024"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        <img src="{{ asset('images/youtube.png') }}" alt="YouTube" class="imge">
                    </a>
                </li>

                <li class="icone">
                    <a
                        href="https://www.linkedin.com/in/atefullah-zafar-zoy-2a7019399/"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        <img src="{{ asset('images/linkedin.png') }}" alt="LinkedIn" class="imge">
                    </a>
                </li>

                <li class="icone">
                    <a
                        href="https://wa.me/93731597286"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        <img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp" class="imge">
                    </a>
                </li>
            </ul>
        </div>

        <div class="Contact">
            <h4>زموږ سره اړیکه ونیسئ</h4>
            <p>Email: atefullahdarman@gmail.com</p>
            <p>Phone: 0731507286</p>
        </div>

        <hr>

        <div class="address">
            <p>Copyright © 2026 Online Bank</p>
            <p>پته: کندهار، افغانستان</p>
        </div>

    </footer>

</main>
</body>
</html>
