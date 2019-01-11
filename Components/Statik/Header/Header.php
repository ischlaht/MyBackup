


<html>
    <head>
        <?php
            require_once('../Config.Files/Config.php/API.CDN.Config.php');
            require_once('HeaderController.php');
            ?>

            <!-- Linnk files css, java script ect for globals -->
            <link rel="stylesheet" type="text/css" href="../Components/Statik/Header/Header.css"/>
            <link rel="stylesheet" type="text/css" href="../Config.Files/Config.css/Global.Classes.css"/>

    </head>



    <body>
        <?php
            require('../Components/Statik/SideNav/SideNav.php');
        ?>

        <div id="header">
            <div id="headerTitle" class="">Back-Up Server</div>

            <form method="POST" action="#">
                <button id="logOut_btn" name="LogOut" class="boxShadow">Logout</input>
            </form>
        
        </div><!-- End of 'Header'-->

<style>


</style>

        <script>
// var HeaderSystem = angular.module("HeaderSystem", ['ngSanitize', 'HeaderSystem']);
// 			LoginSystem.controller('LoginUser', ['$scope', '$http', '$cookies', function ($scope, $http, $cookies) {}]);




        </script>

    </body>
</html>