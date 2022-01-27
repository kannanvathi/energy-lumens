@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="d-inline-flex align-items-center justify-content-between w-100">
                                <h4>Edit Role</h4>
                                <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
                            </div>
                        </div>
                    </div>
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
                    <form action="{{ route('roles.update',$role->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')


                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" name="name" value="{{ $role->name }}" class="form-control" placeholder="Name">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Permission</label>
                                <div class="col-sm-9">
                                    @foreach($permissions as $permission)
                                        <div class="d-inline-flex align-items-center w-100">
                                            <input type="checkbox" class="form-control" id="email" {{in_array($permission->id, $rolePermissions) ? 'checked' : ''}}  value="{{ $permission->id }}" name="permission[]" style="width: fit-content;">
                                            <span class="ml-2"> {{ $permission->name }} </span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>



                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
