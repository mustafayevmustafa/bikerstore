@extends('front.layout.master')
@section('content')
   <!-- MAIN WRAPPER -->

    <div class="main-wrapper ad mx-auto mw bg-white px-0 px-md-4">
        <div class="container">
            <div class="row">
{{--                <form action="{{route('announcement.post')}}" method="post">--}}
                    @csrf
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
                                        <option value="{{$marka->marka_id}}">{{$marka->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="input__container d-flex justify-content-between mb-2 align-items-center">
                                    <label for="marka" class="text-grey-900 font-xsss">Model <span
                                            class="text-red">*</span></label>
                                    <select name="Şəhərlər"
                                        class="form-select mb-2 ps-2 pe-5 font-xssss text-grey-900 w-50" id="marka">
                                        <option value="Bütün Markalar" disabled selected>Model</option>
                                        @foreach($models as $model)
                                            <option value="{{$model->id}}">{{$model->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="input__container d-flex justify-content-between mb-2 align-items-center">
                                    <label for="marka" class="text-grey-900 font-xsss">Kateqoriya <span
                                            class="text-red">*</span></label>
                                    <select name="Şəhərlər"
                                        class="form-select mb-2 ps-2 pe-5 font-xssss text-grey-900 w-50" id="marka">
                                        <option value="Bütün Markalar" disabled selected>Model</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="input__container d-flex justify-content-between mb-2 align-items-center">
                                    <label for="marka" class="text-grey-900 font-xsss">Yürüş <span
                                            class="text-red">*</span></label>
                                    <div class="d-flex flex-row align-items-center w-50">
                                        <input type="text" class="form-control me-2 font-xssss text-grey-700 w-50"
                                            >
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
                                    <label for="marka" class="text-grey-900 font-xsss">Rəng <span
                                            class="text-red">*</span></label>
                                    <select name="Şəhərlər"
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
                                        <input type="text" class="form-control me-2 font-xssss text-grey-700 w-75"
                                            >
                                        <div class="d-flex flex-row align-items-center w-50">
                                            <select name="price" class="form-select font-xssss text-grey-900"
                                                id="price">
                                                <option value="Bütün Markalar" selected>AZN</option>
                                                <option value="Baku">RUB</option>
                                                <option value="Baku">USD</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="input__container d-flex justify-content-end mb-3 mt-2 align-items-center">
                                    <input type="checkbox" class="form-check-input me-2 mt-0">
                                    <span class="font-xssss text-grey-900">Kreditdədir</span>

                                    <input type="checkbox" class="form-check-input ms-3 me-2 mt-0">
                                    <span class="font-xssss text-grey-900">Barter Mümkündür</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="row ps-2">
                                <div class="input__container d-flex justify-content-between mb-2 align-items-center">
                                    <label for="marka" class="text-grey-900 font-xsss">Şəhərlər <span
                                            class="text-red">*</span></label>
                                    <select name="Şəhərlər"
                                        class="form-select mb-2 ps-2 pe-5 font-xssss text-grey-900 w-50" id="marka">
                                        <option value="Bütün Markalar" disabled selected>Şəhərlər</option>
                                        @foreach($cities as $city)
                                            <option value="{{$city->id}}">{{$city->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="input__container d-flex justify-content-between mb-2 align-items-center">
                                    <label for="marka" class="text-grey-900 font-xsss">Yanacaq Növü <span
                                            class="text-red">*</span></label>
                                    <select name="Şəhərlər"
                                        class="form-select mb-2 ps-2 pe-5 font-xssss text-grey-900 w-50" id="marka">
                                        <option value="Bütün Markalar" disabled selected>Yanacaq Növü Seçin</option>
                                        @foreach($fuels as $fuel)
                                            <option value="{{$fuel->id}}">{{$fuel->name}}</option>
                                        @endforeach
                                    </select>
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
                                <label for="marka" class="text-grey-900 mb-2 font-xsss">Əlavə məlumat</label>
                                <div class="form-floating w-100">
                                    <textarea class="form-control font-xssss pt-2 text-grey-900"
                                        style="height: 150px !important; resize: none;" placeholder="Leave a comment here"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 ps-4">
                            <h2 class="font-xs text-grey-900 my-3">Motosikletin Təchizatı</h2>
                            <div class="input__container d-flex justify-content-start flex-wrap mb-2 align-items-start">
                                <div class="form-check me-3 mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label font-xssss" for="flexCheckDefault">
                                        Default checkbox
                                    </label>
                                </div>

                                <div class="form-check me-3 mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label font-xssss" for="flexCheckDefault">
                                        Default checkbox
                                    </label>
                                </div>

                                <div class="form-check me-3 mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label font-xssss" for="flexCheckDefault">
                                        Default checkbox
                                    </label>
                                </div>


                                <div class="form-check me-3 mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label font-xssss" for="flexCheckDefault">
                                        Default checkbox
                                    </label>
                                </div>

                                <div class="form-check me-3 mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label font-xssss" for="flexCheckDefault">
                                        Default checkbox
                                    </label>
                                </div>

                                <div class="form-check me-3 mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label font-xssss" for="flexCheckDefault">
                                        Default checkbox
                                    </label>
                                </div>

                                <div class="form-check me-3 mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label font-xssss" for="flexCheckDefault">
                                        Default checkbox
                                    </label>
                                </div>

                                <div class="form-check me-3 mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label font-xssss" for="flexCheckDefault">
                                        Default checkbox
                                    </label>
                                </div>




                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12"">
                        <h2 class=" font-xs text-grey-900 my-3">Şəkillər</h2>
                            <div class="upload__image mx-auto py-2">
                                <!-- YÜKLƏNƏN ŞƏKİLLƏR -->
                                <div class="ad__image posr">
                                    <img src="./assets/images/login.jpg" alt="">
                                </div>

                                <div class="ad__image posr">
                                    <img src="./assets/images/login.jpg" alt="">
                                    <button type="button" class="main__photo custom__button btn font-xsssss posa">Əsas Şəkil</button>
                                </div>

                                <div class="ad__image posr">
                                    <img src="./assets/images/login.jpg" alt="">
                                    <button type="button" class="main__photo custom__button btn font-xsssss posa">Əsas Şəkil</button>
                                </div>

                                <div class="ad__image posr">
                                    <img src="./assets/images/login.jpg" alt="">
                                    <button type="button" class="main__photo custom__button btn font-xsssss posa">Əsas Şəkil</button>
                                </div>

                                <label for="file-input" class="ad__label shadow-xs bg-current-low" role="button">
                                    <i class='bx bx-download text-white font-xl'></i>
                                    <span class="upload__text text-white font-xs">Şəkil yüklə</span>
                                    <input type="file" class="d-none" id="file-input" multiple=""
                                        accept="image/png, image/jpeg, image/jpeg">
                                </label>

                            </div>

                        </div>
                    </div>


                    <div class="row mt-4">
                        <div class="col-12 col-md-6 ps-4">
                            <h2 class="font-xs text-grey-900 my-3">Əlaqə</h2>
                            <div class="input__container d-flex justify-content-between mb-2 align-items-center">
                                <label for="marka" class="text-grey-900 font-xsss">Adınız <span
                                        class="text-red">*</span></label>
                                <input type="text" class="form-control text-grey-900 font-xssss w-50" >
                            </div>

                            <div class="input__container d-flex justify-content-between mb-2 align-items-center">
                                <label for="marka" class="text-grey-900 font-xsss">Şəhər <span
                                        class="text-red">*</span></label>
                                <select name="Şəhərlər" class="form-select ps-2 pe-5 font-xssss text-grey-900 w-50"
                                    id="marka">
                                    <option value="Bütün Markalar" disabled selected>Bakı</option>
                                    <option value="Baku">Default</option>
                                    <option value="Baku">Default</option>
                                </select>
                            </div>

                            <div class="input__container d-flex justify-content-between mb-2 align-items-center">
                                <label for="marka" class="text-grey-900 font-xsss">E-mail <span
                                        class="text-red">*</span></label>
                                <input type="email" class="form-control text-grey-900 font-xssss w-50" >
                            </div>

                            <div class="input__container d-flex justify-content-between mb-2 align-items-center">
                                <label for="marka" class="text-grey-900 font-xsss">Telefon Nömrəsi <span
                                        class="text-red">*</span></label>
                                <input type="number" class="form-control text-grey-900 font-xssss w-50" >
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn font-xss ms-3 px-4 mt-4 mb-3 custom__button w-auto">Dərc
                        Et</button>
                </form>
            </div>
        </div>
    </div>


    <!-- MAIN WRAPPER -->
@endsection