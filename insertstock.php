<?php
include 'conn.php';

if(!$conn){
    die("Connection Failed".mysqli_connect_error());
}

$sql = "INSERT INTO easyparcel (name_parcel,date_received,courier,tracking_num) VALUES 
        ('$_POST[name]','$_POST[date]','$_POST[courier]','$_POST[tracking]')";

if(mysqli_query($conn,$sql)){
    echo "Your item has been recorded";
    header("Location:view.php");
}

else {
    echo "Error : DATABASE NOT FOUND".mysqli_error($conn);

}

mysqli_close($conn);


?>





