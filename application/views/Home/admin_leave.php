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
        <?php if (empty($leaves)) : ?>
            <tr>
                <td colspan="9" class="text-center"><h4>Data Not Found</h4></td>
            </tr>
        <?php else : ?>
            <?php $srno = 1; ?>
            <?php foreach ($leaves as $item) : ?>
                <?php
                $emp_id = $item->employee_id;
                $empdata = $this->db->get_where("employee", ["empid" => $emp_id])->row();
                $name = isset($empdata->name) ? $empdata->name : 'N/A';

                $leavetypedata = $this->db->get_where("tbl_leavetype", ["id" => $item->leavetype_id])->row();
                $leavetype = isset($leavetypedata->leavetype) ? $leavetypedata->leavetype : 'N/A';

                $fromdate = new DateTime($item->from_date);
                $todate = new DateTime($item->to_date);
                $from_date = $fromdate->format('d M, y');
                $to_date = $todate->format('d M, y');

                $daysDifference = $todate->diff($fromdate)->days + 1;

                $leave_status = $item->leave_status;
                $buttonClass = 'btn btn-sm btn-pill';
                switch ($leave_status) {
                    case 'pending':
                        $buttonClass .= ' btn-primary';
                        break;
                    case 'approved':
                        $buttonClass .= ' btn-success';
                        break;
                    case 'rejected':
                        $buttonClass .= ' btn-danger';
                        break;
                    default:
                        $buttonClass .= ' btn-secondary';
                        break;
                }
                ?>
                <tr>
                    <td><?php echo $srno; ?></td>
                    <td>
                        <div class="table-avatar">
                            <a href="profile.html"><?php echo $name; ?></a>
                        </div>
                    </td>
                    <td class="table__employee-position">Product Manager</td>
                    <td class="table__leave-type"><?php echo $leavetype; ?></td>
                    <td class="table__leave-duration">
                        From: <span class="text-dark"><?php echo $from_date; ?></span><br>
                        To: <span class="text-dark"><?php echo $to_date; ?></span>
                    </td>
                    <td><?php echo $daysDifference; ?> Days</td>
                    <td class="table__leave-reason"><?php echo isset($item->reason) ? $item->reason : 'N/A'; ?></td>

                    <td>
                        <?php if ($leave_status === 'pending') : ?>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pending
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item approved-button" data-id="<?php echo $item->id; ?>" style="cursor: pointer;">Approve</a>
                                    <a class="dropdown-item rejected-button" data-id="<?php echo $item->id; ?>" style="cursor: pointer;">Reject</a>
                                </div>
                            </div>
                        <?php else : ?>
                            <button class="<?php echo $buttonClass; ?> leave-status-btn" data-id="<?php echo $item->id; ?>">
                                <?php echo ucfirst($leave_status); ?>
                            </button>
                        <?php endif; ?>
                    </td>


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
                <?php $srno++; ?>
            <?php endforeach; ?>
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
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
    <!-- HTML Structure -->
<div class="dropdown">
    <button class="btn btn-sm btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Pending
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item approved-button" data-id="<?php echo $item->id; ?>" style="cursor: pointer;">Approve</a>
        <a class="dropdown-item rejected-button" data-id="<?php echo $item->id; ?>" style="cursor: pointer;">Reject</a>
    </div>
</div>

<!-- JavaScript/jQuery Code -->
<script>
$(document).ready(function() {
    // Initialize all dropdowns
    $('.dropdown-toggle').dropdown();
    
    // Manual dropdown toggle if Bootstrap dropdown isn't working
    $(document).on('click', '.dropdown-toggle', function(e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).parent().toggleClass('show');
        $(this).next('.dropdown-menu').toggleClass('show');
    });
    
    // Close dropdown when clicking outside
    $(document).on('click', function(e) {
        if (!$(e.target).closest('.dropdown').length) {
            $('.dropdown-menu').removeClass('show');
            $('.dropdown').removeClass('show');
        }
    });

    // Approved
    $(document).on('click', '.approved-button', function() {
        var leaveId = $(this).data('id');
        alert(leaveId);
        Swal.fire({
            title: 'Are you sure?',
            text: "Do you want to approve this leave?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Approve it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?php echo base_url('Manager/Approved')?>",
                    type: 'POST',
                    data: { id: leaveId },
                    success: function(response) {
                        response = JSON.parse(response);
                        if (response.status === 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: response.msg,
                                showConfirmButton: false,
                                timer: 1500
                            }).then(() => {
                                location.reload();
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: response.msg
                            });
                        }
                    }
                });
            }
        });
    });

    // Rejected
    $(document).on('click', '.rejected-button', function() {
        var leaveId = $(this).data('id');

        Swal.fire({
            title: 'Are you sure?',
            text: "Do you want to reject this leave?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Reject it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?php echo base_url('Manager/Rejected')?>",
                    type: 'POST',
                    data: { id: leaveId },
                    success: function(response) {
                        response = JSON.parse(response);
                        if (response.status === 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: response.msg,
                                showConfirmButton: false,
                                timer: 1500
                            }).then(() => {
                                location.reload();
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: response.msg
                            });
                        }
                    }
                });
            }
        });
    });
});
</script>
    </script>
</body>

</html>
<?php include 'includes/modal.php'; ?>