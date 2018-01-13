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
          <?php
          if(isset($_GET['source'])){
            $source = $_GET['source'];
          }
          else {
            $source ='';
          }
          switch ($source) {
            case 'add_admin_post':
            include "includes_admin/add_admin_post.php";
            break;
            case 'edit_post':
            include "includes_admin/edit_post.php";
            break;
            default:
            include "includes_admin/view_all_post.php";
            break;
          }


           ?>


                      </div>


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php include "includes_admin/admin_footer.php"  ?>
