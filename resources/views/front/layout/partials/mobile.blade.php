  <!-- Mobile Navigation -->

    <div class="mobile__navigation d-block d-lg-none bg-white">
        <div class="d-flex flex-row justify-content-around align-items-center">
            <a href="{{route('front.index')}}" class="font-xssss text-current d-flex justify-content-center align-items-center flex-column">
                <i class='bx bx-home font-xl'></i>
                <span class="mt-1">Ana Səhifə</span>
            </a>
            <span class="mobile__toggle font-xssss text-current d-flex justify-content-center align-items-center flex-column">
                <i class='bx bx-menu-alt-right font-xl'></i>
                <span class="mt-1">Menu</span>
            </span>
            <a href="{{route('announcement.create')}}" class="font-xssss text-current d-flex mb-4 justify-content-center align-items-center flex-column">
                <i class='bx bx-plus font-xxl p-2 rounded-circle shadow-sm bg-white border-2 border-current-very-low'></i>
                <span class="mt-1 font-xsss">Pulsuz Elan</span>
            </a>
            <a href="./index.html" class="font-xssss text-current d-flex justify-content-center align-items-center flex-column">
                <i class='bx bx-heart font-xl'></i>
                <span class="mt-1">Favorilər</span>
            </a>
            @auth
            <a href="{{route('front.profile')}}" class="font-xssss text-current d-flex justify-content-center align-items-center flex-column">
                <i class='bx bx-user font-xl'></i>
                <span class="mt-1">Hesabım</span>
            </a>
            @else
             <a href="{{route('login')}}" class="font-xssss text-current d-flex justify-content-center align-items-center flex-column">
                <i class='bx bx-user font-xl'></i>
                <span class="mt-1">Hesabım</span>
            </a>
            @endif
        </div>
    </div>


    <!-- Mobile Navigation -->
