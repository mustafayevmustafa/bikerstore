<div class="row header__mid">
            <form action="{{url('/search')}}" method="POST" class="d-flex justify-content-start align-items-center ms-3">
                @csrf
                
                <input type="search"  name="marka_id" class="font-xsss" id="search__input" placeholder="Bir Şeylər Axtarın . . .">
                <button type="submit" for="search__input" class="font-sm" id="search__label">
                    <i class='bx bx-search'></i>
                </button>
            </form>
        </div>