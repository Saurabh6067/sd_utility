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
                                <li class="breadcrumb-item active" aria-current="page">Employee Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-7">
                        <div class="card__wrapper height-equal">
                            <div class="employee__profile-single-box p-relative">
                                <div class="card__title-wrap d-flex align-items-center justify-content-between mb-15">
                                    <h5 class="card__heading-title">Personal Information</h5>
                                    <a data-bs-target="#profile__info" data-bs-toggle="modal" class="edit-icon"
                                        href="#">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>
                                </div>
                                <div class="profile-view d-flex flex-wrap justify-content-between align-items-start">
                                    <div class="d-flex flex-wrap align-items-start gap-20">
                                        <div class="profile-img-wrap">
                                            <div class="profile-img">
                                                <a href="#"><img
                                                        src="<?= base_url('assets/Home/images/avatar/avatar1.png') ?>"
                                                        alt="User Image"></a>
                                            </div>
                                        </div>
                                        <div class="profile-info">
                                            <h3 class="user-name mb-15">Ethan Mitchell</h3>
                                            <h6 class="text-muted mb-5">UI/UX Design Team</h6>
                                            <!-- <span class="d-block text-muted mb-5">Web Designer</span> -->
                                            <h6 class="small employee-id text-black mb-5">Employee ID : MD-0001</h6>
                                            <span class="d-block text-muted mb-20">Date of Join : 05 01 2024</span>
                                            <!-- <div class="employee-msg"><a class="btn btn-primary" href="chat.html">Send
                                                    Message</a></div> -->
                                        </div>
                                    </div>
                                    <div class="personal-info-wrapper pr-20">
                                        <ul class="personal-info">
                                            <li>
                                                <div class="title">Phone:</div>
                                                <div class="text text-link-hover"><a href="tel:+1234567890"> +91 1234
                                                        567890</a></div>
                                            </li>
                                            <li>
                                                <div class="title">Email:</div>
                                                <div class="text text-link-hover"><a href="">employee@gmail.com</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="title">Birthday:</div>
                                                <div class="text">28 December 1992</div>
                                            </li>
                                            <li>
                                                <div class="title">Address:</div>
                                                <div class="text">100 Terminal, Fort Lauderdale, Miami 33315, United
                                                    States</div>
                                            </li>
                                            <li>
                                                <div class="title">Gender:</div>
                                                <div class="text">Male</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5">
                        <div class="card__wrapper height-equal">
                            <div class="employee__profile-single-box p-relative">
                                <div class="card__title-wrap d-flex align-items-center justify-content-between mb-15">
                                    <h5 class="card__heading-title">Emergency Contact</h5>
                                    <a href="#" class="edit-icon" data-bs-toggle="modal"
                                        data-bs-target="#emergency_contact_modal">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="emergency-contact">
                                            <h6 class="card__sub-title mb-10">Primary Contact</h6>
                                            <ul class="personal-info">
                                                <li>
                                                    <div class="title">Name:</div>
                                                    <div class="text">John Doe</div>
                                                </li>
                                                <li>
                                                    <div class="title">Relationship:</div>
                                                    <div class="text">Father</div>
                                                </li>
                                                <li>
                                                    <div class="title">Phone:</div>
                                                    <div class="text text-link-hover"><a
                                                            href="tel:9876543210">9876543210</a>, <a
                                                            href="tel:9876543210">9876543210</a></div>
                                                </li>
                                                <li>
                                                    <div class="title">Email:</div>
                                                    <div class="text text-link-hover"><a
                                                            href="/cdn-cgi/l/email-protection#a7c1c6d3cfc2d5e7c2dfc6cad7cbc289c4c8ca"><span
                                                                class="__cf_email__"
                                                                data-cfemail="523433263a372012372a333f223e377c313d3f">[email&#160;protected]</span></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">Address:</div>
                                                    <div class="text">150, New York</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="emergency-contact">
                                            <h6 class="card__sub-title mb-10">Secondary Contact</h6>
                                            <ul class="personal-info">
                                                <li>
                                                    <div class="title">Name:</div>
                                                    <div class="text">Jane Doe</div>
                                                </li>
                                                <li>
                                                    <div class="title">Relationship:</div>
                                                    <div class="text">Mother</div>
                                                </li>
                                                <li>
                                                    <div class="title">Phone:</div>
                                                    <div class="text text-link-hover"><a
                                                            href="tel:9876543211">9876543211</a>, <a
                                                            href="tel:9876543211">9876543211</a></div>
                                                </li>
                                                <li>
                                                    <div class="title">Email:</div>
                                                    <div class="text text-link-hover"><a
                                                            href="/cdn-cgi/l/email-protection#7a17150e121f083a1f021b170a161f54191517"><span
                                                                class="__cf_email__"
                                                                data-cfemail="5f32302b373a2d1f3a273e322f333a713c3032">[email&#160;protected]</span></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">Address:</div>
                                                    <div class="text">150, New York</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6">
                        <div class="card__wrapper">
                            <div class="employee__profile-single-box p-relative">
                                <div class="card__title-wrap d-flex align-items-center justify-content-between mb-15">
                                    <h5 class="card__heading-title">Education Qualification</h5>
                                    <a href="#" class="edit-icon" data-bs-toggle="modal"
                                        data-bs-target="#education__info">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>
                                </div>
                                <div class="education__box">
                                    <ul class="education__list">
                                        <li>
                                            <div class="education__user">
                                                <div class="before__circle"></div>
                                            </div>
                                            <div class="education__content">
                                                <div class="timeline-content">
                                                    <a href="#" class="name">International College of Arts and Science
                                                        (UG)</a>
                                                    <span class="degree">MSc In Computer Science</span>
                                                    <span class="year">2000 - 2003</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="education__user">
                                                <div class="before__circle"></div>
                                            </div>
                                            <div class="education__content">
                                                <div class="timeline-content">
                                                    <a href="#" class="name">International College of Arts and Science
                                                        (PG)</a>
                                                    <span class="degree">BSc In Computer Science</span>
                                                    <span class="year">2000 - 2003</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="education__user">
                                                <div class="before__circle"></div>
                                            </div>
                                            <div class="education__content">
                                                <div class="timeline-content">
                                                    <a href="#" class="name">International College of Arts and Science
                                                        (PG)</a>
                                                    <span class="degree">Bsc Computer Science</span>
                                                    <span class="year">2000 - 2003</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6">
                        <div class="card__wrapper">
                            <div class="employee__profile-single-box p-relative">
                                <div class="card__title-wrap d-flex align-items-center justify-content-between mb-15">
                                    <h5 class="card__heading-title">Experience Details</h5>
                                    <a href="#" class="edit-icon" data-bs-toggle="modal"
                                        data-bs-target="#experience__info">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>
                                </div>
                                <div class="education__box">
                                    <ul class="education__list">
                                        <li>
                                            <div class="education__user">
                                                <div class="before__circle"></div>
                                            </div>
                                            <div class="education__content">
                                                <div class="timeline-content">
                                                    <a href="#" class="name">Envato Inc, Melbourne</a>
                                                    <span class="degree">Head Of Review Team</span>
                                                    <span class="year">2020 - Present</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="education__user">
                                                <div class="before__circle"></div>
                                            </div>
                                            <div class="education__content">
                                                <div class="timeline-content">
                                                    <a href="#" class="name">CodeCanyon Sydney</a>
                                                    <span class="degree">Software Developer</span>
                                                    <span class="year">2016 - 2018</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="education__user">
                                                <div class="before__circle"></div>
                                            </div>
                                            <div class="education__content">
                                                <div class="timeline-content">
                                                    <a href="#" class="name">Facebook Inc, California</a>
                                                    <span class="degree">Junior Software Developer</span>
                                                    <span class="year">2011 - 2016</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4">
                        <div class="card__wrapper">
                            <div class="employee__profile-single-box p-relative">
                                <div class="card__title-wrap d-flex align-items-center justify-content-between mb-15">
                                    <h5 class="card__heading-title">Bank Account</h5>
                                    <a href="#" class="edit-icon" data-bs-toggle="modal"
                                        data-bs-target="#bank__account__info">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>
                                </div>
                                <div class="personal-info-wrapper bank__account">
                                    <ul class="personal-info">
                                        <li>
                                            <div class="title">Account Holder Name:</div>
                                            <div class="text">Ethan Mitchell</div>
                                        </li>
                                        <li>
                                            <div class="title">Account Number:</div>
                                            <div class="text">123456789</div>
                                        </li>
                                        <li>
                                            <div class="title">Bank Name:</div>
                                            <div class="text">ABC Bank</div>
                                        </li>
                                        <li>
                                            <div class="title">Branch Name:</div>
                                            <div class="text">XYZ Branch</div>
                                        </li>
                                        <li>
                                            <div class="title">SWIFT Code:</div>
                                            <div class="text">ABCXYZ123</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4">
                        <div class="card__wrapper">
                            <div class="employee__profile-single-box p-relative">
                                <div class="card__title-wrap d-flex align-items-center justify-content-between mb-15">
                                    <h5 class="card__heading-title">Passport Information</h5>
                                    <a href="#" class="edit-icon" data-bs-toggle="modal"
                                        data-bs-target="#passport__info">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>
                                </div>
                                <div class="personal-info-wrapper bank__account">
                                    <ul class="personal-info">
                                        <li>
                                            <div class="title">Passport Number:</div>
                                            <div class="text">A1234567</div>
                                        </li>
                                        <li>
                                            <div class="title">Nationality:</div>
                                            <div class="text">American</div>
                                        </li>
                                        <li>
                                            <div class="title">Issue Date:</div>
                                            <div class="text">01 Jan 2010</div>
                                        </li>
                                        <li>
                                            <div class="title">Expiry Date:</div>
                                            <div class="text">01 Jan 2025</div>
                                        </li>
                                        <li>
                                            <div class="title">Scan Copy:</div>
                                            <div class="text"><a href="#">passport.pdf</a></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4">
                        <div class="card__wrapper">
                            <div class="employee__profile-single-box p-relative">
                                <div class="card__title-wrap d-flex align-items-center justify-content-between mb-15">
                                    <h5 class="card__heading-title">Social Profile</h5>
                                    <a href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#social__info">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>
                                </div>
                                <div class="personal-info-wrapper bank__account">
                                    <ul class="personal-info">
                                        <li>
                                            <div class="title">LinkedIn:</div>
                                            <div class="text text-link-hover"><a href="#">Ethan Mitchell</a></div>
                                        </li>
                                        <li>
                                            <div class="title">Twitter:</div>
                                            <div class="text text-link-hover"><a href="#">Ethan Mitchell</a></div>
                                        </li>
                                        <li>
                                            <div class="title">Facebook:</div>
                                            <div class="text text-link-hover"><a href="#">Ethan Mitchell</a></div>
                                        </li>
                                        <li>
                                            <div class="title">Instagram:</div>
                                            <div class="text text-link-hover"><a href="#">Ethan Mitchell</a></div>
                                        </li>
                                        <li>
                                            <div class="title">WhatsApp:</div>
                                            <div class="text text-link-hover"><a href="#">123456789</a></div>
                                        </li>
                                    </ul>
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