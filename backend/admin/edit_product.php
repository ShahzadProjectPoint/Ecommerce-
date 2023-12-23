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
    $query3="select * from product where id='$id' ";
    $data3=mysqli_query($conn,$query3);
    $result3=mysqli_fetch_assoc($data3);

 ?>

    <div class="page">
       <?php include("nav.php"); ?>

    <form method="post" enctype='multipart/form-data'>
    
  <div class="mb-3 mt-5">
    <label class="form-label mt-2 mb-1" style="width:300px; margin-left: 200px;">Product Name</label>
    <input type="text" name="pname" value="<?php echo $result3['product_name']; ?>" style="width:300px; margin-left: 200px; border-radius: 40px;" class="form-control" >
  </div>

  <div class="mb-3">
    <label class="form-label mt-2 mb-1" style="width:300px; margin-left: 200px;">Price</label>
    <input type="text" name="price" value="<?php echo $result3['price']; ?>" style="width:300px; margin-left: 200px; border-radius: 40px;" class="form-control" >
  </div>

  <div class="mb-3">
    <label class="form-label mt-2 mb-1" style="width:300px; margin-left: 200px;">Description</label>
    <input type="text" name="desc" value="<?php echo $result3['Description']; ?>" style="width:300px; margin-left: 200px; border-radius: 40px;" class="form-control" >
  </div>


  
  <div class="alert alert-success" id="error" style="display:none">
               Product Update Successfully
                </div>

    <input type="submit" name="submit" value="update" style="margin-left: 300px;" class="btn btn-primary mt-1">
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
    $file_name=$_FILES['image']['name'];
    $tmp_name=$_FILES['image']['tmp_name'];
    $folder="images/" .$file_name;
    move_uploaded_file($tmp_name,$folder);
    $pname=$_POST['pname'];
    $price=$_POST['price'];
    $desc=$_POST['desc'];
    $res=mysqli_query($conn,"update product set product_name='$pname',price='$price',Description='$desc'     where id='$id'");
  if($res){
    ?>
    <script>
       document.location="product.php";
    </script>
    <?php
  }
}


?>