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


<?php  include("top.php"); ?>
<?php include("sidebar.php");?>

    <div class="page">
       <?php include("nav.php"); ?>

       <!-- main content here -->
         
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
