<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add Assets</title>
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
                                <li class="breadcrumb-item active" aria-current="page">All Assets</li>
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
                                        data-bs-target="#addassets">
                                        Add Assets Type</button>
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
                                            <th>Assets Name</th>
                                            <th>Assets Type</th>
                                            <th>Assets Img</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table__body">
                                        <?php if (!empty($assets)): ?>
                                            <?php $i = 1; ?>
                                            <?php foreach ($assets as $value): ?>
                                                <tr>
                                                    <td><?= $i++ ?></td>
                                                    <td><?= $value['asset_name'] ?></td>
                                                    <td><?= $value['asset_type'] ?></td>
                                                    <td><img class="w-50" src="<?= base_url('uploads/assets/' . $value['asset_img']) ?>" alt=""></td>
                                                    <td><?= $value['asset_quantity'] ?></td>
                                                    <td><?= $value['asset_price'] ?></td>
                                                    <td><?= $value['asset_description'] ?></td>
                                                    <td>
                                                        <div class="d-flex align-items-center justify-content-start gap-10">
                                                            <button type="button" class="table__icon edit"
                                                                data-bs-toggle="modal" data-bs-target="#meetingEdit"
                                                                data-id="<?= $value['id'] ?>">
                                                                <i class="fa-sharp fa-light fa-pen"></i>
                                                            </button>
                                                            <!-- <button class="removeBtn table__icon delete">
                                                            <i class="fa-regular fa-trash"></i>
                                                        </button> -->
                                                            <button class="btn btn-danger"
                                                                onclick="DeleteWithoutImage('<?= isset($value['id']) ? $value['id'] : ''; ?>', 'tbl_leavetype');">
                                                                <i class="fa-regular fa-trash"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <tr>
                                                <td colspan="5" class="text-center">No records found</td>
                                            </tr>
                                        <?php endif; ?>

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
            $('#form_addassets').on('submit', function (e) {
                e.preventDefault();

                let formData = new FormData(this); // Ensure FormData is used to handle file upload

                $.ajax({
                    url: "<?= base_url('Admin/addAssets/add') ?>",
                    method: 'POST',
                    data: formData,
                    dataType: 'json',
                    processData: false, // Prevent jQuery from converting the data into a query string
                    contentType: false, // Prevent jQuery from setting a default content type
                    success: function (response) {
                        if (response.status === 'success') {
                            Swal.fire({
                                title: 'Success!',
                                text: response.message,
                                icon: 'success',
                                confirmButtonText: 'OK',
                            }).then(() => {
                                $('#form_addassets')[0].reset();
                                window.location.reload();
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
                $('#form_addassets')[0].reset();
            });
        });


    </script>
    <script>
        function DeleteWithoutImage(id, table) {
            alert(id);
            var status = true;

            Swal.fire({
                title: "Are You Sure?",
                text: "You Want To Delete?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "<?= base_url('Admin/DeleteWithoutImage') ?>",
                        type: "post",
                        data: {
                            'id': id,
                            'table': table
                        },
                        success: function (response) {
                            if (response == 1) {
                                Swal.fire({
                                    title: 'Success!',
                                    text: 'Delete Successfully!',
                                    icon: 'success',
                                    confirmButtonText: 'OK',
                                }).then(() => {
                                    window.location.reload();
                                });
                            } else {
                                Swal.fire({
                                    title: 'Error!',
                                    text: 'Deletion failed!',
                                    icon: 'error',
                                    confirmButtonText: 'OK'
                                });
                            }
                        }
                    });
                }
            });
            return status;
        }
    </script>

</body>

</html>
<?php include 'includes/modal.php'; ?>