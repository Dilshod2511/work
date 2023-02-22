
@extends('layouts.admin_panel')

@section('title','Add Category')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">All Category</h1>
                </div><!-- /.col -->
                <form action="{{route('product.index')}}">
                    <div class="form-check form-check-inline">
                        <input type="text" id="search_input" name="search_input"
                               class="form-control form-control-sm">
                        <span class="input-group-append">
                                                  <button type="submit" id="search_button"
                                                          class="btn btn-sm btn-info btn-flat"><i
                                                          class="fa fa-search"></i></button>
                                                </span>
                    </div>
                </form>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->

            <section class="content">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Projects</h3>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th style="width: 1%">
                                    Id
                                </th>
                                <th style="width: 20%">
                                    Product Name
                                </th>
                                <th style="width: 10%">
                                    Category
                                </th>
{{--                                <th style="width: 10%">--}}
{{--                                    Description--}}
{{--                                </th>--}}
{{--                                <th style="width: 10%">--}}
{{--                                    Image--}}
{{--                                </th>--}}
                                <th style="width: 10%">
                                    Active
                                </th>
                                <th style="width: 10%">
                                    Price
                                </th>
                                <th style="width: 10%">
                                    Quantity
                                </th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
{{--                                @php--}}
{{--                                    dd($product->category)--}}
{{--                                @endphp--}}
                                <tr>
                                    <td>
                                        {{$product->id}}
                                    </td>
                                    <td>
                                        {{$product->name}}
                                    </td>
                                    <td>
                                        {{$product->category->title}}
                                    </td>
{{--                                    <td>--}}
{{--                                        {{$product->description}}--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        {{$product->img}}--}}
{{--                                    </td>--}}
                                    <td>
                                        {{$product->active}}
                                    </td>
                                    <td>
                                        {{$product->price}}
                                    </td>
                                    <td>
                                        {{$product->quantity}}
                                    </td>

                                    <td class="project-actions text-right">
                                        <a class="btn btn-info btn-sm" href="{{route('product.edit',$product->id)}}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <form action="{{route('product.destroy',$product->id)}}" method="post" style="display: inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm delete-btn" >
                                                <i class="fas fa-trash">
                                                </i>
                                                Delete
                                            </button>
                                        </form>

                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </section>

            <!-- /.row -->
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>

@endsection
