<?php
include "../connection.php";
include "../header.php";
include "../sidebar.php";
$id = $_GET['id'];
$sql = "SELECT* FROM products_categories WHERE id = '$id'";
$result = mysqli_query($conn , $sql);
$row = mysqli_fetch_assoc($result);
?>
 <div id="layoutSidenav">
 <div id="layoutSidenav_content">
 <div class="container-fluid px-4">
<form action="<?php echo base_url?>/products-categories/add-categories-submit.php" class="products_categories main-footer" method="POST"  enctype="multipart/form-data">
  <h2 class="text-center mb-5">Add categories</h2>

  <h4 class=" mb-2"> Headings</h4>
  <!-- Heading 1 Start  (H5)-->
  <input class="form-control mb-3" type="text" placeholder="products_categories " name="products_categories" value = "<?php echo $row['products_categories'];?>">
  <input class="form-control mb-3" type="text" placeholder="types " name="types" value = "<?php echo $row['types'];?>">

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
