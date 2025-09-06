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


/* Fade-in effect for image */
.left img {
  opacity: 0;
  
  transform: translateX(-50px);
  transition: all 0.8s ease-in-out;
}

.left img.show {
  opacity: 1;
  transform: translateX(0);
}

/* Fade-in effect for text */
.col-md-6 {
  opacity: 0;
  transform: translateY(30px);
  transition: all 0.8s ease-in-out;
}

.col-md-6.show {
  opacity: 1;
  transform: translateY(0);
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

 

   <!-- Featured Products -->

<div class="container py-5">
  <div class="row align-items-center">
    <div class="left col-md-6 mb-4 mb-md-0">
      <img src="images/20.jpeg" alt="Product Image" 
           class="img-fluid rounded-3 shadow-lg">
    </div>
    <div class="col-md-6">
      <h3 class="fw-bold text-uppercase text-primary mb-2">#Featured</h3>
      <h2 class="display-5 fw-bold mb-3">Milancelos</h2>
      <p class="text-muted lh-lg mb-4">
        Pellentesque posuere orci lobortis scelerisque blandit. Donec id tellus lacinia an,
        tincidunt risus ac, consequat velit.
      </p>
      <button class="btn btn-dark btn-lg rounded-pill shadow-sm px-4">
        Shop Now
      </button>
    </div>
  </div>
</div>

<script>
  // Scroll animation trigger
  window.addEventListener("scroll", () => {
    document.querySelectorAll(".left img, .col-md-6").forEach(el => {
      let pos = el.getBoundingClientRect().top;
      if (pos < window.innerHeight - 100) {
        el.classList.add("show");
      }
    });
  });
</script>
 <div class="container-fluid">
      
       <div class="row mb-3">
            <div class="col-md-6  d-flex flex-column justify-content-center  p-5">
            <h3 class="text-uppercase text-primary fw-bold mb-2">Featured</h3>
<h2 class="display-4 fw-bold mb-3">Milancelos</h2>
<p class="text-muted lh-lg mb-4">
  Pellentesque posuere orci lobortis scelerisque blandit. Donec id tellus lacinia an,
  tincidunt risus ac, consequat velit. Quisquemos sodales suscipit tortor ditaemcos condimentum 
  lacus meleifend menean viverra auctor blanditos comodous.
</p>
<button class="btn btn-dark rounded-pill btn-lg shadow-sm px-3 col-md-3 mt-3">Shop Now</button>

           </div>
            <div class="col-md-6 p-0">
               <img src="Images/21.jpg" alt="" class="w-100 h-100 object-fit-cover">
            </div>
       </div>

 </div>
<?php 

   $edit=$conn->query("SELECT * FROM editors_pic ORDER BY no DESC LIMIT 4");
   $products=[]; 
   while($row =$edit->fetch_assoc()){
    $products[] =$row;
   }
  



?>
<div class="container py-5">
  <!-- Tabs -->
  <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
  
    <button class="nav-link active fw-bold" id="editors-tab"  data-bs-target="#editors" type="button" role="tab">
        Editors Pick
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link fw-bold" id="two-tab" data-bs-toggle="tab" data-bs-target="#two" type="button" role="tab">
        Two
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link fw-bold" id="three-tab" data-bs-toggle="tab" data-bs-target="#three" type="button" role="tab">
        Three
      </button>
    </li>
  </ul>

  <!-- Tab Content -->
  <div class="tab-pane fade show active" id="editors" role="tabpanel">
  <div class="row">
    <?php foreach ($products as $row): ?>
      <div class="col-md-3 mb-4">
        <div class="card shadow-sm">
          <img src="<?= htmlspecialchars($row['pic']) ?>" 
               class="card-img-top" 
               alt="<?= htmlspecialchars($row['title']) ?>">
          <div class="card-body">
            <h5 class="card-title"><?= htmlspecialchars($row['title']) ?></h5>
            <p class="card-text"><?= htmlspecialchars($row['description']) ?></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

    <!-- Two -->
<div class="tab-pane fade" id="two" role="tabpanel">
  <div class="row">
    <?php foreach ($products as $row): ?>
      <div class="col-md-3 mb-4">
        <div class="card shadow-sm">
          <img src="<?= htmlspecialchars($row['pic']) ?>" 
               class="card-img-top" 
               alt="<?= htmlspecialchars($row['title']) ?>">
          <div class="card-body">
            <h5 class="card-title">Product A</h5>
            <p class="card-text"><?= htmlspecialchars($row['title']) ?></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>


    <!-- Three -->
    <div class="tab-pane fade" id="three" role="tabpanel">
      <div class="row">
        <div class="col-md-3">
          <div class="card shadow-sm">
            <img src="images/22.jpeg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">Product X</h5>
              <p class="card-text">Short description.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>



