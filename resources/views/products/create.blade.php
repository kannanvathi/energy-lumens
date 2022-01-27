@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="d-inline-flex align-items-center justify-content-between w-100">
                                <h4>Add New Product</h4>
                                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
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
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Category:</strong>
                                    <select name="category" id="category" class="form-control" placeholder="Select a Category">
                                        <option value="">Select</option>
                                        @foreach($categories as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 sub-category" id="modern_categories">
                                <div class="form-group">
                                <strong>Modern work place Sub Category:</strong>
                                <select name="sub_category" class="form-control" disabled placeholder="Select a modern work place">
                                    <option value="">Select</option>
                                    @foreach($modern_categories as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 sub-category" id="industrial_categories">
                                <div class="form-group">
                                <strong>Industrial Lightings Sub Category:</strong>
                                <select name="sub_category" class="form-control" disabled placeholder="Select a Industrial Lighting">
                                    <option value="">Select</option>
                                    @foreach($industrial_categories as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 sub-category" id="outdoor_lightings">
                                <div class="form-group">
                                <strong>Outdoor Lighting Sub Category:</strong>
                                <select name="sub_category" class="form-control" disabled placeholder="Select a Outdoor Lighting">
                                    <option value="">Select</option>
                                    @foreach($outdoor_lightings as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>



                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Product Code:</strong>
                                    <input type="text" name="code" class="form-control" placeholder="Product Code">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Wattage:</strong>
                                    <input type="text" name="wattage" class="form-control" placeholder="Wattage">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>CCT:</strong>
                                    <input type="text" name="cct" class="form-control" placeholder="CCT">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Dimension in MM:</strong>
                                    <input type="text" name="dimension" class="form-control" placeholder="Dimension in MM">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Cutout in MM:</strong>
                                    <input type="text" name="cutout" class="form-control" placeholder="Cutout in MM">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Detail:</strong>
                                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Image:</strong>
                                    <input type="file" name="image" class="form-control" placeholder="image">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

<style>
  /*  .sub-category{
        display: none;
    }*/
</style>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $('#category').on('change', function() {
            var showSubCategoryId = $('#category').val();
            $('.sub-category select').prop('disabled', true);
            console.log(showSubCategoryId);
            $("#" + showSubCategoryId + ' select').prop('disabled', false);
        })
    });
</script>
