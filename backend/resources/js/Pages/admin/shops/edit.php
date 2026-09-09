<?php
include "../connection.php";
$id = $_GET['id'];
$sql = "SELECT* FROM shops WHERE id = '$id'";
$result = mysqli_query($conn , $sql);
$row = mysqli_fetch_assoc($result);
?>
<div id="layoutSidenav">
 <div id="layoutSidenav_content">
 <div class="container-fluid px-4">
<form action="<?php echo base_url?>/shops/add-shops-submit.php" class="shops main-footer" method="POST"  enctype="multipart/form-data">
  <h2 class="text-center mb-5">Add shops</h2>

  <h4 class=" mb-2"> categories</h4>
  <!-- Heading 1 Start  (H5)-->
  <input class="form-control mb-3" type="text" placeholder="categories " name="categories">
  <!-- Heading 1 End  (H5)-->

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
