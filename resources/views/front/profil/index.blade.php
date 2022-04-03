@extends('front.layout.master')
@section('content')
<!-- MAIN WRAPPER -->

  <div class="main-wrapper mx-auto py-5 px-3 mw bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @include('front.profil.ust_hisse')


                    <div class="profile__details row px-1 px-md-5 pt-4">
                        <div class="col-12">
                            <div class="row mb-2 border-bottom py-4">
                                <div class="col-4 col-md-3"><span class="text-grey-900 fw-500 font-xss">Ad</span></div>
                                <div class="col-8 col-md-4"><span class="text-grey-600 font-xss">{{Auth::user()->name}}</span></div>
                            </div>

                            <div class="row mb-2 border-bottom py-4">
                                <div class="col-4 col-md-3"><span class="text-grey-900 fw-500 font-xss">Soyad</span></div>
                                <div class="col-8 col-md-4"><span class="text-grey-600 font-xss">{{Auth::user()->surname}}</span></div>
                            </div>

                            <div class="row mb-2 border-bottom py-4">
                                <div class="col-4 col-md-3"><span class="text-grey-900 fw-500 font-xss">E-poçt</span></div>
                                <div class="col-8 col-md-4"><span class="text-grey-600 font-xss">{{Auth::user()->email}}</span></div>
                            </div>

                            <div class="row mb-2 border-bottom py-4">
                                <div class="col-4 col-md-3"><span class="text-grey-900 fw-500 font-xss">Telefon</span></div>
                                <div class="col-8 col-md-4"><span class="text-grey-600 font-xss">{{Auth::user()->phone}}</span></div>
                            </div>

                            <div class="row mb-2 border-bottom py-4">
                                <div class="col-4 col-md-3"><span class="text-grey-900 fw-500 font-xss">Adres</span></div>
                                <div class="col-8 col-md-4"><span class="text-grey-600 font-xss">{{Auth::user()->adress}}</span></div>
                            </div>
                        </div>
                    </div>







                </div>
            </div>
        </div>
    </div>


    <!-- MAIN WRAPPER -->
    @endsection
