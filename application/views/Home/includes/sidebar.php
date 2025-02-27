<?php
$user = $this->session->userdata('user');
$user_role = $user['role'];
?>

<div class="app-sidebar" id="sidebar">
    <div class="main-sidebar-header">
        <a href="index.html" class="header-logo">
            <!-- <img class="main-logo" src="assets/images/logo/sd-logo.png" alt="logo">
                    <img class="dark-logo" src="assets/images/logo/sd-logo.png" alt="logo"> -->
            <h3>SD Utility</h3>
        </a>
    </div>
    <div class="main-sidebar" id="sidebar-scroll">
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="sidebar-left" id="sidebar-left"></div>
            <ul class="main-menu">
                <li class="sidebar__menu-category"><span class="category-name">Main</span></li>
                <li class="slide">
                    <a href="<?= base_url('Admin') ?>" class="sidebar__menu-item">
                        <div class="side-menu__icon"><i class="icon-house"></i></div>
                        <span class="sidebar__menu-label">Dashboard</span>
                    </a>
                </li>

                <?php if ($user_role === 'Admin'):  ?>
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="sidebar__menu-item">
                            <i class="fa-regular fa-angle-down side-menu__angle"></i>
                            <div class="side-menu__icon"><i class="icon-hrm"></i></div>
                            <span class="sidebar__menu-label">HRM</span>
                        </a>
                        <ul class="sidebar-menu child1">
                            <li class="slide">
                                <a class="sidebar__menu-item" href="<?= base_url('Admin/Operation') ?>">Operation</a>
                            </li>
                            <li class="slide">
                                <a class="sidebar__menu-item" href="<?= base_url('Admin/Branch') ?>">Branch</a>
                            </li>
                            <li class="slide">
                                <a class="sidebar__menu-item" href="<?= base_url('Admin/Employeadd') ?>">Employee</a>
                            </li>
                            <li class="slide">
                                <a class="sidebar__menu-item" href="<?= base_url('Admin/Allempprofile') ?>">Employee
                                    Profile</a>
                            </li>

                            <li class="slide">
                                <a class="sidebar__menu-item" href="<?= base_url('Admin/Attendance') ?>">Attendance</a>
                            </li>

                            <li class="slide">
                                <a class="sidebar__menu-item" href="<?= base_url('Admin/Leave') ?>">leaves</a>
                            </li>
                            <li class="slide">
                                <a class="sidebar__menu-item" href="<?= base_url('Admin/AddLeaveType') ?>">Add Leave
                                    Type</a>
                            </li>

                            <li class="slide">
                                <a class="sidebar__menu-item" href="<?= base_url('Admin/Addwarning') ?>">Warning</a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="sidebar__menu-item">
                        <i class="fa-regular fa-angle-down side-menu__angle"></i>
                        <div class="side-menu__icon"><i class="icon-hrm"></i></div>
                        <span class="sidebar__menu-label">Branch Panel</span>
                    </a>
                    <ul class="sidebar-menu child1">
                        <li class="slide">
                            <a class="sidebar__menu-item" href="<?= base_url('Admin/EmpDashbaord') ?>">Dashboard</a>
                        </li>
                        <li class="slide">
                            <a class="sidebar__menu-item"
                                href="<?= base_url('Admin/branchAttendance') ?>">Attendance</a>
                        </li>
                        <li class="slide">
                            <a class="sidebar__menu-item" href="<?= base_url('Admin/EmpLeave') ?>">Employee leaves</a>
                        </li>
                    </ul>
                </li>
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="sidebar__menu-item">
                        <i class="fa-regular fa-angle-down side-menu__angle"></i>
                        <div class="side-menu__icon"><i class="icon-hrm"></i></div>
                        <span class="sidebar__menu-label">Employee Panel</span>
                    </a>
                    <ul class="sidebar-menu child1">
                        <li class="slide">
                            <a class="sidebar__menu-item" href="<?= base_url('Admin/EmpAttendance') ?>">Attendance</a>
                        </li>
                        <li class="slide">
                            <a class="sidebar__menu-item" href="<?= base_url('Admin/EmpLeave') ?>">Employee leaves</a>
                        </li>
                    </ul>
                </li>
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="sidebar__menu-item">
                        <i class="fa-regular fa-angle-down side-menu__angle"></i>
                        <div class="side-menu__icon"><i class="icon-hrm"></i></div>
                        <span class="sidebar__menu-label">Assets Management</span>
                    </a>
                    <ul class="sidebar-menu child1">
                        <li class="slide">
                            <a class="sidebar__menu-item" href="assets_management.html">Manage Assets</a>
                        </li>
                        <li class="slide">
                            <a class="sidebar__menu-item" href="complian_assets.html">Complian Of Assets</a>
                        </li>
                        <li class="slide">
                            <a class="sidebar__menu-item" href="leaves-employee.html">Employee leaves</a>
                        </li>
                    </ul>
                </li>
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="sidebar__menu-item">
                        <i class="fa-regular fa-angle-down side-menu__angle"></i>
                        <div class="side-menu__icon"><i class="icon-tickets1"></i></div>
                        <span class="sidebar__menu-label">Complain</span>
                    </a>
                    <ul class="sidebar-menu child1">
                        <li class="slide"><a class="sidebar__menu-item" href="tickets.html">Complain List</a>
                        </li>
                        <li class="slide"><a class="sidebar__menu-item" href="tickets-reply.html">Complain
                                Reply</a></li>
                    </ul>
                </li>
            </ul>
            <div class="sidebar-right" id="sidebar-right"></div>
        </nav>
    </div>
</div>