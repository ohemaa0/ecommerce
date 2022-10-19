<?php
include("../controllers/customer_controller.php");
// include('../login/register.php');s

if(isset($_POST["addcustomer"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $country = $_POST['country'];


    newCustomer($name, $email, $phone, $password, $cpassword, $address, $city, $country);
}



?>