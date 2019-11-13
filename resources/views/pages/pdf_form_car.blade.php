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
      <div class="col-xs-12">
        <p>
          Información FORM SIGNAGE
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-4">
        <strong>Customer Name: </strong><p>{{$c_name}}</p>
      </div>
      <div class="col-xs-4">
        <strong>Phone Number: </strong><p>{{$Phone}}</p>
      </div>
      <div class="col-xs-4">
        <strong>Email: </strong><p>{{$Email}}</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-4">
        <strong>Project Name: </strong><p>{{$Project}}</p>
      </div>
      <div class="col-xs-4">
        <strong>Company Phone Number: </strong><p>{{$Company_Phone}}</p>
      </div>
      <div class="col-xs-4">
        <strong>Company Address: </strong><p>{{$Address}}</p>
      </div>
    </div>
    <h3>Producto </h3>
    <div class="row">
      <div class="col-xs-4">
        <strong>VIN: </strong><p>{{$vin}}</p>
      </div>
      <div class="col-xs-4">
        <strong>Make: </strong><p>{{$make}}</p>
      </div>
      <div class="col-xs-4">
        <strong>Model: </strong><p>{{$model}}</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-4">
        <strong>Year: </strong><p>{{$year}}</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <strong>Notes: </strong><p>{{$text_area}}</p>
      </div>
    </div>

  </div>
</body>
</html>
