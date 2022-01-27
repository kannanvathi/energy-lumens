@extends('layouts.app')


@section('content')

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between w-100">
                    <h4 class="card-title">Enquiry Table</h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Message</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($enquiry_datas as $enquiry_data)
                            <tr>
                                <td>{{ $enquiry_data->name }}</td>
                                <td>{{ $enquiry_data->email }}</td>
                                <td>{{ $enquiry_data->mobile_no }}</td>
                                <td>{{ $enquiry_data->message }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
