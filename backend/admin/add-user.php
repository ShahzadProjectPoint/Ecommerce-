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

    <div class="page">
       <?php include("nav.php"); ?>

    <form method="post">
    <div class="mt-3">
    <label class="form-label mb-1" style="width:300px; margin-left: 200px; ">Name</label>
    <input type="text" name="name" class="form-control" style="width:300px; margin-left: 200px; border-radius: 40px; " >
   
  </div>
  <div class="mb-3">
    <label class="form-label mt-2 mb-1" style="width:300px; margin-left: 200px;">Username</label>
    <input type="text" name="username" style="width:300px; margin-left: 200px; border-radius: 40px;" class="form-control" >
  </div>

  <div class="mb-3">
    <label class="form-label mt-2 mb-1" style="width:300px; margin-left: 200px;">Email</label>
    <input type="text" name="email" style="width:300px; margin-left: 200px; border-radius: 40px;" class="form-control" >
  </div>

  <div class="mb-3">
    <label class="form-label mt-2 mb-1" style="width:300px; margin-left: 200px;">Password</label>
    <input type="password" name="password" style="width:300px; margin-left: 200px; border-radius: 40px;" class="form-control" >
  </div>
  <div class="mb-3">
    <label class="form-label mt-2 mb-1" style="width:300px; margin-left: 200px;">Role</label>
   <select name="role" id="" style="width:300px; margin-left: 200px; border-radius: 40px;">
    <option value="Select">Select Role</option>
    <option value="Admin">Admin</option>
    <option value="User">User</option>
   </select>
  </div>

  
  <div class="alert alert-success" id="error" style="display:none">
               User Insert Successfully
                </div>

    <input type="submit" name="submit" style="margin-left: 300px;" class="btn btn-primary mt-1">
</form>


      <div style="margin-left:30px; margin-top:30px; margin-left:30px;">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Name </th>
                  <th>Username</th>
                  <th>Email</th>
                  <th> Password </th>
                  <th> Role </th>
                  <th> Edit </th>
                  <th> Delete </th>
                </tr>
              </thead>
              <tbody>
               <?php
                $query3="select * from user";
                $data3=mysqli_query($conn,$query3);
                while($row=mysqli_fetch_array($data3)){ 
               ?>              
                  <td><?php echo $row['name'] ?></td>
                  <td><?php echo $row['username'] ?></td>
                  <td><?php echo $row['email'] ?></td>
                  <td><?php echo $row['password'] ?></td>
                  <td><?php echo $row['role'] ?></td>
                  <td><a class="btn btn-primary" href="edit_user.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                  <td><a class="btn btn-danger" href="delete_user.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
            </div>

      
      
        



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
 $res=mysqli_query($conn,"insert into user values(NULL,'$name','$username','$email','$password','$role')");
  if($res){
    ?>
    <script>
        document.getElementById("error").style.display="block";
    </script>
    <?php
  }
}

?>