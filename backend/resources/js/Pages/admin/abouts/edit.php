<?php
include "../connection.php";
include "../header.php";
include "../sidebar.php";
$id = $_GET['id'];
$sql = "SELECT* FROM abouts";
$result = mysqli_query($conn , $sql);
$row = mysqli_fetch_assoc($result);
?>
<div id="layoutSidenav">
 <div id="layoutSidenav_content">
 <div class="container-fluid px-4">
 <form action="<?php echo base_url?>/abouts/add-about-submit.php" class="abouts main-footer" method="POST"  enctype="multipart/form-data">
 <h2 class="text-center mb-5">Add abouts</h2>

  <h4 class=" mb-2"> Heading</h4>
  <!-- Heading 1 Start  (H5)-->
  <input class="form-control mb-3" type="text" placeholder="Heading " name="heading" value ="<?php echo $row['heading'];?>">
  <!-- Heading 1 End  (H5)-->

  <!-- paragraph Start -->
  <h4 class=" mb-2"> description</h4>
  <input class="form-control mb-3" type="text" placeholder="description" name="description" value ="<?php echo $row['description'];?>">
  <!-- paragraph End -->  

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
