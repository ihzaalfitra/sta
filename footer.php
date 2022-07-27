<?php
//   error_reporting(0);
?>
      <!-- footer -->
      <div class="w-full bg-grey-lighter p-8 border-solid border-t-4 border-red-700">
        <div class="flex mb-4">
          <!-- Column 1 -->
          <div class="sm:w-1/3 h-auto p-2">
            <img src="logo.png" alt="">
            <a href="index" class="hidden sm:shown sm:text-green-700 md:text-blue-700 lg:text-red-700 text-xs md:text-base lg:text-xl font-semibold">PT. Sukses Terang Anugerah</a>
          </div>
          <!-- Column 2 -->

          <div class="sm:w-1/3 h-auto sm:mt-0 mt-8 p-2 break-normal sm:break-words md:break-all lg:truncate xl:break-normal">
            <div class="text-red-700 mb-2 text-2xl">Contact</div>
            <ul class="list-reset leading-normal">
              <li class="hover:text-red-700 text-grey-700">
                <a href="mailto:3s.suksesteranganugerah@gmail.com" target="_blank">
                  <i class="text-red-700 far fa-envelope"></i> 3s.suksesteranganugerah@gmail.com
                </a>
              </li>
              <li class="text-grey-700">
                <i class="text-red-700 fab fa-whatsapp"></i> Rio - 0812 8789 5618</a>
              </li>
              <li class="text-grey-700">
                <i class="text-red-700 fab fa-whatsapp"></i> Maria - 0812 1161 5129</li>
              <li class="text-grey-700">
                <i class="text-red-700 fa fa-phone fa-flip-horizontal"></i> 021 8911 8499</li>
            </ul>
          </div>

          <!-- Column 3 -->

          <div class="sm:w-1/3 h-auto sm:mt-0 mt-8 p-2">
            <div class="text-red-700 mb-2 text-2xl">Location</div>
            <ul class="list-reset leading-normal">
              <li class="hover:text-green-dark text-grey-darker">Parthenon IV E11
                <br>Kota Deltamas - Cikarang Pusat, Bekasi</li>
              <br>
              <li class="hover:text-green-dark text-grey-darker">Ruko Pavillion Niaga - Jl. Tarum Barat 2 / A3 No. 5
                <br>Jayamukti - Cikarang Pusat, Bekasi</li>
            </ul>
          </div>
        </div>

      </div>
      <div class="w-full text-center bg-red-700 text-gray-100">
        <p id="copyright">Copyright © </p>

      </div>

      <script type="text/javascript">
        const menu = document.getElementById('menu');
        const toggle = () => menu.classList.toggle("hidden");

        var dt = new Date();
        document.getElementById("copyright").innerHTML += dt.getFullYear() + ". Powered by <a href='https://ihzaa.com'><logo></logo><b> ihzaalfitra</b></a>";
      </script>
      <script type="text/javascript">
      </script>
      <div class="hidden">
        icon credits
        <a href="http://www.onlinewebfonts.com">Online Web Fonts</a>
      </div>
  </body>

</html>
