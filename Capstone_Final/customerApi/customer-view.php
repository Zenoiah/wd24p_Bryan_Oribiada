<?php
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
        <link rel="stylesheet" href="styleview.css">

    <title>ABTech Customer View</title>
</head>
<body>

<?php
                        if(isset($_GET['id']))
                        {
                            $customer_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM customerjob WHERE id='$customer_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $customer = mysqli_fetch_array($query_run);
                                ?>
    <br /><br />

    <div class="container mt-5">
        <div class="row">
            <center>
                <div class="card cardsize" style="background: #F6BE00">
                        <h4>Customer View Details
                        <a href="../pages/customerjobOrder/index.php" class="btn btn-danger float-end">BACK</a>
                        </h4></center>
                    </div>
         
                                <div class="card-body form">
                                    <div class="mb-3 labeler inputer">
                                        <label>FullName</label>
                                        <p class="form-control formletter ">
                                            <?=$customer['fullname'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3 labeler inputer">
                                        <label>Company Name</label>
                                        <p class="form-control formletter ">
                                            <?=$customer['companyname'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3 labeler inputer">
                                        <label>Address</label>
                                        <p class="form-control formletter ">
                                            <?=$customer['address'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3 labeler inputer">
                                        <label>Email</label>
                                        <p class="form-control formletter ">
                                            <?=$customer['email'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3 labeler inputer">
                                        <label>Phone</label>
                                        <p class="form-control formletter ">
                                            <?=$customer['phone'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3 labeler inputer">
                                        <label>Additional Information</label>
                                        <p class="form-control formletter ">
                                            <?=$customer['addinfo'];?>
                                        </p>
                                    </div>

                                        <div class="mb-3 labeler inputer">
                                        <label>Job Order</label>
                                        <p class="form-control formletter ">
                                            <?=$customer['transactions'];?>
                                        </p>
                                     </div><br />

                                        <a onclick="window.print()" class="btn btn-secondary float-end"> PRINT </a>
                                    </div>

                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>