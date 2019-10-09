@extends('layouts.app', ['activePage' => 'project_info', 'titlePage' => __('QUALITY INSPECTION CHECKLIST')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-3">
          <a href="{{route('createproject')}}">
          <button class="btn btn-primary btn-block" >New Project</button>
          </a>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Projects</h4>
            <p class="card-category"> Proyectos en el paso uno</p>
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
                </thead>
                <tbody>
                  @foreach ($consulta as $array)
                  <tr data-id="{{$array->Id_Proyecto}}">
                    <td>{{$array->Customer}}</td>
                    <td>{{$array->Product}}</td>
                    <td>{{$array->Fecha_F}}</td>
                    <td>{{$array->employee}}</td>
                    <td> <a href="{{route('delete_project',$array->Id_Proyecto)}}" title="Delete Project"><i class="material-icons">delete</i></a>
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
