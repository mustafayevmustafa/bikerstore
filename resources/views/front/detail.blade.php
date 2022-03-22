@extends('front.layout.master')
@section('content')
   <!-- MAIN WRAPPER -->

    <div class="main-wrapper mx-auto mw bg-white py-3 px-2 px-md-3">
        <div class="container detail">
            <div class="row">
                <div class="col-lg-5 text-white">
                    <div class="w-100 posr">
                        <span class="wishlist posa">
                            <i class='bx bx-heart text-current font-md'></i>
                        </span>
                        <img src="{{asset("storage/{$biker->getAttribute('image')}")}}" alt="" class="detail__img w-100 rounded rounded-2">
                    </div>
                    <div class="more__detail">
                        <div class="row py-3 ovh w-100 ms-0">
                            <div class="font-xss row ps-1 text-grey-900 pb-2 border-bottom mb-3 ovh">
                                <span class="col-6">Şəhər:</span>
                                <span class="col-6">{{$biker->city->name}}</span>
                            </div>

                            <div class="font-xss row ps-1 text-grey-900 pb-2 border-bottom mb-3 ovh">
                                <span class="col-6">Marka:</span>
                                <span class="col-6">{{$biker->marka->name}}</span>
                            </div>

                            <div class="font-xss row ps-1 text-grey-900 pb-2 border-bottom mb-3 ovh">
                                <span class="col-6">Model:</span>
                                <span class="col-6">{{$biker->pattern->name}}</span>
                            </div>

                            <div class="font-xss row ps-1 text-grey-900 pb-2 border-bottom mb-3 ovh">
                                <span class="col-6">Rəng:</span>
                                <span class="col-6">{{$biker->color->name}}</span>
                            </div>

                            <div class="font-xss row ps-1 text-grey-900 pb-2 border-bottom mb-3 ovh">
                                <span class="col-6">Yeni:</span>
                                <span class="col-6">Bəli</span>
                            </div>

                            <div class="font-xss row ps-1 text-grey-900 pb-2 border-bottom mb-3 ovh">
                                <span class="col-6">Mühərrik:</span>
                                <span class="col-6">0.2 L</span>
                            </div>

                            <div class="font-xss row ps-1 text-grey-900 pb-2 border-bottom mb-3 ovh">
                                <span class="col-6">Mühərrikin gücü:</span>
                                <span class="col-6">23 a.g</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 text-white">
                    <div class="ad__detail d-flex flex-column justify-content-between">
                        <div class="detail__info">
                            <h2 class="text-grey-900 font-xxl">{{$biker->marka->name}}</h2>
                            <p class="font-xssss text-grey-600">{{$biker->description}}
                            </p>

                            <div class="w-100 d-flex justify-content-between align-items-center">
                                <span class="text-current font-lg fw-500">{{$biker->price}}₼</span>
                                <span class="text-grey-700 d-flex align-items-center">
                                    <i class='bx bx-mobile-alt font-sm me-1'></i>
                                    <span class="font-xsss">{{$biker->contact_phone}}</span>
                                </span>
                            </div>
                        </div>
                        <div class="buttons d-flex justify-content-between mt-2">
                            <button class="bg-current custom__button border border-1 font-xss btn text-white">
                                <i class='bx bxs-up-arrow-circle font-md me-1'></i>
                                <span>Elanı irəli çək</span>
                            </button>
                            <button class="bg-danger custom__button border font-xss btn text-white">
                                <i class='bx bxs-crown font-sm me-1'></i>
                                <span>Elanı vip et</span>
                            </button>
                        </div>
                    </div>

                    <div
                        class="banner__detail mt-4 text-grey-500 rounded-2 w-100 d-flex justify-content-center align-items-center bg-grey">
                        Burada sizin reklamınız ola bilərdi
                    </div>
                </div>


            </div>

            <div class="row mt-3">
                <div class="col-12">
                    <div class="buttons d-flex justify-content-between justify-content-lg-start">
                        <button class="bg-current custom__button border border-1 font-xss btn text-white me-2">
                            <i class='bx bx-edit-alt font-md me-1'></i>
                            <span>Düzəliş et</span>
                        </button>
                        <button class="bg-danger custom__button border font-xss btn text-white">
                            <i class='bx bx-x font-lg me-1'></i>
                            <span>Elanı sil</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- MAIN WRAPPER -->

@endsection