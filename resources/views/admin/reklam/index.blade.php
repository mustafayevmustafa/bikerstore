@extends('admin.layout.master')

@section('content')

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-3 mt-4">
                        <a class="btn btn-outline-success" href="{{route('reklam.create')}}">Marka Add</a>
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
                            <th scope="col">Link</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($reklams as $reklam)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $reklam->getAttribute('title') }}</td>
                                <td>{{ $reklam->getAttribute('content') }}</td>
                                <td>{{ $reklam->getAttribute('link') }}</td>
                                <td>
                                    <a href="{{ route('reklam.show', $reklam) }}" class="btn"><i class="mdi mdi-18px mdi-eye" style="color: blue"></i></a>
                                    <a href="{{ route('reklam.edit', $reklam) }}" class="btn"><i class="mdi mdi-18px mdi-pencil-circle" style="color: blue"></i></a>
                                    <form style="display:inline-block" method="post" action="{{route('reklam.destroy',$reklam->id)}}">
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
                    {{ $reklams->appends(request()->input())->links() }}
                </div>
            </div>
        </div>
    </div>



@endsection
