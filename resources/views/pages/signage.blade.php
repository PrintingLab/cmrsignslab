@extends('layouts.app', ['activePage' => 'signage', 'titlePage' => __('FORM SIGNAGE')])
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
            <form method="post" action="{{ route('pdf_form_sign') }}" autocomplete="off" class="form-horizontal">
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
              <h3>Remember to ask for a PDF for the logo if possible</h3>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios" value="Awning" checked>
                      Awning
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios" value="Channel letters">
                      Channel letters
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios" value="Lightbox" >
                      Lightbox
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios" value="Flat Signs">
                      Flat Signs
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios" value="Pushed Acrylic" >
                      Pushed Acrylic
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios" value="Blade sign">
                      Blade sign
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4 row">
                  <label class="col-sm-3 col-form-label">{{ __('Width') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control" name="Width" type="text"  />
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 row">
                  <label class="col-sm-3 col-form-label">{{ __('Hight') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control" name="Hight" type="text"  />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-9">
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Notes</label>
                    <textarea class="form-control" name="text_area" id="exampleFormControlTextarea" rows="3"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body" ng-hide="form_1">
              <h3>Add spec's sign #1</h3>
              <input type="hidden" name="spec1" value="" ng-model="spec1">
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="Awning">
                      Awning
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="Channel letters">
                      Channel letters
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="Lightbox" >
                      Lightbox
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="Flat Signs">
                      Flat Signs
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="Pushed Acrylic" >
                      Pushed Acrylic
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="Blade sign">
                      Blade sign
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4 row">
                  <label class="col-sm-3 col-form-label">{{ __('Width') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control" name="Width1" type="text"  />
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 row">
                  <label class="col-sm-3 col-form-label">{{ __('Hight') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control" name="Hight1" type="text"  />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-9">
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Notes</label>
                    <textarea class="form-control" name="text_area1" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body" ng-hide="form_2">
              <h3>Add spec's sign #2</h3>
              <input type="hidden" name="spec2" value="0" ng-model="spec2">
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios2" value="Awning">
                      Awning
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios2" value="Channel letters">
                      Channel letters
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios2" value="Lightbox" >
                      Lightbox
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios2" value="Flat Signs">
                      Flat Signs
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios2" value="Pushed Acrylic" >
                      Pushed Acrylic
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios2" value="Blade sign">
                      Blade sign
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4 row">
                  <label class="col-sm-3 col-form-label">{{ __('Width') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control" name="Width2" type="text"  />
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 row">
                  <label class="col-sm-3 col-form-label">{{ __('Hight') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control" name="Hight2" type="text"  />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-9">
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Notes</label>
                    <textarea class="form-control" name="text_area2" id="exampleFormControlTextarea2" rows="3"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body" ng-hide="form_3">
              <h3>Add spec's sign #3</h3>
              <input type="hidden" name="spec3" value="0" ng-model="spec3">
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios3" value="Awning">
                      Awning
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios3" value="Channel letters">
                      Channel letters
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios3" value="Lightbox" >
                      Lightbox
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios3" value="Flat Signs">
                      Flat Signs
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios3" value="Pushed Acrylic" >
                      Pushed Acrylic
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios3" value="Blade sign">
                      Blade sign
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4 row">
                  <label class="col-sm-3 col-form-label">{{ __('Width') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control" name="Width3" type="text"  />
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 row">
                  <label class="col-sm-3 col-form-label">{{ __('Hight') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control" name="Hight3" type="text"  />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-9">
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Notes</label>
                    <textarea class="form-control" name="text_area3" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body" ng-hide="form_4">
              <h3>Add spec's sign #4</h3>
              <input type="hidden" name="spec4" value="0" ng-model="spec4">
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios4" id="exampleRadios4" value="Awning">
                      Awning
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios4" id="exampleRadios4" value="Channel letters">
                      Channel letters
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios4" id="exampleRadios4" value="Lightbox" >
                      Lightbox
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios4" id="exampleRadios4" value="Flat Signs">
                      Flat Signs
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios4" id="exampleRadios4" value="Pushed Acrylic" >
                      Pushed Acrylic
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios4" id="exampleRadios4" value="Blade sign">
                      Blade sign
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4 row">
                  <label class="col-sm-3 col-form-label">{{ __('Width') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control" name="Width4" type="text"  />
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 row">
                  <label class="col-sm-3 col-form-label">{{ __('Hight') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control" name="Hight4" type="text"  />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-9">
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Notes</label>
                    <textarea class="form-control" name="text_area4" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body" ng-hide="form_5">
              <h3>Add spec's sign #5</h3>
              <input type="hidden" name="spec5" value="0" ng-model="spec5">
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios5" id="exampleRadios5" value="Awning">
                      Awning
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios5" id="exampleRadios5" value="Channel letters">
                      Channel letters
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios5" id="exampleRadios5" value="Lightbox" >
                      Lightbox
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios5" id="exampleRadios5" value="Flat Signs">
                      Flat Signs
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios5" id="exampleRadios5" value="Pushed Acrylic" >
                      Pushed Acrylic
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios5" id="exampleRadios5" value="Blade sign">
                      Blade sign
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4 row">
                  <label class="col-sm-3 col-form-label">{{ __('Width') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control" name="Width5" type="text"  />
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 row">
                  <label class="col-sm-3 col-form-label">{{ __('Hight') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control" name="Hight5" type="text"  />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-9">
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Notes</label>
                    <textarea class="form-control" name="text_area5" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body" ng-hide="form_6">
              <h3>Add spec's sign #6</h3>
              <input type="hidden" name="spec6" value="0" ng-model="spec6">
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios6" id="exampleRadios6" value="Awning">
                      Awning
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios6" id="exampleRadios6" value="Channel letters">
                      Channel letters
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios6" id="exampleRadios6" value="Lightbox" >
                      Lightbox
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios6" id="exampleRadios6" value="Flat Signs">
                      Flat Signs
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios6" id="exampleRadios6" value="Pushed Acrylic" >
                      Pushed Acrylic
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios6" id="exampleRadios6" value="Blade sign">
                      Blade sign
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4 row">
                  <label class="col-sm-3 col-form-label">{{ __('Width') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control" name="Width6" type="text"  />
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 row">
                  <label class="col-sm-3 col-form-label">{{ __('Hight') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control" name="Hight6" type="text"  />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-9">
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Notes</label>
                    <textarea class="form-control" name="text_area6" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body" ng-hide="form_7">
              <h3>Add spec's sign #7</h3>
              <input type="hidden" name="spec7" value="0" ng-model="spec7">
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios7" id="exampleRadios7" value="Awning">
                      Awning
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios7" id="exampleRadios7" value="Channel letters">
                      Channel letters
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios7" id="exampleRadios7" value="Lightbox" >
                      Lightbox
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios7" id="exampleRadios7" value="Flat Signs">
                      Flat Signs
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios7" id="exampleRadios7" value="Pushed Acrylic" >
                      Pushed Acrylic
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios7" id="exampleRadios7" value="Blade sign">
                      Blade sign
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4 row">
                  <label class="col-sm-3 col-form-label">{{ __('Width') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control" name="Width7" type="text"  />
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 row">
                  <label class="col-sm-3 col-form-label">{{ __('Hight') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control" name="Hight7" type="text"  />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-9">
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Notes</label>
                    <textarea class="form-control" name="text_area7" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body" ng-hide="form_8">
              <h3>Add spec's sign #8</h3>
              <input type="hidden" name="spec8" value="0" ng-model="spec8">
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios8" id="exampleRadios8" value="Awning">
                      Awning
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios8" id="exampleRadios8" value="Channel letters">
                      Channel letters
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios8" id="exampleRadios8" value="Lightbox" >
                      Lightbox
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios8" id="exampleRadios8" value="Flat Signs">
                      Flat Signs
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios8" id="exampleRadios8" value="Pushed Acrylic" >
                      Pushed Acrylic
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios8" id="exampleRadios8" value="Blade sign">
                      Blade sign
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4 row">
                  <label class="col-sm-3 col-form-label">{{ __('Width') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control" name="Width8" type="text"  />
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 row">
                  <label class="col-sm-3 col-form-label">{{ __('Hight') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control" name="Hight8" type="text"  />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-9">
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Notes</label>
                    <textarea class="form-control" name="text_area8" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body" ng-hide="form_9">
              <h3>Add spec's sign #9</h3>
              <input type="hidden" name="spec9" value="0" ng-model="spec9">
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios9" id="exampleRadios9" value="Awning">
                      Awning
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios9" id="exampleRadios9" value="Channel letters">
                      Channel letters
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios9" id="exampleRadios9" value="Lightbox" >
                      Lightbox
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios9" id="exampleRadios9" value="Flat Signs">
                      Flat Signs
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios9" id="exampleRadios9" value="Pushed Acrylic" >
                      Pushed Acrylic
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios9" id="exampleRadios9" value="Blade sign">
                      Blade sign
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4 row">
                  <label class="col-sm-3 col-form-label">{{ __('Width') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control" name="Width9" type="text"  />
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 row">
                  <label class="col-sm-3 col-form-label">{{ __('Hight') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control" name="Hight9" type="text"  />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-9">
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Notes</label>
                    <textarea class="form-control" name="text_area9" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12" style="color: white;">
              <a  class="btn btn-primary" ng-click="addform()"><i class="material-icons">add</i>Add Sign</a>
              <a  class="btn btn-primary" ng-click="removeform()" ng-hide="btn_remove" ><i class="material-icons">remove</i>Remove Sign</a>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-6 row">
                  <label class="col-sm-3 col-form-label">{{ __('Sales Rep') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="sales" type="text"  />
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 row">
                  <label class="col-sm-3 col-form-label">{{ __('Org date of Sale') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="Org" type="text"  />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-9">
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Notes (Additional Info)</label>
                    <textarea class="form-control" name="textarea_additional" rows="3"></textarea>
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
