<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add Leave Type</title>
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
                                <li class="breadcrumb-item active" aria-current="page">Leave Type</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row g-20 mb-20 justify-content-between align-items-end">

                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                        <div class="card__wrapper">
                            <div class="d-flex align-items-center justify-content-end gap-15">
                                <div>
                                    <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal"
                                        data-bs-target="#addleavetype">
                                        Add Leave Type</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="card__wrapper">
                            <div class="table__wrapper table-responsive">
                                <table class="table mb-20" id="dataTableDefualt">
                                    <thead>
                                        <tr class="table__title">
                                            <th>#</th>
                                            <th>Leave Type</th>
                                            <th>Days</th>
                                            <th>Created at Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table__body">
                                        <?php
                                        $i = 1;
                                        foreach ($leavetype as $value) {
                                            ?>
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td><?= $value['leavetype'] ?></td>
                                                <td><?= $value['day'] ?></td>
                                                <td><?= $value['created_at_date'] ?></td>
                                                <td>
                                                    <div class="d-flex align-items-center justify-content-start gap-10">
                                                        <button type="button" class="table__icon edit"
                                                            data-bs-toggle="modal" data-bs-target="#meetingEdit"
                                                            data-id="<?= $value['id'] ?>">
                                                            <i class="fa-sharp fa-light fa-pen"></i>
                                                        </button>
                                                        <button class="removeBtn table__icon delete">
                                                            <i class="fa-regular fa-trash"></i>
                                                        </button>
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
            $('#leaveAddform').on('submit', function (e) {
                e.preventDefault();
                const formData = $(this).serialize();
                $.ajax({
                    url: "<?= base_url('Admin/AddLeaveType/add') ?>",
                    method: 'POST',
                    data: formData,
                    dataType: 'json',
                    success: function (response) {
                        $('#addleavetype').modal('hide');
                        if (response.status === 'success') {
                            Swal.fire({
                                title: 'Success!',
                                text: response.message,
                                icon: 'success',
                                confirmButtonText: 'OK',
                            }).then(() => {
                                $('#leaveAddform')[0].reset();

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

            $('#cancelButton').on('click', function () {
                $('#leaveAddform')[0].reset();
            });
        });
    </script>

</body>

</html>
<?php include 'includes/modal.php'; ?>