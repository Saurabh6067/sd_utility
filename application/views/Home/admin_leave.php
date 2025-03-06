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
                                            <th>Sr</th>
                                            <th>Employee Name</th>
                                            <th>Designation</th>
                                            <th>Leave Type</th>
                                            <th>Date & Time</th>
                                            <th>Leave Duration</th>
                                            <th>Reason</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table__body">
                                    <?php
                                        if (empty($leaves)) {
                                        ?>
                                            <h4>Data Not Found</h4>
                                            <?php
                                        } else {
                                            $srno = 1;
                                            foreach ($leaves as $item) {
                                            ?>
                                        <tr>
                                            <td><?= $srno; ?></td>
                                            <td>
                                                <div class="table-avatar">
                                                <?php
                                                    $emp_id = $item->employee_id;
                                                    $empdata = $this->db->get_where("employee", array("id" => $emp_id))->row();
                                                    $name = isset($empdata->name) ? $empdata->name : 'N/A';
                                                    $leavetypedata = $this->db->get_where("tbl_leavetype", array("id" => $item->leavetype_id))->row();
                                                    $leavetype = isset($leavetypedata->leavetype) ? $leavetypedata->leavetype : 'N/A';
                                                    ?>
                                                    <a href="profile.html"><?= $name; ?></a>
                                                </div>
                                            </td>
                                            <td class="table__employee-position">Product Manager</td>
                                            <td class="table__leave-type"><?= $leavetype; ?></td>
                                            <td class="table__leave-duration">from: <span class="text-dark">
                                                    <?php
                                                    $fromdate = $item->from_date;
                                                    $todate = $item->to_date;
                                                    $date = new DateTime($fromdate);
                                                    $date2 = new DateTime($todate);
                                                    $from_date = $date->format('d M, y');
                                                    $to_date = $date2->format('d M, y');
                                                    echo $from_date;
                                                    $startDate = new DateTime($fromdate);
                                                    $endDate = new DateTime($todate);
                                                    $daysDifference = $endDate->diff($startDate)->days + 1;
                                                    ?>
                                                </span> <br>
                                                to: <span class="text-dark"><?= $to_date; ?></span>
                                            </td>
                                            <td><?= $daysDifference; ?> Days</td>
                                            <td class="table__leave-rason"><?= isset($item->reason) ? $item->reason : ''; ?></td>
                                            <!-- <td class="table__delivery"><span
                                                    class="bd-badge bg-success">Approved</span></td> -->

                                                    <?php
                                                    // Assuming $item->status contains the status value ('pending', 'approved', 'rejected')
                                                    $status = $item->status;
                                                    $buttonClass = 'btn btn-sm btn-pill';
                                                    switch ($status) {
                                                        case 'Pending':
                                                            $buttonClass .= ' btn-primary';
                                                            break;
                                                        case 'Approved':
                                                            $buttonClass .= ' btn-success'; 
                                                            break;
                                                        case 'Rejected':
                                                            $buttonClass .= ' btn-danger';
                                                            break;
                                                        default:
                                                            $buttonClass .= ' btn-secondary'; 
                                                            break;
                                                    }
                                                    ?>
                                                    <td class="table__delivery"><button class="<?= $buttonClass ?>"><?= $status ?></button></td>

                                            <td class="table__icon-box">
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <a href="#" class="table__icon edit">
                                                        <i class="fa-sharp fa-light fa-pen"></i>
                                                    </a>
                                                    <button class="removeBtn table__icon delete">
                                                        <i class="fa-regular fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                                $srno++;
                                            }
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

</body>

</html>
<?php include 'includes/modal.php'; ?>