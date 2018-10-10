@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <a href="{{url('students/create')}}" class="btn btn-primary">Create</a>
                    @if(count($students))
                        <table class="table">
                            <tr>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Contact</td>
                            </tr>
                            @foreach($students as $student)
                                <tr>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->contact}}</td>
                                    <td><a href="{{url('students/'.$student->id.'/edit')}}" class="btn btn-primary">Edit</a></td>
                                    <td><a href="{{route('students.show',$student->id)}}" class="btn btn-primary">Delete</a></td>
                                </tr>
                            @endforeach
                        </table>
                        @else
                          <h3>No Student Found</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
