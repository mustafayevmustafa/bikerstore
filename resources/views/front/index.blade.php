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
                                @foreach($bans as $ban)
                                <a href="#" class="col-6 text-grey-900 d-flex justify-content-center">
                                    <div
                                        class="bottom__menu__card p-3 rounded d-flex flex-column justify-content-center align-items-center">
                                        <img class="menu__icon" width="25" height="25"
                                            src="{{asset("storage/{$ban->getAttribute('image')}")}}">
                                        <span class="font-xsss">{{$ban->name}}</span>
                                    </div>
                                </a>
                                @endforeach
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
                                    <li class="lh-18"><a href="" class="font-xsss text-grey-900">{{$city->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-lg-9 border py-3">
                    <div class="filter my-2 px-3 py-3 border rounded rounded-1">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-md-2">
                                <select name="Markalar" class="form-select mb-2 font-xsssss text-grey-900" id="">
                                    <option value="Bütün Markalar" disabled selected>Bütün Markalar</option>
                                    <option value="Davidson">Harley Davidson</option>
                                    <option value="Yamaha">Yamaha</option>
                                </select>
                                <select name="Markalar" class="form-select font-xsssss text-grey-900" id="">
                                    <option value="Bütün Markalar" disabled selected>Bütün Markalar</option>
                                    <option value="Davidson">Harley Davidson</option>
                                    <option value="Yamaha">Yamaha</option>
                                </select>
                            </div>
                            <div class="col-md-4 mt-2 mt-md-0">
                                <div class="row mb-2 mx-auto">
                                    <span
                                        class="col-3 me-1 border rounded font-xsssss bg-white d-flex align-items-center">Qiymət</span>
                                    <select name="AZN" class="col form-select me-1 font-xssss text-grey-900" id="">
                                        <option value="AZN" selected>AZN</option>
                                        <option value="USD">USD</option>
                                        <option value="RUB">RUB</option>
                                    </select>
                                    <input type="text" class="form-control col font-xssss me-1" placeholder="min">
                                    <input type="text" class="form-control col font-xssss me-1" placeholder="max">
                                </div>
                                <div class="row mx-auto">
                                    <span
                                        class="col-4 me-1 border rounded font-xsssss bg-white d-flex align-items-center">Buraxılış
                                        ili</span>
                                    <input type="text" class="form-control col font-xssss me-1" placeholder="min">
                                    <input type="text" class="form-control col font-xssss me-1" placeholder="max">
                                </div>
                            </div>
                            <div class="col-md-2 mt-2 d-flex flex-row justify-content-evenly flex-md-column mt-md-0">
                                <div class="row mb-2 d-flex justify-content-center">
                                    <span
                                        class="me-1 px-2 border rounded font-xssss bg-white d-flex align-items-center w-auto">Kredit
                                        <input class="form-check-input ms-2 mt-0" type="checkbox"></span>
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <span
                                        class="me-1 px-2 border rounded font-xssss bg-white d-flex align-items-center w-auto">Barter
                                        <input class="form-check-input ms-2 mt-0" type="checkbox"></span>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row mx-auto mx-md-0">
                                    <select name="city" class="col form-select mb-2 font-xsssss text-grey-900 w-100"
                                        id="">
                                        <option value="city" selected>Bütün Şəhərlər</option>
                                        @foreach($cities as $city)
                                           <option value="{{$city->id}}">{{$city->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row mx-auto mx-md-0">
                                    <span
                                        class="me-1 px-2 border rounded font-xsssss bg-white d-flex text-current align-items-center w-100">3310
                                        Yeni Elan</span>
                                </div>
                            </div>
                            <div class="col-md-2 mt-2 mt-md-0 d-flex align-items-center justify-content-center">
                                <div class="row d-flex justify-content-center">
                                    <div class="col">
                                        <button class="bg-current btn btn-sm text-white px-4">Axtar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card__wrapper">
                        @foreach($bikers as $biker)
                        <div class="custom__card border shadow-xs ovh d-flex flex-column bg-white posr pb-2">
                            <span class="wishlist posa">
                                <i class='bx bx-heart text-current font-xs'></i>
                            </span>
                            <a href="{{route('detail',$biker->id)}}">
                                <div class="image__container ovh">
                                    <img src="{{asset("storage/{$biker->getAttribute('image')}")}}" alt="motorcycle">
                                </div>
                                <span class="ps-2 font-xsss mt-1  text-grey-700 fw-600">{{$biker->pattern->name}}</span>
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
