
@extends('layouts.admin_panel')

@section('title','Add Product')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Product</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    <button class="close" type="button" data-dismiss="alert" aria-hidden="true">x</button>
                    <h4><i class="icon fa fa-check"></i>{{session('success')}} </h4>
                </div>
            @endif
            
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <!-- form start -->
                        <form action="{{route('product.update',$product->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Name</label>
                                    <input type="text" name="name" value="{{$product->name}}" class="form-control" id="exampleInputEmail1" required placeholder="Enter Product">
                                </div>
                                <div class="form-group">
                                    <label> Select Category</label>
                                    <select class="custom-select" name="cat_id" required>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}" @if($category->id==$product->catigoires_id) selected @endif>{{$category->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <textarea name="text"  class="editor">{{$product->description}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Price</label>
                                    <input type="text" name="price" value="{{$product->price}}" class="form-control" id="exampleInputEmail1" required placeholder="Enter Price">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Quantity</label>
                                    <input type="text" name="quantity" value="{{$product->quantity}}" class="form-control" id="exampleInputEmail1" required placeholder="Enter Quantity">
                                </div>
                                <div class="form-group">
                                    <label> Select Active</label>
                                    <select class="custom-select" name="active" required>
                                        @if($product->active==1)  <option value="1">Active</option>@else
                                            <option value="0">Inactive</option>@endif
                                        @if($product->active==1)  <option value="0">Inactive</option>@else
                                            <option value="1">Active</option>@endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="feature_image">Feature Image</label>
                                    <img src="{{$product->img}}" alt="" class="img-uploaded" style="display: block;width: 300px" >
                                    <input type="text" id="feature_image"  class="form-control" name="feature_image" readonly value="{{$product->img}}">
                                    <a href="" class="popup_selector" data-inputid="feature_image">Select Image</a>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- /.row -->
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>

@endsection
