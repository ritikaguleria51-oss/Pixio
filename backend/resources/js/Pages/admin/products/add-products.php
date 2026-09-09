<?php
include "../connection.php";
include "../header.php";
include "../sidebar.php";
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
      <input type="file" class="custom-file-input" name="image" id="image">
    </div>
  </div> 
  <!-- Image End -->

  <input class="form-control mb-3" type="text" placeholder="label " name="label">
  <input class="form-control mb-4" type="text" placeholder=" name " name="name">
  <input class="form-control mb-3" type="text" placeholder="description" name="description">
  <input class="form-control mb-4" type="text" placeholder="price" name="price">
  <select name="products_type" id="products_type" class="form-select my-3">
    <option value="">--Select Product type--</option>
    <?php
    $sql = $conn->prepare("SELECT * FROM products_type");
    $sql->execute();
    $result = $sql->get_result();

    while($row = $result->fetch_assoc()) {
        ?>
        <option value="<?= $row['id'] ?>"><?= $row['products_type'] ?></option>
        <?php
    }
    ?>
  </select>
  <select name="products_categories" id="products_categories" class="form-select my-3">
    <option value="">--select product category--</option>
    <?php
    $sql = $conn->prepare("SELECT * FROM products_categories");
    $sql->execute();
    $result = $sql->get_result();

    while($row = $result->fetch_assoc()) {
      ?>
      <option value="<?= $row['id'] ?>"><?= $row['products_categories'] ?></option>
      <?php
    }
    ?>
    </select>
  
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
