@extends('Admin.layout.master')

@section('content')

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-3 mt-4">
                        <a class="btn btn-outline-success" href="{{route('roles.create')}}">Role Add</a>
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
                            <th scope="col">Role Name</th>
                            <th scope="col">Permissions</th>
                            <th scope="col">Created Date</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($roles as $role)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $role->getAttribute('name') }}</td>
                                <td>{{ $role->getRelation('permissions')->implode('name', ', ') }}</td>
                                <td>{{ $role->getAttribute('created_at') }}</td>
                                <td>
                                    <form style="display:inline-block" method="post" action="{{route('roles.destroy',$role->id)}}">
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
                    {{ $roles->appends(request()->input())->links() }}
                </div>
            </div>
        </div>
    </div>



@endsection
