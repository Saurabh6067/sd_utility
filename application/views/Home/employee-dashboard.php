
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
                <!-- <div class="row">
                    <div class="col-md-12">
                        <div class="employee-alert-box">
                            <div class="col-xl-12">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <i class="icon-thumbs-up"></i>
                                    <p>Your leave request for <strong><b>“24th April 2024”,</b></strong> has been
                                        approved. Enjoy
                                        your day off!</p>
                                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"
                                        title=""></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="employee-alert-box">
                            <div class="col-xl-12">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="icon-thumbs-down"></i>
                                    <p>Your loan request <strong><b>hasn't been approved</b></strong> Please reach out
                                        to HR for
                                        further assistance.</p>
                                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"
                                        title=""></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="row g-20">
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="card__wrapper">
                            <div class="d-flex align-items-center gap-sm">
                                <div class="card__icon">
                                    <span><i class="fa-sharp fa-regular fa-user"></i></span>
                                </div>
                                <div class="card__title-wrap">
                                    <h6 class="card__sub-title mb-10">New Tickets</h6>
                                    <div class="d-flex flex-wrap align-items-end gap-10">
                                        <h4 class="card__title">313</h4>
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
                                    <h6 class="card__sub-title mb-10">Ticket Resolved</h6>
                                    <div class="d-flex flex-wrap align-items-end gap-10">
                                        <h4 class="card__title">55</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="card__wrapper">
                            <div class="d-flex align-items-center gap-sm">
                                <div class="card__icon">
                                    <span><i class="fa-sharp fa-regular fa-gear"></i></span>
                                </div>
                                <div class="card__title-wrap">
                                    <h6 class="card__sub-title mb-10">Project Assigned</h6>
                                    <div class="d-flex flex-wrap align-items-end gap-10">
                                        <h4 class="card__title">313</h4>
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
                                    <h6 class="card__sub-title mb-10">Available Leaves</h6>
                                    <div class="d-flex flex-wrap align-items-end gap-10">
                                        <h3 class="card__title">150</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-12 col-xl-12 col-lg-12">
                        <div class="card__wrapper">
                            <div class="card__title-wrap d-flex align-items-center justify-content-between mb-20">
                                <h5 class="card__heading-title">Mark Attendance</h5>
                            </div>
                            <p class="text-muted">Office Time: 09:00AM to 06:00PM</p>
                            <div id="qrcode" class="mx-auto" style="width: 100px; height: 100px; margin: 0 auto;"></div>
                        </div>
                    </div>
                    <!-- <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="card__wrapper mb-20">
                            <div class="card__title-wrap d-flex align-items-center justify-content-between mb-20">
                                <h5 class="card__heading-title">Attendance & Leaves</h5>
                            </div>
                            <div class="attendance__list">
                                <div class="row g-20">
                                    <div class="col-md-4 col-6">
                                        <div class="attendance__details mb-10">
                                            <h4 class="text-primary">27</h4>
                                            <p>Total Present</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="attendance__details mb-10">
                                            <h4 class="text-secondary">01</h4>
                                            <p>Half Day</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="attendance__details mb-10">
                                            <h4 class="text-danger">03</h4>
                                            <p>Total Absent</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="attendance__details mb-10">
                                            <h4 class="text-link">1</h4>
                                            <p>Pending Approval</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="attendance__details mb-10">
                                            <h4 class="text-info">315</h4>
                                            <p>Total Days</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="attendance-btn">
                                <a class="btn btn-primary" href="leaves-employee.html">
                                    Apply Leave</a>
                            </div>
                        </div>
                    </div> -->
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




    <?php include 'includes/footer_link.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <script>
        window.addEventListener('load', function () {
            console.log('Page fully loaded');
            console.log('QRCode available:', typeof QRCode !== 'undefined');

            var branchdata = <?php echo json_encode(isset($branch) ? $branch : []); ?>;
            console.log('Attandance Data:', branchdata); // Debug log
            alert(branchdata);

            if (!branchdata) {
                console.error('No RC data available');
                return;
            }

            // Clear existing QR code
            const qrContainer = document.getElementById("qrcode");
            if (!qrContainer) {
                console.error('QR container not found');
                return;
            }
            qrContainer.innerHTML = '';

            try {
                // Convert data to string
                const qrString = JSON.stringify(branchdata);
                console.log('QR String length:', qrString.length); // Debug log

                // Create QR code with optimal settings for large data
                new QRCode(qrContainer, {
                    text: qrString,
                    width: 100,
                    height: 100,
                    colorDark: "#000000",
                    colorLight: "#ffffff",
                    correctLevel: QRCode.CorrectLevel.L,
                    margin: 0,
                    version: 40
                });

                // Verify generation
                if (qrContainer.firstChild) {
                    console.log('QR Code generated successfully');
                } else {
                    console.error('QR Code container is empty after generation');
                }

            } catch (error) {
                console.error('QR Code generation error:', error);
                qrContainer.innerHTML = `
            <div class="alert alert-danger">
                Error generating QR code. Please refresh the page.
                <br>Error: ${error.message}
            </div>`;
            }
        });



        document.addEventListener('DOMContentLoaded', function () {
            const downloadBtn = document.getElementById('downloadBtn');
            const isDesktop = window.innerWidth > 768; // Detect desktop devices

            downloadBtn.addEventListener('click', function () {
                const element = document.body; // Replace with the target element ID or class
                if (isDesktop) {
                    // Options for desktop layout preservation
                    const options = {
                        margin: 0, // No additional margins
                        filename: 'Desktop_Layout.pdf',
                        image: {
                            type: 'jpeg',
                            quality: 1.0 // Maximum quality
                        },
                        html2canvas: {
                            scale: 1, // Match screen resolution
                            useCORS: true
                        },
                        jsPDF: {
                            unit: 'px', // Use pixels for exact match
                            format: [element.offsetWidth, element.offsetHeight], // Match element dimensions
                            orientation: 'portrait'
                        }
                    };

                    html2pdf().set(options).from(element).save();
                } else {
                    const elementHeightInMM = element.offsetHeight * 0.275383;
                    // Same options for non-desktop
                    const options = {
                        margin: 0, // Minimal margin for roll paper
                        filename: 'Virtual_RC.pdf',
                        image: {
                            type: 'jpeg',
                            quality: 0.98
                        },
                        html2canvas: {
                            scale: 1,
                            useCORS: true
                        }, // High resolution
                        jsPDF: {
                            unit: 'mm',
                            format: [70, elementHeightInMM],
                            orientation: 'portrait'
                        }
                    };

                    html2pdf().set(options).from(element).save();
                }
            });
        });
    </script>

</body>

</html>
<?php include 'includes/modal.php'; ?>