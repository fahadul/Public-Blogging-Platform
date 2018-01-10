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
                          <?php if($connection){
                            echo "Welcome Admin";
                          } ?>

                            <small>Admin Panel</small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php include "includes_admin/admin_footer.php"  ?>
