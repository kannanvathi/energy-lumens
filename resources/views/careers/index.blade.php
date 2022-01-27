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
                    <h4 class="card-title">Careers Table</h4>
                      {{--  @can('career-create')--}}
                            <a class="btn btn-md btn-success" href="{{ route('careers.create') }}"> Create</a>
                       {{-- @endcan--}}
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Candidate Name</th>
                            <th>Email</th>
                            <th>Phone No</th>
                            <th width="280px">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($careers as $career)
                            <tr>
                                <td>{{ $career->id }}</td>
                                <td>{{ $career->candidate_name }}</td>
                                <td>{{ $career->email }}</td>
                                <td>{{ $career->phone_no }}</td>
                                <td>
                                    <img src="uploads/{{ $career->attachment }}" width="100px">
                                </td>
                                <td>
                                    <form action="{{ route('careers.destroy', $career->id) }}" method="post">
                                        <a class="btn btn-sm btn-primary" href=" {{ route('careers.show', $career->id) }}">Show</a>
                                       {{-- @can('career-edit')--}}
                                            <a class="btn btn-sm btn-secondary" href="{{ route('careers.edit', $career->id) }}">Edit</a>
                                       {{-- @endcan--}}

                                       {{-- @can('career-delete')--}}
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                       {{-- @endcan--}}
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

