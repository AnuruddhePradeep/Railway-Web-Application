<?php

require 'connect.php';


    $firstname = $_POST["firstname"];
    $NIC = $_POST["NIC"];
    $pnum = $_POST["pnum"];
    $email = $_POST["email"];
    $depature = $_POST["depature"];
    $Arrival = $_POST["Arrival"];
    $seats = $_POST["seats"];




if($conn){
    $sql ='insert into Booking values ("'.$firstname.'","'.$NIC.'","'.$pnum.'","'.$email.'","'.$depature.'","'.$Arrival.'","'.$seats.'") ';
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "<script type='text/javascript'> alert ('successful your information')</script>";
        echo "<a href =./Register.php> </a>";
    }

    else{
        die(mysqli_error($conn));
  
    }

}
else{
    die(mysqli_error($conn));
}

require 'Booking.php';

?>