<?php
session_start();
require 'dbcon.php';


if(isset($_POST['delete_customer']))
{
    $customer_id = mysqli_real_escape_string($con, $_POST['delete_customer']);

    $query = "DELETE FROM customerjob WHERE id='$customer_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Customer Deleted Successfully";
        header("Location: ../pages/customerjobOrder/index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Customer Not Deleted";
        header("Location: ../pages/customerjobOrder/index.php");
        exit(0);
    }
}

if(isset($_POST['update_customer']))
{
    $customer_id = mysqli_real_escape_string($con, $_POST['customer_id']);

    $fullname = mysqli_real_escape_string($con, $_POST['fullname']);
    $companyname = mysqli_real_escape_string($con, $_POST['companyname']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $addinfo = mysqli_real_escape_string($con, $_POST['addinfo']);
    $transactions = mysqli_real_escape_string($con, $_POST['transactions']);

    $query = "UPDATE customerjob SET fullname='$fullname', companyname='$companyname', address='$address', email='$email', 
    phone='$phone', addinfo='$addinfo', transactions='$transactions' WHERE id='$customer_id' ";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Customer Updated Successfully";
        header("Location: ../pages/customerjobOrder/index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Customer Not Updated";
        header("Location: ../pages/customerjobOrder/index.php");
        exit(0);
    }

}


if(isset($_POST['save_customer']))
{
    $fullname = mysqli_real_escape_string($con, $_POST['fullname']);
    $companyname = mysqli_real_escape_string($con, $_POST['companyname']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $addinfo = mysqli_real_escape_string($con, $_POST['addinfo']);
    $transactions = mysqli_real_escape_string($con, $_POST['transactions']);

    $query = "INSERT INTO customerjob (fullname,companyname,address,email,phone,addinfo,transactions) VALUES ('$fullname','$companyname','$address','$email','$phone','$addinfo','$transactions')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Your Details Form has been  Successfully submitted. We will contact you soon. Thank You!!! ";
        header("Location: customer-create.php");
        exit(0);


        $_SESSION['message'] = "Customer Added Successfully !!! ";
        header("Location: customer-createadmin.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Customer Not Created";
        header("Location: customer-create.php");
        exit(0);
    }
}






if(isset($_POST['save_customerz']))
{
    $fullname = mysqli_real_escape_string($con, $_POST['fullname']);
    $companyname = mysqli_real_escape_string($con, $_POST['companyname']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $addinfo = mysqli_real_escape_string($con, $_POST['addinfo']);
    $transactions = mysqli_real_escape_string($con, $_POST['transactions']);

    $query = "INSERT INTO customerjob (fullname,companyname,address,email,phone,addinfo,transactions) VALUES ('$fullname','$companyname','$address','$email','$phone','$addinfo','$transactions')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
      
        $_SESSION['message'] = "Customer Added Successfully !!! ";
        header("Location: customer-createadmin.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Customer Not Created";
        header("Location: customer-create.php");
        exit(0);
    }
}



?>