<?php include("config.php");

echo  $id    = $_GET['id'];

echo  $address = ($_REQUEST['address']);
echo  $phone  = ($_REQUEST['phone']);
echo  $email  = ($_REQUEST['email']);
echo  $name  = ($_REQUEST['siteName']);
echo  $whatsapp  = ($_REQUEST['whatsapp']);
echo  $imo  = ($_REQUEST['imo']);



$sql = "UPDATE  sitesetting SET  email='$email', address='$address' , phone='$phone', whatsapp='$whatsapp', imo='$imo', name='$name' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: siteSetting.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
