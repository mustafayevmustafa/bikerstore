<!-- HEADERS -->
<div class="upper-header py-2 bg-grey d-flex align-items-center mw mx-auto">
    <div class="container d-flex justify-content-end ">
        <div class="row">
            <ul class="d-flex flex-row justify-content-end align-items-center mb-0">
                <li class="px-2">
                    <a href="#" class="font-xssss text-grey-900 fw-500">Eskpert Mərkəzi</a>
                </li>
                <li class="px-2">
                    <a href="#" class="font-xssss text-grey-900">Xidmətlərimiz</a>
                </li>
                <li class="px-2">
                    <a href="#" class="font-xssss text-grey-900">Mağazalar</a>
                </li>
                <li class="px-2">
                    <a href="#" class="font-xssss text-grey-900">Əlaqə</a>
                </li>
            </ul>

        </div>
    </div>
</div>

<div class="lower-header py-2 d-flex align-items-center w-100 bg-white mw mx-auto">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="row header__left">
            <a href="index.html"><img src="{{asset('front/assets/images/logo.png')}}" width="200" alt=""></a>
        </div>

        <div class="row header__mid">
            <form action="" class="d-flex justify-content-start align-items-center ms-3">
                <input type="text" class="font-xsss" id="search__input" placeholder="Bir Şeylər Axtarın . . .">
                <label for="search__input" class="font-sm" id="search__label">
                    <i class='bx bx-search'></i>
                </label>
            </form>
        </div>

        <div class="row header__right">
            <div class="container d-flex align-items-center">
                 @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <li>
                    <a href="{{ route('front.logout') }}" class="font-xsss text-grey-900">Cixis</a></li>
                        <a href="{{route('front.ad')}}" class="btn font-xsss px-3 ms-3 custom__button">Pulsuz Elan</a>
                    @else
                        <a href="{{route('login')}}" class="font-xsss text-grey-900">Giriş</a>

                        @if (Route::has('register'))
                        <span class="text-current mx-3">|</span>
                            <a href="{{route('register')}}" class="font-xsss text-grey-900">Qeydiyyat</a>
                            
                            <a href="{{route('front.ad')}}" class="btn font-xsss px-3 ms-3 custom__button">Pulsuz Elan</a>
                        @endif
                    @endauth
                </div>
            @endif
                
                
                
                
            </div>
        </div>
    </div>
</div>
<!-- HEADERS -->