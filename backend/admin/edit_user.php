<?php 
session_start();
if(!isset($_SESSION['Admin'])){
  ?>
  <script>
    window.location="login.php";

  </script>

  <?php
}


?>


<?php  include("top.php"); ?>
 <?php include("sidebar.php");?> 
 <?php  include("db_connection.php"); ?>

 <?php
    $id=$_GET['id'];
    $query3="select * from user where id='$id' ";
    $data3=mysqli_query($conn,$query3);
    $result3=mysqli_fetch_assoc($data3);

 ?>

    <div class="page">
       <?php include("nav.php"); ?>

    <form method="post">
    <div class="mt-3">
    <label class="form-label mb-1" style="width:300px; margin-left: 200px; ">Name</label>
    <input type="text" name="name" value="<?php echo $result3['name']; ?>" class="form-control" style="width:300px; margin-left: 200px; border-radius: 40px; " >
   
  </div>
  <div class="mb-3">
    <label class="form-label mt-2 mb-1" style="width:300px; margin-left: 200px;">Username</label>
    <input type="text" name="username" value="<?php echo $result3['username']; ?>" style="width:300px; margin-left: 200px; border-radius: 40px;" class="form-control" >
  </div>

  <div class="mb-3">
    <label class="form-label mt-2 mb-1" style="width:300px; margin-left: 200px;">Email</label>
    <input type="text" name="email" value="<?php echo $result3['email']; ?>" style="width:300px; margin-left: 200px; border-radius: 40px;" class="form-control" >
  </div>

  <div class="mb-3">
    <label class="form-label mt-2 mb-1" style="width:300px; margin-left: 200px;">Password</label>
    <input type="password" value="<?php echo $result3['password']; ?>" name="password" style="width:300px; margin-left: 200px; border-radius: 40px;" class="form-control" >
  </div>
  <div class="mb-3">
    <label class="form-label mt-2 mb-1" style="width:300px; margin-left: 200px;">Role</label>
   <select name="role" id="" style="width:300px; margin-left: 200px; border-radius: 40px;">
    <option >Select Role</option>
    <option <?php if($result3['role']=='Admin'){ echo "selected"; } ?>>Admin</option>
    <option <?php if($result3['role']=='User'){ echo "selected"; } ?>>User</option>
   </select>
  </div>

  
  <div class="alert alert-success" id="error" style="display:none">
               User Update Successfully
                </div>

    <input type="submit" value="Update" name="submit" style="margin-left: 300px;" class="btn btn-primary mt-1">
</form>


     

      
      
        



</div>


<script src="assets/bundles/lib.vendor.bundle.js"></script>

<script src="assets/bundles/apexcharts.bundle.js"></script>
<script src="assets/bundles/counterup.bundle.js"></script>
<script src="assets/bundles/knobjs.bundle.js"></script>
<script src="assets/bundles/c3.bundle.js"></script>

<script src="assets/js/core.js"></script>
<script src="assets/js/page/project-index.js"></script>
</body>

<!-- soccer/project/  07 Jan 2020 03:37:22 GMT -->
</html>


<?php
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $role=$_POST['role'];
 $res=mysqli_query($conn,"update user set name='$name',username='$username',email='$email',password='$password',role='$role' where id='$id'");
  if($res){
    ?>
    <script>
       document.location="add-user.php";
    </script>
    <?php
  }
}

?>