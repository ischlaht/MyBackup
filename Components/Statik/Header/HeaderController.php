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

            }
            else{
                    session_unset();
                    session_destroy();
                header('location: ../Index/Index.php');

            }
        }
        else{
            // echo "";
        }
    }

?>