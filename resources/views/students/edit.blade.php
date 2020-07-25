@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Student') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('students.update',$student) }}">
                        @csrf
                        @method('put')
                        @include('students.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





