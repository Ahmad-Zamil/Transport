<?php include("config.php");

echo  $id          = $_GET['id'];

echo  $title      = ($_REQUEST['title']);
echo  $text  = ($_REQUEST['description']);




$msg = "";

// check if the user has clicked the button "UPLOAD" 
if (isset($_POST['uploadfile'])) {

    $filename = $_FILES["choosefile"]["name"];

    $tempname = $_FILES["choosefile"]["tmp_name"];

    $folder = "assets/about/" . $filename;

    // Add the image to the "image" folder"
    if (move_uploaded_file($tempname, $folder)) {

        $msg = "Image uploaded successfully";
    } else {

        $msg = "Failed to upload image";
    }
}

echo $filename;


$sql = "UPDATE  aboutus SET image='$filename', title='$title', text='$text' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: aboutUs.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
