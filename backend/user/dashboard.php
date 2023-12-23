
<?php 
session_start();
if(!isset($_SESSION['User'])){
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

<?php  include("top.php"); ?>
<?php include("sidebar.php");?>

    <div class="page">
       <?php include("nav.php"); ?>

       <div class='card mt-5 bg-dark' style="width:15rem; height:7rem; border-style: solid; border-width: 1px; border-radius:10px; margin-left:120px; float:left">
      <div class="card-body">
        <h4 class="card-title text-center" style="color:white">Total order</h4>
        <h1 class="card-title text-center" style="color:white">
            <?php
            $count=0;
            $res=mysqli_query($conn,"select * from order_list");
            $count=mysqli_fetch_array($res);
            echo $count['total_order'];
            ?>
        </h1>
      </div>
      </div>

      <div class='card mt-5 bg-dark' style="width:15rem; height:7rem; border-style: solid; border-width: 1px; border-radius:10px; float:left; margin-left:10px;">
      <div class="card-body">
        <h4 class="card-title text-center" style="color:white">Total Sales</h4>
        <h1 class="card-title text-center" style="color:white">
            <?php
            echo $count['total_sales']
            
            ?>
        </h1>
      </div>
      </div>

      <div class='card mt-5 bg-dark' style="width:15rem; height:7rem; border-style: solid; border-width: 1px; border-radius:10px; float:left; margin-left:10px;">
      <div class="card-body">
        <h4 class="card-title text-center" style="color:white">Total Sales</h4>
        <h1 class="card-title text-center" style="color:white">
            <?php
            echo $count['total_profit'];
            ?>
        </h1>
      </div>
      </div>

      <div class='card mt-5 bg-dark' style="width:15rem; height:7rem; border-style: solid; border-width: 1px; border-radius:10px; float:left;  margin-left:10px;">
      <div class="card-body">
        <h4 class="card-title text-center" style="color:white">Total Sales</h4>
        <h1 class="card-title text-center" style="color:white">
            <?php
            echo $count['total_return'];
            ?>
        </h1>
      </div>
      </div>
   

        </div>

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
