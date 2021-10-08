<?php
session_start();
$cat = $_GET['cat'];
include_once("../../db/db.php");
if (
    isset($_POST['fullname']) && isset($_POST['NIC'])
    && isset($_POST['address']) && isset($_POST['email']) 
    && isset($_POST['password']) && isset($_POST['tpno'])
) {

    $NIC = $_POST['NIC'];
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $tpno = $_POST['tpno'];
    
    if($cat == farmer){
        $sql = "INSERT INTO farmer(NIC,password,name,address,tpno,email) VALUES('$NIC','$password','$fullname','$address',$tpno,'$email')";
        $result = mysqli_query($con,$sql);
        if($result){
            echo '<script>alert("successfully registered")</script>';
            header("Location: ../login/login.php");
        }else{
            $error = mysqli_error($con);
            echo ("<script>alert(\"$error\")</script>");
        }
    }else if($cat == buyer){
        $sql = "INSERT INTO buyer(NIC,password,name,address,tpno,email) VALUES('$NIC','$password','$fullname','$address',$tpno,'$email')";
        $result = mysqli_query($con,$sql);
        if($result){
            echo '<script>alert("successfully registered")</script>';
            header("Location: ../login/login.php");
        }else{
            $error = mysqli_error($con);
            echo ("<script>alert(\"$error\")</script>");
        }
    }else if($cat == delivery){
        $sql = "INSERT INTO deliveryPerson(NIC,password,name,address,tpno,email) VALUES('$NIC','$password','$fullname','$address',$tpno,'$email')";
        $result = mysqli_query($con,$sql);
        if($result){
            echo '<script>alert("successfully registered")</script>';
            header("Location: ../login/login.php");
        }else{
            $error = mysqli_error($con);
            echo ("<script>alert(\"$error\")</script>");
        }
    }
    // header("Location: ../login/login.php");

} else {
    header("Location: ../login/login.php");
    echo '<script>alert("details not complete")</script>';
    exit();
}

?>