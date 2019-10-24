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

  public function Paso1(){
    $consulta=DB::table('proyect')->select('Id_Proyecto','Customer','Product','employee','Fecha_I','Fecha_F','estado')->where('estado','=',1)->get();
    return view('pages.project_info',['consulta'=>$consulta]);
  }

  public function Paso1_Create(){
    return view('pages.create_project');
  }

public function DeletProject(Request $request){
DB::table('proyect')->where('Id_Proyecto','=',$request->ID)->delete();
$consulta=DB::table('proyect')->select('Id_Proyecto','Customer','Product','employee','Fecha_I','Fecha_F','estado')->where('estado','=',1)->get();
return view('pages.project_info',['consulta'=>$consulta]);
}

  public function Paso1_add(Request $request){
    $fech=date('Y-m-d');
    $timestamp = strtotime($request->fecha);
    $fechaFinal=date('Y-m-d', $timestamp);
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
        'P_Materials_Used'=>"$request->P_Materials",
        'Yes_hours'=>"$request->Yes_hours",
        'Yes_P_approved'=>"$request->Yes_P_approved",
        'No_P_defects'=>"$request->No_P_defects",
        'No_P_Repairs'=>"$request->No_P_Repairs",
        'No_P_Date'=>"$request->No_P_Date",
        'P_No_approved'=>"$request->No_P_approved",
        'F_Team_Involved'=>"$request->F_Team_Involved",
        'F_Materials_Used'=>"$request->F_Materials",
        'F_Yes_hours'=>"$request->F_Yes_hours",
        'F_Yes_P_approved'=>"$request->F_Yes_P_approved",
        'F_No_P_defects'=>"$request->F_No_P_defects",
        'F_No_P_Repairs'=>"$request->F_No_P_Repairs",
        'F_No_P_Date'=>"$request->F_No_P_Date",
        'F_No_approved'=>"$request->F_No_approved",
        'A_Team_Involved'=>"$request->A_Team_Involved",
        'A_Materials_Used'=>"$request->A_Materials",
        'A_Yes_P_hours'=>"$request->A_Yes_hours",
        'A_Yes_P_approved'=>"$request->A_Yes_P_approved",
        'A_No_P_defects'=>"$request->A_No_P_defects",
        'A_No_P_Repairs'=>"$request->A_No_P_Repairs",
        'A_No_P_Date'=>"$request->A_No_P_Date",
        'A_No_approved'=>"$request->A_No_approved",
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
        'P_Materials_Used'=>"$request->P_Materials",
        'Yes_hours'=>"$request->Yes_hours",
        'Yes_P_approved'=>"$request->Yes_P_approved",
        'No_P_defects'=>"$request->No_P_defects",
        'No_P_Repairs'=>"$request->No_P_Repairs",
        'No_P_Date'=>"$request->No_P_Date",
        'P_No_approved'=>"$request->No_P_approved",
        'F_Team_Involved'=>"$request->F_Team_Involved",
        'F_Materials_Used'=>"$request->F_Materials",
        'F_Yes_hours'=>"$request->F_Yes_hours",
        'F_Yes_P_approved'=>"$request->F_Yes_approved",
        'F_No_P_defects'=>"$request->F_No_P_defects",
        'F_No_P_Repairs'=>"$request->F_No_P_Repairs",
        'F_No_P_Date'=>"$request->F_No_P_Date",
        'F_No_approved'=>"$request->F_No_approved",
        'A_Team_Involved'=>"$request->A_Team_Involved",
        'A_Materials_Used'=>"$request->A_Materials",
        'A_Yes_P_hours'=>"$request->A_Yes_P_hours",
        'A_Yes_P_approved'=>"$request->A_Yes_P_approved",
        'A_No_P_defects'=>"$request->A_No_P_defects",
        'A_No_P_Repairs'=>"$request->A_No_P_Repairs",
        'A_No_approved'=>"$request->A_No_approved",
        'A_No_P_Date'=>"$request->A_No_P_Date"
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
      $consulta=DB::table('proyect')
      ->join('phases','proyect.Id_Proyecto','=','phases.Id_Fk_proyect')
      ->select('Id_Proyecto','No_P_defects','F_No_P_defects','A_No_P_defects','Product','Customer','employee','Fecha_F','estado')
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
      ->select('Id_Proyecto','No_P_defects','F_No_P_defects','A_No_P_defects','Product','Customer','employee','Fecha_F','estado')
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
      //return $pdf->stream('pages.pdf_view.pdf');
      return $pdf->download('pages.pdf_view.pdf');
    }

    public function ErrorModal(Request $request){
      $consulta_general=DB::table('phases')->select('*')->where('Id_Fk_proyect','=',$request->id)->get();
      $consulta_g=json_decode($consulta_general);
      return ($consulta_g);
    }

    public function InformeError(){
      return view('pages.informe_errores');
    }

    public function ConsultaFecha(Request $request){
      $respuest1=$request->fecha1;
      $respuest2=$request->fecha2;
      $consulta1=DB::select('call InformeErrorP("'.$respuest1.'","'.$respuest2.'")');
      $consulta2=DB::select('call InformeErrorF("'.$respuest1.'","'.$respuest2.'")');
      $consulta3=DB::select('call InformeErrorA("'.$respuest1.'","'.$respuest2.'")');
      $consulta=['errorP'=>$consulta1,'errorF'=>$consulta2,'errorA'=>$consulta3];
      return($consulta);
    }

    public function ViewPdfError(Request $request){
      $respuest1=$request->fecha1;
      $respuest2=$request->fecha2;
      $consulta1=DB::select('call InformeErrorP("'.$respuest1.'","'.$respuest2.'")');
      $consulta2=DB::select('call InformeErrorF("'.$respuest1.'","'.$respuest2.'")');
      $consulta3=DB::select('call InformeErrorA("'.$respuest1.'","'.$respuest2.'")');
      $consulta=['errorP'=>$consulta1,'errorF'=>$consulta2,'errorA'=>$consulta3];
      $pdf = \PDF::loadView('pages.pdf_error',compact('consulta','respuest1','respuest2'));
      //return $pdf->stream('pages.pdf_error.pdf');
      return $pdf->download('pages.pdf_error.pdf');
    }

  }
