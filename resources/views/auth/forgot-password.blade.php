{{--
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
--}}


<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biker Store</title>
    <link rel="icon" href="{{asset('front/assets/images/icon.png')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('front/assets/owl-carousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/owl-carousel/css/owl.theme.default.css')}}">

</head>
<body>
    <div class="main-wrapper login__register min-vh-100 bg-grey">
        <div class="container min-vh-100">
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <a href="./index.html"><img src="{{asset('front/assets/images/logo.png')}}" width="250"></a>
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="login__card d-flex flex-column shadow-sm pt-3 pb-4 px-3">
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                     <form method="POST" action="{{ route('password.email') }}"">
                        @csrf
                         <div class="mb-4 text-sm text-gray-600">
            {{ __('Şifrəni unutmusan? Problem deyil. Sadəcə e-poçt ünvanınızı bizə bildirin və biz sizə yenisini seçməyə imkan verəcək parol sıfırlama linkini e-poçtla göndərəcəyik.') }}
        </div>
                        <div class="form-group">
                            <h4 class="font-xsss ps-1 mb-2 text-grey-900 fw-400">E-poçt</h4>
                            <input type="email" name="email" class="form-control font-xssss text-grey-700 mb-3"
                                placeholder="example@gmail.com" required>
                        </div>
                        <button type="submit" class="btn custom__button px-5 mb-2 w-100">E-poçt Parol Sıfırlama Linki</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{asset('front/assets/js/app.js')}}"></script>
<script src="{{asset('front/assets/owl-carousel/js/owl.carousel.min.js')}}"></script>
</body>

</html>
