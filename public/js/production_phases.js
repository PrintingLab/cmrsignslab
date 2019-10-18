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
  $scope.arrary=[];
  $scope.ErrorView=function(id){
    $.ajax({
      url:'ErrorConsult',
      type:'post',
      data: {id:id},
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success:function(data){
        $scope.arrary=data
        $scope.No_P_defects=$scope.arrary[0].No_P_defects
        $scope.No_P_Repairs=$scope.arrary[0].No_P_Repairs
        $scope.No_P_Date=$scope.arrary[0].No_P_Date
        $scope.$apply()
        $("#exampleModal").modal();
      },
      error:function(){
      }
    })
  }

  $scope.arrayFecha=[]

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
        $scope.arrayFecha=data
        $scope.$apply();
        console.log($scope.arrayFecha);
      },
      error:function(){
      }
    })
  }


})
