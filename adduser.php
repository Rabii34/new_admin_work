<?php
include('includes/config.php');

if(isset($_POST['adduser'])){
    $name = mysqli_real_escape_string($connection,$_POST['name']);
    $email = mysqli_real_escape_string($connection,$_POST['email']);
    $pass = mysqli_real_escape_string($connection,$_POST['pass']);
    $cpass = mysqli_real_escape_string($connection,$_POST['cpass']);
    $phone = mysqli_real_escape_string($connection,$_POST['phone']);

    if($pass == $cpass){
        $encpass = password_hash($pass, PASSWORD_BCRYPT);
        $email_check = "SELECT * from `users` where email = '$email'";
        $email_checkdb = mysqli_query($connection, $email_check);
        if(mysqli_num_rows($email_checkdb) > 0){
            ?>
<script>
    alert('email already exist');
</script>
            <?php
        }else{
            $insertquery = "INSERT INTO `users` (`name`, `email`, `password`, `phone`) VALUES ('$name', '$email', '$encpass', '$phone')
            ";
            $result = mysqli_query($connection,$insertquery);
            if($result){
                header('location:http://localhost/adminworknew/registeredusers.php');
            }
        }
    }else{
        echo "pass and cpass must match";
    }
}

?>

      <!-- Modal -->
<div class="modal fade" id="AddUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">User Registration Form</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="adduser.php" class="form-group" method="POST">
              <div>
                <label for="name"> Name </label>
                <input type="text" name="name" class="form-control">
              </div>

              <div>
                <label for="email"> Email </label>
                <input type="email" name="email" class="form-control">
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label for="pass"> Password </label>
                  <input type="password" name="pass" class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="cpass"> Confirm Password </label>
                  <input type="password" name="cpass" class="form-control">
                </div>
              </div>

              <div>
                <label for="phone"> Phone </label>
                <input type="number" name="phone" class="form-control">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" name="adduser" class="btn btn-primary">Add User</button>
            </div>
        </form>

          

    </div>
  </div>
</div>
