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
    <!-- Preloader start -->
    <div class="preloader" id="preloader">
        <div class="loading">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- Preloader start -->

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
                                <li class="breadcrumb-item active" aria-current="page">Leave Admin</li>
                            </ol>
                        </nav>
                        <div class="breadcrumb__btn">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#addNewLeave">Add New Leave</button>
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
                                    <h6 class="card__sub-title mb-10">Total Employee</h6>
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
                                            <th>Employee Name</th>
                                            <th>Designation</th>
                                            <th>Leave Type</th>
                                            <th>Leave Duration</th>
                                            <th>Days</th>
                                            <th>Reason</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table__body">
                                        <tr>
                                            <td>
                                                <div class="table-avatar">
                                                    <a class="employee__avatar mr-5" href="profile.html"><img
                                                            class="img-48 border-circle"
                                                            src="assets/images/avatar/avatar1.png" alt="User Image"></a>
                                                    <a href="profile.html">Sophia Williams</a>
                                                </div>
                                            </td>
                                            <td class="table__employee-position">Business Intelligence Analyst</td>
                                            <td class="table__leave-type">Medical Leave</td>
                                            <td class="table__leave-duration">19 April 2024 - 24 April 2024</td>
                                            <td class="table__leave-">6</td>
                                            <td class="table__leave-rason">Medical Leave</td>
                                            <td class="table__delivery"><span class="bd-badge bg-warning">Pending</span>
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
                                        <tr>
                                            <td>
                                                <div class="table-avatar">
                                                    <a class="employee__avatar mr-5" href="profile.html"><img
                                                            class="img-48 border-circle"
                                                            src="assets/images/avatar/avatar2.png" alt="User Image"></a>
                                                    <a href="profile.html">Fresh Water</a>
                                                </div>
                                            </td>
                                            <td class="table__employee-position">Business Intelligence Analyst</td>
                                            <td class="table__leave-type">Personal Leave</td>
                                            <td class="table__leave-duration">15 April 2024 - 16 April 2024</td>
                                            <td class="table__leave-">1</td>
                                            <td class="table__leave-rason">Personal Leave</td>
                                            <td class="table__delivery"><span
                                                    class="bd-badge bg-success">Approved</span></td>
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
                                        <tr>
                                            <td>
                                                <div class="table-avatar">
                                                    <a class="employee__avatar mr-5" href="profile.html"><img
                                                            class="img-48 border-circle"
                                                            src="assets/images/avatar/avatar3.png" alt="User Image"></a>
                                                    <a href="profile.html">John Doe</a>
                                                </div>
                                            </td>
                                            <td class="table__employee-position">Software Engineer</td>
                                            <td class="table__leave-type">Sick Leave</td>
                                            <td class="table__leave-duration">10 March 2024 - 12 March 2024</td>
                                            <td class="table__leave-">3</td>
                                            <td class="table__leave-rason">Medical Condition</td>
                                            <td class="table__delivery"><span class="bd-badge bg-warning">Pending</span>
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

                                        <tr>
                                            <td>
                                                <div class="table-avatar">
                                                    <a class="employee__avatar mr-5" href="profile.html"><img
                                                            class="img-48 border-circle"
                                                            src="assets/images/avatar/avatar4.png" alt="User Image"></a>
                                                    <a href="profile.html">Jane Smith</a>
                                                </div>
                                            </td>
                                            <td class="table__employee-position">Project Manager</td>
                                            <td class="table__leave-type">Vacation Leave</td>
                                            <td class="table__leave-duration">01 May 2024 - 07 May 2024</td>
                                            <td class="table__leave-">7</td>
                                            <td class="table__leave-rason">Family Trip</td>
                                            <td class="table__delivery"><span
                                                    class="bd-badge bg-success">Approved</span></td>
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

                                        <tr>
                                            <td>
                                                <div class="table-avatar">
                                                    <a class="employee__avatar mr-5" href="profile.html"><img
                                                            class="img-48 border-circle"
                                                            src="assets/images/avatar/avatar5.png" alt="User Image"></a>
                                                    <a href="profile.html">Michael Brown</a>
                                                </div>
                                            </td>
                                            <td class="table__employee-position">HR Manager</td>
                                            <td class="table__leave-type">Maternity Leave</td>
                                            <td class="table__leave-duration">15 June 2024 - 15 August 2024</td>
                                            <td class="table__leave-">60</td>
                                            <td class="table__leave-rason">Maternity</td>
                                            <td class="table__delivery"><span
                                                    class="bd-badge bg-success">Approved</span></td>
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

                                        <tr>
                                            <td>
                                                <div class="table-avatar">
                                                    <a class="employee__avatar mr-5" href="profile.html"><img
                                                            class="img-48 border-circle"
                                                            src="assets/images/avatar/avatar6.png" alt="User Image"></a>
                                                    <a href="profile.html">Emily Davis</a>
                                                </div>
                                            </td>
                                            <td class="table__employee-position">Marketing Specialist</td>
                                            <td class="table__leave-type">Paternity Leave</td>
                                            <td class="table__leave-duration">05 July 2024 - 20 July 2024</td>
                                            <td class="table__leave-">15</td>
                                            <td class="table__leave-rason">Paternity</td>
                                            <td class="table__delivery"><span class="bd-badge bg-warning">Pending</span>
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

                                        <tr>
                                            <td>
                                                <div class="table-avatar">
                                                    <a class="employee__avatar mr-5" href="profile.html"><img
                                                            class="img-48 border-circle"
                                                            src="assets/images/avatar/avatar7.png" alt="User Image"></a>
                                                    <a href="profile.html">Daniel Wilson</a>
                                                </div>
                                            </td>
                                            <td class="table__employee-position">Financial Analyst</td>
                                            <td class="table__leave-type">Bereavement Leave</td>
                                            <td class="table__leave-duration">01 September 2024 - 03 September 2024</td>
                                            <td class="table__leave-">3</td>
                                            <td class="table__leave-rason">Family Loss</td>
                                            <td class="table__delivery"><span
                                                    class="bd-badge bg-success">Approved</span></td>
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

                                        <tr>
                                            <td>
                                                <div class="table-avatar">
                                                    <a class="employee__avatar mr-5" href="profile.html"><img
                                                            class="img-48 border-circle"
                                                            src="assets/images/avatar/avatar8.png" alt="User Image"></a>
                                                    <a href="profile.html">Samantha Wilson</a>
                                                </div>
                                            </td>
                                            <td class="table__employee-position">Operations Manager</td>
                                            <td class="table__leave-type">Study Leave</td>
                                            <td class="table__leave-duration">10 October 2024 - 30 October 2024</td>
                                            <td class="table__leave-">21</td>
                                            <td class="table__leave-rason">Exams</td>
                                            <td class="table__delivery"><span class="bd-badge bg-warning">Pending</span>
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

                                        <tr>
                                            <td>
                                                <div class="table-avatar">
                                                    <a class="employee__avatar mr-5" href="profile.html"><img
                                                            class="img-48 border-circle"
                                                            src="assets/images/avatar/avatar9.png" alt="User Image"></a>
                                                    <a href="profile.html">Chris Johnson</a>
                                                </div>
                                            </td>
                                            <td class="table__employee-position">IT Support Specialist</td>
                                            <td class="table__leave-type">Compassionate Leave</td>
                                            <td class="table__leave-duration">01 November 2024 - 05 November 2024</td>
                                            <td class="table__leave-">5</td>
                                            <td class="table__leave-rason">Family Illness</td>
                                            <td class="table__delivery"><span
                                                    class="bd-badge bg-success">Approved</span></td>
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

                                        <tr>
                                            <td>
                                                <div class="table-avatar">
                                                    <a class="employee__avatar mr-5" href="profile.html"><img
                                                            class="img-48 border-circle"
                                                            src="assets/images/avatar/avatar10.png"
                                                            alt="User Image"></a>
                                                    <a href="profile.html">David Martinez</a>
                                                </div>
                                            </td>
                                            <td class="table__employee-position">Legal Advisor</td>
                                            <td class="table__leave-type">Jury Duty</td>
                                            <td class="table__leave-duration">12 December 2024 - 16 December 2024</td>
                                            <td class="table__leave-">5</td>
                                            <td class="table__leave-rason">Jury Duty</td>
                                            <td class="table__delivery"><span class="bd-badge bg-warning">Pending</span>
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

                                        <tr>
                                            <td>
                                                <div class="table-avatar">
                                                    <a class="employee__avatar mr-5" href="profile.html"><img
                                                            class="img-48 border-circle"
                                                            src="assets/images/avatar/avatar11.png"
                                                            alt="User Image"></a>
                                                    <a href="profile.html">Laura Thompson</a>
                                                </div>
                                            </td>
                                            <td class="table__employee-position">Sales Manager</td>
                                            <td class="table__leave-type">Unpaid Leave</td>
                                            <td class="table__leave-duration">01 January 2025 - 05 January 2025</td>
                                            <td class="table__leave-">5</td>
                                            <td class="table__leave-rason">Personal Reasons</td>
                                            <td class="table__delivery"><span class="bd-badge bg-warning">Pending</span>
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

                                        <tr>
                                            <td>
                                                <div class="table-avatar">
                                                    <a class="employee__avatar mr-5" href="profile.html"><img
                                                            class="img-48 border-circle"
                                                            src="assets/images/avatar/avatar12.png"
                                                            alt="User Image"></a>
                                                    <a href="profile.html">James White</a>
                                                </div>
                                            </td>
                                            <td class="table__employee-position">Product Manager</td>
                                            <td class="table__leave-type">Parental Leave</td>
                                            <td class="table__leave-duration">20 February 2024 - 20 March 2024</td>
                                            <td class="table__leave-">30</td>
                                            <td class="table__leave-rason">New Child</td>
                                            <td class="table__delivery"><span
                                                    class="bd-badge bg-success">Approved</span></td>
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

</body>

</html>
<?php include 'includes/modal.php'; ?>