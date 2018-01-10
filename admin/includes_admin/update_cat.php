<form class="" action="" method="post">
  <div class="form-group">
    <label for="cat_name">Edit Categories</label>

    <?php
    if(isset($_GET['edit'])){
      $cat_id = $_GET['edit'];
      $query = "SELECT * FROM catagory WHERE cat_id=$cat_id";
      $select_categoris = mysqli_query($connection, $query);

      while($row = mysqli_fetch_assoc($select_categoris)){
        $cat_id = $row['cat_id'];
        $cat_names = $row['cat_name'];
        ?>
        <input value="<?php if(isset($cat_names)){ echo $cat_names;} ?>" type="text" class="form-control" name="cat_name" >
    <?php  } } ?>

    <?php
    /////////////Update Query//////////
    if(isset($_POST['update_catagory'])){
      $the_cat_name = $_POST['cat_name'];
      $query = "UPDATE catagory SET cat_name='{$the_cat_name}' WHERE cat_id={$cat_id}";
      $update_query = mysqli_query($connection, $query);
      header("Location:categori.php");
      if(!$update_query){
        die('QUERY FAILD'.mysqli_error($connection));
      }

    }

     ?>
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="update_catagory" value="Edit Category">
  </div>
</form>
