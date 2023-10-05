<?php include("config.php");

echo  $id          = $_GET['id'];

echo  $title     = ($_REQUEST['title']);
echo  $text  = ($_REQUEST['description']);



$sql = "UPDATE  services SET  title='$title', shortDesctiption='$text' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: service.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
