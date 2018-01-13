<?php
if(isset($_POST['create_post'])){

  $post_title = $_POST['post_title'];
  $post_author = $_POST['post_author'];
  $post_cat=$_POST['post_cat_id'];
  $post_status = $_POST['post_status'];

  $post_image = $_FILES['post_image']['name'];
  $post_image_temp = $_FILES['post_image']['tmp_name'];

  $post_tag = $_POST['post_tag'];
  $post_content = $_POST['post_content'];
  $post_date = date('d-m-y');
  $post_cmnt_cnt = $_POST['post_cmnt_cnt'];

  move_uploaded_file($post_image_temp, "../image/$post_image");

  $query = "INSERT INTO posts(post_cat_id, post_title, post_author, post_date, post_image, post_content, post_tag, post_cmnt_cnt, post_status)";
  $query .= "VALUES('{$post_cat}','{$post_title}','{$post_author}',now(),'{$post_image}','{$post_content}','{$post_tag}','{$post_cmnt_cnt}','{$post_status}')";
  $create_post_query = mysqli_query($connection, $query);
  confirmQuery($create_post_query);

  // if(!$create_post_query){
  //   die("You Have a Problem On Posting".mysqli_error($connection));
  // }
}

 ?>

<form class=""  method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="post_title">Post Title</label>
        <input type="text" class="form-control" name="post_title" value="">
      </div>

      <div class="form-group">
        <label for="post_category">Post Category</label>
        <input type="text" class="form-control" name="post_cat_id" value"">
      </div>

      <div class="form-group">
        <label for="post_author">Post Author</label>
        <input type="text" class="form-control" name="post_author" value="">
      </div>

      <div class="form-group">
        <label for="post_status">Post Status</label>
        <input type="text" class="form-control" name="post_status" value="">
      </div>

      <div class="form-group">
        <label for="post_image">Post Image</label>
        <input type="file" class="form-control" name="post_image" value="">
      </div>

      <div class="form-group">
        <label for="post_tag">Post Tag</label>
        <input type="text" class="form-control" name="post_tag" value="">
      </div>

      <div class="form-group">
        <label for="post_content">Post Content</label>
        <textarea class="form-control" name="post_content" rows="10" cols="30"></textarea>
      </div>
      <input class="btn btn-primary" type="submit" name="create_post" value="Publish Post">

      </div>
</form>
