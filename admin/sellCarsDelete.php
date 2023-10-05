<?php include("config.php");

echo $id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM vehicle WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: sellCars.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
