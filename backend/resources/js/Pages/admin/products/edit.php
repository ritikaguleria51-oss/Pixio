<?php
include "../connection.php";
include "../header.php";
include "../sidebar.php";
$id = $_GET['id'];
$sql = "SELECT * FROM products where id = '$id'";
$result = mysqli_query($conn , $sql);
$row = mysqli_fetch_assoc($result);
?>
<div id="layoutSidenav">
 <div id="layoutSidenav_content">
 <div class="container-fluid px-4">
<form action="<?php echo base_url?>/products/add-products-submit.php" class="products main-footer" method="POST"  enctype="multipart/form-data">
  <h2 class="text-center mb-5">Add products</h2>
  <!-- Image Start -->
  <h4 class=" mb-2"> Image</h4>
  <div class="input-group mb-4">
    <div class="custom-file">
      <label class="custom-file-label" for="image">Choose Image</label>
      <input type="file" class="custom-file-input" name="image" id="image" value="<?php echo $row['image'];?>">
    </div>
  </div> 
  <!-- Image End -->

  <!-- <h4 class=" mb-2"> Heading</h4> -->
  <!-- Heading 1 Start  (H5)-->
  <input class="form-control mb-3" type="text" placeholder="label " name="label" value ="<?php echo $row['label'];?>">
  <!-- Heading 1 End  (H5)-->

  <!-- title Start -->
  <!-- <h4 class=" mb-2"> title</h4> -->
  <input class="form-control mb-4" type="text" placeholder=" name " name="name" value="<?php echo $row['name'];?>">
  <!-- title End -->

  <!-- paragraph Start -->
  <!-- <h4 class=" mb-2"> paragraph</h4> -->
  <input class="form-control mb-3" type="text" placeholder="description" name="description" value= "<?php echo $row['description'];?>">
  <!-- paragraph End -->  

  <!--button start-->
  <!-- <h4 class=" mb-2">button</h4> -->
  <input class="form-control mb-4" type="text" placeholder="price" name="price" value = "<?php echo $row['price'];?>">
  <input class="form-control mb-4" type="text" placeholder="products_type" name="products_type" value="<?php echo $row['products_type'];?>">
  <input class="form-control mb-4" type="text" placeholder="products_categories" name="products_categories" value = "<?php echo $row['products_categories'];?>">
  <!--button end-->

  <!-- upload Button Start -->
  <div class="input-group-append">
  <button class="input-group-text mx-auto mb-4" name="upload_btn" id="upload_btn">Upload</button>
  </div>
  <!-- upload Button End -->
</form>
</div>
<?php include "../footer.php"; ?>
</div>
</div>
