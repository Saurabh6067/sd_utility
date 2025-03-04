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
        <div class="authentication-wrapper basic-authentication">
            <div class="authentication-inner">
                <div class="card__wrapper">
                    <div class="authentication-top text-center mb-20">
                        <h4 class="mb-15">Welcome</h4>
                        <p class="mb-15">Please sign-in to your account and start the adventure</p>
                    </div>
                    <form method="post" id="loginForm">
                        <div class="from__input-box">
                            <div class="form__input-title">
                                <label for="roleSelect">Select Role</label>
                            </div>
                            <div class="form__input">
                                <select class="form-control" name="role" id="roleSelect" required>
                                    <option value="" disabled selected>Select Role</option>
                                    <option value="admin">Admin</option>
                                    <option value="supervisor">Supervisor</option>
                                    <option value="branch_manager">Branch Manager</option>
                                </select>
                            </div>
                        </div>

                        <div class="from__input-box" id="operationSection" style="display: none;">
                            <div class="form__input-title">
                                <label for="operationSelect">Select Operation/Circle</label>
                            </div>
                            <div class="form__input">
                                <select class="form-control" name="operation" id="operationSelect">
                                    <option value="">Select Operation</option>
                                    <?php foreach ($operations as $operation): ?>
                                        <option value="<?= $operation['operation'] ?>"> <?= $operation['operation'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="from__input-box" id="branchSection" style="display: none;">
                            <div class="form__input-title">
                                <label for="branchSelect">Select Branch</label>
                            </div>
                            <div class="form__input">
                                <select class="form-control" name="branch" id="branchSelect">
                                    <option value="">Select Branch</option>
                                </select>
                            </div>
                        </div>

                        <div class="from__input-box">
                            <div class="form__input-title">
                                <label for="empId">Employee ID</label>
                            </div>
                            <div class="form__input">
                                <input class="form-control" name="empid" id="empId" type="text" required>
                            </div>
                        </div>

                        <div class="from__input-box">
                            <div class="form__input-title">
                                <label for="passwordInput">Password</label>
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
    </div>

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <?php include('includes/footer_link.php') ?>
</body>

</html>

<script>
    $(document).ready(function () {
        $('#roleSelect').change(function () {
            let role = $(this).val();
            $('#operationSection, #branchSection').hide();
            $('#operationSelect, #branchSelect').prop('required', false);

            if (role === 'supervisor') {
                $('#operationSection').show();
                $('#operationSelect').prop('required', true);
            } else if (role === 'branch_manager') {
                $('#operationSection, #branchSection').show();
                $('#operationSelect, #branchSelect').prop('required', true);
            }
        });

        $('#loginForm').submit(function (e) {
            e.preventDefault();
            const formData = $(this).serialize();

            $.ajax({
                url: '<?= base_url("Auth/login") ?>',
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
                            window.location.href = response.redirect;
                        });
                    } else {
                        Swal.fire({ icon: 'error', title: 'Login Failed', text: response.message });
                    }
                },
                error: function () {
                    alert('An unexpected error occurred. Please try again.');
                },
                complete: function () {
                    $('button[type="submit"]').prop('disabled', false).text('Sign in');
                }
            });
        });
    });
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
                $('button[type="submit"]').prop('disabled', false).text('Sign in');
            }
        });
    });
    });
</script>