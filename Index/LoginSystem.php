<?php
    require_once("../Config.Files/Config.php/Main.Config.php");
    
    // ERR is displayed o login screen
    $ERR = "";
    $serverError = false;

    // function reDir(){
    //     if(isset($_COOKIE['LoggedIn'])){
	// 			if($_COOKIE['LoggedIn'] == true){
	// 				header('location: ../HomePage/HomePage.php');
	// 			}
	// 		}
	// 		elseif(isset($_SESSION['LoggedIn'])){
	// 			if($_SESSION['LoggedIn'] == true){
	// 				header('location: ../HomePage/HomePage.php');
	// 			}
	// 		}
    // }
// -------------------------------------------------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------------------------------------------------

    if(isset($_POST['LoginUser'])){
        $UserName = $_POST['UserName'];
        $Password = $_POST['Password'];


            if (!preg_match('/^[a-zA-Z0-9]+$/', $UserName)){
                $ERR = "Invalid Username or Password characters.";
                $serverError = true;
            }

            elseif (!preg_match('/^[a-zA-Z0-9]+$/', $Password)){
                $ERR = "Invalid Username or Password characters.";
                $serverError = true;
            }


            elseif($serverError == false){


                $LoginQuery = "SELECT $DBTotalDataArray FROM useraccounts WHERE userName = ? && password = ?";

                    if($LoginCheckstmt = $DBConnection->prepare($LoginQuery)){
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

                                mysqli_stmt_fetch($LoginCheckstmt);//Has to come after above bind result ^^^
                                    // $LoggedIn = 'true';
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


                                        if(!empty($_POST['RememberMe'])){
                                        
                                            setcookie('LoggedIn',           true,               time() + 60*60*24*365*50, '/', $Cookie, false);
                                            setcookie('UserID',             $userID,            time() + 60*60*24*365*50, '/', $Cookie, false);
                                            setcookie('UserName',           $userName,          time() + 60*60*24*365*50, '/', $Cookie, false);
                                            setcookie('Password',           $password,          time() + 60*60*24*365*50, '/', $Cookie, false);
                                            setcookie('Firstname',          $firstName,         time() + 60*60*24*365*50, '/', $Cookie, false);
                                            setcookie('lastNames',          $lastName,          time() + 60*60*24*365*50, '/', $Cookie, false);
                                            setcookie('CanUpload',          $canUpload,         time() + 60*60*24*365*50, '/', $Cookie, false);
                                            setcookie('CanDownload',        $canDownload,       time() + 60*60*24*365*50, '/', $Cookie, false);
                                            setcookie('IsAdmin',            $isAdmin,           time() + 60*60*24*365*50, '/', $Cookie, false);
                                            setcookie('IsBanned',           $isBanned,          time() + 60*60*24*365*50, '/', $Cookie, false);
                                            setcookie('PowerBan',           $powerBan,          time() + 60*60*24*365*50, '/', $Cookie, false);
                                            setcookie('PowerAddUser',       $powerAddUser,      time() + 60*60*24*365*50, '/', $Cookie, false);
                                            setcookie('PowerGiveAdmin',     $powerGiveAdmin,    time() + 60*60*24*365*50, '/', $Cookie, false);
                                            setcookie('PowerDeleteAdmin',   $powerDeleteAdmin,  time() + 60*60*24*365*50, '/', $Cookie, false);
                                            setcookie('PowerDeleteUser',    $powerDeleteUser,   time() + 60*60*24*365*50, '/', $Cookie, false);
                                            setcookie('PowerDeleteData',    $powerDeleteData,   time() + 60*60*24*365*50, '/', $Cookie, false);
                                            setcookie('PowerEditData',      $powerEditData,     time() + 60*60*24*365*50, '/', $Cookie, false);
                                                header('location: ../HomePage/HomePage.php');
                                        }

                                        elseif(empty($_POST['RememberMe'])){
                                                        
                                            $_SESSION['LoggedIn'] = true;
                                            $_SESSION['UserID'] = $userID;
                                            $_SESSION['UserName'] = $userName;
                                            $_SESSION['Password'] = $password;
                                            $_SESSION['FirstName'] = $firstName;
                                            $_SESSION['LastName'] = $lastName;
                                            $_SESSION['CanUpload'] = $canUpload;
                                            $_SESSION['CanDownload'] = $canDownload;
                                            $_SESSION['IsAdmin'] = $isAdmin;
                                            $_SESSION['IsBanned'] = $isBanned;
                                            $_SESSION['PowerBan'] = $powerBan;
                                            $_SESSION['PowerAddUser'] = $powerAddUser;
                                            $_SESSION['PowerGiveAdmin'] = $powerGiveAdmin;
                                            $_SESSION['PowerDeleteAdmin'] = $powerDeleteAdmin;
                                            $_SESSION['PowerDeleteUser'] = $powerDeleteUser;
                                            $_SESSION['PowerDeleteData'] = $powerDeleteData;
                                            $_SESSION['PowerEditData'] = $powerEditData;
                                                header('location: ../HomePage/HomePage.php');
                                            
                                        }
                                        
                            }
                            else{
                                $ERR = "Wrong username/password!";

                                setcookie('LoggedIn', false, time() + 60*60*24*365*50, '/', $Cookie, false);
                                $_SESSION['LoggedIn'] = false;
                            }

                    }
            }
    }

// -------------------------------------------------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------------------------------------------------



?>