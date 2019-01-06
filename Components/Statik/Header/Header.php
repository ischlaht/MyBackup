<?php
    if(isset($_POST['LogOut'])){
        if(isset($_COOKIE['LoggedIn']) || isset($_SESSION['LoggedIn'])){
            if(isset($_COOKIE['LoggedIn']) && $_COOKIE['LoggedIn'] == true){
                // $Cookie = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : false;

                setcookie('LoggedIn',           "", time() - 60, '/');
                setcookie('UserID',             "", time() - 60, '/');
                setcookie('UserName',           "", time() - 60, '/');
                setcookie('Password',           "", time() - 60, '/');
                setcookie('Firstname',          "", time() - 60, '/');
                setcookie('lastNames',          "", time() - 60, '/');
                setcookie('CanUpload',          "", time() - 60, '/');
                setcookie('CanDownload',        "", time() - 60, '/');
                setcookie('IsAdmin',            "", time() - 60, '/');
                setcookie('IsBanned',           "", time() - 60, '/');
                setcookie('PowerBan',           "", time() - 60, '/');
                setcookie('PowerAddUser',       "", time() - 60, '/');
                setcookie('PowerGiveAdmin',     "", time() - 60, '/');
                setcookie('PowerDeleteAdmin',   "", time() - 60, '/');
                setcookie('PowerDeleteUser',    "", time() - 60, '/');
                setcookie('PowerDeleteData',    "", time() - 60, '/');
                setcookie('PowerEditData',      "", time() - 60, '/');
                header('location: ../Index/Index.php');
                echo "deleted cookie";

            }
            else{
                    session_unset();
                    session_destroy();
                header('location: ../Index/Index.php');
                    echo "Destroyed session";

            }
        }
        else{
            echo "";
        }
    }

?>





<html>
    <head>
        <?php
            require('../Config.Files/Config.php/API.CDN.Config.php');
            ?>
            <link rel="stylesheet" type="text/css" href="../Components/Statik/Header/Header.css"/>
    </head>



    <body>
        <?php
            require('../Components/Statik/SideNav/SideNav.php');
        ?>

        <div id="header">
            <div id="headerTitle" class="">Back-Up Server</div>

            <form method="POST" action="#">
                <button id="logOut_btn" name="LogOut">Logout</input>
            </form>
        
        </div><!-- End of 'Header'-->

<style>

#logOut_btn{
    color: green;
    background-color: blue;
    margin-left: 400px;
}

</style>

        <script>
// var HeaderSystem = angular.module("HeaderSystem", ['ngSanitize', 'HeaderSystem']);
// 			LoginSystem.controller('LoginUser', ['$scope', '$http', '$cookies', function ($scope, $http, $cookies) {}]);









        </script>

    </body>
</html>