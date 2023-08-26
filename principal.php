<?php
include "components/switcher.php";
include "components/loader.php";
?>



<div class="page">

    <?php
    include "components/topbar.php";
    include "components/sidebar.php";
    ?>

    <!-- Start::app-content -->
    <div class="main-content app-content">
        <div class="container-fluid">

            <!-- Start::page-header -->

            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb" style="<?php echo $page != ''? "display: none !important;" : ""?>" >
                <div>
                    <p class="fw-semibold fs-18 mb-0">Bienvenido, <?php echo $user->user_name; ?>!</p>
                    <span class="fs-semibold text-muted">Track your sales activity, leads and deals here.</span>
                </div>
                <!-- <div class="btn-list mt-md-0 mt-2">
                    <button type="button" class="btn btn-primary btn-wave">
                        <i class="ri-filter-3-fill me-2 align-middle d-inline-block"></i>Filters
                    </button>
                    <button type="button" class="btn btn-outline-secondary btn-wave">
                        <i class="ri-upload-cloud-line me-2 align-middle d-inline-block"></i>Export
                    </button>
                </div> -->
            </div>

            <!-- End::page-header -->

            <!-- Start::row-1 -->
            <?php 
                if(!isset($page)){
                    include "dash.php";
                }else if(isset($page) && $page != ""){
                    include $page.".php";
                }
            ?>
            <!-- End::row-1 -->

        </div>
    </div>
    <!-- End::app-content -->
    <?php include "components/search.php";?>
    <?php include "components/footer.php";?>