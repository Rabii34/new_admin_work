<?php
include('includes/config.php');

if(isset($_POST['addcat'])){
    $name = mysqli_real_escape_string($connection,$_POST['catname']);
    $type = mysqli_real_escape_string($connection,$_POST['cattype']);
    $des = mysqli_real_escape_string($connection,$_POST['catdes']);


    $insertquery = "INSERT INTO `category` (`cname`, `ctype`, `cdescription`) VALUES ('$name', '$type', '$des')";
    $result = mysqli_query($connection,$insertquery);
    if($result){
        header('location:http://localhost/adminworknew/showcat.php');
    }
    else{
        echo "error";
    }
}
?>

  <!-- Modal -->
  <div class="modal fade" id="AddUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Category Form</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="addcat.php" class="form-group" method="POST">
              <div>
                <label for="catname"> Name </label>
                <input type="text" name="catname" class="form-control">
              </div>

              <div>
                <label for="cattype"> Type </label>
                <input type="text" name="cattype" class="form-control">
              </div>

              <div>
                <label for="catdes"> Description </label>
                <input type="text" name="catdes" class="form-control">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" name="addcat" class="btn btn-primary">Add category</button>
            </div>
        </form>

          

    </div>
  </div>
</div>