<!DOCTYPE html>
<html lang="ps" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/1.png') }}" type="image/x-icon">
    <meta name="description" content="Bank management system">
    <meta name="author" content="Atefullah">
    <meta name="keywords" content="bank, online, transactions, money, account, loan, customer">
    <title>د مشتریانو مدیریت | بانک مدیریت سیسټم</title>
    @vite([
        'resources/css/style.css',
        'resources/css/account.css',
        'resources/css/transaction.css',
        'resources/css/customers.css'
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
                <img src="{{ asset('images/symbols.png') }}"alt="لوګو" id="logo"></a>
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
                <button type="button" class="btn" id="btn1"> <b>ننوتل</b></button>
                <button type="button" class="btn" id="btn2"> <b>وتل</b> </button>
            </div>
        </nav>
    </header>
    <!-- Customer Information -->
    <section class="section_customers">
        <img src="{{ asset('images/customer-satisfaction.png') }}" alt="د مشتریانو انځور" id="customers">
        <h2>د مشتریانو د معلوماتو مدیریت</h2>

        <ul>
            <li>کارکوونکي کولی شي د مشتریانو شخصي معلومات اضافه، تازه او حذف کړي.</li>
            <li>سیسټم د مشتریانو نوم، پته، تلیفون، ایمیل او پېژندنې اسناد ساتي.</li>
            <li>معلومات په منظم ډول ذخیره کېږي، ترڅو وروسته بېرته ترلاسه شي.</li>
        </ul>
    </section>
    <!-- Success Message -->
    @if (session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif
    <!-- Error Message -->
    @if (session('error'))
        <div class="error-message">
            {{ session('error') }}
        </div>
    @endif
    <!-- Add Customer Button -->
    <div style="margin-bottom: 20px;">
        <button type="button" class="btn_add" onclick="window.location.href='{{ route('customers.create') }}'"> <b>نوی مشتری اضافه ➕</b></button>
    </div>
    <!-- Customers Table -->
    <section class="table-container">
        <table>
            <thead>
                <tr>
                    <th>نوم</th>
                    <th>ایمیل</th>
                    <th>د تلیفون شمېره</th>
                    <th>پته</th>
                    <th>د پېژندنې سند</th>
                    <th>حالت</th>
                    <th>عمل</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($customers as $customer)
                    <tr>
                        <td>{{ $customer['name'] ?? '' }}</td>
                        <td>{{ $customer['email'] ?? '—' }}</td>
                        <td>{{ $customer['phone'] ?? '' }}</td>
                        <td>{{ $customer['address'] ?? '' }}</td>
                        <td>
                            @php
                                $documents = [
                                    'passport' => 'پاسپورټ',
                                    'tazkira' => 'تذکره',
                                    'master_card' => 'ماسټر کارډ',
                                    'visa_card' => 'ویزه کارت',
                                    'card' => 'کارت',
                                ];
                            @endphp

                            {{ $documents[$customer['identity_document'] ?? ''] ?? ($customer['identity_document'] ?? '—') }}
                        </td>
                        <td>
                            @if (($customer['status'] ?? '') === 'active')
                                فعال
                            @else
                                غیر فعال
                            @endif
                        </td>
                        <td>
                            <button type="button" class="view-btn"onclick="window.location.href='{{ route('customers.show', ['customer' => $customer['id']]) }}'" > کتل </button>
                            <button type="button"class="show"onclick="window.location.href='{{ route('customers.edit', ['customer' => $customer['id']]) }}'"> تغیر</button>
                            <form
                                action="{{ route('customers.destroy', ['customer' => $customer['id']]) }}"
                                method="POST"
                                style="display: inline;"
                                onsubmit="return confirm('ایا ډاډه یاست چې دا مشتری حذف کړئ؟');"
                            >
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="reject-btn"> حذف </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">
                            تر اوسه هېڅ مشتری نه دی ثبت شوی.
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
                <li class="icone"><a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer"><img src="{{ asset('images/communication.png') }}" alt="Facebook" class="imge"> </a></li>
                <li class="icone"><a href="https://www.youtube.com/" target="_blank" rel="noopener noreferrer"> <img src="{{ asset('images/youtube.png') }}" alt="YouTube" class="imge"></a></li>                
                <li class="icone"><a href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer"> <img src="{{ asset('images/linkedin.png') }}" alt="LinkedIn" class="imge">  </a> </li>
                <li class="icone"><a href="https://wa.me/93731597286" target="_blank" rel="noopener noreferrer"> <img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp" class="imge"></a></li>
            </ul>
        </div>
        <div class="Contact">
            <h4>موږ سره اړیکه ونیسئ</h4>
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
