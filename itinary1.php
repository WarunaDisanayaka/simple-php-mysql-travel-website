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

      /* itinary sections start  */

      .main-txt h1{
    text-align: center;
    margin-top: 30px;
    font-weight: 600;
    text-shadow: 0px 1px 1px black;
    }

    .itinary01 .card{
    border-radius: 5px;
    border: none;
    box-shadow: rgba(0,0,0,0.1) 0px 4px 12px;
}
.itinary01 .card .img{
     border-radius: 5px;
}
.itinary01 .card .card-body{
    background: transparent;
}
.itinary01 .card .card-body h3{
    font-size: 25px;
    font-weight: 600;
}
.itinary .card .card-body p{
  font-weight: 500;
}





      /* itinary sections end  */

       /* Footer start  */
   #footer{
    width: 100%;
    margin-top: 150px;
    text-align: center;
    background: #f9f9f9;
   }
   #footer h1{
    font-weight: 600;
    padding-top: 30px;
    text-shadow: 0px 0px 1px black;
   }
   #footer h1 span{
    color: #ffa500;
   }
   .social-links{
    padding: 10px;
    border-radius: 5px;
    font-size: 20px;
    background: black;
    color: white;
    margin-left: 10px;
    margin-bottom: 10px;
    transition: 0.5s ease;
    cursor: pointer;
   }
   .social-links i:hover{
    background: #ffa500;
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
          <a class="navbar-brand" id="logo" href="travel.html"><span>T</span>ravel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span><i class="fa-solid fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="travel.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="travel.html  #book">Book</a>
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
         <h4>1 day</h4>
         <h1 style="font-size:50px">One Day Itinary</h1>
       </div>
       <!-- end of blured image-->
    
       <br><br><br>

       <!-- Itinary section start  -->

       <section class="itinary01" id="itinary01">
        <div class="container">
    
    
          <div class="main-txt">
            <h1>Itinary 01</h1>
          
    
          <div class="row" style="margin-top: 30px;">

            <div class="col-md-4 py-3 py-md-0">
    
              <div class="card">
                <img src="https://www.andbeyond.com/wp-content/uploads/sites/5/colombo-sri-lanka.jpg" alt="">
                <div class="card-body">
                  <h3>One day Tour- Colombo</h3>
                  <p>Our representatives will pick you up at the Airport, Hotel or preferred meeting point and drive you to Colombo, the capital of the country. There we will take you to visit some prominent sight of the city, such as Seema Malaka and <a href="https://gangaramaya.com/">Gangaramaya Temple</a> , Beire Lake,<a href="https://www.museum.gov.lk/web/index.php?option=com_regionalm&task=regionalmuseum&id=6&lang=en">National Museum</a> , Independence Memorial Hall & Arcade Independence Square, BMICH, Old Colombo Lighthouse, Port of Colombo, Old Parliament and for Shopping as well.
                     At the end of your journey drive towards the airport at a suitable time, or to the hotel or desired drop-off location.</p>
                </div>
              </div>
            </div>


            <div class="col-md-4 py-3 py-md-0">
    
              <div class="card">
                <img src="https://www.newscutter.lk/wp-content/uploads/2022/02/Newscutter_10-Good-Hotels-For-A-Day-Out-In-Negombo.jpg" alt="">
                <div class="card-body">
                  <h3>One day Tour- Negombo</h3>
                  <p>Our representatives will pick you up at the Airport, Hotel or preferred meeting point and drive you to Negombo. There you will visit Negombo Fish Market where you will see various species of sea food / fish. After visiting the main fish market we will take you to explore various religious places such as Catholic Churches, Buddhist Temples and Hindu Kovils all over Negombo.
                     You will take fascinating trips to Dutch Fort , Dutch Canal and Negombo Lagoon. If you are lucky enough to have nice weather, consider a boat ride as well. At the end of your journey drive towards the airport at a suitable time, or to the hotel or desired drop-off location.</p>
                </div>
              </div>
            </div>

            <div class="col-md-4 py-3 py-md-0">
    
              <div class="card">
                <img src="https://www.bestoflanka.com/images/slider/daytours/daytour-sigiriya/01.jpg" alt="">
                <div class="card-body">
                  <h3>One day Tour- Sigiriya and Dambulla</h3>
                  <p>Our representatives will pick you up at the Airport, Hotel or preferred meeting point and drive you to Dambulla, approximate 2.5 hours drive from BIA. There you will visit Golden Temple of Dambulla, a cave temple, an impressive World Heritage Site. After exploring this ancient Buddhist cave temple, you will be driven to Sigiriya Rock Fortress, approximate 30 minutes drive from Golden Temple of Dambulla. If you feel good and fit enough we will set off to climb Sigiriya.
                     Then we will take you for riding elephants or to take a visit to Sigiriya village and there you chance to experience traditional Sri Lanka with all its authenticity. You can spend your time with villages and engage in village activities such as an oxen cart ride, a catamaran ride, and a walk through the fields, and there if you are interested you will learn to cook traditional Sri Lankan food as well. After experiencing village life head back to starting location of village tour in a Tuk Tuk. Then you will visit Gem factory and museum, Batik and Silk factory and Wood carvings factory.
                     At the end of your journey drive towards the airport at a suitable time, or to the hotel or desired drop-off location.</p>
                </div>
              </div>
            </div>


            </div>


            <div class="row" style="margin-top: 30px;">

              <div class="col-md-4 py-3 py-md-0">
      
                <div class="card">
                  <img src="https://countrysrilanka.com/wp-content/uploads/al_opt_content/IMAGE/countrysrilanka.com/wp-content/uploads/elementor/thumbs/istockphoto-485792212-612x612-1-qn0q2r4nsxatnmr2mob02szd9xnqadn14gs8bee6jw.jpg.bv.webp" alt="">
                  <div class="card-body">
                    <h3>One day Tour- Kandy</h3>
                    <p>Our representatives will pick you up at the Airport, Hotel or preferred meeting point and drive you to Pinnawala Elephant Orphanage where you can feed and bathe baby elephants. Head over to Kadugannawa and there you will go on a Tea Factory Visit and Spice and herbal garden. Move on and take a visit to Gem museum, Royal Botanical Gardens, Peradeniya where which includes more than 4000 species of plants and then Batik and Silk factory.
                       Head to the Temple of the Sacred Tooth Relic, which houses the relic of the tooth of the Buddha and there you will realise how which significance to Sri Lankan and Buddhist history. At the end of your journey drive towards the airport at a suitable time, or to the hotel or desired drop-off location.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-4 py-3 py-md-0">
      
                <div class="card">
                  <img src="https://www.pelago.co/img/products/LK-Sri%20Lanka/kitulgala-white-water-rafting-from-nuwara-eliya/6f467b77-367d-43c5-a952-37fcbaad164b_kitulgala-white-water-rafting-from-nuwara-eliya.jpg" alt="">
                  <div class="card-body">
                    <h3>One day Tour- Kitulgala Water Rafting</h3>
                    <p>Our representatives will pick you up at the Airport, Hotel or preferred meeting point and drive you to Water rafting in Kitulgala. There you will chance to experience some adventure activities such as White Water Rafting, Waterfall Abseiling, Canyoning and Zip-line. At the end of your journey drive towards the airport at a suitable time, or to the hotel or desired drop-off location.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-4 py-3 py-md-0">
      
                <div class="card">
                  <img src="https://www.aquaforterestaurant.com/wp-content/uploads/2019/06/Galle-Fort-10.jpg" alt="">
                  <div class="card-body">
                    <h3>One day Tour- Galle</h3>
                    <p>Our representatives will pick you up at the Airport, Hotel or preferred meeting point and drive you to Galle . There you will take a sightseeing at Galle Fort and in the city of Galle. Galle Fort, is a nice place to walk around, take in the scenery, and see museums, colonial buildings and the lighthouse as well. After visiting at Galle fort.
                       Let’s take a boat safari in Madu River, is enrich with biodiversity. Then we will drive you to Kosgoda where Kosgoda Sea Turtle Conservation Project takes place. Recommended if you are interested in the topic of Turtle Conservation, and which is an educational experience for kids and adults as well.
                       At the end of your journey drive towards the airport at a suitable time, or to the hotel or desired drop-off location.</p>
                  </div>
                </div>
              </div>


            




              </div>
            </div>
          </section>





       <!-- Itinary section start  -->





       <div class="main-text">
           <h1><span>B</span>ook This Tour</h1>
       </div>


       
 
       <br><br>

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
        
        <label for="itinary">Choose One Day Package:</label>
        <select name="Dayone" id="Dayone">
          <option value="Colombo">Colombo</option>
          <option value="Kandy">Kandy</option>
          <option value="Sigiriya">Sigiriya & Dambulla</option>
          <option value="Negombo">Negombo</option>
          <option value="Kitulgala">Kitulgala Water Rafting</option>
          <option value="Galle">Galle</option>

        </select>
        
        
        <p>If you click the "Submit" button, the form-data will be sent to our database to provide the best services for you.</p>
        
        <input type="submit" value="Submit">
      </form> 
    </div>
        <!--end of form-->



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
    