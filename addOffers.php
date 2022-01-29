<?php session_start() ?>
  <h2>Add a Product</h2>
  <form action="includes/addOffers.inc.php?admin=<?php echo $_SESSION["adminID"]?>" method="post" enctype="multipart/form-data">
    <p>Upload the picture of the product</p>
    <input type="file" name="productsFilename">
    <input type="text" name="productsPrize" placeholder="Input prize!">
    <textarea name="productsDescription" cols="30" rows="10" placeholder="Describe the product!"></textarea>
    <button type="submit" name="submit">Submit</button>
  </form>
