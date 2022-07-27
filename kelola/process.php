<?php
  if(!isset($_SESSION['username']) && !isset($_SESSION['name'])){
    header("location:login.php");
  }
?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  switch ($_POST['operation']) {
    case 'add':
      switch ($_POST['type']) {
        case 'product':
          $name=mysqli_reaL_escape_string($conn,$_POST["name"]);
          $category_id=mysqli_reaL_escape_string($conn,$_POST["category_id"]);
          $testing_items=mysqli_reaL_escape_string($conn,$_POST["testing_items"]);
          $backing=mysqli_reaL_escape_string($conn,$_POST["backing"]);
          $adhesive=mysqli_reaL_escape_string($conn,$_POST["adhesive"]);
          $tape_thickness=mysqli_reaL_escape_string($conn,$_POST["tape_thickness"]);
          $adhesion_to_steel=mysqli_reaL_escape_string($conn,$_POST["adhesion_to_steel"]);
          $tensile_strength=mysqli_reaL_escape_string($conn,$_POST["tensile_strength"]);
          $temperature=mysqli_reaL_escape_string($conn,$_POST["temperature"]);
          $lab_test_method=mysqli_reaL_escape_string($conn,$_POST["lab_test_method"]);
          $specification=mysqli_reaL_escape_string($conn,$_POST["specification"]);
          $remarks=mysqli_reaL_escape_string($conn,$_POST["remarks"]);
          $items=mysqli_reaL_escape_string($conn,$_POST["items"]);

          $filename="";
          //checks if there's a file uploaded
          if(isset($_FILES['filename'])){
            //name of the image in temporary directory
            $origin = $_FILES['filename']['tmp_name'];
            //name of the image in client's machine
            $filename = uniqid().".png";
            //move the image from temporary directory to ../img/ directory
            move_uploaded_file($origin, "../img/".$filename);
          }

          $sql=$db->prepare("INSERT INTO product(name,category_id,filename,testing_items,backing,adhesive,tape_thickness,adhesion_to_steel,tensile_strength,temperature,lab_test_method,specification,remarks,items) VALUES (:name,:category_id,:filename,:testing_items,:backing,:adhesive,:tape_thickness,:adhesion_to_steel,:tensile_strength,:temperature,:lab_test_method,:specification,:remarks,:items)");
          //binding parameter
          $sql->bindParam(':name', $name);
          $sql->bindParam(':category_id', $category_id);
          $sql->bindParam(':filename', $filename);
          $sql->bindParam(':testing_items', $testing_items);
          $sql->bindParam(':backing', $backing);
          $sql->bindParam(':adhesive', $adhesive);
          $sql->bindParam(':tape_thickness', $tape_thickness);
          $sql->bindParam(':adhesion_to_steel', $adhesion_to_steel);
          $sql->bindParam(':tensile_strength', $tensile_strength);
          $sql->bindParam(':temperature', $temperature);
          $sql->bindParam(':lab_test_method', $lab_test_method);
          $sql->bindParam(':specification', $specification);
          $sql->bindParam(':remarks', $remarks);
          $sql->bindParam(':items', $items);

          if($sql->execute()){
            // header("location: index.php");
            header("location: index.php?page=product");
          }else{
            ?>
            <script type="text/javascript">
              alert("ERR_SQL execution");
            </script>
            <?php
            header("location:index.php");
          }
        break;

        case 'category':
          $category_name=mysqli_reaL_escape_string($conn,$_POST["category_name"]);

          $sql=$db->prepare("INSERT INTO category(category_name) VALUES (:category_name)");
          //binding parameter
          $sql->bindParam(':category_name', $category_name);
          if($sql->execute()){
            // header("location: index.php");
            header("location: index.php?page=category");
          }else{
            ?>
            <script type="text/javascript">
              alert("ERR_SQL execution");
            </script>
            <?php
            header("location:index.php");
          }
        break;
        case 'gallery':
          $filename="";
          //checks if there's a file uploaded
          if(isset($_FILES['filename'])){
            //name of the image in temporary directory
            $origin = $_FILES['filename']['tmp_name'];
            //name of the image in client's machine
            $filename = uniqid().".png";
            //move the image from temporary directory to ../img/ directory
            move_uploaded_file($origin, "../gallery_img/".$filename);
          }

          $sql=$db->prepare("INSERT INTO gallery(filename) VALUES (:filename)");
          //binding parameter
          $sql->bindParam(':filename', $filename);

          if($sql->execute()){
            // header("location: index.php");
            header("location: index.php?page=gallery");
          }else{
            ?>
            <script type="text/javascript">
              alert("ERR_SQL execution");
            </script>
            <?php
            header("location:index.php");
          }
        break;
        default:
            header("location:index.php");
        break;
      }
    break;
    case 'edit':
      switch ($_POST['type']) {
        case 'product':
          $id=mysqli_reaL_escape_string($conn,$_POST["id"]);
          $name=mysqli_reaL_escape_string($conn,$_POST["name"]);
          $category_id=mysqli_reaL_escape_string($conn,$_POST["category_id"]);
          $testing_items=mysqli_reaL_escape_string($conn,$_POST["testing_items"]);
          $backing=mysqli_reaL_escape_string($conn,$_POST["backing"]);
          $adhesive=mysqli_reaL_escape_string($conn,$_POST["adhesive"]);
          $tape_thickness=mysqli_reaL_escape_string($conn,$_POST["tape_thickness"]);
          $adhesion_to_steel=mysqli_reaL_escape_string($conn,$_POST["adhesion_to_steel"]);
          $tensile_strength=mysqli_reaL_escape_string($conn,$_POST["tensile_strength"]);
          $temperature=mysqli_reaL_escape_string($conn,$_POST["temperature"]);
          $lab_test_method=mysqli_reaL_escape_string($conn,$_POST["lab_test_method"]);
          $specification=mysqli_reaL_escape_string($conn,$_POST["specification"]);
          $remarks=mysqli_reaL_escape_string($conn,$_POST["remarks"]);
          $items=mysqli_reaL_escape_string($conn,$_POST["items"]);
          $img_option=mysqli_reaL_escape_string($conn,$_POST["img_option"]);
          if($img_option=="old_image"){
            $sql=$db->prepare("UPDATE product SET name = :name, category_id=:category_id, testing_items = :testing_items, backing = :backing, adhesive = :adhesive, tape_thickness = :tape_thickness, adhesion_to_steel = :adhesion_to_steel, tensile_strength = :tensile_strength, temperature = :temperature, lab_test_method = :lab_test_method, specification = :specification, remarks = :remarks, items = :items WHERE product.id = :id");
          }else{
            $sql=$db->prepare("UPDATE product SET name = :name, category_id=:category_id, testing_items = :testing_items, backing = :backing, adhesive = :adhesive, tape_thickness = :tape_thickness, adhesion_to_steel = :adhesion_to_steel, tensile_strength = :tensile_strength, temperature = :temperature, lab_test_method = :lab_test_method, specification = :specification, remarks = :remarks, items = :items, filename = :filename WHERE product.id = :id");
            if($img_option=="blank_image"){
              $filename="no_img.png";
            }elseif ($img_option=="new_image") {
              $filename="";
              //checks if there's a file uploaded
              if(isset($_FILES['filename'])){
                //name of the image in temporary directory
                $origin = $_FILES['filename']['tmp_name'];
                //name of the image in client's machine
                $filename = uniqid().".png";
                //move the image from temporary directory to ../img/ directory
                move_uploaded_file($origin, "../img/".$filename);
              }
            }
            $sql->bindParam(':filename', $filename);
          }
          //binding parameter
          $sql->bindParam(':id', $id);
          $sql->bindParam(':name', $name);
          $sql->bindParam(':category_id', $category_id);
          $sql->bindParam(':testing_items', $testing_items);
          $sql->bindParam(':backing', $backing);
          $sql->bindParam(':adhesive', $adhesive);
          $sql->bindParam(':tape_thickness', $tape_thickness);
          $sql->bindParam(':adhesion_to_steel', $adhesion_to_steel);
          $sql->bindParam(':tensile_strength', $tensile_strength);
          $sql->bindParam(':temperature', $temperature);
          $sql->bindParam(':lab_test_method', $lab_test_method);
          $sql->bindParam(':specification', $specification);
          $sql->bindParam(':remarks', $remarks);
          $sql->bindParam(':items', $items);

          if($sql->execute()){
            // header("location: index.php");
            header("location: index.php?page=product");
          }else{
            ?>
            <script type="text/javascript">
              alert("ERR_SQL execution");
            </script>
            <?php
            header("location:index.php");
          }
          break;
          case 'category':
            $id=mysqli_reaL_escape_string($conn,$_POST["id"]);
            $category_name=mysqli_reaL_escape_string($conn,$_POST["category_name"]);
            $sql=$db->prepare("UPDATE category SET category_name = :category_name WHERE id = :id");
            //fix sql of category edit
            //binding parameter
            $sql->bindParam(':id', $id);
            $sql->bindParam(':category_name', $category_name);

            if($sql->execute()){
              // header("location: index.php");
              header("location: index.php?page=category");
            }else{
              ?>
              <script type="text/javascript">
                alert("ERR_SQL execution");
              </script>
              <?php
              header("location:index.php");
            }
          break;

          default:

          break;
      }
    break;
    default:
      header("location:index.php");
    break;
  }
}else{
  header("location:index.php");
}
?>
