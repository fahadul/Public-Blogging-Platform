<?php
function confirmQuery($result)
{
  global $connection;
  if (!$result) {
    die('QUERY FAILD'.mysqli_error($connection));
  }
}

///INSERT CATEGORIES
function insert_categories(){
   global $connection;
  if(isset($_POST['submit'])){
  $cat_name=$_POST['cat_name'];
  if($cat_name == "" || empty($cat_name)){
    echo "This field should not be empty";
  }
  else{
    $query="INSERT INTO catagory(cat_name)";
    $query.="VALUE('{$cat_name}')";
    $create_catagory_query=mysqli_query($connection,$query);
    if(!$create_catagory_query){
      die('QUERY FAILD'.mysqli_error($connection));
    }
  }
  }
}
///CATEGORIES
function find_categories(){
  global $connection;
  $query = "SELECT * FROM catagory";
  $select_all_catagory= mysqli_query($connection,$query);
  ?>
<table class="table table-bordered table-hover">
<thead>
<tr>
  <th>Id</th>
  <th>Category name</th>
  <th>Action</th>
  <th>Update</th>
</tr>
</thead>
<tbody>
<?php
while($row=mysqli_fetch_assoc($select_all_catagory)){
   $cat_id=$row['cat_id'];
   $cat_name=$row['cat_name'];

   echo "<tr>
     <td>{$cat_id}</td>
     <td>{$cat_name}</td>
     <td><a href='categori.php?delete={$cat_id}'>Delete</a></td>
     <td><a href='categori.php?edit={$cat_id}'>Edit</a></td>
   </tr>";
   }

}

///DELETE CATEGORIES
function delete_categories(){
  global $connection;
  if(isset($_GET['delete'])){
    $the_cat_id = $_GET['delete'];
    $query = "DELETE FROM catagory WHERE cat_id={$the_cat_id}";
    $delete_query = mysqli_query($connection, $query);
    header("Location:categori.php");
  }
}
 ?>
