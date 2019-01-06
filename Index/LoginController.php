<?php 
// require_once("../Config.Files/Config.php/Main.Config.php");


//         if($_GET['FuncLoginUser']){
//                 // file_get_contents("php://input"); 
//             $UserName = $_POST['UserName'];
//             $Password = $_POST['Password'];
        
//             $LoginQuery = "SELECT $DBTotalDataArray FROM useraccounts WHERE userName = ? && password = ?";

//             if($LoginCheckstmt = $DBConnection->prepare($LoginQuery)){
//                 $LoginCheckstmt->bind_param('ss', $UserName, $Password);
//                 $LoginCheckstmt->execute();
//                 $LoginCheckstmt->store_result();
//                 $rows = $LoginCheckstmt->num_rows;


//                     if($rows != 0){
//                         mysqli_stmt_bind_result($LoginCheckstmt, 
//                             $SchemeID, 
//                             $SchemeUserName, 
//                             $SchemePassword, 
//                             $SchemeFirstName, 
//                             $SchemeLastName, 
//                             $SchemeCanUpload, 
//                             $SchemeCanDownload, 
//                             $SchemeIsAdmin, 
//                             $SchemeIsBanned, 
//                             $SchemePowerBan, 
//                             $SchemePowerAddUser, 
//                             $SchemePowerGiveAdmin, 
//                             $SchemePowerDeleteAdmin, 
//                             $SchemePowerDeleteUser, 
//                             $SchemePowerDeleteData, 
//                             $SchemePowerEditData
//                         );

//                         mysqli_stmt_fetch($LoginCheckstmt);//Has to come after above bind result ^^^
//                             $data = new stdclass();
//                             $data->LoggedIn = true;
//                             $data->userID = $SchemeID;
//                             $data->userName = $SchemeUserName;
//                             $data->password = $SchemePassword;
//                             $data->firstName = $SchemeFirstName;
//                             $data->lastName = $SchemeLastName;
//                             $data->canUpload = $SchemeCanUpload;
//                             $data->canDownload = $SchemeCanDownload;
//                             $data->isAdmin = $SchemeIsAdmin;
//                             $data->isBanned = $SchemeIsBanned;
//                             $data->powerBan = $SchemePowerBan;
//                             $data->powerAddUser = $SchemePowerAddUser;
//                             $data->powerGiveAdmin = $SchemePowerGiveAdmin;
//                             $data->powerDeleteAdmin = $SchemePowerDeleteAdmin;
//                             $data->powerDeleteUser = $SchemePowerDeleteUser;
//                             $data->powerDeleteData = $SchemePowerDeleteData;
//                             $data->powerEditData = $SchemePowerEditData;
//                                 echo json_encode($data);   

//                     }
                    
//                     else{ 
//                         $data = new stdclass();
//                         $data->LoggedIn = false;
//                             echo json_encode($data);
                    
//                     }
//             }
//         }

// class LoginSystem{

//     function LoginUser(){
//         echo " Made it to php file";
//     }


// }

// $Login = new LoginSystem();


?>