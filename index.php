<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel Website</title>
    <link href="travel.css" rel="stylesheet">

    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


     <!-- Bootstrap Link  -->
     
     <!-- Bootstrap icons link  -->

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

     <!-- Bootstrap icons link  -->

     <!-- Google fonts  -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">


     <!-- Google fonts  -->


  </head>
  <body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    

    <!-- Font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Font awesome cdn -->
     
   <!-- Nav BAr start -->
   <nav class="navbar navbar-expand-lg" id="navbar">
    <div class="container">
      <img src="logo.png" height="100" width="100">
      <a class="navbar-brand" id="logo" href="travel.php"><span>T</span>railBlaze</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span><i class="fa-solid fa-bars"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" href="travel.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#book">Book</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#packages">Packages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="text" placeholder="Search">
          <button class="btn btn-primary" type="button">Search</button>
        </form>
        <div class="icons">
          <a href="login.php"><img src="https://static.vecteezy.com/system/resources/thumbnails/007/033/146/small/profile-icon-login-head-icon-vector.jpg" alt="" width="18px">Login</a>
          <a href="register.php"><img src="https://static.vecteezy.com/system/resources/thumbnails/007/033/146/small/profile-icon-login-head-icon-vector.jpg" alt="" width="18px">Register</a>
        </div>
      </div>
    </div>
  </nav>

   <!-- Nav Bar end -->

   <!-- Home section start  -->
    <div class="home">
        <div class="content">

            <h5>Ayubowan</h5>
            <h1>Visit <span class="changecontent"></span></h1>
            <p>We Don't Just Plan Trips, We Craft Unforgettable Adventures.</p>
            <a href="#book">Book Place</a>
        </div>
    </div>


   <!-- Home section end  -->

   <!-- Section book start  -->

   <section class="book" id="book">
    <div class="container">
        <div class="main-text">
            <h1><span>B</span>ook</h1>
        </div>

        <div class="row">

            <div class="col-md-6 py-3 py-md-0">
                <div class="card">
                    <img src="places-to-visit-in-in-sri-lanka-one-day-1280x765.jpg" alt="">
                </div>
            </div>

            <div class="col-md-6 py-md-0">
                <form action="#">

                    <input type="text" class="form-control" placeholder="Where To" required><br>
                    <input type="text" class="form-control" placeholder="How Many" required><br>
                    <input type="date" class="form-control" placeholder="Arrivals" required><br>
                    <input type="date" class="form-control" placeholder="Leaving" required><br>
                    <textarea class="form-control" rows="5" name="text" placeholder="Enter Your Name & Details"></textarea>
                    <input type="submit" value="Book Now" class="submit" required>



                </form>
            </div>
        </div>
    </div>
   </section>


   <!-- Section book end  -->

  <!-- Section Packages Start  -->

  <section class="packages" id="packages">
    <div class="container">

        <div class="main-txt">
            <h1><span>P</span>ackages</h1>
        </div>

        <div class="row" style="margin-top:  30px;">

            <div class="col-md-4 py-3 py-md-0">

                <div class="card">
                    <img src="itinary 01.jpg" alt="" height="250">
                    <div class="card-body">
                        <h3>Itinary 01</h3>
                        <a href="itinary1.php">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">

                <div class="card">
                    <img src="https://i.pinimg.com/736x/d7/af/36/d7af36c8d44b7f5b1d09f8426348b302.jpg" alt="" height="250">
                    <div class="card-body">
                        <h3>Itinary 02</h3>
                        <a href="itiniary2.php">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">

                <div class="card">
                    <img src="https://i.pinimg.com/564x/9e/05/12/9e0512a2c60f97543add6870777e746a.jpg" alt=""height="250">
                    <div class="card-body">
                        <h3>Itinary 03</h3>
                        <a href="itinary3.php">Book Now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top:  30px;">

            <div class="col-md-4 py-3 py-md-0">

                <div class="card">
                    <img src="https://i.pinimg.com/564x/a8/05/9b/a8059b1d9c31774c02fb3b737f36eb5f.jpg" alt="" height="250">
                    <div class="card-body">
                        <h3>Itinary 04</h3>                        
                        <a href="itinary4.php">Book Now</a>

                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">

                <div class="card">
                    <img src="https://i.pinimg.com/736x/02/15/65/021565f807051adf61eeaa504c212b53.jpg" alt="" height="250">
                    <div class="card-body">
                        <h3>Itinary 05</h3>                        
                        <a href="itinary5.php">Book Now</a>

                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">

                <div class="card">
                    <img src="https://i.pinimg.com/564x/d7/22/18/d72218f3b52bf80cfbb20ffab360b902.jpg" alt="" height="250">
                    <div class="card-body">
                        <h3>Customize your Itinary 06</h3>                        
                        <a href="itinaryC.php">Book Now</a>

                    </div>
                </div>
            </div>
        </div>

    </div>
   </section>

   


   <!-- Section Packages end  -->

   
