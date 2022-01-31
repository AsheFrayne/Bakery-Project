<?php
include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href='https://fonts.googleapis.com/css?family=GFS Didot' rel='stylesheet'>
  <script src="https://kit.fontawesome.com/8e42a01d1f.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="addOffers.css">
  <title>Add Product</title>
</head>

<body>
  <?php
  include 'header.php';
  ?>

  <h2>Add a Product</h2>
  <main>
    <form action="includes/addOffers.inc.php?admin=<?php echo $_SESSION['usersID'] ?>" method="post" enctype="multipart/form-data">
      <div class="product-img">
        <label for="file-upload" class="img-upload">
          <i class="fas fa-camera"></i>
          Upload Image
        </label>
        <input id="file-upload" type="file" name="productsFilename">
      </div>
      <h3>Add photo</h3>
      <div class="input-fields">
        <input type="text" name="productsName" placeholder="Product name">
        <input type="text" name="productsPrice" placeholder="Price">
        <textarea name="productsDescription" cols="30" rows="10" placeholder="Describe the product!"></textarea>
        <button type="submit" name="submit">Submit</button>
      </div>

    </form>
  </main>


  <footer>
    <div class="footer-container">
      <img src="img/newlogobg.png" alt="Arki's Bakery Logo">
      <div class="socmed-container">
        <a href="" class="fa fa-facebook"></a>
        <a href="" class="fa fa-twitter"></a>
        <a href="" class="fa fa-google"></a>
        <a href="" class="fa fa-instagram"></a>
        <a href="" class="fa fa-pinterest"></a>
      </div>
    </div>
  </footer>

</body>

</html>