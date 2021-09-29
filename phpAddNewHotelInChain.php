<?php
require 'DB.php';
if(!empty($_POST))
{
    $values = array($_POST['PhoneNumber'],$_POST['Address']);
    $lastId = DB::addHotelPhone($values);

    $values2 = array($_POST['Address'],$_POST['Email'],$_POST['rating'],$_POST['NumberOfRooms'],  $lastId, $_POST['hqid']);
    $result = DB::addNewHotelInChain($values2);
    if($result->rowCount() >0)
    {

    header("Location: hotelsInChain.php");

    }
    else
    {
        echo 'Error';
    }

}
?>