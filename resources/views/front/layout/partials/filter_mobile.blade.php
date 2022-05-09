    <!-- filter mobile -->
    <form action="{{route('marka.search')}}" method="GET">
    <div class="filter__mobile">
        <span class="close__button" id="filter__mobile__close"><i class='bx bx-x text-current font-lg'></i></span>
        <h3 class="font-xs text-current fw-500 text-center mt-3 mb-2 pb-3 mx-auto border-bottom-current">Filterlə</h3>
        <div class="filter__box mobile bg-white border-2 border-bottom rounded-bottom shadow-sm pt-3 pb-2 px-3">
             <select name="city" class="col form-select mb-2 font-xsssss text-grey-900 w-100"
                                        id="">
                                        <option  value="" selected>Bütün Şəhərlər</option>
                                        @foreach($cities as $city)
                                           <option value="{{$city->id}}">{{$city->name}}</option>
                                        @endforeach
                                    </select>
            <div class="filter__listing border-bottom posr mb-2 px-1 py-2 border-1">
                <div class="filter__header d-flex align-items-start justify-content-between">
                    
                    <span class="text-grey-900 font-xsss">Qiymət</span>
                    <i class='bx bx-plus text-grey-600 font-md'></i>
                </div>
                <div class="filter__elements py-2 mt-1 d-flex flex-column">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" name="price_min" class="form-control col font-xssss me-1"
                                           placeholder="min">
                        </div>
                        <div class="col-6">
                            <input type="text" name="price_max" class="form-control col font-xssss me-1"
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
                           <input type="text"  name="date_min" class="form-control col font-xssss me-1"
                                           placeholder="min">
                        </div>
                        <div class="col-6">
                            <input type="text" name="date_max" class="form-control col font-xssss me-1"
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
                                class="form-check-input me-2 mt-0"><span class="font-xssss text-grey-900">Benzin</span>
                        <li class="lh-26 d-flex align-items-center"><input type="checkbox"
                                class="form-check-input me-2 mt-0"><span class="font-xssss text-grey-900">LPG</span>
                        </li>

                        <li class="lh-26 d-flex align-items-center"><input type="checkbox"
                                class="form-check-input me-2 mt-0"><span class="font-xssss text-grey-900">LPG</span>
                        </li>
                        <li class="lh-26 d-flex align-items-center"><input type="checkbox"
                                class="form-check-input me-2 mt-0"><span class="font-xssss text-grey-900">LPG</span>
                        </li>
                        <li class="lh-26 d-flex align-items-center"><input type="checkbox"
                                class="form-check-input me-2 mt-0"><span class="font-xssss text-grey-900">LPG</span>
                        </li>
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
                                <label class="form-check-label ms-2 font-xssss text-grey-900" for="flexRadioDefault2">
                                    Yoxdur
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <button class="bg-current custom__button border font-xss mx-auto btn text-white mt-3 mb-4">
                <i class='bx bx-search font-sm me-1'></i>
                <span>Axtar</span>
            </button>

        </div>
    </div>
    </form>
    <!-- filter mobile -->
