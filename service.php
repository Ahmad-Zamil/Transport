<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Services</span>
            <h2 class="mb-3">Our Latest Services</h2>
          </div>
        </div>
				<div class="row">
				<?php
                            $sql = "SELECT * FROM services ORDER BY id ASC";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {

                            ?>
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-wedding-car"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2"><?php echo $row['title']?></h3>
                <p><?php echo $row['shortDesctiption']?></p>
              </div>
            </div>
					</div>
					<?php }}?>
					
				
				</div>
			</div>
	</section>
