@extends('front.layout.master')
@section('content')
<!-- MAIN WRAPPER -->

    <div class="main-wrapper mx-auto mw bg-white">
        @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
        <div class="container">
            <div class="row">
                <div class="col-lg-3 text-white">
                    <div class="row px-2">
                        <div class="bottom__menu mb-3 border py-2 px-4 shadow-xs rounded">
                            <div class="row my-2">
                                
                            </div>

                         

                         
                        </div>
                        <div class="mid__menu border shadow-xs pt-3 mb-3">
                            <ul class="ps-3">
                                @foreach($markas as $marka)
                                <li class="lh-18"><a href="" class="font-xsss text-grey-900"><img class="menu__icon"
                                            src="{{asset("storage/{$marka->getAttribute('image')}")}}"> {{$marka->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <h4 class="text-white bg-current-low mb-0 py-1 rounded-top">Şəhərlər</h4>
                        <div class="mid__menu city__names border shadow-xs mb-2">
                            <ul class="ps-3 pt-2">
                                @foreach($cities as $city)
                                    <li class="lh-18"><a href="{{url('/seherler')}}" class="font-xsss text-grey-900">{{$city->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-lg-9 border py-3">
                     @include('front.layout.partials.filter')
                    <div class="card__wrapper">
                        @foreach($bikers as $biker)
                        <div class="custom__card border shadow-xs ovh d-flex flex-column bg-white posr pb-2" id="myTable">
                            <span class="wishlist posa">
                                <i class='bx bx-heart text-current font-xs'></i>
                            </span>
                            <a href="{{route('detail',$biker->id)}}">
                                <div class="image__container ovh">
                                    <img src="{{asset("storage/{$biker->getAttribute('bikerimage')}")}}" alt="motorcycle">
                                </div>
                                <span class="ps-2 font-xsss mt-1  text-grey-700 fw-600">{{$biker->marka->name}}</span>
                                <span class="ps-2 font-xssss mt-1 text-grey-700 fw-500">{{$biker->city->name}}</span>
                                <div class="d-flex justify-content-between align-items-center pe-1">
                                    <span class="ps-2 font-xsss text-grey-700 fw-500">{{$biker->price}} AZN</span>
                                </div>
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
