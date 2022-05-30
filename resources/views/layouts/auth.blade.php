<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/auth_style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

<div class="container" id="container">
    {{--    login : sign_in--}}
    @yield('sign_in')
    {{--    register : sign_up --}}
    @yield('sign_up')
    <script type="text/javascript">
        const cont = document.getElementById('container');
        if (document.title === "SignUp") {
            setTimeout(function () {
                cont.classList.add('right-panel-active');
            }, 0.5);
        }
    </script>
    <div class="overlay-container">
        <div class="overlay">
            {{--            sign_in_button--}}
            <div class="overlay-panel overlay-left">
                <h1>حساب کاربری دارید؟</h1>
                <p>اگر قبلا در ثبت نام کرده اید می توانید با وارد کردن اطلاعات حساب خود وارد شوید.</p>
                <button class="ghost" ><a id="signIn" href="/login">ورود</a></button>
            </div>
            {{--            sign_up_button--}}
            <div class="overlay-panel overlay-right">
                <h1>کاربر جدید هستید؟</h1>
                <p>ابتدا باید ثبت نام کنید.</p>
                <button class="ghost" ><a id="signUp" href="/register">ثبت نام</a></button>
            </div>
        </div>
    </div>
</div>

<!------------JS!------------>
<script src="{{ asset('js/auth.js') }}"></script>

</body>

</html>