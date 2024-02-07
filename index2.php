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

<body>
    <nav class="sticky-top">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa fa-bars" style="font-size: 40px;"></i>
        </label>
        <label class="logo"><span><i class="fa fa-stethoscope"></i></span>Medical Services</label>
        <ul>
            <li><a class="active" href="#">Home</a></li>
           
            <li><a href="shop.php">Shop</a></li>
            <?php
              $count=0;
              if(isset($_SESSION['cart'])){
                $count=count($_SESSION['cart']);
              }
            ?>
            <li><a href="mycart.php">My Cart(<?php echo $count?>)</a></li>
            <li><a href="#map">Map</a></li>
            <li><a href="#updates">Updates</a></li>
            <li>

                <a href="about.php">About Us</a></li>
            <li><a href="feed.php">Feedback</a></li>
            <li><a href="index.php">Logout</a></li>
        </ul>
    </nav>
    <header class="masthead text-white text-center">
    
          
      <div class="containe">
        <div class="ro">
          <div class="col-xl-9 mx-auto">
           
              <h1>MEDICAL SERVICES</h1>
          </div>
          
        
        </div>
      </div>
    </header>
   

    <section class="features-icons bg-light text-center">
      <div class="container re">
        <div class="row he">
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
              <i class="bi bi-laptop  m-auto text-primary"></i>
              </div>
             <h3><a href="#orderonline"> Order Online</a> </h3>
              <p class="lead mb-0">You can order medicine sitting at your home!</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-layers m-auto text-primary"></i>
              </div>
              <h3><a href="#quality">Quality Assurance</a></h3>
              <p class="lead mb-0">We give assurance you to provide original medicine!</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-check m-auto text-primary"></i>
              </div>
              <h3><a href="#trusted">Trusted Service</a></h3>
              <p class="lead mb-0">Your will get a quick and quality service from us!</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div  id="map"class="wrapper">
      <h1 class="text" id="diseases">Map</h1>
      <img src="images/flourish.png" style="width:180px;" class="underline-img">
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d15202.88235419663!2d83.15500932547319!3d17.710654743083584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1smedical%20shop!5e0!3m2!1sen!2sin!4v1617638514364!5m2!1sen!2sin" width="1100" height="550" style="border:0; margin:50px; margin-left:160px;" allowfullscreen="" loading="lazy"></iframe>

  
    <section class="showcase">
      <div class="container-fluid p-0">
        <div class="row no-gutters">

          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('images/bg-showcase-1.jpg');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2 id="orderonline">Order Online</h2>
            <p class="lead mb-0">Now you don't need to go to medicine store in the days of your sickness.You just order medicine sitting at your home. We will deliver you the medicine according to your order.</p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url('images/bg-showcase-2.jpg');"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h2 id="quality">Quality Assurance</h2>
            <p class="lead mb-0">All medicines of our store are checked by our own pharmacists. So we can assure you to provide original and certififed medicine with valid expirey date and correct price.</p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('images/bg-showcase-3.jpg');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2 id="trusted">Trusted Service</h2>
            <p class="lead mb-0">Ours has a group of young and energetic delivary persons who are ready to serve you the best possible service. So we can get a quick and quality service from us. You will get a friendly behaviour from them.</p>
          </div>
        </div>
      </div>
    </section>
    <div class="wrapper">
      <h1 class="text" id="diseases">Latest Updates</h1>
      <img src="images/flourish.png" style="width:250px;" class="underline-img">
            </div>
<div id="updates" class="container-news">
<!-- start sw-rss-feed code --> 
<script type="text/javascript"> 

rssfeed_url = new Array(); 
rssfeed_url[0]="https://rss.app/feeds/dKor5qs3e1iSvC6T.xml";  
rssfeed_frame_width="500"; 
rssfeed_frame_height="260"; 
rssfeed_scroll="on"; 
rssfeed_scroll_step="6"; 
rssfeed_scroll_bar="off"; 
rssfeed_target="_blank"; 
rssfeed_font_size="12"; 
rssfeed_font_face=""; 
rssfeed_border="on"; 
rssfeed_css_url="https://feed.surfing-waves.com/css/style2a.css"; 
rssfeed_title="on"; 
rssfeed_title_name=""; 
rssfeed_title_bgcolor="#3366ff"; 
rssfeed_title_color="#fff"; 
rssfeed_title_bgimage=""; 
rssfeed_footer="off"; 
rssfeed_footer_name="rss feed"; 
rssfeed_footer_bgcolor="#fff"; 
rssfeed_footer_color="#333"; 
rssfeed_footer_bgimage=""; 
rssfeed_item_title_length="50"; 
rssfeed_item_title_color="#666"; 
rssfeed_item_bgcolor="#fff"; 
rssfeed_item_bgimage=""; 
rssfeed_item_border_bottom="on"; 
rssfeed_item_source_icon="off"; 
rssfeed_item_date="off"; 
rssfeed_item_description="on"; 
rssfeed_item_description_length="120"; 
rssfeed_item_description_color="#666"; 
rssfeed_item_description_link_color="#333"; 
rssfeed_item_description_tag="off"; 
rssfeed_no_items="0"; 
rssfeed_cache = "4f09c3f1667635310254c062e3a9a7ab"; 
//--> 
</script> 
<script type="text/javascript" src="//feed.surfing-waves.com/js/rss-feed.js"></script> 
<!-- The link below helps keep this service FREE, and helps other people find the SW widget. Please be cool and keep it! Thanks. --> 
<div style="color:#ccc;font-size:10px; text-align:right; width:800px;">powered by <a href="https://surfing-waves.com" rel="noopener" target="_blank" style="color:#ccc;">Surfing Waves</a></div> 
<!-- end sw-rss-feed code -->
<div style="color:#ccc;font-size:10px; padding-left:100px; text-align:right;  width:800px;"><a href="https://surfing-waves.com" rel="noopener" target="_blank" style="color:#ccc;"></a></div> 
</div>
    
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="about.php">About</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="feed.php">Contact</a>
              </li>
            
            </ul>
            <p class="text-muted small mb-4 mb-lg-0">&copy; Medical Services </p>
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
  .showcase-text.p{
    padding:40px;
    padding-left: 40px;
  }
  .no-gutters > .col,
.no-gutters > [class*="col-"] {
  padding-right: 40px;
  padding-left: 40px;
}
.text-primary{
  color:#007bff;

}
.masthead{
  padding:0px;
  
}
.m-auto{
  margin:auto;

}
.i{
  font-size: 4.5rem;
}
.re{
  height:200px;
}
.he{
  margin-top:50px;
  
}
.h1{
  color:black;
}
.masthead{
  background: url(images/bg.jpg);
  padding:0px;
}
.container-news{
  margin:30px;
  margin-left: 500px;
}
.wrapper{
  text-align: center;
  width:90%;
}
      </style>
</body>