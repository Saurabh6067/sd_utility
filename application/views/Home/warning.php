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
                                <li class="breadcrumb-item active" aria-current="page">Warning</li>
                            </ol>
                        </nav>
                        <div class="breadcrumb__btn">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#addNewWarning">Add Warning</button>
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
                                            <th>Employee</th>
                                            <th>Subject</th>
                                            <th>Warning Date</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="employee-profile.html" class="flex-center">
                                                    <img class="img-36 border-circle"
                                                        src="assets/images/avatar/avatar.png" alt="img">
                                                    <span>John Doe</span></a>
                                            </td>
                                            <td>Late Arrival</td>
                                            <td>Jan 15, 2024</td>
                                            <td>Repeated late arrival without prior notice.</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon edit"
                                                        data-bs-toggle="modal" data-bs-target="#warningEdit">
                                                        <i class="fa-sharp fa-light fa-pen"></i>
                                                    </button>
                                                    <button class="removeBtn table__icon delete">
                                                        <i class="fa-regular fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="employee-profile.html" class="flex-center">
                                                    <img class="img-36 border-circle"
                                                        src="assets/images/avatar/avatar1.png" alt="img">
                                                    <span>Jane Smith</span></a>
                                            </td>
                                            <td>Missed Deadline</td>
                                            <td>Feb 10, 2024</td>
                                            <td>Failure to submit project report on time.</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon edit"
                                                        data-bs-toggle="modal" data-bs-target="#warningEdit">
                                                        <i class="fa-sharp fa-light fa-pen"></i>
                                                    </button>
                                                    <button class="removeBtn table__icon delete">
                                                        <i class="fa-regular fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="employee-profile.html" class="flex-center">
                                                    <img class="img-36 border-circle"
                                                        src="assets/images/avatar/avatar2.png" alt="img">
                                                    <span>Robert Johnson</span></a>
                                            </td>
                                            <td>Insubordination</td>
                                            <td>Mar 05, 2024</td>
                                            <td>Refusal to follow management instructions.</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon edit"
                                                        data-bs-toggle="modal" data-bs-target="#warningEdit">
                                                        <i class="fa-sharp fa-light fa-pen"></i>
                                                    </button>
                                                    <button class="removeBtn table__icon delete">
                                                        <i class="fa-regular fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="employee-profile.html" class="flex-center">
                                                    <img class="img-36 border-circle"
                                                        src="assets/images/avatar/avatar3.png" alt="img">
                                                    <span>Emily Davis</span></a>
                                            </td>
                                            <td>Poor Performance</td>
                                            <td>Apr 12, 2024</td>
                                            <td>Consistently failing to meet performance targets.</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon edit"
                                                        data-bs-toggle="modal" data-bs-target="#warningEdit">
                                                        <i class="fa-sharp fa-light fa-pen"></i>
                                                    </button>
                                                    <button class="removeBtn table__icon delete">
                                                        <i class="fa-regular fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="employee-profile.html" class="flex-center">
                                                    <img class="img-36 border-circle"
                                                        src="assets/images/avatar/avatar4.png" alt="img">
                                                    <span>Michael Brown</span></a>
                                            </td>
                                            <td>Absenteeism</td>
                                            <td>May 03, 2024</td>
                                            <td>Excessive unexcused absences from work.</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon edit"
                                                        data-bs-toggle="modal" data-bs-target="#warningEdit">
                                                        <i class="fa-sharp fa-light fa-pen"></i>
                                                    </button>
                                                    <button class="removeBtn table__icon delete">
                                                        <i class="fa-regular fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="employee-profile.html" class="flex-center">
                                                    <img class="img-36 border-circle"
                                                        src="assets/images/avatar/avatar5.png" alt="img">
                                                    <span>Johnson Wilson</span></a>
                                            </td>
                                            <td>Policy Violation</td>
                                            <td>Jun 18, 2024</td>
                                            <td>Breach of company policy on data protection.</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon edit"
                                                        data-bs-toggle="modal" data-bs-target="#warningEdit">
                                                        <i class="fa-sharp fa-light fa-pen"></i>
                                                    </button>
                                                    <button class="removeBtn table__icon delete">
                                                        <i class="fa-regular fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="employee-profile.html" class="flex-center">
                                                    <img class="img-36 border-circle"
                                                        src="assets/images/avatar/avatar6.png" alt="img">
                                                    <span>David Martinez</span></a>
                                            </td>
                                            <td>Misconduct</td>
                                            <td>Jul 25, 2024</td>
                                            <td>Inappropriate behavior in the workplace.</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon edit"
                                                        data-bs-toggle="modal" data-bs-target="#warningEdit">
                                                        <i class="fa-sharp fa-light fa-pen"></i>
                                                    </button>
                                                    <button class="removeBtn table__icon delete">
                                                        <i class="fa-regular fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="employee-profile.html" class="flex-center">
                                                    <img class="img-36 border-circle"
                                                        src="assets/images/avatar/avatar7.png" alt="img">
                                                    <span>Lisa Anderson</span></a>
                                            </td>
                                            <td>Failure to Follow Procedures</td>
                                            <td>Aug 14, 2024</td>
                                            <td>Not adhering to safety procedures.</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon edit"
                                                        data-bs-toggle="modal" data-bs-target="#warningEdit">
                                                        <i class="fa-sharp fa-light fa-pen"></i>
                                                    </button>
                                                    <button class="removeBtn table__icon delete">
                                                        <i class="fa-regular fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="employee-profile.html" class="flex-center">
                                                    <img class="img-36 border-circle"
                                                        src="assets/images/avatar/avatar8.png" alt="img">
                                                    <span>James Lee</span></a>
                                            </td>
                                            <td>Unprofessional Conduct</td>
                                            <td>Sep 10, 2024</td>
                                            <td>Displaying unprofessional behavior in meetings.</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon edit"
                                                        data-bs-toggle="modal" data-bs-target="#warningEdit">
                                                        <i class="fa-sharp fa-light fa-pen"></i>
                                                    </button>
                                                    <button class="removeBtn table__icon delete">
                                                        <i class="fa-regular fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="employee-profile.html" class="flex-center">
                                                    <img class="img-36 border-circle"
                                                        src="assets/images/avatar/avatar9.png" alt="img">
                                                    <span>Johnson Perez</span></a>
                                            </td>
                                            <td>Harassment Complaint</td>
                                            <td>Oct 22, 2024</td>
                                            <td>Accused of harassing a colleague.</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon edit"
                                                        data-bs-toggle="modal" data-bs-target="#warningEdit">
                                                        <i class="fa-sharp fa-light fa-pen"></i>
                                                    </button>
                                                    <button class="removeBtn table__icon delete">
                                                        <i class="fa-regular fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="employee-profile.html" class="flex-center">
                                                    <img class="img-36 border-circle"
                                                        src="assets/images/avatar/avatar10.png" alt="img">
                                                    <span>Daniel King</span></a>
                                            </td>
                                            <td>Conflict of Interest</td>
                                            <td>Nov 05, 2024</td>
                                            <td>Undisclosed personal business conflicting with company interests.</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon edit"
                                                        data-bs-toggle="modal" data-bs-target="#warningEdit">
                                                        <i class="fa-sharp fa-light fa-pen"></i>
                                                    </button>
                                                    <button class="removeBtn table__icon delete">
                                                        <i class="fa-regular fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="employee-profile.html" class="flex-center">
                                                    <img class="img-36 border-circle"
                                                        src="assets/images/avatar/avatar11.png" alt="img">
                                                    <span>Barbara Hill</span></a>
                                            </td>
                                            <td>Insubordination</td>
                                            <td>Dec 12, 2024</td>
                                            <td>Refusal to perform assigned tasks.</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon edit"
                                                        data-bs-toggle="modal" data-bs-target="#warningEdit">
                                                        <i class="fa-sharp fa-light fa-pen"></i>
                                                    </button>
                                                    <button class="removeBtn table__icon delete">
                                                        <i class="fa-regular fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="employee-profile.html" class="flex-center">
                                                    <img class="img-36 border-circle"
                                                        src="assets/images/avatar/avatar12.png" alt="img">
                                                    <span>Kevin Scott</span></a>
                                            </td>
                                            <td>Poor Attendance</td>
                                            <td>Jan 05, 2024</td>
                                            <td>Consistent tardiness and early departures.</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon edit"
                                                        data-bs-toggle="modal" data-bs-target="#warningEdit">
                                                        <i class="fa-sharp fa-light fa-pen"></i>
                                                    </button>
                                                    <button class="removeBtn table__icon delete">
                                                        <i class="fa-regular fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="employee-profile.html" class="flex-center">
                                                    <img class="img-36 border-circle"
                                                        src="assets/images/avatar/avatar13.png" alt="img">
                                                    <span>Laura Hernandez</span></a>
                                            </td>
                                            <td>Unethical Behavior</td>
                                            <td>Feb 20, 2024</td>
                                            <td>Engaging in unethical sales practices.</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon edit"
                                                        data-bs-toggle="modal" data-bs-target="#warningEdit">
                                                        <i class="fa-sharp fa-light fa-pen"></i>
                                                    </button>
                                                    <button class="removeBtn table__icon delete">
                                                        <i class="fa-regular fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="employee-profile.html" class="flex-center">
                                                    <img class="img-36 border-circle"
                                                        src="assets/images/avatar/avatar14.png" alt="img">
                                                    <span>Brian Lopez</span></a>
                                            </td>
                                            <td>Misuse of Company Resources</td>
                                            <td>Mar 28, 2024</td>
                                            <td>Using company assets for personal gain.</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon edit"
                                                        data-bs-toggle="modal" data-bs-target="#warningEdit">
                                                        <i class="fa-sharp fa-light fa-pen"></i>
                                                    </button>
                                                    <button class="removeBtn table__icon delete">
                                                        <i class="fa-regular fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="employee-profile.html" class="flex-center">
                                                    <img class="img-36 border-circle"
                                                        src="assets/images/avatar/avatar15.png" alt="img">
                                                    <span>Linda Thompson</span></a>
                                            </td>
                                            <td>Disruptive Behavior</td>
                                            <td>Apr 10, 2024</td>
                                            <td>Causing disturbances during work hours.</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon edit"
                                                        data-bs-toggle="modal" data-bs-target="#warningEdit">
                                                        <i class="fa-sharp fa-light fa-pen"></i>
                                                    </button>
                                                    <button class="removeBtn table__icon delete">
                                                        <i class="fa-regular fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="employee-profile.html" class="flex-center">
                                                    <img class="img-36 border-circle"
                                                        src="assets/images/avatar/avatar16.png" alt="img">
                                                    <span>Mark Harris</span></a>
                                            </td>
                                            <td>Data Breach</td>
                                            <td>May 17, 2024</td>
                                            <td>Unauthorized access to confidential data.</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon edit"
                                                        data-bs-toggle="modal" data-bs-target="#warningEdit">
                                                        <i class="fa-sharp fa-light fa-pen"></i>
                                                    </button>
                                                    <button class="removeBtn table__icon delete">
                                                        <i class="fa-regular fa-trash"></i>
                                                    </button>
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