<?php include("include/top.php"); ?>
  
  <body> 
  <?php include("include/header.php"); ?> 
<?php
  $shop_query="select * from product";
   $shop_run=mysqli_query($conn,$shop_query);
   $total_item=mysqli_num_rows($shop_run);
   if(!$total_item==0){
    ?>

   
    <section>
      <div class="section">
        <div class="section1">
          <div class="img-slider">
            <img src="https://images.pexels.com/photos/6347888/pexels-photo-6347888.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="img">
            <img src="https://images.pexels.com/photos/3962294/pexels-photo-3962294.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="img">
            <img src="https://images.pexels.com/photos/2292953/pexels-photo-2292953.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="" class="img">
            <img src="https://images.pexels.com/photos/1229861/pexels-photo-1229861.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="img">
            <img src="https://images.pexels.com/photos/1598505/pexels-photo-1598505.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="img">
          </div>
        </div>
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
             <a href="<?php echo $id; ?>"> <div class="img img1"><img src="<?php echo $image; ?>" alt=""></div>
              <div class="info"><?php echo $desc; ?></div></a>
            </div>
            <?php } ?>  
          </div>
          <?php } ?>
  
        </div>
      </div>
  
    </section>
    <?php include("include/footer.php"); ?>
   
  
  </body>
  <script>
  const close = document.querySelector(".close");
const open = document.querySelector(".ham");
const menu = document.querySelector(".menu");
close.addEventListener("click", () => {
  menu.style.visibility = "hidden";
});
open.addEventListener("click", () => {
  menu.style.visibility = "visible";
});

</script>

  
  
  </html>