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
    background-image: url("https://i.pinimg.com/474x/ec/40/d9/ec40d9b2a2d99d97dc01614fac42fff6.jpg");
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
      <a class="navbar-brand" id="logo" href="travel.html"><span>T</span>railBlaze</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span><i class="fa-solid fa-bars"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" href="travel.html">Home</a>
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
    <h1>Northern Province</h1>
    <h5>Offers a blend of ancient history, Tamil culture, and serene landscapes.</h5>
</div>

<!-- Jaffna Details -->
<div class="main-text">
    <h1><span>J</span>affna </h1>
</div>

<table>
    <tr>
        <td>
            <div>
                <h2>Jaffna Fort</h2>
                <p>A historic fort with Dutch and Portuguese influences, offering panoramic views of the city.</p>
                <center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGBVJ9iUBnLQXyftm_0Iao1FWAEGpghlCtqQ&s" width="350"></center>
            </div>
        </td>
        <td>
            <div>
                <h2>Nallur Kandaswamy Kovil</h2>
                <p>A prominent Hindu temple known for its annual festival and intricate architecture.</p>
                <center><img src="https://upload.wikimedia.org/wikipedia/commons/6/61/Nallur_Kandasamy_front_entrance.jpg" width="350"></center>

            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div>
                <h2>Jaffna Library</h2>
                <p>A symbol of Tamil heritage and cultural revival, housing ancient manuscripts and books.</p>
                <center><img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0a/cc/0b/54/photo0jpg.jpg?w=1200&h=-1&s=1" width="350"></center>
            </div>
        </td>
        <td>
            <div>
                <h2>Keerimalai Springs</h2>
                <p>Sacred natural springs believed to have healing properties, with Hindu religious significance.</p>
                <center><img src="https://www.reddottours.com/uploads/Activities/Visit-to-Hot-Springs-in-Keerimalai/The-hot-springs-of-Keerimalai-gallery-pop-up-(4).jpg" width="350"></center>
            </div>
        </td>
    </tr>
</table>

<!-- kilinochchi Details -->
<div class="main-text">
    <h1><span>K</span>ilinochchi </h1>
</div>

<table>
    <tr>
        <td>
            <div>
                <h2>Kilinochchi War Memorial</h2>
                <p>Commemorates those who lost their lives during the civil war, reflecting the region's resilience.</p>
                <center><img src="https://www.attractionsinsrilanka.com/wp-content/uploads/2020/05/Kilinochchi-War-Memorial.jpg" width="350"></center>
            </div>
        </td>
        <td>
            <div>
                <h2>Iranamadu Tank</h2>
                <p>A large reservoir surrounded by lush greenery, ideal for birdwatching and picnics.</p>
                <center><img src="https://upload.wikimedia.org/wikipedia/commons/c/cb/Iranamadu_Tank2.jpg" width="350"></center>
        </td>
    </tr>
    <tr>
        <td>
            <div>
                <h2>Kandasamy Kovil</h2>
                <p>A Hindu temple dedicated to Lord Murugan, showcasing vibrant South Indian architecture.</p>
                <center><img src="https://upload.wikimedia.org/wikipedia/commons/1/14/Sri_Kandaswamy_Kovil_by_Simitha_T.Singam.jpg" width="350"></center>
            </div>
        </td>
        <td>
            <div>
                <h2>Kilinochchi Cultural Centre</h2>
                <p>Offers insights into the local culture, history, and traditions of the region.</p>
                <center><img src="https://www.jfn.ac.lk/wp-content/uploads/Opening-Cermony-Kilinochchi-1.jpg" width="350"></center>
            </div>
        </td>
    </tr>
</table>
<!-- mannar Details -->
<div class="main-text">
    <h1><span>M</span>annar </h1>
</div>

