


    <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ثبت نام</title>
    <link rel="stylesheet" href="/persiatc/assets/vendor/fontawesome/font-awesome.min.css">
    <link rel="stylesheet" href="/persiatc/assets/css/main.css">
    <link rel="stylesheet" href="/persiatc/assets/css/mediaq.css">
</head>
<body>

    <section class="account-box">
        @if($errors->any())
            <div class="c-message-light c-message-light--info" style="background-color: #ca4949;color:white">
                @foreach ($errors->all() as $error)
                <div class="c-message-light__justify">
                    <p class="c-message-light--text">
                    <div>{{ $error }}</div>
                    </p>
                </div>
                @endforeach
            </div>
        @endif
        <div class="register-logo">
            <a href="/"><img style="height: 130px;width: 180px;" src="/persiatc/Logo.bmp" alt=""></a>
        </div>
        <div class="register login">
            <div class="headline">ورود به ارتباطات پرشیا</div>
            <div class="content">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <label for="mobtel">شماره موبایل</label>
                    <input name="mobile" value="{{ old('mobile') }}" required autocomplete="off"  id="mobtel" class="@error('mobile') is-invalid @enderror" type="text" placeholder="شماره موبایل خود را وارد نمایید">
                    <label for="pwd">کلمه عبور</label>
                    <input name="password" value="{{ old('password') }}" required autocomplete="off"  id="pwd" type="text" class="@error('password') is-invalid @enderror"placeholder="کلمه عبور خود را وارد نمایید">
                    <div class="acc-agree">
                        <input id="chkbox" type="checkbox" checked>
                        <label for="chkbox"><span>مرا به خاطر داشته باش</span></label>
                    </div>
                    <button type="submit"><i class="fa fa-unlock"></i> ورود به ارتباطات پرشیا</button>
                </form>
            </div>
            <div class="foot login-foot">
                <span>کاربر جدید هستید؟</span>
                <a href="{{ route('register') }}">ثبت نام در ارتباطات پرشیا</a>
            </div>
        </div>
    </section>

    <footer>
        <section class="footer account-footer container">
            <ul>
                <li><a href="#">درباره ارتباطات پرشیا</a></li>
                <li><a href="#">فرصت های شغلی</a></li>
                <li><a href="#">تماس با ما</a></li>
                <li><a href="#">همکاری با سازمان ها</a></li>
            </ul>
            <div class="copyright"><p>استفاده از مطالب فروشگاه اینترنتی ارتباطات پرشیا فقط برای مقاصد غیرتجاری و با ذکر منبع بلامانع است. کلیه حقوق این سایت متعلق به شرکت فلان (فروشگاه آنلاین ارتباطات پرشیا) می‌باشد.</p></div>

            <div class="copyright-en">
                <p>Copyright © 2006 - 2018 persiatc.com</p>
            </div>
        </section>
    </footer>

    <script src="/persiatc/assets/js/jquery.min.js"></script>
    <script src="/persiatc/assets/js/script.js"></script>
</body>
</html>
