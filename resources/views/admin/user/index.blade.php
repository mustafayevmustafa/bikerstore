@extends('admin.layout.master')

@section('content')

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-3 mt-4">

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
                            <th scope="col">Name</th>
                            <th scope="col">Surname</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Address</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->getAttribute('name') }}</td>
                                <td>{{ $user->getAttribute('surname') }}</td>
                                <td>{{ $user->getAttribute('email') }}</td>
                                <td>{{ $user->getAttribute('phone') }}</td>
                                <td>{{ $user->getAttribute('adress') }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $users->appends(request()->input())->links() }}
                </div>
            </div>
        </div>
    </div>



@endsection
