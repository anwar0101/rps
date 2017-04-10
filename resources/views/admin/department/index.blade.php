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
                        <h2 class="media-heading text-success"> All departments </h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <form class="" action="" method="post">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search_department" placeholder="Search department.....">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit"> <i class="fa fa-search fa-lg"></i> </button>
                            </span>
                        </div>
                    </form>
                </div>
                <div class="col-md-3">
                    <div class="text-right">
                        <a href="{{ route('departments.create') }}" class="btn btn-success"> <i class="fa fa-plus"></i> Add Department </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel-body">
            <table class="table table-striped table-hover">
                <thead>
                    <th> ID </th>
                    <th> Name </th>
                    <th> Programe </th>
                    <th> View </th>
                    <th> Edit </th>
                    <th> Delete </th>
                </thead>
                @foreach ($departments as $department)
                    <tbody>
                        <tr>
                            <td> {{ $department->id }}</td>
                            <td> {{ $department->name }}</td>
                            <td> {{ $department->programe }}</td>

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
