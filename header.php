<?php include 'config.php';

$sql = "SELECT * FROM sitesetting ORDER BY id ASC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
     $name=$row['name'];
    
    }}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $name?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html"><?php echo $name  ?></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>" >
              <a href="index.php" class="nav-link">Home</a>
            </li>
	          <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">
              <a href="about.php" class="nav-link">About</a>
            </li>
	          <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active' : ''; ?>">
              <a href="services.php" class="nav-link">Services</a>
            </li>
	          <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'pricing.php' ? 'active' : ''; ?>">
              <a href="pricing.php" class="nav-link">Car Rental</a>
            </li>
	          <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'car.php' ? 'active' : ''; ?>">
              <a href="car.php" class="nav-link">Cars</a>
            </li>
	          <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">
              <a href="contact.php" class="nav-link">Contact</a>
            </li>
            <li class="nav-item"><a href="#!" class="nav-link"><?php echo  date("l j  F Y") ?></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->