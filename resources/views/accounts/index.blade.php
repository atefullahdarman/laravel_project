<!DOCTYPE html>
<html lang="ps" dir="rtl">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="./images/1.png" type="image/x-icon">
    <meta name="description" content="this is bank static and degital system">
    <meta name="author" content="Atefullah">
    <meta name="keywords" content="bank,online,transactions,money,account,loan,icons,report,customer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بانک مدیریت سیسټم</title>
    @vite('resources/css/style.css')
    @vite('resources/css/account.css')
</head>
<body>
<main>
    <!-- Header -->
    <header class="header">
        <nav class="nav">
            <input type="checkbox" id="menu-toggle">
            <label for="menu-toggle" class="menu-icon">&#9776;</label>
            <a href="{{ route('index') }}"><img src="{{ asset('images/symbols.png') }}" alt="logo" id="logo"></a>
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
                <button class="btn" id="btn1"><b>ننوتل</b></button>
                <button class="btn" id="btn2"><b>وتل</b></button>
            </div>
        </nav>
    </header>
    <!-- Account Information -->
    <div class="h2_button_li">
        <img src="{{ asset('images/check.png') }}" alt="user account photo"id="accout_photo">
        <h2>د حسابونو مدیریت</h2>
        <ul>
            <li>اډمین او کارکوونکی کولی شي د مشتریانو حسابونه جوړ، تازه او یا حذف کړي.</li>
            <li>هر حساب به ځانګړی حساب نمبر لري.</li>
            <li>مشتریان به کولی شي خپل حساب بیلانس او حالت وګوري.</li>
        </ul>
        <a class="addbtnc" href="{{ route('accounts.create') }}"><b>د نوي اکونت اضافه ➕</b></a>
    </div>

    <!-- Success Message -->
    <section class="table-container">
        @if (session('success'))
            <p class="success-message">{{ session('success') }}</p>
        @endif
        @if ($errors->any())
            <div class="error-message">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <!-- Accounts Table -->
        <table>
            <thead>
                <tr>
                    <th>اکونت نمبر</th>
                    <th>نوم</th>
                    <th>ایمیل</th>
                    <th>بیالنس</th>
                    <th>حالت</th>
                    <th>عمل</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($accounts as $account)
                    <tr>
                        <td>{{ $account['account_number'] ?? '' }}</td>
                        <td>{{ $account['name'] ?? '' }}</td>
                        <td>{{ $account['email'] ?? '' }}</td>
                        <td>افغاني {{ number_format((float) ($account['balance'] ?? 0), 2) }}</td>
                        <td>{{ ($account['status'] ?? '') === 'active' ? 'فعال' : (($account['status'] ?? '') === 'inactive' ? 'غیر فعال' : ($account['status'] ?? '')) }}</td>
                        <td class="button_edit_dele">
                            <!-- Edit -->
                            <a href="{{ route('accounts.edit', $account['id']) }}" class="btnedit"> تغیر</a>

                            <!-- Show -->
                            <a href="{{ route('accounts.show', $account['id']) }}" class="show">کتل </a>

                            <!-- Delete -->
                            <form action="{{ route('accounts.destroy', $account['id']) }}"
                                  method="POST"
                                  style="display: inline;"
                                  onsubmit="return confirm('ایا ډاډه یاست چې دا حساب حذف کړئ؟');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="reject-btn" >  حذف</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">تر اوسه هېڅ حساب نه دی ثبت شوی.</td>
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
                <a href="#"><li class="icone"><img src="{{ asset('images/communication.png') }}" alt="facebook" class="imge"></li></a>
                <a href="#"><li class="icone"><img src="{{ asset('images/youtube.png') }}" alt="youtube" class="imge"></li></a>
                <a href="#"> <li class="icone"> <img src="{{ asset('images/linkedin.png') }}" alt="linkedin" class="imge"></li></a>
                <a href="#"><li class="icone"><img src="{{ asset('images/whatsapp.png') }}" alt="whatsapp" class="imge"></li></a>
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
            <p>ادرس: کندهار افغانستان</p>
        </div>
    </footer>
</main>
</body>
</html>
