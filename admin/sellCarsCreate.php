<!-- ############################## Header Section ############################## -->
<?php include("header.php"); 
$alignfor=$_GET['alignfor']?>



<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">

                    <!-- ############################## Form Name ############################## -->
                    <div class="card-header">
                        <h4>Cars Create</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="sellCarsStore.php?alignfor=<?php echo $alignfor?>" method="post" enctype="multipart/form-data">

                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Upload an image</strong></label>
                                <div class="col-sm-9">
                                    <input type="file" class="default" value="" name="choosefile" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Cars Name</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Title" value="" name="title" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Cars Price</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Title" value="" name="price" required>
                                </div>
                            </div>


                          
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Description</strong></label>
                                <div class="col-sm-9">
                                    <textarea class="summernote" value="" name="description" required></textarea>
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