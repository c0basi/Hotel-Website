<?php
require 'DB.php';
$id = array($_GET['id']);

$result = DB::deleteRoom($id);
if($result->rowCount()>0)
{
    header("Location:room.php");

}
else{
    echo 'Error';
}
