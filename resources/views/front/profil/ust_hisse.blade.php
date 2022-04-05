<h2 class="font-xl fw-600 text-grey-900 mb-4">İstifadəçi hesabı</h2>
                    <div class="user__info border shadow-xs">
                        <div class="row me-0 me-lg-3">
                            <div class="col-lg-2 col-12 d-flex justify-content-center d-lg-block">
                                <img src="storage/{{Auth::user()->image}}" class="user__img" alt="">
                            </div>
                            <div
                                class="col-lg-4 ps-0 ps-lg-5 col-12 d-flex justify-content-center d-lg-block text-center text-lg-start">
                                <div class="row d-flex flex-column align-items-center d-lg-block">
                                    <h2 class="font-md mt-3 mb-2">{{Auth::user()->name}}</h2>
                                    <div
                                        class="d-flex flex-row mb-2 d-flex justify-content-center justify-content-lg-start">
                                        <a href="{{route('front.profile')}}"
                                            class="w-auto text-grey-600 font-xsss d-flex align-items-center">
                                            <i class='bx bxs-user me-1'></i>
                                            <span>Hesabım</span>
                                        </a>
                                        <span class="font-xssss text-grey-300 mx-3">/</span>
                                        <a href="{{route('front.hesab')}}"
                                            class="w-auto text-grey-600 font-xsss d-flex align-items-center">
                                            <i class='bx bxs-edit me-1'></i>
                                            <span>Düzəliş et</span>
                                        </a>
                                    </div>
                                    <p class="mb-1 text-grey-700 font-xssss">Son giriş: 7 fevral 18:30.</p>
                                    <div
                                        class="payment my-2 font-xsss d-flex flex-row align-items-center justify-content-center text-white">
                                        <span class="me-2">Balansım:</span>
                                        <span>1223.50₼</span>
                                    </div>
                                    <a href="{{route('front.logout')}}" class="logout posr mb-3 mb-lg-0 btn custom__button">Çıxış
                                        et</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row h-100 d-flex align-items-center flex-wrap">
                                    <div class="col-lg-4 mb-2 mb-lg-0">
                                        <div class="row h-100 px-2 d-flex justify-content-center d-lg-block">
                                            <div class="ads__info__box border-current text-current my-auto py-4">
                                                <h2 class="font-xl">76</h2>
                                                <p class="">Ümumi Elan</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 mb-2 mb-lg-0">
                                        <div class="row h-100 px-2 d-flex justify-content-center d-lg-block">
                                            <div class="ads__info__box border-current text-current py-4">
                                                <h2 class="font-xl">50</h2>
                                                <p class="">Vaxtı Bitmiş Elan</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 mb-2 mb-lg-0">
                                        <div class="row h-100 px-2 d-flex justify-content-center d-lg-block">
                                            <div class="ads__info__box border-current text-current my-auto py-4">
                                                <h2 class="font-xl">39</h2>
                                                <p class="">Satılan Elan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="col-12 border mt-5">
                        <div class="row p-0 bg-white mx-0">
                            <div class="col-md-3 text-center profile__nav @if(Route::is('front.profile')) active @endif py-1">
                                <a href="{{route('front.profile')}}" class="text-grey-900 font-xss">Hesabım</a>
                            </div>
                            <div class="col-md-3 text-center profile__nav @if(Route::is('front.hesab')) active @endif py-1">
                                <a href="{{route('front.hesab')}}" class="text-grey-900 font-xss">Hesabda Düzəliş et</a>
                            </div>
                            <div class="col-md-3 text-center profile__nav @if(Route::is('front.elan')) active @endif py-1">
                                <a href="{{route('front.elan')}}" class="text-grey-900 font-xss">Elanlarım</a>
                            </div>
                            <div class="col-md-3 text-center profile__nav @if(Route::is('front.odenis')) active @endif py-1">
                                <a href="{{route('front.odenis')}}" class="text-grey-900 font-xss">Ödənişlərim</a>
                            </div>
                        </div>
                    </div>
