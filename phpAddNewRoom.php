<?php
require 'DB.php';
if(!empty($_POST)) {
    $values = array($_POST['Capacity'], $_POST['Extended'],$_POST['View'],$_POST['Price'],$_POST['hotelAddress']);
    $lastId = DB::addNewRoom($values);
    if($lastId >0)
    {
//        echo 'Success';
        $valuesDamage = array($_POST['damage'],$_POST['hotelAddress'],$lastId);
        $valuesAmen = array($_POST['amenities'],$_POST['hotelAddress'],$lastId);

        $result = DB::addNewDamage($valuesDamage);
        if($result->rowCount()>0)
        {

        }
        else{
            echo 'Error on adding damage';
        }

        $resultAmen = DB::addNewAmen($valuesAmen);
        if($resultAmen->rowCount()>0)
        {

        }
        else{
            echo 'Error on adding amenities';
        }

        header("Location:room.php");

    }
    else
    {
        echo 'Error';
    }
}