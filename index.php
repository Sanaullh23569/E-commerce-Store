<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" defer></script>

  <link rel="stylesheet" href="style.css">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;

    
    }
    .card-bg {
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    min-height: 300px; /* or height: 300px; */
}

    
.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: rgba(0,0,0,0.5); /* dark semi-transparent */
    border-radius: 50%;                /* round button */
}
    .top-notice {
       /* light gray */
       
       background-color: black;
      text-align: center;
      padding: 8px;
      font-size: 14px;
      color: red;
    }


.navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='white' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}




  </style>
</head>
<body>
   
  <!-- Top Notice -->
  <div class="top-notice text-white text-danger">
    Free Cash On Delivery On All Orders Above Rs. 5000/- 

  </div>
<div class="text-center py-2 bg-black">
  <a class="navbar-brand " href="#">
    <img src="images/image_4.png" alt="Logo" height="60">
  </a>
</div>
  <nav class="navbar navbar-expand-md  text-white bg-black">
    <div class="menu text-white container-fluid ">

      <!-- Brand -->
     
      <!-- Toggler -->
      <button class=" navbar-toggler  " type="button" data-bs-toggle="collapse" data-bs-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon text-white"></span>
      </button>

      <!-- Collapsible content -->
      <div class="col-lg collapse navbar-collapse text-white" id="navbars">
        <ul class="navbar-nav text-white mx-auto">
          <li class="nav-item">
            <a class="nav-link text-white   active" href="#">Home</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white" href="#">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="#">About</a>
          </li>
          <li class="nav-item  ">
            <a class="nav-link text-white " href="#">Contact</a>
          </li>
        </ul>
      </div>

    </div>
  </nav>



<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  
  <!-- Indicators (dots) -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"></button>
    
  </div>

  <!-- Slides -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/image_5.jpeg" class="d-block w-100" alt="Slide 1">
      <div class="carousel-caption d-none d-md-block">
        <h5>First Slide</h5>
        <p>This is the first slide description.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/image_5.jpeg" class="d-block w-100" alt="Slide 2">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second Slide</h5>
        <p>This is the second slide description.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/image_5.jpeg" class="d-block w-100" alt="Slide 3">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third Slide</h5>
        <p>This is the third slide description.</p>
      </div>
    </div>
  </div>

  <!-- Controls (Prev / Next) -->
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
    <span class="visually-hidden">Next</span>
  </button>

</div>


<section class="py-5">
  <div class="container">
    <div class="row g-4">
      
      <!-- Card 1 -->
      <div class="col-md-4 col-sm-6">
        <div class="card h-100 text-white text-center" 
     style="background-image: url('images/img01.jpg');
      background-size: cover; background-position: center; min-height: 23rem;">         

          <div class="card-body d-flex flex-column justify-content-center align-items-center text-white fw-bold">
            <h5 class="card-title">Lips</h5>
            <p class="card-text">Explore our lip products collection for every occasion.</p>
            <a href="#" class="btn btn-dark">Shop Now</a>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4 col-sm-6">
        <div class="card h-100  border-0 text-center w-100" style="background-image:url(images/img02.jpg); 
        background-repeat: no-repeat;background-size: cover; background-position: center; min-height: 23rem;">
          
          <div class="card-body d-flex flex-column justify-content-center align-items-center text-white fw-bold ">
            <h5 class="card-title">Tools</h5>
            <p class="card-text">The best tools for your makeup kit.</p>
            <a href="#" class="btn btn-dark">Shop Now</a>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4 col-sm-6">
        <div class="card h-100 border-0 text-center"style="background-image:url(images/img03.jpg);  background-repeat: no-repeat;
        background-size: cover; background-position: center; min-height: 23rem; ">
          
          <div class="card-body d-flex flex-column text-white justify-content-center align-items-center fw-bold ">
            <h5 class="card-title">Face</h5>
            <p class="card-text ">Explore our foundation and skincare collection.</p>
            <a href="#" class="btn btn-dark">Shop Now</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- fetch all products -->
   <?php
// Database connection (adjust credentials)
$conn = new mysqli("localhost", "root", "", "project_1");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Run query
$result = $conn->query("SELECT * FROM just_arrived ORDER BY no DESC LIMIT 4");

// Check if query gave results
if (!$result) {
    die("Query failed: " . $conn->error);
}
?>

  <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
<?php
// Fetch products
$products = [];
while($row = $result->fetch_assoc()){
    $products[] = $row;
}

// Split into slides (4 per slide)
$chunks = array_chunk($products, 4);
?>

<?php
// Database connection (adjust credentials)
$conn = new mysqli("localhost", "root", "", "project_1");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all products
$result = $conn->query("SELECT * FROM just_arrived ORDER BY no DESC");
if (!$result) {
    die("Query failed: " . $conn->error);
}

$products = [];
while ($row = $result->fetch_assoc()) {
    $products[] = $row;
}

// Split products into chunks of 4 for each carousel slide
$chunks = array_chunk($products, 4);
?>

<div class="container my-5 text-center">
    <h2>Just Arrived</h2>
    <p>Check out our latest products!</p>

    <?php if(count($products) > 0): ?>
    <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">

        <!-- Carousel indicators -->
        <div class="carousel-indicators">
            <?php foreach($chunks as $i => $chunk): ?>
                <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="<?= $i ?>" class="<?= $i===0 ? 'active' : '' ?>"></button>
            <?php endforeach; ?>
        </div>

        <!-- Carousel slides -->
        <div class="carousel-inner">
            <?php foreach($chunks as $index => $chunk): ?>
                <div class="carousel-item <?= $index===0 ? 'active' : '' ?>">
                    <div class="row g-4 justify-content-center">
                        <?php foreach($chunk as $row): ?>
                            <div class="col-6 col-sm-3">
                                <div class="card border-0 shadow-sm">
                                    <p class="card-text text-start text-bg-dark" style="width:50px; margin-left:3px; border-radius:6px; padding-left:2px;">
                                        <?= htmlspecialchars($row['name']) ?>
                                    </p>
                                    <img src="<?= htmlspecialchars($row['pic']) ?>" class="card-img-top" alt="<?= htmlspecialchars($row['title']) ?>">
                                    <p class="card-link text-start p-2">
                                        <a href="<?= htmlspecialchars($row['title']) ?>"><?= htmlspecialchars($row['title']) ?></a>
                                    </p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class=" bg-color red">Next</span>
        </button>
    </div>
    <?php else: ?>
        <p>No products available.</p>
    <?php endif; ?>
</div>




<!-- Featured Products -->
   <div class="container py-5 ">
      <h2 class="mb-3 text-center">Featured Products </h2>
             <p>Magnis de darturien eros laciniados de cosmopolis dinterdum</p>

   </div>
</body>
</html>



