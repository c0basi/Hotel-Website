<?php
require 'DB.php';
$id = array($_GET['id']);

$result = DB::deleteEmp($id);
if($result->rowCount()>0)
{
    header("Location:index.php");

}
else{
    echo 'Error';
}
