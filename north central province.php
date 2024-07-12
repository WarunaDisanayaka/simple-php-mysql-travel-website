<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Travel Website</title>
<link href="travel.css" rel="stylesheet">

<!-- Bootstrap Link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- Google fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<!-- Google fonts -->

<!-- Font awesome cdn -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<!-- Font awesome cdn -->

<!-- CSS -->
<style>
body {
    font-family: 'Roboto', sans-serif;
}

.navbar-brand span {
    color: #3498db;
}

.place-image {
    background-image: url("https://us.lakpura.com/cdn/shop/files/LK94007343-11-E_705c7c9b-c12b-430c-bd59-26549259b1d8.jpg?v=1660718656&width=3840");
    filter: blur(4px);
    -webkit-filter: blur(4px);
    height: 500px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.bg-text {
    background-color: rgba(0,0,0, 0.4);
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

.main-text h1 {
    text-align: center;
    margin-top: 20px;
}

table {
    width: 100%;
    margin: 20px 0;
}

td {
    vertical-align: top;
    padding: 20px;
}

td div {
    width: 100%;
    box-sizing: border-box;
    opacity: 0;
    animation: slideIn 1s forwards;
}

td:nth-child(1) div {
    animation-delay: 0.5s;
}

td:nth-child(2) div {
    animation-delay: 1s;
}

@keyframes slideIn {
    from {
        transform: translateX(-100%);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}

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
<!-- CSS -->
</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Navbar -->
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
<!-- Navbar -->

<!-- Topic -->
<div class="place-image"></div>
<div class="bg-text">
    <h1>North Central Province</h1>
    <h5>Home to ancient kingdoms, sacred Buddhist sites, and vast reservoirs.</h5>
</div>

<!-- Anuradhapura Details -->
<div class="main-text">
    <h1><span>A</span>nuradhapura </h1>
</div>

<table>
    <tr>
        <td>
            <div>
                <h2>Anuradhapura Ancient City</h2>
                <p>A UNESCO World Heritage site with ruins of ancient palaces, monasteries, and stupas.</p>
                <center><img src="https://srilankafinder.com/wp-content/uploads/2016/12/Anuradhapura-view.jpg" width="350"></center>
            </div>
        </td>
        <td>
            <div>
                <h2>Jaya Sri Maha Bodhi</h2>
                <p>A sacred fig tree believed to be the oldest historically authenticated tree in the world.</p>
                <center><img src="https://www.attractionsinsrilanka.com/wp-content/uploads/2020/09/Jaya-Sri-Maha-Bodhi.jpg" width="350"></center>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div>
                <h2>Ruwanwelisaya</h2>
                <p>A massive stupa known for its architectural grandeur and serene surroundings.</p>
                <center><img src="https://www.360view.lk/wp-content/uploads/2020/04/IMG_2354-1-1024x683.jpg" width="350"></center>
            </div>
        </td>
        <td>
            <div>
                <h2>Mihintale</h2>
                <p>A mountain peak where Buddhism was introduced to Sri Lanka, with ancient shrines and panoramic views.</p>
                <center><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d6/Mihinthale%2C_Sri_Lanka.jpg/2560px-Mihinthale%2C_Sri_Lanka.jpg" width="350"></center>
            </div>
        </td>
    </tr>
</table>

<!-- polonnaruwa Details -->
<div class="main-text">
    <h1><span>P</span>olonnaruwa </h1>
</div>

<table>
    <tr>
        <td>
            <div>
                <h2>Polonnaruwa Ancient City</h2>
                <p>Another UNESCO World Heritage site featuring well-preserved ruins of temples and palaces.</p>
                <center><img src="https://t3.ftcdn.net/jpg/02/28/97/24/360_F_228972453_OnAkAPSw9RmGPh1ryLoB6znIoPgST5wh.jpg" width="350"></center>
            </div>
        </td>
        <td>
            <div>
                <h2>Gal Vihara</h2>
                <p>Famous for its colossal statues of Buddha carved into a granite rock face.</p>
                <center><img src="https://media.timeout.com/images/105249545/image.jpg" width="350"></center>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div>
                <h2>Parakrama Samudra</h2>
                <p>A vast reservoir built by King Parakramabahu I, still used for irrigation.</p>
                <center><img src="https://leisureandme.com/wp-content/uploads/2023/08/Parakrama-Samudraya-Sri-Lanka.jpg" width="350"></center>
            </div>
        </td>
        <td>
            <div>
                <h2>Archaeological Museum, Polonnaruwa</h2>
                <p>Houses artifacts and exhibits from the ancient city's history.</p>
                <center><img src="https://live.staticflickr.com/5106/5594749975_df343ece6b_h.jpg" width="350"></center>
            </div>
        </td>
    </tr>
</table>

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