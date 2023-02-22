
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
                                    Job Name
                                </th>
                                <th style="width: 30%">
                                    Title
                                </th>
                                <th style="width: 20%">
                                    Position
                                </th>
                                <th style="width: 20%">
                                    Country
                                </th>
{{--                                <th style="width: 30%">--}}
{{--                                    Active--}}
{{--                                </th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($jobs as $job)
                            <tr>
                                 <td>
                                     {{$job->id}}
                                 </td>
                                <td>
                                    {{$job->{'name_'.app()->getLocale()}                                      }}
                                </td>
                                <td>
                                    {{$job->{'title_'.app()->getLocale()} }}
                                </td>
                                <td>
                                    {{$job->{'position_'.app()->getLocale()} }}
                                </td>

                                <td>
                                    {{$job->country->{'name_'.app()->getLocale()} }}
                                </td>

                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm" href="{{route('job.edit',$job->id)}}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                   <form action="{{route('job.destroy',$job->id)}}" method="post" style="display: inline">
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
