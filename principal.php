<!-- Start Switcher -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <nav class="border-bottom border-block-end-dashed">
            <div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist">
                <button class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab" data-bs-target="#switcher-home" type="button" role="tab" aria-controls="switcher-home" aria-selected="true">Theme Styles</button>
                <button class="nav-link" id="switcher-profile-tab" data-bs-toggle="tab" data-bs-target="#switcher-profile" type="button" role="tab" aria-controls="switcher-profile" aria-selected="false">Theme Colors</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel" aria-labelledby="switcher-home-tab" tabindex="0">
                <div class="">
                    <p class="switcher-style-head">Theme Color Mode:</p>
                    <div class="row switcher-style gx-0">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-light-theme">
                                    Light
                                </label>
                                <input class="form-check-input" type="radio" name="theme-style" id="switcher-light-theme" checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-dark-theme">
                                    Dark
                                </label>
                                <input class="form-check-input" type="radio" name="theme-style" id="switcher-dark-theme">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="switcher-style-head">Directions:</p>
                    <div class="row switcher-style gx-0">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-ltr">
                                    LTR
                                </label>
                                <input class="form-check-input" type="radio" name="direction" id="switcher-ltr" checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-rtl">
                                    RTL
                                </label>
                                <input class="form-check-input" type="radio" name="direction" id="switcher-rtl">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="switcher-style-head">Navigation Styles:</p>
                    <div class="row switcher-style gx-0">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-vertical">
                                    Vertical
                                </label>
                                <input class="form-check-input" type="radio" name="navigation-style" id="switcher-vertical" checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-horizontal">
                                    Horizontal
                                </label>
                                <input class="form-check-input" type="radio" name="navigation-style" id="switcher-horizontal">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navigation-menu-styles">
                    <p class="switcher-style-head">Vertical & Horizontal Menu Styles:</p>
                    <div class="row switcher-style gx-0 pb-2 gy-2">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-menu-click">
                                    Menu Click
                                </label>
                                <input class="form-check-input" type="radio" name="navigation-menu-styles" id="switcher-menu-click">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-menu-hover">
                                    Menu Hover
                                </label>
                                <input class="form-check-input" type="radio" name="navigation-menu-styles" id="switcher-menu-hover">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-icon-click">
                                    Icon Click
                                </label>
                                <input class="form-check-input" type="radio" name="navigation-menu-styles" id="switcher-icon-click">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-icon-hover">
                                    Icon Hover
                                </label>
                                <input class="form-check-input" type="radio" name="navigation-menu-styles" id="switcher-icon-hover">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidemenu-layout-styles">
                    <p class="switcher-style-head">Sidemenu Layout Styles:</p>
                    <div class="row switcher-style gx-0 pb-2 gy-2">
                        <div class="col-sm-6">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-default-menu">
                                    Default Menu
                                </label>
                                <input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-default-menu" checked>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-closed-menu">
                                    Closed Menu
                                </label>
                                <input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-closed-menu">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-icontext-menu">
                                    Icon Text
                                </label>
                                <input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-icontext-menu">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-icon-overlay">
                                    Icon Overlay
                                </label>
                                <input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-icon-overlay">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-detached">
                                    Detached
                                </label>
                                <input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-detached">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-double-menu">
                                    Double Menu
                                </label>
                                <input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-double-menu">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="switcher-style-head">Page Styles:</p>
                    <div class="row switcher-style gx-0">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-regular">
                                    Regular
                                </label>
                                <input class="form-check-input" type="radio" name="page-styles" id="switcher-regular" checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-classic">
                                    Classic
                                </label>
                                <input class="form-check-input" type="radio" name="page-styles" id="switcher-classic">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-modern">
                                    Modern
                                </label>
                                <input class="form-check-input" type="radio" name="page-styles" id="switcher-modern">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="switcher-style-head">Layout Width Styles:</p>
                    <div class="row switcher-style gx-0">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-full-width">
                                    Full Width
                                </label>
                                <input class="form-check-input" type="radio" name="layout-width" id="switcher-full-width" checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-boxed">
                                    Boxed
                                </label>
                                <input class="form-check-input" type="radio" name="layout-width" id="switcher-boxed">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="switcher-style-head">Menu Positions:</p>
                    <div class="row switcher-style gx-0">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-menu-fixed">
                                    Fixed
                                </label>
                                <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-fixed" checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-menu-scroll">
                                    Scrollable
                                </label>
                                <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-scroll">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="switcher-style-head">Header Positions:</p>
                    <div class="row switcher-style gx-0">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-header-fixed">
                                    Fixed
                                </label>
                                <input class="form-check-input" type="radio" name="header-positions" id="switcher-header-fixed" checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-header-scroll">
                                    Scrollable
                                </label>
                                <input class="form-check-input" type="radio" name="header-positions" id="switcher-header-scroll">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="switcher-style-head">Loader:</p>
                    <div class="row switcher-style gx-0">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-loader-enable">
                                    Enable
                                </label>
                                <input class="form-check-input" type="radio" name="page-loader" id="switcher-loader-enable">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-loader-disable">
                                    Disable
                                </label>
                                <input class="form-check-input" type="radio" name="page-loader" id="switcher-loader-disable" checked>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel" aria-labelledby="switcher-profile-tab" tabindex="0">
                <div>
                    <div class="theme-colors">
                        <p class="switcher-style-head">Menu Colors:</p>
                        <div class="d-flex switcher-style pb-2">
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Light Menu" type="radio" name="menu-colors" id="switcher-menu-light">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Dark Menu" type="radio" name="menu-colors" id="switcher-menu-dark" checked>
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Color Menu" type="radio" name="menu-colors" id="switcher-menu-primary">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip" data-bs-placement="top" title="Gradient Menu" type="radio" name="menu-colors" id="switcher-menu-gradient">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-transparent" data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Menu" type="radio" name="menu-colors" id="switcher-menu-transparent">
                            </div>
                        </div>
                        <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically change from below Theme Primary color picker</div>
                    </div>
                    <div class="theme-colors">
                        <p class="switcher-style-head">Header Colors:</p>
                        <div class="d-flex switcher-style pb-2">
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Light Header" type="radio" name="header-colors" id="switcher-header-light" checked>
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Dark Header" type="radio" name="header-colors" id="switcher-header-dark">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Color Header" type="radio" name="header-colors" id="switcher-header-primary">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip" data-bs-placement="top" title="Gradient Header" type="radio" name="header-colors" id="switcher-header-gradient">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-transparent" data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Header" type="radio" name="header-colors" id="switcher-header-transparent">
                            </div>
                        </div>
                        <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically change from below Theme Primary color picker</div>
                    </div>
                    <div class="theme-colors">
                        <p class="switcher-style-head">Theme Primary:</p>
                        <div class="d-flex flex-wrap align-items-center switcher-style">
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-primary-1" type="radio" name="theme-primary" id="switcher-primary">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-primary-2" type="radio" name="theme-primary" id="switcher-primary1">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-primary-3" type="radio" name="theme-primary" id="switcher-primary2">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-primary-4" type="radio" name="theme-primary" id="switcher-primary3">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-primary-5" type="radio" name="theme-primary" id="switcher-primary4">
                            </div>
                            <div class="form-check switch-select ps-0 mt-1 color-primary-light">
                                <div class="theme-container-primary"></div>
                                <div class="pickr-container-primary"></div>
                            </div>
                        </div>
                    </div>
                    <div class="theme-colors">
                        <p class="switcher-style-head">Theme Background:</p>
                        <div class="d-flex flex-wrap align-items-center switcher-style">
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-bg-1" type="radio" name="theme-background" id="switcher-background">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-bg-2" type="radio" name="theme-background" id="switcher-background1">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-bg-3" type="radio" name="theme-background" id="switcher-background2">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-bg-4" type="radio" name="theme-background" id="switcher-background3">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-bg-5" type="radio" name="theme-background" id="switcher-background4">
                            </div>
                            <div class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
                                <div class="theme-container-background"></div>
                                <div class="pickr-container-background"></div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-image mb-3">
                        <p class="switcher-style-head">Menu With Background Image:</p>
                        <div class="d-flex flex-wrap align-items-center switcher-style">
                            <div class="form-check switch-select m-2">
                                <input class="form-check-input bgimage-input bg-img1" type="radio" name="theme-background" id="switcher-bg-img">
                            </div>
                            <div class="form-check switch-select m-2">
                                <input class="form-check-input bgimage-input bg-img2" type="radio" name="theme-background" id="switcher-bg-img1">
                            </div>
                            <div class="form-check switch-select m-2">
                                <input class="form-check-input bgimage-input bg-img3" type="radio" name="theme-background" id="switcher-bg-img2">
                            </div>
                            <div class="form-check switch-select m-2">
                                <input class="form-check-input bgimage-input bg-img4" type="radio" name="theme-background" id="switcher-bg-img3">
                            </div>
                            <div class="form-check switch-select m-2">
                                <input class="form-check-input bgimage-input bg-img5" type="radio" name="theme-background" id="switcher-bg-img4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-grid canvas-footer">
                <a href="javascript:void(0);" id="reset-all" class="btn btn-danger m-1">Reset</a>
            </div>
        </div>
    </div>
</div>
<!-- End Switcher -->


<!-- Loader -->
<div id="loader">
    <img src="./images/media/loader.svg" alt="">
</div>
<!-- Loader -->

