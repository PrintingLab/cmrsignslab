<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PDF</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style>
  .logo{
    width: 220px;
    height: 48px;
  }
  #design {
    border-collapse: collapse;
    width: 100%;
  }
  #design td,#design th,#design thead {
    border: 1px solid #000;
    font-size: 12px;
  }
  thead * ,tbody *{
    margin: 2px;
    padding: 2px;
  }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <img class="logo" src="img/signs-lab-logo-new-jersey-usa-sticky2.png" alt="">
    </div>
    <div class="row">
      <div class="col-xs-12">
        <p>
          Informe de proyectos que presentaron errores entre las fechas: {{$respuest1}} y {{$respuest2}}
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <h3>
          Proyectos con errores en producción
        </h3>
      </div>
    </div>
    <table id="design">
      <thead>
        <tr>
          <th>
            Customer Name
          </th>
          <th>
            Product
          </th>
          <th>
            Identified defects/Issues
          </th>
          <th>
            Necessary Repairs and Improvements
          </th>
          <th>
            Date(hours)
          </th>
          <th>
            Approved By
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($consulta['errorP'] as $consuta)
        <tr>
          <td>{{$consuta->Customer}}</td>
          <td>{{$consuta->Product}}</td>
          <td>{{$consuta->No_P_defects}}</td>
          <td>{{$consuta->No_P_Repairs}}</td>
          <td>{{$consuta->No_P_Date}}</td>
          <td>{{$consuta->P_No_approved}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="row">
      <div class="col-xs-12">
        <h3>
          Proyectos con errores en fabricación
        </h3>
      </div>
    </div>
    <table id="design">
      <thead>
        <tr>
          <th>
            Customer Name
          </th>
          <th>
            Product
          </th>
          <th>
            Identified defects/Issues
          </th>
          <th>
            Necessary Repairs and Improvements
          </th>
          <th>
            Date(hours)
          </th>
          <th>
            Approved By
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($consulta['errorF'] as $consuta)
        <tr>
          <td>{{$consuta->Customer}}</td>
          <td>{{$consuta->Product}}</td>
          <td>{{$consuta->F_No_P_defects}}</td>
          <td>{{$consuta->F_No_P_Repairs}}</td>
          <td>{{$consuta->F_No_P_Date}}</td>
          <td>{{$consuta->F_No_approved}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="row">
      <div class="col-xs-12">
        <h3>
          Proyectos con errores en ensamble
        </h3>
      </div>
    </div>
    <table id="design">
      <thead>
        <tr>
          <th>
            Customer Name
          </th>
          <th>
            Product
          </th>
          <th>
            Identified defects/Issues
          </th>
          <th>
            Necessary Repairs and Improvements
          </th>
          <th>
            Date(hours)
          </th>
          <th>
            Approved By
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($consulta['errorA'] as $consuta)
        <tr>
          <td>{{$consuta->Customer}}</td>
          <td>{{$consuta->Product}}</td>
          <td>{{$consuta->A_No_P_defects}}</td>
          <td>{{$consuta->A_No_P_Repairs}}</td>
          <td>{{$consuta->A_No_P_Date}}</td>
          <td>{{$consuta->A_No_approved}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>
