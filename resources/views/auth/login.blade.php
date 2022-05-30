@extends('layouts.auth')

@section('sign_in')
    <title>SignIn</title>
    <div class="form-container sign-in-container">
        <form action="/login" method="post">
            @csrf
            <h1>ورود</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="{{route('auth.google')}}" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>یا از اطلاعات حساب خود استفاده کنید</span>
            <input type="email" placeholder="ایمیل"/>
            <input type="password" placeholder="گذرواژه"/>
            <a href="#" class="forgot-password">گذرواژه خود را فراموش کردید؟</a>
            <button>ورود</button>
        </form>
    </div>
@endsection

