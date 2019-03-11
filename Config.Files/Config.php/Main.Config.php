
<?php



//||||--------------------------------------------------------------------------------------------||||
//||||--------------------------------------------------------------------------------------------||||
//||||--------------------------------------------------------------------------------------------||||
//||||                                                                                            ||||
//||||---------------------Database connection, tables and settings-------------------------------||||

        $DBServer = "localhost";            //Server adress.                                                                                     
        $DBUserName = "root";               //Server login.
        $DBPassword = "";                   //Server password.
        $DBTable = "kingbackupserver";      // Server Table to be used.

            
        $GLOBALS['DBConnection'] = new mysqli($DBServer, $DBUserName, $DBPassword, $DBTable); // Database Connection


//||||--------------------------------------------------------------------------------------------||||
//||||--------------------------------------------------------------------------------------------||||
//||||--------------------------------------------------------------------------------------------||||
//||||                                                                                            ||||
//||||--------------------Varaibles that are located in server table. "GLOBAL"--------------------||||

        
        $DBID = 'id';//1
        $DBUserName = 'userName';//2
        $DBPassword = 'password';//3
        $DBFirstName = 'firstName';//4
        $DBLastName = 'lastName';//5
        $DBCanUpload = 'canUpload';//6
        $DBCanDownload = 'canDownload';//7
        $DBIsAdmin = 'isAdmin';//8
        $DBIsBanned = 'isBanned';//9
        $DBPowerBan = 'powerBan';//10
        $DBPowerAddUser = 'powerAddUser';//11
        $DBPowerGiveAdmin = 'powerGiveAdmin';//12
        $DBPowerDeleteAdmin = 'powerdeleteAdmin';//13
        $DBPowerDeleteUser = 'powerDeleteUser';//14
        $DBPowerDeleteData = 'powerDeleteData';//15
        $DBPowerEditData = 'powerEditData';//16
        
       $DBTotalDataArray = "
            $DBID, 
            $DBUserName, 
            $DBPassword, 
            $DBFirstName, 
            $DBLastName, 
            $DBCanUpload, 
            $DBCanDownload, 
            $DBIsAdmin, 
            $DBIsBanned, 
            $DBPowerBan, 
            $DBPowerAddUser, 
            $DBPowerGiveAdmin, 
            $DBPowerDeleteAdmin, 
            $DBPowerDeleteUser, 
            $DBPowerDeleteData, 
            $DBPowerEditData";


    // -----------------------------------------------------------------------------
    // -----------------------------------------------------------------------------
    // -----------------------------------------------------------------------------
    // -----------------------------------------------------------------------------

//Cookie Configuration
        $GLOBALS['Cookie'] = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : false;

    // -----------------------------------------------------------------------------
    // -----------------------------------------------------------------------------
    // -----------------------------------------------------------------------------
    // -----------------------------------------------------------------------------


        if($GLOBALS['DBConnection'] != true) {
            echo "Cannot connect to database";
        }
    // END-----------------------------------------------------------------------------
    // END-----------------------------------------------------------------------------
    // END-----------------------------------------------------------------------------




    



    //     if($DBConnection->connect_error) {
    //         die("connection failed" . $DBConnection->connect_error);
    //     }
    //     echo "connection success";



    // $domain = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : false; 

    // setcookie('UserName', 'settt', time()+120, '/', $domain, false);

?>









