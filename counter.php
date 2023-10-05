<section class="ftco-counter ftco-section img bg-light" id="section-counter">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row">

        <?php
                            $sql = "SELECT * FROM  footer order by id ASC";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {

                            ?>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="<?php echo $row['number']?>">0</strong>
                <span><?php echo $row['title']?></span>
              </div>
            </div>
          </div>
          <?php }}?>
       
        </div>
    	</div>
    </section>	