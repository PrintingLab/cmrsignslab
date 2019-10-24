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
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <img class="logo" src="img/signs-lab-logo-new-jersey-usa-sticky2.png" alt="">
    </div>
    <div class="row">
      <h4><strong>Quality Control </strong></h4>
    </div>
    <div class="row">
      <div class="col-xs-4">
        <p><strong>Customer Name: </strong>{{$consulta_P[0]->Customer}}</p>
      </div>
      <div class="col-xs-4">
        <p><strong>Product : </strong>{{$consulta_P[0]->Product}}</p>
      </div>
      <div class="col-xs-4">
        <p><strong>Due Date : </strong>{{$consulta_P[0]->Fecha_F}}</p>
      </div>
    </div>

    @if ($consulta_PH[0]->P_Team_Involved !="" or $consulta_PH[0]->Yes_hours !="" or $consulta_PH[0]->Yes_P_approved !="" or $consulta_PH[0]->No_P_defects !="" or $consulta_PH[0]->No_P_Repairs !="" or $consulta_PH[0]->No_P_Date !="")
    <div class="row">
      <h4><strong>Production: </strong></h4>
      <div class="col-xs-5">
        <p> <strong>Team Involved: </strong>{{$consulta_PH[0]->P_Team_Involved}}</p>
      </div>
      <div class="col-xs-5">
        <p> <strong>Materials Used: </strong>{{$consulta_PH[0]->P_Materials_Used}}</p>
      </div>
    </div>
    @if($consulta_PH[0]->Yes_hours !="" or $consulta_PH[0]->Yes_P_approved !="")
    <div class="row">
      <div class="col-xs-4">
        <p> <strong>Passed Quality Control : </strong> </p> <span>YES</span>
      </div>
      <div class="col-xs-4">
        <p><strong>Duration Time (hours): </strong>{{$consulta_PH[0]->Yes_hours}}</p>
      </div>
      <div class="col-xs-4">
        <p><strong>Approved By: </strong>{{$consulta_PH[0]->Yes_P_approved}}</p>
      </div>
    </div>
    @endif
    @if($consulta_PH[0]->No_P_defects !="" or $consulta_PH[0]->No_P_Repairs !="" or $consulta_PH[0]->No_P_Date)
    <div class="row">
      <div class="col-xs-2">
        <p> <strong>Passed Quality Control: </strong> </p> <span>No</span>
      </div>
      <div class="col-xs-2">
        <p> <strong>Identified defects/Issues: </strong>{{$consulta_PH[0]->No_P_defects}}</p>
      </div>
      <div class="col-xs-2">
        <p> <strong>Repairs and Improvements: </strong>{{$consulta_PH[0]->No_P_Repairs}}</p>
      </div>
      <div class="col-xs-2">
        <p> <strong>Date: </strong>{{$consulta_PH[0]->No_P_Date}}</p>
      </div>
      <div class="col-xs-2">
        <p> <strong>Approved By: </strong>{{$consulta_PH[0]->P_No_approved}}</p>
      </div>
    </div>
    @endif
    @endif

    @if($consulta_PH[0]->F_Team_Involved !="" or $consulta_PH[0]->F_Materials_Used !="")
    <div class="row">
      <h4><strong>Fabrication: </strong></h4>
      <div class="col-xs-4">
        <p> <strong>Team Involved: </strong>{{$consulta_PH[0]->F_Team_Involved}}</p>
      </div>
      <div class="col-xs-4">
        <p> <strong>Materials Used: </strong>{{$consulta_PH[0]->F_Materials_Used}}</p>
      </div>
    </div>
    @if($consulta_PH[0]->F_Yes_hours !="" or $consulta_PH[0]->F_Yes_P_approved !="")
    <div class="row">
      <div class="col-xs-4">
        <p> <strong>Passed Quality Control : </strong> </p> <span>YES</span>
      </div>
      <div class="col-xs-4">
        <p><strong>Duration Time (hours): </strong>{{$consulta_PH[0]->F_Yes_hours}}</p>
      </div>
      <div class="col-xs-4">
        <p><strong>Approved By: </strong>{{$consulta_PH[0]->F_Yes_P_approved}}</p>
      </div>
    </div>
    @endif
    @if($consulta_PH[0]->F_No_P_defects !="" or $consulta_PH[0]->F_No_P_Repairs !="" or $consulta_PH[0]->F_No_P_Date)
    <div class="row">
      <div class="col-xs-2">
        <p> <strong>Passed Quality Control: </strong> </p> <span>No</span>
      </div>
      <div class="col-xs-2">
        <p> <strong>Identified defects/Issues: </strong>{{$consulta_PH[0]->F_No_P_defects}}</p>
      </div>
      <div class="col-xs-2">
        <p> <strong>Repairs and Improvements: </strong>{{$consulta_PH[0]->F_No_P_Repairs}}</p>
      </div>
      <div class="col-xs-2">
        <p> <strong>Date: </strong>{{$consulta_PH[0]->F_No_P_Date}}</p>
      </div>
      <div class="col-xs-2">
        <p> <strong>Approved By: </strong>{{$consulta_PH[0]->F_No_approved}}</p>
      </div>
    </div>
    @endif
    @endif
    @if($consulta_PH[0]->A_Team_Involved !="" or $consulta_PH[0]->A_Materials_Used !="")
    <div class="row">
      <h4><strong>Fabrication: </strong></h4>
      <div class="col-xs-4">
        <p> <strong>Team Involved: </strong>{{$consulta_PH[0]->A_Team_Involved}}</p>
      </div>
      <div class="col-xs-4">
        <p> <strong>Materials Used: </strong>{{$consulta_PH[0]->A_Materials_Used}}</p>
      </div>
    </div>
    @if($consulta_PH[0]->A_Yes_P_hours !="" or $consulta_PH[0]->A_Yes_P_approved !="")
    <div class="row">
      <div class="col-xs-4">
        <p> <strong>Passed Quality Control : </strong> </p> <span>YES</span>
      </div>
      <div class="col-xs-4">
        <p><strong>Duration Time (hours): </strong>{{$consulta_PH[0]->A_Yes_P_hours}}</p>
      </div>
      <div class="col-xs-4">
        <p><strong>Approved By: </strong>{{$consulta_PH[0]->A_Yes_P_approved}}</p>
      </div>
    </div>
    @endif
    @if($consulta_PH[0]->A_No_P_defects !="" or $consulta_PH[0]->A_No_P_Repairs !="" or $consulta_PH[0]->A_No_approved)
    <div class="row">
      <div class="col-xs-2">
        <p> <strong>Passed Quality Control: </strong> </p> <span>No</span>
      </div>
      <div class="col-xs-2">
        <p> <strong>Identified defects/Issues: </strong>{{$consulta_PH[0]->A_No_P_defects}}</p>
      </div>
      <div class="col-xs-2">
        <p> <strong>Repairs and Improvements: </strong>{{$consulta_PH[0]->A_No_P_Repairs}}</p>
      </div>
      <div class="col-xs-2">
        <p> <strong>Date: </strong>{{$consulta_PH[0]->A_No_P_Date}}</p>
      </div>
      <div class="col-xs-2">
        <p> <strong>Approved By: </strong>{{$consulta_PH[0]->A_No_approved}}</p>
      </div>
    </div>
    @endif
    @endif
  </div>
</body>
</html>
