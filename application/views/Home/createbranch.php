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
                                <li class="breadcrumb-item active" aria-current="page">Create Branch</li>
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
                                    <div class="col-md-6">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label for="branch">Branch Name<span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <input class="form-control" name="branch" id="newbranch" type="text"
                                                    required placeholder="Enter branch name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label for="lat">Latitude<span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <input class="form-control" name="lat" id="lat" type="text" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label for="lon">Longitude<span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <input class="form-control" name="lon" id="lon" type="text" required>
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
                    url: "<?= base_url('Admin/Branch/add') ?>",
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
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx_5V0k3AP2ZxGMNZ7TSy0LnhwChWuDoE&libraries=places&callback=initializeAutocomplete"></script>
    <!-- <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=MZ6FRmuuDw1ybJKGokkZR3ToAxAxuZwwcjzmdJahnl2FraFrK96azdBJwEK8wN15&libraries=places&callback=initializeAutocomplete"></script> -->

    <script>
        let autocomplete;

        function initializeAutocomplete() {
            const branchInput = document.getElementById('newbranch');
            autocomplete = new google.maps.places.Autocomplete(branchInput);

            autocomplete.addListener('place_changed', function () {
                const place = autocomplete.getPlace();

                if (!place.geometry) {
                    alert('No details available for the entered branch name.');
                    return;
                }
                const lat = place.geometry.location.lat();
                const lon = place.geometry.location.lng();
                console.log(place.geometry.location);

                document.getElementById('lat').value = lat;
                document.getElementById('lon').value = lon;
            });
        }
    </script>
</body>

</html>

<!-- Modal -->
<?php include 'includes/modal.php'; ?>