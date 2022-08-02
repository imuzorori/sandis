<?php
error_reporting(0);
session_start();
session_destroy();
if($_SESSION['message']){
    $message = $_SESSION['message'];
    echo "<script type= 'text/javascript'>
    alert('$message');</script>";
}
$host = "localhost";
$user ="root";
$password="";
$db="sandisdb";

$data = mysqli_connect($host,$user,$password,$db);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sandi's little angels</title>
    <link rel="stylesheet" href="assets/styles.css">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navigation">
        <label class="logo" for="logo"> Sandi's Little Angels</label>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Admissions</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>

        </ul>
    </nav>
    <div class="section1">
        <label class="heading" for="heading">we create best children foundation</label>
        <img class="main-image" src="assets/images/pre1.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
               <img class="welcome_image" src="assets/images/pre.png" alt="">
            </div>
            <div class="col-md-8">
             <h1> Welcome to Sandi's Little Angeles School</h1>
             <p>Early childhood is a period of enormous growth and development. Children are developing more rapidly during the period from birth to age 5 than at any other time in their lives, shaped in large part by their experiences in the world. These early years of development are critical for providing a firm foundation in cognitive, language, and motor development, as well as social, emotional, regulatory, and moral development (NRC and IOM, 2000). Stimulating, nurturing, and stable relationships with parents and other caregivers are of prime importance to children’s healthy development, and the absence of these factors can compromise children’s development.
                National Academies of Sciences, Engineering, and Medicine. 2012. The Early Childhood Care and Education Workforce: Challenges and Opportunities: A Workshop Report. Washington, DC: The National Academies Press. https://doi.org/10.17226/13238.</p>
            </div>
        </div>
    </div>
    <center>
        <h1> Our Teaching Staff</h1>
    </center>


    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="teachers" src="assets/images/jeff.jpg" alt="">
                <p> jeffrey makoni is the princepal and the founder of the pre school</p>
            </div>
            <div class="col-md-4">
            <img class="teachers" src="assets/images/jeff1.jpg" alt="">
            <p> jeffrey makoni is the princepal and the founder of the pre school</p>
            </div>
            <div class="col-md-4">
            <img class="teachers" src="assets/images/jeff2.jpg" alt="">
            <p> jeffrey makoni is the princepal and the founder of the pre school</p>
            </div>
        </div>
    </div>

    <center>
        <h1> Our Activities for kids</h1>
    </center>


    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="teachers" src="assets/images/learn.jpg" alt="">
                <h3> sports</h3>
            </div>
            <div class="col-md-4">
            <img class="teachers" src="assets/images/learn1.jpg" alt="">
            <h3> religious studies</h3>
            </div>
            <div class="col-md-4">
            <img class="teachers" src="assets/images/learn2.jpg" alt="">
            <h3> writting</h3>
            </div>
        </div>
    </div>
    <center>
        <h1 class="adm">Admissions Form</h1>
    </center>
    <div class="admissions_form" align="center">
        <form action="data_check.php" method="POST">
            <div class="form_container">
                <label class="label_text" for="label"> Name</label>
                <input class="input_design" type="text" name="name">
            </div>
            <div class="form_container">
                <label class="label_text" for="label"> Email</label>
                <input class="input_design" type="text" name="email">
            </div>
            <div class="form_container">
                <label class="label_text" for="label"> Phone</label>
                <input class="input_design" type="text" name="phone">
            </div>
            <div class="form_container">
                <label class="label_text" for="label">Message</label>
                <textarea class="input_text" id="" cols="30" rows="10" name="message" ></textarea>
            </div>
            <div class="form_container">
               
                <input class="btn btn-primary" id="submit" type="submit" name="apply" value="Apply Now">
            </div>
        </form>
    </div>
    <footer>
        <h3 class="footer_text">@copyright All rights Reserved  by Sandi's developers</h3>
    </footer>
</body>
</html>