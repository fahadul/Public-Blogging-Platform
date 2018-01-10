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

                          <?php insert_categories(); ?>

                          <form class="" action="" method="post">
                            <div class="form-group">
                              <label for="cat_name">Add Categories</label>

                            <input type="text" name="cat_name" class="form-control">
                            </div>
                            <div class="form-group">
                              <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                            </div>
                          </form>
                          <?php
                          if(isset($_GET['edit'])){
                            $cat_id= $_GET['edit'];
                            include "includes_admin/update_cat.php";
                          }
                           ?>
                        </div>

                   <div class="col-xs-6">
                     <?php find_categories(); ?>


                  <?php delete_categories(); ?>



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
