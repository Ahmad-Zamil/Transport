<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">

			<?php
                            $sql = "SELECT * FROM  vehicle where alignfor=1 order by id DESC";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {

                            ?>
    			<div class="col-md-4">
    				<div class="car-wrap rounded ftco-animate">
    					<div class="img rounded d-flex align-items-end" style="background-image: url(admin/assets/sold/<?php echo $row['image']?>);">
    					</div>
    					<div class="text">
    						<h2 class="mb-0"><a href="car-single.html"><?php echo $row['vehicleName']?></a></h2>
    						<div class="d-flex mb-3">
	    					
	    						<p class="price ml-auto" style="float:left">BDT <?php echo $row['vehiclePrice']?> <span></span></p>
    						</div>
    						<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
    					</div>
    				</div>
    			</div>
    			<?php }}?>
    		
    		</div>
    		<div class="row mt-5">
       
        </div>
    	</div>
    </section>