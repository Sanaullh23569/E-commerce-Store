<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "project_1");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submit
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $title = $_POST['title']; // title input from form

    // Image upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image = $_FILES['image']['name'];
        $target = "images/" . basename($image);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $pic = $target;

            // Insert into database
            $sql = "INSERT INTO just_arrived (name, pic, title) 
                    VALUES ('$name', '$pic', '$title')";

            if ($conn->query($sql) === TRUE) {
                $msg = "Product added successfully!";
            } else {
                $error = "Database Error: " . $conn->error;
            }
        } else {
            $error = "Failed to upload image.";
        }
    } else {
        $error = "Please select an image.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin - Add Product</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container my-5">
  <div class="card shadow p-4">
    <h3 class="text-center mb-4">Add New Product</h3>

    <?php if(isset($msg)) { ?>
        <div class="alert alert-success"><?= $msg ?></div>
    <?php } elseif(isset($error)) { ?>
        <div class="alert alert-danger"><?= $error ?></div>
    <?php } ?>

    <form action="" method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <label class="form-label">Product Name</label>
        <input type="text" name="name" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Product Title</label>
        <input type="text" name="title" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Upload Image</label>
        <input type="file" name="image" class="form-control" required>
      </div>

      <button type="submit" name="submit" class="btn btn-primary w-100">Add Product</button>
    </form>
  </div>
</div>




  <div class="container py-5">
    <div class="col-1"></div>
              <div class="card  shadow-sm w-50 ms-5 pb-3 pt-3">
                 <div class="text-center ">
                     Editors pic
                 </div>
                 <form action="" method="post" enctype="multipart/form-data">
                    <label class="form-label ms-3">Product Name</label>
                    <input type="text" name="name" class="form-control w-50 ms-2 " required>

                    <label class="form-label ms-3">Title</label>
                     <input type="text" name="title" class="form-control w-50 ms-2" required>



               <label class="form-label ms-3">Upload image</label>
                  <input type="file"  name="image" class="form-control  w-50 ms-2 " required>


                         <button type="submit" name="submit" class="btn mt-3 btn-primary w-100">Add Product</button>
                 </form>
               </div>
</div>
 
  </div>



</body>
</html>
