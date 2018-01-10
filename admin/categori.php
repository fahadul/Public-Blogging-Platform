<?php include "includes_admin/admin_header.php"  ?>
    <div id="wrapper">

        <!-- Navigation -->
    <?php include "includes_admin/admin_nav.php"  ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome Admin
                            <small>Admin Panel</small>
                        </h1>
                        <div class="col-xs-6">

                          <?php if(isset($_POST['submit'])){
                          $cat_title=$_POST['cat_title'];
                          if($cat_title == "" || empty($cat_title)){
                            echo "This field should not be empty";
                          }
                          else{
                            $query="INSERT INTO catagory(cat_name)";
                            $query.="VALUE('{$cat_title}')";
                            $create_catagory_query=mysqli_query($connection,$query);
                            if(!$create_catagory_query){
                              die('QUERY FAILD'.mysqli_error($connection));
                            }
                          }
                          }
                          ?>

                          <form class="" action="" method="post">
                            <div class="form-group">
                              <label for="cat_title">Add Categories</label>
                              <input type="text" name="cat_title" class="form-control">
                            </div>
                            <div class="form-group">
                              <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                            </div>
                          </form>
                        </div>

                   <div class="col-xs-6">
                     <?php
                           $query = "SELECT * FROM catagory";
                           $select_all_catagory= mysqli_query($connection,$query);
                           ?>
                     <table class="table table-bordered table-hover">
                       <thead>
                         <tr>
                           <th>Id</th>
                           <th>Category Title</th>
                           <th>Option</th>
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
                            </tr>";
                            }

                  ?>
                  <?php
                 if(isset($_GET['delete'])){
                   $the_cat_id = $_GET['delete'];
                   $query = "DELETE FROM catagory WHERE cat_id={$the_cat_id}";
                   $delete_query = mysqli_query($connection, $query);
                   header("Location:categori.php");
                 }
                   ?>

                       </tbody>
                     </table>
                   </div>


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php include "includes_admin/admin_footer.php"  ?>
