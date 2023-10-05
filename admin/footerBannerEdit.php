<!-- ############################## Header Section ############################## -->
<?php include("header.php");
$id=$_GET['id'];

$sql = "SELECT * FROM footer where id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $title=$row['title'];
        $number=$row['number'];
    }}

?>



<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">

                    <!-- ############################## Form Name ############################## -->
                    <div class="card-header">
                        <h4>Banner Imge Create</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="footerBannerUpdate.php?id=<?php echo $id?>" method="post" enctype="multipart/form-data">

                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Title</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Title" value="<?php echo $title?>" name="title" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Number</strong></label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" placeholder="Number" value="<?php echo $number?>" name="number" required>
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