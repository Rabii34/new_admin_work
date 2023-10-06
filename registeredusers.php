<?php
include('includes/topbar.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Register user</h1>
      </div>
      <!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">registeruser</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

    <!-- Main content -->
    <div class="card-header">
            <h3 class="card-title">Registered users Table</h3>
            <a href="adduser.php" class="btn btn-primary float-right btn-sm" data-bs-toggle="modal" data-bs-target="#AddUserModal"> Add User</a>
          </div>

<?php
include('includes/header.php');
include('includes/sidebar.php');
include('includes/config.php');
include('addcat.php');






$fetching_data ="SELECT * from `users` where status = '1'";
$res = mysqli_query($connection,$fetching_data);
if($res){
    if(mysqli_num_rows($res) > 0){

?>




          <div class="card">
             

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
                    <th>Update</th>
                    <th>Trash</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    while($row = mysqli_fetch_assoc($res)){
                  ?>
                  <tr>
                    <td scope="row"><?php echo $row['id'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['phone'] ?></td>
                    <!-- <td><?php echo $row['status'] ?></td> -->
                    <td><a href="update.php?id=<?php echo $row['id'];  ?>" class="btn btn-warning">Update</a></td>
                    <td><a href="delete.php?id=<?php echo $row['id'];  ?>" class="btn btn-success">Trash</a></td>
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