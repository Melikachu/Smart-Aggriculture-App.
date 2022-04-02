<?php
$servername="localhost";
$username="root";
$password="";
$database="webpage";
$connect=mysqli_connect($servername,$username,$password,$database);

if(isset($_POST["name"],$_POST["phone"],$_POST["email"],$_POST["subject"],$_POST["message"])){
    $name=$_POST["name"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $subject=$_POST["subject"];
    $message=$_POST["message"];

    $ekle="INSERT INTO contact(name, phone, email, subject, message) VALUES ('".$name."','".$phone."','".$email."','".$subject."','".$message."')";
    if($connect->query($ekle)===TRUE){
        echo '<script>alert=("Message has been sent.");</script>';
    }
}
?>