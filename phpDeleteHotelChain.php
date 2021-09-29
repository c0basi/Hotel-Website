<?php
require 'DB.php';
$id = array($_GET['id']);

$result = DB::deleteHotelChain($id);
if($result->rowCount()>0)
{
    header("Location:index.php");

}
    else{
        echo 'Error';
    }
