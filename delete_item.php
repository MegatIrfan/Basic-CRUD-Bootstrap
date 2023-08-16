<?php

include "conn.php";

$sql = "DELETE FROM easyparcel where tracking_num= '". $_REQUEST['mid']."'";

if (mysqli_query($conn,$sql)){
    echo "The record has been deleted";
    header('Location:delete.php');
}

?>