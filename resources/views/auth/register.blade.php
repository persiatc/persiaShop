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
        <div class="register">
            <div class="headline">ثبت‌نام در ارتباطات پرشیا</div>
            <div class="content">
                <span class="hint">اگر قبلا با ایمیل ثبت‌نام کرده‌اید، نیاز به ثبت‌نام مجدد با شماره همراه ندارید</span>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <label for="mobtel"> نام و نام خانوادگی</label>
                    <input id="mobtel" name="name" value="{{ old('name') }}" class="@error('name') is-invalid @enderror" type="text" placeholder=" نام و نام خانوادگی خود را وارد نمایید">
                    <label for="mobtel">شماره موبایل</label>
                    <input id="mobtel" name="mobile" value="{{ old('mobile') }}" class="@error('mobile') is-invalid @enderror" type="text" placeholder="شماره موبایل خود را وارد نمایید">
                    <label for="pwd">کلمه عبور</label>
                    <input id="pwd" name="password" value="{{ old('password') }}" class="@error('password') is-invalid @enderror"  type="text" placeholder="کلمه عبور خود را وارد نمایید">
                    <label for="pwd">تکرار کلمه عبور</label>
                    <input id="pwd" name="password_confirmation" type="text" placeholder="تکرار کلمه عبور خود را وارد نمایید">
                    <div class="acc-agree">
                        <input id="chkbox" type="checkbox">
                        <label for="chkbox">
                            <a href="#">حریم خصوص</a>
                            <span>و</span>
                            <a href="#">شرایط و قوانین</a>
                            <span> استفاده از سرویس های سایت ارتباطات پرشیا را مطالعه نموده و با کلیه موارد آن موافقم.</span>
                        </label>
                    </div>
                    <button type="submit"><i class="fa fa-user-plus"></i> ثبت نام در ارتباطات پرشیا</button>
                </form>
            </div>
            <div class="foot">
                <span>قبلا در ارتباطات پرشیا ثبت‌نام کرده‌اید؟</span>
                <a href="{{ route('login') }}">وارد شوید</a>
            </div>
        </div>
    </section>

    <footer style="position: unset;">
        <section class="footer account-footer container" >
            <ul>
                <li><a href="#">درباره ارتباطات پرشیا</a></li>
                <li><a href="#">فرصت های شغلی</a></li>
                <li><a href="#">تماس با ما</a></li>
                <li><a href="#">همکاری با سازمان ها</a></li>
            </ul>
            <div class="copyright"><p>استفاده از مطالب فروشگاه اینترنتی ارتباطات پرشیا فقط برای مقاصد غیرتجاری و با ذکر منبع بلامانع است. کلیه حقوق این سایت متعلق به شرکت فلان (فروشگاه آنلاین ارتباطات پرشیا) می‌باشد.</p></div>

            <div class="copyright-en">
                <p>Copyright © 2021 - 2018 persiatc.com</p>
            </div>
        </section>
    </footer>

    <script src="/persiatc/assets/js/jquery.min.js"></script>
    <script src="/persiatc/assets/js/script.js"></script>
</body>
</html>
