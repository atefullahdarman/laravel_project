
<!DOCTYPE html>
<html lang="ps" dir="rtl">
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="./images/1.png"type="image/x-icon">
  <meta name="description" content="this is bank static and degital system ">
  <meta name="author" content="Atefullah">
  <meta name="keywords" content="bank,online,transactions,money,account,loan,icons,report,customer">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> بانک مدیریت سیسټم </title>
    @vite('resources/css/login.css')
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="bank-logo">
                🏦
            </div>
            <h1> بانک مدیریت سیسټم </h1>
            <p class="login-subtitle">خپل حساب ته ننوتل</p>

            <form>
                <div class="form-group">
                    <label for="username">یوزر نوم</label>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="یوزر نوم ولیکئ"
                    >
                </div>

                <div class="form-group">
                    <label for="email">ایمیل</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="ایمیل ولیکئ"
                    >
                </div>

                <div class="form-group">
                    <label for="password">پاسورډ</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="پاسورډ ولیکئ"
                    >
                </div>  
<a href="{{ route('index') }}">
    <button type="button" class="login-btn">
        ننوتل
    </button>
</a>
            </form>
<p class="login-footer"> بانک مدیریت سیسټم</p>
<p class="login-footer">Copyrigth © 2026 Online Bank</p>

        </div>
    </div>

</body>
</html>
