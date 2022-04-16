@extends('front.layout.master')
@section('content')
@section('css')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection
<!-- MAIN WRAPPER -->

  <div class="main-wrapper mx-auto py-5 px-3 mw bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @include('front.profil.ust_hisse')
                    
                    <form action="{{route('profil.update')}}" method="post" enctype="multipart/form-data" id="form">
                        @csrf
                     <div class="profile__edit d-flex justify-content-center row pt-5">
                        <div class="col-12 col-md-8">
                            <div class="row mb-5">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="d-flex justify-content-center mx-auto">
                                            <div class="profile__edit__img posr">
                                                @if(Auth::user()->image == null)
                                                <img src="{{asset("front/assets/images/moto.jpg")}}" alt="motorcycle"  class="user__img">
                                                @else
                                                <img src="storage/{{Auth::user()->image}}" name="image" class="user__img" alt="">
                                                @endif
                                                <label class="edit__photo shadow-sm" for="profile__img">
                                                    <i class='bx bx-camera'></i>
                                                    <input type="file" class="d-none" id="profile__img" name="image">
                                                </label>
                                                <div class="img-holder"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <input type="hidden" name="old_image" value="{{ Auth::user()->image }}">
                           
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <h4 class="font-xss ps-1 mb-2 text-grey-900 fw-400">Ad</h4>
                                        <input type="text" class="form-control font-xsss text-grey-700 mb-3"
                                            value="{{Auth::user()->name}}" required name="name">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <h4 class="font-xss ps-1 mb-2 text-grey-900 fw-400">Soyad</h4>
                                        <input type="text" class="form-control font-xsss text-grey-700 mb-3"
                                     value="{{Auth::user()->surname}}" required name="surname">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <h4 class="font-xss ps-1 mb-2 text-grey-900 fw-400">Email</h4>
                                        <input type="email" class="form-control font-xsss text-grey-700 mb-3"
                                            value="{{Auth::user()->email}}" required name="email">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <h4 class="font-xss ps-1 mb-2 text-grey-900 fw-400">Address</h4>
                                        <input type="text" class="form-control font-xsss text-grey-700 mb-3"
                                            value="{{Auth::user()->adress}}"  name="adress">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <h4 class="font-xss ps-1 mb-2 text-grey-900 fw-400">Telefon</h4>
                                        <input type="number" class="form-control font-xsss text-grey-700 mb-3"
                                            value="{{Auth::user()->phone}}"  name="phone">
                                    </div>
                                </div>
                            </div>
                    
                            <button type="submit" class="btn custom__button btn-block">Yadda Saxla</button>
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


    <!-- MAIN WRAPPER -->
    @endsection
@section('js')


{{--
<script>
    $(function(){
        $('#form').on('submit',function(e){
            e.preventDefault();
            //alert('form')

            var form = this;
            alert(form);
            $.ajax({
                url:$(form).attr('action'),
                method:$(form).attr('method'),
                dataType:'html',
                success:function(response){
                    alert('salam')
                }
                
            });
           
        });
                
       
    });
</script>
--}}
@endsection