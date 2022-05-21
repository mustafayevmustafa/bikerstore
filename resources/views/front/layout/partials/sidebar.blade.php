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
                                <li class="lh-18"><a href="{{url('/markalar',$marka)}}" class="font-xsss text-grey-900"><img class="menu__icon"
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