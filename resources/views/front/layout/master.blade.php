<!DOCTYPE html>
<html lang="en">

@include('front.layout.partials.head')

<body>

@if(!Route::is('login') and !Route::is('register'))
@include('front.layout.partials.banner')
@endif

@if(!Route::is('login') and !Route::is('register'))
@include('front.layout.partials.header')
@endif


@yield('content')



@if(Route::is('front.index'))
@include('front.layout.partials.brand')
@endif


@if(!Route::is('login') and !Route::is('register'))
@include('front.layout.partials.footer')
@endif

@include('front.layout.partials.script')
</body>

</html>
