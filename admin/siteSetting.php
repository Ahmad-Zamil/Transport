<!-- ############################## Header Section ############################## -->
<?php include("header.php"); 
   $sql = "SELECT * FROM sitesetting ORDER BY id ASC";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
       // output data of each row
       while ($row = $result->fetch_assoc()) {
        $address=$row['address'];
        $phone=$row['phone'];
        $email=$row['email'];
        $name=$row['name'];
        $whatsapp=$row['whatsapp'];
        $imo=$row['imo'];
       }}


?>



<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">

                    <!-- ############################## Form Name ############################## -->
                    <div class="card-header">
                        <h4>Company Details</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="siteSettingsupdate.php?id=1" method="post">

                        <div class="card-body"> 

                        <div class="form-group row">

                                <label class="col-sm-3 col-form-label"><strong>Site Name</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Site Name" value="<?php echo $name?>" name="siteName" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Address</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Address" value="<?php echo $address?>" name="address" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Phone</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Phone" value="<?php echo $phone?>" name="phone" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>whatsapp</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="whatsapp" value="<?php echo $whatsapp?>" name="whatsapp" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Imo</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="imo" value="<?php echo $imo?>" name="imo" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Email</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Email" value="<?php echo $email?>" name="email" required>
                                </div>
                            </div>

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