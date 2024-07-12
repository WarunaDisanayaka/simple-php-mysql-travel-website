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
    background-image: url("https://i.pinimg.com/564x/6d/bc/56/6dbc568e8393c8e86f174bb42eb4c267.jpg");
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
    <h1>Western Province</h1>
    <h5>Home to Colombo, the bustling commercial capital and the vibrant heart of Sri Lanka’s urban life.</h5>
</div>


<!-- colombo Details -->

<div class="main-text">
    <h1><span>C</span>olombo </h1>
</div>
<table>
    <tr>
        <td>
            <div>
                <h2>Colombo Fort</h2>
                <p>A historic area in Colombo, known for its colonial architecture and bustling commercial activities.</p>
                <center><img src="https://i.pinimg.com/564x/0d/4d/d2/0d4dd2534cf267e63026754b039e297f.jpg" width="350"></center>
            </div>
        </td>
        <td>
            <div>
                <h2>Galle Face Green</h2>
                <p>A scenic ocean-side urban park, perfect for evening strolls and local street food.</p>
                <center><img src="https://i.pinimg.com/564x/91/36/a3/9136a33595ef0a0c98fe1e9a5e5de0f5.jpg" width="350"></center>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div>
                <h2>Viharamahadevi Park</h2>
                <p>The largest and oldest park in Colombo, offering a peaceful retreat in the heart of the city.</p>
                <center><img src="https://i.pinimg.com/564x/2d/b8/20/2db820a0e868868f47d62685ed59ad3d.jpg" width="350"></center>
            </div>
        </td>
        <td>
            <div>
                <h2>Gangaramaya Temple</h2>
                <p>A mix of modern architecture and cultural essence, serving as an important place of Buddhist worship.</p>
                <center><img src="https://i.pinimg.com/564x/e9/5a/67/e95a67d560982f4244eb2be2e90c1eca.jpg" width="350"></center>
            </div>
        </td>
    </tr>
</table>


<!-- kalutara Details -->
<div class="main-text">
    <h1><span>K</span>alutara </h1>
</div>

<table>
    <tr>
        <td>
            <div>
                <h2>Kalutara Bodhiya</h2>
                <p> A revered Buddhist temple with a magnificent Bo tree and a large stupa.</p>
                <center><img src="https://i.pinimg.com/564x/0c/14/d8/0c14d8c29dd6068c217787613c3e9232.jpg" width="350"></center>
            </div>
        </td>
        <td>
            <div>
                <h2>Richmond Castle</h2>
                <p>An elegant mansion showcasing unique architectural styles from the early 20th century.</p>
                <center><img src="https://i.pinimg.com/564x/c1/73/a5/c173a5694e38635f2cd2ddbb96467493.jpg" width="350"></center>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div>
                <h2>Kalutara Beach</h2>
                <p>A serene beach offering picturesque views and a tranquil atmosphere.</p>
                <center><img src="https://i.pinimg.com/564x/c7/59/ee/c759ee8d30ce4f5ea1e680a8e52dcecf.jpg" width="350"></center>
            </div>
        </td>
        <td>
            <div>
                <h2>Brief Garden</h2>
                <p>A beautifully landscaped garden and home of the famous artist Bevis Bawa.</p>
                <center><img src="https://static.wixstatic.com/media/ba255b_f8c9b8beee2a4989986f435b17f4a7e3~mv2.jpg/v1/fill/w_3173,h_1995,al_c,q_90/Sri_Lanka_655wix.jpg" width="350"></center>
            </div>
        </td>
    </tr>
</table>

<!-- Gampaha Details -->
<div class="main-text">
    <h1><span>G</span>ampaha </h1>
</div>

<table>
    <tr>
        <td>
            <div>
                <h2>Kelaniya Temple</h2>
                <p>An ancient Buddhist temple with vibrant frescoes and statues.</p>
                <center><img src="https://i.pinimg.com/564x/a3/17/95/a317959ec856e39db1cfc9a94a6deddc.jpg" width="350"></center>
            </div>
        </td>
        <td>
            <div>
                <h2>Lellama</h2>
                <p>A scenic area known for its birdlife and natural beauty.</p>
                <center><img src="https://media-cdn.tripadvisor.com/media/attractions-splice-spp-720x480/07/be/ac/91.jpg" width="350"></center>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div>
                <h2>Muthurajawela Marsh</h2>
                <p>A wetland ecosystem ideal for boat rides and bird watching.</p>
                <center><img src="https://us.lakpura.com/cdn/shop/products/LK75660200-01-E-1280-720.jpg?v=1626075386&width=533" width="350"></center>
            </div>
        </td>
        <td>
            <div>
                <h2>Attidiya Bird Sanctuary</h2>
                <p>A sanctuary for migratory birds and nature lovers.</p>
                <center><img src="https://www.ceylontraveldream.com/images/sri-lanka-tour-packages/location/colombo-004.jpg" width="350"></center>
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