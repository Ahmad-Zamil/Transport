<?php include("config.php");

echo  $id          = $_GET['id'];
echo  $title      = ($_REQUEST['title']);
echo  $description  = ($_REQUEST['description']);
echo  $price  = ($_REQUEST['price']);
echo  $featured  = ($_REQUEST['featured']);


$msg = "";

// check if the user has clicked the button "UPLOAD" 
if (isset($_POST['uploadfile'])) {

    $filename = $_FILES["choosefile"]["name"];

    $tempname = $_FILES["choosefile"]["tmp_name"];

    $folder = "assets/sold/" . $filename;

    // Add the image to the "image" folder"
    if (move_uploaded_file($tempname, $folder)) {

        $msg = "Image uploaded successfully";
    } else {

        $msg = "Failed to upload image";
    }
}

echo $filename;


$sql = "UPDATE  vehicle SET image='$filename', vehicleName='$title', vehicleDescription='$description',  vehiclePrice ='$price', featured='$featured' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: sellCars.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
