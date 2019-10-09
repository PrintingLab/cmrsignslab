@extends('layouts.app', ['activePage' => 'project_info', 'titlePage' => __('QUALITY INSPECTION CHECKLIST')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="post" action="{{ route('addproject') }}" autocomplete="off" class="form-horizontal">
          @csrf
          @method('post')
          <div class="card ">
            <div class="card-header card-header-primary">
              <h4 class="card-title">{{ __('Add Project') }}</h4>
              <p class="card-category"></p>
            </div>
            <div class="card-body ">
              <div class="row">
                <div class="col-md-12 text-right">
                  <a href="{{ route('project_info') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Customer Name') }}</label>
                <div class="col-sm-7">
                  <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="Customer_Name" id="input-email" type="text" placeholder="{{ __('Customer Name') }}" value="{{ old('email') }}" required />
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('Product') }}</label>
                <div class="col-sm-7">
                  <div class="form-group">
                    <input class="form-control" name="Product" id="input-password-confirmation" type="text" placeholder="{{ __('Product') }}" value="" required />
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('Project Original Due date') }}</label>
                <div class="col-sm-7">
                  <div class="form-group none">
                    <input type="text" id="datepicker" name="fecha" class="form-control" />
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-primary">{{ __('Add Project') }}</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
<script>
$(document).ready(function(){
  $('#datepicker').datepicker({
    uiLibrary: 'bootstrap4',
    format: 'dd-mm-yyyy'
  });
});
</script>
@endsection
