@extends('front.layout.master')
@section('content')
<!-- MAIN WRAPPER -->

    <div class="main-wrapper mx-auto py-3 mw bg-white">
        @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
        <div class="container">
            <div class="row">
               @include('front.layout.partials.sidebar')


                <div class="col-lg-9 border py-3">
                    @include('front.layout.partials.filter')
                  @include('front.layout.partials.content')
            </div>
        </div>
    </div>
    </div>

    <!-- MAIN WRAPPER -->
    @endsection


@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>
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
                    url: "{{route('add-wishlist')}}",
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
    </script>
@endsection



    {{--
    @section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
    $('.add-to-wishlist-btn').click(function(e) {
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var biker_id = $(this).closest('.biker_data').find('.biker_id').val();
        //alert(biker_id);
        $.ajax({
            method: "POST",
            url: "/add-wishlist",
            data: {
                'biker_id ': biker_id,
            },
            success: function(e) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(response.status);
            }
        });
    });
});
    </script>
    @endsection
--}}
