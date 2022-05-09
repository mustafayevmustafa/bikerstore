@extends('front.layout.master')
@section('content')
<!-- MAIN WRAPPER -->

    <div class="main-wrapper mx-auto py-3 mw bg-white">
        @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
        <div class="container">
            <div class="row">
                <div class="col-lg-3 text-white">
                    <div class="row px-2 posr">

                         <div class="mobile bottom__menu d-block d-lg-none mb-3 px-0 border shadow-xs rounded">
                            <div
                                class="mobile__category px-2 owl-carousel owl-theme dot-none px-0 owl-nav-link owl-arrow-top d-flex py-2">
                     @foreach($bans as $ban)
                                <div class="item">
                                     
                                <a href="{{url('/ban',$ban)}}" class="text-grey-900 d-flex justify-content-center">
                                    <div
                                        class="bottom__menu__card p-3 rounded d-flex flex-column justify-content-center align-items-center">
                                        <img  
                                            src="{{asset("storage/{$ban->getAttribute('image')}")}}">
                                        <span class="font-xsss">{{$ban->name}}</span>
                                    </div>
                                </a>
                           
                                </div>
                                     @endforeach
                            </div>
                        </div>




                        <div class="bottom__menu d-none d-lg-block mb-3 border py-2 px-4 shadow-xs rounded">
                            <div class="row my-2">
                                @foreach($bans as $ban)
                                <a href="{{url('/ban',$ban)}}" class="col-6 text-grey-900 d-flex justify-content-center">
                                    <div
                                        class="bottom__menu__card p-3 rounded d-flex flex-column justify-content-center align-items-center">
                                        <img  
                                            src="{{asset("storage/{$ban->getAttribute('image')}")}}">
                                        <span class="font-xsss">{{$ban->name}}</span>
                                    </div>
                                </a>
                                @endforeach
                            </div>

                        </div>
                        <div class="mid__menu d-none d-lg-block border shadow-xs pt-3 mb-3">
                            <ul class="ps-3">
                                @foreach($markas as $marka)
                                <li class="lh-18"><a href="" class="font-xsss text-grey-900"><img class="menu__icon"
                                            src="{{asset("storage/{$marka->getAttribute('image')}")}}"> {{$marka->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <h4 class="text-white d-none d-lg-block bg-current-low mb-0 py-1 rounded-top">Şəhərlər</h4>
                        <div class="mid__menu d-none d-lg-block city__names border shadow-xs mb-2">
                            <ul class="ps-3 pt-2">
                                @foreach($cities as $city)
                                    <li class="lh-18"><a href="{{url('/seherler',$city)}}" class="font-xsss text-grey-900">{{$city->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-lg-9 border py-3">
                    @include('front.layout.partials.filter')
                    <div class="card__wrapper">
                        @foreach($bikers as $biker)
                        <div class="custom__card biker_data border shadow-sm ovh d-flex flex-column bg-white posr pb-2" id="myTable">
                          
                          <div class="wishlist-content">
                                <input type="hidden"  class="biker_id" value="{{$biker->id}}">
                            @guest
                            <a href="{{route('add-wishlist')}}">
                                <span type="button" class="wishlist posa">
                                <i class='bx bx-heart text-current font-xs'></i>
                            </span>
                            <span class="mybadge">
                                <span class="premium posr">
                                    <i class="fa-solid fa-crown me-1"></i>
                                    <span class="icon-info posa">Premium Elan</span>
                                </span>
                                <span class="vip posr">
                                    <i class="fa-solid fa-gem"></i>
                                    <span class="icon-info posa">VIP Elan</span>
                                </span>
                            </span>
                            </a>
                            

                            @else
                            <span type="button" class="add-to-wishlist-btn wishlist posa">
                                <i class='bx bx-heart text-current font-xs
                                {{$biker->checkWishlist->isEmpty()?'': 'active'}}'>

                                </i>
                            </span>
                            <span class="mybadge">
                                <span class="premium posr">
                                    <i class="fa-solid fa-crown me-1"></i>
                                    <span class="icon-info posa">Premium Elan</span>
                                </span>
                                <span class="vip posr">
                                    <i class="fa-solid fa-gem"></i>
                                    <span class="icon-info posa">VIP Elan</span>
                                </span>
                            </span>
                            @endguest
                            </div>
                             <div class="product-info posa">
                                <span class="mybadge circle kredit posr">
                                    <i class="fa-solid fa-percent"></i>
                                    <span class="icon-info posa">Kredit Var</span>
                                </span>
                                <span class="mybadge circle barter posr">
                                    <i class="fa-solid fa-arrows-rotate"></i>
                                    <span class="icon-info posa">Barter Var</span>
                                </span>
                            </div>
                            <a href="{{route('detail',$biker->id)}}">
                                <div class="image__container ovh">
                                    <img src="{{asset("storage/{$biker->getAttribute('image')}")}}" alt="motorcycle">
                                </div>
                                <span class="ps-2 font-xsss mt-1  text-grey-800 fw-600">{{$biker->marka->name}}</span>
                                {{-- <span class="ps-2 font-xssss mt-1 text-grey-700 fw-500">{{$biker->city->name}}</span> --}}
                                <div class="d-flex justify-content-between align-items-center pe-1">
                                    <span class="ps-2 font-xsss text-grey-800 fw-500">{{$biker->price}} AZN</span>
                                    
                                </div>
                                <span class="ps-2 font-xssss text-grey-800 fw-500">2022, 1.5 L, 0 km</span>
                                    <span class="ps-2 font-xsssss mt-1 text-grey-600 fw-500">Bakı, 02.02.2022 22:20</span>
                            </a> 
                        
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- MAIN WRAPPER -->
    @endsection


@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.add-to-wishlist-btn').click(function(e) {
                e.preventDefault();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                    // data: {
                    //     "_token": "{{ csrf_token() }}",
                    // }
                });
                var biker_id = $(this).closest('.biker_data').find('.biker_id').val();
                //alert(biker_id);
                $.ajax({
                    method: "POST",
                    url: "{{route('add-wishlist')}}",
                    data: {
                        'biker_id': biker_id,
                    },
                    success: function(response) {
                        //console.log(biker_id);
                        alertify.set('notifier', 'position', 'top-right');
                        alertify.success(response.status);
                    }
                });
            });
        });
    </script>
@endsection



    {{--
    @section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
    $('.add-to-wishlist-btn').click(function(e) {
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var biker_id = $(this).closest('.biker_data').find('.biker_id').val();
        //alert(biker_id);
        $.ajax({
            method: "POST",
            url: "/add-wishlist",
            data: {
                'biker_id ': biker_id,
            },
            success: function(e) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(response.status);
            }
        });
    });
});
    </script>
    @endsection
--}}
