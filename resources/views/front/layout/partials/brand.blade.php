<!-- BRANDS -->

<div class="row brands py-5 bg-white mw mx-auto">
    <div class="container posr">
        
        <div class="brand__slide owl-carousel ovh owl-theme dot-none owl-nav-link owl-arrow-top d-flex">
            @foreach($markas as $marka)
            <div class="item">
                <img src="{{asset("storage/{$marka->getAttribute('image')}")}}" alt="">
            </div>
           @endforeach
        </div>
        
    </div>
</div>

<!-- BRANDS -->