{{--
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
--}}
@extends('front.layout.master')
@section('content')
    <!-- MAIN WRAPPER -->

    <div class="main-wrapper login__register min-vh-100 bg-grey">
        <div class="container min-vh-100">
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <a href="./index.html"><img src="{{asset('front/assets/images/logo.png')}}" width="250"></a>
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="login__card d-flex flex-column shadow-sm pt-3 pb-4 px-3">
                    <h4 class="mb-4 text-current text-grey-900 fw-600 text-center">Giriş</h4>
                     <form method="POST" action="{{ route('login') }}">
                         @if($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                    @foreach($errors->all() as $error)
                    <li> <x-auth-validation-errors class="mb-4" :errors="$errors" /></li>
                      @endforeach
                      </ul>
                    </div>
                      @endif
        
                           
                        
                        @csrf
                        <div class="form-group">
                            <h4 class="font-xsss ps-1 mb-2 text-grey-900 fw-400">E-poçt</h4>
                            <input type="email" name="email" class="form-control font-xssss text-grey-700 mb-3"
                                placeholder="example@gmail.com" required>
                        </div>

                        <div class="form-group">
                            <h4 class="font-xsss ps-1 mb-2 text-grey-900 fw-400">Şifrə</h4>
                            <input type="password" name="password" class="form-control font-xssss text-grey-700 mb-3"
                                placeholder="*********">
                        </div>
                        <button type="submit" class="btn custom__button px-5 mb-2 w-100">Giriş</button>
                    </form>

                    <span class="font-xssss ps-1 mt-1 text-grey-500 text-center fw-400">Şifrənizi unutmusunuz ? <a
                            href="{{ route('password.request') }}" class="fw-400">Şifrəni sıfırla</a></span>

                    <hr>

                    <span class="font-xsssss ps-1 text-grey-700 fw-400 text-center">Hesabın yoxdursa <a
                            href="{{route('register')}}">Hesab Yarat</a></span>

                    <span class="font-xsssss ps-1 mt-2 mb-2 text-grey-500 fw-400 text-center">və ya</span>
                    <div class="d-flex justify-content-center">
                        <a href="#"><img src="{{asset('front/assets/images/facebook.png')}}" width="25" alt=""></a>
                        <span class="px-2 font-xsss d-flex align-items-center text-grey-500 fw-400 text-center">/</span>
                        <a href="#"><img src="{{asset('front/assets/images/google.png')}}" width="25" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- MAIN WRAPPER -->

@endsection