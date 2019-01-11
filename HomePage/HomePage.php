<?php
function redirection(){
    if(isset($_COOKIE['LoggedIn'])){
        if($_COOKIE['LoggedIn'] == true){
            echo "Welcome" .$_COOKIE['UserName']. " to your account cookie!";
        }
    }
    elseif(isset($_SESSION['LoggedIn'])){
        if($_SESSION['LoggedIn'] == true){
            echo "Welcome" .$_SESSION['UserName']. " to your account session!";
        }
    }
    else{
        header('location: ../Index/Index.php');
        echo "Else on redirection function";

    }

}
// echo $_SESSION['UserName'];
redirection();

?>



<html lang="en">
    <head>
        <?php
	        require_once('../Components/Statik/Header/Header.php');
        ?>
    </head>





    <body>
        <div id="HomePage" ng-controller="Home">
        <input type="button" id="button" ng-click="clicked()"/>
        
        </div>
    </body>


<script>
var HomePage = angular.module('HomePage', ['ngSanitize', 'ngCookies'])
HomePage.controller('Home', ['$scope', '$http', '$cookies', function ($scope, $http, $cookies) {
    $scope.clicked = function(){
        <?php
        alert($_COOKIE['UserName'])
        ?>
    }
    
}]); // End of Login System and Controller...
$('#HomePage').ready(function () {
  angular.bootstrap($('#HomePage'), ['HomePage'])
})

</script>







</html>..