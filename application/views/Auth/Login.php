<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sign In</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-style-mode" content="1">
    <?php include('includes/head.php') ?>
</head>

<body class="body-area">

    <div class="container-xxl">
        <!-- register area start-->
        <div class="authentication-wrapper basic-authentication">
            <div class="authentication-inner">
                <div class="card__wrapper">
                    <div class="authentication-top text-center mb-20">
                        <!-- <a href="javascript:;" class="authentication-logo logo-black">
                            <img src="<?= base_url('assets/Home/images/logo/sd-logo.png') ?>" alt="logo">
                        </a>
                        <a href="javascript:;" class="authentication-logo logo-white">
                            <img src="<?= base_url('assets/Home/images/logo/sd-logo.png') ?>" alt="logo">
                        </a> -->

                        <h4 class="mb-15">Welcome</h4>
                        <p class="mb-15">Please sign-in to your account and start the adventure</p>
                    </div>
                    <form method="post" id="loginForm">
                        <div class="form__input-title">
                            <label for="nameEmail">Email or Username</label>
                        </div>
                        <div class="form__input">
                            <input class="form-control" name="email" id="nameEmail" type="text" required>
                        </div>
                        <div class="from__input-box">
                            <div class="form__input-title d-flex justify-content-between">
                                <label for="passwordInput">Password</label>
                                <a href="auth-forgot-password-basic.html">
                                    <!-- <small>Forgot Password?</small> -->
                                </a>
                            </div>
                            <div class="form__input">
                                <input class="form-control" type="password" name="password" id="passwordInput" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary w-100" type="submit">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- register area end-->
    </div>

    <!-- Back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Back to top end -->

    <!-- JS here -->
    <?php include('includes/footer_link.php') ?>

</body>

</html>

<script>
    $(document).ready(function () {
        $('#loginForm').submit(function (e) {
            e.preventDefault();

            const formData = $(this).serialize();
            const loginUrl = '<?= base_url("Auth/login") ?>';
            $.ajax({
                url: loginUrl,
                type: 'POST',
                data: formData,
                dataType: 'json',
                beforeSend: function () {
                    $('button[type="submit"]').prop('disabled', true).text('Signing in...');
                },
                success: function (response) {
                    if (response.status === 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Login Successful',
                            text: 'Redirecting to dashboard...',
                            timer: 2000,
                            showConfirmButton: false
                        }).then(() => {
                            window.location.href = '<?= base_url("Admin") ?>';
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Login Failed',
                            text: response.message || 'Login failed. Please try again.'
                        });
                    }
                },
                error: function (xhr, status, error) {
                    console.error('AJAX Error:', error);
                    alert('An unexpected error occurred. Please try again later.');
                },
                complete: function () {
                    // Re-enable the button
                    $('button[type="submit"]').prop('disabled', false).text('Sign in');
                }
            });
        });
    });
</script>



<!-- <div class="from__input-box">

                            <div class="form__input-title">
                                <label for="operationSelect">Select Operation</label>
                            </div>
                            <div class="form__input">
                                <select class="form-control" name="operation" id="operationSelect">
                                    <option value="">Select Operation</option>
                                    <?php foreach ($operation as $key => $value) { ?>
                                        <option value="<?= $value['id'] ?>">
                                            <?= $value['operation_city'] ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="from__input-box" id="designationSection" style="display: none;">
                            <div class="form__input-title">
                                <label for="designationSelect">Select Designation</label>
                            </div>
                            <div class="form__input">
                                <select class="form-control" name="designation" id="designationSelect">
                                    <option value="">Select Designation</option>
                                    <option value="area_manager">Area Manager</option>
                                    <option value="repair_manager">Repair Manager</option>
                                    <option value="supervisor">Supervisor</option>
                                    <option value="mst_team">MST Team</option>
                                    <option value="employee">Employee</option>
                                </select>
                            </div>
                        </div>
                        <div class="from__input-box" id="branchSection" style="display: none;">
                            <div class="form__input-title">
                                <label for="branchSelect">Select Branch</label>
                            </div>
                            <div class="form__input">
                                <select class="branch form-control" name="branchName" id="branchName">
                                    <option value="">Select Branch</option>
                                </select>
                            </div>
                        </div>
                        <div class="from__input-box" id="domainSection" style="display: none;">
                            <div class="form__input-title">
                                <label for="domainSelect">Select Domain</label>
                            </div>
                            <div class="form__input">
                                <select class="form-control" name="domain" id="domainSelect">
                                    <option value="">Select Domain</option>
                                    <option value="data_entry">Data Entry</option>
                                    <option value="repair">Repair & Maintenance</option>
                                    <option value="employee_b">Employee B Category</option>
                                </select>
                            </div>
                        </div> -->


<!-- <script>
    $(document).ready(function () {
        $('#operationSelect').change(function () {
            const operationId = $(this).val();
            const designationSection = $('#designationSection');
            const branchSection = $('#branchSection');
            const domainSection = $('#domainSection');
            const designationSelect = $('#designationSelect');
            const branchSelect = $('#branchName');
            const domainSelect = $('#domainSelect');

            designationSection.hide();
            branchSection.hide();
            domainSection.hide();

            designationSelect.prop('required', false);
            branchSelect.prop('required', false);
            domainSelect.prop('required', false);

            if (operationId) {
                designationSection.show();
                designationSelect.prop('required', true);

                // AJAX Request to Fetch Branches
                $.ajax({
                    url: '<?= base_url("Admin/getBranchesByOperation") ?>',
                    type: 'POST',
                    data: { operation_id: operationId },
                    dataType: 'json',
                    success: function (response) {
                        if (response.status === 'success') {
                            let branchOptions = '<option value="">Select Branch</option>';
                            response.branches.forEach(function (branch) {
                                branchOptions += `<option value="${branch.id}">${branch.branch_name}</option>`;
                            });
                            branchSelect.html(branchOptions);
                        } else {
                            branchSelect.html('<option value="">Select Branch</option>');
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error('AJAX Error:', error);
                        alert('An error occurred while fetching branches.');
                    }
                });
            } else {
                branchSelect.html('<option value="">Select Branch</option>');
            }
        });

        $('#designationSelect').change(function () {
            const designation = $(this).val();
            const branchSection = $('#branchSection');
            const domainSection = $('#domainSection');
            const branchSelect = $('#branchName');
            const domainSelect = $('#domainSelect');

            branchSection.hide();
            domainSection.hide();
            branchSelect.prop('required', false);
            domainSelect.prop('required', false);

            if (designation === 'supervisor' || designation === 'mst_team') {
                branchSection.show();
                branchSelect.prop('required', true);
            } else if (designation === 'employee') {
                branchSection.show();
                domainSection.show();
                branchSelect.prop('required', true);
                domainSelect.prop('required', true);
            }
        });
    });
</script> -->