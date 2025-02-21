<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Employee</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-style-mode" content="1">
    <!-- Place favicon.ico in the root directory -->
    <?php include 'includes/head.php'; ?>
</head>

<body class="body-area">
    <!-- Dashboard area start -->
    <div class="page__full-wrapper">
        <!-- App sidebar area start -->
        <?php include 'includes/sidebar.php'; ?>
        <div class="app__offcanvas-overlay"></div>
        <!-- app-sidebar-end -->
        <!-- App sidebar area end -->

        <div class="page__body-wrapper">
            <!-- App header area start -->
            <?php include 'includes/header.php'; ?>
            <div class="body__overlay"></div>
            <!-- App header area end -->

            <!-- App side area start -->
            <div class="app__slide-wrapper">
                <div class="breadcrumb__area">
                    <div class="breadcrumb__wrapper mb-25">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Employee</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row g-20 mb-20 justify-content-between align-items-end">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                        <div class="card__wrapper">
                            <div class="d-flex align-items-center justify-content-end gap-15">
                                <div>
                                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal"
                                        data-bs-target="#addNewEmployeeexcel">Upload</button>
                                </div>
                                <div>
                                    <a href="<?= base_url('Admin/addempmaually') ?>" type="button"
                                        class="btn btn-primary w-100">
                                        Add Employee Manually</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                        <div class="card__wrapper">
                            <div class="employee__wrapper text-center">
                                <div class="employee__thumb mb-15">
                                    <a href="employee-profile.html"><img
                                            src="<?php echo base_url('assets/Home/images/avatar/avatar16.png'); ?>"
                                            alt="image"></a>
                                </div>
                                <div class="employee__content">
                                    <div class="employee__meta mb-15">
                                        <h4 class="mb-8"><a href="employee-profile.html">Naira Muskan</a></h4>
                                        <p>Chief Executive Officer</p>
                                    </div>
                                    <div class="common-social mb-20">
                                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                        <a href="#"><i class="fa-thin fa-globe"></i></a>
                                    </div>
                                    <div class="employee__btn">
                                        <div class="d-flex align-items-center justify-content-center gap-15">
                                            <a class="btn btn-outline-theme-border" href="tel:+15551234567">Call</a>
                                            <a class="btn btn-outline-theme-border"
                                                href="employee-profile.html">View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- App side area end -->

            <?php
            include 'includes/footer.php';
            ?>

        </div>
    </div>
    <!-- Dashboard area end -->



    <!-- Back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>
    <!-- Back to top end -->

    <!-- JS here -->
    <?php
    include 'includes/footer_link.php';
    ?>

</body>

</html>

<!-- Modal -->
<?php include 'includes/modal.php'; ?>