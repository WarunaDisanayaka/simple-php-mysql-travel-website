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
    background-image: url("https://upload.wikimedia.org/wikipedia/commons/f/f7/Batticaloa_lagoon%2C_sunset.jpg");
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
    <h1>Eastern Province</h1>
    <h5>Known for its beautiful beaches, Hindu temples, and vibrant cultural heritage.</h5>
</div>

<!-- trincomalee Details -->
<div class="main-text">
    <h1><span>T</span>rincomalee </h1>
</div>

<table>
    <tr>
        <td>
            <div>
                <h2>Nilaveli Beach</h2>
                <p>A pristine beach known for its clear blue waters and soft sands.</p>
                <center><img src="https://www.news.lk/images/images/New/Tourism/Nilaveli_beach_5.jpg" width="350"></center>
            </div>
        </td>
        <td>
            <div>
                <h2>Pigeon Island National Park</h2>
                <p>A marine sanctuary popular for snorkeling and diving.</p>
                <center><img src="https://upload.wikimedia.org/wikipedia/commons/5/5f/Pigeon_Island_National_Park%2C_Trincomalee.jpg" width="350"></center>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div>
                <h2>Koneswaram Temple</h2>
                <p>A Hindu temple with panoramic views of the ocean and coastline.</p>
                <center><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/Spiritual_16.jpg/1200px-Spiritual_16.jpg" width="350"></center>
            </div>
        </td>
        <td>
            <div>
                <h2>Uppuveli Beach</h2>
                <p>Offers relaxation and water sports activities in a tranquil setting.</p>
                <center><img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/425142876.jpg?k=f6b92e7c1672ae941f7b14ccce9792d0688521f286b98a1e83067153bab5dae7&o=&hp=1" width="350"></center>
            </div>
        </td>
    </tr>
</table>

<!-- batticaloa Details -->
<div class="main-text">
    <h1><span>B</span>atticaloa </h1>
</div>

<table>
    <tr>
        <td>
            <div>
                <h2>Batticaloa Fort</h2>
                <p>A Dutch fort overlooking the lagoon, offering historical insights.</p>
                <center><img src="https://archives1.sundayobserver.lk/sites/default/files/news/2023/05/19/21-Dutch-02.jpg" width="350"></center>
            </div>
        </td>
        <td>
            <div>
                <h2>Kallady Beach</h2>
                <p>A peaceful beach with shallow waters ideal for swimming and family outings.</p>
                <center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTU_69_rvZDcRchsbA67ng1BgEbOb3H4WO6qDi95tPEmDsaArRacltL_ke0UVfkxEuvyXM&usqp=CAU" width="350"></center>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div>
                <h2>Pasikudah Beach</h2>
                <p>Known for its shallow waters and coral reefs, perfect for snorkeling.</p>
                <center><img src="https://www.lovesrilanka.org/wp-content/uploads/2019/09/LSL_Cropped_Pasikuda_Bay_800x520.jpg" width="350"></center>
            </div>
        </td>
        <td>
            <div>
                <h2>Batticaloa Lagoon</h2>
                <p>Explore the lagoon by boat, known for its mangrove forests and birdlife.</p>
                <center><img src="https://upload.wikimedia.org/wikipedia/commons/7/7b/Batticaloa_Lagoon.jpg" width="350"></center>
            </div>
        </td>
    </tr>
</table>

<!-- Ampara Details -->
<div class="main-text">
    <h1><span>A</span>mpara </h1>
</div>

<table>
    <tr>
        <td>
            <div>
                <h2>Arugam Bay</h2>
                <p> Famous for its world-class surfing waves and laid-back beach vibes, attracting surfers and beach lovers from around the globe.</p>
                <center><img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/8d/38/51/caption.jpg?w=800&h=800&s=1" width="350"></center>
            </div>
        </td>
        <td>
            <div>
                <h2>Lahugala Kitulana National Park</h2>
                <p>Known for its wild elephants, scenic landscapes, and a large natural reservoir that supports diverse wildlife.</p>
                <center><img src="https://nexttravelsrilanka.com/wp-content/uploads/2023/02/Lahugala-Kitulana-National-Park.jpg" width="350"></center>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div>
                <h2>Kumana National Park</h2>
                <p>A renowned bird sanctuary with over 200 bird species, including migratory birds, and also home to elephants, leopards, and deer.</p>
                <center><img src="https://www.ccf.gov.lk/wp-content/uploads/2022/08/caption.jpg" width="350"></center>
            </div>
        </td>
        <td>
            <div>
                <h2>Muhudu Maha Viharaya</h2>
                <p>An ancient Buddhist temple situated by the sea, believed to have been visited by Lord Buddha's consort, Princess Suppadevi.</p>
                <center><img src="https://lh3.googleusercontent.com/pw/ACtC-3cfZSdBZHG7tgBJ_hkhxtO6_sj-lijdaZq7n9_Qgq5TfoH8u1FqrPWYJKuq8SEEwjTe1guzVFJAvv4LxC_OLk_NHSZV1vdQ_9Mqi51BdoFhjCqfWwRHqIBHYB87jEqnCkTtxKmX8YMGPvNYyYWObQQS=w532-h400-no?authuser=0" width="350"></center>
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