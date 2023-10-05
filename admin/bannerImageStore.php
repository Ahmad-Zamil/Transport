<?php include("config.php");

echo  $title      = ($_REQUEST['title']);
echo  $description  = ($_REQUEST['description']);
echo  $assignFor  = ($_REQUEST['assignFor']);



$msg = "";

// check if the user has clicked the button "UPLOAD" 
if (isset($_POST['uploadfile'])) {

    $filename = $_FILES["choosefile"]["name"];

    $tempname = $_FILES["choosefile"]["tmp_name"];

    $folder = "assets/bannerImage/" . $filename;

    // Add the image to the "image" folder"
    if (move_uploaded_file($tempname, $folder)) {

        $msg = "Image uploaded successfully";
    } else {

        $msg = "Failed to upload image";
    }
}

echo $filename;


$sql = "INSERT INTO bannerimage (image, title, description, assiognFor) VALUES ('$filename', '$title', '$description', '$assignFor')";

if (mysqli_query($conn, $sql)) {
    header("Location: bannerImage.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
