<!DOCTYPE html>
<?php
session_start();
?>
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
<style>
.row{

    margin: auto;
    width: 100%;
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
            <li><a  href="home.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <?php
              $count=0;
              if(isset($_SESSION['cart'])){
                $count=count($_SESSION['cart']);
              }
            ?>
            <li><a  class="active" href="mycart.php">My Cart(<?php echo $count?>)</a></li>
            <li>

                <a href="about.php">About Us</a></li>
            <li><a href="feed.php">Feedback</a></li>
            
        </ul>
    </nav>
    <div class="container">
    <div class="row" style="margin:auto;">
        <div class="col-lg-12 text-center border rounded bg-light my-5">
            <h1>My Cart</h1>
        </div>
 <div class="col-lg-8">
         <table class="table">
         <thead class="text-center">
           <tr>
              <th scope="col">Serial.No</th>
             <th scope="col">Item Name</th>
             <th scope="col">Item Price</th> 
             <th scope="col">Quantity</th>
             <th scope="col">Total</th>

             <th scope="col">Remove</th>
            
             
          </tr>
          </thead>
         <tbody class="text-center">
             <?php 
             
             if(isset($_SESSION['cart'])){
                  foreach($_SESSION['cart'] as $key =>$value){
                      $r=$key+1;
                      
                     echo "
                 <tr>
                 <td>$r</td>
                 <td>$value[item_name]</td>
                 
                 <td>$value[price]<input type='hidden' class='iprice' value='$value[price]'></td>
                 <td><input type='number' class='text-center iquantity' onchange='subtotal()' value='$value[Quantity]' min='1' max='10'></td>
                 <td class='itotal'></td>
                 <td>
                 <form action='manage.php' method='POST'>
                 <button name='remove' class='btn btn-sm btn-outline-danger' >REMOVE</button>
                 <input type='hidden' name='item_name' value='$value[item_name]'>
                 </form>
                   
                 </td>
                 </tr>

                 ";
                  } 
                }
             ?>
        
        
         </tbody>
         </table>
</div>
<div class="col-lg-4">
   <div class="border bg-light rounded p-4">
     <h3>Total:</h3>
     <h5 class="text-right" id="gtotal"></h5> 
</div>

<div class="form-group">
  <a href='index.php'>
                        <button type="submit"  class="btn btn-primary btn-block" name="submit">purchase now</button>  
  </a> 
                        </div>
</div>

    </div>
</div>
<footer class="footer bg-light">
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
    padding-bottom: 3rem
}
  
      </style>
   
   
<script>
 var gt=0;
    var iprice=document.getElementsByClassName('iprice');
    var iquantity=document.getElementsByClassName('iquantity');
    var itotal=document.getElementsByClassName('itotal');
    var gtotal=document.getElementById('gtotal');
    function subtotal(){
        gt=0;
        for(i=0;i<iprice.length;i++){
          itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
          gt=gt+(iprice[i].value)*(iquantity[i].value);
        }
        gtotal.innerText=gt;
    }
    subtotal();
    </script>
</body>