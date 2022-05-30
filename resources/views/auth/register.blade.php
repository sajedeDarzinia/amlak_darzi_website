@extends('layouts.auth')

@section('sign_up')
    <title>SignUp</title>
    <div class="form-container sign-up-container">
        <form action="/register" method="post">
            @csrf
            <h1>ثبت نام کنید</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="{{route('auth.google')}}" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>یا با ایمیل خود ثبت نام کنبد</span>
            <input type="text" placeholder="نام کاربری"/>
            <input type="email" placeholder="ایمیل"/>
            <input type="password" placeholder="گذرواژه"/>
            <button>ثبت نام</button>
        </form>
    </div>

@endsection
