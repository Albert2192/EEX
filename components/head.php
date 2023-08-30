<?php
/* EVITAR EL CACHE EN LOS ARCHIVOS */
$v = random_int(1, 999999);

$pagina = basename($_SERVER['PHP_SELF']);
$js_pagina = str_replace('.php', '', $pagina);
$js_pagina = url() . "/js/pages/$js_pagina.js?v=$v";

if (isset($_SESSION['session'])) {
    $title = "Sistema de Gestión";
} else {
    $title = "Acceso al Sistema";
}
?>
<!DOCTYPE html>
<html lang="es" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title; ?></title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Alberto Aquino Céspedes">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- Jquery -->
    <script src="<?php echo url(); ?>js/plugins/jquery/jquery-3.2.1.min.js"></script>

    <!-- Favicon -->
    <link rel="icon" href="./images/icon/favicon.png" type="image/x-icon">
    <!-- <link rel="icon" href="./images/brand-logos/favicon.ico" type="image/x-icon"> -->
    <!-- Choices JS -->
    <script src="./libs/choices.js/public/assets/scripts/choices.min.js"></script>
    <!-- Main Theme Js -->
    <script src="./js/main.js"></script>
    <!-- Bootstrap Css -->
    <link id="style" href="./libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Style Css -->
    <link href="./css/styles.min.css" rel="stylesheet">
    <!-- Icons Css -->
    <link href="./css/icons.css" rel="stylesheet">
    <!-- Node Waves Css -->
    <link href="./libs/node-waves/waves.min.css" rel="stylesheet">
    <!-- Simplebar Css -->
    <link href="./libs/simplebar/simplebar.min.css" rel="stylesheet">
    <!-- Color Picker Css -->
    <link rel="stylesheet" href="./libs/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="./libs/@simonwep/pickr/themes/nano.min.css">
    <!-- Choices Css -->
    <link rel="stylesheet" href="./libs/choices.js/public/assets/styles/choices.min.css">
    <link rel="stylesheet" href="./libs/jsvectormap/css/jsvectormap.min.css">
    <link rel="stylesheet" href="./libs/swiper/swiper-bundle.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="<?php echo url(); ?>vendor/fontawesome-free/css/all.min.css">
    <!-- Estilos custom -->
    <link rel="stylesheet" href="<?php echo url(); ?>css/custom.css">
    <!-- Select2 -->
    <link href="<?php echo url(); ?>vendor/select2/css/select2.min.css" rel="stylesheet">
    <link href="<?php echo url(); ?>vendor/select2/css/select2-bootstrap4.min.css" rel="stylesheet">
    <script src="<?php echo url(); ?>vendor/select2/js/select2.full.min.js"></script>
    <script src="<?php echo url(); ?>vendor/select2/js/select2-dropdownPosition.js"></script>
    <script src="<?php echo url(); ?>vendor/select2/js/i18n/es.js"></script>
    <!-- BootstrapTable -->
    <!-- <link rel="stylesheet" href="<?php echo url(); ?>vendor/bootstrap-table/bootstrap-table.css">
    <script src="<?php echo url(); ?>vendor/bootstrap-table/bootstrap-table.js"></script>
    <script src="<?php echo url(); ?>vendor/bootstrap-table/extensions/export/bootstrap-table-export.js"></script>
    <script src="<?php echo url(); ?>vendor/bootstrap-table/extensions/export/tableExport.js"></script>
    <script src="<?php echo url(); ?>vendor/bootstrap-table/locale/bootstrap-table-es-CL.min.js"></script>
    <script src="<?php echo url(); ?>vendor/bootstrap-table/extensions/mobile/bootstrap-table-mobile.js"></script> -->
    <link rel="stylesheet" href="<?php echo url(); ?>vendor/bootstrap-table_1.2/bootstrap-table.min.css">
    <script src="<?php echo url(); ?>vendor/bootstrap-table_1.2/bootstrap-table.min.js"></script>
    <!-- BootstrapTable CustomView -->
    <script src="<?php echo url(); ?>vendor/bootstrap-table/extensions/custom-view/bootstrap-table-custom-view.js"></script>
    <script>
        const url_base = "<?php echo url(); ?>";
    </script>