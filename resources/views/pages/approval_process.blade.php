@extends('layouts.app', ['activePage' => 'byapproved', 'titlePage' => __('QUALITY INSPECTION CHECKLIST')])

@section('content')
<div class="content" ng-controller="ProjectInfo">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header card-header-primary">
            <h4 class="card-title">{{ __('Project') }}</h4>
            <p class="card-category"></p>
          </div>
          <div class="card-body ">
            <div class="row">
              <label class="col-sm-2 col-form-label">{{ __('Customer Name') }}</label>
              <div class="col-sm-7">
                <div class="form-group">
                  <input class="form-control"  value="{{ $consulta[0]['Customer'] }}" disabled />
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('Product') }}</label>
              <div class="col-sm-7">
                <div class="form-group">
                  <input class="form-control" value="{{ $consulta[0]['Product'] }}" disabled/>
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('Project Original Due date') }}</label>
              <div class="col-sm-7">
                <div class="form-group none">
                  <input class="form-control" value="{{$consulta[0]['Fecha_F'] }}"disabled/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <form method="post" action="{{ route('updateSpecification') }}" autocomplete="off" class="form-horizontal">
          @csrf
          @method('post')
          <input type="hidden" name="Id_P" value="{{$Id_P}}" disabled>
          <div class="card ">
            <div class="card-header card-header-primary">
              <h4 class="card-title">{{ __('Info Project') }}</h4>
              <p class="card-category"></p>
            </div>
            <div class="card-body ">
              <div class="row">
                <div class="col-md-12 text-right">
                  <a href="{{route('update_project',$Id_P)}}" class="btn btn-sm btn-primary">{{ __('Edit Project') }}</a>
                </div>
              </div>
              <h3>Production</h3>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Team Involved') }}</label>
                <div class="col-sm-7">
                  <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                    <input class="form-control" name="P_Team_Involved" type="text" placeholder="{{ __('Team Involved') }}" value="{{$resultproducto[0]->P_Team_Involved}}" disabled>
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Passed Quality Control') }}</label>
                <div class="col-sm-7">
                  <div class="form-check form-check-radio form-check-inline">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="checkoption" ng-click="radioform('yes')"   > Yes
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                  <div class="form-check form-check-radio form-check-inline">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="checkoption"   ng-click="radioform('no')" > No
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <div ng-hide="yesForm">
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Duration Time (hours)') }}</label>
                  <div class="col-sm-7">
                    <input class="form-control" name="Yes_hours" type="text" placeholder="{{ __('4 Hours') }}" value="{{$resultproducto[0]->Yes_hours}}" disabled>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Approved By') }}</label>
                  <div class="col-sm-7">
                    <input class="form-control" name="Yes_P_approved" type="text" placeholder="{{ __('Customer Name') }}" value="{{$resultproducto[0]->Yes_P_approved}}" disabled>
                  </div>
                </div>
              </div>
              <div ng-hide="noForm">
                <h5>Error Form</h5>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Identified defects/Issues') }}</label>
                  <div class="col-sm-7">
                    <input class="form-control" name="No_P_defects" type="text" placeholder="{{ __('Customer Name') }}" value="{{$resultproducto[0]->No_P_defects}}" disabled>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Necessary Repairs and Improvements') }}</label>
                  <div class="col-sm-7">
                    <input class="form-control" name="No_P_Repairs" type="text" placeholder="{{ __('Customer Name') }}" value="{{$resultproducto[0]->No_P_Repairs}}" disabled>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Date') }}</label>
                  <div class="col-sm-7">
                    <input class="form-control" name="No_P_Date" type="text" placeholder="{{ __('4 Hours') }}" value="{{$resultproducto[0]->No_P_Date}}" disabled>
                  </div>
                </div>
              </div>

              <h3>Fabrication</h3>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Team Involved') }}</label>
                <div class="col-sm-7">
                  <div class="form-group">
                    <input class="form-control" name="F_Team_Involved" type="text" placeholder="{{ __('Customer Name') }}" value="{{$resultproducto[0]->F_Team_Involved}}" >
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Materials Used') }}</label>
                <div class="col-sm-7">
                  <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}" disabled>
                    <input class="form-control" name="F_Materials Used" type="text" placeholder="{{ __('Customer Name') }}" value="{{$resultproducto[0]->F_Materials_Used}}" disabled>
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Identified Defects/ Issues:') }}</label>
                <div class="col-sm-7">
                  <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}" disabled>
                    <input class="form-control" name="F_Defects" type="text" placeholder="{{ __('Customer Name') }}" value="{{$resultproducto[0]->F_Defects}}" disabled>
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Necessary Repairs/Improvements') }}</label>
                <div class="col-sm-7">
                  <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}" disabled>
                    <input class="form-control" name="F_Repairs" type="text" placeholder="{{ __('Customer Name') }}" value="{{$resultproducto[0]->F_Repairs}}" disabled>
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Duration Time (hours)') }}</label>
                <div class="col-sm-7">
                  <input class="form-control" name="F_Duration_Time" type="text" placeholder="{{ __('4 Hours') }}" value="{{$resultproducto[0]->F_Duration}}" disabled>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Approved By') }}</label>
                <div class="col-sm-7">
                  <input class="form-control" name="F_Approved_By" type="text" placeholder="{{ __('Customer Name') }}" value="{{$resultproducto[0]->F_Approved}}" disabled>
                </div>
              </div>
              <h3>Assembling</h3>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Team Involved') }}</label>
                <div class="col-sm-7">
                  <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}" disabled>
                    <input class="form-control" name="A_Team_Involved" type="text" placeholder="{{ __('Customer Name') }}" value="{{$resultproducto[0]->A_Team_Involved}}" disabled>
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Materials Used') }}</label>
                <div class="col-sm-7">
                  <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}" disabled>
                    <input class="form-control" name="A_Materials Used" type="text" placeholder="{{ __('Customer Name') }}" value="{{$resultproducto[0]->A_Materials_Used}}" disabled>
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Identified Defects/ Issues:') }}</label>
                <div class="col-sm-7">
                  <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}" disabled>
                    <input class="form-control" name="A_Defects" type="text" placeholder="{{ __('Customer Name') }}" value="{{$resultproducto[0]->A_Defects}}" disabled>
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Necessary Repairs/Improvements') }}</label>
                <div class="col-sm-7">
                  <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}" disabled>
                    <input class="form-control" name="A_Repairs" type="text" placeholder="{{ __('Customer Name') }}" value="{{$resultproducto[0]->A_Repairs}}" disabled>
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Duration Time (hours)') }}</label>
                <div class="col-sm-7">
                  <input class="form-control" name="A_Duration_Time" type="text" placeholder="{{ __('4 Hours') }}" value="{{$resultproducto[0]->A_Duration}}" disabled>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Approved By') }}</label>
                <div class="col-sm-7">
                  <input class="form-control" name="A_Approved_By" type="text" placeholder="{{ __('Customer Name') }}" value="{{$resultproducto[0]->A_Approved}}" disabled>
                </div>
              </div>

<h3>Quality Control Approval</h3>
<div class="row">
  <label class="col-sm-2 col-form-label">{{ __('Identified Defects/ Issues:') }}</label>
  <div class="col-sm-7">
    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}" disabled>
      <input class="form-control" name="F_Defects" type="text" placeholder="{{ __('Customer Name') }}" value="{{$resultproducto[0]->F_Defects}}" disabled>
    </div>
  </div>
</div>

            </div>


            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-primary">{{ __('Update Specification') }}</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('js/production_phases.js') }}" disabled></script>
<script>
$(document).ready(function(){



});
</script>
@endsection
