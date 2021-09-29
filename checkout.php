<?php
require 'DB.php';
$id = array($_GET['id']);
$result = DB::checkout($id);
if($result->rowCount()>0)
{
    echo 'Checkout Successfully. Now Room available for booking';
    echo "<a href='index.php'>  Go Here</a>";


}
else{
    echo 'Error';
}
