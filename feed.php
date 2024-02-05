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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        body {
            font-family: 'Roboto Slab', serif;
            background: #DAE2F8;
        }
        
        .h1-tag {
            text-align: center;
            margin-top: 4%;
        }
        
        .form-content-section {
            width: 50%;
            margin-left: 25%;
        }
        
        .myclass {
            border-radius: 20px;
            margin: 30px 30px 30px 375px;
        }
        
        nav.ul.li.ul {
            display: none;
        }
        
        ul li:hover ul {
            display: block;
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
            <li><a href="index.php">Home</a></li>

            <li><a href="shop.php">Shop</a>


            <?php
              $count=0;
              if(isset($_SESSION['cart'])){
                $count=count($_SESSION['cart']);
              }
            ?>
            <li><a href="mycart.php">My Cart(<?php echo $count?>)</a></li>


            </li>
            <li>
                <a href="about.php">About Us</a></li>
            <li><a class="active" href="#">Feedback</a></li>
            
        </ul>
    </nav>
    <section id="form-section">
        <h1 class="h1-tag">Your Feedback Is important For Us</h1>
        <form class="form-content-section">
            <div class="form-group">
                <label for="exampleInputText">Name</label>
                <input type="text" class="form-control" id="exampleInputText" placeholder="Enter Your Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputText">Contact Number
</label>
                <input type="text" class="form-control" id="exampleInputText" placeholder="Contact Number">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Comment
</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Comment"></textarea>
            </div>

        </form>
        <button type="submit" class="btn btn-primary myclass">
            Post Comment</button>
    </section>

    <script>
        document.querySelector('.btn-primary').addEventListener('click', success);

        function success() {
            swal("Thank You! ", "For your feedback ", "success ");
        }
    </script>
</body>
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
@media (max-width: 768px){
.myclass{
margin:30px 30px 30px 180px;
}
}
  
      </style>
</html>