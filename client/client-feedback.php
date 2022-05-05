<?php
$connection = mysqli_connect('localhost', 'root', '', 'service_appointment') or die("connection failed") . mysqli_connect_error();
if (isset($_GET['profile'])) {
    $username = $_GET['profile'];
}
?>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && (isset($_POST['submit']))){
    $connection = mysqli_connect('localhost','root','','service_appointment') or die ("failed").mysqli_connect_error();
    if(isset($_POST['username']))
    {
        $username = $_POST['username'];
        $type = $_POST['type'];
        $description = $_POST['description'];
    }
    $sql = "INSERT INTO `feedback` (`username`,`type`,`description`) VALUES ('$username','$type','$description')";
    $result = mysqli_query($connection,$sql);
    echo "<script type = \"text/javascript\">
                    alert(\"Your feedback is successfully submitted\");
                    window.location = (\"client-feedback.php?profile=$username\")
                    </script>";
    } else {
        echo "failed";
    }
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./styles/client-feedback.css">
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <?php include "../basic/client-header.php" ?>
    <?php include "../basic/client-sidebar.php" ?>
    <div class="feedback">
        <form action=" " method="POST">
            <label for="username" class="form-label">Username:</label>
            <input type="text" name="username" id="username" value="<?php echo $username ?>" class="form-control">
            <label for="type" class="form-label">Type:</label>
            <select class="form-select form-select-lg mb-3" name="type" aria-label=".form-select-lg example">
                <option disabled>select any option</option>
                <option value="feedback">Feedback</option>
                <option value="complaint">Complaint</option>
            </select>
            <label for="description" class="form-label">Description:</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
            <button type="submit" class="btn btn-success" name="submit" id="submit">Submit</button>
        </form>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>