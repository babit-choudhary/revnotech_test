@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Teacher') }}<a href="{{ route('teachers.index') }}" data-toggle="tooltip" data-placement="top" title="Students" class="btn btn-info float-right" >
            <i class="fa fa-arrow-left"></i>
        </a></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('teachers.store') }}">
                        @csrf
                        @include('teachers.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





