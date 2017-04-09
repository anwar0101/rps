@extends('admin.layouts.app')

@section('content')
    <section id="dash">
        <div class="container">
            <div class="row">
                <!-- left navigation code start -->
                <div class="col-md-3">
                    @include('admin.layouts.partials.left-sidebar')
                </div> <!-- left navigation code end -->
                <!-- body section code start -->
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row media">
                                <div class="col-md-5">
                                    @foreach ($errors->all() as $error)
                                        {{  $error }}
                                    @endforeach
                                    <div class="media-body">
                                        <h2 class="media-heading text-success"> All Students </h2>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <form class="" action="" method="post">
                                        {{ csrf_field() }}
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="search_employee" placeholder="Search Students.....">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary" type="submit"> <i class="fa fa-search fa-lg"></i> </button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-3">
                                    <div class="text-right">
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addEmployeeModal"> <i class="fa fa-plus"></i> Add Student </button>
                                    </div>
                                    {{-- @include('includes.add-employee-modal') --}}
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <th> ID </th>
                                    <th> REG </th>
                                    <th> Name </th>
                                    <th> Contact </th>
                                    <th> View </th>
                                    <th> Edit </th>
                                    <th> Delete </th>

                                </thead>
                                @foreach ($students as $student)
                                    <tbody>
                                        <tr>
                                            <td> {{ $student->id }}</td>
                                            <td> {{ $student->reg }}</td>
                                            <td> {{ $student->name }}</td>
                                            <td> {{ $student->contact }}</td>

                                            <td> <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#viewEmployeeModal" href="#"> <i class="fa fa-eye fa-lg"></i> </button> </td>
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
                </div>
                <!-- body section code end -->
            </div>
        </div>
    </section>
@endsection
