<?php
namespace App\Http\Controllers;
use App\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class FormSignsCars extends Controller
{

  public function ViewSings(){
    return view('pages.signage');
  }

  public function PDFSings(Request $request){
    $c_name=$request->Customer_Name;
    $Phone=$request->phone_number;
    $Email=$request->email;
    $Project=$request->Project_name;
    $Company_Phone=$request->Company_Phone;
    $Address=$request->Company_Address;
    $exampleRadios=$request->exampleRadios;
    $Width=$request->Width;
    $Hight=$request->Hight;
    $text_area=$request->text_area;
    $exampleRadios1=$request->exampleRadios1;
    $Width1=$request->Width1;
    $Hight1=$request->Hight1;
    $text_area1=$request->text_area1;
    $exampleRadios2=$request->exampleRadios2;
    $Width2=$request->Width2;
    $Hight2=$request->Hight2;
    $text_area2=$request->text_area2;
    $exampleRadios3=$request->exampleRadios3;
    $Width3=$request->Width3;
    $Hight3=$request->Hight3;
    $text_area3=$request->text_area3;
    $exampleRadios4=$request->exampleRadios4;
    $Width4=$request->Width4;
    $Hight4=$request->Hight4;
    $text_area4=$request->text_area4;
    $exampleRadios5=$request->exampleRadios5;
    $Width5=$request->Width5;
    $Hight5=$request->Hight5;
    $text_area5=$request->text_area5;
    $exampleRadios6=$request->exampleRadios6;
    $Width6=$request->Width6;
    $Hight6=$request->Hight6;
    $text_area6=$request->text_area6;
    $exampleRadios7=$request->exampleRadios7;
    $Width7=$request->Width7;
    $Hight7=$request->Hight7;
    $text_area7=$request->text_area7;
    $exampleRadios8=$request->exampleRadios8;
    $Width8=$request->Width8;
    $Hight8=$request->Hight8;
    $text_area8=$request->text_area8;
    $exampleRadios9=$request->exampleRadios9;
    $Width9=$request->Width9;
    $Hight9=$request->Hight9;
    $text_area9=$request->text_area9;
    $sales=$request->sales;
    $Org=$request->Org;
    $textarea_additional=$request->textarea_additional;
    $datosproducto=['exampleRadios'=>$exampleRadios,'Width'=>$Width,'Hight'=>$Hight,'text_area'=>$text_area,'exampleRadios1'=>$exampleRadios1,
    'Width1'=>$Width1,'Hight1'=>$Hight1,'text_area1'=>$text_area1,'exampleRadios2'=>$exampleRadios2,'Width2'=>$Width2,'Hight2'=>$Hight2,'text_area2'=>$text_area2,
    'exampleRadios3'=>$exampleRadios3,'Width3'=>$Width3,'Hight3'=>$Hight3,'text_area3'=>$text_area3,'exampleRadios4'=>$exampleRadios4,'Width4'=>$Width4,
    'Hight4'=>$Hight4,'text_area4'=>$text_area4,'exampleRadios5'=>$exampleRadios5,'Width5'=>$Width5,'Hight5'=>$Hight5,'text_area5'=>$text_area5,'exampleRadios6'=>$exampleRadios6,
    'Width6'=>$Width6,'Hight6'=>$Hight6,'text_area6'=>$text_area6,'exampleRadios7'=>$exampleRadios7,'Width7'=>$Width7,'Hight7'=>$Hight7,'text_area7'=>$text_area7,'exampleRadios8'=>$exampleRadios8,'Width8'=>$Width8,'Hight8'=>$Hight8,'text_area8'=>$text_area8,'exampleRadios9'=>$exampleRadios9,
    'Width9'=>$Width9,'Hight9'=>$Hight9,'text_area9'=>$text_area9,'sales'=>$sales,'Org'=>$Org,'textarea_additional'=>$textarea_additional];
    $pdf = \PDF::loadView('pages.pdf_form_sign',compact('c_name','Phone','Email','Project','Company_Phone','Address','datosproducto'));
    //return $pdf->stream('pages.pdf_form_sign.pdf');
    return $pdf->download('pages.pdf_form_sign.pdf');
  }

  public function ViewCar(){
    return view('pages.car_wrap');
  }

  public function PDFCar(Request $request){
    $c_name=$request->Customer_Name;
    $Phone=$request->phone_number;
    $Email=$request->email;
    $Project=$request->Project_name;
    $Company_Phone=$request->Company_Phone;
    $Address=$request->Company_Address;
    $vin=$request->vin;
    $make=$request->make;
    $model=$request->model;
    $year=$request->year;
    $text_area=$request->text_area;
    $pdf = \PDF::loadView('pages.pdf_form_car',compact('c_name','Phone','Email','Project','Company_Phone','Address','vin','make','model','year','text_area'));
    //return $pdf->stream('pages.pdf_form_car.pdf');
    return $pdf->download('pages.pdf_form_car.pdf');
  }

}
