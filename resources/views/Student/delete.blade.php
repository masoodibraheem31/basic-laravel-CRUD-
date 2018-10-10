@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Delete Student</div>
                    <div class="panel-body">
                        {!!Form::open(['method'=>'DELETE','route'=>['students.destroy',$student->id]])!!}
                        Are your sure you want to delete this?
                        {{Form::submit('Delete',['class'=>'btn btn-primary'])}}
                        {!!Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
