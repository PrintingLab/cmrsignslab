<?php
namespace App\Http\Controllers;
use App\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
//use App\Http\Controllers\PDF;

class InspectionChecklist extends Controller
{

  public function Paso1(){
    $consulta=DB::table('proyect')->select('Id_Proyecto','Customer','Product','employee','Fecha_I','Fecha_F','estado')->where('estado','=',1)->get();
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
      $consulta=DB::table('proyect')->select('Id_Proyecto','Customer','Product','employee','Fecha_I','Fecha_F','estado')->where('estado','=',1)->get();
      return view('pages.project_info',['consulta'=>$consulta]);
    }

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
      $consulta=DB::table('proyect')->select('Id_Proyecto','Customer','Product','employee','Fecha_I','Fecha_F','estado')->where('estado','=',1)->orWhere('estado','=',2)->get();
      return view('pages.production_project',['consulta'=>$consulta]);
    }

    public function Paso2_View_update(Request $request){
      $consulta=DB::table('proyect')
      ->select('Id_Proyecto','Customer','Product','employee','Fecha_I','Fecha_F')
      ->where('Id_Proyecto','=',$request->ID)
      ->get();
      $consulta_result=json_decode($consulta, true);
      $consulta_general=DB::table('phases')->where('Id_Fk_proyect','=',$request->ID)->get();
      $consulta_g=json_decode($consulta_general);
      return view('pages.view_update_project',['consulta'=>$consulta_result,'Id_P'=>$request->ID,'resultproducto'=>$consulta_g]);
    }

    public function Paso2_update(Request $request){
      DB::table('phases')
      ->where('Id_Fk_proyect',$request->Id_P)
      ->update([
        'P_Team_Involved'=>"$request->P_Team_Involved",
        'Yes_hours'=>"$request->Yes_hours",
        'Yes_P_approved'=>"$request->Yes_P_approved",
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
      $consulta=DB::table('proyect')->select('Id_Proyecto','Customer','Product','employee','Fecha_I','Fecha_F','estado')->where('estado','=',1)->orWhere('estado','=',2)->get();
      return view('pages.production_project',['consulta'=>$consulta]);

    }

    public function Paso3_ByApproved(){
      $consulta=DB::table('proyect')->select('Id_Proyecto','Customer','Product','employee','Fecha_I','Fecha_F','estado')->where('estado','=',2)->get();
      return view('pages.by_approved',['consulta'=>$consulta]);
    }

    public function Paso3_checkApproved(Request $request){
      $consulta=DB::table('proyect')
      ->select('Id_Proyecto','Customer','Product','employee','Fecha_I','Fecha_F')
      ->where('Id_Proyecto','=',$request->ID)
      ->get();
      $consulta_result=json_decode($consulta, true);
      $consulta_general=DB::table('phases')->where('Id_Fk_proyect','=',$request->ID)->get();
      $consulta_g=json_decode($consulta_general);
      return view('pages.approval_process',['consulta'=>$consulta_result,'Id_P'=>$request->ID,'resultproducto'=>$consulta_g]);
    }

    public function Paso3_ApprovedProject(Request $request){
      $user = Auth::user();
      $fech=date('Y-m-d');
      DB::table('approval')->insert([
        'Id_Fk_proyect'=>$request->Id_P,
        'Name'=>$request->Q_Approved_By,
        'notas'=>$request->text_area,
        'Date'=>$request->$fech,
        'Id_User'=>$user->id,
        'name_userapproval'=>$user->name
      ]);
      DB::table('proyect')->where('Id_Proyecto',$request->Id_P)->update(['estado'=>3]);

      //  $consulta=DB::table('proyect')->select('Id_Proyecto','Customer','Product','employee','Fecha_I','Fecha_F','estado')->where('estado','=',3)->get();

      $consulta=DB::table('proyect')
      ->join('phases','proyect.Id_Proyecto','=','phases.Id_Fk_proyect')
      ->select('Id_Proyecto','No_P_defects','Product','Customer','employee','Fecha_F','estado')
      ->Where('estado','=',3)
      ->where(function ($query){
        $query->where('No_P_defects','=','""')
        ->orWhere('No_P_defects','!=','""');
      })->get();

      return view('pages.approved',['consulta'=>$consulta]);
    }

    public function Paso3_Approved(){
      $consulta=DB::table('proyect')
      ->join('phases','proyect.Id_Proyecto','=','phases.Id_Fk_proyect')
      ->select('Id_Proyecto','No_P_defects','Product','Customer','employee','Fecha_F','estado')
      ->Where('estado','=',3)
      ->where(function ($query){
        $query->where('No_P_defects','=','""')
        ->orWhere('No_P_defects','!=','""');
      })->get();
      return view('pages.approved',['consulta'=>$consulta]);
    }

    public function Paso3_finalview(Request $request){
      $consulta=DB::table('proyect')
      ->select('Id_Proyecto','Customer','Product','employee','Fecha_I','Fecha_F')
      ->where('Id_Proyecto','=',$request->ID)->get();
      $consulta_result=json_decode($consulta, true);
      $consulta_general=DB::table('phases')->where('Id_Fk_proyect','=',$request->ID)->get();
      $consulta_g=json_decode($consulta_general);
      $consulta_app=DB::table('approval')->where('Id_Fk_proyect','=',$request->ID)->get();
      $consulta_a=json_decode($consulta_app);
      return view('pages.view_final_details',['consulta'=>$consulta_result,'Id_P'=>$request->ID,'resultproducto'=>$consulta_g,'quality'=>$consulta_a]);
    }

    public function ViewPdf(Request $request){
      $consulta=DB::table('proyect')->where('Id_Proyecto','=',$request->ID)->get();
      $consulta_P=json_decode($consulta);
      $consulta_general=DB::table('phases')->where('Id_Fk_proyect','=',$request->ID)->get();
      $consulta_PH=json_decode($consulta_general);
      $consulta_app=DB::table('approval')->where('Id_Fk_proyect','=',$request->ID)->get();
      $consulta_A=json_decode($consulta_app);
      $pdf = \PDF::loadView('pages.pdf_view',compact('consulta_P','consulta_PH','consulta_A'));
      return $pdf->stream('pages.pdf_view.pdf');
      //return $pdf->download('pages.pdf_view.pdf');
    }

    public function ErrorModal(Request $request){
      $consulta_general=DB::table('phases')->where('Id_Fk_proyect','=',$request->id)->get();
      $consulta_g=json_decode($consulta_general);
      return ($consulta_g);
    }

  }
