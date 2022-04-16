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
            <a href="/"><img src="{{asset('front/assets/images/logo.png')}}" width="200" alt=""></a>
        </div>
        @if(Route::is('front.index'))
        <div class="row header__mid">
            <form action="{{url('/search')}}" method="GET" class="d-flex justify-content-start align-items-center ms-3">
                @csrf
                
                <input type="search"  name="marka_id" class="font-xsss" id="search__input" placeholder="Bir Şeylər Axtarın . . .">
                <button type="submit" for="search__input" class="font-sm" id="search__label">
                    <i class='bx bx-search'></i>
                </button>
            </form>
        </div>
        @endif
        
        <div class="row header__right">
            <div class="container d-flex align-items-center">
                 @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <a href="{{route('front.profile')}}" class="font-xsss text-grey-900">Profile</a>
                   <span class="text-current mx-3">|</span>
                    <a href="{{ route('front.logout') }}" class="font-xsss text-grey-900">Cixis</a>
                        <a href="{{route('announcement.create')}}" class="btn font-xsss px-3 ms-3 custom__button">Pulsuz Elan</a>
                    @else
                        <a href="{{route('login')}}" class="font-xsss text-grey-900">Giriş</a>
                        <span class="text-current mx-3">|</span>
                            <a href="{{route('register')}}" class="font-xsss text-grey-900">Qeydiyyat</a>
                            <a href="{{route('announcement.create')}}" class="btn font-xsss px-3 ms-3 custom__button">Pulsuz Elan</a>
                    @endauth
                </div>
            @endif
            </div>
        </div>
        <!-- mobile toggle -->
                <span class="mobile__menu__toggle d-block d-md-none mobile__toggle font-xl text-current">
                    <i class='bx bx-menu-alt-right'></i>
                </span>
    </div>
</div>
<!-- HEADERS -->
{{--
@section('js')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
    function search() {
    var availableTags = [
      
    ];
    $.ajax({
        method: 'GET',
        url:     '/biker-list',
        success:  function(response){
            //console.log(response);
            startAutoComplete(response);
        }
    });
    function startAutoComplete(availableTags){
         $( "#search__input" ).autocomplete({
        source: availableTags
    });
    }
}

  </script>
       
</script>


@endsection
--}}