<table>
    <tr>
        <td>
            <div>
                <h2>Mannar Island</h2>
                <p>Known for its beautiful beaches, historical sites, and the iconic Mannar Baobab Tree, one of the oldest trees in Sri Lanka.</p>
                <center><img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/12/1f/9b/90/mannar-island-gold-sand.jpg?w=1200&h=-1&s=1" width="350"></center>
            </div>
        </td>
        <td>
            <div>
                <h2>Thiruketheeswaram Temple</h2>
                <p> An ancient Hindu temple dedicated to Lord Shiva, with significant religious and historical importance.</p>
                <center><img src="https://bmkltsly13vb.compat.objectstorage.ap-mumbai-1.oraclecloud.com/cdn.dailymirror.lk/assets/uploads/image_e7bd54ad14.jpg" width="350"></center>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div>
                <h2>Adam's Bridge (Rama's Bridge)</h2>
                <p>A chain of limestone shoals connecting India and Sri Lanka, steeped in mythological and geological significance.</p>
                <center><img src="https://www.attractionsinsrilanka.com/wp-content/uploads/2021/01/Adam.jpg" width="350"></center>
            </div>
        </td>
        <td>
            <div>
                <h2>Mannar Fort</h2>
                <p>A historic fort built by the Portuguese and later occupied by the Dutch and the British, offering views of the surrounding area.</p>
                <center><img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/04/8c/15/ef/mannar-fort.jpg?w=1200&h=1200&s=1" width="350"></center>
            </div>
        </td>
    </tr>
</table>

<!-- vavuniya Details -->
<div class="main-text">
    <h1><span>V</span>avuniya </h1>
</div>

<table>
    <tr>
        <td>
            <div>
                <h2>Kandasamy Kovil, Vavuniya</h2>
                <p>A Hindu temple dedicated to Lord Murugan, known for its vibrant festivals and cultural events.</p>
                <center><img src="https://www.discover.lk/assets/Uploads/Kandasami-kovil__Resampled.jpg" width="350"></center>
            </div>
        </td>
        <td>
            <div>
                <h2>Vavuniya Archaeological Museum</h2>
                <p>Showcases artifacts and exhibits related to the ancient history and culture of the region.</p>
                <center><img src="https://hotelia.lk/images/travelLocations/main/41198241699453225.JPG" width="350"></center>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div>
                <h2>Vavuniya Peace Park</h2>
                <p>A tranquil park symbolizing peace and reconciliation, ideal for relaxation and reflection.</p>
                <center><img src="https://visitinsrilanka.com/storage/2020/05/Explore-Deepavali-Festival-in-Sri-Lanka.jpg" width="350"></center>
            </div>
        </td>
        <td>
            <div>
                <h2>Madukanda Viharaya</h2>
                <p>An ancient Buddhist temple with historical significance, featuring ruins and inscriptions.</p>
                <center><img src="https://i0.wp.com/amazinglanka.com/wp/wp-content/uploads/2013/12/2017-11-25.jpg?ssl=1" width="350"></center>
            </div>
        </td>
    </tr>
</table>

<!-- mullaitivu Details -->
<div class="main-text">
    <h1><span>M</span>ullaitivu </h1>
</div>

<table>
    <tr>
        <td>
            <div>
                <h2>Mullaitivu War Memorial</h2>
                <p>A site commemorating the history and sacrifices of the civil war, offering a place for remembrance and reflection.</p>
                <center><img src="https://images.indianexpress.com/2016/08/lanka-ealam-art-war-memorial-480.jpg" width="350"></center>
            </div>
        </td>
        <td>
            <div>
                <h2>Nayaru Lagoon</h2>
                <p>A scenic lagoon known for its biodiversity, ideal for birdwatching and nature photography.</p>
                <center><img src="https://mapio.net/images-p/37121610.jpg" width="350"></center>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div>
                <h2>Mullaitivu Beach</h2>
                <p>A beautiful and less crowded beach offering serene coastal views and opportunities for relaxation.</p>
                <center><img src="https://i.pinimg.com/originals/34/2b/8b/342b8b516700ccca2b37895fd1921685.jpg" width="350"></center>
            </div>
        </td>
        <td>
            <div>
                <h2>Oddusuddan</h2>
                <p>A historical site with ancient ruins and significance from both the civil war and the ancient past.</p>
                <center><img src="https://images.unsplash.com/photo-1617807812926-9513472d15ef?crop=entropy&cs=srgb&fm=jpg&ixid=MnwyMzA4NjJ8MHwxfHNlYXJjaHwxfHxvZGR1c3VkZGFuLW5vcnRoZXJufGVufDB8MHx8fDE2MjIzMjE4NDM&ixlib=rb-1.2.1&q=85&w=1170&dpr=1" width="350"></center>
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