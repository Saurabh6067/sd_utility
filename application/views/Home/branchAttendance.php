<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Branch Attandance</title>
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
                                <li class="breadcrumb-item active" aria-current="page">Branch Attendance</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="card__wrapper">
                            <div class="d-flex align-items-center gap-sm">
                                <div class="card__icon">
                                    <span><i class="fa-sharp fa-regular fa-user"></i></span>
                                </div>
                                <div class="card__title-wrap">
                                    <h6 class="card__sub-title mb-10">Current Month Year</h6>
                                    <div class="card__content">
                                        <h3 class="card__title mb-5"><?= $month_name . ' ' . $current_year ?? '0' ?>
                                        </h3>
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
                                    <h6 class="card__sub-title mb-10">Total Days</h6>
                                    <div class="card__content">
                                        <h3 class="card__title mb-5"><?= $total_days ?? '0' ?>
                                        </h3>
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
                                    <h6 class="card__sub-title mb-10">Total Employee</h6>
                                    <div class="card__content">
                                        <h3 class="card__title mb-5"><?= $totalbranch_emp ?? '0' ?></h3>
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
                                    <h6 class="card__sub-title mb-10">Total Present</h6>
                                    <div class="card__content">
                                        <h3 class="card__title mb-5"><?= $totalbranch_present ?? '0' ?>
                                        </h3>
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
                                    <h6 class="card__sub-title mb-10">Total Half Day</h6>
                                    <div class="card__content">
                                        <h3 class="card__title mb-5"><?= $totalbranch_halfday ?? '0' ?>
                                        </h3>
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
                                    <h6 class="card__sub-title mb-10">Total Absent</h6>
                                    <div class="card__content">
                                        <h3 class="card__title mb-5"><?= $totalbranch_absent ?? '0' ?>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-12">
                        <div class="card__wrapper">
                            <div class="row g-20 gy-20 mb-20 justify-content-between align-items-end">
                                <div class="col-md-12">
                                    <div class="d-flex align-items-center">
                                        <h6 class="">Note:</h6>
                                        <div class="attendant__info-wrapper">
                                            <div class="attendant__info-icon">
                                                <i class="fa fa-calendar-week text-secondary"></i>
                                                <span class="attachment__info-arrow"><i
                                                        class="fa fa-arrow-right text-lightest"></i></span>
                                                <h6 class="text-dark small">Day Off</h6>
                                            </div>
                                            <div class="attendant__info-icon">
                                                <span class="attachment__info-arrow">
                                                    <p class="text-success fw-400">1</p>
                                                </span>
                                                <h6 class="text-dark small">Present</h6>
                                            </div>
                                            <div class="attendant__info-icon">
                                                <i class="fa fa-star-half-alt text-info"></i>
                                                <span class="attachment__info-arrow"><i
                                                        class="fa fa-arrow-right text-lightest"></i></span>
                                                <h6 class="text-dark small">Half Day</h6>
                                            </div>
                                            <div class="attendant__info-icon">
                                                <i class="fa fa-times text-danger"></i>
                                                <span class="attachment__info-arrow"><i
                                                        class="fa fa-arrow-right text-lightest"></i></span>
                                                <h6 class="text-dark small">Absent</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $current_month = date('m');
                            $current_year = date('Y');
                            $total_days = cal_days_in_month(CAL_GREGORIAN, $current_month, $current_year);
                            $current_day = date('j'); // Get today's date (without leading zero)
                            $month_name = date('F'); // Get full month name
                            
                            // Fetch employees
                            // $employees = $this->db->where('branch', $branch_id)->get('employee')->result_array();
                            $employees = $this->db->where('bank_branch_name', $branch_id)->get('employee')->result_array();
                            
                            // Fetch attendance records for the current month
                            $attendance_data = $this->db->query("
                            SELECT user_id, DAY(today_date) as day, remark
                            FROM attendance 
                            WHERE branch_id = '$branch_id' 
                            AND MONTH(today_date) = '$current_month' 
                            AND YEAR(today_date) = '$current_year'
                            ")->result_array();

                            // Organize attendance records in an associative array
                            $attendance_map = [];
                            foreach ($attendance_data as $row) {
                                $attendance_map[$row['user_id']][$row['day']] = $row['remark'];
                            }

                            // Find Sundays in the current month
                            $sundays = [];
                            for ($day = 1; $day <= $total_days; $day++) {
                                if (date('N', strtotime("$current_year-$current_month-$day")) == 7) { // Sunday
                                    $sundays[] = $day;
                                }
                            }
                            ?>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-nowrap mb-0" id="dataTableDefualt">
                                            <thead>
                                                <tr>
                                                    <th>Employee</th>
                                                    <th>Month</th> <!-- ✅ Added new column for Month Name -->
                                                    <?php for ($i = 1; $i <= $total_days; $i++) {
                                                        $dayName = date('D', strtotime("$current_year-$current_month-$i"));
                                                        $is_sunday = in_array($i, $sundays);
                                                        ?>
                                                        <th class="<?= $is_sunday ? 'bg-warning text-dark' : '' ?>">
                                                            <?= $i ?> <br> <small><?= $dayName ?></small>
                                                        </th>
                                                    <?php } ?>
                                                    <th>Total Days</th> <!-- ✅ New column for total working days -->
                                                    <th>Present</th> <!-- ✅ New column for total present days -->
                                                    <th>Absent</th> <!-- ✅ New column for total absent days -->
                                                    <th>Half Day</th> <!-- ✅ New column for total half days -->
                                                </tr>
                                            </thead>
                                            <tbody class="table__body">
                                                <?php foreach ($employees as $emp) {
                                                    $total_present = 0;
                                                    $total_absent = 0;
                                                    $total_half_day = 0;
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <span class="table-avatar">
                                                                <a href="#"><?= $emp['name'] ?></a>
                                                            </span>
                                                        </td>
                                                        <td><?= $month_name ?></td> <!-- ✅ Month Name added -->
                                                        <?php for ($day = 1; $day <= $total_days; $day++) {
                                                            $is_sunday = in_array($day, $sundays);

                                                            // ✅ Future dates should remain blank
                                                            if ($day > $current_day) {
                                                                $status = '';
                                                            } else {
                                                                $status = isset($attendance_map[$emp['id']][$day]) ? $attendance_map[$emp['id']][$day] : 'Absent';
                                                            }

                                                            // ✅ Status numeric conversion & color-coding
                                                            $status_text = '';
                                                            $status_class = '';

                                                            if ($status == 'Full Day') {
                                                                $status_text = '1'; // ✅ Present
                                                                $status_class = 'text-success'; // ✅ Green
                                                                $total_present++; // ✅ Count Present
                                                            } elseif ($status == 'Half Day') {
                                                                $status_text = '0.5'; // ✅ Half Day
                                                                $status_class = 'text-warning'; // ✅ Orange
                                                                $total_half_day++; // ✅ Count Half Days
                                                            } elseif ($status == 'Absent') {
                                                                $status_text = '0'; // ✅ Absent
                                                                $status_class = 'text-danger'; // ✅ Red
                                                                $total_absent++; // ✅ Count Absent
                                                            }
                                                            ?>
                                                            <td class="<?= $is_sunday ? 'bg-warning text-dark' : '' ?>">
                                                                <span class="<?= $status_class ?>"><?= $status_text ?></span>
                                                            </td>
                                                        <?php } ?>
                                                        <td><?= $total_days ?></td> <!-- ✅ Total working days -->
                                                        <td class="text-success"><?= $total_present ?></td>
                                                        <!-- ✅ Total Present -->
                                                        <td class="text-danger"><?= $total_absent ?></td>
                                                        <!-- ✅ Total Absent -->
                                                        <td class="text-warning"><?= $total_half_day ?></td>
                                                        <!-- ✅ Total Half Days -->
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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