<?php

require 'connect.php';


    $name = $_POST["yourname"];
    $email = $_POST["youremail"];
    $feedb = $_POST["feedback"];




if($conn){
    $sql ='insert into feedbacks values ("'.$name.'","'.$email.'","'.$feedb.'") ';
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

require 'Feedback.php';

?>