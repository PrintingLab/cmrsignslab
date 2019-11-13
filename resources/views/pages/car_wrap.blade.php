@extends('layouts.app', ['activePage' => 'signage', 'titlePage' => __('CAR WRAP')])
@section('content')
<div class="content" ng-controller="formsignage">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header card-header-primary">
            <h4 class="card-title">{{ __('General') }}</h4>
            <p class="card-category"></p>
          </div>
          <div class="card-body ">
            <form method="post" action="{{ route('pdf_form_car') }}" autocomplete="off" class="form-horizontal">
              @csrf
              @method('post')
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Customer Name') }}</label>
                <div class="col-sm-7">
                  <div class="form-group">
                    <input class="form-control" name="Customer_Name" type="text"  />
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('Phone Number') }}</label>
                <div class="col-sm-7">
                  <div class="form-group none">
                    <input class="form-control" name="phone_number" type="text"  />
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('Email') }}</label>
                <div class="col-sm-7">
                  <div class="form-group none">
                    <input class="form-control" name="email" type="text"  />
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('Project Name') }}</label>
                <div class="col-sm-7">
                  <div class="form-group">
                    <input class="form-control" name="Project_name" type="text"  />
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('Company Phone Number') }}</label>
                <div class="col-sm-7">
                  <div class="form-group none">
                    <input class="form-control" name="Company_Phone" type="text"  />
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('Company Address') }}</label>
                <div class="col-sm-7">
                  <div class="form-group none">
                    <input class="form-control" name="Company_Address" type="text"  />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card ">
            <div class="card-header card-header-primary">
              <h4 class="card-title">TECHNICAL SPEC'S</h4>
              <p class="card-category"></p>
            </div>
            <div class="card-body">
              <h3>Attach pictures of vehicle</h3>
              <div class="row">
                <div class="col-sm-3 row">
                  <label class="col-sm-5 col-form-label" for="input-password-confirmation">{{ __('VIN #') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group none">
                      <input class="form-control" name="vin" type="text"  required/>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3 row">
                  <label class="col-sm-5 col-form-label" for="input-password-confirmation">{{ __('Make') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group none">
                      <input class="form-control" name="make" type="text"  required/>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3 row">
                  <label class="col-sm-5 col-form-label" for="input-password-confirmation">{{ __('Model') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group none">
                      <input class="form-control" name="model" type="text"  required/>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3 row">
                  <label class="col-sm-5 col-form-label" for="input-password-confirmation">{{ __('Year') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group none">
                      <input class="form-control" name="year" type="text"  required/>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-11">
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Notes (Additional details)</label>
                    <textarea class="form-control" name="text_area" rows="3"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-primary">{{ __('Generator PDF') }}</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('js/signage.js') }}"></script>
@endsection
