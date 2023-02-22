
@extends('layouts.admin_panel')

@section('title','Add Category')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">All Category</h1>
                </div><!-- /.col -->
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
                                    Category Name
                                </th>
                                <th style="width: 30%">
                                    Active
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categoires as $category)
                            <tr>
                                 <td>
                                     {{$category->id}}
                                 </td>
                                <td>
                                    {{$category->title}}
                                </td>
                                <td>
                                    {{$category->active}}
                                </td>

                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm" href="{{route('category.edit',$category->id)}}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                   <form action="{{route('category.destroy',$category->id)}}" method="post" style="display: inline">
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
