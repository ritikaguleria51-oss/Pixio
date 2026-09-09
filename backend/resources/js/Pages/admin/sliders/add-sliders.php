<?php
include "../header.php";
include "../sidebar.php";
?>
 <div id="layoutSidenav">
 <div id="layoutSidenav_content">
 <div class="container-fluid px-4">
<form action="<?php echo base_url?>/sliders/add-sliders-submit.php" class="sliders main-footer" method="POST"  enctype="multipart/form-data">
  <h2 class="text-center mb-5">Add sliders</h2>
  <!-- Image Start -->
  <h4 class=" mb-2"> Image</h4>
  <div class="input-group mb-4">
    <div class="custom-file">
      <label class="custom-file-label" for="image">Choose Image</label>
      <input type="file" class="custom-file-input" name="image" id="image">
    </div>
  </div> 
  <!-- Image End -->

  <h4 class=" mb-2"> Heading</h4>
  <!-- Heading 1 Start  (H5)-->
  <input class="form-control mb-3" type="text" placeholder="Heading " name="heading">
  <!-- Heading 1 End  (H5)-->

  <!-- title Start -->
  <h4 class=" mb-2"> title</h4>
  <input class="form-control mb-4" type="text" placeholder=" title " name="title">
  <!-- title End -->

  <!-- paragraph Start -->
  <h4 class=" mb-2"> paragraph</h4>
  <input class="form-control mb-3" type="text" placeholder="paragraph" name="paragraph">
  <!-- paragraph End -->  

  <!--button start-->
  <h4 class=" mb-2">button</h4>
  <input class="form-control mb-4" type="text" placeholder="button one " name="button_1">
  <input class="form-control mb-4" type="text" placeholder="button two " name="button_2">
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
