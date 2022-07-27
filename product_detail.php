<?php
  require('header.php');
  if(!isset($_GET['pid']) || $_GET['pid']==""){
    header("location: index.php");
  }else{
    $sql=$db->prepare("SELECT * FROM product WHERE id='$_GET[pid]'");
    $sql->execute();
    $i = 0; //seed to determine background color
    if($result=$sql->FETCH(PDO::FETCH_ASSOC)){
?>
<!-- product -->
<div class="px-10 pb-10 <?php echo ($current_page=='Home') ? '' : 'pt-32' //because the header eats up around 8rem of content ?>
   grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 justify-center">
  <!-- product image -->
  <div class="product relative md:pt-10 md:px-10 lg:pt-10 lg:px-10 xl:pt-10 xl:px-10 flex items-center justify-center">
    <img class="relative w-full" src="img/<?php echo $result['filename']?>" alt="">
  </div>
  <!-- product description -->
  <div class="">
    <div class="relative text-gray-700 px-6 pb-6 mt-6">
      <!-- <span class="text-red-700 block opacity-75 -mb-1">Adhesive</span> -->
      <div class="flex justify-between mb-10">
        <span class="text-red-700 block font-semibold text-3xl"><?php echo $result['name']?></span>
      </div>
      <div class="">
        <p class="mb-4"><b>Backing</b>: <?php echo $result['backing']?></p>
        <p class="mb-4"><b>Adhesive</b>: <?php echo $result['adhesive']?></p>
        <p class="mb-4"><b>Tape Thickness</b>: <?php echo $result['tape_thickness']?></p>
        <p class="mb-4"><b>Adhesion to Steel</b>: <?php echo $result['adhesion_to_steel']?></p>
        <p class="mb-4"><b>Tensile Strength</b>: <?php echo $result['tensile_strength']?></p>
        <p class="mb-4"><b>Temperature</b>: <?php echo $result['temperature']?></p>
        <p class="mb-4"><b>Lab Test Method</b>: <?php echo $result['lab_test_method']?></p>
      </div>
    </div>
  </div>
</div>
<div class="px-20 pb-10">
  <h2 class="text-red-700 block font-semibold">Specification</h2>
  <p class="text-justify"><?php echo $result['specification']?></p>
  <h2 class="text-red-700 block font-semibold">Remarks</h2>
  <p class="text-justify"><?php echo $result['remarks']?></p>
  <h2 class="text-red-700 block font-semibold">Items</h2>
  <p class="text-justify"><?php echo $result['items']?></p>
</div>
<?php
      include('footer.php');
    }
  }
?>
