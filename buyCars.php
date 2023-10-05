<section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">What we offer</span>
            <h2 class="mb-2">Feeatured Vehicles</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="carousel-car owl-carousel">

					
			<?php
                            $sql = "SELECT * FROM  vehicle where featured='on' order by id DESC";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {

                            ?>
    					<div class="item">
    						<div class="car-wrap rounded ftco-animate">
		    					<div class="img rounded d-flex align-items-end" style="background-image: url(admin/assets/sold/<?php echo $row['image']?>);">
		    					</div>
		    					<div class="text">
		    						<h2 class="mb-0"><a href="#"><?php echo $row['vehicleName']?></a></h2>
		    						<div class="d-flex mb-3">
			    					
			    						<p class="price ml-auto">৳ <?php echo $row['vehiclePrice']?> <span>/day</span></p>
		    						</div>
		    						<!-- <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="#" class="btn btn-secondary py-2 ml-1">Details</a></p> -->
		    					</div>
		    				</div>
    					</div>
    				<?php }}?>
    					
    				</div>
    			</div>
    		</div>
    	</div>
    </section>