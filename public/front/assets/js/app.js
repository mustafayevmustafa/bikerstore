$(document).ready(function() {
    $('.add-to-wishlist-btn').click(function(e) {
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            // data: {
            //     "_token": "{{ csrf_token() }}",
            // }
        });
        var biker_id = $(this).closest('.biker_data').find('.biker_id').val();
        //alert(biker_id);
        $.ajax({
            method: "POST",
            url: "/add-wishlist",
            data: {
                'biker_id': biker_id,
            },
            success: function(response) {
                //console.log(biker_id);
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(response.status);
            }
        });
    });
});
$(document).ready(function() {
    "use strict";

    $(".wishlist").on("click", function() {

        $(this).find('i').toggleClass("active");
    });



    // SLIDER JS


    $('.brand__slide').owlCarousel({
        items: 1,
        loop: true,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 2500,
        autoplayHoverPause: true,
        autoplaySpeed: 1000,
        nav: false,
        dots: false,
        navText: ['<i class="bx bx-chevron-left"></i>', '<i class="bx bx-chevron-right"></i>'],
        responsive: {
            0: {
                items: 2,
            },
            749: {
                items: 3,
            },
            1023: {
                items: 5,
            }
        }
    });
});

// FİLTER

$(".filter__header").on("click", function() {
    $(this).parent().toggleClass("active");
    var h1 = $(this).parent().find(".filter__elements").height();

    if ($(this).parent().hasClass("active")) {
        $(this).parent().css("height", `${(42 + h1 + 26)}`);
        //26 is padding and margin, 42 is old filter__lsiting height
    } else {
        $(this).parent().css("height", "42");
    }
});


// FILTER MOBILE

$("#mobile__filter_button").on("click", () => {
    $(".filter__mobile").addClass("active");
});

$("#filter__mobile__close").on("click", () => {
    $(".filter__mobile").removeClass("active");
});


// MOBILE MENU
$(".mobile__toggle").on("click", () => {
    $(".menu__overlay").addClass("active");
});

$("#menu__mobile__close").on("click", () => {
    $(".menu__overlay").removeClass("active");
});