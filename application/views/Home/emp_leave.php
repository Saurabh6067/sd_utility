<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Employee Leave</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-style-mode" content="1">
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
                                <li class="breadcrumb-item active" aria-current="page">Leave</li>
                            </ol>
                        </nav>
                        <div class="breadcrumb__btn">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#requestforleave">Request for Leave</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="card__wrapper">
                            <div class="d-flex align-items-center gap-sm">
                                <div class="card__icon">
                                    <span><i class="fa-light fa-ban"></i></span>
                                </div>
                                <div class="card__title-wrap">
                                    <h6 class="card__sub-title mb-10">Total Leave</h6>
                                    <div class="d-flex flex-wrap align-items-end gap-10">
                                        <h3 class="card__title">15</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="card__wrapper">
                            <div class="d-flex align-items-center gap-sm">
                                <div class="card__icon">
                                    <span><i class="fa-light fa-badge-check"></i></span>
                                </div>
                                <div class="card__title-wrap">
                                    <h6 class="card__sub-title mb-10">Approve</h6>
                                    <div class="d-flex flex-wrap align-items-end gap-10">
                                        <h3 class="card__title">12</h3>
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
                                    <h6 class="card__sub-title mb-10">Rejected </h6>
                                    <div class="d-flex flex-wrap align-items-end gap-10">
                                        <h3 class="card__title">2</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="card__wrapper">
                            <div class="d-flex align-items-center gap-sm">
                                <div class="card__icon">
                                    <span><i class="fa-sharp fa-regular fa-house-person-leave"></i></span>
                                </div>
                                <div class="card__title-wrap">
                                    <h6 class="card__sub-title mb-10">Pending</h6>
                                    <div class="d-flex flex-wrap align-items-end gap-10">
                                        <h3 class="card__title">5</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-12">
                        <div class="card__wrapper">
                            <div class="table__wrapper table-responsive">
                                <table class="table mb-20" id="dataTableDefualt">
                                    <thead>
                                        <tr class="table__title">
                                            <th>#</th>
                                            <th>Leave Type</th>
                                            <th>Leave Duration</th>
                                            <th>Days</th>
                                            <th>Reason</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table__body">
                                        <?php
                                        $i = 1;
                                        foreach ($requests as $request) {
                                            ?>
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td class="table__leave-type"><?= $request['leavetype'] ?></td>
                                                <td class="table__leave-duration"><?= $request['from_date'] ?> -
                                                    <?= $request['to_date'] ?>
                                                </td>
                                                <td class="table__leave-"><?= $request['day'] ?></td>
                                                <td class="table__leave-rason"><?= $request['reason'] ?></td>
                                                <td>
                                                    <?php
                                                    if ($request['leave_status'] === 'pending') {
                                                        ?>
                                                        <span class="bd-badge bg-warning"><?= $request['leave_status'] ?></span>
                                                        <?php
                                                    } elseif ($request['leave_status'] === 'approve') {
                                                        ?>
                                                        <span class="bd-badge bg-success"><?= $request['leave_status'] ?></span>
                                                        <?php
                                                    } elseif ($request['leave_status'] === 'reject') {
                                                        ?>
                                                        <span class="bd-badge bg-danger"><?= $request['leave_status'] ?></span>
                                                        <?php
                                                    }
                                                    ?>
                                                </td>
                                                <td class="table__icon-box">
                                                    <div class="d-flex align-items-center justify-content-start gap-10">
                                                        <a href="#" class="table__icon edit">
                                                            <i class="fa-sharp fa-light fa-pen"></i>
                                                        </a>
                                                        <button class="removeBtn table__icon delete"><i
                                                                class="fa-regular fa-trash"></i></button>
                                                    </div>
                                                </td>
                                            </tr>

                                            <?php
                                        }

                                        ?>


                                    </tbody>
                                </table>
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
    <script>
        $(document).ready(function () {
            $('#emp_requestforleave').on('submit', function (e) {
                e.preventDefault();
                const formData = $(this).serialize();
                $.ajax({
                    url: "<?= base_url('Admin/EmpLeave/add') ?>",
                    method: 'POST',
                    data: formData,
                    dataType: 'json',
                    success: function (response) {
                        $('#requestforleave').modal('hide');
                        if (response.status === 'success') {
                            Swal.fire({
                                title: 'Success!',
                                text: response.message,
                                icon: 'success',
                                confirmButtonText: 'OK',
                            }).then(() => {
                                $('#emp_requestforleave')[0].reset();

                            });
                        } else {
                            Swal.fire({
                                title: 'Error!',
                                text: response.message,
                                icon: 'error',
                                confirmButtonText: 'Try Again',
                            });
                        }
                    },
                    error: function () {
                        alert('An error occurred. Please try again.');
                    }
                });
            });
        });
    </script>

</body>

</html>
<?php include 'includes/modal.php'; ?>