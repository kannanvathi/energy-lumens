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
                    <h4 class="card-title">Product Table</h4>
                    @can('product-create')
                        <a class="btn btn-md btn-success" href="{{ route('products.create') }}"> Create New Product</a>
                    @endcan
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Sub category</th>
                            <th>Code</th>
                            <th>Wattage</th>
                            <th>CCT</th>
                            <th>Cutout</th>
                            <th>Dimension</th>
                            <th>Details</th>
                            <th width="280px">Action</th>
                        </tr>
                        </thead>
                       <tbody>
                           @foreach ($products as $product)
                               <tr>
                                   <td>{{ ++$i }}</td>
                                   <td>{{ $product->name }}</td>
                                   <td><img src="/image/{{ $product->image }}" width="100px"></td>

                                   <td>
                                       @foreach($categories as $key => $value)
                                           {{ $product->category == $key ? $value : '' }}
                                       @endforeach
                                       </td>

                                   <td>
                                       @php
                                       /*print_r(config('constants.'. $product->category)) ;*/
                                        $sub_category = config('constants.'. $product->category);
                                       @endphp
                                       @foreach($sub_category as $key => $value)
                                           {{$product->sub_category == $key ? $value : ''}}
                                       @endforeach
                                      </td>

                                   <td>{{ $product->code }}</td>
                                   <td>{{ $product->wattage }}</td>
                                   <td>{{ $product->cct }}</td>
                                   <td>{{ $product->cutout }}</td>
                                   <td>{{ $product->dimension }}</td>
                                   <td>{{ $product->detail }}</td>
                                   <td>
                                       <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                           <a class="btn btn-sm btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                                            @can('product-edit')
                                                <a class="btn btn-sm btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                                            @endcan
                                           @csrf
                                           @method('DELETE')
                                           @can('product-delete')
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

    {!! $products->links() !!}




@endsection

