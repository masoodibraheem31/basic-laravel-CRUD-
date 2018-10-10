@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Student</div>
                    <div class="panel-body">
                        {!!Form::open(['route'=>'students.store','id'=>'student-form'])!!}
                            <div class="form-group">
                            {{Form::label('name','Name')}}
                            {{Form::text('name',null,['class'=>'form-control','placeholder'=>'Enter your name'])}}
                                <small class="text-danger">{{ $errors->first('name') }}</small>
                            </div>
                            <div class="form-group">
                                {{Form::label('email','Email')}}
                                {{Form::text('email',null,['class'=>'form-control','placeholder'=>'Enter your email'])}}
                                <small class="text-danger">{{ $errors->first('email') }}</small>
                            </div>
                            <div class="form-group">
                                {{Form::label('contact','Contact')}}
                                {{Form::text('contact',null,['class'=>'form-control','placeholder'=>'Enter your email'])}}
                                <small class="text-danger">{{ $errors->first('contact') }}</small>
                            </div>
                            {{Form::submit('Register',['class'=>'btn btn-primary'])}}
                        {!!Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript" src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/additional-methods.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/student-validate.js')}}"></script>
@endsection
