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

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />

    <title>ABTech</title>
</head>

  <style>

    .background-img {
        background-image: url(../../images/Braitechwall.jpg);
            background-size: cover;
          background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
         height: 150vh;
                }
  </style>

<body>
<div class="background-img">
    <!--Navigation section-->
    <nav class="navbar navbar-expand-lg" style="background-color:#e64e4e">
      <div class="container-fluid">
        <img src="../images/grouplogo.png" style="width: 70px; margin: 5px;" alt="grouplogo"> &nbsp;
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">    
          <ul class="navbar-nav me-auto mb-2 mb-lg-0"  style=" font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">  
            <li class="nav-item">
              <a class="nav-link active" aria-current="page"  style="color: aliceblue;" href="../pages/dashboard/">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  style="color: aliceblue" href="../Admin/"> ADMIN</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link"  style="color: aliceblue;" href="../employees/">Employee</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  style="color: aliceblue;" href="../users/">Users</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link"  style="color: aliceblue;" href="../items/">Items</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  style="color: aliceblue;" href="../services/">Service</a>
            </li>    
            <li class="nav-item">
              <a class="nav-link"  style="color: aliceblue;" href="../index.php">Costumer Transactions</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <button class="btn btn-success" type="button" onclick="logout()">Logout</button>
          </form>
        </div>
      </div>
    </nav>
<br><br><br>
    <!-- End of Navigation section-->

    <center> <h3> Customers Transaction</h3></center>

    <div class="container mt-4 p-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Customer Details
                            <a href="customer-create.php" class="btn btn-primary float-end">Add Customer</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
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
                                                    <a href="customer-view.php?id=<?= $customer['id']; ?>" class="btn btn-secondary btn-sm">View</a> </br></br>
                                                    <a href="customer-edit.php?id=<?= $customer['id']; ?>" class="btn btn-success btn-sm">Edit</a>&nbsp;
                                                    </br></br>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_customer" value="<?=$customer['id'];?>" 
                                                        class="btn btn-danger btn-sm">Delete</button>
            
                                                    </form>
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
        </div>
    </div>

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