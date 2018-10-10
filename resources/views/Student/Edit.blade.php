@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Student</div>

                    <div class="panel-body">
                        {!!Form::open(['method'=>'PUT','route'=>['students.update',$student->id]])!!}
                        <div class="form-group">
                            {{Form::label('name','Name')}}
                            {{Form::text('name',$student->name,['class'=>'form-control','placeholder'=>'Enter your name'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('email','Email')}}
                            {{Form::text('email',$student->email,['class'=>'form-control','placeholder'=>'Enter your email'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('contact','Contact')}}
                            {{Form::text('contact',$student->contact,['class'=>'form-control','placeholder'=>'Enter your email'])}}
                        </div>
                        {{Form::submit('Update',['class'=>'btn btn-primary'])}}
                        {!!Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
