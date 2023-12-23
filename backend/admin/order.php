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
    <label class="form-label mb-1" style="width:300px; margin-left: 200px; ">Total Order</label>
    <input type="number" name="torder" class="form-control" style="width:300px; margin-left: 200px; border-radius: 40px; " >
   
  </div>
  <div class="mb-3">
    <label class="form-label mt-2 mb-1" style="width:300px; margin-left: 200px;">Totol Sales</label>
    <input type="number" name="tsales" style="width:300px; margin-left: 200px; border-radius: 40px;" class="form-control" >
  </div>

  <div class="mb-3">
    <label class="form-label mt-2 mb-1" style="width:300px; margin-left: 200px;">Total Profit</label>
    <input type="number" name="tprofit" style="width:300px; margin-left: 200px; border-radius: 40px;" class="form-control" >
  </div>

  <div class="mb-3">
    <label class="form-label mt-2 mb-1" style="width:300px; margin-left: 200px;">Total Return </label>
    <input type="number" name="treturn" style="width:300px; margin-left: 200px; border-radius: 40px;" class="form-control" >
  </div>


  
  <div class="alert alert-success" id="error" style="display:none">
               Order Insert Successfully
                </div>

    <input type="submit" name="submit" style="margin-left: 300px;" class="btn btn-primary mt-1">
</form>


      <div style="margin-left:30px; margin-top:30px; margin-left:30px;">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Total Order </th>
                  <th>Total Sales</th>
                  <th>Total Profit</th>
                  <th> Total Return </th>
                </tr>
              </thead>
              <tbody>
               <?php
                $query3="select * from order_list";
                $data3=mysqli_query($conn,$query3);
                while($row=mysqli_fetch_array($data3)){ 
               ?>              
                  <td><?php echo $row['total_order'] ?></td>
                  <td><?php echo $row['total_sales'] ?></td>
                  <td><?php echo $row['total_profit'] ?></td>
                  <td><?php echo $row['total_return'] ?></td>
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
  $torder=$_POST['torder'];
  $tsales=$_POST['tsales'];
  $tprofit=$_POST['tprofit'];
  $treturn=$_POST['treturn'];
 $res=mysqli_query($conn,"insert into order_list values(NULL,'$torder','$tsales','$tprofit','$treturn')");
  if($res){
    ?>
    <script>
        document.getElementById("error").style.display="block";
    </script>
    <?php
  }
}

?>