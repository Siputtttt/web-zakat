@extends('AUTHH/template')

@section('contentadm')
<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <h2>Al - Ikhlas</h2>
                            </a>
                        </div>
                        <div class="login-form">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" id="email"
                                        placeholder="Email" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password"
                                        id="password" placeholder="Password" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" />Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit"> sign in
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery JS-->
@endsection