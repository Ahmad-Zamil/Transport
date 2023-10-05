
<?php
  $sql = "SELECT * FROM sitesetting";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
	  // output data of each row
	  while ($row = $result->fetch_assoc()) {
		$email=$row['email'];
		$address=$row['address'];
		$address=$row['address'];
		$phone=$row['phone'];
		$whatsapp=$row['whatsapp'];
		$imo=$row['imo'];

	  }}

?>
<div class="col-md-4">
        		<div class="row mb-5">
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-map-o"></span>
			          	</div>
			            <p><span>Address:</span> <?php echo $address?></p>
			          </div>
		          </div>
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-mobile-phone"></span>
			          	</div>
			            <p><span>Phone:</span> <a href="tel://<?php echo $phone?>"><?php echo $phone?></a></p>
			          </div>
		          </div>
				  <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span><i class="fa-brands fa-whatsapp"></i></span>
			          	</div>
			            <p><span>Whatsapp:</span> <a href="tel://<?php echo $whatsapp?>"><?php echo $whatsapp?></a></p>
			          </div>
		          </div>
				  <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-mobile-phone"></span>
			          	</div>
			            <p><span>Imo:</span> <a href="tel://<?php echo $imo?>"><?php echo $imo?></a></p>
			          </div>
		          </div>
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-envelope-o"></span>
			          	</div>
			            <p><span>Email:</span> <a href="mailto:<?php echo $email?>"><?php echo $email ?></a></p>
			          </div>
		          </div>
		        </div>
          </div>