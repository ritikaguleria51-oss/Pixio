<?php
include "../connection.php";
include "../header.php";
include "../sidebar.php";
$sql = "SELECT * FROM banners";
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
                        <th>image</th>
                        <th>heading</th>
                        <th>title</th>
                        <th>description</th>
                        <th>button</th>
                        <th>edit</th>
                        <th>delete</th>
                    </tr>
                </thead>
                <?php 
                if(mysqli_num_rows($result) > 0){
                    while($rows = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td><?php echo $rows['image'];?>
                            <img src= "<?php echo '../assets/uploads/' . $rows['image'];?>"></td>
                            <td><?php echo $rows['heading'];?></td>
                            <td><?php echo $rows['title'];?></td>
                            <td><?php echo $rows['description'];?></td>
                            <td><?php echo $rows['button'];?></td>
                            <td><a href="edit.php?id=<?php echo $rows['id'];?>" class = "btn btn-primary">edit</td>
                            <td><a href="delete.php?id=<?php echo $rows['id'];?>" class = "btn btn-danger">delete</td>
                        </tr>
                    <?php }
                } else {
                    echo "no matching records are found";
                } ?>
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
