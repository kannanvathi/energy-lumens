@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create Role</h4>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="forms-sample" action="{{ route('roles.store') }}"method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Role Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Role name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Permission</label>
                            <div class="col-sm-9">
                                @foreach($permissions as $permission)
                                    <div class="d-inline-flex align-items-center w-100">
                                        <input type="checkbox" class="form-control" id="email" value="{{ $permission->id }}" name="permission[]" style="width: fit-content;">
                                        <span class="ml-2"> {{ $permission->name }} </span>
                                    </div>
                                @endforeach
                            </div>
                        </div>



                        <button type="submit" class="btn btn-primary mr-2">Create</button>
                        <a class="btn btn-light" href="{{ route('roles.index') }}">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
