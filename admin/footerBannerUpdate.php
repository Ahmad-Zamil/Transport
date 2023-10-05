<?php include("config.php");

echo  $id          = $_GET['id'];
echo  $title      = ($_REQUEST['title']);
echo  $number  = ($_REQUEST['number']);




$sql = "UPDATE  footer SET title='$title', number='$number' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: footerBanner.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
