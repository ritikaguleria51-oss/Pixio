<?php
include "../connection.php";
include "../header.php";
include "../sidebar.php";
$sql = "SELECT* FROM products_categories";
$result = mysqli_query($conn , $sql);
?>
 <div id="layoutSidenav">
 <div id="layoutSidenav_content">
 <div class="container-fluid px-4">
    <!-- Main content -->
    <section class="content">
      <div class="main-footer">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header"> 
                <h3 class="card-title">DataTable</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                        <th>products_categories</th>
                        <th>types</th>
                        <th>edit</th>
                        <th>delete</th>
                    </tr>
                </thead>
                <?php 
                if(mysqli_num_rows($result) > 0) {
                    while($rows=mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $rows['products_categories'];?></td>
                            <td><?php echo $rows['types'];?></td>
                            <td><a href="edit.php?id=<?php echo $rows['id'];?>" class = "btn btn-primary">edit</td>
                            <td><a href="delete.php?id=<?php echo $rows['id'];?>" class = "btn btn-danger" > delete </td>
                 <?php   }
                }?>
                         </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include "../footer.php"; ?>
</div>
</div>
