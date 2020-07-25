@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('View Teacher') }}</div>

                <div class="card-body">
                   <div class="row mt-4 mb-4">
            <div class="col">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-expanded="true"><i class="fas fa-user"></i> Teacher</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#students" role="tab" aria-controls="students" ><i class="fas fa-users"></i> Students</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="overview" role="tabpanel" aria-expanded="true">
                        @include('teachers.show.tabs.overview')
                    </div><!--tab-->
                    <div class="tab-pane" id="students" role="tabpanel">
                        @include('teachers.show.tabs.students')
                    </div><!--tab-->
                </div><!--tab-content-->
            </div><!--col-->
        </div><!--row-->
                </div>
                <div class="card-footer">
        <div class="row">
            <div class="col">
                <small class="float-right text-muted">
                    <strong>Created At:</strong> {{$teacher->created_at }} ({{ $teacher->created_at->diffForHumans() }}),
                    <strong>Last Updated:</strong> {{ $teacher->updated_at }} ({{ $teacher->updated_at->diffForHumans() }})
                </small>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-footer-->
            </div>
        </div>
    </div>
</div>
@endsection





