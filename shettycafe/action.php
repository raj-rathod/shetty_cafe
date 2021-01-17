<?php

$con = mysqli_connect('localhost', 'root', '', 'shettycafe');
if(!$con){
    echo 'connection error';
}

if(isset($_POST["check"])){
    $email = $_POST["eid"];
    $sql = "DELETE FROM reservation WHERE email='$email'";
    $run_query=mysqli_query($con,$sql);
   if ($run_query) {
       echo "Reservation cancled";
   }
}

if(isset($_POST["cancle"])){
    $sid = $_POST["sid"];
    $sql = "DELETE FROM reservation WHERE seatid='$sid'";
    $run_query=mysqli_query($con,$sql);
   if ($run_query) {
       echo "Reservation cancled";
   }

}

?>