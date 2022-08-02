<?php
session_start();
$host="localhost";
$user ="root";
$password= "";
$db="sandisdb";
$data = mysqli_connect($host,$user,$password,$db);
if($data===false){
    die("connection error");
}
if(isset($_POST['apply'])){
    $fname=$_POST['name'];
    $Email=$_POST['email'];
    $Phone=$_POST['phone'];
    $Message=$_POST['message'];

    $sql="INSERT INTO admissions(name,email,phone,message) 
           VALUE('$fname','$Email','$Phone','$Message')";

           $result=mysqli_query($data,$sql);
           if($result){
            $_SESSION['meassage'] = "your application has been sent succefully ";
            header("location:index.php");
           }
           else{
                echo"failed to insert data"; 
           }
}

?>