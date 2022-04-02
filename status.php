<?php
$mysqli= new mysqli('localhost', 'root','','sensorsdata');
if(isset($_POST["update"])){
    $temp_status=$_POST["tstatus"];  
    $ekle="UPDATE control SET temp_status=$temp_status WHERE ID=1";
    $m=$mysqli->query($ekle);    
}
if(isset($_POST["update2"])){   
    $lux_status=$_POST["lstatus"];  
    $ekle2="UPDATE control SET lux_status=$lux_status WHERE ID=1";
    $e=$mysqli->query($ekle2); 
}

if(isset($_POST['ledOn'])){
    $sql="UPDATE control SET lux_status=1 WHERE ID=1";
}
elseif(isset($_POST['ledOff'])){
    $sql="UPDATE control SET lux_status=0 WHERE ID=1";
}
if(isset($_POST['ledOn']) || isset($_POST['ledOff']))$result=$mysqli->query($sql);




if(isset($_POST['fanOn'])){
    $sl="UPDATE control SET temp_status=1 WHERE ID=1";
}
elseif(isset($_POST['fanOff'])){
    $sl="UPDATE control SET temp_status=0 WHERE ID=1";
}
if(isset($_POST['fanOn']) || isset($_POST['fanOff']))$result2=$mysqli->query($sl);
?>