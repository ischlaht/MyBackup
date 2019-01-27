    <?php
        function reDirIndex(){
        if(!isset($_COOKIE['UserName']) && !isset($_SESSION['UserName'])){
				header('location: ../Index/Index.php');
        }
	}
    reDirIndex();

        require_once("../Components/Statik/Header/Header.php");
        // require_once("./AdminController.php");
    ?>


<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./AdminSystem.css"/>    
    <script type="text/javascript" src="./AdminController.js"></script>



    </head>





    <body>
        <div id="AdminSystem">
            <div ng-controller="EditAdmins">
                <ul class="collapsible">
                    <li>
                        <div class="collapsible-header"><i class="material-icons">assignment_ind</i>My Account</div>
                        
                        <div class="collapsible-body">
            <button ng-click="init();">clclclclc</button>
                            <!-- <tr ng-repeat="x in UserId"> -->
                            <span>userId : {{Records.UserID}}</span>
                        <!-- </tr> -->
                       
                        </div>
                    </li>




                    <!-- <li class="active"> -->
                    <li>
                        <div class="collapsible-header"><i class="material-icons">assignment</i>Register a new Account or Admin</div>
                        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>



                    <li>
                        <div class="collapsible-header"><i class="material-icons">whatshot</i>Edit Admins</div>
                        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                </ul>

                
                
            </div>
        </div>
            <!-- <button ng-click="clicked();">clclclclc</button> -->
    </body>







<script>
// var AdminSystem = angular.module('AdminSystemOne', ['ngSanitize'])
// AdminSystem.controller('EditAdmins', ['$scope', '$http', function ($scope, $http) {
//     $scope.clicked = function(){
//      alert('testig angular configgggggggggggggggggggggggggg');
//     }
    
// }]); // End of Login System and Controller...

// $('#AdminSystem').ready( function () {
//   angular.bootstrap($('#AdminSystem'), ['AdminSystemOne'])
// });

</script>



</html>