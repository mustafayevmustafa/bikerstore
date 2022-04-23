@extends('front.layout.master')
@section('content')
    <!-- MAIN WRAPPER -->

    <div class="main-wrapper ad mx-auto mw bg-white px-0 px-md-4">
        <div class="container">
            <div class="row">
                <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                    @endif
                    @csrf @method($method)
                    <div class="row mt-4">
                        <h2 class="font-lg text-grey-700">Elanınız yeriləşdirin</h2>
                        <hr>
                        <div class="col-12 col-md-6">
                            <div class="row ps-2 ps-md-4">
                                <div class="input__container d-flex justify-content-between mb-2 align-items-center">
                                    <label for="marka_id" class="text-grey-900 font-xsss">Marka <span
                                                class="text-red">*</span></label>
                                    <select name="marka_id"
                                            class="form-select mb-2 ps-2 pe-5 font-xssss text-grey-900 w-50" id="marka_id" >
                                        <option value="Bütün Markalar" disabled selected>Marka</option>
                                        @foreach($markas as $marka)
                                            <option value="{{$marka->id}}">{{$marka->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="input__container d-flex justify-content-between mb-2 align-items-center">
                                    <label for="pattern_id" class="text-grey-900 font-xsss">Model <span
                                                class="text-red">*</span></label>
                                    <select name="pattern_id"
                                            class="form-select mb-2 ps-2 pe-5 font-xssss text-grey-900 w-50" id="marka">
                                        <option value="Bütün Markalar" disabled selected>Model</option>
                                        @foreach($models as $model)
                                            <option value="{{$model->id}}">{{$model->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="input__container d-flex justify-content-between mb-2 align-items-center">
                                    <label for="category_id" class="text-grey-900 font-xsss">Kateqoriya <span
                                                class="text-red">*</span></label>
                                    <select name="category_id"
                                            class="form-select mb-2 ps-2 pe-5 font-xssss text-grey-900 w-50" id="marka">
                                        <option value="Bütün Markalar" disabled selected>Model</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="input__container d-flex justify-content-between mb-2 align-items-center">
                                    <label for="km" class="text-grey-900 font-xsss">Yürüş <span
                                                class="text-red">*</span></label>
                                    <div class="d-flex flex-row align-items-center w-50">
                                        <input type="number"  name="km" class="form-control me-2 font-xssss text-grey-700 w-50">
                                        <div class="d-flex flex-row align-items-center w-50">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                       id="flexRadioDefault1" >
                                                <label class="form-check-label font-xssss" for="flexRadioDefault1">
                                                    Km
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="input__container d-flex justify-content-between mb-2 align-items-center">
                                    <label for="color_id" class="text-grey-900 font-xsss">Rəng <span
                                                class="text-red">*</span></label>
                                    <select name="color_id"
                                            class="form-select mb-2 ps-2 pe-5 font-xssss text-grey-900 w-50" id="marka">
                                        <option value="Bütün Markalar" disabled selected>Rəng</option>
                                        @foreach($colors as $color)
                                            <option value="{{$color->id}}">{{$color->name}}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="input__container d-flex justify-content-between mb-2 align-items-center">
                                    <label for="marka" class="text-grey-900 font-xsss">Qiymət <span
                                                class="text-red">*</span></label>
                                    <div class="d-flex flex-row align-items-center w-50">
                                        <input type="text" name="price" class="form-control me-2 font-xssss text-grey-700 w-75"
                                        >
{{--                                        <div class="d-flex flex-row align-items-center w-50">--}}
{{--                                            <select name="price" class="form-select font-xssss text-grey-900"--}}
{{--                                                    id="price">--}}
{{--                                                <option value="Bütün Markalar" selected>AZN</option>--}}
{{--                                                <option value="Baku">RUB</option>--}}
{{--                                                <option value="Baku">USD</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>

                                <div class="input__container d-flex justify-content-end mb-3 mt-2 align-items-center">
                                    <input type="checkbox" name="barter" class="form-check-input me-2 mt-0">
                                    <span class="font-xssss text-grey-900">Kreditdədir</span>

                                    <input type="checkbox"  name="credit" class="form-check-input ms-3 me-2 mt-0">
                                    <span class="font-xssss text-grey-900">Barter Mümkündür</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="row ps-2">
                                <div class="input__container d-flex justify-content-between mb-2 align-items-center">
                                    <label for="city_id" class="text-grey-900 font-xsss">Şəhərlər <span
                                                class="text-red">*</span></label>
                                    <select name="city_id"
                                            class="form-select mb-2 ps-2 pe-5 font-xssss text-grey-900 w-50" id="marka">
                                        <option value="Bütün Markalar" disabled selected>Şəhərlər</option>
                                        @foreach($cities as $city)
                                            <option value="{{$city->id}}">{{$city->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="input__container d-flex justify-content-between mb-2 align-items-center">
                                    <label for="ban_id" class="text-grey-900 font-xsss">Ban Növü <span
                                                class="text-red">*</span></label>
                                    <select name="ban_id"
                                            class="form-select mb-2 ps-2 pe-5 font-xssss text-grey-900 w-50" id="ban">
                                        <option value="Bütün Markalar" disabled selected>Ban Növləri</option>
                                        @foreach($bans as $ban)
                                            <option value="{{$ban->id}}">{{$ban->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="input__container d-flex justify-content-between mb-2 align-items-center">
                                    <label for="fuel_id" class="text-grey-900 font-xsss">Yanacaq Növü <span
                                                class="text-red">*</span></label>
                                    <select name="fuel_id"
                                            class="form-select mb-2 ps-2 pe-5 font-xssss text-grey-900 w-50" id="marka">
                                        <option value="Bütün Markalar" disabled selected>Yanacaq Növü Seçin</option>
                                        @foreach($fuels as $fuel)
                                            <option value="{{$fuel->id}}">{{$fuel->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="input__container d-flex justify-content-between mb-2 align-items-center">
                                    <label for="year" class="text-grey-900 font-xsss">Mühərrikin a.g <span
                                                class="text-red">*</span></label>
                                    <input type="date" name="year" class="form-control text-grey-900 font-xssss w-50" >
                                </div>

                                <div class="input__container d-flex justify-content-between mb-2 align-items-center">
                                    <label for="marka" class="text-grey-900 font-xsss">Mühərrikin a.g <span
                                                class="text-red">*</span></label>
                                    <input type="number" class="form-control text-grey-900 font-xssss w-50" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 ps-3 ps-md-4">
                            <div class="input__container d-flex flex-column justify-content-between mb-2 align-items-start">
                                <label for="description" class="text-grey-900 mb-2 font-xsss">Əlavə məlumat</label>
                                <div class="form-floating w-100">
                                    <textarea name="description" class="form-control font-xssss pt-2 text-grey-900"
                                              style="height: 150px !important; resize: none;"
                                              placeholder="Leave a comment here"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

{{--                    <div class="row mt-4">--}}
{{--                        <div class="col-12 ps-4">--}}
{{--                            <h2 class="font-xs text-grey-900 my-3">Motosikletin Təchizatı</h2>--}}
{{--                            <div class="input__container d-flex justify-content-start flex-wrap mb-2 align-items-start">--}}
{{--                                <div class="form-check me-3 mb-2">--}}
{{--                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">--}}
{{--                                    <label class="form-check-label font-xssss" for="flexCheckDefault">--}}
{{--                                        Default checkbox--}}
{{--                                    </label>--}}
{{--                                </div>--}}

{{--                                <div class="form-check me-3 mb-2">--}}
{{--                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">--}}
{{--                                    <label class="form-check-label font-xssss" for="flexCheckDefault">--}}
{{--                                        Default checkbox--}}
{{--                                    </label>--}}
{{--                                </div>--}}

{{--                                <div class="form-check me-3 mb-2">--}}
{{--                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">--}}
{{--                                    <label class="form-check-label font-xssss" for="flexCheckDefault">--}}
{{--                                        Default checkbox--}}
{{--                                    </label>--}}
{{--                                </div>--}}


{{--                                <div class="form-check me-3 mb-2">--}}
{{--                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">--}}
{{--                                    <label class="form-check-label font-xssss" for="flexCheckDefault">--}}
{{--                                        Default checkbox--}}
{{--                                    </label>--}}
{{--                                </div>--}}

{{--                                <div class="form-check me-3 mb-2">--}}
{{--                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">--}}
{{--                                    <label class="form-check-label font-xssss" for="flexCheckDefault">--}}
{{--                                        Default checkbox--}}
{{--                                    </label>--}}
{{--                                </div>--}}

{{--                                <div class="form-check me-3 mb-2">--}}
{{--                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">--}}
{{--                                    <label class="form-check-label font-xssss" for="flexCheckDefault">--}}
{{--                                        Default checkbox--}}
{{--                                    </label>--}}
{{--                                </div>--}}

{{--                                <div class="form-check me-3 mb-2">--}}
{{--                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">--}}
{{--                                    <label class="form-check-label font-xssss" for="flexCheckDefault">--}}
{{--                                        Default checkbox--}}
{{--                                    </label>--}}
{{--                                </div>--}}

{{--                                <div class="form-check me-3 mb-2">--}}
{{--                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">--}}
{{--                                    <label class="form-check-label font-xssss" for="flexCheckDefault">--}}
{{--                                        Default checkbox--}}
{{--                                    </label>--}}
{{--                                </div>--}}




{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="row mt-4">
                        <div class="col-12">
                        <h2 class=" font-xs text-grey-900 my-3">Şəkillər</h2>
                        <div class="upload__image mx-auto py-2">
                            <!-- YÜKLƏNƏN ŞƏKİLLƏR -->
                            <div class="ad__image posr">
                                <img src="{{asset('front/assets/images/login.jpg')}}" alt="">
                            </div>

                            <div class="ad__image posr">
                                <img src="{{asset('front/assets/images/login.jpg')}}" alt="">
                                <button type="button" class="main__photo custom__button btn font-xsssss posa">Əsas Şəkil</button>
                            </div>

                            <div class="ad__image posr">
                                <img src="{{asset('front/assets/images/login.jpg')}}" alt="">
                                <button type="button" class="main__photo custom__button btn font-xsssss posa">Əsas Şəkil</button>
                            </div>
                           
                            <div class="ad__image posr">
                                <img src="{{asset('front/assets/images/login.jpg')}}" alt="">
                                <button type="button" class="main__photo custom__button btn font-xsssss posa">Əsas Şəkil</button>
                            </div>

                            <label for="file-input" class="ad__label shadow-xs bg-current-low" role="button">
                                <i class='bx bx-download text-white font-xl'></i>
                                <span class="upload__text text-white font-xs">Şəkil yüklə</span>
                                <input type="file" name="image" class="d-none" id="file-input" multiple=""
                                       accept="image/*">
                                        {{-- @if ($errors->has('files'))
            @foreach ($errors->get('files') as $error)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $error }}</strong>
            </span>
            @endforeach
          @endif --}}
                            </label>
                            

                        </div>

                    </div>
            </div>


            <div class="row mt-4">
                <div class="col-12 col-md-6 ps-4">
                    <h2 class="font-xs text-grey-900 my-3">Əlaqə</h2>
                    <div class="input__container d-flex justify-content-between mb-2 align-items-center">
                        <label for="contact_name" class="text-grey-900 font-xsss">Adınız <span
                                    class="text-red">*</span></label>
                        <input disabled value="{{Auth::user()->name}}" type="text" name="contact_name" class="form-control text-grey-900 font-xssss w-50" >
                    </div>

                    <div class="input__container d-flex justify-content-between mb-2 align-items-center">
                        <label for="contact_mail" class="text-grey-900 font-xsss">E-mail <span
                                    class="text-red">*</span></label>
                        <input disabled value="{{Auth::user()->email}}" type="email" name="contact_mail" class="form-control text-grey-900 font-xssss w-50" >
                    </div>

                    <div class="input__container d-flex justify-content-between mb-2 align-items-center">
                        <label for="contact_phone"  class="text-grey-900 font-xsss">Telefon Nömrəsi <span
                                    class="text-red">*</span></label>
                        <input disabled value="{{Auth::user()->phone}}" type="number" name="contact_phone" class="form-control text-grey-900 font-xssss w-50" >
                    </div>
                </div>
            </div>
{{--            <button type="submit" class="btn font-xss ms-3 px-4 mt-4 mb-3 custom__button w-auto">Dərc--}}
{{--                Et</button>--}}
                    @if ($action)
                        <button type="submit" class="btn btn-primary mt-3">Save</button>
                    @endif
            </form>
        </div>
    </div>
    </div>


    <!-- MAIN WRAPPER -->
@endsection
