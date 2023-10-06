<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('includes/config.php');

$fetching_data ="SELECT * from `users` where status = '0'";
$result = mysqli_query($connection,$fetching_data);
if($result){
    if(mysqli_num_rows($result) > 0){


?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
        <!-- Main content -->
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Trash Table</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <!-- <th>Status</th> -->
                    <th>Restore</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    while($row = mysqli_fetch_assoc($result)){
                  ?>
                  <tr>
                    <td scope="row"><?php echo $row['id'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['phone'] ?></td>
                    <!-- <td><?php echo $row['status'] ?></td> -->
                    <td><a href="restore.php?id=<?php echo $row['id'];  ?>" class="btn btn-primary">Restore</a></td>
                    <td><a href="permanentdel.php?id=<?php echo $row['id'];  ?>" class="btn btn-danger">Delete</a></td>
                  </tr>
                  <?php
                  }
                  ?>
                  </tbody>
                </table>

                <?php
                  }
                  }
                ?>
              </div>
        </div>
 </div>


<?php
include('includes/footer.php');
?>