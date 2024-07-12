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
    background-image: url("https://i.pinimg.com/564x/81/96/b8/8196b82210e4c00373ade8c5da34c5a2.jpg");
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
    <h1>Southern Province</h1>
    <h5>Famous for its pristine beaches, colonial history, and vibrant cultural festivals.</h5>
</div>

<!-- galle Details -->
<div class="main-text">
    <h1><span>G</span>alle </h1>
</div>

<table>
    <tr>
        <td>
            <div>
                <h2>Galle Fort</h2>
                <p>A UNESCO World Heritage site with Dutch-colonial buildings and boutique shops.</p>
                <center><img src="https://i.pinimg.com/564x/21/93/04/2193049637854a3e0e03cf2bb8d9f34d.jpg" width="350"></center>
            </div>
        </td>
        <td>
            <div>
                <h2>Unawatuna Beach</h2>
                <p>Known for its turquoise waters, coral reefs, and beachside cafes.</p>
                <center><img src="https://www.thecoastalcampaign.com/wp-content/uploads/2019/09/wijaya-beach-1080x675.jpg" width="350"></center>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div>
                <h2>Hikkaduwa Coral Gardens</h2>
                <p>Ideal for snorkeling amidst colorful coral reefs and marine life.</p>
                <center><img src="https://iainlakewindsvilla.com/wp-content/uploads/2014/09/Cover-for-Snorkeling-in-Hikkaduwa.jpg" width="350"></center>
            </div>
        </td>
        <td>
            <div>
                <h2>Japanese Peace Pagoda</h2>
                <p>Offers panoramic views of the coastline and serene meditation spots.</p>
                <center><img src="https://www.taruvillas.com/wp-content/uploads/2021/11/inner-banner_Mob_Japanese-Peace-Pagoda-720x720-1.jpg" width="350"></center>
            </div>
        </td>
    </tr>
</table>

<!-- matara Details -->
<div class="main-text">
    <h1><span>M</span>atara </h1>
</div>

<table>
    <tr>
        <td>
            <div>
                <h2>Polhena Beach</h2>
                <p>A secluded beach with shallow waters ideal for swimming and snorkeling.</p>
                <center><img src="https://www.attractionsinsrilanka.com/wp-content/uploads/2020/02/Polhena-Beach-1.jpg" width="350"></center>
            </div>
        </td>
        <td>
            <div>
                <h2>Dondra Head Lighthouse</h2>
                <p>The oldest and tallest lighthouse in Sri Lanka, offering breathtaking views.</p>
                <center><img src="https://english.lankapuvath.lk/wp-content/uploads/2023/01/Sri-Lanka-travellers.jpg" width="350"></center>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div>
                <h2>Weherahena Temple</h2>
                <p>Features a massive Buddha statue and a picturesque tunnel of murals.</p>
                <center><img src="https://www.lakpura.com/images/LK94009643-01-E.JPG" width="350"></center>
            </div>
        </td>
        <td>
            <div>
                <h2>Matara Star Fort</h2>
                <p>A historic fort with sweeping views of the Indian Ocean and Dutch architecture.</p>
                <center><img src="https://amazinglanka.com/wp/wp-content/uploads/2013/11/star-01.jpg" width="350"></center>
            </div>
        </td>
    </tr>
</table>
<!-- hambantota Details -->
<div class="main-text">
    <h1><span>H</span>ambatota</h1>
</div>

<table>
    <tr>
        <td>
            <div>
                <h2>Yala National Park</h2>
                <p>One of the most famous wildlife parks in Sri Lanka, renowned for its leopard sightings, elephants, and diverse bird species.</p>
                <center><img src="https://i.pinimg.com/564x/83/5b/f7/835bf78da2afeb7a5d657258b40ecd77.jpg" width="350"></center>
            </div>
        </td>
        <td>
            <div>
                <h2>Kataragama</h2>
                <p>A major pilgrimage town sacred to Buddhists, Hindus, and Muslims, known for the Kataragama temple complex and vibrant religious festivals.</p>
                <center><img src="https://i.pinimg.com/564x/2d/1b/e8/2d1be8c53f7e86394d884d3b54553a01.jpg" width="350"></center>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div>
                <h2>Bundala National Park</h2>
                <p>A UNESCO Biosphere Reserve that is a haven for bird watchers, home to numerous species of birds, including flamingos, as well as other wildlife.</p>
                <center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0rXAE3tRvP9GiRXDr_KcX6y_JDYL_xpQ_6_UfIxSwmyNeAjqyOpNwG_fT-kGgCj3-LoU&usqp=CAU" width="350"></center>
            </div>
        </td>
        <td>
            <div>
                <h2>Kirinda Beach</h2>
                <p>A serene and picturesque beach with ancient ruins, offering a blend of natural beauty and historical significance.</p>
                <center><img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/436011364.jpg?k=784b91eae2cd4d23ed95e6013256a505c326ef387c3c8c4a1bc0bd3f13aafc47&o=&hp=1" width="350"></center>
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