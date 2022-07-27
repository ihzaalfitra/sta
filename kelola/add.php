<div class="p-10 w-full overflow-auto">
      <!-- product description -->
      <div class="text-red-700 mb-16">
        <a href="index.php?page=product" class="transition duration-300 ease-in-out hover:bg-gray-200 hover:text-red-700">
          <i class="transition duration-300 ease-in-out hover:bg-red-700 hover:text-gray-200 text-red-700 border border-red-700 p-5 rounded-full text-2xl fas fa-arrow-left"></i>
        </a>
          <table class="table-auto w-full">
            <form class="" action="index.php?page=process" method="post" class="" enctype="multipart/form-data">
              <?php
                  if(isset($_GET['type'])){
                    switch ($_GET['type']) {
                      case 'product':
              ?>
            <tr>
              <th class='w-48 text-black text-right font-normal px-2 py-3 break-words border-black'>Name</th><td class='text-left px-2 py-1 break-all border-red-700'>
                <input class="text-black px-2 py-1 border border-gray-500 rounded-md w-1/2" id="name" onfocus="showText(this)" type="text" name="name" value="" required maxlength="55">
                <label for="name" class="hidden text-gray-500"><sub>Maximum character is 55</sub></label>
              </td></tr><tr>
              <th class='text-black text-right font-normal px-2 py-3 break-words border-black'>Category</th><td class='text-left px-2 py-1 break-all border-red-700'>
                <select class="text-black px-2 py-1 border border-gray-500 rounded-md w-1/2" name="category_id" required>
                  <option value="none" selected disabled hidden>
                    Select a category
                  </option>
                  <?php
                    $sql=$db->prepare("SELECT * FROM category");
                    $sql->execute();
                    $i = 1; //seed to determine background color
                    while($result=$sql->FETCH(PDO::FETCH_ASSOC)){
                  ?>
                    <option value="<?php echo $result['id']; ?>"><?php echo $result['category_name']; ?></option>
                  <?php
                    }
                  ?>
                </select>
              </td></tr><tr>
              <th class='text-black text-right font-normal px-2 py-3 break-words border-black'>Testing Items</th><td class='text-left px-2 py-1 break-all border-red-700'>
                <input class="text-black px-2 py-1 border border-gray-500 rounded-md w-1/2" id="testing_items" onfocus="showText(this)" type="text" name="testing_items" value="" maxlength="80">
                <label for="testing_items" class="hidden text-gray-500"><sub>Maximum character is 80</sub></label>
              </td></tr><tr>
              <th class='text-black text-right font-normal px-2 py-3 break-words border-black'>Backing</th><td class='text-left px-2 py-1 break-all border-red-700'>
                <input class="text-black px-2 py-1 border border-gray-500 rounded-md w-1/2" id="backing" onfocus="showText(this)" type="text" name="backing" value="" maxlength="80">
                <label for="backing" class="hidden text-gray-500"><sub>Maximum character is 80</sub></label>
              </td></tr><tr>
              <th class='text-black text-right font-normal px-2 py-3 break-words border-black'>Adhesive</th><td class='text-left px-2 py-1 break-all border-red-700'>
                <input class="text-black px-2 py-1 border border-gray-500 rounded-md w-1/2" id="adhesive" onfocus="showText(this)" type="text" name="adhesive" value="" maxlength="80">
                <label for="adhesive" class="hidden text-gray-500"><sub>Maximum character is 80</sub></label>
              </td></tr><tr>
              <th class='text-black text-right font-normal px-2 py-3 break-words border-black'>Tape Thickness</th><td class='text-left px-2 py-1 break-all border-red-700'>
                <input class="text-black px-2 py-1 border border-gray-500 rounded-md w-1/2" id="tape_thickness" onfocus="showText(this)" type="text" name="tape_thickness" value="" maxlength="80">
                <label for="tape_thickness" class="hidden text-gray-500"><sub>Maximum character is 80</sub></label>
              </td></tr><tr>
              <th class='text-black text-right font-normal px-2 py-3 break-words border-black'>Adhesion to Steel</th><td class='text-left px-2 py-1 break-all border-red-700'>
                <input class="text-black px-2 py-1 border border-gray-500 rounded-md w-1/2" id="adhesion_to_steel" onfocus="showText(this)" type="text" name="adhesion_to_steel" value="" maxlength="80">
                <label for="adhesion_to_steel" class="hidden text-gray-500"><sub>Maximum character is 80</sub></label>
              </td></tr><tr>
              <th class='text-black text-right font-normal px-2 py-3 break-words border-black'>Tensile Strength</th><td class='text-left px-2 py-1 break-all border-red-700'>
                <input class="text-black px-2 py-1 border border-gray-500 rounded-md w-1/2" id="tensile_strength" onfocus="showText(this)" type="text" name="tensile_strength" value="" maxlength="80">
                <label for="tensile_strength" class="hidden text-gray-500"><sub>Maximum character is 80</sub></label>
              </td></tr><tr>
              <th class='text-black text-right font-normal px-2 py-3 break-words border-black'>Temperature</th><td class='text-left px-2 py-1 break-all border-red-700'>
                <input class="text-black px-2 py-1 border border-gray-500 rounded-md w-1/2" id="temperature" onfocus="showText(this)" type="text" name="temperature" value="" maxlength="80">
                <label for="temperature" class="hidden text-gray-500"><sub>Maximum character is 80</sub></label>
              </td></tr><tr>
              <th class='text-black text-right font-normal px-2 py-3 break-words border-black'>Lab Test Method</th><td class='text-left px-2 py-1 break-all border-red-700'>
                <input class="text-black px-2 py-1 border border-gray-500 rounded-md w-1/2" id="lab_test_method" onfocus="showText(this)" type="text" name="lab_test_method" value="" maxlength="80">
                <label for="lab_test_method" class="hidden text-gray-500"><sub>Maximum character is 80</sub></label>
              </td></tr><tr>
              <th class='text-black text-right font-normal px-2 py-3 break-words border-black'>Items</th><td colspan="7" class='text-left px-2 py-1 break-all border-red-700'>
                <input class="text-black px-2 py-1 border border-gray-500 rounded-md w-1/2" id="items" onfocus="showText(this)" type="text" name="items" value="" maxlength="255">
                <label for="items" class="hidden text-gray-500"><sub>Maximum character is 255</sub></label>
              </td></tr><tr>
              <th class='text-black text-right font-normal px-2 py-3 break-words border-black'>Remarks</th><td colspan="7" class='text-left px-2 py-1 break-all border-red-700'>
                <input class="text-black px-2 py-1 border border-gray-500 rounded-md w-1/2" id="remarks" onfocus="showText(this)" type="text" name="remarks" value="" maxlength="255">
                <label for="remarks" class="hidden text-gray-500"><sub>Maximum character is 255</sub></label>
              </td></tr><tr>
              <th class='align-top text-black text-right font-normal px-2 py-3 break-words border-black'>Specification</th><td colspan="7" class='text-left px-2 py-1 break-all border-red-700'>
                <textarea class="text-black px-2 py-1 border border-gray-500 rounded-md w-1/2" id="specification" name="specification" rows="8" cols="80"></textarea>
              </td></tr><tr>
              <th class='text-black text-right font-normal px-2 py-3 break-words border-black'>Image</th><td class='text-left px-2 py-1 break-all border-red-700'>
                <input class="" type="file" name="filename" value="">
              </td>
            </tr>
            <tr>
              <td></td>
              <td>
                <input type="hidden" name="type" value="product">
                <input type="hidden" name="operation" value="add">
                <input type="submit" name="submit" value="Submit" class="px-6 py-3 bg-red-700 text-white mt-4 rounded-md cursor-pointer">
              </td>
            </tr>


            <!-- CATEGORY -->


                    <?php
                      break;
                      case 'category':
                    ?>
                    <tr>
                      <th class='w-48 text-black text-right font-normal px-2 py-3 break-words border-black'>Category Name</th><td class='text-left px-2 py-1 break-all border-red-700'>
                        <input class="text-black px-2 py-1 border border-gray-500 rounded-md w-1/2" id="category_name" onfocus="showText(this)" type="text" name="category_name" value="" required maxlength="50">
                        <label for="category_name" class="hidden text-gray-500"><sub>Maximum character is 50</sub></label>
                      </td></tr>
                    <tr>
                      <td></td>
                      <td>
                        <input type="hidden" name="type" value="category">
                        <input type="hidden" name="operation" value="add">
                        <input type="submit" name="submit" value="Submit" class="px-6 py-3 bg-red-700 text-white mt-4 rounded-md cursor-pointer">
                      </td>
                    </tr>
            <?php
                    break;
                    case 'gallery':
            ?>
                    <tr>
                      <th class='w-48 text-black text-right font-normal px-2 py-3 break-words border-black'>Choose new image</th><td class='text-left px-2 py-1 break-all border-red-700'>
                        <input class="text-black px-2 py-1 border border-gray-500 rounded-md w-1/2" id="filename" onfocus="showText(this)" type="file" name="filename" value="" required maxlength="50">
                      </td></tr>
                    <tr>
                      <td></td>
                      <td>
                        <input type="hidden" name="type" value="gallery">
                        <input type="hidden" name="operation" value="add">
                        <input type="submit" name="submit" value="Submit" class="px-6 py-3 bg-red-700 text-white mt-4 rounded-md cursor-pointer">
                      </td>
                    </tr>
            <?php
                    break;
                    default:
                      header("location:index.php");
                    break;
                  }
                }else{
                  header("location:index.php");
                }
             ?>
            </form>
          </table>
        </div>
    </div>
</div>
<script type="text/javascript">
  function showText(x) {
    var label = $("label[for='" + $(x).attr('id') + "']");
    label.removeClass("hidden");
  }
</script>
