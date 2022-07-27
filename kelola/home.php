<?php 
  if(!isset($_SESSION['username']) && !isset($_SESSION['name'])){
    header("location:login.php");
  }
?>
<div class="p-24 w-full overflow-auto display-block">
  <h1 class="text-4xl text-red-700 mb-10">Welcome to admin of STA Packaging</h1>
  <!-- <h1 class="text-2xl text-red-700 mb-10"></h1> -->
  <table>

  </table>
</div>
