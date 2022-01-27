@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="d-inline-flex align-items-center justify-content-between w-100">
                                <h4>Edit Product</h4>
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
                    <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')


                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Category:</strong>
                                    <select name="category" id="category" disabled class="form-control" placeholder="Select a Category">
                                        <option value="">Select</option>
                                        @foreach($categories as $key => $value)
                                            <option {{ $product->category == $key ? "selected" : "" }} value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            @if($product->category == 'modern_categories')
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Modern work place Sub Category:</strong>
                                    <select name="sub_category" class="form-control" placeholder="Select a sub Category">
                                    @foreach($modern_categories as $key=> $value)
                                        <option {{ $product->sub_category == $key ? 'selected' : ''  }} value="{{ $key }}">{{$value}}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            @endif

                            @if($product->category == 'industrial_categories')
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Industrial Sub Category:</strong>
                                        <select name="sub_category" class="form-control" placeholder="Select a sub Category">
                                            @foreach($industrial_categories as $key=> $value)
                                                <option {{ $product->sub_category == $key ? 'selected' : ''  }} value="{{ $key }}">{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            @endif


                            @if($product->category == 'outdoor_lightings')
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Outdoor lighting Sub Category:</strong>
                                        <select name="sub_category" class="form-control" placeholder="Select a sub Category">
                                            @foreach($outdoor_lightings as $key=> $value)
                                                <option {{ $product->sub_category == $key ? 'selected' : ''  }} value="{{ $key }}">{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            @endif

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Code:</strong>
                                    <input type="text" name="code" value="{{ $product->code }}" class="form-control" placeholder="Code">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Wattage:</strong>
                                    <input type="text" name="wattage" value="{{ $product->wattage }}" class="form-control" placeholder="Wattage">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>CCT:</strong>
                                    <input type="text" name="cct" value="{{ $product->cct }}" class="form-control" placeholder="cct">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Dimension:</strong>
                                    <input type="text" name="dimension" value="{{ $product->dimension }}" class="form-control" placeholder="dimension">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Cutout:</strong>
                                    <input type="text" name="cutout" value="{{ $product->cutout }}" class="form-control" placeholder="cutout">
                                </div>
                            </div>



                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Detail:</strong>
                                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $product->detail }}</textarea>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Image:</strong>
                                    <input type="file" name="image" class="form-control" placeholder="image">
                                    <img src="/image/{{ $product->image }}" width="300px">
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
