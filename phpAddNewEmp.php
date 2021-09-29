<?php
require 'DB.php';
if(!empty($_POST))
{

    if(isset($_POST['manager'])){
        $values = array($_POST['LName'],$_POST['FName'],$_POST['Address'],$_POST['HQAddress'],$_POST['HotelAddress'],$_POST['manager'],);

    }
    else
    {
        $values = array($_POST['LName'],$_POST['FName'],$_POST['Address'],$_POST['HQAddress'],$_POST['HotelAddress'],'No',);
    }
    $result = DB::addNewEmp($values);
    if($result->rowCount() >0)
    {

     header("Location: index.php");

    }

}
?>