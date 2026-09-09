<?php
include "../connection.php";
include "../header.php";
include "../sidebar.php";
$id = $_GET['id'];
$sql = "SELECT * FROM sliders WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
 <div id="layoutSidenav">
 <div id="layoutSidenav_content">
 <div class="container-fluid px-4">
<form action="<?php echo base_url?>/sliders/add-sliders-submit.php" class="sliders main-footer" method="POST"  enctype="multipart/form-data">
  <h2 class="text-center mb-5">Edit sliders</h2>
  <!-- Background Image Start -->
  <h4 class=" mb-2">sliders Image</h4>
  <div class="input-group mb-4">
    <div class="custom-file">
      <label class="custom-file-label" for="image">Choose Image</label>
      <input type="file" class="custom-file-input" name="image" id="image">
    </div>
  </div> 
  <!-- Background Image End -->

  <h4 class=" mb-2">sliders Headings</h4>
  <!-- Heading 1 Start  (H5)-->
      <input class="form-control mb-3" type="text" placeholder="Heading " name="heading" value="<?php echo $row['heading'];?>">
  <!-- Heading 1 End  (H5)-->

     <h4 class=" mb-2">sliders title</h4>
      <input class="form-control mb-4" type="text" placeholder=" title " name="title" value="<?php echo $row['title'];?>">

  <!-- paragraph Start -->
  <h4 class=" mb-2"> paragraph</h4>
  <input class="form-control mb-3" type="text" placeholder="paragraph" name="paragraph" value="<?php echo $row['paragraph'];?>">
  <!-- paragraph End -->

  <!--button start-->
  <h4 class=" mb-2">button</h4>
  <input class="form-control mb-4" type="text" placeholder="button one " name="button_1" value="<?php echo $row['button_1'];?>">
  <input class="form-control mb-4" type="text" placeholder="button two " name="button_2" value="<?php echo $row['button_2'];?>">
  <!--button end-->

  <!-- Submit Button Start -->
  <div class="input-group-append">
  <button class="input-group-text mx-auto mb-4" name="upload_btn" id="upload_btn">Upload</button>
  </div>
  <!-- Submit Button End -->
</form>
</div>
<?php include "../footer.php"; ?>
</div>
</div>
