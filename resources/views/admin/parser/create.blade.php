
@extends('layouts.admin_panel')

@section('title','Add Category')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Category</h1>
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
                           <form action="{{route('parser.store')}}" method="POST">
                               @csrf
                               <div class="card-body">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Bank Name</label>
                                       <input type="text" name="name" class="form-control" id="exampleInputEmail1" required placeholder="Enter Name">
                                   </div>
                                           <div class="form-group">
                                               <label for="exampleInputEmail1">Link Name</label>
                                               <input type="text" name="link" class="form-control" value="https://" id="exampleInputEmail1" required placeholder="Enter Name">
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
