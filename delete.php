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

    <!-- Include iziToast CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">

    <!-- Include Poppins font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<style>
        body {
            font-family: 'Poppins', Arial, sans-serif;
        }

       
    </style>
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
                        <th>ACTION</th>
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
                            <td>
                                <a href="delete_item.php?mid=<?php echo $row['tracking_num'];?>" class="btn btn-danger" onclick="return confirmDelete();">DELETE</a>
                            </td>
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
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Include DataTables JS -->
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

    <!-- Include iziToast JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>

    <!-- Initialize DataTables and iziToast -->
    <script>
        $(document).ready(function () {
            $('#itemTable').DataTable();
        });


        $('.btn-danger').on('click', function (e) {
            e.preventDefault();
            var deleteUrl = $(this).attr('href');
            
            iziToast.show({
                title: 'Confirm Delete',
                message: 'Are you sure you want to delete this item?',
                position: 'center',
                theme: 'dark',
                color: 'red',
                titleColor: 'black',
                messageColor: 'black',
                buttons: [
                    ['<button class="text-dark"><b>Yes</b></button>', function (instance, toast) {
                        window.location.href = deleteUrl;
                    }, true],
                    ['<button class="text-dark">No</button>', function (instance, toast) {
                        instance.hide({ transitionOut: 'fadeOut' }, toast);
                    }]
                ],
                onClosing: function (instance, toast, closedBy) {
                    console.info('Closed by: ' + closedBy);
                }
            });
        });
    </script>
</body>
</html>
