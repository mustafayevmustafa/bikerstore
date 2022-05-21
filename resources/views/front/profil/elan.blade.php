@extends('front.layout.master')
@section('content')
<!-- MAIN WRAPPER -->

  <div class="main-wrapper mx-auto py-5 px-3 mw bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @include('front.profil.ust_hisse')


                  <div class="profile__details row px-0 px-md-0 pt-4">
                        <div class="col-12">

                            @foreach($bikers as $biker)
                            <div class="row ads border d-flex justify-content-center">
                                <div class="col-12 col-md-2 px-0">
                                    <div class="d-flex justify-content-center justify-content-md-start">
                                        <img class="menu__icon"
                                            src="{{asset("storage/{$biker->getAttribute('image')}")}}">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div
                                        class="ads__info d-flex flex-column ms-md-4 align-items-center align-items-md-start">
                                        <h2 class="font-md">{{$biker->marka->name}}</h2>
                                        <h2 class="font-xs">{{$biker->price}}₼</h2>
                                        <p class="d-flex flex-row font-xsss text-grey-600">
                                            Yenilənmə Tarixi: 17.06.2021
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 ms-2 ms-md-0 col-md-4">
                                    <div
                                        class="row d-flex flex-column justify-content-md-center h-100 align-items-center align-items-md-start">
                                        <button class="custom__button px-4 w-auto text-center mx-md-auto">Aktivləşdir</button>
                                        <a href="{{route('announcement.edit',$biker->id)}}">
                                        <button
                                            class="text-grey-500 d-flex align-items-center justify-content-center justify-content-md-start border-none bg-none text-center mx-md-auto w-auto px-0 my-3">
                                            <i class='bx bx-edit me-1 font-sm'></i>Düzəliş et
                                        </button>
                                        </a>
                                        <form style="display:inline-block" method="post" action="{{route('announcement.destroy',$biker->id)}}">
                                        @method('delete') @csrf
                                        <button type="submit" class="text-grey-500 d-flex align-items-center justify-content-center justify-content-md-start border-none bg-none text-center mx-md-auto w-auto px-0">
                                           <i class='bx bx-x font-xl'></i>Sil
                                        </button>
                                    </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                        </div>
                    </div>







                </div>
            </div>
        </div>
    </div>


    <!-- MAIN WRAPPER -->
    @endsection
