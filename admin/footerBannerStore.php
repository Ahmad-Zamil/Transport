<?php include("config.php");

echo  $title      = ($_REQUEST['title']);
echo  $number  = ($_REQUEST['number']);




$sql = "INSERT INTO footer (title, number) VALUES ('$title', '$number')";

if (mysqli_query($conn, $sql)) {
    header("Location: footerbanner.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
