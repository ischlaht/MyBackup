

<?php
    require_once('HeaderController.php'); 
    require_once('../Config.Files/Config.php/API.CDN.Config.php');
?>
      
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="../Components/Statik/Header/Header.css"/>
        <link rel="stylesheet" type="text/css" href="../Config.Files/Config.css/Global.Classes.css"/>
    </head>


    <body>
        <?php
            require_once('../Components/Statik/SideNav/SideNav.php');
        ?>

        <div id="header">
            <div id="headerTitle" class="Hrsfrt">Back-Up Server</div>

            <form method="POST" action="#">
                <button id="logOut_btn" name="LogOut" class="boxShadow">Logout</input>
            </form>
        
        </div><!-- End of 'Header'-->


        <script>
    // var HeaderSystem = angular.module("HeaderSystem", ['ngSanitize', 'HeaderSystem']);
    // 			LoginSystem.controller('LoginUser', ['$scope', '$http', '$cookies', function ($scope, $http, $cookies) {}]);

        </script>

    </body>
</html>