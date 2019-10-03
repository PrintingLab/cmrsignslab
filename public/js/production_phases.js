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


})
