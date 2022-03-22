@extends('admin.layout.master')

@section('content')

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <a class="btn btn-outline-primary mt-4" href="{{route('admin.home')}}"><i class="mdi mdi-arrow-left"></i></a>
                        @if (is_null($action))
                            <a style="height:46px;margin-top:10px;" class="btn btn-outline-primary" href="{{route('setting.edit', $data)}}">Edit</a>
                        @endif
                        
                    </div>
                    <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
                        @csrf @method($method)
                        @if (session('success'))
                        <div class="alert alert-success mt-2">
                            {{ session('success') }}
                        </div>
                    @endif
                        <div class="form-group mb-3">
                            <label for="title" class="mb-2">Site Title</label>
                            <input type="text" value="{{ optional($data)->getAttribute('site_title') }}" @if(!$action)  disabled @endif name="site_title" class="form-control" id="title-name" placeholder="Title name insert">
                            @error('site_title')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="title" class="mb-2">Site Url</label>
                            <input type="text" value="{{ optional($data)->getAttribute('site_url') }}" @if(!$action)  disabled @endif name="site_url" class="form-control" id="title-name" placeholder="Site url insert">
                            @error('site_url')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="address" class="mb-2">Address</label>
                            <input type="text" value="{{ optional($data)->getAttribute('address') }}" @if(!$action)  disabled @endif name="address" class="form-control" id="title-name" placeholder="Address  insert">
                            @error('address')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="title" class="mb-2">Email</label>
                            <input type="email" value="{{ optional($data)->getAttribute('email') }}" @if(!$action)  disabled @endif name="email" class="form-control" id="title-name" placeholder="Email insert">
                            @error('email')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="title" class="mb-2">Mobile</label>
                            <input type="text" value="{{ optional($data)->getAttribute('mobile') }}" @if(!$action)  disabled @endif name="mobile" class="form-control" id="title-name" placeholder="Mobile insert">
                            @error('mobile')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="title" class="mb-2">Keywords</label>
                            <input type="text" value="{{ optional($data)->getAttribute('keywords') }}" @if(!$action)  disabled @endif name="keywords" class="form-control" id="title-name" placeholder="Keywords insert">
                            @error('keywords')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="title" class="mb-2">Author</label>
                            <input type="text" value="{{ optional($data)->getAttribute('author') }}" @if(!$action)  disabled @endif name="author" class="form-control" id="title-name" placeholder="Author insert">
                            @error('author')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="content" class="mb-2">Description</label>
                                <textarea  name="description" class="form-control" id="content" rows="3"  @if(!$action)  disabled @endif>{{ optional($data)->getAttribute('description') }}</textarea>
                            </div>
                            @error('description')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class="form-group">
                            @if(Route::is('setting.edit'))
                            @if($data->getAttribute('site_logo'))
                                <img width="200" height="200" src="{{asset("storage/{$data->getAttribute('site_logo')}")}}" alt="">
                            @endif
                            @endif
                            <label for="post-title" class="mb-2">Site Logo</label><br>
                            <input type="file" name="site_logo">
                            @error('site_logo')
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
