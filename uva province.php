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
    background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTV6W5p8oJeo21FW-gua0dz1MTOE3n_Gac6qhai2Z3ozD1fFdE2HB-V8OU8B3NU3gLrBo&usqp=CAU");
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
    <h1>Uva Province</h1>
    <h5>Known for its picturesque landscapes, cascading waterfalls, and tea plantations.</h5>
</div>

<!-- badulla Details -->
<div class="main-text">
    <h1><span>B</span>adulla </h1>
</div>

<table>
    <tr>
        <td>
            <div>
                <h2>Ella</h2>
                <p>A scenic hill station with breathtaking views, hiking trails, and the iconic Nine Arches Bridge.</p>
                <img src="https://destinationlesstravel.com/wp-content/uploads/2019/05/DSC_9600-1-1024x684-1024x684.jpg.webp" width="350">
            </div>
        </td>
        <td>
            <div>
                <h2>Dunhinda Falls</h2>
                <p>A magnificent waterfall surrounded by lush greenery, accessible via a short hike.</p>
                <img src="https://i.pinimg.com/564x/ea/02/1b/ea021b021953893f390f6ff2c7a770e5.jpg" width="350">
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div>
                <h2>Muthiyangana Raja Maha Vihara</h2>
                <p>An ancient Buddhist temple with a tranquil ambiance and historical artifacts.
                 </p>
                <img src="https://www.360view.lk/wp-content/uploads/2023/01/Muthiyangana_Raja_Maha_Viharaya_Photos_By_360viewlk-3-of-11.jpg" width="350">
            </div>
        </td>
        <td>
            <div>
                <h2>Bogoda Wooden Bridge: </h2>
                <p>A historic wooden bridge dating back to the Kandyan era, surrounded by paddy fields and mountains.</p>
                <img src="https://www.attractionsinsrilanka.com/wp-content/uploads/2020/07/Bogoda-Wooden-Bridge.jpg" width="350">
            </div>
        </td>
    </tr>
</table>

<!-- monaragala Details -->
<div class="main-text">
    <h1><span>M</span>onaragala </h1>
</div>

<table>
    <tr>
        <td>
            <div>
                <h2>Galabedda Archiology Site</h2>
                <p>The pool of the princess in the palace garden is one of the masterpieces of ancient Sinhala architecture.</p>
                <img src="https://media-cdn.tripadvisor.com/media/photo-s/0d/33/72/99/biso-pokuna.jpg" width="350">
            </div>
        </td>
        <td>
            <div>
                <h2>Buddama Raja Maha Viharaya</h2>
                <p>A serene Buddhist temple known for its ancient cave inscriptions and religious significance.</p>
                <img src="https://i0.wp.com/amazinglanka.com/wp/wp-content/uploads/2019/06/monaragala-14.jpg?ssl=1" width="350">
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div>
                <h2>Maduru Oya National Park</h2>
                <p>Offers wildlife safaris and birdwatching amidst scenic landscapes and ancient ruins.</p>
                <img src="https://lh3.googleusercontent.com/proxy/dIHL05dwp6HTguVTCMBU88zTKOM1QyfrlXGKENgMmBEQDdyWUNFNpQEZmrhgFcW3dmfOs7UNCW4fL7oro9cu_WcA_IlY6RVB5NsHcPyU4rfDCP07wIFa_EMm6ZNVH-IAcz0Nrp44ag" width="350">
            </div>
        </td>
        <td>
            <div>
                <h2>Diyaluma Falls</h2>
                <p>One of Sri Lanka's tallest waterfalls, with multiple cascades and natural pools for swimming.</p>
                <img src="https://voyageinstyle.net/wp-content/uploads/2020/01/Diluyama-m-river2-scaled.jpg" width="350">
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