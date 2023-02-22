
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
                           <form action="{{route('job.store')}}" method="POST" enctype="multipart/form-data">
                               @csrf
                               <div class="card-body  p d-flex justify-content-around ">
                                   <div class="form-group  " style="width: 40%">
                                       <label for="exampleInputEmail1">Name (UZ)</label>
                                       <input type="text" name="name_uz"  value="{{old('name_uz')}}" class="form-control" id="exampleInputEmail1"  placeholder="Enter Job name">
                                       @error('name_uz')
                                       <div class="text-danger p-1">
                                           {{$message}}
                                       </div>
                                       @enderror
                                   </div>
                                   <div class="form-group  " style="width: 40%">
                                       <label for="exampleInputEmail1"> Name (EN) </label>
                                       <input type="text" name="name_en"  value="{{old('name_uz')}}" class="form-control" id="exampleInputEmail1"  placeholder="Enter Job name">
                                       @error('name_en')
                                       <div class="text-danger p-1">
                                           {{$message}}
                                       </div>
                                       @enderror
                                   </div>
                               </div>
                               <div class="card-body  p d-flex justify-content-around ">
                                   <div class="form-group  " style="width: 40%">
                                       <label> Select Country</label>
                                       <select id="select-state"   name="country_id" placeholder=" select Country">
                                           @foreach($countries as $country)
                                           <option value="{{$country->id}}">{{$country->name_uz}}</option>
                                           @endforeach

                                       </select>
                                       @error('country_id')
                                       <div class="text-danger p-1">
                                           {{$message}}
                                       </div>
                                       @enderror
                                   </div>
                                   <div class="form-group  " style="width: 40%">
                                       <label for="formFile" class="form-label">Upload image</label>
                                       <input class="form-control" type="file" name="file" id="formFile">
                                       @error('file')
                                       <div class="text-danger p-1">
                                           {{$message}}
                                       </div>
                                       @enderror
                                   </div>
                               </div>
                               <div class="card-body  p d-flex justify-content-around ">
                                   <div class="form-group  " style="width: 40%">
                                       <label for="exampleInputEmail1">Title (UZ)</label>
                                       <input type="text" name="title_uz" class="form-control"  value="{{old('title_uz')}}" id="exampleInputEmail1"  placeholder="Enter Job Title">
                                       @error('title_uz')
                                       <div class="text-danger p-1">
                                           {{$message}}
                                       </div>
                                       @enderror
                                   </div>
                                   <div class="form-group  " style="width: 40%">
                                       <label for="exampleInputEmail1"> Title (EN) </label>
                                       <input type="text" name="title_en"  value="{{old('title_en')}}" class="form-control" id="exampleInputEmail1"  placeholder="Enter Job Title">
                                       @error('title_en')
                                       <div class="text-danger p-1">
                                           {{$message}}
                                       </div>
                                       @enderror
                                   </div>
                               </div>
                               <div class="card-body  p d-flex justify-content-around ">
                                   <div class="form-group  " style="width: 40%">
                                       <label for="exampleInputEmail1">Position (UZ)</label>
                                       <input type="text" name="position_uz"  value="{{old('position_uz')}}" class="form-control" id="exampleInputEmail1"  placeholder="Enter Job Position">
                                       @error('position_uz')
                                       <div class="text-danger p-1">
                                           {{$message}}
                                       </div>
                                       @enderror
                                   </div>
                                   <div class="form-group  " style="width: 40%">
                                       <label for="exampleInputEmail1"> Position (EN) </label>
                                       <input type="text" name="position_en"  value="{{old('position_en')}}" class="form-control" id="exampleInputEmail1"  placeholder="Enter Job Position">
                                       @error('position_en')
                                       <div class="text-danger p-1">
                                           {{$message}}
                                       </div>
                                       @enderror
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
