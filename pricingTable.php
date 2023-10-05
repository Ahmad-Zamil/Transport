<section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div>
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
							  <th class="bg-dark heading">Vehicle Image</th>
						        <th class="bg-dark heading">Vehicle Details</th>
						        
						        <th class="bg-dark heading">Per Day Rate</th>
						        
						      </tr>
						    </thead>
						    <tbody>
							<?php
                            $sql = "SELECT * FROM  vehicle where alignfor=2 order by id DESC";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {

                            ?>
						      <tr class="">
						      	<td class="car-image"><div class="img" style=" height: 150px; width: 250px; background-image:url(admin/assets/sold/<?php echo $row['image']?>);"></div></td>
						        <td class="product-name text-center" >
						        	<h3 style=""><?php echo $row['vehicleName']?></h3>
						        	
						        </td>
						        
						        <td class="price">
						        	
						        	<div>
							        	<h3>
							        		<span class="num"><small class="currency">৳ </small><?php echo $row['vehiclePrice']?></span>
							        	
							        	</h3>
							        	<!-- 	<span class="subheading">$3/hour fuel surcharges</span> -->
						        	</div>
						        </td>
						      </tr><!-- END TR-->
							  <?php }}?>
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
			</div>
		</section>