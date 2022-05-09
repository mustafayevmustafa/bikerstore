@extends('front.layout.master')
@section('content')
   <!-- MAIN WRAPPER -->

    {{-- <div class="main-wrapper mx-auto mw bg-white py-3 px-2 px-md-3">
        <div class="container detail">
            <div class="row">
                <div class="col-lg-5 text-white">
                    <div class="w-100 posr">
                        <span class="wishlist posa">
                            <i class='bx bx-heart text-current font-md'></i>
                        </span>
                        <img src="{{asset("storage/{$biker->getAttribute('image')}")}}" alt="" class="detail__img w-100 rounded rounded-2">
                    </div>
                     <input type="hidden" name="old_image" value="{{$biker->image}}">
                    <div class="more__detail">
                        <div class="row py-3 ovh w-100 ms-0">
                            <div class="font-xss row ps-1 text-grey-900 pb-2 border-bottom mb-3 ovh">
                                <span class="col-6">Şəhər:</span>
                                <span class="col-6">{{$biker->city->name}}</span>
                            </div>

                            <div class="font-xss row ps-1 text-grey-900 pb-2 border-bottom mb-3 ovh">
                                <span class="col-6">Marka:</span>
                                <span class="col-6">{{$biker->marka->name}}</span>
                            </div>

                            <div class="font-xss row ps-1 text-grey-900 pb-2 border-bottom mb-3 ovh">
                                <span class="col-6">Model:</span>
                                <span class="col-6">{{$biker->pattern->name}}</span>
                            </div>

                            <div class="font-xss row ps-1 text-grey-900 pb-2 border-bottom mb-3 ovh">
                                <span class="col-6">Rəng:</span>
                                <span class="col-6">{{$biker->color->name}}</span>
                            </div>

                            <div class="font-xss row ps-1 text-grey-900 pb-2 border-bottom mb-3 ovh">
                                <span class="col-6">Yeni:</span>
                                <span class="col-6">Bəli</span>
                            </div>

                            <div class="font-xss row ps-1 text-grey-900 pb-2 border-bottom mb-3 ovh">
                                <span class="col-6">Mühərrik:</span>
                                <span class="col-6">0.2 L</span>
                            </div>

                            <div class="font-xss row ps-1 text-grey-900 pb-2 border-bottom mb-3 ovh">
                                <span class="col-6">Mühərrikin gücü:</span>
                                <span class="col-6">23 a.g</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 text-white">
                    <div class="ad__detail d-flex flex-column justify-content-between">
                        <div class="detail__info">
                            <h2 class="text-grey-900 font-xxl">{{$biker->marka->name}}</h2>
                            <p class="font-xssss text-grey-600">{{$biker->description}}
                            </p>

                            <div class="w-100 d-flex justify-content-between align-items-center">
                                <span class="text-current font-lg fw-500">{{$biker->price}}₼</span>
                                <span class="text-grey-700 d-flex align-items-center">
                                    <i class='bx bx-mobile-alt font-sm me-1'></i>
                                    <span class="font-xsss">{{$biker->contact_phone}}</span>
                                </span>
                            </div>
                        </div>
                        <div class="buttons d-flex justify-content-between mt-2">
                            <button class="bg-current custom__button border border-1 font-xss btn text-white">
                                <i class='bx bxs-up-arrow-circle font-md me-1'></i>
                                <span>Elanı irəli çək</span>
                            </button>
                            <button class="bg-danger custom__button border font-xss btn text-white">
                                <i class='bx bxs-crown font-sm me-1'></i>
                                <span>Elanı vip et</span>
                            </button>
                        </div>
                    </div>

                    <div
                        class="banner__detail mt-4 text-grey-500 rounded-2 w-100 d-flex justify-content-center align-items-center bg-grey">
                        Burada sizin reklamınız ola bilərdi
                    </div>
                </div>


            </div>

            <div class="row mt-3">
                <div class="col-12">
                    <div class="buttons d-flex justify-content-between justify-content-lg-start">
                        <button class="bg-current custom__button border border-1 font-xss btn text-white me-2">
                            <i class='bx bx-edit-alt font-md me-1'></i>
                            <span>Düzəliş et</span>
                        </button>
                        <form style="display:inline-block" method="post" action="{{route('announcement.destroy',$biker->id)}}">
                                        @method('delete') @csrf
                                        <button type="submit" class="bg-danger custom__button border font-xss btn text-white">
                                           <i class='bx bx-x font-lg me-1'></i>
                                        </button>
                                    </form>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="main-wrapper mx-auto mw bg-white py-2 px-2 px-md-3">
        <div class="container detail">
            <div class="row pt-3">
                <div class="col-12 text-white py-3 detail__carousel__container border-bottom ovh">
                    <div class="owl-carousel owl-theme" id="detail__carousel">
                        <div class="item posr">
                            <a href="{{asset("storage/{$biker->getAttribute('image')}")}}" data-lightbox="galleryModal">
                                <img src="{{asset("storage/{$biker->getAttribute('image')}")}}" alt=""
                                    class="detail__img w-100 rounded rounded-2">
                            </a>

                        </div>

                        <div class="item posr">
                            <a href="./assets/images/detail1.jpg" data-lightbox="galleryModal">
                                <img src="./assets/images/detail1.jpg" alt=""
                                    class="detail__img w-100 rounded rounded-2">
                            </a>

                        </div>

                        <div class="item posr">
                            <a href="./assets/images/detail2.jpg" data-lightbox="galleryModal">
                                <img src="./assets/images/detail2.jpg" alt=""
                                    class="detail__img w-100 rounded rounded-2">
                            </a>

                        </div>
                        <div class="item posr">
                            <a href="./assets/images/detail3.jpg" data-lightbox="galleryModal">
                                <img src="./assets/images/detail3.jpg" alt=""
                                    class="detail__img w-100 rounded rounded-2">
                            </a>
                        </div>
                        <div class="item posr">
                            <a href="./assets/images/detail3.jpg" data-lightbox="galleryModal">
                                <img src="./assets/images/detail3.jpg" alt=""
                                    class="detail__img w-100 rounded rounded-2">
                            </a>
                        </div>
                        <div class="item posr">
                            <a href="./assets/images/detail3.jpg" data-lightbox="galleryModal">
                                <img src="./assets/images/detail3.jpg" alt=""
                                    class="detail__img w-100 rounded rounded-2">
                            </a>
                        </div>
                        <div class="item posr">
                            <a href="./assets/images/detail3.jpg" data-lightbox="galleryModal">
                                <img src="./assets/images/detail3.jpg" alt=""
                                    class="detail__img w-100 rounded rounded-2">
                            </a>
                        </div>
                        <div class="item posr">
                            <a href="./assets/images/detail3.jpg" data-lightbox="galleryModal">
                                <img src="./assets/images/detail3.jpg" alt=""
                                    class="detail__img w-100 rounded rounded-2">
                            </a>
                        </div>
                        <div class="item posr">
                            <a href="./assets/images/detail3.jpg" data-lightbox="galleryModal">
                                <img src="./assets/images/detail3.jpg" alt=""
                                    class="detail__img w-100 rounded rounded-2">
                            </a>
                        </div>
                        <div class="item posr">
                            <a href="./assets/images/detail3.jpg" data-lightbox="galleryModal">
                                <img src="./assets/images/detail3.jpg" alt=""
                                    class="detail__img w-100 rounded rounded-2">
                            </a>
                        </div>
                        <div class="item posr">
                            <a href="./assets/images/detail3.jpg" data-lightbox="galleryModal">
                                <img src="./assets/images/detail3.jpg" alt=""
                                    class="detail__img w-100 rounded rounded-2">
                            </a>
                        </div>
                        <div class="item posr">
                            <a href="./assets/images/detail3.jpg" data-lightbox="galleryModal">
                                <img src="./assets/images/detail3.jpg" alt=""
                                    class="detail__img w-100 rounded rounded-2">
                            </a>
                        </div>
                        <div class="item posr">
                            <a href="./assets/images/detail3.jpg" data-lightbox="galleryModal">
                                <img src="./assets/images/detail3.jpg" alt=""
                                    class="detail__img w-100 rounded rounded-2">
                            </a>
                        </div>
                        <div class="item posr">
                            <a href="./assets/images/detail3.jpg" data-lightbox="galleryModal">
                                <img src="./assets/images/detail3.jpg" alt=""
                                    class="detail__img w-100 rounded rounded-2">
                            </a>
                        </div>
                        <div class="item posr">
                            <a href="./assets/images/detail3.jpg" data-lightbox="galleryModal">
                                <img src="./assets/images/detail3.jpg" alt=""
                                    class="detail__img w-100 rounded rounded-2">
                            </a>
                        </div>
                        <div class="item posr">
                            <a href="./assets/images/detail3.jpg" data-lightbox="galleryModal">
                                <img src="./assets/images/detail3.jpg" alt=""
                                    class="detail__img w-100 rounded rounded-2">
                            </a>
                        </div>

                    </div>
                    <div class="owl-dots mt-3 d-flex justify-content-center" id="carousel-custom-dots">
                        <button role="button" class="owl-dot item"><img src="./assets/images/detail.jpg"
                                alt=""></button>
                       
                        
                       
                      
                     
                       
                       
                    </div>
                </div>
                <div class="col-12 mb-2">
                    <h2 class="text-grey-900 font-xl mt-3 w-100">Zontes Tiger ZT150-3A, 0.0 L, 2014 il, 10 000 km</h2>
                    <span class="font-xssss me-4">
                        <i class="fa-solid fa-clock text-current"></i>
                        <span class="text-grey-600">6 Dekabr, 2022</span>
                    </span>

                    <span class="font-xssss">
                        <i class="fa-solid fa-eye text-current"></i>
                        <span class="text-grey-600">Baxışlar: 632</span>
                    </span>
                </div>
                <div class="text-white col-lg-6 mt-1">
                    <div class="ad__detail d-flex flex-column justify-content-between">
                        <div
                            class="about-user d-flex align-items-center  justify-content-between bg-current-very-low p-3 rounded rounded-3 mb-3">
                            <span>
                                <span class="mb-2 d-block">
                                    <i class="fa-solid fa-user me-2 text-current"></i>
                                    <span class="font-xss text-grey-900">Zeynal</span>
                                </span>
                                <span class="text-grey-700 d-flex align-items-center">
                                    <i class="fa-solid fa-phone me-2 text-current"></i>
                                    <span class="font-xss text-grey-900">(099) 342-02-12</span>
                                </span>
                            </span>
                            <span class="text-white bg-current px-2 rounded rounded-3 font-lg fw-500">4100₼</span>
                        </div>
                        <h2 class="text-grey-900 font-sm w-100">Açıqlama</h2>
                        <div class="detail__info posr">
                            <p class="font-xssss text-grey-600">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit.
                                Voluptatem hic placeat pariatur inventore eaque voluptatibus vero odio?
                                Eius deleniti necessitatibus voluptate totam.
                                Deserunt amet ipsam tempore, dicta animi commodi hic asperiores,
                                sequi ullam fugit eveniet, accusantium inventore maiores. Soluta, alias.
                            </p>

                        </div>
             
                    </div>

                    <div class="more__detail">
                        <div class="row py-3 ovh w-100 ms-0">
                            <div class="font-xss row ps-1 text-grey-900 pb-2 border-bottom mb-3 ovh">
                                <span class="col-6">Şəhər:</span>
                                <span class="col-6">Bakı</span>
                            </div>

                            <div class="font-xss row ps-1 text-grey-900 pb-2 border-bottom mb-3 ovh">
                                <span class="col-6">Marka:</span>
                                <span class="col-6">Yamaha</span>
                            </div>

                            <div class="font-xss row ps-1 text-grey-900 pb-2 border-bottom mb-3 ovh">
                                <span class="col-6">Model:</span>
                                <span class="col-6">FZ1</span>
                            </div>

                            <div class="font-xss row ps-1 text-grey-900 pb-2 border-bottom mb-3 ovh">
                                <span class="col-6">Rəng:</span>
                                <span class="col-6">Qəhvəyi</span>
                            </div>

                            <div class="font-xss row ps-1 text-grey-900 pb-2 border-bottom mb-3 ovh">
                                <span class="col-6">Yeni:</span>
                                <span class="col-6">Bəli</span>
                            </div>

                            <div class="font-xss row ps-1 text-grey-900 pb-2 border-bottom mb-3 ovh">
                                <span class="col-6">Mühərrik:</span>
                                <span class="col-6">0.2 L</span>
                            </div>

                            <div class="font-xss row ps-1 text-grey-900 pb-2 border-bottom mb-3 ovh">
                                <span class="col-6">Mühərrikin gücü:</span>
                                <span class="col-6">23 a.g</span>
                            </div>
                        </div>
                    </div>

                    
                </div>

                <div class="col-lg-6">
                    <div class="features">
                        <h5>Özəlliklər:</h5>
                        <ul class="features-list p-0 d-flex gap-2 flex-wrap flex-row">
                            <li>
                                <i class="fa-solid fa-circle-check text-green"></i>
                                <span>ABS</span>
                            </li>

                            <li>
                                <i class="fa-solid fa-circle-check text-green"></i>
                                <span>AM/FM Radio</span>
                            </li>

                            <li>
                                <i class="fa-solid fa-circle-xmark text-red"></i>
                                <span>CD Player</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-circle-check text-green"></i>
                                <span>Power Mirrors</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-circle-xmark text-red"></i>
                                <span>USB and Auxillary Cable</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-circle-xmark text-red"></i>
                                <span>Rear speakers</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-circle-check text-green"></i>
                                <span>Sun Roof</span>
                            </li>
                        </ul>
                    </div>
                    <div
                        class="banner__detail mt-5 text-grey-500 rounded-2 w-100 d-flex justify-content-center align-items-center bg-grey">
                        Burada sizin reklamınız ola bilərdi
                    </div>

                </div>




            </div>

            <div class="row mt-3">
                <div class="col-12">
              
                </div>
            </div>
        </div>
        <div class="similar-products pt-1 pb-1 border-bottom">
            <h4 class=" d-inline-block ps-0 ms-3 mb-2 pb-1 text-grey-800 border-bottom text-uppercase font-xs fw-500">
                Bənzər Elanlar</h4>
            <div class="owl-carousel owl-theme" id="similar_products">

                
                <div class="item posr">
                    <div class="custom__card border shadow-sm ovh d-flex flex-column bg-white posr pb-2">
                        <span class="wishlist posa">
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
                        <a href="#">
                            <div class="image__container ovh">
                                <img src="./assets/images/card.png" alt="motorcycle">
                            </div>
                            <span class="ps-2 font-xsss mt-1  text-grey-800 fw-600">Harley Davidson</span>
                            <div class="d-flex justify-content-between align-items-center pe-1">
                                <span class="ps-2 font-xsss text-grey-800 fw-500">6700 AZN</span>
                            </div>
                            <span class="ps-2 font-xssss text-grey-800 fw-500">2022, 1.5 L, 0 km</span>
                            <span class="ps-2 font-xsssss mt-1 text-grey-600 fw-500">Bakı, 02.02.2022 22:20</span>
                        </a>
                    </div>
                </div>

         
            </div>
        </div>
    </div>

    <!-- MAIN WRAPPER -->

@endsection