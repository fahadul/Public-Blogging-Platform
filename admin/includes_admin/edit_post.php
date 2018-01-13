
<?php

  if(isset($_GET['p_id'])){
    $the_post_id=$_GET['p_id'];
  }

  $query = "SELECT * FROM posts WHERE post_id = $the_post_id";
  $select_post_by_id= mysqli_query($connection,$query);

  while($row=mysqli_fetch_assoc($select_post_by_id)){
   $post_id=$row['post_id'];
   $post_cat=$row['post_cat_id'];
   $post_title=$row['post_title'];
   $post_author=$row['post_author'];
   $post_image=$row['post_image'];
   $post_content=$row['post_content'];
   $post_tag=$row['post_tag'];
   $post_date=$row['post_date'];
 }
 if(isset($_POST['update_post'])){
   $post_title = $_POST['post_title'];
   $post_author = $_POST['post_author'];
   $post_cat=$_POST['post_cat_id'];
   $post_status = $_POST['post_status'];

   $post_image = $_FILES['post_image']['name'];
   $post_image_temp = $_FILES['post_image']['tmp_name'];

   $post_tag = $_POST['post_tag'];
   $post_content = $_POST['post_content'];
    move_uploaded_file($post_image_temp, "../image/$post_image");

    $query ="UPDATE posts SET ";
    $query .="post_title ='{$post_title}', ";
    $query .="post_author ='{$post_author}', ";
    $query .="post_cat_id ='{$post_cat}', ";
    $query .="post_status ='{$post_status}', ";
    $query .="post_tag ='{$post_tag}', ";
    $query .="post_content ='{$post_content}', ";
    $query .="post_date =now(), ";
    $query .="post_image ='{$post_image}' ";
    $query .="WHERE post_id ={$the_post_id}";
    $update_post = mysqli_query($connection, $query);
    confirmQuery($update_post);

 }

 ?>

<form class=""  method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="post_title">Post Title</label>
        <input type="text" value="<?php echo "$post_title"; ?>" class="form-control" name="post_title" value="">
      </div>

  <div class="form-group">
      <select class="" name="post_cat_id">
        <?php
            $query = "SELECT * FROM catagory";
            $select_catagory = mysqli_query($connection, $query);

            confirmQuery($select_catagory);
            while($row = mysqli_fetch_assoc($select_catagory)){
              $cat_id = $row['cat_id'];
              $cat_name = $row['cat_name'];

              echo "<option value='$post_cat'>{$cat_name}</option>";
            }
         ?>

      </select>

  </div>

      <div class="form-group">
        <label for="post_author">Post Author</label>
        <input type="text" value="<?php echo "$post_author"; ?>" class="form-control" name="post_author" value="">
      </div>

      <div class="form-group">
        <label for="post_status">Post Status</label>
        <input type="text" value="<?php echo "$post_status"; ?>" class="form-control" name="post_status" value="">
      </div>

      <div class="form-group">
        <label for="post_image">Post Image</label>
        <img width="100" class="img-responsive" src="../image/<?php echo $post_image; ?>" alt="Relevant Image">
        <input type="file"  class="form-control" name="post_image" value="">
      </div>

      <div class="form-group">
        <label for="post_tag">Post Tag</label>
        <input type="text" value="<?php echo "$post_tag"; ?>" class="form-control" name="post_tag" value="">
      </div>

      <div class="form-group">
        <label for="post_content">Post Content</label>
        <textarea class="form-control" name="post_content" rows="10" cols="30"><?php echo "$post_content"; ?></textarea>
      </div>
      <input class="btn btn-primary" type="submit" name="update_post" value="Update Post">

      </div>
</form>
