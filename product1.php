<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="custom.css">
    <script src="https://kit.fontawesome.com/3c684c54ef.js" crossorigin="anonymous"></script>
</head>
<body class="h-screen overflow-x-hidden" style="background: #edf2f7;">

  <div class="bg-gray-100 font-sans w-full min-h-screen">
    <!-- navbar -->
  	<div class="bg-white shadow border-solid border-b-4 border-red-700">
      <div class="container mx-auto px-4">
        <div class="flex items-center justify-center py-4">
          <a href="index">
            <img src="logo.png" width="70px" alt="">
          </a>
          <a href="index" class="text-red-700 text-2xl font-semibold ml-4">PT. Sukses Terang Anugerah</a>
        </div>
          <div class="flex items-center justify-center py-4">
          <div class="hidden sm:flex sm:items-center">
            <a href="index" class="text-gray-800 text-sm font-semibold hover:text-red-700 mr-4">Beranda</a>
            <a href="product1" class="text-gray-800 text-sm font-semibold hover:text-red-700 mr-4 active">Produk</a>
            <a href="#" class="text-gray-800 text-sm font-semibold hover:text-red-700 mr-4">Informasi Sales</a>
            <a href="#" class="text-gray-800 text-sm font-semibold hover:text-red-700 mr-4">Galeri</a>
            <a href="#" class="text-gray-800 text-sm font-semibold hover:text-red-700">Tentang Kami</a>
          </div>

          <div class="sm:hidden cursor-pointer">
            <button class="" onclick="toggle()">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-600" viewBox="0 0 24 24">
                <path fill="currentColor" d="M12.9499909,17 C12.7183558,18.1411202 11.709479,19 10.5,19 C9.29052104,19 8.28164422,18.1411202 8.05000906,17 L3.5,17 C3.22385763,17 3,16.7761424 3,16.5 C3,16.2238576 3.22385763,16 3.5,16 L8.05000906,16 C8.28164422,14.8588798 9.29052104,14 10.5,14 C11.709479,14 12.7183558,14.8588798 12.9499909,16 L20.5,16 C20.7761424,16 21,16.2238576 21,16.5 C21,16.7761424 20.7761424,17 20.5,17 L12.9499909,17 Z M18.9499909,12 C18.7183558,13.1411202 17.709479,14 16.5,14 C15.290521,14 14.2816442,13.1411202 14.0500091,12 L3.5,12 C3.22385763,12 3,11.7761424 3,11.5 C3,11.2238576 3.22385763,11 3.5,11 L14.0500091,11 C14.2816442,9.85887984 15.290521,9 16.5,9 C17.709479,9 18.7183558,9.85887984 18.9499909,11 L20.5,11 C20.7761424,11 21,11.2238576 21,11.5 C21,11.7761424 20.7761424,12 20.5,12 L18.9499909,12 Z M9.94999094,7 C9.71835578,8.14112016 8.70947896,9 7.5,9 C6.29052104,9 5.28164422,8.14112016 5.05000906,7 L3.5,7 C3.22385763,7 3,6.77614237 3,6.5 C3,6.22385763 3.22385763,6 3.5,6 L5.05000906,6 C5.28164422,4.85887984 6.29052104,4 7.5,4 C8.70947896,4 9.71835578,4.85887984 9.94999094,6 L20.5,6 C20.7761424,6 21,6.22385763 21,6.5 C21,6.77614237 20.7761424,7 20.5,7 L9.94999094,7 Z M7.5,8 C8.32842712,8 9,7.32842712 9,6.5 C9,5.67157288 8.32842712,5 7.5,5 C6.67157288,5 6,5.67157288 6,6.5 C6,7.32842712 6.67157288,8 7.5,8 Z M16.5,13 C17.3284271,13 18,12.3284271 18,11.5 C18,10.6715729 17.3284271,10 16.5,10 C15.6715729,10 15,10.6715729 15,11.5 C15,12.3284271 15.6715729,13 16.5,13 Z M10.5,18 C11.3284271,18 12,17.3284271 12,16.5 C12,15.6715729 11.3284271,15 10.5,15 C9.67157288,15 9,15.6715729 9,16.5 C9,17.3284271 9.67157288,18 10.5,18 Z"/>
              </svg>
            </button>
          </div>
        </div>

        <div id="menu" class="block sm:hidden bg-white border-t-2 py-2">
          <div class="flex flex-col">
            <a href="#" class="text-gray-800 text-sm font-semibold hover:text-red-700 pb-4">Beranda</a>
            <a href="#" class="text-gray-800 text-sm font-semibold hover:text-red-700 pb-4 active">Produk</a>
            <a href="#" class="text-gray-800 text-sm font-semibold hover:text-red-700 pb-4">Informasi Sales</a>
            <a href="#" class="text-gray-800 text-sm font-semibold hover:text-red-700 pb-4">Galeri</a>
            <a href="#" class="text-gray-800 text-sm font-semibold hover:text-red-700">Tentang Kami</a>
          </div>
        </div>
      </div>
    </div>

    <!-- product -->
    <div class="p-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 justify-center">
        <!-- product image -->
            <div class="product relative md:pt-10 md:px-10 lg:pt-10 lg:px-10 xl:pt-10 xl:px-10 flex items-center justify-center">
              <img class="relative w-full" src="bopp packaging.png" alt="">
            </div>
        <!-- product description -->
            <div class="">
            <div class="relative text-gray-700 px-6 pb-6 mt-6">
              <span class="text-red-700 block opacity-75 -mb-1">Adhesive</span>
              <div class="flex justify-between mb-10">
                <span class="text-red-700 block font-semibold text-3xl">Bopp Packaging</span>
              </div>
              <div class="">
                  <p class="mb-4"><b>Backing</b>: BOPP Film</p>
                  <p class="mb-4"><b>Adhesive</b>: Water Based Acrylic Adhesive</p>
                  <p class="mb-4"><b>Tape Thickness</b>: 38-75micron(1.3-3mils/0.035-0.075mm)</p>
                  <p class="mb-4"><b>Adhesion to Steel</b>: 4.0N--9.0N/25mm</p>
                  <p class="mb-4"><b>Tensile Strength</b>: 60N--140N/25mm</p>
                  <p class="mb-4"><b>Temperature</b>: 0'C - 40'C</p>
                  <p class="mb-4"><b>Lab Test Method</b>: GB-T</p>
              </div>
        </div>
    </div>
  </div>

  <!-- footer -->
  <div class="container bg-grey-lighter p-8 border-solid border-t-4 border-red-700">
    <div class="sm:flex md:flex lg:flex mb-4">
    <!-- Column 1 -->
      <div class="sm:w-1/3 h-auto p-2">
        <img src="logo.png" alt="">
        <a href="index" class="text-red-700 text-2xl font-semibold">PT. Sukses Terang Anugerah</a>
      </div>

      <!-- Column 2 -->

      <div class="sm:w-1/3 h-auto sm:mt-0 mt-8 p-2 break-normal sm:break-words md:break-all lg:truncate xl:break-normal">
        <div class="text-red-700 mb-2">Kontak</div>
        <ul class="list-reset leading-normal">
          <li class="hover:text-red-700 text-grey-700"><i class="far fa-envelope"></i> 3s.suksesteranganugerah@gmail.com</li>
          <li class="hover:text-red-700 text-grey-700"><i class="fab fa-whatsapp"></i> Rio - 0812 8789 5618</li>
          <li class="hover:text-red-700 text-grey-700"><i class="fab fa-whatsapp"></i> Maria - 0812 1161 5129</li>
          <li class="hover:text-red-700 text-grey-700"><i class="fa fa-phone fa-flip-horizontal"></i> 021 8911 8499</li>
        </ul>
      </div>

      <!-- Column 3 -->

      <div class="sm:w-1/3 h-auto sm:mt-0 mt-8 p-2">
        <div class="text-red-700 mb-2">Alamat</div>
        <ul class="list-reset leading-normal">
          <li class="hover:text-green-dark text-grey-darker">Parthenon IV E11 - Kota Deltamas, Cikarang Pusat</li>
        </ul>
      </div>
    </div>

  </div>
  <div class="w-full bg-red-700 text-center text-white">
    <p id="copyright">Copyright © </p>

  </div>

  <script type="text/javascript">
    const menu = document.getElementById('menu');
    const toggle = () => menu.classList.toggle("hidden");

    var dt = new Date();
    document.getElementById("copyright").innerHTML += dt.getFullYear() + ". Powered by <a href='https://ihzaa.com'><b>ihzaalfitra</b></a>";

  </script>
  <script type="text/javascript">

  </script>
</body>
</html>
<?php // TODO:

 ?>
