<?php
     include("include/top.php");
     include("include/header.php");
     $shop_query="select * from shop";
    $shop_run=mysqli_query($conn,$shop_query);
    $total_item=mysqli_num_rows($shop_run);
   
    if(!$total_item==0){
?>



<!DOCTYPE html>
<html>

<head>
  <style>
    .row h4{
    margin-left: 50px;
  }
  .row p{
    margin-left: 60px;
    font-weight: 700;
  }
  </style>
 
</head>

<body>
  <div class="container">
    <div class="row mt-5 d-flex justify-content-center align-items-center">
  <?php  while($result=mysqli_fetch_array($shop_run)){
    $image=$result['img'];
    $title= $result['title'];
    $price=$result['price'];
    ?>
      <div class="col-md-3">
       <img src="<?php echo $image;?>" alt="" width="200px">
       <h4 class="mt-3"><?php echo $title ?></h4>
       <p><?php echo $price; ?></p>
      </div>
      <?php }} ?>
     
    </div>
  </div>

  <!-- Add Bootstrap JS and jQuery links (optional, required for some Bootstrap components) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
