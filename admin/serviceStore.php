<?php include("config.php");

echo  $title      = ($_REQUEST['title']);
echo  $description  = ($_REQUEST['description']);



$sql = "INSERT INTO services (title, shortDesctiption) VALUES ('$title', '$description')";

if (mysqli_query($conn, $sql)) {
    header("Location: service.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
