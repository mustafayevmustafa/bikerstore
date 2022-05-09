                    {{--          FILTER   START --}}

                        <div class="filter d-none d-lg-flex mt-lg-2 px-3 py-3 border rounded rounded-1 mb-3">
                        <form action="{{route('marka.search')}}" method="GET">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-md-2">
                                <select name="marka" class="form-select mb-2 font-xsssss text-grey-900" id="">
                                    <option value="Bütün Markalar" disabled selected>Bütün Markalar</option>
                                    @foreach($markas as $marka)
                                    <option value="{{$marka->id}}">{{$marka->name}}</option>
                                   @endforeach
                                </select>

                                <select name="model" class="form-select font-xsssss text-grey-900" id="">
                                    <option value="Bütün Markalar" disabled selected>Bütün Modeller</option>
                                    @foreach($patterns as $model)
                                    <option value="{{$model->id}}">{{$model->name}}</option>
                                   @endforeach
                                </select>
                            </div>
                            <div class="col-md-4 mt-2 mt-md-0">
                                <div class="row mb-2 mx-auto">
                                    <span
                                        class="col-3 me-1 border rounded font-xsssss bg-white d-flex align-items-center">Qiymət</span>
                                    <select name="currency" class="col form-select me-1 font-xssss text-grey-900"
                                            id="">
                                        <option value="AZN" selected>AZN</option>

                                    </select>
                                    <input type="text" name="price_min" class="form-control col font-xssss me-1"
                                           placeholder="min">
                                    <input type="text" name="price_max" class="form-control col font-xssss me-1"
                                           placeholder="max">
                                </div>
                                <div class="row mx-auto">
                                    <span
                                        class="col-4 me-1 border rounded font-xsssss bg-white d-flex align-items-center">Buraxılış
                                        ili</span>
                                    <input type="text"  name="date_min" class="form-control col font-xssss me-1"
                                           placeholder="min">
                                    <input type="text" name="date_max" class="form-control col font-xssss me-1"
                                           placeholder="max">
                                </div>
                            </div>
                            <div class="col-md-2 mt-2 d-flex flex-row justify-content-evenly flex-md-column mt-md-0">
                                <div class="row mb-2 d-flex justify-content-center">
                                    <span
                                        class="me-1 px-2 border rounded font-xssss bg-white d-flex align-items-center w-auto">Kredit
                                        <input class="form-check-input ms-2 mt-0" type="checkbox" name="kredit"></span>
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <span
                                        class="me-1 px-2 border rounded font-xssss bg-white d-flex align-items-center w-auto">Barter
                                        <input class="form-check-input ms-2 mt-0" type="checkbox" name="barter"></span>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row mx-auto mx-md-0">
                                    <select name="city" class="col form-select mb-2 font-xsssss text-grey-900 w-100"
                                        id="">
                                        <option  value="" selected>Bütün Şəhərlər</option>
                                        @foreach($cities as $city)
                                           <option value="{{$city->id}}">{{$city->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row mx-auto mx-md-0">
                                    <span
                                        class="me-1 px-2 border rounded font-xsssss bg-white d-flex text-current align-items-center w-100">3310
                                        Yeni Elan</span>
                                </div>
                            </div>
                            <div class="col-md-2 mt-2 mt-md-0 d-flex align-items-center justify-content-center">
                                <div class="row d-flex justify-content-center">
                                    <div class="col">
                                        <button class="bg-current btn btn-sm text-white px-4">Axtar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>

                    {{--   FILTER END --}}