<!-- Section services start  -->
<section class="services" id="services">
    <div class="container">


      <div class="main-txt">
        <h1><span>S</span>ervices</h1>
      </div>

      <div class="row" style="margin-top: 30px;">
        <div class="col-md-4 py-3 py-md-0">

          <div class="card">
            <i class="fas fa-hotel"></i>
            <div class="card-body">
              <h3>Hotels</h3>
              <p>You can choose from variety of hotels for your comfortable stay.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 py-3 py-md-0">

          <div class="card">
            <i class="fas fa-utensils"></i>
            <div class="card-body">
              <h3>Food & Drinks</h3>
              <p>You can choose from variety of hotels for your comfortable stay.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 py-3 py-md-0">

          <div class="card">
            <i class="fas fa-bullhorn"></i>
            <div class="card-body">
              <h3>Travel Guide</h3>
              <p>You can choose one of our giudes to enjoy more informative journey.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row" style="margin-top: 30px;">
        <div class="col-md-4 py-3 py-md-0">

          <div class="card">
            <i class="fas fa-gift"></i>
            <div class="card-body">
              <h3>Keep-Sake</h3>
              <p>You can choose from variety of hotels for your comfortable stay.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 py-3 py-md-0">

          <div class="card">
            <i class="fas fa-car"></i>
            <div class="card-body">
              <h3>Taxi services</h3>
              <p>You can choose from variety of vehicles for your comfortable travel.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 py-3 py-md-0">

          <div class="card">
            <i class="fas fa-hiking"></i>
            <div class="card-body">
              <h3>Adventures</h3>
              <p>You can choose from variety of hotels for your comfortable stay.</p>
            </div>
          </div>
        </div>




      </div>
    </div>
  </section>



 <!-- Section services end  -->


 <!-- Section Gallery start  -->

 <section class="gallery" id="gallery">
  <div class="container">
    <div class="main-txt">
      <h1><span>G</span>allery</h1>
    </div>

    <div class="row" style="margin-top: 30px;">

      <p>"Here are some more tourist attracted places to visit in each province of Sri Lanka."</p>

      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
            <center><img src="https://img.freepik.com/premium-vector/western-province-map-administrative-division-sri-lanka-vector-illustration_601298-25941.jpg" alt="" height="350" width="350"></center>
            <div class="card-body">
              <h3>Western province</h3>
              <a href="western province.php"><button id="about-btn">view places</button></a>
            </div>
        </div>
      </div>

      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <center><img src="https://static.vecteezy.com/system/resources/previews/039/353/098/non_2x/central-province-map-administrative-division-of-sri-lanka-illustration-vector.jpg" alt=""height="350" width="350"></center>
            <div class="card-body">
              <h3>Central province</h3>
              <a href="central province.php"><button id="about-btn">view places</button></a>
            </div>
        </div>
      </div>
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <center><img src="https://static.vecteezy.com/system/resources/previews/039/353/153/original/north-central-province-map-administrative-division-of-sri-lanka-illustration-vector.jpg" alt=""height="350" width="350"></center>
            <div class="card-body">
              <h3>North Central province</h3>
              <a href="north central province.php"><button id="about-btn">view places</button></a>
            </div>
        </div>
      </div>
    </div>

    <div class="row" style="margin-top: 30px;">
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <center><img src="https://img.freepik.com/premium-vector/north-western-province-map-administrative-division-sri-lanka-vector-illustration_601298-25921.jpg" alt=""height="350" width="350"></center>
            <div class="card-body">
              <h3>North Western province</h3>
              <a href="northwestern province.php"><button id="about-btn">view places</button></a>
            </div>
        </div>
      </div>

      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <center><img src="https://static.vecteezy.com/system/resources/previews/039/353/956/original/northern-province-map-administrative-division-of-sri-lanka-illustration-vector.jpg" alt=""height="350" width="350"></center>
            <div class="card-body">
              <h3>Nothern province</h3>
              <a href="northern province.php"><button id="about-btn">view places</button></a>
            </div>
        </div>
      </div>
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6PCGvcBbMQcQrXtyZ2B3yuKUEBg4X-nvnJQ&s" alt=""height="350" width="350"></center>
            <div class="card-body">
              <h3>Southern province</h3>
              <a href="southern province.php"><button id="about-btn">view places</button></a>
            </div>
        </div>
      </div>
    </div>

    <div class="row" style="margin-top: 30px;">
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <center><img src="https://static.vecteezy.com/system/resources/previews/039/353/115/original/sabaragamuwa-province-map-administrative-division-of-sri-lanka-illustration-vector.jpg" alt=""height="350" width="350"></center>
            <div class="card-body">
              <h3>Sabaragamuwa province</h3>
              <a href="sabaragamu province.php"><button id="about-btn">view places</button></a>
            </div>
        </div>
      </div>

      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <center><img src="https://static.vecteezy.com/system/resources/previews/039/353/157/original/uva-province-map-administrative-division-of-sri-lanka-illustration-vector.jpg" alt=""height="350" width="350"></center>
            <div class="card-body">
              <h3>Uva province</h3>
              <a href="uva province.php"><button id="about-btn">view places</button></a>
            </div>
        </div>
      </div>
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
            <center><img src="https://static.vecteezy.com/system/resources/previews/039/354/237/original/eastern-province-map-administrative-division-of-sri-lanka-illustration-vector.jpg" alt=""height="350" width="350"></center>
            <div class="card-body">
              <h3>Eastern province</h3>
              <a href="eastern province.php"><button id="about-btn">view places</button></a>
            </div>
        </div>
      </div>


    </div>

  </div>
 </section>



 <!-- Section Gallery end  -->




 <!-- About start  -->
  <section class="about" id="about">
    <div class="container">
      <div class="main-txt">
        <h1>About <span>Us</span></h1>
      </div>

      <div class="row" style="margin-top: 50px;">

        <div class="col-md-6 py-3 py-md-0">
          <div class="card">
            <img src="https://www.backpackerbanter.com/blog/wp-content/uploads/2018/11/best-places-to-visit-in-sri-lanka-backpacker-travel-sigiriya-kandy-dambulla-elephants-1920x1014.jpg" alt="">
          </div>
        </div>

        <div class="col-md-6 py-3 py-md-0">
          <h2>How TrailBlaze Works</h2>
          <p>This is about us</p>
          <a href="about.php"><button id="about-btn">Read More...</button></a>
        </div>

      </div>
    </div>
  </section>




 <!-- About end  -->

 <!-- Footer start  -->

 <footer id="footer">
  <h1><span>T</span>ravel</h1>
  <p>This is our website</p>
  <div class="social-links">
    <i class="fa-brands fa-twitter"></i>
    <i class="fa-brands fa-instagram"></i>
    <i class="fa-brands fa-youtube"></i>
  </div>

  <div class="credit">
    <p>Designed By </p>
  </div>
  <div class="copyright">
    <p>&copy;Copyright Group 14. All Rights Reserved.</p></div>
 </footer>




 <!-- Footer end  -->








      

  </body>
</html>