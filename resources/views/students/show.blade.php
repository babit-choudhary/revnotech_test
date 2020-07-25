@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('View Student') }}</div>

                <div class="card-body">
                   <div class="row mt-4 mb-4">
            <div class="col">
    <div class="table-responsive">
        <table class="table table-hover">
            <tr>
                <th>Profile Picture</th>
                <td><img src="{{ asset($student->profile_pic) }}" class="user-profile-image w-25" /></td>
            </tr>

            <tr>
                <th>Name</th>
                <td>{{ $student->name }}</td>
            </tr>

            <tr>
                <th>Father Name</th>
                <td>{{ $student->father_name }}</td>
            </tr>
            <tr>
                <th>Mother Name</th>
                <td>{{ $student->mother_name }}</td>
            </tr>
            <tr>
                <th>Class</th>
                <td>{{ $student->class }}</td>
            </tr>
            <tr>
                <th>Roll No.</th>
                <td>{{ $student->roll_no }}</td>
            </tr>
            <tr>
                <th>Phone No.</th>
                <td>{{ $student->phone_no }}</td>
            </tr>

            
            <tr>
                <th>Address</th>
                <td>{{ $student->address }}</td>
            </tr>

           
        </table>
    </div>
</div><!--table-responsive-->

        </div><!--row-->
                </div>
                <div class="card-footer">
        <div class="row">
            <div class="col">
                <small class="float-right text-muted">
                    <strong>Created At:</strong> {{$student->created_at }} ({{ $student->created_at->diffForHumans() }}),
                    <strong>Last Updated:</strong> {{ $student->updated_at }} ({{ $student->updated_at->diffForHumans() }})
                </small>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-footer-->
            </div>
        </div>
    </div>
</div>
@endsection





