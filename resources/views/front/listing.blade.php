@extends('front.layout.master')
@section('content')
    <!-- MAIN WRAPPER -->

    <div class="main-wrapper listing mx-auto mw bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 text-white">
                    <div class="row px-2 pb-2">
                        <h4 class="text-white bg-current-low mb-0 pt-1 rounded-top">Modellər</h4>
                        <div class="mid__menu border-2 border-bottom rounded rounded-0">
                            <ul class="ps-0 pt-2">
                                <li class="lh-26 d-flex align-items-center"><input type="checkbox"
                                        class="form-check-input me-2 mt-0"><span
                                        class="font-xssss text-grey-900">Yamaha</span></li>
                                <li class="lh-26 d-flex align-items-center"><input type="checkbox"
                                        class="form-check-input me-2 mt-0"><span
                                        class="font-xssss text-grey-900">Yamaha</span></li>
                                <li class="lh-26 d-flex align-items-center"><input type="checkbox"
                                        class="form-check-input me-2 mt-0"><span
                                        class="font-xssss text-grey-900">Yamaha</span></li>
                                <li class="lh-26 d-flex align-items-center"><input type="checkbox"
                                        class="form-check-input me-2 mt-0"><span
                                        class="font-xssss text-grey-900">Yamaha</span></li>
                                <li class="lh-26 d-flex align-items-center"><input type="checkbox"
                                        class="form-check-input me-2 mt-0"><span
                                        class="font-xssss text-grey-900">Yamaha</span></li>
                                <li class="lh-26 d-flex align-items-center"><input type="checkbox"
                                        class="form-check-input me-2 mt-0"><span
                                        class="font-xssss text-grey-900">Yamaha</span></li>
                                <li class="lh-26 d-flex align-items-center"><input type="checkbox"
                                        class="form-check-input me-2 mt-0"><span
                                        class="font-xssss text-grey-900">Yamaha</span></li>
                                <li class="lh-26 d-flex align-items-center"><input type="checkbox"
                                        class="form-check-input me-2 mt-0"><span
                                        class="font-xssss text-grey-900">Yamaha</span></li>
                                <li class="lh-26 d-flex align-items-center"><input type="checkbox"
                                        class="form-check-input me-2 mt-0"><span
                                        class="font-xssss text-grey-900">Yamaha</span></li>
                                <li class="lh-26 d-flex align-items-center"><input type="checkbox"
                                        class="form-check-input me-2 mt-0"><span
                                        class="font-xssss text-grey-900">Yamaha</span></li>
                            </ul>
                        </div>
                        <div class="filter__box bg-white border-2 border-bottom rounded-bottom shadow-xs py-3">
                            <select name="Şəhərlər" class="form-select mb-2 font-xssss text-grey-900" id="">
                                <option value="Bütün Markalar" disabled selected>Şəhərlər</option>
                                <option value="Baku">Bakı</option>
                                <option value="Baku">Bakı</option>
                            </select>
                            <div class="filter__listing border-bottom posr mb-2 px-1 py-2 border-1">
                                <div class="filter__header d-flex align-items-start justify-content-between">
                                    <span class="text-grey-900 font-xsss">Qiymət</span>
                                    <i class='bx bx-plus text-grey-600 font-md'></i>
                                </div>
                                <div class="filter__elements py-2 mt-1 d-flex flex-column">
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="text" class="form-control font-xssss text-grey-700"
                                                placeholder="min">
                                        </div>
                                        <div class="col-6">
                                            <input type="text" class="form-control font-xssss text-grey-700"
                                                placeholder="max">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="filter__listing border-bottom posr mb-2 px-1 py-2 border-1">
                                <div class="filter__header d-flex align-items-start justify-content-between">
                                    <span class="text-grey-900 font-xsss">İl</span>
                                    <i class='bx bx-plus text-grey-600 font-md'></i>
                                </div>
                                <div class="filter__elements py-2 mt-1 d-flex flex-column">
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="text" class="form-control font-xssss text-grey-700"
                                                placeholder="min">
                                        </div>
                                        <div class="col-6">
                                            <input type="text" class="form-control font-xssss text-grey-700"
                                                placeholder="max">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="filter__listing border-bottom posr mb-2 px-1 py-2 border-1">
                                <div class="filter__header d-flex align-items-start justify-content-between">
                                    <span class="text-grey-900 font-xsss">Yanacaq</span>
                                    <i class='bx bx-plus text-grey-600 font-md'></i>
                                </div>
                                <div class="filter__elements py-2 mt-1 d-flex flex-column">
                                    <ul class="ps-0 mb-0">
                                        <li class="lh-26 d-flex align-items-center"><input type="checkbox"
                                                class="form-check-input me-2 mt-0"><span
                                                class="font-xssss text-grey-900">Benzin</span></li>
                                        <li class="lh-26 d-flex align-items-center"><input type="checkbox"
                                                class="form-check-input me-2 mt-0"><span
                                                class="font-xssss text-grey-900">LPG</span></li>

                                        <li class="lh-26 d-flex align-items-center"><input type="checkbox"
                                                class="form-check-input me-2 mt-0"><span
                                                class="font-xssss text-grey-900">LPG</span></li>
                                        <li class="lh-26 d-flex align-items-center"><input type="checkbox"
                                                class="form-check-input me-2 mt-0"><span
                                                class="font-xssss text-grey-900">LPG</span></li>
                                        <li class="lh-26 d-flex align-items-center"><input type="checkbox"
                                                class="form-check-input me-2 mt-0"><span
                                                class="font-xssss text-grey-900">LPG</span></li>
                                    </ul>
                                </div>
                            </div>


                            <div class="filter__listing border-bottom posr mb-2 px-1 py-2 border-1">
                                <div class="filter__header d-flex align-items-start justify-content-between">
                                    <span class="text-grey-900 font-xsss">Kredit</span>
                                    <i class='bx bx-plus text-grey-600 font-md'></i>
                                </div>
                                <div class="filter__elements py-2 mt-1 d-flex flex-column">
                                    <ul class="ps-0 mb-0">
                                        <li class="lh-26 d-flex align-items-center">
                                            <div class="form-check d-flex align-items-center p-0 justify-content-start">
                                                <input class="form-check-input m-0" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault1">
                                                <label class="form-check-label ms-2 font-xssss text-grey-900" for="flexRadioDefault1">
                                                    Var
                                                </label>
                                            </div>
                                        <li class="lh-26 d-flex align-items-center">
                                            <div class="form-check d-flex align-items-center justify-content-start p-0">
                                                <input class="form-check-input m-0" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault2" required>
                                                <label class="form-check-label ms-2 font-xssss text-grey-900"
                                                    for="flexRadioDefault2">
                                                    Yoxdur
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>




                        </div>


                    </div>
                </div>


                <div class="col-lg-9 border py-3">
                    <div class="card__wrapper">
                        <div class="custom__card border shadow-xs ovh d-flex flex-column bg-white posr pb-2">
                            <span class="wishlist posa">
                                <i class='bx bx-heart text-current font-xs'></i>
                            </span>
                            <a href="#">
                                <div class="image__container ovh">
                                    <img src="./assets/images/card.png" alt="motorcycle">
                                </div>
                                <span class="ps-2 font-xsss mt-1  text-grey-700 fw-600">Harley Davidson</span>
                                <span class="ps-2 font-xssss mt-1 text-grey-700 fw-500">Bakı</span>
                                <div class="d-flex justify-content-between align-items-center pe-1">
                                    <span class="ps-2 font-xsss text-grey-700 fw-500">6700 AZN</span>
                                </div>
                            </a>
                        </div>

                        <div class="custom__card border shadow-xs ovh d-flex flex-column bg-white posr pb-2">
                            <span class="wishlist posa">
                                <i class='bx bx-heart text-current font-xs'></i>
                            </span>
                            <a href="#">
                                <div class="image__container ovh">
                                    <img src="./assets/images/card.png" alt="motorcycle">
                                </div>
                                <span class="ps-2 font-xsss mt-1  text-grey-700 fw-600">Harley Davidson</span>
                                <span class="ps-2 font-xssss mt-1 text-grey-700 fw-500">Bakı</span>
                                <div class="d-flex justify-content-between align-items-center pe-1">
                                    <span class="ps-2 font-xsss text-grey-700 fw-500">6700 AZN</span>
                                </div>
                            </a>
                        </div>


                        <div class="custom__card border shadow-xs ovh d-flex flex-column bg-white posr pb-2">
                            <span class="wishlist posa">
                                <i class='bx bx-heart text-current font-xs'></i>
                            </span>
                            <a href="#">
                                <div class="image__container ovh">
                                    <img src="./assets/images/card.png" alt="motorcycle">
                                </div>
                                <span class="ps-2 font-xsss mt-1  text-grey-700 fw-600">Harley Davidson</span>
                                <span class="ps-2 font-xssss mt-1 text-grey-700 fw-500">Bakı</span>
                                <div class="d-flex justify-content-between align-items-center pe-1">
                                    <span class="ps-2 font-xsss text-grey-700 fw-500">6700 AZN</span>
                                </div>
                            </a>
                        </div>


                        <div class="custom__card border shadow-xs ovh d-flex flex-column bg-white posr pb-2">
                            <span class="wishlist posa">
                                <i class='bx bx-heart text-current font-xs'></i>
                            </span>
                            <a href="#">
                                <div class="image__container ovh">
                                    <img src="./assets/images/card.png" alt="motorcycle">
                                </div>
                                <span class="ps-2 font-xsss mt-1  text-grey-700 fw-600">Harley Davidson</span>
                                <span class="ps-2 font-xssss mt-1 text-grey-700 fw-500">Bakı</span>
                                <div class="d-flex justify-content-between align-items-center pe-1">
                                    <span class="ps-2 font-xsss text-grey-700 fw-500">6700 AZN</span>
                                </div>
                            </a>
                        </div>


                        <div class="custom__card border shadow-xs ovh d-flex flex-column bg-white posr pb-2">
                            <span class="wishlist posa">
                                <i class='bx bx-heart text-current font-xs'></i>
                            </span>
                            <a href="#">
                                <div class="image__container ovh">
                                    <img src="./assets/images/card.png" alt="motorcycle">
                                </div>
                                <span class="ps-2 font-xsss mt-1  text-grey-700 fw-600">Harley Davidson</span>
                                <span class="ps-2 font-xssss mt-1 text-grey-700 fw-500">Bakı</span>
                                <div class="d-flex justify-content-between align-items-center pe-1">
                                    <span class="ps-2 font-xsss text-grey-700 fw-500">6700 AZN</span>
                                </div>
                            </a>
                        </div>


                        <div class="custom__card border shadow-xs ovh d-flex flex-column bg-white posr pb-2">
                            <span class="wishlist posa">
                                <i class='bx bx-heart text-current font-xs'></i>
                            </span>
                            <a href="#">
                                <div class="image__container ovh">
                                    <img src="./assets/images/card.png" alt="motorcycle">
                                </div>
                                <span class="ps-2 font-xsss mt-1  text-grey-700 fw-600">Harley Davidson</span>
                                <span class="ps-2 font-xssss mt-1 text-grey-700 fw-500">Bakı</span>
                                <div class="d-flex justify-content-between align-items-center pe-1">
                                    <span class="ps-2 font-xsss text-grey-700 fw-500">6700 AZN</span>
                                </div>
                            </a>
                        </div>


                        <div class="custom__card border shadow-xs ovh d-flex flex-column bg-white posr pb-2">
                            <span class="wishlist posa">
                                <i class='bx bx-heart text-current font-xs'></i>
                            </span>
                            <a href="#">
                                <div class="image__container ovh">
                                    <img src="./assets/images/card.png" alt="motorcycle">
                                </div>
                                <span class="ps-2 font-xsss mt-1  text-grey-700 fw-600">Harley Davidson</span>
                                <span class="ps-2 font-xssss mt-1 text-grey-700 fw-500">Bakı</span>
                                <div class="d-flex justify-content-between align-items-center pe-1">
                                    <span class="ps-2 font-xsss text-grey-700 fw-500">6700 AZN</span>
                                </div>
                            </a>
                        </div>


                        <div class="custom__card border shadow-xs ovh d-flex flex-column bg-white posr pb-2">
                            <span class="wishlist posa">
                                <i class='bx bx-heart text-current font-xs'></i>
                            </span>
                            <a href="#">
                                <div class="image__container ovh">
                                    <img src="./assets/images/card.png" alt="motorcycle">
                                </div>
                                <span class="ps-2 font-xsss mt-1  text-grey-700 fw-600">Harley Davidson</span>
                                <span class="ps-2 font-xssss mt-1 text-grey-700 fw-500">Bakı</span>
                                <div class="d-flex justify-content-between align-items-center pe-1">
                                    <span class="ps-2 font-xsss text-grey-700 fw-500">6700 AZN</span>
                                </div>
                            </a>
                        </div>


                        <div class="custom__card border shadow-xs ovh d-flex flex-column bg-white posr pb-2">
                            <span class="wishlist posa">
                                <i class='bx bx-heart text-current font-xs'></i>
                            </span>
                            <a href="#">
                                <div class="image__container ovh">
                                    <img src="./assets/images/card.png" alt="motorcycle">
                                </div>
                                <span class="ps-2 font-xsss mt-1  text-grey-700 fw-600">Harley Davidson</span>
                                <span class="ps-2 font-xssss mt-1 text-grey-700 fw-500">Bakı</span>
                                <div class="d-flex justify-content-between align-items-center pe-1">
                                    <span class="ps-2 font-xsss text-grey-700 fw-500">6700 AZN</span>
                                </div>
                            </a>
                        </div>
                        <div class="custom__card border shadow-xs ovh d-flex flex-column bg-white posr pb-2">
                            <span class="wishlist posa">
                                <i class='bx bx-heart text-current font-xs'></i>
                            </span>
                            <a href="#">
                                <div class="image__container ovh">
                                    <img src="./assets/images/card.png" alt="motorcycle">
                                </div>
                                <span class="ps-2 font-xsss mt-1  text-grey-700 fw-600">Harley Davidson</span>
                                <span class="ps-2 font-xssss mt-1 text-grey-700 fw-500">Bakı</span>
                                <div class="d-flex justify-content-between align-items-center pe-1">
                                    <span class="ps-2 font-xsss text-grey-700 fw-500">6700 AZN</span>
                                </div>
                            </a>
                        </div>

                        <div class="custom__card border shadow-xs ovh d-flex flex-column bg-white posr pb-2">
                            <span class="wishlist posa">
                                <i class='bx bx-heart text-current font-xs'></i>
                            </span>
                            <a href="#">
                                <div class="image__container ovh">
                                    <img src="./assets/images/card.png" alt="motorcycle">
                                </div>
                                <span class="ps-2 font-xsss mt-1  text-grey-700 fw-600">Harley Davidson</span>
                                <span class="ps-2 font-xssss mt-1 text-grey-700 fw-500">Bakı</span>
                                <div class="d-flex justify-content-between align-items-center pe-1">
                                    <span class="ps-2 font-xsss text-grey-700 fw-500">6700 AZN</span>
                                </div>
                            </a>
                        </div>

                        <div class="custom__card border shadow-xs ovh d-flex flex-column bg-white posr pb-2">
                            <span class="wishlist posa">
                                <i class='bx bx-heart text-current font-xs'></i>
                            </span>
                            <a href="#">
                                <div class="image__container ovh">
                                    <img src="./assets/images/card.png" alt="motorcycle">
                                </div>
                                <span class="ps-2 font-xsss mt-1  text-grey-700 fw-600">Harley Davidson</span>
                                <span class="ps-2 font-xssss mt-1 text-grey-700 fw-500">Bakı</span>
                                <div class="d-flex justify-content-between align-items-center pe-1">
                                    <span class="ps-2 font-xsss text-grey-700 fw-500">6700 AZN</span>
                                </div>
                            </a>
                        </div>


                        <div class="custom__card border shadow-xs ovh d-flex flex-column bg-white posr pb-2">
                            <span class="wishlist posa">
                                <i class='bx bx-heart text-current font-xs'></i>
                            </span>
                            <a href="#">
                                <div class="image__container ovh">
                                    <img src="./assets/images/card.png" alt="motorcycle">
                                </div>
                                <span class="ps-2 font-xsss mt-1  text-grey-700 fw-600">Harley Davidson</span>
                                <span class="ps-2 font-xssss mt-1 text-grey-700 fw-500">Bakı</span>
                                <div class="d-flex justify-content-between align-items-center pe-1">
                                    <span class="ps-2 font-xsss text-grey-700 fw-500">6700 AZN</span>
                                </div>
                            </a>
                        </div>


                        <div class="custom__card border shadow-xs ovh d-flex flex-column bg-white posr pb-2">
                            <span class="wishlist posa">
                                <i class='bx bx-heart text-current font-xs'></i>
                            </span>
                            <a href="#">
                                <div class="image__container ovh">
                                    <img src="./assets/images/card.png" alt="motorcycle">
                                </div>
                                <span class="ps-2 font-xsss mt-1  text-grey-700 fw-600">Harley Davidson</span>
                                <span class="ps-2 font-xssss mt-1 text-grey-700 fw-500">Bakı</span>
                                <div class="d-flex justify-content-between align-items-center pe-1">
                                    <span class="ps-2 font-xsss text-grey-700 fw-500">6700 AZN</span>
                                </div>
                            </a>
                        </div>


                        <div class="custom__card border shadow-xs ovh d-flex flex-column bg-white posr pb-2">
                            <span class="wishlist posa">
                                <i class='bx bx-heart text-current font-xs'></i>
                            </span>
                            <a href="#">
                                <div class="image__container ovh">
                                    <img src="./assets/images/card.png" alt="motorcycle">
                                </div>
                                <span class="ps-2 font-xsss mt-1  text-grey-700 fw-600">Harley Davidson</span>
                                <span class="ps-2 font-xssss mt-1 text-grey-700 fw-500">Bakı</span>
                                <div class="d-flex justify-content-between align-items-center pe-1">
                                    <span class="ps-2 font-xsss text-grey-700 fw-500">6700 AZN</span>
                                </div>
                            </a>
                        </div>


                        <div class="custom__card border shadow-xs ovh d-flex flex-column bg-white posr pb-2">
                            <span class="wishlist posa">
                                <i class='bx bx-heart text-current font-xs'></i>
                            </span>
                            <a href="#">
                                <div class="image__container ovh">
                                    <img src="./assets/images/card.png" alt="motorcycle">
                                </div>
                                <span class="ps-2 font-xsss mt-1  text-grey-700 fw-600">Harley Davidson</span>
                                <span class="ps-2 font-xssss mt-1 text-grey-700 fw-500">Bakı</span>
                                <div class="d-flex justify-content-between align-items-center pe-1">
                                    <span class="ps-2 font-xsss text-grey-700 fw-500">6700 AZN</span>
                                </div>
                            </a>
                        </div>


                        <div class="custom__card border shadow-xs ovh d-flex flex-column bg-white posr pb-2">
                            <span class="wishlist posa">
                                <i class='bx bx-heart text-current font-xs'></i>
                            </span>
                            <a href="#">
                                <div class="image__container ovh">
                                    <img src="./assets/images/card.png" alt="motorcycle">
                                </div>
                                <span class="ps-2 font-xsss mt-1  text-grey-700 fw-600">Harley Davidson</span>
                                <span class="ps-2 font-xssss mt-1 text-grey-700 fw-500">Bakı</span>
                                <div class="d-flex justify-content-between align-items-center pe-1">
                                    <span class="ps-2 font-xsss text-grey-700 fw-500">6700 AZN</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- MAIN WRAPPER -->

@endsection