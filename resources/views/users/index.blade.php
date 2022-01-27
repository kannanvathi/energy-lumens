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
                    <h4 class="card-title">Users Table</h4>
                    @can('user-create')
                        <a class="btn btn-md btn-success" href="{{ route('users.create') }}"> Create</a>
                    @endcan
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th width="280px">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                   @If( !empty($user->getRoleNames()) )
                                       @foreach($user->getRoleNames() as $key)
                                            <label class="badge badge-danger">{{$key}}</label>
                                       @endforeach
                                   @endif
                                </td>
                                <td>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                        <a class="btn btn-sm btn-primary" href=" {{ route('users.show', $user->id) }}">Show</a>
                                        @can('user-edit')
                                        <a class="btn btn-sm btn-secondary" href="{{ route('users.edit', $user->id) }}">Edit</a>
                                        @endcan

                                        @can('user-delete')
                                            @method('DELETE')
                                            @csrf
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

