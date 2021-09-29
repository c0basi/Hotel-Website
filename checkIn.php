<?php
require 'DB.php';
if(!empty($_POST)) {
    $values = array($_POST['FName'], $_POST['LName'],$_POST['date'],$_POST['address']);
    $lastId = DB::addNewCustomer($values);
    if($lastId>0){
        $values2 = array($lastId,$_POST['room_id']);
       $result = DB::checkIn($values2);
       if($result->rowCount()>0){
           header('Location:bookedRooms.php');
//           echo 'Success';
       }
       else
       {
           echo 'Error';
       }

    }else
    {echo 'Error';
    }

}