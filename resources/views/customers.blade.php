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
        'resources/css/customers.css'
        ])
</head>
<body>
<main>
    <!-- Header --> 
    <header class="header">
        <nav class="nav">
            <input type="checkbox" id="menu-toggle">
            <label for="menu-toggle" class="menu-icon">&#9776;</label>
            <!-- Logo -->
            <a href="{{ route('index') }}">
                <img
                    src="{{ asset('images/symbols.png') }}"
                    alt="لوګو"
                    id="logo">
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
            <div class="buttons">
                <button type="button" class="btn" id="btn1"><b>ننوتل</b></button>
                <button type="button" class="btn" id="btn2"><b>وتل</b></button>
            </div>
        </nav>
    </header>

    <!-- Customer Information -->
    <section class="section_customers">
        <img
            src="{{ asset('images/customer-satisfaction.png') }}"
            alt="د مشتریانو انځور"
            id="customers">
        <h2>د مشتریانو د معلوماتو مدیریت</h2>
        <ul>
            <li>کارکوونکي کولی شي د مشتریانو شخصي معلومات اضافه، تازه او حذف کړي.</li>
            <li>سیسټم نوم، پته، تلیفون، ایمیل او د پېژندنې اسناد ذخیره کوي.</li>
            <li>معلومات په منظم ډول ساتل کېږي، ترڅو وروسته بېرته ترلاسه شي.</li>
        </ul>
    </section>

    <!-- Success Message -->
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

    <!-- Add Customer -->
    <div style="margin-bottom: 20px;">
        <button
            type="button"
            class="btn_add"
            onclick="window.location.href='{{ route('customers.create') }}'"><b>نوی مشتری اضافه ➕</b></button>
    </div>
    <!-- Customers Table -->
    <section class="table-container">
        <table>
            <thead>
                <tr>
                    <th>نوم</th>
                    <th>ایمیل</th>
                    <th>فون نمبر</th>
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
                            {{ ($customer['status'] ?? '') === 'active' ? 'فعال' : 'غیرفعال' }}
                        </td>
                        <td>
                            <!-- Edit -->
                            <button
                                type="button"
                                class="edit-btn"
                                onclick="window.location.href='{{ route('customers.edit', ['customer' => $customer['id']]) }}'">  تغیر</button>
                            <!-- Delete -->
                            <form
                                action="{{ route('customers.destroy', ['customer' => $customer['id']]) }}"
                                method="POST"
                                style="display: inline;"
                                onsubmit="return confirm('ایا ډاډه یاست چې دا مشتری حذف کړئ؟');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-btn"> حذف</button>  
                            </form>
                            <!-- Copy -->
                            <button
                                type="button"
                                class="copy-btn"
                                onclick="copyCustomer(this)"
                                data-customer="{{ json_encode([
                                    'name' => $customer['name'] ?? '',
                                    'email' => $customer['email'] ?? '',
                                    'phone' => $customer['phone'] ?? '',
                                    'address' => $customer['address'] ?? '',
                                    'identity_document' => $customer['identity_document'] ?? '',
                                    'status' => $customer['status'] ?? '',
                                ], JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_TAG | JSON_HEX_AMP) }}"
                            >
                                کاپي
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">
                            تر اوسه هېڅ مشتری نه دی ثبت شوی.
                            <a href="{{ route('customers.create') }}">نوی مشتری اضافه کړئ</a>
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
                <li class="icone">
                    <a href="https://www.facebook.com/profile.php?id=61581411182010&amp;mibextid=rS40aB7S9Ucbxw6v" target="_blank" rel="noopener noreferrer"><img src="{{ asset('images/communication.png') }}" alt="Facebook" class="imge"></a>
                </li>
                <li class="icone">
                    <a href="https://youtube.com/@atefullahdarman2024?si=0NYU_P_U1NYrstaZ" target="_blank" rel="noopener noreferrer"><img src="{{ asset('images/youtube.png') }}" alt="YouTube" class="imge"></a>
                </li>
                <li class="icone">
                    <a href="https://www.linkedin.com/in/atefullah-zafar-zoy-2a7019399?utm_source=share_via&amp;utm_content=profile&amp;utm_medium=member_android" target="_blank" rel="noopener noreferrer"><img src="{{ asset('images/linkedin.png') }}" alt="LinkedIn" class="imge"></a>
                </li>
                <li class="icone">
                    <a href="https://wa.me/93731597286" target="_blank" rel="noopener noreferrer"><img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp" class="imge"></a>
                </li>
            </ul>
        </div>
        <div class="Contact">
            <h4>موږ سره اړیکه ونیسئ</h4>
            <p id="footer_p">Email: atefullahdarman@gmail.com</p>
            <p id="footer_p">Phone: 0731507286</p>
        </div>
        <hr>
        <div class="address">
            <p>Copyright © 2026 Online Bank</p>
            <p>پته: کندهار، افغانستان</p>
        </div>
    </footer>
</main>

<script>
    async function copyCustomer(button) {
        const customer = JSON.parse(button.dataset.customer);

        const text = [
            `نوم: ${customer.name}`,
            `ایمیل: ${customer.email}`,
            `فون نمبر: ${customer.phone}`,
            `پته: ${customer.address}`,
            `د پېژندنې سند: ${customer.identity_document}`,
            `حالت: ${customer.status}`
        ].join('\n');

        try {
            await navigator.clipboard.writeText(text);
            alert('د مشتری معلومات کاپي شول.');
        } catch (error) {
            const textarea = document.createElement('textarea');
            textarea.value = text;
            document.body.appendChild(textarea);
            textarea.select();
            const copied = document.execCommand('copy');
            textarea.remove();
            alert(copied ? 'د مشتری معلومات کاپي شول.' : 'کاپي کول ناکام شول.');
        }
    }
</script>
</body>
</html>
