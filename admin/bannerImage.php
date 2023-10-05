<!-- ############################## Header Section ############################## -->
<?php include("header.php");
include './config.php';
?>



<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <!-- ############################## Table Name ############################## -->
                    <div class="card-header">
                        <h4>Table</h4>
                    </div>


                    <div class="card-body">

                        <div class="table-responsive">

                            <!-- ############################## Add New ############################## -->
                            <div class="text-right">
                                <a href="bannerImageCreate.php" class="btn btn-icon icon-left btn-primary"><i class="fa-solid fa-plus"></i> Add New</a>
                            </div>


                            <!-- ############################## Table ############################## -->
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">

                                <thead>

                                    <tr>

                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Assign For</th>
                                       
                                        <th>Action</th>

                                    </tr>

                                </thead>


                                <tbody>
                                <?php
                            $sql = "SELECT * FROM bannerimage ORDER BY id ASC";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {

                            ?>
                                    <tr>

                                        <td> <img src="assets/bannerImage/<?php echo $row['image']?>" alt="Girl in a jacket" width="50" height="60"> </td>
                                        <td><?php echo $row['title']?></td>
                                        <td><?php echo $row['description']?></td>
                                        <td><?php echo $row['assiognFor']?></td>
                                       
                                        <td style="display: inline-flex;">
                                            <style>
                                                .custom_btn_info:hover {
                                                    color: white !important;
                                                }
                                            </style>
                                            <a href="bannerImageEdit.php?id=<?php echo $row['id']?>" class="btn btn-icon btn-info custom_btn_info">Edit</a>
                                            <form action="bannerImageDelete.php?id=<?php echo $row['id']?>" method="post">
                                                <button type="submit" class="btn btn-icon btn-danger" style="margin-left: 5px">Delete</button>
                                            </form>
                                        </td>

                                    </tr>
                                    <?php }}?>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ############################## Footer Section ############################## -->
<?php include("footer.php"); ?>