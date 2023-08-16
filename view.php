<?php
include 'conn.php';

$sql = "SELECT * from easyparcel";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Item | Easyparcel</title>

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Include DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

    <!-- Include Poppins font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS for Dark Mode -->
    <style>
        body {
            font-family: 'Poppins', Arial, sans-serif;
        }

        /* Dark Mode Styles */
        .dark-mode {
            background-color: #333;
            color: #fff;
        }

        .dark-mode table {
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <?php if (mysqli_num_rows($result) > 0) { ?>
            <table id="itemTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>NO.</th>
                        <th>NAME</th>
                        <th>DATE RECEIVED</th>
                        <th>COURIER</th>
                        <th>TRACKING NUMBER</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $count = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $count++; ?></td>
                            <td><?php echo $row['name_parcel']; ?></td>
                            <td><?php echo $row['date_received']; ?></td>
                            <td><?php echo $row['courier']; ?></td>
                            <td><?php echo $row['tracking_num']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        <?php } else { ?>
            <p>No Result found</p>
        <?php } ?>

        <a href="index.php" class="btn btn-primary mt-3"><i class="fas fa-arrow-left"></i> Main Page</a>
        
        <!-- Dark Mode Toggle Button -->
        <button id="darkModeToggle" class="btn btn-secondary mt-3 float-right"><i class="fas fa-moon"></i> Dark Mode</button>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

    <!-- Dark Mode Toggle Script -->
    <script>
        $(document).ready(function () {
            $('#itemTable').DataTable();

            $('#darkModeToggle').click(function () {
                $('body').toggleClass('dark-mode');
            });
        });
    </script>
</body>
</html>
