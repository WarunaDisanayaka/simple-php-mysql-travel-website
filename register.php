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

    /* itinary pages*/
    
  .itinary1bg-image {
    /* The image used */
    background-image: url("https://i.pinimg.com/564x/9e/dc/1f/9edc1fc26a7a39faf3b831cf041bf622.jpg");
    
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

     /* Login start  */

   #login{
    width: 65%;
    height: 70vh;
    background-color: rgba(67 0 86);
    margin-top: 35px;
    border-radius: 10px;
    box-shadow: rgba(17 , 12, 46, 0.15) 0px 48px 100px 0px;
   }

   #side1 h3{
    color: #ffa500;
    font-weight: bold;
    margin-top: 200px;
   }
   #side2{
    background-color: white;
    height: 70vh;
    border-radius: 10px;
   }
   #side2 h3{
    margin-top: 30px;
    color: #ffa500;
    text-shadow: 0px 1px 1px black;

   }
   .input2 input{
    margin-top: 15px;
    width: 300px;
    border: none;
    border-bottom: 2px solid #ffa500;
   }
   .input2 input ::placeholder{
    font-weight: bold;
   }
   #btnlogin{
    padding-top: 10px;
   }
   #btnlogin a{
    padding: 10px;
    text-decoration: none;
    border-radius: 15px;
    background-color: #ffa500;
    color: white;
    font-weight: bold;
    border: none;
    text-shadow: 0px 1px 1px black;
   }
   @media screen and (max-width:765){
    .input2 input{
        width: 250px;
    }

   }




   /* Login end */

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


    
        <!-- start of itinary page-->
         <!-- first blured image -->
       <div class="itinary1bg-image"></div>
    
       <div class="bg-text">
         
         <h1 style="font-size:50px">Welcome</h1>
       </div>
       <!-- end of blured image-->


       <!-- Login section start  -->

   <div class="container" id="login">
    <div class="row">
      <div class="col-md -5 py-3 py-md-0" id="side1">
        <h3 class="text-center">Register</h3>       
      </div>
      <div class="col-md-7 py-3 py-md-0" id="side2">
        <h3 class="text-center">Create an Account</h3>
        <div class="input2 text-center">
        <form action="functions/registration.php" method="POST">

        <input type="text" name="name" placeholder="Name" required>
                <input type="text" name="username" placeholder="User name" required>
                <input type="text" name="phone" placeholder="Phone">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
        
        <p class="text-center" id="btnlogin"><button type="submit">SIGNUP</button></p>
    </form>
      </div>
      </div>
    </div>
   </div>






   <!-- Login section end -->
    
       <br><br><br>
       <div class="main-text">
           <h1><span>B</span>ook This Tour</h1>
       </div>
 
       <br><br>

      

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
    