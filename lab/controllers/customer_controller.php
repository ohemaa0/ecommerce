<?php
include_once("../classes/customer_class.php");

function newCustomer($name, $email, $phone, $password, $cpassword, $address, $city, $country){
    $newcustomer = new customer_class();
echo "hjkgjhj";
    return $newcustomer->addCustomer($name, $email, $phone, $password, $cpassword, $address, $city, $country);

    // if($newcustomer->)
}


?>