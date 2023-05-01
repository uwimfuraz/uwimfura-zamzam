<?php
$con=new mysqli('localhost','root','','crudOperation');

if(!$con){
    die(mysqli_error($con));
}


if (isset($_POST['sub'])){
    $id=$_GET['updateid'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $password=md5($password);

    $sql = "update crud set name='$name',email='$email',mobile='$mobile',password='$password' where id='$id'";

    $result=mysqli_query($con, $sql);

    if($result){

        header('location:display.php');
    } else{
        die(mysqli_error($con));
    }
    // $con->close();
}

?>