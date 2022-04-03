@extends('admin.layout.master')

@section('content')

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <a class="btn btn-outline-primary mt-4" href="{{route('marka.index')}}"><i class="mdi mdi-arrow-left"></i></a>
                        @if (is_null($action))
                            <a style="height:46px;margin-top:10px;" class="btn btn-outline-primary" href="{{route('marka.edit', $data)}}">Edit</a>
                        @endif
                    </div>
                    <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
                        @csrf @method($method)

                        <div class="form-group">
                            <label for="post-title" class="mb-2">Marka Name</label>
                            <input type="text" value="{{ optional($data)->getAttribute('name') }}" @if(!$action)  disabled @endif name="name" class="form-control" id="city-name" placeholder="Marka name insert">
                            @error('name')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                            @enderror
                        </div><br>
                        <input type="hidden" name="old_image" value="{{$data->getAttribute('image')}}">
                        <div class="form-group">
                            @if(Route::is('marka.edit'))
                            @if($data->getAttribute('image'))
                                <img width="200" height="200" src="{{asset("storage/{$data->getAttribute('image')}")}}" alt="">
                            @endif
                            @endif
                            <label for="post-title" class="mb-2">Marka Logo</label><br>
                            <input type="file" name="image">
                            @error('image')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        @if ($action)
                            <button type="submit" class="btn btn-primary mt-3">Save</button>
                        @endif
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
