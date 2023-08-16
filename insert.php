<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Item | EasyParcel</title>

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- Include Poppins font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Include iziToast library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/css/iziToast.min.css">
    <script src="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/js/iziToast.min.js"></script>
    
    <style>
        body {
            background-color: #f7f7f7;
            font-family: 'Poppins', Arial, sans-serif;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
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

        .btn-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn-primary {
            width: 48%;
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-secondary,
        .btn-outline-secondary {
            width: 48%;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="insertstock.php" method="post" name="itemForm" onsubmit="return validateForm();">
            <h3 class="text-center mb-4">EasyParcel | Insert Item</h3>
            <div class="form-group">
                <label for="name">Item Name:</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="date">Date Received:</label>
                <input type="datetime-local" name="date" class="form-control">
            </div>
            <div class="form-group">
                <label for="courier">Courier:</label>
                <select name="courier" class="form-control">
                    <option value="J&T EXPRESS">J&T EXPRESS</option>
                    <option value="SHOPEE EXPRESS">SHOPEE EXPRESS</option>
                    <option value="GDEX EXPRESS">GDEX EXPRESS</option>
                    <option value="CITYLINK EXPRESS">CITYLINK EXPRESS</option>
                    <option value="POSLAJU EXPRESS">POSLAJU EXPRESS</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tracking">Tracking Number:</label>
                <input type="number" name="tracking" class="form-control">
            </div>
            <div class="btn-container">
                <button type="reset" class="btn btn-secondary"><i class="fas fa-eraser"></i> Clear Form</button>
                <button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Insert Item</button>
            </div><br>
            <a href="index.php" class="btn btn-outline-secondary"><i class="fas fa-arrow-left"></i> Back</a>
        </form>
    </div>

    <!-- Include Bootstrap JS (Optional) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <!-- JavaScript for Form Validation and Toast Notifications -->
    <script>
        function validateForm() {
            var name = document.forms["itemForm"]["name"].value;
            var date = document.forms["itemForm"]["date"].value;
            var courier = document.forms["itemForm"]["courier"].value;
            var tracking = document.forms["itemForm"]["tracking"].value;

            if (name === "" || date === "" || courier === "" || tracking === "") {
                iziToast.error({
                    title: 'Error',
                    message: 'Please fill in all fields.',
                    position: 'topCenter',
                    timeout: 3000, // Display for 3 seconds
                    close: true,
                    overlay: true
                });
                return false;
            }
        }
    </script>
</body>
</html>
