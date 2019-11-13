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
        <strong>Product: </strong><p>{{$datosproducto['exampleRadios']}}</p>
      </div>
      <div class="col-xs-4">
        <strong>Width: </strong><p>{{$datosproducto['Width']}}</p>
      </div>
      <div class="col-xs-4">
        <strong>Hight: </strong><p>{{$datosproducto['Hight']}}</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <strong>Notes: </strong><p>{{$datosproducto['text_area']}}</p>
      </div>
    </div>
    @if($datosproducto['exampleRadios1']!="")
    <h3>Product Added </h3>
    <div class="row">
      <div class="col-xs-4">
        <strong>Product: </strong><p>{{$datosproducto['exampleRadios1']}}</p>
      </div>
      <div class="col-xs-4">
        <strong>Width: </strong><p>{{$datosproducto['Width1']}}</p>
      </div>
      <div class="col-xs-4">
        <strong>Hight: </strong><p>{{$datosproducto['Hight1']}}</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <strong>Notes: </strong><p>{{$datosproducto['text_area1']}}</p>
      </div>
    </div>
    @endif
    @if($datosproducto['exampleRadios2']!="")
    <h3>Product Added </h3>
    <div class="row">
      <div class="col-xs-4">
        <strong>Product: </strong><p>{{$datosproducto['exampleRadios2']}}</p>
      </div>
      <div class="col-xs-4">
        <strong>Width: </strong><p>{{$datosproducto['Width2']}}</p>
      </div>
      <div class="col-xs-4">
        <strong>Hight: </strong><p>{{$datosproducto['Hight2']}}</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <strong>Notes: </strong><p>{{$datosproducto['text_area2']}}</p>
      </div>
    </div>
    @endif
    @if($datosproducto['exampleRadios3']!="")
    <h3>Product Added </h3>
    <div class="row">
      <div class="col-xs-4">
        <strong>Product: </strong><p>{{$datosproducto['exampleRadios3']}}</p>
      </div>
      <div class="col-xs-4">
        <strong>Width: </strong><p>{{$datosproducto['Width3']}}</p>
      </div>
      <div class="col-xs-4">
        <strong>Hight: </strong><p>{{$datosproducto['Hight3']}}</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <strong>Notes: </strong><p>{{$datosproducto['text_area3']}}</p>
      </div>
    </div>
    @endif
    @if($datosproducto['exampleRadios4']!="")
    <h3>Product Added </h3>
    <div class="row">
      <div class="col-xs-4">
        <strong>Product: </strong><p>{{$datosproducto['exampleRadios4']}}</p>
      </div>
      <div class="col-xs-4">
        <strong>Width: </strong><p>{{$datosproducto['Width4']}}</p>
      </div>
      <div class="col-xs-4">
        <strong>Hight: </strong><p>{{$datosproducto['Hight4']}}</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <strong>Notes: </strong><p>{{$datosproducto['text_area4']}}</p>
      </div>
    </div>
    @endif
    @if($datosproducto['exampleRadios5']!="")
    <h3>Product Added </h3>
    <div class="row">
      <div class="col-xs-4">
        <strong>Product: </strong><p>{{$datosproducto['exampleRadios5']}}</p>
      </div>
      <div class="col-xs-4">
        <strong>Width: </strong><p>{{$datosproducto['Width5']}}</p>
      </div>
      <div class="col-xs-4">
        <strong>Hight: </strong><p>{{$datosproducto['Hight5']}}</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <strong>Notes: </strong><p>{{$datosproducto['text_area5']}}</p>
      </div>
    </div>
    @endif
    @if($datosproducto['exampleRadios6']!="")
    <h3>Product Added </h3>
    <div class="row">
      <div class="col-xs-4">
        <strong>Product: </strong><p>{{$datosproducto['exampleRadios6']}}</p>
      </div>
      <div class="col-xs-4">
        <strong>Width: </strong><p>{{$datosproducto['Width6']}}</p>
      </div>
      <div class="col-xs-4">
        <strong>Hight: </strong><p>{{$datosproducto['Hight6']}}</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <strong>Notes: </strong><p>{{$datosproducto['text_area6']}}</p>
      </div>
    </div>
    @endif
    @if($datosproducto['exampleRadios7']!="")
    <h3>Product Added </h3>
    <div class="row">
      <div class="col-xs-4">
        <strong>Product: </strong><p>{{$datosproducto['exampleRadios7']}}</p>
      </div>
      <div class="col-xs-4">
        <strong>Width: </strong><p>{{$datosproducto['Width7']}}</p>
      </div>
      <div class="col-xs-4">
        <strong>Hight: </strong><p>{{$datosproducto['Hight7']}}</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <strong>Notes: </strong><p>{{$datosproducto['text_area7']}}</p>
      </div>
    </div>
    @endif
    @if($datosproducto['exampleRadios8']!="")
    <h3>Product Added </h3>
    <div class="row">
      <div class="col-xs-4">
        <strong>Product: </strong><p>{{$datosproducto['exampleRadios8']}}</p>
      </div>
      <div class="col-xs-4">
        <strong>Width: </strong><p>{{$datosproducto['Width8']}}</p>
      </div>
      <div class="col-xs-4">
        <strong>Hight: </strong><p>{{$datosproducto['Hight8']}}</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <strong>Notes: </strong><p>{{$datosproducto['text_area8']}}</p>
      </div>
    </div>
    @endif
    @if($datosproducto['exampleRadios9']!="")
    <h3>Product Added </h3>
    <div class="row">
      <div class="col-xs-4">
        <strong>Product: </strong><p>{{$datosproducto['exampleRadios9']}}</p>
      </div>
      <div class="col-xs-4">
        <strong>Width: </strong><p>{{$datosproducto['Width9']}}</p>
      </div>
      <div class="col-xs-4">
        <strong>Hight: </strong><p>{{$datosproducto['Hight9']}}</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <strong>Notes: </strong><p>{{$datosproducto['text_area9']}}</p>
      </div>
    </div>
    @endif
    <div class="row">
      <div class="col-xs-6">
        <strong>Sales Rep: </strong><p>{{$datosproducto['sales']}}</p>
      </div>
      <div class="col-xs-6">
        <strong>Org date of Sale: </strong><p>{{$datosproducto['Org']}}</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <strong>Notes (Additional Info): </strong><p>{{$datosproducto['textarea_additional']}}</p>
      </div>
    </div>
  </div>
</body>
</html>
