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
                    <form action="">
                        <div class="form-group">
                            <h4 class="font-xsss ps-1 mb-2 text-grey-900 fw-400">E-poçt</h4>
                            <input type="email" class="form-control font-xssss text-grey-700 mb-3"
                                placeholder="example@gmail.com" required>
                        </div>

                        <div class="form-group">
                            <h4 class="font-xsss ps-1 mb-2 text-grey-900 fw-400">Şifrə</h4>
                            <input type="password" class="form-control font-xssss text-grey-700 mb-3"
                                placeholder="*********">
                        </div>
                        <button type="submit" class="btn custom__button px-5 mb-2 w-100">Giriş</button>
                    </form>

                    <span class="font-xssss ps-1 mt-1 text-grey-500 text-center fw-400">Şifrənizi unutmusunuz ? <a
                            href="#" class="fw-400">Şifrəni sıfırla</a></span>

                    <hr>

                    <span class="font-xsssss ps-1 text-grey-700 fw-400 text-center">Hesabın yoxdursa <a
                            href="./register.html">Hesab Yarat</a></span>

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