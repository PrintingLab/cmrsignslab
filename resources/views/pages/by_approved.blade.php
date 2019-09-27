@extends('layouts.app', ['activePage' => 'byapproved', 'titlePage' => __('QUALITY INSPECTION CHECKLIST')])

@section('content')
<div class="content">
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
                      <a href="{{route('approval_process',$array->Id_Proyecto)}}" title="Edit"><i class="material-icons">description</i></a>
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
</div>
@endsection
