<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="styles.css" rel="stylesheet">
</head>
<body class="h-screen overflow-x-hidden" style="background: #edf2f7;">

  <!-- navbar -->
  <div class="bg-gray-100 font-sans w-full min-h-screen">
  	<div class="bg-white shadow">
      <div class="container mx-auto px-4">
        <div class="flex items-center justify-center py-4">
          <img src="logo.png" width="70px" alt="">
          <a href="index" class="text-gray-800 text-2xl font-semibold ml-4">PT. Sukses Terang Anugerah</a>
        </div>
          <div class="flex items-center justify-center py-4">
          <div class="hidden sm:flex sm:items-center">
            <a href="#" class="text-gray-800 text-sm font-semibold hover:text-red-600 mr-4">Beranda</a>
            <a href="#" class="text-gray-800 text-sm font-semibold hover:text-red-600 mr-4">Produk</a>
            <a href="#" class="text-gray-800 text-sm font-semibold hover:text-red-600 mr-4">Informasi Sales</a>
            <a href="#" class="text-gray-800 text-sm font-semibold hover:text-red-600 mr-4">Galeri</a>
            <a href="#" class="text-gray-800 text-sm font-semibold hover:text-red-600">Tentang Kami</a>
          </div>

          <div class="sm:hidden cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-600" viewBox="0 0 24 24">
              <path fill="currentColor" d="M12.9499909,17 C12.7183558,18.1411202 11.709479,19 10.5,19 C9.29052104,19 8.28164422,18.1411202 8.05000906,17 L3.5,17 C3.22385763,17 3,16.7761424 3,16.5 C3,16.2238576 3.22385763,16 3.5,16 L8.05000906,16 C8.28164422,14.8588798 9.29052104,14 10.5,14 C11.709479,14 12.7183558,14.8588798 12.9499909,16 L20.5,16 C20.7761424,16 21,16.2238576 21,16.5 C21,16.7761424 20.7761424,17 20.5,17 L12.9499909,17 Z M18.9499909,12 C18.7183558,13.1411202 17.709479,14 16.5,14 C15.290521,14 14.2816442,13.1411202 14.0500091,12 L3.5,12 C3.22385763,12 3,11.7761424 3,11.5 C3,11.2238576 3.22385763,11 3.5,11 L14.0500091,11 C14.2816442,9.85887984 15.290521,9 16.5,9 C17.709479,9 18.7183558,9.85887984 18.9499909,11 L20.5,11 C20.7761424,11 21,11.2238576 21,11.5 C21,11.7761424 20.7761424,12 20.5,12 L18.9499909,12 Z M9.94999094,7 C9.71835578,8.14112016 8.70947896,9 7.5,9 C6.29052104,9 5.28164422,8.14112016 5.05000906,7 L3.5,7 C3.22385763,7 3,6.77614237 3,6.5 C3,6.22385763 3.22385763,6 3.5,6 L5.05000906,6 C5.28164422,4.85887984 6.29052104,4 7.5,4 C8.70947896,4 9.71835578,4.85887984 9.94999094,6 L20.5,6 C20.7761424,6 21,6.22385763 21,6.5 C21,6.77614237 20.7761424,7 20.5,7 L9.94999094,7 Z M7.5,8 C8.32842712,8 9,7.32842712 9,6.5 C9,5.67157288 8.32842712,5 7.5,5 C6.67157288,5 6,5.67157288 6,6.5 C6,7.32842712 6.67157288,8 7.5,8 Z M16.5,13 C17.3284271,13 18,12.3284271 18,11.5 C18,10.6715729 17.3284271,10 16.5,10 C15.6715729,10 15,10.6715729 15,11.5 C15,12.3284271 15.6715729,13 16.5,13 Z M10.5,18 C11.3284271,18 12,17.3284271 12,16.5 C12,15.6715729 11.3284271,15 10.5,15 C9.67157288,15 9,15.6715729 9,16.5 C9,17.3284271 9.67157288,18 10.5,18 Z"/>
            </svg>
          </div>
        </div>

        <div class="block sm:hidden bg-white border-t-2 py-2">
          <div class="flex flex-col">
            <a href="#" class="text-gray-800 text-sm font-semibold hover:text-red-600 mb-1">Beranda</a>
            <a href="#" class="text-gray-800 text-sm font-semibold hover:text-red-600 mb-1">Produk</a>
            <a href="#" class="text-gray-800 text-sm font-semibold hover:text-red-600 mb-1">Informasi Sales</a>
            <a href="#" class="text-gray-800 text-sm font-semibold hover:text-red-600 mb-1">Galeri</a>
            <a href="#" class="text-gray-800 text-sm font-semibold hover:text-red-600">Tentang Kami</a>
          </div>
        </div>
      </div>
    </div>

    <!-- products -->
    <div class="p-24 flex flex-wrap items-center justify-center">

        <!-- product one -->
        <div class="h-80 flex-shrink-0 m-6 relative overflow-hidden bg-yellow-400 rounded-lg max-w-xs shadow-lg">
          <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
            <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
            <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
          </svg>
          <div class="relative pt-10 px-10 flex items-center justify-center">
            <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
            <img class="relative w-40" src="bopp packaging.png" alt="">
          </div>
          <div class="relative text-white px-6 pb-6 mt-6">
            <span class="block opacity-75 -mb-1">Tape</span>
            <div class="flex justify-between">
              <span class="block font-semibold text-xl">Bopp Packaging</span>
              <!-- <span class="block bg-white rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$68.50</span> -->
            </div>
          </div>
        </div>

        <!-- product two -->
        <div class="h-80 flex-shrink-0 m-6 relative overflow-hidden bg-red-600 rounded-lg max-w-xs shadow-lg">
          <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
            <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
            <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
          </svg>
          <div class="relative pt-10 px-10 flex items-center justify-center">
            <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
            <img class="relative w-40" src="Low Noise Bopp Packaging.png" alt="">
          </div>
          <div class="relative text-white px-6 pb-6 mt-6">
            <span class="block opacity-75 -mb-1">Tape</span>
            <div class="flex justify-between">
              <span class="block font-semibold text-xl">Low Noise Bopp Packaging</span>
            </div>
          </div>
        </div>
        <!-- product one -->
        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-yellow-400 rounded-lg max-w-xs shadow-lg">
          <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
            <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
            <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
          </svg>
          <div class="relative pt-10 px-10 flex items-center justify-center">
            <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
            <img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png" alt="">
          </div>
          <div class="relative text-white px-6 pb-6 mt-6">
            <span class="block opacity-75 -mb-1">Outdoor</span>
            <div class="flex justify-between">
              <span class="block font-semibold text-xl">Oak Tree</span>
              <span class="block bg-white rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$68.50</span>
            </div>
          </div>
        </div>
        <!-- product one -->
        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-yellow-400 rounded-lg max-w-xs shadow-lg">
          <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
            <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
            <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
          </svg>
          <div class="relative pt-10 px-10 flex items-center justify-center">
            <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
            <img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png" alt="">
          </div>
          <div class="relative text-white px-6 pb-6 mt-6">
            <span class="block opacity-75 -mb-1">Outdoor</span>
            <div class="flex justify-between">
              <span class="block font-semibold text-xl">Oak Tree</span>
              <span class="block bg-white rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$68.50</span>
            </div>
          </div>
        </div>
        <!-- product one -->
        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-yellow-400 rounded-lg max-w-xs shadow-lg">
          <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
            <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
            <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
          </svg>
          <div class="relative pt-10 px-10 flex items-center justify-center">
            <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
            <img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png" alt="">
          </div>
          <div class="relative text-white px-6 pb-6 mt-6">
            <span class="block opacity-75 -mb-1">Outdoor</span>
            <div class="flex justify-between">
              <span class="block font-semibold text-xl">Oak Tree</span>
              <span class="block bg-white rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$68.50</span>
            </div>
          </div>
        </div>
    </div>
  </div>
</body>
</html>
<?php // TODO:

 ?>
