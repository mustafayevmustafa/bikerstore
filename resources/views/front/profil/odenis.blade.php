@extends('front.layout.master')
@section('content')
<!-- MAIN WRAPPER -->

  <div class="main-wrapper mx-auto py-5 px-3 mw bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                @include('front.profil.ust_hisse')


                     <div class="profile__details row px-3 pt-4">
                        <div class="col-12 border-left border-top">
                            <div class="row text-grey-600 font-xsss">
                                <div class="col-1 col-md-2 border-right border-bottom fw-600">№</div>
                                <div class="col-3 col-md-2 border-right border-bottom fw-600">Tarix</div>
                                <div class="col-4 border-right border-bottom fw-600">Məbləğ</div>
                                <div class="col-4 border-right border-bottom fw-600">Təsvir</div>
                            </div>

                            <div class="row font-xsss">
                                <div class="col-1 col-md-2 border-right border-bottom">1</div>
                                <div class="col-3 col-md-2 border-right border-bottom">12.03.2022</div>
                                <div class="col-4 border-right border-bottom">33 <span>₼</span></div>
                                <div class="col-4 border-right border-bottom">Hesabın artırılması</div>
                            </div>

                            <div class="row font-xsss">
                                <div class="col-1 col-md-2 border-right border-bottom">2</div>
                                <div class="col-3 col-md-2 border-right border-bottom">3.11.2021</div>
                                <div class="col-4 border-right border-bottom">8 <span>₼</span></div>
                                <div class="col-4 border-right border-bottom">Elanın Vip edilməsi</div>
                            </div>

                            <div class="row font-xsss">
                                <div class="col-1 col-md-2 border-right border-bottom">3</div>
                                <div class="col-3 col-md-2 border-right border-bottom">3.11.2020</div>
                                <div class="col-4 border-right border-bottom">12 <span>₼</span></div>
                                <div class="col-4 border-right border-bottom">Elanın Vip edilməsi</div>
                            </div>
                        </div>

                        <div class="d-flex flex-row justify-content-center mt-5">
                            <button class="pagionation__button">1</button>
                            <button class="pagionation__button">2</button>
                            <button class="pagionation__button">3</button>
                            <button class="pagionation__button bg-current-very-low">...</button>
                            <button class="pagionation__button">10</button>
                        </div>
                    </div>







                </div>
            </div>
        </div>
    </div>


    <!-- MAIN WRAPPER -->
    @endsection
