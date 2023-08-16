<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Item | EasyParcel</title>

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Include Poppins font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #f7f7f7;
            font-family: 'Poppins', Arial, sans-serif;
        }

        .container {
            text-align: center;
            margin-top: 50px;
        }

        form {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 40px;
            box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        h3 {
            color: #333;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 25px;
        }

        label {
            font-weight: 500;
        }

        .form-control {
            border: 1px solid #d1d1d1;
            border-radius: 4px;
            padding: 10px;
        }

        button[type="submit"] {
            background-color: #007bff;
            border: none;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
    <?php 
    include 'conn.php';

    if($conn){
        if(isset($_POST['update'])){
            $name = mysqli_escape_string($conn,$_POST['name']);
            $dateReceived = $_POST['date'];
            $courier = $_POST['courier'];
            $trackingNumber = $_POST['tracking'];

            $update = mysqli_query($conn,"UPDATE easyparcel SET date_received='$dateReceived',courier='$courier',
            tracking_num='$trackingNumber' WHERE name_parcel ='$name'");

            if ($update){
                header("Location:view.php");
                exit();
            }else {
                echo "Error updating parcel info". mysqli_error($conn);

            }
            }

            $name = $_REQUEST['mid'];
            $sql = mysqli_query($conn,"SELECT * FROM easyparcel WHERE name_parcel = '$name'");

            if ($sql){
                $row = mysqli_fetch_array($sql);
            } else {
                echo "Error fetching data". mysqli_error($conn);
            }
            mysqli_close($conn);
            }else {
                echo "Error connection to the database". mysqli_connect_error();
            }
        
    
?>
        <center>
            <form action="" method="post">
                <h3>EasyParcel | Update Item</h3>
                <div class="form-group">
                    <label for="name">NAME :</label>
                    <input type="text" name="name" value="<?php echo $row['name_parcel']; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="date">DATE RECEIVED :</label>
                    <input type="datetime-local" name="date" value="<?php echo $row['date_received']; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="courier">COURIER:</label>
                    <select name="courier" class="form-control">
                        <option value="J&T Express" <?php if ($row['courier'] === 'J&T Express') echo 'selected'; ?>>J&T Express</option>
                        <option value="Shopee Express" <?php if ($row['courier'] === 'Shopee Express') echo 'selected'; ?>>Shopee Express</option>
                        <option value="GDEX Express" <?php if ($row['courier'] === 'GDEX Express') echo 'selected'; ?>>GDEX Express</option>
                        <option value="City Link Express" <?php if ($row['courier'] === 'City Link Express') echo 'selected'; ?>>City Link Express</option>
                        <option value="PosLaju Express" <?php if ($row['courier'] === 'PosLaju Express') echo 'selected'; ?>>PosLaju Express</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tracking">TRACKING NUMBER :</label>
                    <input type="number" name="tracking" value="<?php echo $row['tracking_num']; ?>" class="form-control">
                </div>
                <button type="submit" name="update" class="btn btn-primary">Update Item</button>
            </form>
        </center>
    </div>

    <!-- Include Bootstrap JS (Optional) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
