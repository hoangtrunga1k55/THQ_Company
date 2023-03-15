@extends('rm.auth.layouts.app')

@section('title', __('auth.login'))

@section('content')
    <div class="login-box">
        <div class="login-box-body">
            <div class="login-logo">
                <img src="/images/logo_2x.png" />
                <div class="system-name">@lang('auth.system_name')</div>
            </div>
            <form method="POST" action="{{ route('login') }}" novalidate>
                @csrf
                <div class="form-group email-group">
                    <label for="email">@lang('auth.email')</label>
                    <input id="email" type="email" class="form-control input-lg" name="email" value="{{ old('email') }}" placeholder="@lang('auth.email')">
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>
                <div class="form-group password-group">
                    <label for="password">@lang('auth.password')</label>
                    <input id="password" type="password" placeholder="@lang('auth.password')"
                           class="form-control input-lg hidden-icon-close" name="password">
                    <span toggle="#password" class="fa fa-lg fa-eye field-icon toggle-password"></span>
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="remember" id="remember">@lang('auth.remember_me')</label>
                </div>
                <button type="submit" class="btn btn-primary btn-block btn-lg" route="/login">
                    <span class="fas fa-sign-in-alt"></span>
                    @lang('auth.login')
                </button>
            </form>
{{--            <div class="forgot-password">--}}
{{--                <a href="{{ route('rm.password.request') }}">@lang('auth.forgot_pw')</a>--}}
{{--            </div>--}}
        </div>
    </div>
@endsection
