<?php
include "../connection.php";
// Include Header file
include "header.php";
$sql="SELECT * FROM contacts";
 $result=mysqli_query($conn,$sql);
 ?>
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
                        <th>name</th>
                        <th>email</th>
                        <th>message</th>
                        <th>edit</th>
                        <th>delete</th>
                    </tr>
                  </thead>        
                  <?php 
                  if (mysqli_num_rows($result) > 0) {
                  while($rows=mysqli_fetch_assoc($result)) {
                  ?>
                  <tr>
                    <td><?php echo $rows['name'];?></td>
                    <td><?php echo $rows['email'];?></td>
                    <td><?php echo $rows['message'];?></td>
                    <td><a href="edit.php?id=<?php echo $rows['id']; ?>" class="btn btn-primary">edit</a></td>
                    <td><a href="delete.php?id=<?php echo $rows['id']; ?>" class="btn btn-danger">delete</a></td>
                  </tr>
                <?php
                } 
            }    else {
                echo"no matching records are found";
                } ?>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</section>
<?php include "footer.php"; ?>
