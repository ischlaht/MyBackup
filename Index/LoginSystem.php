<?php
    //Code and programming created, developed, and all rights owned by Isaac Schlaht @ King Systems Development.
    
    require_once("../Config.Files/Config.php/Main.Config.php");//Server Config file
// -------------------------------------------------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------------------------------------------------

    // Error Handlers
    $ERR = ""; // ERR is displayed to user on login screen
    $serverError = false;//Used to stop from loging in if error occurs


// if(isset($_POST['UserName']) && isset($_POST['Password'])){
    $UserName = '';
    $Password = '';
// }

// -------------------------------------------------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------------------------------------------------

    if(isset($_POST['LoginUser'])){

        $UserName = $_POST['UserName'];
        $Password = $_POST['Password'];


            if (!preg_match('/^[a-zA-Z0-9]+$/', $UserName)){
                $ERR = "Invalid Username or Password character(s).";
                $serverError = true;
            }
            

            elseif (!preg_match('/^[a-zA-Z0-9]+$/', $Password)){
                $ERR = "Invalid Username or Password character(s).";
                $serverError = true;
            }

            
            elseif($serverError == false){
                $LoginQuery = "SELECT $DBTotalDataArray FROM useraccounts WHERE userName = ? && password = ?";

                    if($LoginCheckstmt = $GLOBALS['DBConnection']->prepare($LoginQuery)){
                        $LoginCheckstmt->bind_param('ss', $UserName, $Password);
                        $LoginCheckstmt->execute();
                        $LoginCheckstmt->store_result();
                        $rows = $LoginCheckstmt->num_rows;

                            if($rows != 0){
                                mysqli_stmt_bind_result($LoginCheckstmt, 
                                    $SchemeID, 
                                    $SchemeUserName, 
                                    $SchemePassword, 
                                    $SchemeFirstName, 
                                    $SchemeLastName, 
                                    $SchemeCanUpload, 
                                    $SchemeCanDownload, 
                                    $SchemeIsAdmin, 
                                    $SchemeIsBanned, 
                                    $SchemePowerBan, 
                                    $SchemePowerAddUser, 
                                    $SchemePowerGiveAdmin, 
                                    $SchemePowerDeleteAdmin, 
                                    $SchemePowerDeleteUser, 
                                    $SchemePowerDeleteData,
                                    $SchemePowerEditData
                                );

                                mysqli_stmt_fetch($LoginCheckstmt);//Has to come after bind result above^^^
                                    $userID = $SchemeID;
                                    $userName = $SchemeUserName;
                                    $password = $SchemePassword;
                                    $firstName = $SchemeFirstName;
                                    $lastName = $SchemeLastName;
                                    $canUpload = $SchemeCanUpload;
                                    $canDownload = $SchemeCanDownload;
                                    $isAdmin = $SchemeIsAdmin;
                                    $isBanned = $SchemeIsBanned;
                                    $powerBan = $SchemePowerBan;
                                    $powerAddUser = $SchemePowerAddUser;
                                    $powerGiveAdmin = $SchemePowerGiveAdmin;
                                    $powerDeleteAdmin = $SchemePowerDeleteAdmin;
                                    $powerDeleteUser = $SchemePowerDeleteUser;
                                    $powerDeleteData = $SchemePowerDeleteData;
                                    $powerEditData = $SchemePowerEditData;

                                        if($isBanned == 'false'){ //Check to see if user is banned or not
                                            
                                            if(!empty($_POST['RememberMe'])){
                                                setcookie('LoggedIn',           true,               time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('UserID',             $userID,            time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('UserName',           $userName,          time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('Password',           true,               time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('FirstName',          $firstName,         time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('LastName',           $lastName,          time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('CanUpload',          $canUpload,         time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('CanDownload',        $canDownload,       time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('IsAdmin',            $isAdmin,           time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('IsBanned',           $isBanned,          time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('PowerBan',           $powerBan,          time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('PowerAddUser',       $powerAddUser,      time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('PowerGiveAdmin',     $powerGiveAdmin,    time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('PowerDeleteAdmin',   $powerDeleteAdmin,  time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('PowerDeleteUser',    $powerDeleteUser,   time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('PowerDeleteData',    $powerDeleteData,   time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('PowerEditData',      $powerEditData,     time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                    header('location: ../HomePage/HomePage.php');
                                            }
                                            
                                            elseif(empty($_POST['RememberMe'])){
                                                $_SESSION['LoggedIn']         = true;
                                                $_SESSION['UserID']           = $userID;
                                                $_SESSION['UserName']         = $userName;
                                                $_SESSION['Password']         = true;
                                                $_SESSION['FirstName']        = $firstName;
                                                $_SESSION['LastName']         = $lastName;
                                                $_SESSION['CanUpload']        = $canUpload;
                                                $_SESSION['CanDownload']      = $canDownload;
                                                $_SESSION['IsAdmin']          = $isAdmin;
                                                $_SESSION['IsBanned']         = $isBanned;
                                                $_SESSION['PowerBan']         = $powerBan;
                                                $_SESSION['PowerAddUser']     = $powerAddUser;
                                                $_SESSION['PowerGiveAdmin']   = $powerGiveAdmin;
                                                $_SESSION['PowerDeleteAdmin'] = $powerDeleteAdmin;
                                                $_SESSION['PowerDeleteUser']  = $powerDeleteUser;
                                                $_SESSION['PowerDeleteData']  = $powerDeleteData;
                                                $_SESSION['PowerEditData']    = $powerEditData;
                                                    header('location: ../HomePage/HomePage.php');
                                            }
                                        }

                                        else{ 
                                            $ERR = "You have been banned, contact an admin for further assistance.";
                                        }
                            }

                            else{
                                $ERR = "Wrong Username/Password!";

                                setcookie('LoggedIn', false, time() + 60*60*24*365, '/', $Cookie, false);
                                setcookie('Password', false,  time() + 60*60*24*365, '/', $Cookie, false);
                                $_SESSION['LoggedIn'] = false;
                                $_SESSION['Password'] = false;
                            }
                    }

                    else{ 
                        echo "<script>alert('[Server Error --> Prepared Stmt Failed {Code: LS30}] Contact King Systems Development(307-321-6559), for assistance!');</script>";
                    }
            }
    }
?>