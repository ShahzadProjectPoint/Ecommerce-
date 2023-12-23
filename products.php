<?php  include("include/top.php"); ?>
<?php include("include/header.php");  ?>

<?php
   $shop_query="select * from product";
   $shop_run=mysqli_query($conn,$shop_query);
   $total_item=mysqli_num_rows($shop_run);
  
   if(!$total_item==0){

?>

<div class="section2">
          <div class="container">
          <?php  while($result=mysqli_fetch_array($shop_run)){
              $id=$result['id'];
               $image=$result['image'];
               $title= $result['product_name'];
               $price=$result['price'];
               $desc=$result['Description'];
            ?>
            <div class="items">
           
             <a href="<?php echo $id;  ?>"> <div class="img img1"><img src="<?php echo $image; ?>" alt=""></div>
              <div class="name"><?php echo $title;  ?></div>
              <div class="price"><?php echo $price;  ?></div>
              <div class="info"><?php echo $desc;  ?></div></a>
            </div>
        <?php  }?>
          </div>
          <?php } ?>
  
        </div>