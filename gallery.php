<?php
  $current_page="Gallery";
  require('header.php');
?>
<!-- perekat -->
<div class="title w-screen <?php echo ($current_page=='Home') ? '' : 'pt-32' //because the header eats up around 8rem of content ?> sm:px-10 md:px-12 pb-5">
  <h1 class="text-center text-4xl text-red-700 px-10">
    Gallery
  </h1>
</div>
<!-- category title -->

<div class="sm:px-10 sm:pb-5 md:px-2 flex flex-wrap items-center justify-center">
  <?php
  $sql=$db->prepare("SELECT * FROM gallery ORDER BY id");
  $sql->execute();
  while($result=$sql->FETCH(PDO::FETCH_ASSOC)){
    ?>
    <div class="galeri flex-shrink-0 m-1 relative overflow-hidden bg-orange-500 rounded-lg w-1/3 shadow-lg">
      <img class="w-full" src="gallery_img/<?php echo $result['filename'] ?>" alt="">
    </div>
  <?php
  }
  ?>
</div>
<!-- end of products -->

<?php
  include('footer.php');
?>
