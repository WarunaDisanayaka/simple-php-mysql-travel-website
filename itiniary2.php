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
        background-image: url("https://i.pinimg.com/564x/98/e6/76/98e676df464de58fc94d7a64e1ec41f5.jpg");
        
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
    
        <!-- start of itinary page-->
         <!-- first blured image -->
       <div class="itinary2bg-image"></div>
    
       <div class="bg-text">
         <h4>2 days</h4>
         <h1 style="font-size:50px">Two Days Itinaries</h1>
       </div>
       <!-- end of blured image-->

       <!-- Itinary section start  -->



       <section class="itinary02-details">
        <div class="container">
          <div class="row">
            <div class="col-4">
              <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Tour 01</a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Tour 02</a>
                <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Tour 03</a>
                <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Tour 04</a>
                <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Tour 05</a>

              </div>
            </div>
            <div class="col-8">
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                  <h3>Pinnawala > Kandy > Sigiriya > Dambulla</h3>
                  <p>Day 01 
                    <br> Our representatives will pick you up at the Airport, Hotel or preferred meeting point and drive you to Pinnawala where you can feed and bathe baby elephants. Then head on to Gem museum, Batik and Silk factory. Move on and vitis to Royal Botanical Gardens, Peradeniya which includes more than 4000 species of plants. Then heading to the Temple of the Sacred Tooth Relic, which houses the relic of the tooth of the Buddha and there you will realise how which significance to Sri Lankan and Buddhist history. Move on to watch Cultural dance show which starts at 5.00 pm and then return back to hotel. Overnight in Kandy.
                    <br><br>
                    Day 02 <br>
                    We will visit to Muthumariamman temple and Spice and herbal garden in Matale en route Dambulla. There you will visit Golden Temple of Dambulla, a cave temple, an impressive World Heritage Site. Then we will drive you to climb Sigiriya Rock Fortress. At the end of your journey drive towards the airport at a suitable time, or to the hotel or desired drop-off location.</p>
                </div>
                <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                  <h3>Kosgoda > Bentota > Hikkaduwa > Galle > Mirrissa </h3>
                  <p>Day 01 <br> Our representatives will pick you up at the Airport, Hotel or preferred meeting point and drive you to Sigiriya. If you feel good and fit enough we will set off to climb Sigiriya. Then we will take you to ride elephants. After riding elephants, it is time to go for a jeep safari to see herds of giant elephants. Water levels and food decide where elephant herds trek, we will decide whether we are taking you to Kaudulla national park or Minneriya national park upon the situation. You will spend overnight in Polonnaruwa.
                    <br><br> 
                     Day 02 <br>
                      In the morning we will drive you to explore ancient city of Polonnaruwa, The second most ancient of Sri Lanka’s kingdoms, where you will see relics, ruins, magnificent monuments, clusters of dozens of dagobas, temples and various other religious buildings. Feel the breeze of ancient times. After exploring ancient times, we will take you to Wood carvings factory where you can walk around and see native handicrafts from small carvings to major art pieces, Gem museum and then Batik and Silk factory.
                    Then head to Dambulla, there you will visit Golden Temple of Dambulla, a cave temple, an impressive World Heritage Site. At the end of your journey drive towards the airport at a suitable time, or to the hotel or desired drop-off location.</p>
                </div>
                <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                  <h3>Dambulla > Sigiriya > Anuradhapura > Puttalam</h3>
                  <p>Day 01 <br>Our representatives will pick you up at the Airport, Hotel or preferred meeting point and drive you to Dambulla, there you will visit Golden Temple of Dambulla, a cave temple, an impressive World Heritage Site If you feel good and fit enough we will set off to climb Sigiriya. Then we will take you to ride elephants. Move on and we will take you to Wood carvings factory where you can walk around and see and native handicrafts from small carvings to major art pieces, Gem museum and then Batik and Silk factory. Stay overnight in Anuradhapura
                    <br><br>
                    Day 02 -Starting journey to explore the Eight Sacred places in Anuradhapura or The Atamasthana; holy places and temples of Buddhists. Anuradhapura ancient city is enrich with archaeological and architectural wonders such as dagobas, Renovated Stupas, Ruins of Stupas, Monasteries & Temples, Statues of Gautama Buddha built during Anuradhapura’s thousand years of rule over Sri Lanka. Then, we will drive to take a visit to Puttalam Salt factory. After watching saltens head over to Chilaw to visit Murugan Temple which popular amongst Hindus. At the end of your journey drive towards the airport at a suitable time, or to the hotel or desired drop-off location. <br>
                   </p>
                </div>
                <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                  <h3>Pinnawala > Kandy > Kitulgala </h3>
                  <p>Day 01 <br>Our representatives will pick you up at the Airport, Hotel or preferred meeting point and drive you to Pinnawala where you can feed baby elephants and see elephants bathing. Then head on to Tea Factory, Gem museum, Wood carvings factory where you can walk around and see native handicrafts from small carvings to major art pieces, Batik and Silk factory. Move on and we will take you to. Then heading to the Temple of the Sacred Tooth Relic, which houses the relic of the tooth of the Buddha and there you will realise how which significance to Sri Lankan and Buddhist history. Move on to watch Cultural dance show which starts at 5.00 pm and then return back to hotel. Overnight in Kandy.
                    <br><br> 
                     Day 02 <br>On the next day you will visit to Royal Botanical Gardens, Peradeniya where which includes more than 4000 species of plants. Head over to Kitulgala where you will chance to experience White Water Rafting. At the end of your journey drive towards the airport at a suitable time, or to the hotel or desired drop-off location.</p>
                </div>
                <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                  <h3>Kosgoda > Bentota > Hikkaduwa > Galle > Mirrissa</h3>
                  <p>Day 01 <br>Our representatives will pick you up at the Airport, Hotel or preferred meeting point and drive you to Kosgoda. Move on and let’s take a boat safari in Madu River, is enrich with biodiversity. Then we will drive you to Kosgoda where Kosgoda Sea Turtle Conservation Project takes place. Recommended if you are interested in the topic of Turtle Conservation, and which is an educational experience for kids and adults as well. Then heading to Kosgoda Experience an enjoyable boat safari in Madu River, is enrich with biodiversity. Then we will drive you to Kosgoda where Kosgoda Sea Turtle Conservation Project takes place.
                    Head over to Galle and take you to sightseeing at Galle Fort and in the city of Galle. Galle Fort, nice place to walk around, take in the scenery, and see museums, colonial buildings and the lighthouse as well. Then heading to Mirissa and in the evening we will take to see stilt fishermen. Spend overnight in Mirissa.
                   <br><br> 
                    Day 02 <br>In the morning 5:30 am we will start whale watching. At the end of your journey drive towards the airport at a suitable time, or to the hotel or desired drop-off location</p>
                  
                </div>

              </div>
            </div>
          </div>
        </div>
       </section>

       <!-- Itinary section end  -->

    
       <br><br><br>
       <section class="formandSLimg">
        <div class="container">
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
       <form action="functions/itinary-two.php" method="POST">
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
         
         <label for="itinary">Itineraries:</label>
         <input type="text" id="itinary" name="itinary" value="">
         
         <p>If you click the "Submit" button, the form-data will be sent to our database to provide the best services for you.</p>
         
         <input type="submit" value="Submit">
       </form> 
     </div>
         <!--end of form-->
 
        </div>
       </section>
       <br><br><br>


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
    
    