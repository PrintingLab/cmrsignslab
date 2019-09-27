<?php
namespace App\Http\Controllers;
use App\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class InspectionChecklist extends Controller
{
  //paso 1
  public function Paso1(){
    $consulta=DB::table('proyect')->select('Id_Proyecto','Customer','Product','employee','Fecha_I','Fecha_F')->where('estado','=',1)->get();
    return view('pages.project_info',['consulta'=>$consulta]);
  }
  public function Paso1_Create(){
    return view('pages.create_project');
  }
  public function Paso1_add(Request $request){
    $fech=date('Y-m-d');
    $timestamp = strtotime($request->fecha);
    $fechaFinal=date("Y-m-d", $timestamp);
    $user = Auth::user();
    $user=$user->name;
    DB::table('proyect')->insert([
      'Customer'=>"$request->Customer_Name",
      'Product'=>"$request->Product",
      'employee'=>"$user",
      'Fecha_I'=>"$fech",
      'Fecha_F'=>"$fechaFinal",
      'estado'=>1]);
      $consulta=DB::table('proyect')->select('Id_Proyecto','Customer','Product','employee','Fecha_I','Fecha_F')->get();
      return view('pages.project_info',['consulta'=>$consulta]);
    }
    //paso 2
    public function Paso2(){
      $consulta=DB::table('proyect')->select('Id_Proyecto','Customer','Product','employee','Fecha_I','Fecha_F','estado')->where('estado','=',1)->orWhere('estado','=',2)->get();
      return view('pages.production_project',['consulta'=>$consulta]);
    }
    public function Paso2_Edit(Request $request){
      $consulta=DB::table('proyect')
      ->select('Id_Proyecto','Customer','Product','employee','Fecha_I','Fecha_F')
      ->where('Id_Proyecto','=',$request->ID)
      ->get();
      $consulta_result=json_decode($consulta, true);
      return view('pages.edit_project',['consulta'=>$consulta_result,'Id_P'=>$request->ID]);
    }
    public function Paso2_add(Request $request){
      $fech=date('Y-m-d');
      $insert=DB::table('phases')->insert([
        'Id_Fk_proyect'=>$request->Id_P,
        'P_Team_Involved'=>"$request->P_Team_Involved",
        'Yes_hours'=>"$request->Yes_hours",
        'Yes_P_approved'=>"$request->Yes_P_approved",
        'No_P_defects'=>"$request->No_P_defects",
        'No_P_Repairs'=>"$request->No_P_Repairs",
        'No_P_Date'=>"$request->No_P_Date",
        'F_Team_Involved'=>"$request->F_Team_Involved",
        'F_Materials_Used'=>"$request->F_Materials_Used",
        'F_Defects'=>"$request->F_Defects",
        'F_Repairs'=>"$request->F_Repairs",
        'F_Duration'=>"$request->F_Duration_Time",
        'F_Approved'=>"$request->F_Approved_By",
        'A_Team_Involved'=>"$request->A_Team_Involved",
        'A_Materials_Used'=>"$request->A_Materials_Used",
        'A_Defects'=>"$request->A_Defects",
        'A_Repairs'=>"$request->A_Repairs",
        'A_Duration'=>"$request->A_Duration_Time",
        'A_Approved'=>"$request->A_Approved_By",
        'time'=>"$fech"
      ]);
      DB::table('proyect')->where('Id_Proyecto',$request->Id_P)->update(['estado'=>2]);
      $consulta=DB::table('proyect')->select('Id_Proyecto','Customer','Product','employee','Fecha_I','Fecha_F')->get();
      return view('pages.production_project',['consulta'=>$consulta]);
    }

    public function Paso2_View_update(Request $request){
      $consulta=DB::table('proyect')
      ->select('Id_Proyecto','Customer','Product','employee','Fecha_I','Fecha_F')
      ->where('Id_Proyecto','=',$request->ID)
      ->get();
      $consulta_result=json_decode($consulta, true);
      $consulta_general=DB::table('phases')->get();
      $consulta_g=json_decode($consulta_general);
      //dd($consulta_general[0]->F_Team_Involved);
      return view('pages.view_update_project',['consulta'=>$consulta_result,'Id_P'=>$request->ID,'resultproducto'=>$consulta_g]);
    }

    public function Paso2_update(Request $request){
      DB::table('phases')
      ->where('Id_Fk_proyect',$request->Id_P)
      ->update([
        'P_Team_Involved'=>"$request->P_Team_Involved",
        'Yes_hours'=>"$request->Yes_hours",
        'Yes_P_approved'=>"$request->Yes_P_approved",
        'No_P_defects'=>"$request->No_P_defects",
        'No_P_Repairs'=>"$request->No_P_Repairs",
        'No_P_Date'=>"$request->No_P_Date",
        'F_Team_Involved'=>"$request->F_Team_Involved",
        'F_Materials_Used'=>"$request->F_Materials_Used",
        'F_Defects'=>"$request->F_Defects",
        'F_Repairs'=>"$request->F_Repairs",
        'F_Duration'=>"$request->F_Duration_Time",
        'F_Approved'=>"$request->F_Approved_By",
        'A_Team_Involved'=>"$request->A_Team_Involved",
        'A_Materials_Used'=>"$request->A_Materials_Used",
        'A_Defects'=>"$request->A_Defects",
        'A_Repairs'=>"$request->A_Repairs",
        'A_Duration'=>"$request->A_Duration_Time",
        'A_Approved'=>"$request->A_Approved_By"
      ]);
      $consulta=DB::table('proyect')->select('Id_Proyecto','Customer','Product','employee','Fecha_I','Fecha_F','estado')->get();
      return view('pages.production_project',['consulta'=>$consulta]);

    }

    public function Paso3_ByApproved(){
      $consulta=DB::table('proyect')->select('Id_Proyecto','Customer','Product','employee','Fecha_I','Fecha_F','estado')->where('estado','=',2)->get();
      return view('pages.by_approved',['consulta'=>$consulta]);
    }

    public function Paso3_checkApproved(Request $request){
      $user = Auth::user();
      $consulta=DB::table('proyect')
      ->select('Id_Proyecto','Customer','Product','employee','Fecha_I','Fecha_F')
      ->where('Id_Proyecto','=',$request->ID)
      ->get();
      $consulta_result=json_decode($consulta, true);
      $consulta_general=DB::table('phases')->get();
      $consulta_g=json_decode($consulta_general);
      return view('pages.approval_process',['consulta'=>$consulta_result,'Id_P'=>$request->ID,'resultproducto'=>$consulta_g,'user'=>$user]);
    }

    public function Paso3_Approved(){
    }


  }
