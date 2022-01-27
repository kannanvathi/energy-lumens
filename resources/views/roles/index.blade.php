@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb mt-4 text-right mr-4">
            <div class="pull-right">

            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between w-100">
                    <h4 class="card-title">Roles Table</h4>
                    @can('role-create')
                        <a class="btn btn-md btn-success" href="{{ route('roles.create') }}"> Create</a>
                    @endcan
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th width="280px">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($roles as $role)
                            <tr>
                                <td>{{ $role->id }}</td>
                                <td>{{ $role->name }}</td>
                                <td>
                                    <form action="{{ route('roles.destroy', $role->id) }}" method="post">
                                        <a class="btn btn-sm btn-primary" href=" {{ route('roles.show', $role->id) }}">Show</a>
                                        @can('role-edit')
                                        <a class="btn btn-sm btn-secondary" href="{{ route('roles.edit', $role->id) }}">Edit</a>
                                        @endcan
                                        @method('DELETE')
                                        @csrf
                                        @can('role-delete')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        @endcan
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
