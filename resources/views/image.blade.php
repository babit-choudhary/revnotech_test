@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-12">
         <div class="card">
            <div class="card-header"><a href="{{ route('teachers.create') }}" data-toggle="tooltip" data-placement="top" title="Add Teacher" class="btn btn-info float-right" >
               <i class="fa fa-plus"></i>
               </a>
            </div>
            <div class="card-body">
               <div class="form-group row">
                  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>
                  <div class="col-md-6">
                     <input id="image" type="file" class="form-control" name="image" required>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection