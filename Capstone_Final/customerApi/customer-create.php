<?php
session_start();
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
        <link rel="stylesheet" href="style1.css">

    <title>ABTech Customer Details</title>
</head>

<body>
    <br/><br/><br/>
 
   
        <h3 style="color: white; text-align:center">Please Fill up the Forms and your Job Transactions</h3> 
    
             <div class="container mt-5">

              <?php include('message.php'); ?>
             <br/>

         <div class="row">
        <center>
           <div class="card cardsize">
                 <h4>Customer Details / Job Order
                            <a href="../pages/customorder/index.html" class="btn btn-danger">BACK</a></h4> 
                        </div></center>
            
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3 labeler inputer">
                                <label>FullName</label>
                                <input type="text" name="fullname" class="form-control" required>
                            </div>
                            <div class="mb-3 labeler inputer">
                                <label>Company Name</label>
                                <input type="text" name="companyname" class="form-control">
                            </div>
                            <div class="mb-3 labeler inputer">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" required>
                            </div>
                            <div class="mb-3 labeler inputer">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3 labeler inputer">
                                <label>Phone</label>
                                <input type="text" name="phone" class="form-control" required>
                            </div>
                            <div class="mb-3 labeler inputer">
                                <label>Additional Information</label>
                                <input type="text" name="addinfo" class="form-control">
                            </div>

                            <div class="mb-3 labeler inputer  ">
                                <label for="">Job Order</label>
                                <select name="transactions" class="form-control" required>
                                  
                                <option value="">--Please select your job order--</options>
                                <option class="option1" value="Computer Install OS / Formatting">Computer Install OS / Formatting</options>
                                <option class="option1" value="Install MsOffice/Antivirus/Apps etc.">Install MsOffice/Antivirus/Apps etc.</options>
                                <option class="option1" value="Computer Networking and Installation">Computer Networking and Installation</options>
                                <option class="option1" value="Hardware or software error diagnostics and Repair">Hardware or software error diagnostics and Repair</options>
                                <option class="option1" value="Data Recovery (Lost / Deleted files)">Data Recovery (Lost / Deleted files)</options>
                                <option class="option1" value="Virus and Malware Removal">Virus and Malware Removal</options>
                                <option class="option1" value="Web Design and Mobile Programming">Web Design and Mobile Programming</options>
                                <option class="option1" value="System Unit Assembly">System Unit Assembly</options>
                                <option class="option1" value="Others...">Others..."Additional information for your Job description")</options>
                                </select>
                            </div><br/>
                            <div class="mb-3">
                                <button type="submit" name="save_customer" class="btn btn-success">SUBMIT ORDER</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       
        


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>