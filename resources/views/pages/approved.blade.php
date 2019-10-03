@extends('layouts.app', ['activePage' => 'approved', 'titlePage' => __('QUALITY INSPECTION CHECKLIST')])
@section('content')
<div class="content" ng-controller="ProjectInfo">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Projects</h4>
            <p class="card-category"> Proyectos en el paso dos</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    Customer Name
                  </th>
                  <th>
                    Product
                  </th>
                  <th>
                    Project Original Due date
                  </th>
                  <th>
                    Employee
                  </th>
                  <th></th>
                </thead>
                <tbody>
                  @foreach ($consulta as $array)
                  <tr>
                    <td>{{$array->Customer}}</td>
                    <td>{{$array->Product}}</td>
                    <td>{{$array->Fecha_F}}</td>
                    <td>{{$array->employee}}</td>
                    <td>
                      <a href="{{route('view_final_details',$array->Id_Proyecto)}}" title="View"><i class="material-icons">remove_red_eye</i></a>
                      <a href="{{route('pdf_view',$array->Id_Proyecto)}}" title="Print"><i class="material-icons">print</i></a>
                      @if($array->No_P_defects!="")
                      <a href="#!" title="Error" ng-click="ErrorView({{$array->Id_Proyecto}})" ><i class="material-icons">error_outline</i></a>
                      @endif
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Error Info</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <label class="col-sm-5 col-form-label">{{ __('Identified defects/Issues') }}</label>
            <div class="col-sm-7">
              <input class="form-control" ng-model="No_P_defects" type="text" placeholder="{{ __('Customer Name') }}" />
            </div>
          </div>
          <div class="row">
            <label class="col-sm-5 col-form-label">{{ __('Necessary Repairs and Improvements') }}</label>
            <div class="col-sm-7">
              <input class="form-control" ng-model="No_P_Repairs" type="text" placeholder="{{ __('Customer Name') }}" />
            </div>
          </div>
          <div class="row">
            <label class="col-sm-5 col-form-label">{{ __('Date') }}</label>
            <div class="col-sm-7">
              <input class="form-control" ng-model="No_P_Date" type="text" placeholder="{{ __('4 Hours') }}" />
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>

</div>
@endsection
@section('scripts')
<script src="{{ asset('js/production_phases.js') }}"></script>
@endsection
