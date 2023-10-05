
<?php 

$sql = "SELECT * FROM aboutus ORDER BY id ASC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	// output data of each row
	while ($row = $result->fetch_assoc()) {

?>

<section class="ftco-section ftco-about">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(admin/assets/about/<?php echo $row['image']?>);">
					</div>
					<div class="col-md-6 wrap-about ftco-animate">
	          <div class="heading-section heading-section-white pl-md-5">
	          	<span class="subheading">About us</span>
	            <h2 class="mb-4"><?php echo $row['title']?></h2>

	           <?php echo $row['text']?> <p><a href="#" class="btn btn-primary py-3 px-4">Search Vehicle</a></p>
	          </div>
					</div>
				</div>
			</div>
		</section>
	<?php }}?>