Appadmin.controller('formsignage',function($scope,$http){

  $scope.form_1=true
  $scope.form_2=true
  $scope.form_3=true
  $scope.form_4=true
  $scope.form_5=true
  $scope.form_6=true
  $scope.form_7=true
  $scope.form_8=true
  $scope.form_9=true
  $scope.btn_remove=true
  var contador=0;
  var btnremove=0;

  $scope.addform=function(){
    contador=contador+1;
    if (contador<=9) {
      $scope.btn_remove=false
      switch (contador) {
        case 1:
        $scope.form_1=false
        $scope.spec1=1
        break;
        case 2:
        $scope.form_2=false
        break;
        case 3:
        $scope.form_3=false
        break;
        case 4:
        $scope.form_4=false
        break;
        case 5:
        $scope.form_5=false
        break;
        case 6:
        $scope.form_6=false
        break;
        case 7:
        $scope.form_7=false
        break;
        case 8:
        $scope.form_8=false
        break;
        case 9:
        $scope.form_9=false
        break;
        //default:
      }
    }else{
      contador=9;
      alert('ha excedido el limite')
    }
  }

  $scope.removeform=function(){
    switch (contador) {
      case 1:
      $scope.form_1=true
       $('input[name="exampleRadios1"]').prop('checked', false);
       $('input[name="Width1"]').val('');
       $('input[name="Hight1"]').val('');
       $('textarea[name="text_area1"]').val('');
      break;
      case 2:
      $scope.form_2=true
      $('input[name="exampleRadios2"]').prop('checked', false);
      $('input[name="Width2"]').val('');
      $('input[name="Hight2"]').val('');
      $('textarea[name="text_area2"]').val('');
      break;
      case 3:
      $scope.form_3=true
      $('input[name="exampleRadios3"]').prop('checked', false);
      $('input[name="Width3"]').val('');
      $('input[name="Hight3"]').val('');
      $('textarea[name="text_area3"]').val('');
      break;
      case 4:
      $scope.form_4=true
      $('input[name="exampleRadios4"]').prop('checked', false);
      $('input[name="Width4"]').val('');
      $('input[name="Hight4"]').val('');
      $('textarea[name="text_area4"]').val('');
      break;
      case 5:
      $scope.form_5=true
      $('input[name="exampleRadios5"]').prop('checked', false);
      $('input[name="Width5"]').val('');
      $('input[name="Hight5"]').val('');
      $('textarea[name="text_area5"]').val('');
      break;
      case 6:
      $scope.form_6=true
      $('input[name="exampleRadios6"]').prop('checked', false);
      $('input[name="Width6"]').val('');
      $('input[name="Hight6"]').val('');
      $('textarea[name="text_area6"]').val('');
      break;
      case 7:
      $scope.form_7=true
      $('input[name="exampleRadios7"]').prop('checked', false);
      $('input[name="Width7"]').val('');
      $('input[name="Hight7"]').val('');
      $('textarea[name="text_area7"]').val('');
      break;
      case 8:
      $scope.form_8=true
      $('input[name="exampleRadios8"]').prop('checked', false);
      $('input[name="Width8"]').val('');
      $('input[name="Hight8"]').val('');
      $('textarea[name="text_area8"]').val('');
      break;
      case 9:
      $scope.form_9=true
      $('input[name="exampleRadios9"]').prop('checked', false);
      $('input[name="Width9"]').val('');
      $('input[name="Hight9"]').val('');
      $('textarea[name="text_area9"]').val('');
      break;
      //default:
    }
    contador=contador-1;
    if (contador==0) {
      $scope.btn_remove=true
    }
  }

})
