@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Student') }}<a href="{{ route('students.create') }}" data-toggle="tooltip" data-placement="top" title="Add Teacher" class="btn btn-info float-right" >
            <i class="fa fa-plus"></i>
        </a></div>

                <div class="card-body">
                @if(Session::has('flash_success'))
                    <p class="alert alert-info">{{ Session::get('flash_success') }}</p>
                    @endif
                    @if(Session::has('flash_danger'))
                    <p class="alert alert-danger">{{ Session::get('flash_danger') }}</p>
                    @endif
                     <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Class</th>
                            <th>Roll No.</th>                            
                            <th>phone_no</th>
                            <th>Address</th>
                            <th>Last Updated</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($students as $student)
                            <tr>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->class }}</td>
                                <td>{{ $student->roll_no }}</td>
                                <td>{{ $student->phone_no }}</td>
                                <td>{{ $student->address }}</td>
                                <td>{{ $student->updated_at->diffForHumans() }}</td>
                                <td class="btn-td">@include('students.includes.actions', ['student' => $student])</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!--col-->
        </div><!--row-->
        <div class="row">
            <div class="col-7">
                <div class="float-left">
                    {!! $students->total() !!} student total
                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">
                    {!! $students->render() !!}
                </div>
            </div><!--col-->
        </div><!--row-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





