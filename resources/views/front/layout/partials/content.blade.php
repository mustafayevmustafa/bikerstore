  <div class="card__wrapper">
                        @foreach($bikers as $biker)
                        <div class="custom__card biker_data border shadow-sm ovh d-flex flex-column bg-white posr pb-2" id="myTable">
                          
                          <div class="wishlist-content">
                                <input type="hidden"  class="biker_id" value="{{$biker->id}}">
                            @guest
                            <a href="{{route('add-wishlist')}}">
                                <span type="button" class="wishlist posa">
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
                            </a>
                            

                            @else
                            <span type="button" class="add-to-wishlist-btn wishlist posa">
                                <i class='bx bx-heart text-current font-xs
                                {{$biker->checkWishlist->isEmpty()?'': 'active'}}'>

                                </i>
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
                            @endguest
                            </div>
                             <div class="product-info posa">
                                <span class="mybadge circle kredit posr">
                                    <i class="fa-solid fa-percent"></i>
                                    <span class="icon-info posa">Kredit Var</span>
                                </span>
                                <span class="mybadge circle barter posr">
                                    <i class="fa-solid fa-arrows-rotate"></i>
                                    <span class="icon-info posa">Barter Var</span>
                                </span>
                            </div>
                            <a href="{{route('detail',$biker->id)}}">
                                <div class="image__container ovh">
                                    <img src="{{asset("storage/{$biker->getAttribute('image')}")}}" alt="motorcycle">
                                </div>
                                <span class="ps-2 font-xsss mt-1  text-grey-800 fw-600">{{$biker->marka->name}}</span>
                                {{-- <span class="ps-2 font-xssss mt-1 text-grey-700 fw-500">{{$biker->city->name}}</span> --}}
                                <div class="d-flex justify-content-between align-items-center pe-1">
                                    <span class="ps-2 font-xsss text-grey-800 fw-500">{{$biker->price}} AZN</span>
                                    
                                </div>
                                <span class="ps-2 font-xssss text-grey-800 fw-500">2022, 1.5 L, 0 km</span>
                                    <span class="ps-2 font-xsssss mt-1 text-grey-600 fw-500">Bak??, 02.02.2022 22:20</span>
                            </a> 
                        
                    </div>
                    @endforeach
                </div>