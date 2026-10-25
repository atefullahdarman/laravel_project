<!DOCTYPE html>
<html lang="ps" dir="rtl">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{ asset('images/1.png') }}" type="image/x-icon">
    <meta name="description" content="Bank management system">
    <meta name="author" content="Atefullah">
    <meta name="keywords" content="bank, online, transactions, money, account, loan, customer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>د حسابونو مدیریت - بانک مدیریت سیسټم</title>
    @vite('resources/css/style.css')
    @vite('resources/css/account.css')
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
            <a href="{{ route('index') }}"><img src="{{ asset('images/symbols.png') }}" alt="logo" id="logo"></a>

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
                <button class="btn" id="btn1" type="button"><b>ننوتل</b></button>
                <button class="btn" id="btn2" type="button"><b>وتل</b></button>
            </div>
        </nav>
    </header>
    <!-- Account information -->
    <div class="h2_button_li">
        <img src="{{ asset('images/check.png') }}" alt="Account photo" id="accout_photo">
        <h2>د حسابونو مدیریت</h2>
        <ul>
            <li>اډمین او کارکوونکی کولی شي د مشتریانو حسابونه جوړ، تازه او یا حذف کړي.</li>
            <li>هر حساب ځانګړی حساب نمبر لري.</li>
            <li>مشتریان کولی شي د حساب بیالنس او حالت وګوري.</li>
        </ul>
        <a href="{{ route('accounts.create') }}" class="add-btn"><b>د نوي اکونټ اضافه ➕</b></a>
    </div>

    <!-- Success and error messages -->
    @if (session('success'))
        <div class="alert-success" role="status">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert-error" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- Accounts table -->
    <section class="table-container">
        <table>
            <thead>
                <tr>
                    <th>اکونټ نمبر</th>
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
                        <td>
                            افغاني {{ number_format((float) ($account['balance'] ?? 0), 2) }}
                        </td>
                        <td>
                            @if (($account['status'] ?? '') === 'active')
                                فعال
                            @elseif (($account['status'] ?? '') === 'inactive')
                                غیر فعال
                            @else
                                {{ $account['status'] ?? '' }}
                            @endif
                        </td>
                        <td class="button_edit_dele">
                            <a href="{{ route('accounts.edit', $account['id']) }}"class="edit-btn"> تغیر</a>    
                            <a href="{{ route('accounts.show', $account['id']) }}"class="show">  کتل</a>
                            <form action="{{ route('accounts.destroy', $account['id']) }}"
                                  method="POST"
                                  style="display: inline;"
                                  onsubmit="return confirm('ایا ډاډه یاست چې دا حساب حذف کړئ؟');">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="delete-btn"> حذف</button>
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
                <li class="icone">
                    <a href="https://www.facebook.com/profile.php?id=61581411182010&mibextid=rS40aB7S9Ucbxw6v" target="_blank" rel="noopener noreferrer"><img src="{{ asset('images/communication.png') }}" alt="Facebook" class="imge"></a>
                </li>
                <li class="icone">
                    <a href="https://youtube.com/@atefullahdarman2024?si=0NYU_P_U1NYrstaZ" target="_blank" rel="noopener noreferrer"><img src="{{ asset('images/youtube.png') }}" alt="YouTube" class="imge"></a>
                </li>
                <li class="icone">
                    <a href="https://www.linkedin.com/in/atefullah-zafar-zoy-2a7019399" target="_blank" rel="noopener noreferrer"><img src="{{ asset('images/linkedin.png') }}" alt="LinkedIn" class="imge"></a>
                </li>
                <li class="icone">
                    <a href="https://wa.me/93731597286" target="_blank" rel="noopener noreferrer"><img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp" class="imge"></a>
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
            <p>ادرس: کندهار، افغانستان</p>
        </div>
    </footer>
</main>
</body>
</html>
 