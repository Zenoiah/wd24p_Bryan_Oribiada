<?php
    session_start();
    require '../../customerApi/dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"  rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <link rel="stylesheet" href="go.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">

    <title>ABtech</title>

</head><br /><br /><br />

<body>
 <!--start of Navbar-->

 <header>
        <input type="checkbox" name="" id="chk1">
        <img src="img/ablogogroup.png" class="glogo" alt="grouplogo">

        <ul>
            <li><a href="../dashboard/">GUEST PAGE</a></li>
            <li><a href="../Admin/"> ADMIN PAGE </a></li>
            <li><a href="../employees/">EMPLOYEE</a></li>
            <li><a href="../users/">ADMIN USER</a></li>
            <li><a href="../services/">SERVICES</a></li>
            <li><a href="../customerjobOrder/index.php">CUSTOMER TRANSACTIONS</a></li>


            <li>
                <form class="d-flex" role="search">
                    <button type="button" onclick="logout()" class="log1 btn btn-danger"><a>Logout</a></button>
                </form>
            </li>
        </ul>

        <div class="menu">
            <label for="chk1">
                <i class="fa fa-bars"></i>
            </label>
        </div>
    </header>

    <!--End of Navbar-->
    <br /><br /><br /><br /><br /><br />

   <center> <h3 style="color:white"> Customers Transaction</h3></center>

    <div class="container mt-4 p-5 ">
        <?php include('../../customerApi/message.php'); ?>

        <div class="row ">
            <div class="col-md-12 ">
                <div class="card "style="background: #F6BE00" >
                    <div class="card-header m-2" >
                        <h4>Customer Details
                            <a href="../../customerApi/customer-createadmin.php" class="btn btn-success float-end">Add Customer</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped " style="background: white" >
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Fullname</th>
                                    <th>Companyname</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Additional Information</th>
                                    <th>Job Order</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM customerjob";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $customer)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $customer['id']; ?></td>
                                                <td><?= $customer['fullname']; ?></td>
                                                <td><?= $customer['companyname']; ?></td>
                                                <td><?= $customer['address']; ?></td>
                                                <td><?= $customer['email']; ?></td>
                                                <td><?= $customer['phone']; ?></td>
                                                <td><?= $customer['addinfo']; ?></td>
                                                <td><?= $customer['transactions']; ?></td>
                                                <td>

                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"> Select Action
                                                     </button>
                                                <ul class="dropdown-menu"><center>
                                                  <li><a href="../../customerApi/customer-view.php?id=<?= $customer['id']; ?>" class="btn btn-warning btn-sm">View</a></li>
                                                  <li> <a href="../../customerApi/customer-edit.php?id=<?= $customer['id']; ?>" class="btn btn-success btn-sm">Edit</a></li>
                                                  <li><form action="../../customerApi/code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_customer" value="<?=$customer['id'];?>" 
                                                        class="btn btn-danger btn-sm">Delete</button></center>
                                                    </form></li>
                                                </ul>
                                             </div>
                                            </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                           
                        </table>
                        
                    </div>
                </div>
            </div>
        </div><br/>
        <a onclick="window.print()" class="btn btn-warning float-end"> PRINT ALL DETAILS</a>
    </div>


<br/><br/><br/>
    <!--Footer-->
    <section class="">
                <div class="container text-center text-md-start mt-5" style="color:aliceblue">

                    <div class="row mt-3">

                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                <i class="fas fa-gem"></i>&nbsp;ABTech Computer Repair and Job Services
                            </h6>
                            <p>
                                " Repairing is Our Job. Quality repairing for our customers Affordability. ABtech adding
                                Care to your PC'S and
                                Giving Futures to your Tech! "
                            </p>
                        </div>

                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Open Hours
                            </h6>
                            <p>Monday - Saturday 08:00AM - 05:00PM</p>
                            <p>Sunday: Closed</p>
                            <p>Service Hours<br>
                                Monday - Saturday 08:00AM - 05:00PM Sunday: Closed</p>
                        </div>

                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4 ">Contact</h6>
                            <p><i class="">
                                    <img src="../../images/locationiconz.png" style="height:25px; width: 25px;">
                                </i>ABTech Office R3XJ+26R, Del Monte, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                Norzagaray Rd, San Jose del Monte
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City Bulacan
                            </p>

                            <p><i class="">
                                    <img src="../../images/iconmsg1.png" style="height:25px; width: 25px;">
                                </i> Oribs5885@gmail.com</p>
                            <p><i class="">
                                    <img src="../../images/callicon.png" style="height:25px; width: 25px;">
                                </i> + 63 956 402 9380 / <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ 63 939 392 0240</p>

                        </div>
                    </div>
            </section>
            <!--end Footer-->
            <br/><br/><br/><br/>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"
  ></script>
  <script src="script.js"></script>
  <script src="../../js/logout.js"></script>

</body>
</html>