<?php
include "../header.php";
include "../sidebar.php";
?>
 <div id="layoutSidenav">
 <div id="layoutSidenav_content">
 <div class="container-fluid px-4">
<form action="<?php echo base_url?>/products-type/add-products-submit.php" class="products_type main-footer" method="POST"  enctype="multipart/form-data">
  <h2 class="text-center mb-5">Products-type</h2>
  <h4 class=" mb-2">Add products-type</h4>
  <!-- Heading 1 Start  (H5)-->
  <input class="form-control mb-3" type="text" placeholder="products_type " name="products_type">
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
