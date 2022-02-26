@extends('admin.layout.master')

@section('content')

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <a class="btn btn-outline-primary mt-4" href="{{route('service.index')}}"><i class="mdi mdi-arrow-left"></i></a>
                        @if (is_null($action))
                            <a style="height:46px;margin-top:10px;" class="btn btn-outline-primary" href="{{route('service.edit', $data)}}">Edit</a>
                        @endif
                    </div>
                    <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
                        @csrf @method($method)

                        <div class="form-group mb-3">
                            <label for="title" class="mb-2">Title</label>
                            <input type="text" value="{{ optional($data)->getAttribute('title') }}" @if(!$action)  disabled @endif name="title" class="form-control" id="title-name" placeholder="Title name insert">
                            @error('title')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="content" class="mb-2">Content</label>
                                <textarea  name="content" class="form-control" id="content" rows="3"  @if(!$action)  disabled @endif>{{ optional($data)->getAttribute('content') }}</textarea>
                            </div>
                            @error('content')
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
