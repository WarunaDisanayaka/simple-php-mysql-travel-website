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

    .aboutbg-image {
        /* The image used */
        background-image: url("https://i.pinimg.com/564x/eb/29/07/eb29073e3113a562650e9eaaae872a15.jpg");
        
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
        text-align: center;}

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
          </div>
        </div>
      </nav>
    
       <!-- Nav Bar end -->

      <!-- Topic -->
        <div class="aboutbg-image"></div>
            <div class="bg-text">
                <h4>About TrailBlaze</h4>
                <h1 style="font-size:50px">One Day Itinary</h1>
            </div>
        </div>

        <br><br><br>

        <!--content-->
        <div class="row" style="margin-top: 30px; display: flex; align-items: flex-start;">
            <div class="col-md-4 py-3 py-md-0" style="flex: 0 0 auto;">
              <div>
                <img src="logo.png" alt="Logo">
              </div>
            </div>
            
            <div style="flex: 1;">
              <p style="width: 700px;">
                Introducing Trailblaze, a comprehensive platform revolutionizing travel planning for tourists visiting Sri Lanka. Trailblaze features a Resilience Action Plan and a Crisis Response Plan to ensure a safe journey by addressing potential disruptions. The platform offers a wide range of services, including hotel bookings from luxury resorts to budget-friendly options, and reliable taxi services for airport transfers, city tours, and intercity travel.<br><br>
                
                Tourists can also book experienced local travel guides to enrich their experience with insights into Sri Lanka’s history, culture, and natural beauty. Curated travel packages are available, combining accommodations, transportation, guided tours, and activities tailored to different interests.<br><br>
                
                As a full-fledged e-commerce website, Trailblaze simplifies the travel planning and booking process with a user-friendly interface, secure payment gateways, and robust customer support. Trailblaze aims to provide a reliable, convenient, and enriching travel experience for all visitors to Sri Lanka.
              </p>
            </div>
          </div>
          

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
    <p>&copy;Copyright Group AM. All Rights Reserved.</p></div>
 </footer>




 <!-- Footer end  -->


          
          
            
          
          


       </body>
       </html>