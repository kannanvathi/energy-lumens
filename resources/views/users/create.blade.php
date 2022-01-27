@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create User</h4>

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

                    <form class="forms-sample" action="{{ route('users.store') }}"method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">User Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="confirm-password" class="col-sm-3 col-form-label">Re Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="confirm-password" class="col-sm-3 col-form-label">Role</label>
                            <div class="col-sm-9">
                                <select name="roles" placeholder="Select a role" multiple class="form-control">
                                    @foreach($roles as $key=>$value)
                                        <option value="{{$key}}">{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary mr-2">Create</button>
                        <a class="btn btn-light" href="{{ route('users.index') }}">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
