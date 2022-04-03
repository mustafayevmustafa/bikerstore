@extends('admin.layout.master')

@section('content')

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <a class="btn btn-outline-primary mt-4" href="{{route('ban.index')}}"><i class="mdi mdi-arrow-left"></i></a>
                        @if (is_null($action))
                            <a style="height:46px;margin-top:10px;" class="btn btn-outline-primary" href="{{route('ban.edit', $data)}}">Edit</a>
                        @endif
                    </div>
                    <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
                        @csrf @method($method)

                        <div class="form-group">
                            <label for="post-title" class="mb-2">Name</label>
                            <input type="text" value="{{ optional($data)->getAttribute('name') }}" @if(!$action)  disabled @endif name="name" class="form-control" id="city-name" placeholder="Name insert">
                            @error('name')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                            @enderror
                        </div><br>
                        @if(!Route::is('ban.create'))
                        <input type="hidden" name="old_image" value="{{$data->getAttribute('image')}}">
                        @endif
{{--                        <div class="form-group">--}}
{{--                            <label for="post-title" class="mb-2">Slug</label>--}}
{{--                            <input type="text" value="{{ optional($data)->getAttribute('slug') }}" @if(!$action)  disabled @endif name="slug" class="form-control" id="city-name" placeholder="Slug insert">--}}
{{--                            @error('slug')--}}
{{--                            <p class="text-danger">--}}
{{--                                {{ $message }}--}}
{{--                            </p>--}}
{{--                            @enderror--}}
{{--                        </div><br>--}}
                      
                        <div class="form-group">
                            @if(Route::is('ban.edit'))
                            @if($data->getAttribute('image'))
                                <img width="200" height="200" src="{{asset("storage/{$data->getAttribute('image')}")}}" alt="">
                            @endif
                            @endif
                            <label for="post-title" class="mb-2">Ban Image</label><br>
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
