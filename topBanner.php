

<?php
                            $sql = "SELECT * FROM bannerimage where assiognFor='Home'";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {

                            ?>

<div class="hero-wrap ftco-degree-bg" style="background-image: url('admin/assets/bannerImage/<?php echo $row['image']?>');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
          <div class="col-lg-8 ftco-animate">
          	<div class="text w-100 text-center mb-md-5 pb-md-5">
	            <h1 class="mb-4"><?php echo $row['title']?></h1>
	            <p style="font-size: 18px;"><?php echo $row['description']?></p>
	        
	            	
	            </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php }}?>