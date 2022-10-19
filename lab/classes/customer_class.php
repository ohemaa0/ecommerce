<?php
include("../settings/db_class.php");

class customer_class extends db_connection{
    function addCustomer($name, $email, $phone, $password, $cpassword, $address, $city, $country){

        $sql = "INSERT INTO customer (customer_name, customer_email, customer_pass, customer_country, customer_city, customer_contact) 
        VALUES('$name', '$email', '$phone', '$password', '$address', '$city', '$country') ";
        return $this->db_query($sql);
    }

    function editCustomer($id){

    }

    function delteCustomer(){
        
    }
}


?>