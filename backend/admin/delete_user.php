<?php 
session_start();
if(!isset($_SESSION['admin'])){
  ?>
  <script>
    window.location="login.php";

  </script>

  <?php
}


?>


<?php  include("db_connection.php"); ?>

<?php

 $id=$_GET['id'];
 $query="delete from user where id='$id'";
 $data=mysqli_query($conn,$query);
 if($data){
    ?>
    <script>
        window.location="add-user.php";
    </script>
    <?php
 }

?>