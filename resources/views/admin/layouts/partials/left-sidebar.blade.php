<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Academic Management
                </a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <div class="list-group">
                    <a href="{{ route('students.index') }}" class="list-group-item list-group-item-success"> <i class="fa fa-users fa-lg"></i> Student </a>
                    <a href="{{ route('courses.index') }}" class="list-group-item list-group-item-info"> <i class="fa fa-users fa-lg"></i> Course </a>
                    <a href="{{ route('departments.index') }}" class="list-group-item list-group-item-warning"> <i class="fa fa-users fa-lg"></i> Department </a>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Result Entry
                </a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
                <div class="list-group">
                    <a href="{{ route('results.index') }}" class="list-group-item list-group-item-success"> <i class="fa fa-users fa-lg"></i> 1st Year 1st semester </a>
                    <a href="" class="list-group-item list-group-item-success"> <i class="fa fa-users fa-lg"></i> 1st Year 2nd semester </a>
                    <a href="" class="list-group-item list-group-item-warning"> <i class="fa fa-users fa-lg"></i> 2nd Year 1st semester </a>
                    <a href="" class="list-group-item list-group-item-warning"> <i class="fa fa-users fa-lg"></i> 2nd Year 2nd semester </a>
                    <a href="" class="list-group-item list-group-item-info"> <i class="fa fa-users fa-lg"></i> 3rd Year 1st semester </a>
                    <a href="" class="list-group-item list-group-item-info"> <i class="fa fa-users fa-lg"></i> 3rd Year 2nd semester </a>
                    <a href="" class="list-group-item list-group-item-danger"> <i class="fa fa-users fa-lg"></i> 4th Year 1st semester </a>
                    <a href="" class="list-group-item list-group-item-danger"> <i class="fa fa-users fa-lg"></i> 4th Year 2nd semester </a>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Accounting
                </a>
            </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
            </div>
        </div>
    </div>
</div>
