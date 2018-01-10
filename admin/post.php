<?php include "includes_admin/admin_header.php"  ?>
    <div id="wrapper">

        <!-- Navigation -->
    <?php include "includes_admin/admin_nav.php"  ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                      <div class="well">
                        <h1 class="page-header">
                            Welcome Admin
                            <small>Admin Panel</small>
                        </h1>
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
                               <td>{$post_content}</td>
                               <td>{$post_tag}</td>
                                <td>{$post_date}</td>


                             </tr>"; }

                          ?>
                          <!-- <tbody>
                            <tr>
                              <td>1</td>
                              <td>Admin</td>
                              <td>This is the first Post</td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                          </tbody> -->
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
