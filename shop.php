<?php
session_start();
?>


<!DOCTYPE html>

<html lang="en">

<head>
    <title>Medical Services</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <style>
   
footer.i{
  color:blue;
}
    .container{
        
        padding: 0px;
        width:1495px;
    }
    .card{
        margin:20px;
    }
    .row{
        padding:0px;
        margin:0px;
        width:100%;
    }
 #searchbox{
   width: 50%;
   margin:auto;
   margin-top: 20px;;
  
 }
 #searchbox input,button{
   width:75%;
   border: 2px solid black;
   border-right:0px;
   font-size: 18px;
   padding: 12px; 
   color:black;
 }
 #searchbox button{
width:25%;
background: #0082e6;
color:white;
float:right;
border-left:0px;
border:2px solid black;
 }
 .card{
  border:1px solid black;
 }
    </style>
</head>

<body>
    <nav class="sticky-top">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa fa-bars" style="font-size: 40px;"></i>
        </label>
        <label class="logo"><span><i class="fa fa-stethoscope"></i></span>Medical Services</label>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a class="active" href="#">Shop</a></li> 
            <?php
              $count=0;
              if(isset($_SESSION['cart'])){
                $count=count($_SESSION['cart']);
              }
            ?>
            <li><a href="mycart.php">My Cart(<?php echo $count?>)</a></li>
            <li>

                <a href="about.php">About Us</a></li>
            <li><a href="feed.php">Feedback</a></li>
          
        </ul>
    </nav>
   
  <div id="searchbox">
    <input placeholder="search" class="search-item" type="search">
    <button>search</button>
    
  </div>
<div class="container">
    
    
     <div class="row" >
    <div class="col-lg-3 col-sm-6"  >
            <form action="manage.php" method="POST">
              <div class="card"   data-search="cough syrup"   >
              <img src="images/1.jfif" class="card-img-top">
             <div class="card-body text-center">

              <h5 class="card-title">Cough Syrup</h5>
               <p class=" card-text"> price :Rs 15</p>
              <button href="#"  type="submit"  name="add"class="btn btn-info"> Add To Cart</button>
                  <input type="hidden" name="item_name" value="Cough Syrup">
             <input type="hidden" name="price" value="15">
        
               </div>
             </div>
            </form>       
        </div>

        <div class="col-lg-3 col-sm-6" >
            <form action="manage.php" method="POST">
              <div class="card" data-search="antiseptic" >
              <img src="images/2.jfif" class="card-img-top">
             <div class="card-body text-center">

              <h5 class="card-title">Antiseptic </h5>
               <p class=" card-text"> price :Rs 35</p>
              <button href="#"  type="submit" name="add" class="btn btn-info"> Add To Cart</button>
                  <input type="hidden" name="item_name" value="Antiseptic">
             <input type="hidden" name="price" value="35">
        
               </div>
             </div>
            </form>       
        </div>
        <div class="col-lg-3 col-sm-6"  >
            <form action="manage.php" method="POST">
              <div class="card"data-search="eye drops" >
              <img src="images/3.png" class="card-img-top">
             <div class="card-body text-center">

              <h5 class="card-title">Eye Drops</h5>
               <p class=" card-text"> price :Rs 25</p>
              <button href="#"  type="submit" name="add"  class="btn btn-info"> Add To Cart</button>
                  <input type="hidden" name="item_name" value="Eye Drops">
             <input type="hidden" name="price" value="25">
        
               </div>
             </div>
            </form>       
        </div>
        <div class="col-lg-3 col-sm-6" >
            <form action="manage.php" method="POST">
              <div class="card" data-search="masks" >
              <img src="images/4.jfif" class="card-img-top">
             <div class="card-body text-center">

              <h5 class="card-title">Masks</h5>
               <p class=" card-text"> price : Rs 20</p>
              <button href="#"  type="submit" name="add"  class="btn btn-info"> Add To Cart</button>
                  <input type="hidden" name="item_name" value="Masks">
             <input type="hidden" name="price" value="20">
        
               </div>
             </div>
            </form>       
        </div>
        <div class="col-lg-3 col-sm-6" >
            <form action="manage.php" method="POST">
              <div class="card" data-search="ointment" >
              <img src="images/5.jpg" class="card-img-top">
             <div class="card-body text-center">

              <h5 class="card-title">Ointment</h5>
               <p class=" card-text"> price : Rs 30</p>
              <button href="#"  type="submit" name="add"  class="btn btn-info"> Add To Cart</button>
                  <input type="hidden" name="item_name" value="Ointment">
             <input type="hidden" name="price" value="30">
        
               </div>
             </div>
            </form>       
        </div>
        <div class="col-lg-3 col-sm-6" >
            <form action="manage.php" method="POST">
              <div class="card" data-search="paracetamol" >
              <img src="images/6.jpg" class="card-img-top">
             <div class="card-body text-center">

              <h5 class="card-title">Paracetamol</h5>
               <p class=" card-text"> price : Rs 40</p>
              <button href="#"  type="submit" name="add"  class="btn btn-info"> Add To Cart</button>
                  <input type="hidden" name="item_name" value="paracetamol">
             <input type="hidden" name="price" value="40">
        
               </div>
             </div>
            </form>       
        </div>
        <div class="col-lg-3 col-sm-6" >
            <form action="manage.php" method="POST">
              <div class="card" data-search="sanitizer" >
              <img src="images/7.jfif" class="card-img-top">
             <div class="card-body text-center">

              <h5 class="card-title">sanitizer</h5>
               <p class=" card-text"> price : Rs 30</p>
              <button href="#"  type="submit" name="add"  class="btn btn-info"> Add To Cart</button>
                  <input type="hidden" name="item_name" value="Sanitizer">
             <input type="hidden" name="price" value="30">
        
               </div>
             </div>
            </form>       
        </div>

        <div class="col-lg-3 col-sm-6" >
            <form action="manage.php" method="POST">
              <div class="card" data-search="ear drops" >
              <img src="images/8.jfif" class="card-img-top">
             <div class="card-body text-center">

              <h5 class="card-title">Ear drops </h5>
               <p class=" card-text"> price : Rs 25</p>
              <button href="#"  type="submit" name="add"  class="btn btn-info"> Add To Cart</button>
                  <input type="hidden" name="item_name" value="Ear drops">
             <input type="hidden" name="price" value="25">
        
               </div>
             </div>
            </form>       
        </div>    </div>

</div>
<footer class="sticky-bottom" class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="About.php">About</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
            
            </ul>
            <p class="text-muted small mb-4 mb-lg-0">&copy; Online Medicine shop</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
            
                  <i class="fa fa-facebook fa-2x "></i>
                
              </li>
              <li class="list-inline-item mr-3" >
                
                  <i class="fa fa-twitter fa-2x fa-fw"></i>
              
              </li>
              <li class="list-inline-item mr-3">
                
                  <i class="fa fa-instagram fa-2x "></i>
                
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
<style>
 .fa{
    font-family: 'fontawesome';
   }
    footer.footer {
    padding-top: 3rem;
    padding-bottom: 3rem;
    margin-top: auto;
   }
  .footer{
    margin-top: auto;
  }
  .card img{
    height: 186px;
  }
      </style>
      <script>
        $('.search-item').search({

        });
        </script>
</body>
 