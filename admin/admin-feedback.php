<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>

<body class="bg-dark">
    <?php include "../basic/admin-header.php" ?>
    <?php include "../basic/sidebar.php" ?>
    <div class="container-fluid">
        <table class="table table-dark table-hover text-white text-center my-5">
            <thead>
                <tr class="bg-dark text-white">
                    <th>id</th>
                    <th>username</th>
                    <th>type</th>
                    <th>feedback</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $connection = mysqli_connect('localhost', 'root', '', 'service_appointment') or die("failed") . mysqli_connect_error();
                $sql = ("SELECT * FROM `feedback`");
                $result = mysqli_query($connection, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $username = $row['username'];
                        $type = $row['type'];
                        $feedback = $row['feedback'];
                        echo "
                <tr>
                <td>$id</td>
                <td>$username</td>
                <td>$type</td>
                <td>$feedback</td>
                <td>
                <a href ='./crud/feedback_delete.php?deleteid=$id'><button class='btn btn-danger'>delete</button></a>
                </td>
                </tr>
             ";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
<style>
    table {
        margin-left: 10rem;
        width: 66rem !important;
        padding: 16px;
    }
</style>
</html>