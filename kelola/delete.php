<?php
  if(!isset($_SESSION['username']) && !isset($_SESSION['name'])){
    header("location:login.php");
  }
?>
<?php
  if(isset($_GET["id"])){
      $id=mysqli_reaL_escape_string($conn,$_GET["id"]);
      switch ($_GET['type']) {
        case 'product':


          $sql_getname=$db->prepare("SELECT filename FROM product WHERE id=:id");
          $sql_getname->bindParam(':id', $id);
          $sql_getname->execute();
          if($result=$sql_getname->FETCH(PDO::FETCH_ASSOC)){
            unlink("../img/".$result['filename']);
          }

          $sql=$db->prepare("DELETE FROM product WHERE id=:id");
          //binding parameter
          $sql->bindParam(':id', $id);

          if($sql->execute()){
            // header("location: index.php");
            header("location: index.php?page=product&s=delete");
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

          $sql_getname=$db->prepare("SELECT filename FROM product WHERE category_id=:id");
          $sql_getname->bindParam(':id', $id);
          $sql_getname->execute();
          while($result=$sql_getname->FETCH(PDO::FETCH_ASSOC)){
            unlink("../img/".$result['filename']);
          }

            $sql=$db->prepare(" DELETE FROM product WHERE category_id=:id;
                                DELETE FROM category WHERE id=:id");
            //binding parameter
            $sql->bindParam(':id', $id);

            if($sql->execute()){
              // header("location: index.php");
              header("location: index.php?page=category&s=delete");
            }else{
              ?>
              <script type="text/javascript">
                alert("ERR_SQL execution");
              </script>
              <?php
              header("location:index.php?");
            }
          break;

          case 'gallery':
            $sql_getname=$db->prepare("SELECT filename FROM gallery WHERE id=:id");
            $sql_getname->bindParam(':id', $id);
            $sql_getname->execute();
            if($result=$sql_getname->FETCH(PDO::FETCH_ASSOC)){
              unlink("../gallery_img/".$result['filename']);
            }


            $sql=$db->prepare("DELETE FROM gallery WHERE id=:id");
            //binding parameter
            $sql->bindParam(':id', $id);

            if($sql->execute()){
              // header("location: index.php");
              header("location: index.php?page=gallery&s=delete");
            }else{
              ?>
              <script type="text/javascript">
                alert("ERR_SQL execution");
              </script>
              <?php
              header("location:index.php?");
            }
          break;

          default:
            header("location:index.php");
          break;
      }
  }
?>