<div class="page">
    <!-- app-header -->
    <header class="app-header">

        <!-- Start::main-header-container -->
        <div class="main-header-container container-fluid">

            <!-- Start::header-content-left -->
            <div class="header-content-left">

                <!-- Start::header-element -->
                <div class="header-element">
                    <div class="horizontal-logo">
                        <a href="index.html" class="header-logo">
                            <img src="./images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                            <img src="./images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                            <img src="./images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
                            <img src="./images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
                            <img src="./images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
                            <img src="./images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
                        </a>
                    </div>
                </div>
                <!-- End::header-element -->

                <!-- Start::header-element -->
                <div class="header-element">
                    <!-- Start::header-link -->
                    <a aria-label="Hide Sidebar" class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle" data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                    <!-- End::header-link -->
                </div>
                <!-- End::header-element -->

            </div>
            <!-- End::header-content-left -->

            <!-- Start::header-content-right -->
            <div class="header-content-right">

                <!-- Start::header-element -->
                <div class="header-element header-search">
                    <!-- Start::header-link -->
                    <a href="javascript:void(0);" class="header-link" data-bs-toggle="modal" data-bs-target="#searchModal">
                        <i class="bx bx-search-alt-2 header-link-icon"></i>
                    </a>
                    <!-- End::header-link -->
                </div>
                <!-- End::header-element -->

                <!-- Start::header-element -->
                <div class="header-element country-selector">
                    <!-- Start::header-link|dropdown-toggle -->
                    <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown">
                        <img src="./images/flags/us_flag.jpg" alt="img" class="rounded-circle">
                    </a>
                    <!-- End::header-link|dropdown-toggle -->
                    <ul class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                <span class="avatar avatar-xs lh-1 me-2">
                                    <img src="./images/flags/us_flag.jpg" alt="img">
                                </span>
                                English
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                <span class="avatar avatar-xs lh-1 me-2">
                                    <img src="./images/flags/spain_flag.jpg" alt="img">
                                </span>
                                Spanish
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                <span class="avatar avatar-xs lh-1 me-2">
                                    <img src="./images/flags/french_flag.jpg" alt="img">
                                </span>
                                French
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                <span class="avatar avatar-xs lh-1 me-2">
                                    <img src="./images/flags/germany_flag.jpg" alt="img">
                                </span>
                                German
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                <span class="avatar avatar-xs lh-1 me-2">
                                    <img src="./images/flags/italy_flag.jpg" alt="img">
                                </span>
                                Italian
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                <span class="avatar avatar-xs lh-1 me-2">
                                    <img src="./images/flags/russia_flag.jpg" alt="img">
                                </span>
                                Russian
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End::header-element -->

                <!-- Start::header-element -->
                <div class="header-element header-theme-mode">
                    <!-- Start::header-link|layout-setting -->
                    <a href="javascript:void(0);" class="header-link layout-setting">
                        <span class="light-layout">
                            <!-- Start::header-link-icon -->
                            <i class="bx bx-moon header-link-icon"></i>
                            <!-- End::header-link-icon -->
                        </span>
                        <span class="dark-layout">
                            <!-- Start::header-link-icon -->
                            <i class="bx bx-sun header-link-icon"></i>
                            <!-- End::header-link-icon -->
                        </span>
                    </a>
                    <!-- End::header-link|layout-setting -->
                </div>
                <!-- End::header-element -->

                <!-- Start::header-element -->
                <div class="header-element cart-dropdown">
                    <!-- Start::header-link|dropdown-toggle -->
                    <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown">
                        <i class="bx bx-cart header-link-icon"></i>
                        <span class="badge bg-primary rounded-pill header-icon-badge" id="cart-icon-badge">5</span>
                    </a>
                    <!-- End::header-link|dropdown-toggle -->
                    <!-- Start::main-header-dropdown -->
                    <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                        <div class="p-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="mb-0 fs-17 fw-semibold">Cart Items</p>
                                <span class="badge bg-success-transparent" id="cart-data">5 Items</span>
                            </div>
                        </div>
                        <div>
                            <hr class="dropdown-divider">
                        </div>
                        <ul class="list-unstyled mb-0" id="header-cart-items-scroll">
                            <li class="dropdown-item">
                                <div class="d-flex align-items-start cart-dropdown-item">
                                    <img src="./images/ecommerce/jpg/1.jpg" alt="img" class="avatar avatar-sm avatar-rounded br-5 me-3">
                                    <div class="flex-grow-1">
                                        <div class="d-flex align-items-start justify-content-between mb-0">
                                            <div class="mb-0 fs-13 text-dark fw-semibold">
                                                <a href="cart.html">SomeThing Phone</a>
                                            </div>
                                            <div>
                                                <span class="text-black mb-1">$1,299.00</span>
                                                <a href="javascript:void(0);" class="header-cart-remove float-end dropdown-item-close"><i class="ti ti-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                            <ul class="header-product-item d-flex">
                                                <li>Metallic Blue</li>
                                                <li>6gb Ram</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-item">
                                <div class="d-flex align-items-start cart-dropdown-item">
                                    <img src="./images/ecommerce/jpg/3.jpg" alt="img" class="avatar avatar-sm avatar-rounded br-5 me-3">
                                    <div class="flex-grow-1">
                                        <div class="d-flex align-items-start justify-content-between mb-0">
                                            <div class="mb-0 fs-13 text-dark fw-semibold">
                                                <a href="cart.html">Stop Watch</a>
                                            </div>
                                            <div>
                                                <span class="text-black mb-1">$179.29</span>
                                                <a href="javascript:void(0);" class="header-cart-remove float-end dropdown-item-close"><i class="ti ti-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                            <ul class="header-product-item">
                                                <li>Analog</li>
                                                <li><span class="badge bg-pink-transparent fs-10">Free shipping</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-item">
                                <div class="d-flex align-items-start cart-dropdown-item">
                                    <img src="./images/ecommerce/jpg/5.jpg" alt="img" class="avatar avatar-sm avatar-rounded br-5 me-3">
                                    <div class="flex-grow-1">
                                        <div class="d-flex align-items-start justify-content-between mb-0">
                                            <div class="mb-0 fs-13 text-dark fw-semibold">
                                                <a href="cart.html">Photo Frame</a>
                                            </div>
                                            <div>
                                                <span class="text-black mb-1">$29.00</span>
                                                <a href="javascript:void(0);" class="header-cart-remove float-end dropdown-item-close"><i class="ti ti-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                            <ul class="header-product-item d-flex">
                                                <li>Decorative</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-item">
                                <div class="d-flex align-items-start cart-dropdown-item">
                                    <img src="./images/ecommerce/jpg/4.jpg" alt="img" class="avatar avatar-sm avatar-rounded br-5 me-3">
                                    <div class="flex-grow-1">
                                        <div class="d-flex align-items-start justify-content-between mb-0">
                                            <div class="mb-0 fs-13 text-dark fw-semibold">
                                                <a href="cart.html">Kikon Camera</a>
                                            </div>
                                            <div>
                                                <span class="text-black mb-1">$4,999.00</span>
                                                <a href="javascript:void(0);" class="header-cart-remove float-end dropdown-item-close"><i class="ti ti-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                            <ul class="header-product-item d-flex">
                                                <li>Black</li>
                                                <li>50MM</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-item">
                                <div class="d-flex align-items-start cart-dropdown-item">
                                    <img src="./images/ecommerce/jpg/6.jpg" alt="img" class="avatar avatar-sm avatar-rounded br-5 me-3">
                                    <div class="flex-grow-1">
                                        <div class="d-flex align-items-start justify-content-between mb-0">
                                            <div class="mb-0 fs-13 text-dark fw-semibold">
                                                <a href="cart.html">Canvas Shoes</a>
                                            </div>
                                            <div>
                                                <span class="text-black mb-1">$129.00</span>
                                                <a href="javascript:void(0);" class="header-cart-remove float-end dropdown-item-close"><i class="ti ti-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start justify-content-between">
                                            <ul class="header-product-item d-flex">
                                                <li>Gray</li>
                                                <li>Sports</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="p-3 empty-header-item border-top">
                            <div class="d-grid">
                                <a href="checkout.html" class="btn btn-primary">Proceed to checkout</a>
                            </div>
                        </div>
                        <div class="p-5 empty-item d-none">
                            <div class="text-center">
                                <span class="avatar avatar-xl avatar-rounded bg-warning-transparent">
                                    <i class="ri-shopping-cart-2-line fs-2"></i>
                                </span>
                                <h6 class="fw-bold mb-1 mt-3">Your Cart is Empty</h6>
                                <span class="mb-3 fw-normal fs-13 d-block">Add some items to make me happy :)</span>
                                <a href="products.html" class="btn btn-primary btn-wave btn-sm m-1" data-abc="true">continue shopping <i class="bi bi-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End::main-header-dropdown -->
                </div>
                <!-- End::header-element -->

                <!-- Start::header-element -->
                <div class="header-element notifications-dropdown">
                    <!-- Start::header-link|dropdown-toggle -->
                    <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" id="messageDropdown" aria-expanded="false">
                        <i class="bx bx-bell header-link-icon"></i>
                        <span class="badge bg-secondary rounded-pill header-icon-badge pulse pulse-secondary" id="notification-icon-badge">5</span>
                    </a>
                    <!-- End::header-link|dropdown-toggle -->
                    <!-- Start::main-header-dropdown -->
                    <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                        <div class="p-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="mb-0 fs-17 fw-semibold">Notifications</p>
                                <span class="badge bg-secondary-transparent" id="notifiation-data">5 Unread</span>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <ul class="list-unstyled mb-0" id="header-notification-scroll">
                            <li class="dropdown-item">
                                <div class="d-flex align-items-start">
                                    <div class="pe-2">
                                        <span class="avatar avatar-md bg-primary-transparent avatar-rounded"><i class="ti ti-gift fs-18"></i></span>
                                    </div>
                                    <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                        <div>
                                            <p class="mb-0 fw-semibold"><a href="notifications.html">Your Order Has Been Shipped</a></p>
                                            <span class="text-muted fw-normal fs-12 header-notification-text">Order No: 123456 Has Shipped To Your Delivery Address</span>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i class="ti ti-x fs-16"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-item">
                                <div class="d-flex align-items-start">
                                    <div class="pe-2">
                                        <span class="avatar avatar-md bg-secondary-transparent avatar-rounded"><i class="ti ti-discount-2 fs-18"></i></span>
                                    </div>
                                    <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                        <div>
                                            <p class="mb-0 fw-semibold"><a href="notifications.html">Discount Available</a></p>
                                            <span class="text-muted fw-normal fs-12 header-notification-text">Discount Available On Selected Products</span>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i class="ti ti-x fs-16"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-item">
                                <div class="d-flex align-items-start">
                                    <div class="pe-2">
                                        <span class="avatar avatar-md bg-pink-transparent avatar-rounded"><i class="ti ti-user-check fs-18"></i></span>
                                    </div>
                                    <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                        <div>
                                            <p class="mb-0 fw-semibold"><a href="notifications.html">Account Has Been Verified</a></p>
                                            <span class="text-muted fw-normal fs-12 header-notification-text">Your Account Has Been Verified Sucessfully</span>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i class="ti ti-x fs-16"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-item">
                                <div class="d-flex align-items-start">
                                    <div class="pe-2">
                                        <span class="avatar avatar-md bg-warning-transparent avatar-rounded"><i class="ti ti-circle-check fs-18"></i></span>
                                    </div>
                                    <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                        <div>
                                            <p class="mb-0 fw-semibold"><a href="notifications.html">Order Placed <span class="text-warning">ID: #1116773</span></a></p>
                                            <span class="text-muted fw-normal fs-12 header-notification-text">Order Placed Successfully</span>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i class="ti ti-x fs-16"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-item">
                                <div class="d-flex align-items-start">
                                    <div class="pe-2">
                                        <span class="avatar avatar-md bg-success-transparent avatar-rounded"><i class="ti ti-clock fs-18"></i></span>
                                    </div>
                                    <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                        <div>
                                            <p class="mb-0 fw-semibold"><a href="notifications.html">Order Delayed <span class="text-success">ID: 7731116</span></a></p>
                                            <span class="text-muted fw-normal fs-12 header-notification-text">Order Delayed Unfortunately</span>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i class="ti ti-x fs-16"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="p-3 empty-header-item1 border-top">
                            <div class="d-grid">
                                <a href="notifications.html" class="btn btn-primary">View All</a>
                            </div>
                        </div>
                        <div class="p-5 empty-item1 d-none">
                            <div class="text-center">
                                <span class="avatar avatar-xl avatar-rounded bg-secondary-transparent">
                                    <i class="ri-notification-off-line fs-2"></i>
                                </span>
                                <h6 class="fw-semibold mt-3">No New Notifications</h6>
                            </div>
                        </div>
                    </div>
                    <!-- End::main-header-dropdown -->
                </div>
                <!-- End::header-element -->

                <!-- Start::header-element -->
                <div class="header-element header-shortcuts-dropdown">
                    <!-- Start::header-link|dropdown-toggle -->
                    <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" id="notificationDropdown" aria-expanded="false">
                        <i class="bx bx-grid-alt header-link-icon"></i>
                    </a>
                    <!-- End::header-link|dropdown-toggle -->
                    <!-- Start::main-header-dropdown -->
                    <div class="main-header-dropdown header-shortcuts-dropdown dropdown-menu pb-0 dropdown-menu-end" aria-labelledby="notificationDropdown">
                        <div class="p-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="mb-0 fs-17 fw-semibold">Related Apps</p>
                            </div>
                        </div>
                        <div class="dropdown-divider mb-0"></div>
                        <div class="main-header-shortcuts p-2" id="header-shortcut-scroll">
                            <div class="row g-2">
                                <div class="col-4">
                                    <a href="javascript:void(0);">
                                        <div class="text-center p-3 related-app">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="./images/apps/figma.png" alt="">
                                            </span>
                                            <span class="d-block fs-12">Figma</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="javascript:void(0);">
                                        <div class="text-center p-3 related-app">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="./images/apps/microsoft-powerpoint.png" alt="">
                                            </span>
                                            <span class="d-block fs-12">Power Point</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="javascript:void(0);">
                                        <div class="text-center p-3 related-app">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="./images/apps/microsoft-word.png" alt="">
                                            </span>
                                            <span class="d-block fs-12">MS Word</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="javascript:void(0);">
                                        <div class="text-center p-3 related-app">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="./images/apps/calender.png" alt="">
                                            </span>
                                            <span class="d-block fs-12">Calendar</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="javascript:void(0);">
                                        <div class="text-center p-3 related-app">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="./images/apps/sketch.png" alt="">
                                            </span>
                                            <span class="d-block fs-12">Sketch</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="javascript:void(0);">
                                        <div class="text-center p-3 related-app">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="./images/apps/google-docs.png" alt="">
                                            </span>
                                            <span class="d-block fs-12">Docs</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="javascript:void(0);">
                                        <div class="text-center p-3 related-app">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="./images/apps/google.png" alt="">
                                            </span>
                                            <span class="d-block fs-12">Google</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="javascript:void(0);">
                                        <div class="text-center p-3 related-app">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="./images/apps/translate.png" alt="">
                                            </span>
                                            <span class="d-block fs-12">Translate</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="javascript:void(0);">
                                        <div class="text-center p-3 related-app">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="./images/apps/google-sheets.png" alt="">
                                            </span>
                                            <span class="d-block fs-12">Sheets</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 border-top">
                            <div class="d-grid">
                                <a href="javascript:void(0);" class="btn btn-primary">View All</a>
                            </div>
                        </div>
                    </div>
                    <!-- End::main-header-dropdown -->
                </div>
                <!-- End::header-element -->

                <!-- Start::header-element -->
                <div class="header-element header-fullscreen">
                    <!-- Start::header-link -->
                    <a onclick="openFullscreen();" href="#" class="header-link">
                        <i class="bx bx-fullscreen full-screen-open header-link-icon"></i>
                        <i class="bx bx-exit-fullscreen full-screen-close header-link-icon d-none"></i>
                    </a>
                    <!-- End::header-link -->
                </div>
                <!-- End::header-element -->

                <!-- Start::header-element -->
                <div class="header-element">
                    <!-- Start::header-link|dropdown-toggle -->
                    <a href="#" class="header-link dropdown-toggle" id="mainHeaderProfile" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <div class="me-sm-2 me-0">
                                <img src="./images/faces/9.jpg" alt="img" width="32" height="32" class="rounded-circle">
                            </div>
                            <div class="d-sm-block d-none">
                                <p class="fw-semibold mb-0 lh-1">Json Taylor</p>
                                <span class="op-7 fw-normal d-block fs-11">Web Designer</span>
                            </div>
                        </div>
                    </a>
                    <!-- End::header-link|dropdown-toggle -->
                    <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end" aria-labelledby="mainHeaderProfile">
                        <li><a class="dropdown-item d-flex" href="profile.html"><i class="ti ti-user-circle fs-18 me-2 op-7"></i>Profile</a></li>
                        <li><a class="dropdown-item d-flex" href="mail.html"><i class="ti ti-inbox fs-18 me-2 op-7"></i>Inbox <span class="badge bg-success-transparent ms-auto">25</span></a></li>
                        <li><a class="dropdown-item d-flex border-block-end" href="to-do-list.html"><i class="ti ti-clipboard-check fs-18 me-2 op-7"></i>Task Manager</a></li>
                        <li><a class="dropdown-item d-flex" href="mail-settings.html"><i class="ti ti-adjustments-horizontal fs-18 me-2 op-7"></i>Settings</a></li>
                        <li><a class="dropdown-item d-flex border-block-end" href="javascript:void(0);"><i class="ti ti-wallet fs-18 me-2 op-7"></i>Bal: $7,12,950</a></li>
                        <li><a class="dropdown-item d-flex" href="chat.html"><i class="ti ti-headset fs-18 me-2 op-7"></i>Support</a></li>
                        <li><a class="dropdown-item d-flex" href="#" id="logout"><i class="ti ti-logout fs-18 me-2 op-7"></i>Log Out</a></li>
                    </ul>
                </div>
                <!-- End::header-element -->

                <!-- Start::header-element -->
                <div class="header-element">
                    <!-- Start::header-link|switcher-icon -->
                    <a href="#" class="header-link switcher-icon" data-bs-toggle="offcanvas" data-bs-target="#switcher-canvas">
                        <i class="bx bx-cog header-link-icon"></i>
                    </a>
                    <!-- End::header-link|switcher-icon -->
                </div>
                <!-- End::header-element -->

            </div>
            <!-- End::header-content-right -->

        </div>
        <!-- End::main-header-container -->

    </header>
    <!-- /app-header -->
    <!-- Start::app-sidebar -->
    <aside class="app-sidebar sticky" id="sidebar">

        <!-- Start::main-sidebar-header -->
        <div class="main-sidebar-header">
            <a href="index.html" class="header-logo">
                <img src="./images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                <img src="./images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                <img src="./images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
                <img src="./images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
                <img src="./images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
                <img src="./images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
            </a>
        </div>
        <!-- End::main-sidebar-header -->

        <!-- Start::main-sidebar -->
        <div class="main-sidebar" id="sidebar-scroll">

            <!-- Start::nav -->
            <nav class="main-menu-container nav nav-pills flex-column sub-open">
                <div class="slide-left" id="slide-left">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                    </svg>
                </div>
                <ul class="main-menu">
                    <!-- Start::slide__category -->
                    <li class="slide__category"><span class="category-name">Main</span></li>
                    <!-- End::slide__category -->

                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-home side-menu__icon"></i>
                            <span class="side-menu__label">Dashboards<span class="badge bg-warning-transparent ms-2">12</span></span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1">
                                <a href="javascript:void(0)">Dashboards</a>
                            </li>
                            <li class="slide">
                                <a href="index.html" class="side-menu__item">CRM</a>
                            </li>
                            <li class="slide">
                                <a href="index-1.html" class="side-menu__item">Ecommerce</a>
                            </li>
                            <li class="slide">
                                <a href="index-2.html" class="side-menu__item">Crypto</a>
                            </li>
                            <li class="slide">
                                <a href="index-3.html" class="side-menu__item">Jobs</a>
                            </li>
                            <li class="slide">
                                <a href="index-4.html" class="side-menu__item">NFT</a>
                            </li>
                            <li class="slide">
                                <a href="index-5.html" class="side-menu__item">Sales</a>
                            </li>
                            <li class="slide">
                                <a href="index-6.html" class="side-menu__item">Analytics</a>
                            </li>
                            <li class="slide">
                                <a href="index-7.html" class="side-menu__item">Projects</a>
                            </li>
                            <li class="slide">
                                <a href="index-8.html" class="side-menu__item">HRM</a>
                            </li>
                            <li class="slide">
                                <a href="index-9.html" class="side-menu__item">Stocks</a>
                            </li>
                            <li class="slide">
                                <a href="index-10.html" class="side-menu__item">Courses</a>
                            </li>
                            <li class="slide">
                                <a href="index-11.html" class="side-menu__item">Personal</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->

                    <!-- Start::slide__category -->
                    <li class="slide__category"><span class="category-name">Pages</span></li>
                    <!-- End::slide__category -->

                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-file-blank side-menu__icon"></i>
                            <span class="side-menu__label">Pages<span class="badge bg-secondary-transparent ms-2">New</span></span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1">
                                <a href="javascript:void(0)">Pages</a>
                            </li>
                            <li class="slide">
                                <a href="about-us.html" class="side-menu__item">About Us</a>
                            </li>
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">Blog
                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                <ul class="slide-menu child2">
                                    <li class="slide">
                                        <a href="blog.html" class="side-menu__item">Blog</a>
                                    </li>
                                    <li class="slide">
                                        <a href="blog-details.html" class="side-menu__item">Blog Details</a>
                                    </li>
                                    <li class="slide">
                                        <a href="blog-create.html" class="side-menu__item">Create Blog</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a href="chat.html" class="side-menu__item">Chat</a>
                            </li>
                            <li class="slide">
                                <a href="contacts.html" class="side-menu__item">Contacts</a>
                            </li>
                            <li class="slide">
                                <a href="contact-us.html" class="side-menu__item">Contact Us</a>
                            </li>
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">Ecommerce
                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                <ul class="slide-menu child2">
                                    <li class="slide">
                                        <a href="add-products.html" class="side-menu__item">Add Products</a>
                                    </li>
                                    <li class="slide">
                                        <a href="cart.html" class="side-menu__item">Cart</a>
                                    </li>
                                    <li class="slide">
                                        <a href="checkout.html" class="side-menu__item">Checkout</a>
                                    </li>
                                    <li class="slide">
                                        <a href="edit-products.html" class="side-menu__item">Edit Products</a>
                                    </li>
                                    <li class="slide">
                                        <a href="order-details.html" class="side-menu__item">Order Details</a>
                                    </li>
                                    <li class="slide">
                                        <a href="orders.html" class="side-menu__item">Orders</a>
                                    </li>
                                    <li class="slide">
                                        <a href="products.html" class="side-menu__item">Products</a>
                                    </li>
                                    <li class="slide">
                                        <a href="product-details.html" class="side-menu__item">Product Details</a>
                                    </li>
                                    <li class="slide">
                                        <a href="products-list.html" class="side-menu__item">Products List</a>
                                    </li>
                                    <li class="slide">
                                        <a href="wishlist.html" class="side-menu__item">Wishlist</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">Email
                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                <ul class="slide-menu child2">
                                    <li class="slide">
                                        <a href="mail.html" class="side-menu__item">Mail App</a>
                                    </li>
                                    <li class="slide">
                                        <a href="mail-settings.html" class="side-menu__item">Mail Settings</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a href="empty.html" class="side-menu__item">Empty</a>
                            </li>
                            <li class="slide">
                                <a href="faq's.html" class="side-menu__item">FAQ's</a>
                            </li>
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">File Manager
                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                <ul class="slide-menu child2">
                                    <li class="slide">
                                        <a href="file-manager.html" class="side-menu__item">File Manager</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">Invoice
                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                <ul class="slide-menu child2">
                                    <li class="slide">
                                        <a href="invoice-create.html" class="side-menu__item">Create Invoice</a>
                                    </li>
                                    <li class="slide">
                                        <a href="invoice-details.html" class="side-menu__item">Invoice Details</a>
                                    </li>
                                    <li class="slide">
                                        <a href="invoice-list.html" class="side-menu__item">Invoice List</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a href="landing.html" class="side-menu__item">Landing</a>
                            </li>
                            <li class="slide">
                                <a href="landing-jobs.html" class="side-menu__item">Jobs Landing<span class="badge bg-secondary-transparent ms-2">New</span></a>
                            </li>
                            <li class="slide">
                                <a href="notifications.html" class="side-menu__item">Notifications</a>
                            </li>
                            <li class="slide">
                                <a href="pricing.html" class="side-menu__item">Pricing</a>
                            </li>
                            <li class="slide">
                                <a href="profile.html" class="side-menu__item">Profile</a>
                            </li>
                            <li class="slide">
                                <a href="reviews.html" class="side-menu__item">Reviews</a>
                            </li>
                            <li class="slide">
                                <a href="team.html" class="side-menu__item">Team</a>
                            </li>
                            <li class="slide">
                                <a href="terms_conditions.html" class="side-menu__item">Terms & Conditions</a>
                            </li>
                            <li class="slide">
                                <a href="timeline.html" class="side-menu__item">Timeline</a>
                            </li>
                            <li class="slide">
                                <a href="to-do-list.html" class="side-menu__item">To Do List</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->

                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-task side-menu__icon"></i>
                            <span class="side-menu__label">Task<span class="badge bg-secondary-transparent ms-2">New</span></span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1">
                                <a href="javascript:void(0)">Error</a>
                            </li>
                            <li class="slide">
                                <a href="task-kanban-board.html" class="side-menu__item">Kanban Board</a>
                            </li>
                            <li class="slide">
                                <a href="task-list-view.html" class="side-menu__item">List View</a>
                            </li>
                            <li class="slide">
                                <a href="task-details.html" class="side-menu__item">Task Details</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->

                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-fingerprint side-menu__icon"></i>
                            <span class="side-menu__label">Authentication</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1">
                                <a href="javascript:void(0)">Authentication</a>
                            </li>
                            <li class="slide">
                                <a href="coming-soon.html" class="side-menu__item">Coming Soon</a>
                            </li>
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">Create Password
                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                <ul class="slide-menu child2">
                                    <li class="slide">
                                        <a href="create-password-basic.html" class="side-menu__item">Basic</a>
                                    </li>
                                    <li class="slide">
                                        <a href="create-password-cover.html" class="side-menu__item">Cover</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">Lock Screen
                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                <ul class="slide-menu child2">
                                    <li class="slide">
                                        <a href="lockscreen-basic.html" class="side-menu__item">Basic</a>
                                    </li>
                                    <li class="slide">
                                        <a href="lockscreen-cover.html" class="side-menu__item">Cover</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">Reset Password
                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                <ul class="slide-menu child2">
                                    <li class="slide">
                                        <a href="reset-password-basic.html" class="side-menu__item">Basic</a>
                                    </li>
                                    <li class="slide">
                                        <a href="reset-password-cover.html" class="side-menu__item">Cover</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">Sign Up
                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                <ul class="slide-menu child2">
                                    <li class="slide">
                                        <a href="sign-up-basic.html" class="side-menu__item">Basic</a>
                                    </li>
                                    <li class="slide">
                                        <a href="sign-up-cover.html" class="side-menu__item">Cover</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">Sign In
                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                <ul class="slide-menu child2">
                                    <li class="slide">
                                        <a href="sign-in-basic.html" class="side-menu__item">Basic</a>
                                    </li>
                                    <li class="slide">
                                        <a href="sign-in-cover.html" class="side-menu__item">Cover</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">Two Step Verification
                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                <ul class="slide-menu child2">
                                    <li class="slide">
                                        <a href="two-step-verification-basic.html" class="side-menu__item">Basic</a>
                                    </li>
                                    <li class="slide">
                                        <a href="two-step-verification-cover.html" class="side-menu__item">Cover</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a href="under-maintenance.html" class="side-menu__item">Under Maintenance</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->

                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-error side-menu__icon"></i>
                            <span class="side-menu__label">Error</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1">
                                <a href="javascript:void(0)">Error</a>
                            </li>
                            <li class="slide">
                                <a href="401-error.html" class="side-menu__item">401 - Error</a>
                            </li>
                            <li class="slide">
                                <a href="404-error.html" class="side-menu__item">404 - Error</a>
                            </li>
                            <li class="slide">
                                <a href="500-error.html" class="side-menu__item">500 - Error</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->

                    <!-- Start::slide__category -->
                    <li class="slide__category"><span class="category-name">General</span></li>
                    <!-- End::slide__category -->

                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-box side-menu__icon"></i>
                            <span class="side-menu__label">Ui Elements</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1 mega-menu">
                            <li class="slide side-menu__label1">
                                <a href="javascript:void(0)">Ui Elements</a>
                            </li>
                            <li class="slide">
                                <a href="alerts.html" class="side-menu__item">Alerts</a>
                            </li>
                            <li class="slide">
                                <a href="badge.html" class="side-menu__item">Badge</a>
                            </li>
                            <li class="slide">
                                <a href="breadcrumb.html" class="side-menu__item">Breadcrumb</a>
                            </li>
                            <li class="slide">
                                <a href="buttons.html" class="side-menu__item">Buttons</a>
                            </li>
                            <li class="slide">
                                <a href="buttongroup.html" class="side-menu__item">Button Group</a>
                            </li>
                            <li class="slide">
                                <a href="cards.html" class="side-menu__item">Cards</a>
                            </li>
                            <li class="slide">
                                <a href="dropdowns.html" class="side-menu__item">Dropdowns</a>
                            </li>
                            <li class="slide">
                                <a href="images_figures.html" class="side-menu__item">Images & Figures</a>
                            </li>
                            <li class="slide">
                                <a href="listgroup.html" class="side-menu__item">List Group</a>
                            </li>
                            <li class="slide">
                                <a href="navs_tabs.html" class="side-menu__item">Navs & Tabs</a>
                            </li>
                            <li class="slide">
                                <a href="object-fit.html" class="side-menu__item">Object Fit</a>
                            </li>
                            <li class="slide">
                                <a href="pagination.html" class="side-menu__item">Pagination</a>
                            </li>
                            <li class="slide">
                                <a href="popovers.html" class="side-menu__item">Popovers</a>
                            </li>
                            <li class="slide">
                                <a href="progress.html" class="side-menu__item">Progress</a>
                            </li>
                            <li class="slide">
                                <a href="spinners.html" class="side-menu__item">Spinners</a>
                            </li>
                            <li class="slide">
                                <a href="toasts.html" class="side-menu__item">Toasts</a>
                            </li>
                            <li class="slide">
                                <a href="tooltips.html" class="side-menu__item">Tooltips</a>
                            </li>
                            <li class="slide">
                                <a href="typography.html" class="side-menu__item">Typography</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->

                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-medal side-menu__icon"></i>
                            <span class="side-menu__label">Utilities</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1">
                                <a href="javascript:void(0)">Utilities</a>
                            </li>
                            <li class="slide">
                                <a href="avatars.html" class="side-menu__item">Avatars</a>
                            </li>
                            <li class="slide">
                                <a href="borders.html" class="side-menu__item">Borders</a>
                            </li>
                            <li class="slide">
                                <a href="breakpoints.html" class="side-menu__item">Breakpoints</a>
                            </li>
                            <li class="slide">
                                <a href="colors.html" class="side-menu__item">Colors</a>
                            </li>
                            <li class="slide">
                                <a href="columns.html" class="side-menu__item">Columns</a>
                            </li>
                            <li class="slide">
                                <a href="flex.html" class="side-menu__item">Flex</a>
                            </li>
                            <li class="slide">
                                <a href="gutters.html" class="side-menu__item">Gutters</a>
                            </li>
                            <li class="slide">
                                <a href="helpers.html" class="side-menu__item">Helpers</a>
                            </li>
                            <li class="slide">
                                <a href="position.html" class="side-menu__item">Position</a>
                            </li>
                            <li class="slide">
                                <a href="more.html" class="side-menu__item">Additional Content</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->

                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-file side-menu__icon"></i>
                            <span class="side-menu__label">Forms</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1">
                                <a href="javascript:void(0)">Forms</a>
                            </li>
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">Form Elements
                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                <ul class="slide-menu child2">
                                    <li class="slide">
                                        <a href="form_inputs.html" class="side-menu__item">Inputs</a>
                                    </li>
                                    <li class="slide">
                                        <a href="form_check_radios.html" class="side-menu__item">Checks & Radios</a>
                                    </li>
                                    <li class="slide">
                                        <a href="form_input_group.html" class="side-menu__item">Input Group</a>
                                    </li>
                                    <li class="slide">
                                        <a href="form_select.html" class="side-menu__item">Form Select</a>
                                    </li>
                                    <li class="slide">
                                        <a href="form_range.html" class="side-menu__item">Range Slider</a>
                                    </li>
                                    <li class="slide">
                                        <a href="form_input_masks.html" class="side-menu__item">Input Masks</a>
                                    </li>
                                    <li class="slide">
                                        <a href="form_file_uploads.html" class="side-menu__item">File Uploads</a>
                                    </li>
                                    <li class="slide">
                                        <a href="form_dateTime_pickers.html" class="side-menu__item">Date,Time Picker</a>
                                    </li>
                                    <li class="slide">
                                        <a href="form_color_pickers.html" class="side-menu__item">Color Pickers</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a href="floating_labels.html" class="side-menu__item">Floating Labels</a>
                            </li>
                            <li class="slide">
                                <a href="form_layout.html" class="side-menu__item">Form Layouts</a>
                            </li>
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">Form Editors
                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                <ul class="slide-menu child2">
                                    <li class="slide">
                                        <a href="quill_editor.html" class="side-menu__item">Quill Editor</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a href="form_validation.html" class="side-menu__item">Validation</a>
                            </li>
                            <li class="slide">
                                <a href="form_select2.html" class="side-menu__item">Select2</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->

                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-party side-menu__icon"></i>
                            <span class="side-menu__label">Advanced Ui</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1">
                                <a href="javascript:void(0)">Advanced Ui</a>
                            </li>
                            <li class="slide">
                                <a href="accordions_collpase.html" class="side-menu__item">Accordions & Collapse</a>
                            </li>
                            <li class="slide">
                                <a href="carousel.html" class="side-menu__item">Carousel</a>
                            </li>
                            <li class="slide">
                                <a href="draggable-cards.html" class="side-menu__item">Draggable Cards</a>
                            </li>
                            <li class="slide">
                                <a href="modals_closes.html" class="side-menu__item">Modals & Closes</a>
                            </li>
                            <li class="slide">
                                <a href="navbar.html" class="side-menu__item">Navbar</a>
                            </li>
                            <li class="slide">
                                <a href="offcanvas.html" class="side-menu__item">Offcanvas</a>
                            </li>
                            <li class="slide">
                                <a href="placeholders.html" class="side-menu__item">Placeholders</a>
                            </li>
                            <li class="slide">
                                <a href="ratings.html" class="side-menu__item">Ratings</a>
                            </li>
                            <li class="slide">
                                <a href="scrollspy.html" class="side-menu__item">Scrollspy</a>
                            </li>
                            <li class="slide">
                                <a href="swiperjs.html" class="side-menu__item">Swiper JS</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->

                    <!-- Start::slide -->
                    <li class="slide">
                        <a href="widgets.html" class="side-menu__item">
                            <i class="bx bx-gift side-menu__icon"></i>
                            <span class="side-menu__label">Widgets<span class="badge bg-danger-transparent ms-2">Hot</span></span>
                        </a>
                    </li>
                    <!-- End::slide -->

                    <!-- Start::slide__category -->
                    <li class="slide__category"><span class="category-name">Web Apps</span></li>
                    <!-- End::slide__category -->

                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-grid-alt side-menu__icon"></i>
                            <span class="side-menu__label">Apps<span class="badge bg-secondary-transparent ms-2">New</span></span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1">
                                <a href="javascript:void(0)">Apps</a>
                            </li>
                            <li class="slide">
                                <a href="full-calendar.html" class="side-menu__item">Full Calendar</a>
                            </li>
                            <li class="slide">
                                <a href="gallery.html" class="side-menu__item">Gallery</a>
                            </li>
                            <li class="slide">
                                <a href="sweet_alerts.html" class="side-menu__item">Sweet Alerts</a>
                            </li>
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">Projects<span class="badge bg-secondary-transparent ms-2">New</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                <ul class="slide-menu child2">
                                    <li class="slide">
                                        <a href="projects-list.html" class="side-menu__item">Projects List</a>
                                    </li>
                                    <li class="slide">
                                        <a href="projects-overview.html" class="side-menu__item">Project Overview</a>
                                    </li>
                                    <li class="slide">
                                        <a href="projects-create.html" class="side-menu__item">Create Project</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">Jobs<span class="badge bg-secondary-transparent ms-2">New</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                <ul class="slide-menu child2">
                                    <li class="slide">
                                        <a href="job-details.html" class="side-menu__item">Job Details</a>
                                    </li>
                                    <li class="slide">
                                        <a href="job-company-search.html" class="side-menu__item">Search Company</a>
                                    </li>
                                    <li class="slide">
                                        <a href="job-search.html" class="side-menu__item">Search Jobs</a>
                                    </li>
                                    <li class="slide">
                                        <a href="job-post.html" class="side-menu__item">Job Post</a>
                                    </li>
                                    <li class="slide">
                                        <a href="jobs-List.html" class="side-menu__item">Jobs List</a>
                                    </li>
                                    <li class="slide">
                                        <a href="job-candidate-search.html" class="side-menu__item">Search Candidate</a>
                                    </li>
                                    <li class="slide">
                                        <a href="job-candidate-details.html" class="side-menu__item">Candidate Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">NFT<span class="badge bg-secondary-transparent ms-2">New</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                <ul class="slide-menu child2">
                                    <li class="slide">
                                        <a href="nft-marketplace.html" class="side-menu__item">Market Place</a>
                                    </li>
                                    <li class="slide">
                                        <a href="nft-details.html" class="side-menu__item">NFT Details</a>
                                    </li>
                                    <li class="slide">
                                        <a href="nft-create.html" class="side-menu__item">Create NFT</a>
                                    </li>
                                    <li class="slide">
                                        <a href="nft-Wallet-integration.html" class="side-menu__item">Wallet Integration</a>
                                    </li>
                                    <li class="slide">
                                        <a href="nft-live-auction.html" class="side-menu__item">Live Auction</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">CRM<span class="badge bg-secondary-transparent ms-2">New</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                <ul class="slide-menu child2">
                                    <li class="slide">
                                        <a href="crm-contacts.html" class="side-menu__item">Contacts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="crm-companies.html" class="side-menu__item">Companies</a>
                                    </li>
                                    <li class="slide">
                                        <a href="crm-deals.html" class="side-menu__item">Deals</a>
                                    </li>
                                    <li class="slide">
                                        <a href="crm-leads.html" class="side-menu__item">Leads</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">Crypto<span class="badge bg-secondary-transparent ms-2">New</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                <ul class="slide-menu child2">
                                    <li class="slide">
                                        <a href="crypto-transactions.html" class="side-menu__item">Transactions</a>
                                    </li>
                                    <li class="slide">
                                        <a href="crypto-currency-exchange.html" class="side-menu__item">Currency Exchange</a>
                                    </li>
                                    <li class="slide">
                                        <a href="crypto-buy_sell.html" class="side-menu__item">Buy & Sell</a>
                                    </li>
                                    <li class="slide">
                                        <a href="crypto-marketcap.html" class="side-menu__item">Marketcap</a>
                                    </li>
                                    <li class="slide">
                                        <a href="crypto-wallet.html" class="side-menu__item">Wallet</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->

                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-layer side-menu__icon"></i>
                            <span class="side-menu__label">Nested Menu</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1">
                                <a href="javascript:void(0)">Nested Menu</a>
                            </li>
                            <li class="slide">
                                <a href="javascript:void(0);" class="side-menu__item">Nested-1</a>
                            </li>
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">Nested-2
                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                <ul class="slide-menu child2">
                                    <li class="slide">
                                        <a href="javascript:void(0);" class="side-menu__item">Nested-2-1</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Nested-2-2
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child3">
                                            <li class="slide">
                                                <a href="javascript:void(0);" class="side-menu__item">Nested-2-2-1</a>
                                            </li>
                                            <li class="slide">
                                                <a href="javascript:void(0);" class="side-menu__item">Nested-2-2-2</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->

                    <!-- Start::slide__category -->
                    <li class="slide__category"><span class="category-name">Tables & Charts</span></li>
                    <!-- End::slide__category -->

                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-table side-menu__icon"></i>
                            <span class="side-menu__label">Tables<span class="badge bg-success-transparent ms-2">3</span></span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1">
                                <a href="javascript:void(0)">Tables</a>
                            </li>
                            <li class="slide">
                                <a href="tables.html" class="side-menu__item">Tables</a>
                            </li>
                            <li class="slide">
                                <a href="grid-tables.html" class="side-menu__item">Grid JS Tables</a>
                            </li>
                            <li class="slide">
                                <a href="data-tables.html" class="side-menu__item">Data Tables</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->

                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-bar-chart-square side-menu__icon"></i>
                            <span class="side-menu__label">Charts</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1">
                                <a href="javascript:void(0)">Charts</a>
                            </li>
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">Apex Charts
                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                <ul class="slide-menu child2">
                                    <li class="slide">
                                        <a href="apex-line-charts.html" class="side-menu__item">Line Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-area-charts.html" class="side-menu__item">Area Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-column-charts.html" class="side-menu__item">Column Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-bar-charts.html" class="side-menu__item">Bar Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-mixed-charts.html" class="side-menu__item">Mixed Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-rangearea-charts.html" class="side-menu__item">Range Area Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-timeline-charts.html" class="side-menu__item">Timeline Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-candlestick-charts.html" class="side-menu__item">CandleStick
                                            Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-boxplot-charts.html" class="side-menu__item">Boxplot Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-bubble-charts.html" class="side-menu__item">Bubble Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-scatter-charts.html" class="side-menu__item">Scatter Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-heatmap-charts.html" class="side-menu__item">Heatmap Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-treemap-charts.html" class="side-menu__item">Treemap Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-pie-charts.html" class="side-menu__item">Pie Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-radialbar-charts.html" class="side-menu__item">Radialbar Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-radar-charts.html" class="side-menu__item">Radar Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-polararea-charts.html" class="side-menu__item">Polararea Charts</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a href="chartjs-charts.html" class="side-menu__item">Chartjs Charts</a>
                            </li>
                            <li class="slide">
                                <a href="echarts.html" class="side-menu__item">Echart Charts</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->

                    <!-- Start::slide__category -->
                    <li class="slide__category"><span class="category-name">Maps & Icons</span></li>
                    <!-- End::slide__category -->

                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-map side-menu__icon"></i>
                            <span class="side-menu__label">Maps</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1">
                                <a href="javascript:void(0)">Maps</a>
                            </li>
                            <li class="slide">
                                <a href="google-maps.html" class="side-menu__item">Google Maps</a>
                            </li>
                            <li class="slide">
                                <a href="leaflet-maps.html" class="side-menu__item">Leaflet Maps</a>
                            </li>
                            <li class="slide">
                                <a href="vector-maps.html" class="side-menu__item">Vector Maps</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->

                    <!-- Start::slide -->
                    <li class="slide">
                        <a href="icons.html" class="side-menu__item">
                            <i class="bx bx-store-alt side-menu__icon"></i>
                            <span class="side-menu__label">Icons</span>
                        </a>
                    </li>
                    <!-- End::slide -->
                </ul>
                <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                    </svg></div>
            </nav>
            <!-- End::nav -->

        </div>
        <!-- End::main-sidebar -->

    </aside>
    <!-- End::app-sidebar -->

    <!-- Start::app-content -->
    <div class="main-content app-content">
        <div class="container-fluid">

            <!-- Start::page-header -->

            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <div>
                    <p class="fw-semibold fs-18 mb-0">Welcome back, Json Taylor !</p>
                    <span class="fs-semibold text-muted">Track your sales activity, leads and deals here.</span>
                </div>
                <div class="btn-list mt-md-0 mt-2">
                    <button type="button" class="btn btn-primary btn-wave">
                        <i class="ri-filter-3-fill me-2 align-middle d-inline-block"></i>Filters
                    </button>
                    <button type="button" class="btn btn-outline-secondary btn-wave">
                        <i class="ri-upload-cloud-line me-2 align-middle d-inline-block"></i>Export
                    </button>
                </div>
            </div>

            <!-- End::page-header -->

            <!-- Start::row-1 -->
            <div class="row">
                <div class="col-xxl-9 col-xl-12">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card custom-card crm-highlight-card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <div class="fw-semibold fs-18 text-fixed-white mb-2">Your target is incomplete</div>
                                                    <span class="d-block fs-12 text-fixed-white"><span class="op-7">You have completed</span> <span class="fw-semibold text-warning">48%</span> <span class="op-7">of the given target, you can also check your status</span>.</span>
                                                    <span class="d-block fw-semibold mt-1"><a class="text-fixed-white" href="javascript:void(0);"><u>Click here</u></a></span>
                                                </div>
                                                <div>
                                                    <div id="crm-main"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header  justify-content-between">
                                        <div class="card-title">
                                            Top Deals
                                        </div>
                                        <div class="dropdown">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Month</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-unstyled crm-top-deals mb-0">
                                            <li>
                                                <div class="d-flex align-items-top flex-wrap">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="./images/faces/10.jpg" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <p class="fw-semibold mb-0">Michael Jordan</p>
                                                        <span class="text-muted fs-12">michael.jordan@example.com</span>
                                                    </div>
                                                    <div class="fw-semibold fs-15">$2,893</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-top flex-wrap">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-sm avatar-rounded bg-warning-transparent fw-semibold">
                                                            EK
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <p class="fw-semibold mb-0">Emigo Kiaren</p>
                                                        <span class="text-muted fs-12">emigo.kiaren@gmail.com</span>
                                                    </div>
                                                    <div class="fw-semibold fs-15">$4,289</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-top flex-wrap">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="./images/faces/12.jpg" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <p class="fw-semibold mb-0">Randy Origoan</p>
                                                        <span class="text-muted fs-12">randy.origoan@gmail.com</span>
                                                    </div>
                                                    <div class="fw-semibold fs-15">$6,347</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-top flex-wrap">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-sm avatar-rounded bg-success-transparent fw-semibold">
                                                            GP
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <p class="fw-semibold mb-0">George Pieterson</p>
                                                        <span class="text-muted fs-12">george.pieterson@gmail.com</span>
                                                    </div>
                                                    <div class="fw-semibold fs-15">$3,894</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-top flex-wrap">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-sm avatar-rounded bg-primary-transparent fw-semibold">
                                                            KA
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <p class="fw-semibold mb-0">Kiara Advain</p>
                                                        <span class="text-muted fs-12">kiaraadvain214@gmail.com</span>
                                                    </div>
                                                    <div class="fw-semibold fs-15">$2,679</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">Profit Earned</div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="p-2 fs-12 text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                View All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body py-0 ps-0">
                                        <div id="crm-profits-earned"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="row">
                                <div class="col-xxl-6 col-lg-6 col-md-6">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex align-items-top justify-content-between">
                                                <div>
                                                    <span class="avatar avatar-md avatar-rounded bg-primary">
                                                        <i class="ti ti-users fs-16"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-fill ms-3">
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                        <div>
                                                            <p class="text-muted mb-0">Total Customers</p>
                                                            <h4 class="fw-semibold mt-1">1,02,890</h4>
                                                        </div>
                                                        <div id="crm-total-customers"></div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                                        <div>
                                                            <a class="text-primary" href="javascript:void(0);">View All<i class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                                        </div>
                                                        <div class="text-end">
                                                            <p class="mb-0 text-success fw-semibold">+40%</p>
                                                            <span class="text-muted op-7 fs-11">this month</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-md-6">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex align-items-top justify-content-between">
                                                <div>
                                                    <span class="avatar avatar-md avatar-rounded bg-secondary">
                                                        <i class="ti ti-wallet fs-16"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-fill ms-3">
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                        <div>
                                                            <p class="text-muted mb-0">Total Revenue</p>
                                                            <h4 class="fw-semibold mt-1">$56,562</h4>
                                                        </div>
                                                        <div id="crm-total-revenue"></div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                                        <div>
                                                            <a class="text-secondary" href="javascript:void(0);">View All<i class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                                        </div>
                                                        <div class="text-end">
                                                            <p class="mb-0 text-success fw-semibold">+25%</p>
                                                            <span class="text-muted op-7 fs-11">this month</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-md-6">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex align-items-top justify-content-between">
                                                <div>
                                                    <span class="avatar avatar-md avatar-rounded bg-success">
                                                        <i class="ti ti-wave-square fs-16"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-fill ms-3">
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                        <div>
                                                            <p class="text-muted mb-0">Conversion Ratio</p>
                                                            <h4 class="fw-semibold mt-1">12.08%</h4>
                                                        </div>
                                                        <div id="crm-conversion-ratio"></div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                                        <div>
                                                            <a class="text-success" href="javascript:void(0);">View All<i class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                                        </div>
                                                        <div class="text-end">
                                                            <p class="mb-0 text-danger fw-semibold">-12%</p>
                                                            <span class="text-muted op-7 fs-11">this month</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-md-6">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex align-items-top justify-content-between">
                                                <div>
                                                    <span class="avatar avatar-md avatar-rounded bg-warning">
                                                        <i class="ti ti-briefcase fs-16"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-fill ms-3">
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                        <div>
                                                            <p class="text-muted mb-0">Total Deals</p>
                                                            <h4 class="fw-semibold mt-1">2,543</h4>
                                                        </div>
                                                        <div id="crm-total-deals"></div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                                        <div>
                                                            <a class="text-warning" href="javascript:void(0);">View All<i class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                                        </div>
                                                        <div class="text-end">
                                                            <p class="mb-0 text-success fw-semibold">+19%</p>
                                                            <span class="text-muted op-7 fs-11">this month</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Revenue Analytics
                                            </div>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="p-2 fs-12 text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                    View All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                                </a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div id="crm-revenue-analytics"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Deals Statistics
                                    </div>
                                    <div class="d-flex flex-wrap gap-2">
                                        <div>
                                            <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">New</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Popular</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Relevant</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap table-hover border table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="row" class="ps-4"><input class="form-check-input" type="checkbox" id="checkboxNoLabel1" value="" aria-label="..."></th>
                                                    <th scope="col">Sales Rep</th>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Mail</th>
                                                    <th scope="col">Location</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row" class="ps-4"><input class="form-check-input" type="checkbox" id="checkboxNoLabel2" value="" aria-label="..."></th>
                                                    <td>
                                                        <div class="d-flex align-items-center fw-semibold">
                                                            <span class="avatar avatar-sm me-2 avatar-rounded">
                                                                <img src="./images/faces/4.jpg" alt="img">
                                                            </span>Mayor Kelly
                                                        </div>
                                                    </td>
                                                    <td>Manufacture</td>
                                                    <td>mayorkelly@gmail.com</td>
                                                    <td>
                                                        <span class="badge bg-info-transparent">Germany</span>
                                                    </td>
                                                    <td>Sep 15 - Oct 12, 2023</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-success-light"><i class="ri-download-2-line"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="ps-4"><input class="form-check-input" type="checkbox" id="checkboxNoLabel13" value="" aria-label="..." checked></th>
                                                    <td>
                                                        <div class="d-flex align-items-center fw-semibold">
                                                            <span class="avatar avatar-sm me-2 avatar-rounded">
                                                                <img src="./images/faces/15.jpg" alt="img">
                                                            </span>Andrew Garfield
                                                        </div>
                                                    </td>
                                                    <td>Development</td>
                                                    <td>andrewgarfield@gmail.com</td>
                                                    <td>
                                                        <span class="badge bg-primary-transparent">Canada</span>
                                                    </td>
                                                    <td>Apr 10 - Dec 12, 2023</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i class="ri-download-2-line"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="ps-4"><input class="form-check-input" type="checkbox" id="checkboxNoLabel4" value="" aria-label="..."></th>
                                                    <td>
                                                        <div class="d-flex align-items-center fw-semibold">
                                                            <span class="avatar avatar-sm me-2 avatar-rounded">
                                                                <img src="./images/faces/11.jpg" alt="img">
                                                            </span>Simon Cowel
                                                        </div>
                                                    </td>
                                                    <td>Service</td>
                                                    <td>simoncowel234@gmail.com</td>
                                                    <td>
                                                        <span class="badge bg-danger-transparent">Europe</span>
                                                    </td>
                                                    <td>Sep 15 - Oct 12, 2023</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i class="ri-download-2-line"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="ps-4"><input class="form-check-input" type="checkbox" id="checkboxNoLabel5" value="" aria-label="..." checked></th>
                                                    <td>
                                                        <div class="d-flex align-items-center fw-semibold">
                                                            <span class="avatar avatar-sm me-2 avatar-rounded">
                                                                <img src="./images/faces/8.jpg" alt="img">
                                                            </span>Mirinda Hers
                                                        </div>
                                                    </td>
                                                    <td>Marketing</td>
                                                    <td>mirindahers@gmail.com</td>
                                                    <td>
                                                        <span class="badge bg-warning-transparent">USA</span>
                                                    </td>
                                                    <td>Apr 14 - Dec 14, 2023</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i class="ri-download-2-line"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="ps-4"><input class="form-check-input" type="checkbox" id="checkboxNoLabel3" value="" aria-label="..." checked></th>
                                                    <td>
                                                        <div class="d-flex align-items-center fw-semibold">
                                                            <span class="avatar avatar-sm me-2 avatar-rounded">
                                                                <img src="./images/faces/9.jpg" alt="img">
                                                            </span>Jacob Smith
                                                        </div>
                                                    </td>
                                                    <td>Social Plataform</td>
                                                    <td>jacobsmith@gmail.com</td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">Singapore</span>
                                                    </td>
                                                    <td>Feb 25 - Nov 25, 2023</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i class="ri-download-2-line"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            Showing 5 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i>
                                        </div>
                                        <div class="ms-auto">
                                            <nav aria-label="Page navigation" class="pagination-style-4">
                                                <ul class="pagination mb-0">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="javascript:void(0);">
                                                            Prev
                                                        </a>
                                                    </li>
                                                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link text-primary" href="javascript:void(0);">
                                                            next
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-12">
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12">
                            <div class="row">
                                <div class="col-xl-12 col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Leads By Source
                                            </div>
                                            <div class="dropdown">
                                                <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Month</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body p-0 overflow-hidden">
                                            <div class="leads-source-chart d-flex align-items-center justify-content-center">
                                                <canvas id="leads-source" class="chartjs-chart w-100 p-4"></canvas>
                                                <div class="lead-source-value">
                                                    <span class="d-block fs-14">Total</span>
                                                    <span class="d-block fs-25 fw-bold">4,145</span>
                                                </div>
                                            </div>
                                            <div class="row row-cols-12 border-top border-block-start-dashed">
                                                <div class="col p-0">
                                                    <div class="ps-4 py-3 pe-3 text-center border-end border-inline-end-dashed">
                                                        <span class="text-muted fs-12 mb-1 crm-lead-legend mobile d-inline-block">Mobile
                                                        </span>
                                                        <div><span class="fs-16 fw-semibold">1,624</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col p-0">
                                                    <div class="p-3 text-center border-end border-inline-end-dashed">
                                                        <span class="text-muted fs-12 mb-1 crm-lead-legend desktop d-inline-block">Desktop
                                                        </span>
                                                        <div><span class="fs-16 fw-semibold">1,267</span></div>
                                                    </div>
                                                </div>
                                                <div class="col p-0">
                                                    <div class="p-3 text-center border-end border-inline-end-dashed">
                                                        <span class="text-muted fs-12 mb-1 crm-lead-legend laptop d-inline-block">Laptop
                                                        </span>
                                                        <div><span class="fs-16 fw-semibold">1,153</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col p-0">
                                                    <div class="p-3 text-center">
                                                        <span class="text-muted fs-12 mb-1 crm-lead-legend tablet d-inline-block">Tablet
                                                        </span>
                                                        <div><span class="fs-16 fw-semibold">679</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-12 col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Deals Status
                                            </div>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="p-2 fs-12 text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                    View All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                                </a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <h4 class="fw-bold mb-0">4,289</h4>
                                                <div class="ms-2">
                                                    <span class="badge bg-success-transparent">1.02<i class="ri-arrow-up-s-fill align-mmiddle ms-1"></i></span>
                                                    <span class="text-muted ms-1">compared to last week</span>
                                                </div>
                                            </div>
                                            <div class="progress-stacked progress-animate progress-xs mb-4">
                                                <div class="progress-bar" role="progressbar" style="width: 21%" aria-valuenow="21" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 26%" aria-valuenow="26" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 18%" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <ul class="list-unstyled mb-0 pt-2 crm-deals-status">
                                                <li class="primary">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div>Successful Deals</div>
                                                        <div class="fs-12 text-muted">987 deals</div>
                                                    </div>
                                                </li>
                                                <li class="info">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div>Pending Deals</div>
                                                        <div class="fs-12 text-muted">1,073 deals</div>
                                                    </div>
                                                </li>
                                                <li class="warning">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div>Rejected Deals</div>
                                                        <div class="fs-12 text-muted">1,674 deals</div>
                                                    </div>
                                                </li>
                                                <li class="success">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div>Upcoming Deals</div>
                                                        <div class="fs-12 text-muted">921 deals</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-12 col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Recent Activity
                                            </div>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="p-2 fs-12 text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                    View All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                                </a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div>
                                                <ul class="list-unstyled mb-0 crm-recent-activity">
                                                    <li class="crm-recent-activity-content">
                                                        <div class="d-flex align-items-top">
                                                            <div class="me-3">
                                                                <span class="avatar avatar-xs bg-primary-transparent avatar-rounded">
                                                                    <i class="bi bi-circle-fill fs-8"></i>
                                                                </span>
                                                            </div>
                                                            <div class="crm-timeline-content">
                                                                <span class="fw-semibold">Update of calendar events &amp;</span><span><a href="javascript:void(0);" class="text-primary fw-semibold"> Added new events in next week.</a></span>
                                                            </div>
                                                            <div class="flex-fill text-end">
                                                                <span class="d-block text-muted fs-11 op-7">4:45PM</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="crm-recent-activity-content">
                                                        <div class="d-flex align-items-top">
                                                            <div class="me-3">
                                                                <span class="avatar avatar-xs bg-secondary-transparent avatar-rounded">
                                                                    <i class="bi bi-circle-fill fs-8"></i>
                                                                </span>
                                                            </div>
                                                            <div class="crm-timeline-content">
                                                                <span>New theme for <span class="fw-semibold">Spruko Website</span> completed</span>
                                                                <span class="d-block fs-12 text-muted">Lorem ipsum, dolor sit amet.</span>
                                                            </div>
                                                            <div class="flex-fill text-end">
                                                                <span class="d-block text-muted fs-11 op-7">3 hrs</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="crm-recent-activity-content">
                                                        <div class="d-flex align-items-top">
                                                            <div class="me-3">
                                                                <span class="avatar avatar-xs bg-success-transparent avatar-rounded">
                                                                    <i class="bi bi-circle-fill fs-8"></i>
                                                                </span>
                                                            </div>
                                                            <div class="crm-timeline-content">
                                                                <span>Created a <span class="text-success fw-semibold">New Task</span> today <span class="avatar avatar-xs bg-purple-transparent avatar-rounded ms-1"><i class="ri-add-fill text-purple fs-12"></i></span></span>
                                                            </div>
                                                            <div class="flex-fill text-end">
                                                                <span class="d-block text-muted fs-11 op-7">22 hrs</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="crm-recent-activity-content">
                                                        <div class="d-flex align-items-top">
                                                            <div class="me-3">
                                                                <span class="avatar avatar-xs bg-pink-transparent avatar-rounded">
                                                                    <i class="bi bi-circle-fill fs-8"></i>
                                                                </span>
                                                            </div>
                                                            <div class="crm-timeline-content">
                                                                <span>New member <span class="badge bg-pink-transparent">@andreas gurrero</span> added today to AI Summit.</span>
                                                            </div>
                                                            <div class="flex-fill text-end">
                                                                <span class="d-block text-muted fs-11 op-7">Today</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="crm-recent-activity-content">
                                                        <div class="d-flex align-items-top">
                                                            <div class="me-3">
                                                                <span class="avatar avatar-xs bg-warning-transparent avatar-rounded">
                                                                    <i class="bi bi-circle-fill fs-8"></i>
                                                                </span>
                                                            </div>
                                                            <div class="crm-timeline-content">
                                                                <span>32 New people joined summit.</span>
                                                            </div>
                                                            <div class="flex-fill text-end">
                                                                <span class="d-block text-muted fs-11 op-7">22 hrs</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="crm-recent-activity-content">
                                                        <div class="d-flex align-items-top">
                                                            <div class="me-3">
                                                                <span class="avatar avatar-xs bg-info-transparent avatar-rounded">
                                                                    <i class="bi bi-circle-fill fs-8"></i>
                                                                </span>
                                                            </div>
                                                            <div class="crm-timeline-content">
                                                                <span>Neon Tarly added <span class="text-info fw-semibold">Robert Bright</span> to AI summit project.</span>
                                                            </div>
                                                            <div class="flex-fill text-end">
                                                                <span class="d-block text-muted fs-11 op-7">12 hrs</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="crm-recent-activity-content">
                                                        <div class="d-flex align-items-top">
                                                            <div class="me-3">
                                                                <span class="avatar avatar-xs bg-dark-transparent avatar-rounded">
                                                                    <i class="bi bi-circle-fill fs-8"></i>
                                                                </span>
                                                            </div>
                                                            <div class="crm-timeline-content">
                                                                <span>Replied to new support request <i class="ri-checkbox-circle-line text-success fs-16 align-middle"></i></span>
                                                            </div>
                                                            <div class="flex-fill text-end">
                                                                <span class="d-block text-muted fs-11 op-7">4 hrs</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="crm-recent-activity-content">
                                                        <div class="d-flex align-items-top">
                                                            <div class="me-3">
                                                                <span class="avatar avatar-xs bg-purple-transparent avatar-rounded">
                                                                    <i class="bi bi-circle-fill fs-8"></i>
                                                                </span>
                                                            </div>
                                                            <div class="crm-timeline-content">
                                                                <span>Completed documentation of <a href="javascript:void(0);" class="text-purple text-decoration-underline fw-semibold">AI Summit.</a></span>
                                                            </div>
                                                            <div class="flex-fill text-end">
                                                                <span class="d-block text-muted fs-11 op-7">4 hrs</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End::row-1 -->

        </div>
    </div>
    <!-- End::app-content -->

    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="input-group">
                        <a href="javascript:void(0);" class="input-group-text" id="Search-Grid"><i class="fe fe-search header-link-icon fs-18"></i></a>
                        <input type="search" class="form-control border-0 px-2" placeholder="Search" aria-label="Username">
                        <a href="javascript:void(0);" class="input-group-text" id="voice-search"><i class="fe fe-mic header-link-icon"></i></a>
                        <a href="javascript:void(0);" class="btn btn-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <div class="mt-4">
                        <p class="font-weight-semibold text-muted mb-2">Are You Looking For...</p>
                        <span class="search-tags"><i class="fe fe-user me-2"></i>People<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                        <span class="search-tags"><i class="fe fe-file-text me-2"></i>Pages<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                        <span class="search-tags"><i class="fe fe-align-left me-2"></i>Articles<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                        <span class="search-tags"><i class="fe fe-server me-2"></i>Tags<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                    </div>
                    <div class="my-4">
                        <p class="font-weight-semibold text-muted mb-2">Recent Search :</p>
                        <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert">
                            <a href="notifications.html"><span>Notifications</span></a>
                            <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                        </div>
                        <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert">
                            <a href="alerts.html"><span>Alerts</span></a>
                            <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                        </div>
                        <div class="p-2 border br-5 d-flex align-items-center text-muted mb-0 alert">
                            <a href="mail.html"><span>Mail</span></a>
                            <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-group ms-auto">
                        <button class="btn btn-sm btn-primary-light">Search</button>
                        <button class="btn btn-sm btn-primary">Clear Recents</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Start -->
    <footer class="footer mt-auto py-3 bg-white text-center">
        <div class="container">
            <span class="text-muted"> Copyright © <span id="year"></span> <a href="javascript:void(0);" class="text-dark fw-semibold">Ynex</a>.
                Designed with <span class="bi bi-heart-fill text-danger"></span> by <a href="javascript:void(0);">
                    <span class="fw-semibold text-primary text-decoration-underline">Spruko</span>
                </a> All
                rights
                reserved
            </span>
        </div>
    </footer>
    <!-- Footer End -->

