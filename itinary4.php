<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Travel Website</title>
        <link href="travel.css" rel="stylesheet">
    
        <!-- Bootstrap Link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    
         <!-- Bootstrap Link  -->
    
         <!-- Google fonts  -->
         <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    
    
         <!-- Google fonts  -->

         <!--css part-->
    <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }
    
    h1 {
      text-align: center;
    }

    .mapSL{
      padding: 20px;
      margin-left: 75px;
      float: left;
    }
    map{
        width:600px;
    }
    
    input[type=text], input[type=email], input[type=number], select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    
    input[type=submit] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    input[type=submit]:hover {
      background-color: #45a049;
    }
    
    .form {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
      margin-right: 75px;
      width: 500px;
      float: right;
    }

    .itinary2bg-image {
        /* The image used */
        background-image: url("https://i.pinimg.com/564x/99/4d/a7/994da7e081971c1a94a2b69ec29e99de.jpg");
        
        /* Add the blur effect */
        filter: blur(4px);
        -webkit-filter: blur(4px);
        
        /* Full height */
        height:500px; 
        
        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }
      
      /* Position text in the middle of the page/image */
      .bg-text {
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
        color: white;
        font-weight: bold;
        border: 3px solid #f1f1f1;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        width: 80%;
        padding: 20px;
        text-align: center;
      }

      .main-txt h1{
    text-align: center;
    margin-top: 30px;
    font-weight: 600;
    text-shadow: 0px 1px 1px black;
    }

    .itinary04 .card{
    border-radius: 5px;
    border: none;
    box-shadow: rgba(0,0,0,0.1) 0px 4px 12px;
}
.itinary04 .card .img{
     border-radius: 5px;
}
.itinary04 .card .card-body{
    background: transparent;
}
.itinary04 .card .card-body h3{
    font-size: 25px;
    font-weight: 600;
}
.itinary04 .card .card-body p{
  font-weight: 500;
}

    </style>
    
    <!--end of form css part-->
    
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
    
        <!-- Font awesome cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
        <!-- Font awesome cdn -->
         
       <!-- Nav BAr start -->
    
       <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
          <a class="navbar-brand" id="logo" href="travel.php"><span>T</span>ravel</a>
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
          </div>
        </div>
      </nav>
    
       <!-- Nav Bar end -->
    
        <!-- start of itinary page-->
         <!-- first blured image -->
       <div class="itinary2bg-image"></div>
    
       <div class="bg-text">
         <h4>Itinary 4</h4>
         <h1 style="font-size:50px">Four Days (3 Nights)</h1>
       </div>
       <!-- end of blured image-->
    
       <br><br><br>
       <div class="main-text">
           <h1><span>B</span>ook This Tour</h1>
       </div>
 
       <br><br><br>


       <!-- Itinary section start  -->

       <section class="itinary03" id="itinary03">

        <div class="container">
          <div class="main-txt">
            <h1>Itinary 04</h1>

            <div class="row" style="margin-top: 30px;">

              <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                  <img src="https://d31t1a4b1z64ez.cloudfront.net/2023/05/ruwanveliseya-anuradhapura_14_11zon.webp" alt="">
                  <h3>Four Days Tour 01</h3>
                  <div class="container text-center">
                    <p>Anuradhapura > Polonnaruwa > Sigiriya > Dambulla > Pinnawala</p>
                </div>
            </div>
          </div>

          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="https://www.holidify.com/images/cmsuploads/compressed/Postoffice-1-nuwaraeliya-Srilanka_20220801214607.jpg" alt="">
              <h3>Four Days Tour 02</h3>
              <div class="container text-center">
                <p>Pinnawala > Kandy > Nuwara Eliya > Ella > Udawalawe > Ratnapura</p>
            </div>
        </div>
      </div>

      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="https://res.klook.com/images/fl_lossy.progressive,q_65/c_fill,w_1295,h_728/w_80,x_15,y_15,g_south_west,l_Klook_water_br_trans_yhcmh3/activities/fr91zsncxomsfdwrcpqe/PinnawalaElephantOrphanagePrivateDayTripfromColombo.jpg" alt="">
          <h3>Four Days Tour 03</h3>
          <div class="container text-center">
            <p>Pinnawala > Sigiriya > Dambulla > Kandy > Nuwara Eliya > Kitulgala</p>
        </div>
    </div>
  </div>





        </div>


        <div class="row" style="margin-top: 30px;">

          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="https://images.squarespace-cdn.com/content/v1/596b2969d2b85786e6892853/1531738844396-H040L4I7S80ZGQV196K4/DJI_0780.jpg?format=1500w" alt="">
              <h3>Four Days Tour 04</h3>
              <div class="container text-center">
                <p>Kandy > Nuwara Eliya > Horton Plains > Kitulgala</p>
            </div>
        </div>
      </div>

      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="https://skift.com/wp-content/uploads/2022/05/stupa-5327512_1920-e1653571186468.jpg" alt="">
          <h3>Four Days Tour 05</h3>
          <div class="container text-center">
            <p>Galle > Mirissa > Yala > Ella > Nuwara Eliya > Kitulgala</p>
        </div>
    </div>
  </div>

  <div class="col-md-4 py-3 py-md-0">
    <div class="card">
      <img src="https://cdn.getyourguide.com/img/tour/5e57a39572e57.jpeg/145.jpg" alt="">
      <h3>Three Days Tour Customize</h3>
      <div class="container text-center">
        <p>Please Contact us</p>
    </div>
</div>
</div>





    </div>
        </div>
       </section>

       <br><br>






       <!-- Itinary section end  -->


       <!--Sri lankan map-->
       <div class="mapSL">
        <img src="https://i.pinimg.com/564x/a3/34/07/a33407b3a53344ba20ee2d925d9f3822.jpg" class="map">
       </div>
       <!--end of the div tag of the map-->


       <!--start of form-->
    
    
    <div class="form">
      <form action="/action_page.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        
        <label for="location">Location:</label>
        <input type="text" id="location" name="location">
        
        <label for="nic">NIC/Passport number:</label>
        <input type="text" id="nic" name="nic">
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        
        <label for="cnumber">Contact number:</label>
        <input type="number" id="cnumber" name="cnumber">
        
        <label for="itinary">Choose Three Days Package:</label>
        <select name="Dayfour" id="Dayfour">
          <option value="Tour1">Tour 01</option>
          <option value="Tour2">Tour 02</option>
          <option value="Tour3">Tour 03</option>
          <option value="Tour4">Tour 04</option>
          <option value="Tour5">Tour 05</option>
          <option value="Customize">Customize</option>

        
        <p>If you click the "Submit" button, the form-data will be sent to our database to provide the best services for you.</p>
        
        <input type="submit" value="Submit">
      </form> 
    </div>
        <!--end of form-->


    </body>
    </html>
    