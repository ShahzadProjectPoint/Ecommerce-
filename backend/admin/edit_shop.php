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
    $query3="select * from shop where id='$id' ";
    $data3=mysqli_query($conn,$query3);
    $result3=mysqli_fetch_assoc($data3);

 ?>


<?php  include("top.php"); ?>
 <?php include("sidebar.php");?> 
 <?php  include("db_connection.php"); ?>

    <div class="page">
       <?php include("nav.php"); ?>

    <form method="post" enctype='multipart/form-data'>
   
  <div class="mt-5">
    <label class="form-label mt-2 mb-1" style="width:300px; margin-left: 200px;">Title</label>
    <input type="text" name="title" value="<?php echo $result3['title']; ?>" style="width:300px; margin-left: 200px; border-radius: 40px;" class="form-control" >
  </div>

  <div class="mb-3">
    <label class="form-label mt-2 mb-1" style="width:300px; margin-left: 200px;">Price</label>
    <input type="text" name="price" value="<?php echo $result3['price']; ?>" style="width:300px; margin-left: 200px; border-radius: 40px;" class="form-control" >
  </div>



  
  <div class="alert alert-success" id="error" style="display:none">
               Product Insert Successfully
                </div>

    <input type="submit" name="submit" style="margin-left: 300px;" class="btn btn-primary mt-1">
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
    $title=$_POST['title'];
    $price=$_POST['price'];
    $res=mysqli_query($conn,"update shop set title ='$title' , price='$price'");
    if($res){
    ?>
    <script>
        document.getElementById("error").style.display="block";
    </script>
    <?php
  }
}

?>