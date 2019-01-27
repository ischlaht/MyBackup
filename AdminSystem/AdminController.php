<?php 

if(isset($_GET['VariableSetter'])){

    if(isset($_COOKIE['UserName'])){
        $userID = $_COOKIE['UserID'];
        $userName = $_COOKIE['UserName'];
        $firstName = $_COOKIE['FirstName'];
        $lastName = $_COOKIE['LastName'];
        $canUpload = $_COOKIE['CanUpload'];
        $canDownload = $_COOKIE['CanDownload'];
        $isAdmin = $_COOKIE['IsAdmin'];
        $isBanned = $_COOKIE['IsBanned'];
        $powerBan = $_COOKIE['PowerBan'];
        $powerAddUser = $_COOKIE['PowerAddUser'];
        $powerGiveAdmin = $_COOKIE['PowerGiveAdmin'];
        $powerDeleteAdmin = $_COOKIE['PowerDeleteAdmin'];
        $powerDeleteUser = $_COOKIE['PowerDeleteUser'];
        $powerDeleteData = $_COOKIE['PowerDeleteData'];
        $powerEditData = $_COOKIE['PowerEditData'];
    }

    elseif(isset($_SESSION['UserName'])){
        $userID = $_SESSION['UserID'];
        $userName = $_SESSION['UserName'];
        $firstName = $_SESSION['FirstName'];
        $lastName = $_SESSION['LastName'];
        $canUpload = $_SESSION['CanUpload'];
        $canDownload = $_SESSION['CanDownload'];
        $isAdmin = $_SESSION['IsAdmin'];
        $isBanned = $_SESSION['IsBanned'];
        $powerBan = $_SESSION['PowerBan'];
        $powerAddUser = $_SESSION['PowerAddUser'];
        $powerGiveAdmin = $_SESSION['PowerGiveAdmin'];
        $powerDeleteAdmin = $_SESSION['PowerDeleteAdmin'];
        $powerDeleteUser = $_SESSION['PowerDeleteUser'];
        $powerDeleteData = $_SESSION['PowerDeleteData'];
        $powerEditData = $_SESSION['PowerEditData'];
    }

            $data = new stdClass();
            $data->UserID = $userID;
            $data->UserName = $userName;
            $data->FirstName = $firstName;
            $data->LastName = $lastName;
            $data->CanUpload = $canUpload;
            $data->CanDownload = $canDownload;
            $data->IsAdmin = $isAdmin;
            $data->IsBanned = $isBanned;
            $data->PowerBan = $powerBan;
            $data->PowerAddUser = $powerAddUser;
            $data->PowerGiveAdmin = $powerGiveAdmin;
            $data->PowerDeleteAdmin = $powerDeleteAdmin;
            $data->PowerDeleteUser = $powerDeleteUser;
            $data->PowerDeleteData = $powerDeleteData;
            $data->PowerEditData = $powerEditData;
                echo json_encode($data);
}

//             $data = array('Id'=>$id, 'UserName'=>$userName);
//             $setData[] = $data; -->
?>

