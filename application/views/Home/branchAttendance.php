<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Employee Profile</title>
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
        <!-- app-sidebar-start -->
        <?php include 'includes/header.php'; ?>
        <div class="app__offcanvas-overlay"></div>
        <!-- app-sidebar-end -->
        <!-- App sidebar area end -->

        <div class="page__body-wrapper">
            <!-- App header area start -->
            <?php include 'includes/sidebar.php'; ?>
            <div class="body__overlay"></div>
            <!-- App header area end -->

            <!-- App side area start -->
            <div class="app__slide-wrapper">
                <div class="breadcrumb__area">
                    <div class="breadcrumb__wrapper mb-25">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Branch Attendance</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="card__wrapper">
                            <div class="d-flex align-items-center gap-sm">
                                <div class="card__icon">
                                    <span><i class="fa-sharp fa-regular fa-user"></i></span>
                                </div>
                                <div class="card__title-wrap">
                                    <h6 class="card__sub-title mb-10">Total Employee</h6>
                                    <div class="card__content">
                                        <h3 class="card__title mb-5"><?= $totalbranch_emp ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="card__wrapper">
                            <div class="d-flex align-items-center gap-sm">
                                <div class="card__icon">
                                    <span><i class="fa-sharp fa-regular fa-user"></i></span>
                                </div>
                                <div class="card__title-wrap">
                                    <h6 class="card__sub-title mb-10">Total Present</h6>
                                    <div class="card__content">
                                        <h3 class="card__title mb-5"><?= $totalbranch_present ?>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="card__wrapper">
                            <div class="d-flex align-items-center gap-sm">
                                <div class="card__icon">
                                    <span><i class="fa-sharp fa-regular fa-user"></i></span>
                                </div>
                                <div class="card__title-wrap">
                                    <h6 class="card__sub-title mb-10">Total Half Day</h6>
                                    <div class="card__content">
                                        <h3 class="card__title mb-5"><?= $totalbranch_halfday ?>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="card__wrapper">
                            <div class="d-flex align-items-center gap-sm">
                                <div class="card__icon">
                                    <span><i class="fa-sharp fa-regular fa-user"></i></span>
                                </div>
                                <div class="card__title-wrap">
                                    <h6 class="card__sub-title mb-10">Total Absent</h6>
                                    <div class="card__content">
                                        <h3 class="card__title mb-5"><?= $totalbranch_absent ?>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-12">
                        <div class="card__wrapper">
                            <div class="row g-20 gy-20 mb-20 justify-content-between align-items-end">
                                <div class="col-md-12">
                                    <div class="d-flex align-items-center">
                                        <h6 class="">Note:</h6>
                                        <div class="attendant__info-wrapper">
                                            <div class="attendant__info-icon">
                                                <i class="fa fa-calendar-week text-secondary"></i>
                                                <span class="attachment__info-arrow"><i
                                                        class="fa fa-arrow-right text-lightest"></i></span>
                                                <h6 class="text-dark small">Day Off</h6>
                                            </div>
                                            <div class="attendant__info-icon">
                                                <i class="fa fa-check text-success"></i>
                                                <span class="attachment__info-arrow"><i
                                                        class="fa fa-arrow-right text-lightest"></i></span>
                                                <h6 class="text-dark small">Present</h6>
                                            </div>
                                            <div class="attendant__info-icon">
                                                <i class="fa fa-star-half-alt text-info"></i>
                                                <span class="attachment__info-arrow"><i
                                                        class="fa fa-arrow-right text-lightest"></i></span>
                                                <h6 class="text-dark small">Half Day</h6>
                                            </div>
                                            <div class="attendant__info-icon">
                                                <i class="fa fa-times text-danger"></i>
                                                <span class="attachment__info-arrow"><i
                                                        class="fa fa-arrow-right text-lightest"></i></span>
                                                <h6 class="text-dark small">Absent</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Employee</th>
                                                    <th>1</th>
                                                    <th>2</th>
                                                    <th>3</th>
                                                    <th>4</th>
                                                    <th>5</th>
                                                    <th>6</th>
                                                    <th>7</th>
                                                    <th>8</th>
                                                    <th>9</th>
                                                    <th>10</th>
                                                    <th>11</th>
                                                    <th>12</th>
                                                    <th>13</th>
                                                    <th>14</th>
                                                    <th>15</th>
                                                    <th>16</th>
                                                    <th>17</th>
                                                    <th>18</th>
                                                    <th>19</th>
                                                    <th>20</th>
                                                    <th>22</th>
                                                    <th>23</th>
                                                    <th>24</th>
                                                    <th>25</th>
                                                    <th>26</th>
                                                    <th>27</th>
                                                    <th>28</th>
                                                    <th>29</th>
                                                    <th>30</th>
                                                    <th>31</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table__body">
                                                <?php foreach ($users as $item) {
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <span class="table-avatar">
                                                                <a href="#"><?= $item['name'] ?></a>
                                                            </span>
                                                        </td>
                                                        <td><a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#attendance_info"><i
                                                                    class="fa-solid fa-check text-success"></i></a></td>
                                                        <td><a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#attendance_info"><i
                                                                    class="fa-solid fa-check text-success"></i></a></td>
                                                        <td><a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#attendance_info"><i
                                                                    class="fa-solid fa-check text-success"></i></a></td>
                                                        <td><i class="fa fa-exclamation-circle text-warning"></i></td>
                                                        <td><a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#attendance_info"><i
                                                                    class="fa-solid fa-check text-success"></i></a></td>
                                                        <td><a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#attendance_info"><i
                                                                    class="fa-solid fa-check text-success"></i></a></td>
                                                        <td><i class="fa fa-close text-danger"></i> </td>
                                                        <td><a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#attendance_info"><i
                                                                    class="fa-solid fa-check text-success"></i></a></td>
                                                        <td><a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#attendance_info"><i
                                                                    class="fa-solid fa-check text-success"></i></a></td>
                                                        <td><i class="fa fa-star-half-alt text-info"></i> </td>
                                                        <td><i class="fa fa-calendar-week text-secondary"></i> </td>
                                                        <td><i class="fa fa-star text-theme"></i> </td>
                                                        <td><a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#attendance_info"><i
                                                                    class="fa-solid fa-check text-success"></i></a></td>
                                                        <td><a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#attendance_info"><i
                                                                    class="fa-solid fa-check text-success"></i></a></td>
                                                        <td><a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#attendance_info"><i
                                                                    class="fa-solid fa-check text-success"></i></a></td>
                                                        <td><a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#attendance_info"><i
                                                                    class="fa-solid fa-check text-success"></i></a></td>
                                                        <td><a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#attendance_info"><i
                                                                    class="fa-solid fa-check text-success"></i></a></td>
                                                        <td><i class="fa fa-plane-departure text-link"></i> </td>
                                                        <td><a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#attendance_info"><i
                                                                    class="fa-solid fa-check text-success"></i></a></td>
                                                        <td><a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#attendance_info"><i
                                                                    class="fa-solid fa-check text-success"></i></a></td>
                                                        <td><a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#attendance_info"><i
                                                                    class="fa-solid fa-check text-success"></i></a></td>
                                                        <td><a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#attendance_info"><i
                                                                    class="fa-solid fa-check text-success"></i></a></td>
                                                        <td><a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#attendance_info"><i
                                                                    class="fa-solid fa-check text-success"></i></a></td>
                                                        <td><a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#attendance_info"><i
                                                                    class="fa-solid fa-check text-success"></i></a></td>
                                                        <td><a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#attendance_info"><i
                                                                    class="fa-solid fa-check text-success"></i></a></td>
                                                        <td><a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#attendance_info"><i
                                                                    class="fa-solid fa-check text-success"></i></a></td>
                                                        <td><a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#attendance_info"><i
                                                                    class="fa-solid fa-check text-success"></i></a></td>
                                                        <td><a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#attendance_info"><i
                                                                    class="fa-solid fa-check text-success"></i></a></td>
                                                        <td><a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#attendance_info"><i
                                                                    class="fa-solid fa-check text-success"></i></a></td>
                                                        <td><a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#attendance_info"><i
                                                                    class="fa-solid fa-check text-success"></i></a></td>
                                                    </tr>
                                                    <?php
                                                } ?>




                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- App side area end -->

            <!-- footer area start -->
            <?php include 'includes/footer.php'; ?>
            <!-- footer area end -->
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
    <?php include 'includes/footer_link.php'; ?>

</body>

</html>
<?php include 'includes/modal.php'; ?>