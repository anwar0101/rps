@extends('admin.layouts.app')

@section('dash')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row media">
                <div class="col-md-5">
                    @foreach ($errors->all() as $error)
                        {{  $error }}
                    @endforeach
                    <div class="media-body">
                        <h2 class="media-heading text-success"> All Courses </h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <form class="" action="" method="post">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search_course" placeholder="Search Course.....">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit"> <i class="fa fa-search fa-lg"></i> </button>
                            </span>
                        </div>
                    </form>
                </div>
                <div class="col-md-3">
                    <div class="text-right">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addCourse"> <i class="fa fa-plus"></i> Add Course </button>
                    </div>
                    @include('admin.layouts.partials.addcoursemodal')
                </div>
            </div>
        </div>

        <div class="panel-body">
            <table class="table table-striped table-hover">
                <thead>
                    <th> ID </th>
                    <th> CODE </th>
                    <th> Name </th>
                    <th> Credit </th>

                </thead>
                @foreach ($courses as $course)
                    <tbody>
                        <tr>
                            <td> {{ $course->id }}</td>
                            <td> {{ $course->code }}</td>
                            <td> {{ $course->name }}</td>
                            <td> {{ $course->credit }}</td>

                            <td> <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#view" href="#"> <i class="fa fa-eye fa-lg"></i> </button> </td>
                            {{-- @include('includes.view-employee-modal', ['employee'=>$employee]) --}}
                            <td> <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#updateEmployeeModal">
                                <i class="fa fa-edit fa-lg"></i>
                            </button></td>
                            {{-- @include('includes.update-employee-modal') --}}
                            <td> <button type="button" class="btn btn-danger btn-sm"> <i class="fa fa-trash fa-lg"></i> </button> </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
@endsection
