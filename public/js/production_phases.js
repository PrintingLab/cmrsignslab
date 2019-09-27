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


})
