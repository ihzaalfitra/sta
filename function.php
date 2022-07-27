<!-- <a href="function.php?generate=y">generate</a> -->
<?php
// if(isset($_GET['generate']) && $_GET['generate']!=""){
//   $uniq = uniqid();
//   echo "your unique image code : ".$uniq.".png";
// }
  function spit($column_name,$column_value){
    echo "
     <th class='text-white border text-center px-2 py-1 break-words border-black bg-indigo-800'>$column_name</th>
     <td class='border text-center px-2 py-1 break-all border-indigo-800'>$column_value</td>
   ";
  }
  function check_column_count($target,$current_column_count){
    if($target==$current_column_count){
      echo"</tr><tr>";
      $current_column_count=0;
      return TRUE;
    }
  }
?>
