@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Teachers') }}<a href="{{ route('teachers.create') }}" data-toggle="tooltip" data-placement="top" title="Add Teacher" class="btn btn-info float-right" >
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
                            <th>Subject</th>
                            <th>Phone No.</th>
                            <th>Address</th>
                            <th>Last Updated</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($teachers as $teacher)
                            <tr>
                                <td>{{ $teacher->name }}</td>
                                <td>{{ $teacher->subject }}</td>
                                <td>{{ $teacher->phone_no }}</td>
                                <td>{{ $teacher->address }}</td>
                                <td>{{ $teacher->updated_at->diffForHumans() }}</td>
                                <td class="btn-td">@include('teachers.includes.actions', ['teacher' => $teacher])</td>
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
                    {!! $teachers->total() !!} teachers total
                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">
                    {!! $teachers->render() !!}
                </div>
            </div><!--col-->
        </div><!--row-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection







