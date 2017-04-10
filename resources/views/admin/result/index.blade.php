@extends('admin.layouts.app') @section('dash')
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="row media">
            <div class="col-md-5">
                @foreach ($errors->all() as $error) {{ $error }} @endforeach
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
                    <a href="{{ route('results.create') }}" class="btn btn-success"> <i class="fa fa-plus"></i> Enter Result </a>
                </div>
            </div>
        </div>
    </div>

    <div class="panel-body">
        <div class="w3-responsive">
            <table class="w3-table-all w3-small">
                <tr class="w3-green">
                    <th> ID </th>
                    <th> Name </th>

                    @foreach ($courses as $course)
                    <th> {{ $course->code }} </th>
                    @endforeach
                </tr>

                <form id="resultform" class="" action="{{ route('results.store') }}" method="post">
                    @foreach ($students as $student)
                    <tr>
                        <input name="students[]" class="hide" value="{{ $student->id }}">
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>

                        @foreach ($courses as $course)
                            <td>
                                <input type="text" name="students[]marks['{{ $course->code }}']">
                            </td>
                        @endforeach
                    </tr>
                    @endforeach
                </form>
            </table>

        </div>
    </div>
</div>
@endsection
