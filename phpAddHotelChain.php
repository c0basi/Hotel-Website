<?php
require 'DB.php';
if(!empty($_POST))
{
    $values = array($_POST['PhoneNumber'],$_POST['HQAddress']);
    $lastId = DB::addHotelPhone($values);
    $values2 = array($_POST['HQAddress'],$_POST['NumberOfHotels'],$_POST['HQEmail'],$lastId);
    $result = DB::addHotelChain($values2);
    if($result->rowCount()>0)
    {
      //  echo 'Success';
       header("Location: index.php");

    }

}
?>