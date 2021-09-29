<?php
require 'DB.php';
$id = array($_GET['id']);

echo $id;
$result = DB::deleteHotel($id);
if($result->rowCount()>0)
{
    header("Location:hotelsInChain.php");

}
else{
    echo 'Error';
}
