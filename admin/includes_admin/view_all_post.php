<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Category</th>
      <th>Title</th>
      <th>Author</th>
      <th>Image</th>
      <th>Content</th>
      <th>Tag</th>
      <th>Date</th>
    </tr>
  </thead>
  <?php
  $query = "SELECT * FROM posts";
  $select_all_posts= mysqli_query($connection,$query);

  while($row=mysqli_fetch_assoc($select_all_posts)){
     $post_id=$row['post_id'];
     $post_cat=$row['post_cat_id'];
     $post_title=$row['post_title'];
     $post_author=$row['post_author'];
     $post_image=$row['post_image'];
     $post_content=$row['post_content'];
     $post_tag=$row['post_tag'];
     $post_date=$row['post_date'];

     echo "<tr>
       <td>{$post_id}</td>
       <td>{$post_cat}</td>
       <td>{$post_title}</td>
       <td>{$post_author}</td>
       <td><img class='img-responsive' src='../image/$post_image' alt='image'></td>
       <td>{$post_content}.<a class='btn btn-primary' href='' >Read More<span class='glyphicon glyphicon-chevron-right'></a></td>
       <td>{$post_tag}</td>
      <td>{$post_date}</td>
      <td><a href='post.php?source=edit_post&p_id={$post_id}'>Edit</a></td>
      <td><a href='post.php?delete={$post_id}'>Delete</a></td>


     </tr>";
    }
?>
</table>
<?php
if (isset($_GET['delete'])) {
  $the_post_id=$_GET['delete'];
  $query = "DELETE FROM posts WHERE post_id={$the_post_id}";
  $delete_query = mysqli_query($connection, $query);
}
?>
