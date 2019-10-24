//var Appadmin = angular.module('proyect',[]);
Appadmin.controller('ProjectInfo',function($scope,$http){

  $scope.yesForm=true
  $scope.noForm=true
  $scope.radioform =function(i){
    console.log(i)
    if (i=="yes") {
      $scope.yesForm=false
      $scope.noForm=true
    }else{
      $scope.yesForm=true
      $scope.noForm=false
    }
  }

  $scope.F_yesForm=true
  $scope.F_noForm=true
  $scope.F_radioform =function(i){
    console.log(i)
    if (i=="yes") {
      $scope.F_yesForm=false
      $scope.F_noForm=true
    }else{
      $scope.F_yesForm=true
      $scope.F_noForm=false
    }
  }

  $scope.A_yesForm=true
  $scope.A_noForm=true
  $scope.A_radioform =function(i){
    console.log(i)
    if (i=="yes") {
      $scope.A_yesForm=false
      $scope.A_noForm=true
    }else{
      $scope.A_yesForm=true
      $scope.A_noForm=false
    }
  }
  //$scope.arrary=[];

  $scope.ErrorView=function(id){
    $scope.production_M_model=true
    $scope.fabrication_M_model=true
    $scope.assembling_M_model=true

    $.ajax({
      url:'ErrorConsult',
      type:'post',
      data: {id:id},
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success:function(data){
        $("#exampleModal").modal();
        $scope.arrary=[];
        $scope.arrary=data
        //  console.log($scope.arrary[0]);

        $scope.M_No_P_defects=$scope.arrary[0].No_P_defects;
        $scope.M_No_P_Repairs=$scope.arrary[0].No_P_Repairs;
        $scope.M_No_P_Date=$scope.arrary[0].No_P_Date;
        $scope.M_No_P_approved=$scope.arrary[0].P_No_approved;

        $scope.M_No_f_defects_f=$scope.arrary[0].F_No_P_defects;
        $scope.M_No_F_Repairs=$scope.arrary[0].F_No_P_Repairs;
        $scope.M_No_F_Date_F=$scope.arrary[0].F_No_P_Date;
        $scope.M_No_F_approved=$scope.arrary[0].F_No_approved;

        $scope.M_No_A_defects=$scope.arrary[0].A_No_P_defects;
        $scope.M_No_A_Repairs=$scope.arrary[0].A_No_P_Repairs;
        $scope.M_No_A_Date=$scope.arrary[0].A_No_P_Date;
        $scope.M_No_A_approved=$scope.arrary[0].A_No_approved;

        if ($scope.M_No_P_defects !="" || $scope.M_No_P_Repairs !="") {
          $scope.production_M_model=false
        }
        if ($scope.M_No_f_defects_f !="" || $scope.M_No_F_Repairs !="") {
          $scope.fabrication_M_model=false
        }
        if ($scope.M_No_A_defects !="" || $scope.M_No_A_Repairs !="") {
          $scope.assembling_M_model=false
        }


        $scope.$apply()


      },
      error:function(){
      }
    })
  }

  $scope.arrayFecha=[]
  $scope.arrayP=[]
  $scope.arrayF=[]
  $scope.arrayA=[]
  $scope.ConsultaFecha=function(){
    $scope.f1=$("#datepicker1").val();
    $scope.f2=$("#datepicker2").val();
    $.ajax({
      url:'ConsultaFecha',
      type:'post',
      data: {fecha1:$scope.f1,fecha2:$scope.f2},
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success:function(data){
        console.log(data.errorA);
        /*
        $scope.arrayFecha=data
        $scope.$apply();
        console.log($scope.arrayFecha);
        */
        $scope.arrayP=data.errorP
        $scope.arrayF=data.errorF
        $scope.arrayA=data.errorA
        $scope.$apply();
      },
      error:function(){
      }
    })
  }


})
