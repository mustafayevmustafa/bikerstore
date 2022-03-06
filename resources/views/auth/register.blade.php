{{--
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
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
        <div class="container min-vh-100 pb-5">
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <a href="./index.html"><img src="{{asset('front/assets/images/logo.png')}}" width="250"></a>
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="login__card d-flex flex-column shadow-sm pt-3 pb-4 px-3">
                    <h4 class="mb-4 text-current text-grey-900 fw-600 text-center">Qeydiyyat</h4>
                    <form method="POST" action="{{ route('register') }}">
                    @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <h4 class="font-xsss ps-1 mb-2 text-grey-900 fw-400">Ad</h4>
                                    <input type="text" class="form-control font-xssss text-grey-700 mb-3" placeholder="Ad" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <h4 class="font-xsss ps-1 mb-2 text-grey-900 fw-400">Soyad</h4>
                                    <input type="text" class="form-control font-xssss text-grey-700 mb-3" placeholder="Soyad" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <h4 class="font-xsss ps-1 mb-2 text-grey-900 fw-400">E-poçt</h4>
                            <input type="email" class="form-control font-xssss text-grey-700 mb-3" placeholder="example@gmail.com" required>
                        </div>
                        <div class="form-group">
                            <h4 class="font-xsss ps-1 mb-2 text-grey-900 fw-400">Telefon</h4>
                            <input type="number" class="form-control font-xssss text-grey-700 mb-3" placeholder="994 XX XXX XX XX" required>
                        </div>


                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <h4 class="font-xsss ps-1 mb-2 text-grey-900 fw-400">Şifrə</h4>
                                    <input type="password" class="form-control font-xssss text-grey-700 mb-3" placeholder="*********" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <h4 class="font-xsss ps-1 mb-2 text-grey-900 fw-400">Şifrə Təkrarı</h4>
                                    <input type="password" class="form-control font-xssss text-grey-700 mb-3" placeholder="*********" required>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn custom__button px-5 mb-2 w-100">Qeydiyyat</button>
                    </form>

                    <hr>

                    <span class="font-xsssss ps-1 text-grey-900 fw-400 text-center">Hesabın varsa <a
                            href="./login.html">Giriş et</a></span>

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