


<!-- adhesive -->
<div class="title w-screen <?php echo ($current_page=='Home') ? '' : 'pt-32' //because the header eats up around 8rem of content ?> sm:px-10 md:px-12 pb-5">
  <h1 class="text-center text-4xl text-red-700 px-10">
    Product
  </h1>
</div>
<?php
  $sql_category=$db->prepare("SELECT * FROM category");
  $sql_category->execute();
  while($result_category=$sql_category->FETCH(PDO::FETCH_ASSOC)){
    $sql_category_count=$db->prepare("SELECT id FROM product WHERE category_id=$result_category[id]");
    $sql_category_count->execute();
    if($sql_category_count->rowCount()!=0){
        ?>
    <!-- category title -->
    <div class="title w-screen sm:px-10 md:px-12">
      <h1 class="text-left text-2xl text-red-700 px-10">
        <?php echo $result_category['category_name'] ?>
      </h1>
    </div>
<!-- category content -->
<div class="sm:px-10 sm:pb-5 md:px-12 flex flex-row items-start justify-center">

  <div id="col_left<?php echo $result_category['category_name'] ?>" class="w-1/3 sm:px-5 sm:pb-10 md:px-5 flex flex-col items-center justify-center">
  </div>
  <div id="col_middle<?php echo $result_category['category_name'] ?>" class="w-1/3 sm:px-5 sm:pb-10 md:px-5 flex flex-col items-center justify-center">
  </div>
  <div id="col_right<?php echo $result_category['category_name'] ?>" class="w-1/3 sm:px-5 sm:pb-10 md:px-5 flex flex-col items-center justify-center">
  </div>
</div>
<script type="text/javascript">
  function spit_col<?php echo $result_category['category_name'] ?>(col_index,value){
    if(col_index==1){
      document.getElementById("col_left<?php echo $result_category['category_name'] ?>").innerHTML+=value;
      console.log(col_index);
    }else if (col_index==2) {
      document.getElementById("col_middle<?php echo $result_category['category_name'] ?>").innerHTML+=value;
      console.log(col_index);
    }else{
      document.getElementById("col_right<?php echo $result_category['category_name'] ?>").innerHTML+=value;
      console.log(col_index);
    }
  }
</script>
<?php
  }
?>
<!-- end of products -->
<script type="text/javascript">
    <?php
      $current_category_id=$result_category['id'];
      $sql=$db->prepare("SELECT id,name,filename FROM product WHERE category_id=$current_category_id");
      $sql->execute();
      $i = 1; //seed to determine which column to be filled 1 = col_left, 2 = col_middle, 3 = col_right
      while($result=$sql->FETCH(PDO::FETCH_ASSOC)){
          $result="<div style='height:400px' class='w-full product cursor-pointer hover:m-5 flex-shrink-0 m-6 relative overflow-hidden bg-red-700 rounded-lg max-w-xs shadow-lg border-double border-4 border-red-700'>        <a href='product_detail?pid=$result[id]'>          <svg class='absolute bottom-0 left-0 mb-8' viewBox='0 0 375 283' fill='none' style='transform: scale(1.5); opacity: 0.1;'>            <rect x='159.52' y='175' width='152' height='152' rx='8' transform='rotate(-45 159.52 175)' fill='white' />            <rect y='107.48' width='152' height='152' rx='8' transform='rotate(-45 0 107.48)' fill='white' />          </svg>          <div style='height:300px'class='relative md:pt-10 md:px-10 lg:pt-10 lg:px-10 xl:pt-10 xl:px-10 flex items-center justify-center overflow-hidden'>            <div class='block absolute w-full h-full bottom-0 left-0 bg-white rounded-lg'></div>            <img class='relative w-full' src='img/$result[filename]' alt=''>          </div>          <div class='relative text-gray-100 px-6 pb-6 mt-6'>            <div class='flex justify-between'>              <span class='block font-semibold text-xl'>$result[name]</span>            </div>          </div>        </a>      </div>      ";
          echo "spit_col".$result_category['category_name']."($i,\"".$result."\");\r\n";
          if($i==1 || $i ==2){
            $i++;
          }else{
            $i=1;
          }
      }
    ?>
</script>
<?php
}
?>
