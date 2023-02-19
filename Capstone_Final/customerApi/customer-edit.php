<?php
session_start();
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
    <link rel="stylesheet" href="styleedit.css">

    <title>Customer Edit</title>
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

  <br/><br/><br/>
  
    <div class="container mt-5 ">
         <?php include('message.php'); ?>
        <div class="row">
        <center>
                <div class="card cardsize " style="background: #F6BE00">
                    
                        <h4>Customer Edit 
                            <a href="../pages/customerjobOrder/index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div></center>
                    <div class="card-body form ">

                        
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="customer_id" value="<?= $customer['id']; ?>">

                                    <div class="mb-3 labeler inputer">
                                        <label>FullName</label>
                                        <input type="text" name="fullname" value="<?=$customer['fullname'];?>" class="form-control formletter">
                                    </div>

                                    <div class="mb-3 labeler inputer">
                                        <label>Company Name</label>
                                        <input type="text" name="companyname" value="<?=$customer['companyname'];?>" class="form-control formletter">
                                    </div>

                                    <div class="mb-3 labeler inputer">
                                        <label>Address</label>
                                        <input type="text" name="address" value="<?=$customer['address'];?>" class="form-control formletter">
                                    </div>
                                    <div class="mb-3 labeler inputer">
                                        <label>Email</label>
                                        <input type="email" name="email" value="<?=$customer['email'];?>" class="form-control formletter">
                                    </div>
                                    <div class="mb-3 labeler inputer">
                                        <label>Phone</label>
                                        <input type="text" name="phone" value="<?=$customer['phone'];?>" class="form-control formletter">
                                    </div>
                                    <div class="mb-3 labeler inputer">
                                        <label>Additional Information</label>
                                        <input type="text" name="addinfo" value="<?=$customer['addinfo'];?>" class="form-control formletter">
                                    </div>
                                    <div class="mb-3 labeler inputer">
                                        <label>Job Orders</label>
                                        <input type="text" name="transactions" value="<?=$customer['transactions'];?>" class="form-control formletter">
                                    </div>
                                    <div class="mb-3 labeler m-2">
                                        <button type="submit" name="update_customer" class="btn btn-success">
                                            Update Customer
                                        </button>
                                    </div>

                                </form>
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