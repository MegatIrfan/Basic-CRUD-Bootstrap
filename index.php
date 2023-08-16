<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimas EasyParcel</title>

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- Include Poppins font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            background-color: #f7f7f7;
            font-family: 'Poppins', Arial, sans-serif;
        }

        .container {
            text-align: center;
            margin-top: 100px;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .btn {
            margin: 10px;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
        }

        .credit {
            font-size: 12px;
            margin-top: 20px;
            color: #888;
        }

        .instagram-profile {
            margin-top: 20px;
        }

        .instagram-profile img {
            max-width: 50px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>EASYPARCEL | Basic CRUD</h1>
        <a href="insert.php" class="btn btn-primary"><i class="fas fa-plus"></i> Insert Item</a>
        <a href="view.php" class="btn btn-success"><i class="fas fa-eye"></i> View Item</a>
        <a href="delete.php" class="btn btn-danger"><i class="fas fa-trash"></i> Delete Item</a>
        <a href="update.php" class="btn btn-warning"><i class="fas fa-edit"></i> Update Item</a>

        <div class="credit">
            Created by Megat Irfan<br>
            <a href="https://www.instagram.com/irfanncc_" target="_blank">@irfanncc_</a>
        </div>

        <div class="instagram-profile">
            <a href="https://www.instagram.com/irfanncc_" target="_blank">
                <img src="https://images.unsplash.com/profile-1649527801009-ddb45bf3d535image?auto=format&fit=crop&w=150&h=150&q=60&crop=faces&bg=fff" alt="Instagram Profile Picture">
            </a>
        </div>
    </div>

    <!-- Include Bootstrap JS (Optional) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
