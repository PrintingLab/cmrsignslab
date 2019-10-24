@extends('layouts.app', ['activePage' => 'approved', 'titlePage' => __('QUALITY INSPECTION CHECKLIST')])
@section('content')
<div class="content" ng-controller="ProjectInfo">
  <div class="container-fluid">
    <div class="row">

      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Report Generator</h4>
          </div>
          <div class="card-body">

            <form  action="{{route('pdf_error')}}" method="post">
              @csrf
              @method('post')
              <div class="row">
                <label class="col-sm-1 col-form-label" for="input-password-confirmation">{{ __('Initial Date') }}</label>
                <div class="col-sm-3">
                  <div class="form-group none">
                    <input type="text" id="datepicker1" name="fecha1" ng-model="fecha1" class="form-control" />
                  </div>
                </div>
                <label class="col-sm-1 col-form-label" for="input-password-confirmation">{{ __('Final Date') }}</label>
                <div class="col-sm-3">
                  <div class="form-group none">
                    <input type="text" id="datepicker2" name="fecha2" ng-model="fecha2" class="form-control" />
                  </div>
                </div>
                <div class="col-sm-1">
                  <a href="#!" ng-click="ConsultaFecha()"><i class="material-icons" style="font-size: 40px;">assignment</i></a>
                </div>
                <div class="col-sm-1" >
                  <button type="submit" class="btn btn-primary"><i class="material-icons" style="font-size: 40px;">print</i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Report Production</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    #
                  </th>
                  <th>
                    Customer Name
                  </th>
                  <th>
                    Product
                  </th>
                  <th>
                    Production Identified defects/Issues
                  </th>
                  <th>
                    Production Necessary Repairs and Improvements
                  </th>
                  <th>
                    Production Date(hours)
                  </th>
                  <th>
                    Production Approved By
                  </th>
                </thead>
                <tbody>
                  <tr ng-repeat="data in arrayP">
                    <td>@{{$index +1}}</td>
                    <td>@{{data.Customer}}</td>
                    <td>@{{data.Product}}</td>
                    <td>@{{data.No_P_defects}}</td>
                    <td>@{{data.No_P_Repairs}}</td>
                    <td>@{{data.No_P_Date}}</td>
                    <td>@{{data.P_No_approved}}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Report Fabrication</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    #
                  </th>
                  <th>
                    Customer Name
                  </th>
                  <th>
                    Product
                  </th>
                  <th>
                    Fabrication Identified defects/Issues
                  </th>
                  <th>
                    Fabrication Necessary Repairs and Improvements
                  </th>
                  <th>
                    Fabrication Date(hours)
                  </th>
                  <th>
                    Fabrication Approved By
                  </th>
                </thead>
                <tbody>
                  <tr ng-repeat="data in arrayF">
                    <td>@{{$index +1}}</td>
                    <td>@{{data.Customer}}</td>
                    <td>@{{data.Product}}</td>
                    <td>@{{data.F_No_P_defects}}</td>
                    <td>@{{data.F_No_P_Repairs}}</td>
                    <td>@{{data.F_No_P_Date}}</td>
                    <td>@{{data.F_No_approved}}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Report Assembling</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    #
                  </th>
                  <th>
                    Customer Name
                  </th>
                  <th>
                    Product
                  </th>
                  <th>
                    Assembling Identified defects/Issues
                  </th>
                  <th>
                    Assembling Necessary Repairs and Improvements
                  </th>
                  <th>
                    Assembling Date(hours)
                  </th>
                  <th>
                    Assembling Approved By
                  </th>
                </thead>
                <tbody>
                  <tr ng-repeat="data in arrayA">
                    <td>@{{$index +1}}</td>
                    <td>@{{data.Customer}}</td>
                    <td>@{{data.Product}}</td>
                    <td>@{{data.A_No_P_defects}}</td>
                    <td>@{{data.A_No_P_Repairs}}</td>
                    <td>@{{data.A_No_P_Date}}</td>
                    <td>@{{data.A_No_approved}}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('js/production_phases.js') }}"></script>
<script>
$(document).ready(function(){
  $('#datepicker1').datepicker({
    uiLibrary: 'bootstrap4',
    format: 'yyyy-mm-dd'
  });
  $('#datepicker2').datepicker({
    uiLibrary: 'bootstrap4',
    format: 'yyyy-mm-dd'
  });

  /*
  $("#PrintPdfError").click(function(){
  var fecha1= $("#datepicker1").val();
  var fecha2=$("#datepicker2").val();
  //console.log(fecha2);
  //fecha1=fecha1.toString();
  //fecha2=fecha2.toString();
  console.log(fecha2);
  var url = '{{ route("pdf_error",["'+fecha1+'","'+fecha2+'"]) }}';
  console.log(url);
  //url = url.replace(':id', stock.id);
})
*/

});

</script>
@endsection
