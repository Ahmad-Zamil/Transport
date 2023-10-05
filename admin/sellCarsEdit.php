<!-- ############################## Header Section ############################## -->
<?php include("header.php");
$id=$_GET['id'];

$sql = "SELECT * FROM vehicle where id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $title=$row['vehicleName'];
        $description=$row['vehicleDescription'];
        $vehiclePrice=$row['vehiclePrice'];
    }}

?>



<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">

                    <!-- ############################## Form Name ############################## -->
                    <div class="card-header">
                        <h4>Vehicle Edit</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="vehicleUpdate.php?id=<?php echo $id?>" method="post" enctype="multipart/form-data">

                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Upload an image</strong></label>
                                <div class="col-sm-9">
                                    <input type="file" class="default" value="" name="choosefile" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Vehicle Name</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Title" value="<?php echo $title?>" name="title" required>
                                </div>
                            </div>


                          
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Description</strong></label>
                                <div class="col-sm-9">
                                    <textarea class="summernote" value="" name="description" required><?php echo $description?></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Vehicle Price</strong></label>
                                <div class="col-sm-9">
                                    <textarea class="summernote" value="" name="price" required><?php echo $vehiclePrice?></textarea>
                                </div>
                            </div>


                            <fieldset class="form-group">
                                <div class="row">
                                    <div class="col-form-label col-sm-3 pt-0"><strong>Offered Vehicle</strong></div>
                                    <div class="col-sm-9">
                                        <div class="form-check">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio3" name="featured" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio3">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio2" name="featured" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio2">No</label></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>


                        </div>


                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" name="uploadfile">Submit</button>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ############################## Footer Section ############################## -->
<?php include("footer.php"); ?>