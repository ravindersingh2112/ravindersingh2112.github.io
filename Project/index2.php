<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tour Guide</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
  </head>
<body>
  <header>
    <nav id="header-nav" class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a href="index2.html" class="pull-left visible-md visible-lg">
            <div id="logo-img"></div>
          </a>

          <div class="navbar-brand">
            <a href="index2.html"><h1>Tour Guide</h1></a>
            <p>
              
              <span><b>Lets Explore Incredible India
                </b>
              </span>
            </p>
          </div>
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
  <span class="sr-only">Toggle Navigation</span>
  <span class="icon-bar"> </span>
  <span class="icon-bar"> </span>
  <span class="icon-bar"> </span>
  <span class="icon-bar"> </span>
  
</button>

        </div>

<div id="collapsable-nav" class="collapse navbar-collapse menu-bar" >
           <ul id="nav-list" class="nav navbar-nav navbar-right">
            <li >
              <a href="index.html">
                <br class="hidden-xs">Map</a>
                <div class="sub-menu-1">
                </div>
            </li>



            <li >
              <a href="#">
                <br class="hidden-xs">North</a>
                <div class="sub-menu-1">
                  <ul>
                    <a href="jammu.html"><li>Jammu and Kashmir</li></a>
                    <a href="himachal.html"><li>Himachal Pradesh</li></a>
                    <a href="uttarakhand.html"><li>Uttarakhand</li></a>
                    <a href="delhi.html"><li>Delhi</li></a>
                    <a href="uttar.html"><li>Uttar Pradesh</li></a>
                    <a href="punjab.html"><li>Punjab</li></a>
                    <a href="haryana.html"><li>Haryana</li></a>
                    <a href="chandigarh.html"><li>Chandigarh</li></a>
                    <a href="raj.html"><li>Rajasthan</li></a>
                  </ul>
                </div>
            </li>
            <li>
              <a href="#">
                <br class="hidden-xs"> South</a>
                <div class="sub-menu-1">
                  <ul>
                    <a href="andra.html"><li>Andra Pradesh</li></a>
                    <a href="karnataka.html"><li>Karnataka</li></a>
                    <a href="kerala.html"><li>Kerala</li></a>
                    <a href="tamil.html"><li>Tamil Nadu</li></a>
                    <a href="telengana.html"><li>Telengana</li></a>
                    <a href="hyderabad.html"><li>Hyderabad</li></a>
                    
                  </ul>
                </div>
            </li>
            <li>
              <a href="#">
                <br class="hidden-xs"> East</a>
                <div class="sub-menu-1">
                  <ul>
                    <a href="bihar.html"><li>Bihar</li></a>
                    <a href="jharkhand.html"><li>Jharkhand</li></a>
                    <a href="odisha.html"><li>Odisha</li></a>
                    <a href="west.html"><li>West Bengal</li></a>
                    <a href="assam.html"><li>Assam</li></a>
                  </ul>
                </div>
            </li>
             <li>
              <a href="#">
                <br class="hidden-xs"> West</a>
                <div class="sub-menu-1">
                  <ul>
                    <a href="gujrat.html"><li>Gujarat</li></a>
                    <a href="maha.html"><li>Maharashtra</li></a>
                    <a href="madhya.html"><li>Madhya Pradesh</li></a>
                    <a href="goa.html"><li>Goa</li></a>
                    
                  </ul>
                </div>
            </li>


            <li>
              <a href="#">
                <br class="hidden-xs"> 
              
              <?php  if (isset($_SESSION['username'])) : ?>
      <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
      <p> <a href="index2.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>


              </a>
            </li>
           <!-- <li id="phone" class="hidden-xs">
              <a href="tel:410-602-5008">
                <span>410-602-5008</span></a><div>* We Deliver</div>
            </li>-->
          </ul><!-- #nav-list -->
        </div><!-- .collapse .navbar-collapse -->
      


      </div>
    </nav>

  </header>
<div class="map">
<div class="slides slowFade">
        <div class="slide">
            <img src="images\bihar4.jpg" alt="img"/>
        </div>
        <div class="slide">
            <img src="images\bihar2.jpg" alt="img"/>
        </div>
        <div class="slide">
            <img src="images\bihar3.jpg" alt="img"/>
        </div>
        <div class="slide">
            <img src="images\uttar5.jpg" alt="img"/>
        </div>
    </div>
  </div>


  <div class="shlok">
    <h1>अतिथिदेवो भव:)</h1>
   <p >
   <br>
   <br> Tour Guide is one of the famous respected and successful names in the global travel industry,with a long and rich company heritage spanning 30 years.The definitive resource for global travel content , its reputation has been built on journalistic credibility.Tour guide is dedicated to the provision of objective ,accurate,informative,and reliable travel content,in various format like mapping ,including Indian travel guide for consumers,Tour Guide for travel industry professional and extensive licensed and bespoke content for commercial partners through its specialist division. A fast growing pioneering and diverse Indian travel content business,contact us to find more about us.
   </p>
  </div>


<br>
<br>


<div id="home-tiles" class="row">
      <div class="col-md-4 col-sm-6 col-xs-12">
        <a href="index.html">
        <div id="menu-tile"><span>Explore</span></div></a>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div id="specials-tile"><span>Book</span></div>
      </div>
      <div class="col-md-4 col-sm-12 col-xs-12">
        <a href="https://www.google.co.in/maps/place/India/@20.0091396,64.4185364,4z/data=!3m1!4b1!4m5!3m4!1s0x30635ff06b92b791:0xd78c4fa1854213a6!8m2!3d20.593684!4d78.96288a" target="_blank">
          <div id="map-tile">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30703679.770462632!2d64.41101336910678!3d20.05011667036712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1666057331485!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <span>map</span>
          </div>
        </a>
      </div>
    </div><!-- End of #home-tiles -->





</div> 





  </div>



  <footer class="panel-footer">
    <div class="container">
      <div class="row">
        <section id="hours" class="col-sm-4">
          <span>About Us:</span><br>
          We provide interface to<br>
          explore India <br>
          from your home.
          <hr class="visible-xs">
        </section>
        <section id="address" class="col-sm-4">
          <span>Address:</span><br>
          Jaypee University of Enginnering and Technology<br>
          Guna , MP 21215
          <p>Let's Explore India</p>
          <hr class="visible-xs">
        </section>
        <section id="testimonials" class="col-sm-4">
          <p>“To other countries, I may go as a tourist, but to India, I come as a pilgrim.”</p>
          <p>"Living in a small town was like living in a glass house!”</p>
        </section>
      </div>
      <div class="text-center">&copy; Copyright Ravinder Singh Pvlt</div>
    </div>
  </footer>


  <!-- jQuery (Bootstrap JS plugins depend on it) -->
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
