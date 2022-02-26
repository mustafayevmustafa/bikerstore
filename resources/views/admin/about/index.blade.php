@extends('admin.layout.master')

@section('content')

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-3 mt-4">
                        <a class="btn btn-outline-success" href="{{route('about.create')}}">About Add</a>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success mt-2">
                            {{ session('success') }}
                        </div>
                    @endif
                    <table class="table table-responsive">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Content</th>
                            <th scope="col">Created Date</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($abouts as $about)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $about->getAttribute('title') }}</td>
                                <td>{{ $about->getAttribute('content') }}</td>
                                <td>{{ $about->getAttribute('created_at') }}</td>
                                <td>
                                    <a href="{{ route('about.show', $about) }}" class="btn"><i class="mdi mdi-18px mdi-eye" style="color: blue"></i></a>
                                    <a href="{{ route('about.edit', $about) }}" class="btn"><i class="mdi mdi-18px mdi-pencil-circle" style="color: blue"></i></a>
                                    <form style="display:inline-block" method="post" action="{{route('about.destroy',$about->id)}}">
                                        @method('delete') @csrf
                                        <button type="submit" class="btn m-3">
                                            <i style="color:red" class="mdi mdi-18px mdi-close-circle" ></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $abouts->appends(request()->input())->links() }}
                </div>
            </div>
        </div>
    </div>



@endsection
