<?php 
session_start();
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <title>Medical Services</title>
    <link rel="stylesheet" href="css/home.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        box-sizing: border-box;
    }
    
    body {
        height: 100%;
        width: 100%;
    }
    
    #nav-bar {
        background-color: #46a1b4;
    }
    
    .body{
        
        background-repeat: no-repeat;
        background-size: cover;
    }
    
    .main {
        width: 50%;
        color: #333;
        background: rgba(213, 218, 219, 0.7);
        text-align: center;
        position: absolute;
        padding: 50px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    
    .main.h1 {
        font-size: 400px;
    }
    
    .p {
        font-size: 150px;
    }
    
    .container {
        margin: 600px 100px 20px 100px;
    }
</style>

<body background="images/bg.jpg">
    <nav class="sticky-top">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa fa-bars" style="font-size: 40px;"></i>
        </label>
        <label class="logo"><span><i class="fa fa-stethoscope"></i></span>Medical Services</label>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <?php
              $count=0;
              if(isset($_SESSION['cart'])){
                $count=count($_SESSION['cart']);
              }
            ?>
            <li><a href="mycart.php">My Cart(<?php echo $count?>)</a></li>
                <a class="active" href="#">About Us</a></li>
            <li><a href="feed.php">Feedback</a></li>
            
        </ul>
    </nav>
   
    

<div class="main">
    <h1>About Us..</h1>
    <P>This website is created by
        <strong>MedicAlways </strong>Team,the students of Computer Science and Engineering Department,vignan's institute of information Technology.</P>
    <p>
        Visakhapatnam-530046
    </p>
    <p><strong>Team Members:</strong>
        <italic>vijay,balaram,keerthi,Rupa</italic>
    </p>
            </div>
    
</body>