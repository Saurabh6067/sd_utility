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
                                <li class="breadcrumb-item active" aria-current="page">Employee Add Manually</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row g-20 mb-20 justify-content-between align-items-end">
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <form id="addemp" method="post" action="#">
                            <div class="card__wrapper mb-20">
                                <div class="row g-20 gy-20 align-items-center justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="form__input-box">
                                            <div class="form__input-title">
                                                <label for="name">Name <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <input class="form-control" name="name" id="name" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form__input-box">
                                            <div class="form__input-title">
                                                <label for="email">Email <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <input class="form-control" name="email" id="email" type="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form__input-box">
                                            <div class="form__input-title">
                                                <label for="mobile">Mobile <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <input class="form-control" name="mobile" id="mobile" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form__input-box">
                                            <div class="form__input-title">
                                                <label for="password">Password <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <input class="form-control" name="password" id="password"
                                                    type="password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label for="operationSelect">Select Operation</label>
                                            </div>
                                            <div class="form__input">
                                                <select class="form-control" name="circleName" id="circleName">
                                                    <option value="">Select Operation</option>
                                                    <?php foreach ($operation as $key => $value) { ?>
                                                        <option value="<?= $value['id'] ?>">
                                                            <?= $value['operation_city'] ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-5">
                                        <div class="form__input-box">
                                            <div class="form__input-title">
                                                <label for="role">Role <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <select class="form-control" name="role" id="role">
                                                    <option value="">Select Role</option>
                                                    <option value="Area Manager">Area Manager</option>
                                                    <option value="Repair Manager">Repair Manager</option>
                                                    <option value="Supervisor">Supervisor</option>
                                                    <option value="MST Team">MST Team</option>
                                                    <option value="Employee">Employee</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form__input-box">
                                            <div class="form__input-title">
                                                <label for="branch">Branch <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <select class="form-control" name="branchName" id="branchName">
                                                    <option value="">Select Branch</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label for="domainSelect">Select Domain</label>
                                            </div>
                                            <div class="form__input">
                                                <select class="form-control" name="domain" id="domain">
                                                    <option value="">Select Domain</option>
                                                    <option value="data_entry">Data Entry</option>
                                                    <option value="repair">Repair & Maintenance</option>
                                                    <option value="employee_b">Employee B Category</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="submit__btn text-end mt-5">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
    <script>
        $(document).ready(function () {
            $('#addemp').on('submit', function (e) {
                e.preventDefault();
                const formData = $(this).serialize();
                $.ajax({
                    url: "<?= base_url('Admin/Employeadd/add') ?>",
                    method: 'POST',
                    data: formData,
                    dataType: 'json',
                    success: function (response) {
                        $('#addNewEmployee').modal('hide');
                        if (response.status === 'success') {
                            Swal.fire({
                                title: 'Success!',
                                text: response.message,
                                icon: 'success',
                                confirmButtonText: 'OK',
                            }).then(() => {
                                $('#addemp')[0].reset();

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
                $('#addemp')[0].reset();
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#circleName').change(function () {
                const operationId = $(this).val();
                console.log('Selected Operation ID:', operationId);

                if (operationId) {
                    $.ajax({
                        url: '<?= base_url("Admin/getBranchesByOperation") ?>',
                        type: 'POST',
                        data: { operation_id: operationId },
                        dataType: 'json',
                        success: function (response) {
                            console.log('AJAX Response:', response);
                            if (response.status === 'success') {
                                let branchOptions = '<option value="">Select Branch</option>';
                                response.branches.forEach(function (branch) {
                                    branchOptions += `<option value="${branch.id}">${branch.branch_name}</option>`;
                                });
                                $('#branchName').html(branchOptions);
                            } else {
                                // alert(response.message);
                                $('#branchName').html('<option value="">Select Branch</option>');
                            }
                        },
                        error: function (xhr, status, error) {
                            console.error('AJAX Error:', error);
                            alert('An error occurred while fetching branches.');
                        }
                    });
                } else {
                    $('#branchName').html('<option value="">Select Branch</option>');
                }
            });
        });
    </script>
</body>

</html>

<!-- Modal -->
<?php include 'includes/modal.php'; ?>