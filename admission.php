<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
}
elseif($_SESSION['usertype']=='student'){
    header("location:login.php");
}

$host="localhost";
$user ="root";
$password= "";
$db="sandisdb";
$data = mysqli_connect($host,$user,$password,$db);


    $sql="SELECT * from admissions";

           $result=mysqli_query($data,$sql);
           
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin-home-page</title>

    
    <?php
    include('styles_css.php')
    ?>
</head>
<body>
<?php
include('admin_sidebare.php')
?>
 <div class="main_container">
    <center>

    <h1 style="text-transform:capitalize;"> list of applicants </h1>
    <br>
    <table border="1px">

    <tr>
        <th style="padding: 20px; font-size:15px">name</th>
        <th  style="padding: 20px; font-size:15px" >email</th>
        <th  style="padding: 20px; font-size:15px" > phone</th>
        <th  style="padding: 20px; font-size:15px"> Message</th>
    </tr>

    <?php
    while($infor = $result-> fetch_assoc()){

    
    ?>
    <tr>
        <td style="padding:20px;"><?php
        echo "{$infor['name']}"?></td>
        <td style="padding:20px;"><?php
        echo "{$infor['email']}"?></td>
        <td style="padding:20px;"><?php
        echo "{$infor['phone']}"?></td>
        <td style="padding:20px;"><?php
        echo "{$infor['message']}"?></td>
       
    </tr>
    <?php
    }
    ?>
    </table>
    </center>

 </div>
</body>
</html>