</div>

<!-- OVERLAY -->
<div id="overlay" class="overlay">
    <div class="overlay_container">
        <i class="fa fa-spinner" aria-hidden="true"></i>
        <p>Cerrando session</p>
    </div>
</div>


<!-- Scroll To Top -->
<div class="scrollToTop">
    <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
</div>
<div id="responsive-overlay"></div>
<!-- Scroll To Top -->

<!-- Popper JS -->
<script src="./libs/@popperjs/core/umd/popper.min.js"></script>

<!-- Bootstrap JS -->
<script src="./libs/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Defaultmenu JS -->
<script src="./js/defaultmenu.min.js"></script>

<!-- Node Waves JS-->
<script src="./libs/node-waves/waves.min.js"></script>

<!-- Sticky JS -->
<script src="./js/sticky.js"></script>

<!-- Simplebar JS -->
<script src="./libs/simplebar/simplebar.min.js"></script>
<script src="./js/simplebar.js"></script>

<!-- Color Picker JS -->
<script src="./libs/@simonwep/pickr/pickr.es5.min.js"></script>



<!-- JSVector Maps JS -->
<script src="./libs/jsvectormap/js/jsvectormap.min.js"></script>

<!-- JSVector Maps MapsJS -->
<script src="./libs/jsvectormap/maps/world-merc.js"></script>

<!-- Apex Charts JS -->
<script src="./libs/apexcharts/apexcharts.min.js"></script>

<!-- Chartjs Chart JS -->
<script src="./libs/chart.js/chart.min.js"></script>

<!-- CRM-Dashboard -->
<script src="./js/crm-dashboard.js"></script>


<!-- Custom-Switcher JS -->
<script src="./js/custom-switcher.min.js"></script>

<!-- Custom JS -->
<script src="./js/custom.js"></script>

<!-- Script Principal -->
<script src="<?php echo url(); ?>js/pages/principal.js?v=<?php echo $v; ?>"></script>