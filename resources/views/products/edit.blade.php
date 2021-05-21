@extends('master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Product</h3>


                </div>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
                <div class="card-body">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Product</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" method="post" action="{{ route('products.update', $product->id) }}"  enctype="multipart/form-data">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name" value="{{$product->name}}">
                                    @if ($errors->has('name'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('name') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category</label>
                                    <select class="form-control" name="category_id" id="">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}" @if($product->category_id = $category->id) selected @endif>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('category_id'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('category_id') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Price</label>
                                    <input type="number" name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter price" value="{{$product->price}}">
                                    @if ($errors->has('price'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('price') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Inventory Quantity</label>
                                    <input type="number" name="inventory_quantity" class="form-control" id="exampleInputEmail1" placeholder="Enter Inventory Quantity" value="{{$product->inventory_quantity}}">
                                    @if ($errors->has('inventory_quantity'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('inventory_quantity') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <textarea name="description" id="" cols="30" rows="10">{!! $product->description !!}</textarea>
                                    @if ($errors->has('description'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('description') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.card-body -->

            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection