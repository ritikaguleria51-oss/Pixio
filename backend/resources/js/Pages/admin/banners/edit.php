<?php
include "../connection.php";
include "../header.php";
include "../sidebar.php";
$id = $_GET['id'];
$sql = "SELECT * FROM banners where id = '$id'";
$result = mysqli_query($conn , $sql);
$row = mysqli_fetch_assoc($result);
?>
 <div id="layoutSidenav">
 <div id="layoutSidenav_content">
 <div class="container-fluid px-4">
<form action="<?php echo base_url?>/banners/add-banners-submit.php" class="banners main-footer" method="POST"  enctype="multipart/form-data">
  <h2 class="text-center mb-5">Add banners</h2>
  <!-- Image Start -->
  <h4 class=" mb-2"> Image</h4>
  <div class="input-group mb-4">
    <div class="custom-file">
      <label class="custom-file-label" for="image">Choose Image</label>
      <input type="file" class="custom-file-input" name="image" id="image">
    </div>
  </div> 
  <!-- Image End -->

  <h4 class=" mb-2"> heading</h4>
  <!-- Heading 1 Start  (H5)-->
  <input class="form-control mb-3" type="text" placeholder="heading " name="heading" value = "<?php echo $row['heading'];?>">
  <!-- Heading 1 End  (H5)-->

    <h4 class=" mb-2"> title</h4>
  <!-- Heading 1 Start  (H5)-->
  <input class="form-control mb-3" type="text" placeholder="title " name="title" value = "<?php echo $row['title'];?>">
  <!-- Heading 1 End  (H5)-->

  <!-- paragraph Start -->
  <h4 class=" mb-2"> description</h4>
  <input class="form-control mb-3" type="text" placeholder="description" name="description" value = "<?php echo $row['description'];?>">
  <!-- paragraph End -->  

   <!-- paragraph Start -->
  <h4 class=" mb-2"> button</h4>
  <input class="form-control mb-3" type="text" placeholder="button" name="button" value = "<?php echo $row['button'];?>">
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
