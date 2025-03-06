<!-- Add Operation Modal -->
<div class="modal fade" id="addoperation" tabindex="-1" aria-labelledby="addNewEmployeeLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNewEmployeeLabel">Add New Operation</h5>
                <button type="button" class="bd-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark-large"></i></button>
            </div>
            <div class="modal-body">
                <form id="circleForm" action="#" method="post">
                    <div class="card__wrapper">
                        <div class="row gy-20">
                            <div class="col-lg-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="circleName">Circle Name <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="circleName" id="circleName" type="text"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="circleAddress">Circle Address <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="circleAddress" id="circleAddress" type="text"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="latitude">Latitude <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="latitude" id="latitude" type="text" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="longitude">Longitude <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="longitude" id="longitude" type="text"
                                            required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit__btn d-flex align-items-center justify-content-end gap-10">
                        <button type="button" class="btn btn-danger" id="cancelButton">Clear</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Add Operation Modal -->

<!-- Edit Operation Modal  -->
<div id="meetingEdit" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Circle</h5>
                <button type="button" class="bd-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark-large"></i></button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <input type="text" id="modalRecordId" name="record_id">


                    <div class="card__wrapper">
                        <div class="row gy-20">
                            <div class="col-lg-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="meetingTitle2">Circle Name <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="meetingTitle2" id="meetingTitle2" type="text"
                                            value="Circle Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label>Circle Address <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="meetingTitle2" id="meetingTitle2" type="text"
                                            value="Circle Address">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label>Latitude <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="meetingTitle2" id="meetingTitle2" type="text"
                                            value="Latitude">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label>Longitude <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="meetingTitle2" id="meetingTitle2" type="text"
                                            value="Longitude">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit__btn d-flex align-items-center justify-content-end gap-10">
                        <button class="btn btn-danger">Cancel</button>
                        <button class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Operation Modal -->

<!-- Add Leave type Modal -->
<div class="modal fade" id="addleavetype" tabindex="-1" aria-labelledby="addNewEmployeeLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNewEmployeeLabel">Add New Leave Type</h5>
                <button type="button" class="bd-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark-large"></i></button>
            </div>
            <div class="modal-body">
                <form id="leaveAddform" action="#" method="post">
                    <div class="card__wrapper">
                        <div class="row gy-20">
                            <div class="col-lg-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="circleName">Leave Type<span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="leavetype" id="leavetype" type="text"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="day">Day<span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="day" id="day" type="number" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit__btn d-flex align-items-center justify-content-end gap-10">
                        <button type="button" class="btn btn-danger" id="cancelButton">Clear</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Add Leave type Modal-->

<!-- Employee leave modal start -->
<div id="requestforleave" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Leave Request</h5>
                <button type="button" class="bd-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark-large"></i></button>
            </div>
            <div class="modal-body">
                <form id="emp_requestforleave" method="post">
                    <div class="row gy-20">
                        <div class="col-xl-12">
                            <div class="card__wrapper mb-20">
                                <div class="row gy-20">
                                    <div class="col-md-6">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label class="form-label">Select Leave Type
                                                    <span>*</span></label>
                                            </div>
                                            <select name="leavetype" class="js-example-basic-singles">
                                                <?php
                                                foreach ($leavetype as $item) {
                                                    ?>
                                                    <option value="<?= $item['id'] ?>"> <?= $item['leavetype'] ?>
                                                    </option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="from__input-box ">
                                            <div class="form__input-title">
                                                <label for="numberDays">Number of days <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <input class="form-control" name="numberDays" id="numberDays"
                                                    type="text" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="from__input-box ">
                                            <div class="form__input-title">
                                                <label for="numberDays">From Date <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <input class="form-control" name="from" id="from" type="date"
                                                    required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="from__input-box ">
                                            <div class="form__input-title">
                                                <label for="numberDays">To Date <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <input class="form-control" name="to" id="to" type="date" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label>Reason <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <textarea class="form-control" name="reason" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit__btn text-center">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Employee leave modal end -->

<!-- Add Leave type Modal -->
<div class="modal fade" id="addassets" tabindex="-1" aria-labelledby="addassetsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addassetsLabel">Add Assets</h5>
                <button type="button" class="bd-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark-large"></i></button>
            </div>
            <div class="modal-body">
                <form id="form_addassets" enctype="multipart/form-data" action="#" method="post">
                    <div class="card__wrapper">
                        <div class="row gy-20">
                            <div class="col-lg-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="circleName">Assets Name<span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="assets" id="assets" type="text"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="day">Assets Image<span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="assetsimg" id="assetsimg" type="file" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit__btn d-flex align-items-center justify-content-end gap-10">
                        <button type="button" class="btn btn-danger" id="cancelButton">Clear</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Add Leave type Modal-->













































<!-- Add Employee Modal Through excel -->
<div class="modal fade" id="addNewEmployeeexcel" tabindex="-1" aria-labelledby="addNewEmployeeLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNewEmployeeLabel">Upload Employee Excel</h5>
                <button type="button" class="bd-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark-large"></i></button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url(); ?>Admin/addEmpExcel" enctype="multipart/form-data"
                    action="<?php base_url('Admin/Addemployee') ?>">
                    <div class="card__wrapper mb-20">
                        <div class="row g-20 gy-20 align-items-center justify-content-center">
                            <div class="col-lg-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="sellerphoto">Upload Employee Excel</label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="uploadFile" id="uploadFile" type="file">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit__btn text-center">
                        <input class="btn btn-primary" type="submit" name="submit" value="Upload" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Add Modal Manually Employee Modal -->






























































<!-- personal information modal start -->
<div id="profile__info" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Profile Information</h5>
                <button type="button" class="bd-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark-large"></i></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="card__wrapper mb-20">
                        <div class="row gy-20">
                            <div class="col-md-12">
                                <div class="employee__profile-chnage">
                                    <div class="employee__profile-edit">
                                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg">
                                        <label for="imageUpload"></label>
                                    </div>
                                    <div class="employee__profile-preview">
                                        <div class="employee__profile-preview-box" id="imagePreview"
                                            style="background-image: url('assets/images/avatar/avatar1.png');">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row gy-20">
                                <div class="col-lg-6">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label for="firstname">First Name
                                                <span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <input class="form-control" name="firstname" id="firstname" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label for="lastname">Last Name</label>
                                        </div>
                                        <div class="form__input">
                                            <input class="form-control" name="lastname" id="lastname" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label for="humanFriendlyDates">Date Of
                                                Birth<span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <input class="form-control" type="date" value="" id="humanFriendlyDates">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label> Gender <span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <select class="form-control">
                                                <option value="male selected">Male
                                                </option>
                                                <option value="female">Female
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label for="employeeId">Employee ID
                                                <span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <input class="form-control" name="employeeId" id="employeeId" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label for="humanFriendlyDates2">Joining Date
                                                <span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <input class="form-control" type="date" value="" id="humanFriendlyDates2">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label for="contactnumber">Contact
                                                Number <span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <input class="form-control" name="contactnumber" id="contactnumber"
                                                type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label for="email">Email
                                                <span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <input class="form-control" name="email" id="email" type="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label for="address">Address
                                                <span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <textarea class="form-control" name="address" id="address"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label>Department
                                                <span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <select class="form-control">
                                                <option value="ITD">Information
                                                    Technology Department</option>
                                                <option value="TD">Technology
                                                    Department</option>
                                                <option value="SD">Security
                                                    Department</option>
                                                <option value="NPD">Network
                                                    Operations Department</option>
                                                <option value="SAD">Systems
                                                    Administration Department
                                                </option>
                                                <option value="DMD">Database
                                                    Management Department</option>
                                                <option value="SDD">Software
                                                    Development Department</option>
                                                <option value="WDD">Web Development
                                                    Department</option>
                                                <option value="PMO">Project
                                                    Management Office</option>
                                                <option value="ITSP">IT Support
                                                    Department</option>
                                                <option value="CD">Consulting
                                                    Department</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label>Employee Designation
                                                <span>*</span></label>
                                        </div>
                                        <div class="form__input">
                                            <select class="form-control">
                                                <option value="ITD">Information
                                                    Technology Department</option>
                                                <option value="TD">Technology
                                                    Department</option>
                                                <option value="SD">Security
                                                    Department</option>
                                                <option value="NPD">Network
                                                    Operations Department</option>
                                                <option value="SAD">Systems
                                                    Administration Department
                                                </option>
                                                <option value="DMD">Database
                                                    Management Department</option>
                                                <option value="SDD">Software
                                                    Development Department</option>
                                                <option value="WDD">Web Development
                                                    Department</option>
                                                <option value="PMO">Project
                                                    Management Office</option>
                                                <option value="ITSP">IT Support
                                                    Department</option>
                                                <option value="CD">Consulting
                                                    Department</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit__btn text-center">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- personal information modal end -->

<!-- emergency contact modal start -->
<div id="emergency_contact_modal" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Personal Information</h5>
                <button type="button" class="bd-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark-large"></i></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="card__wrapper mb-20">
                        <h6 class="card__sub-title mb-10">Primary Contact</h6>
                        <div class="row gy-20">
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="fullName1">Full Name
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="fullName1" id="fullName1" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="relationship">Relationship
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="relationship" id="relationship" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="phoneNumber1">Phone Number
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="phoneNumber1" id="phoneNumber1" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="phoneNumber2">Phone Number 2
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="phoneNumber2" id="phoneNumber2" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="email5">Email Address
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="email5" id="email5" type="email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="address1">Address
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="address1" id="address1" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card__wrapper">
                        <h6 class="card__sub-title mb-10">Secondary Contact</h6>
                        <div class="row gy-20">
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="fullName2">Full Name
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="fullName2" id="fullName2" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="relationship1">Relationship
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="relationship1" id="relationship1" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="phoneNumber3">Phone Number
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="phoneNumber3" id="phoneNumber3" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="phoneNumber4">Phone Number 2
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="phoneNumber4" id="phoneNumber4" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="email6">Email Address
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="email6" id="email6" type="email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="address2">Address
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="address2" id="address2" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit__btn text-center">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- emergency contact modal end -->

<!-- education Qualification modal start -->
<div id="education__info" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Education Information</h5>
                <button type="button" class="bd-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark-large"></i></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="card__wrapper mb-20">
                        <h6 class="card__sub-title mb-10">Higher Degree</h6>
                        <div class="row gy-20">
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="institutionName">Institution Name
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="institutionName" id="institutionName"
                                            type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="degree">Degree
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="degree" id="degree" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="startingDate">Starting Date
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" type="date" value="2024-01-05" id="startingDate">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="completeDate">Complete Date
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" type="date" value="2024-01-05" id="completeDate">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card__wrapper mb-20">
                        <h6 class="card__sub-title mb-10">Bachelor Degree</h6>
                        <div class="row gy-20">
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="institutionName2">Institution Name
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="institutionName2" id="institutionName2"
                                            type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="degree2">Degree
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="degree2" id="degree2" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="startingDate2">Starting Date
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" type="date" value="2024-01-05" id="startingDate2">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="completeDate2">Complete Date
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" type="date" value="2024-01-05" id="completeDate2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card__wrapper">
                        <h6 class="card__sub-title mb-10">Secondary Education</h6>
                        <div class="row gy-20">
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="collageName">Collage Name
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="collageName" id="collageName" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="degree3">Degree
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="degree3" id="degree3" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="startingDate3">Starting Date
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" type="date" value="2024-01-05" id="startingDate3">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="completeDate3">Complete Date
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" type="date" value="2024-01-05" id="completeDate3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit__btn text-center">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- education Qualification modal end -->

<!-- experience Qualification modal start -->
<div id="experience__info" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Education Information</h5>
                <button type="button" class="bd-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark-large"></i></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="card__wrapper mb-20">
                        <h6 class="card__sub-title mb-10">Company Information 1</h6>
                        <div class="row gy-20">
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="companyName">Company Name
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="companyName" id="companyName" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="position">Position
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="position" id="position" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="periodFrom">Period From
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" type="date" value="2024-01-05" id="periodFrom">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="periodTo">Period To
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" type="date" value="2024-01-05" id="periodTo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card__wrapper mb-20">
                        <h6 class="card__sub-title mb-10">Company Information 2</h6>
                        <div class="row gy-20">
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="companyName2">Company Name
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="companyName2" id="companyName2" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="position2">Position
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="position2" id="position2" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="periodFrom2">Period From
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" type="date" value="2024-01-05" id="periodFrom2">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="periodTo2">Period To
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" type="date" value="2024-01-05" id="periodTo2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card__wrapper">
                        <h6 class="card__sub-title mb-10">Company Information 3</h6>
                        <div class="row gy-20">
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="companyName3">Company Name
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="companyName3" id="companyName3" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="position3">Position
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="position3" id="position3" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="periodFrom3">Period From
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" type="date" value="2024-01-05" id="periodFrom3">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="periodTo3">Period To
                                            <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" type="date" value="2024-01-05" id="periodTo3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit__btn text-center">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- experience Qualification modal end -->

<!-- bank account information modal start -->
<div id="bank__account__info" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Bank Account Information</h5>
                <button type="button" class="bd-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark-large"></i></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="card__wrapper mb-20">
                        <div class="row gy-20 align-items-center justify-content-center">
                            <div class="col-lg-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="accountholadeername">Account Holder Name <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="accountholadeername" id="accountholadeername"
                                            type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="accountnumber">Account Number <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="accountnumber" id="accountnumber" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="bankname">Bank Name <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="bankname" id="bankname" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="branchname">Branch Name <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="branchname" id="branchname" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="swiftcode">SWIFT Code <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="swiftcode" id="swiftcode" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit__btn text-center">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- bank account information modal end -->

<!-- passport information modal start -->
<div id="passport__info" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Passport Information</h5>
                <button type="button" class="bd-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark-large"></i></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="card__wrapper mb-20">
                        <div class="row gy-20 align-items-center justify-content-center">
                            <div class="col-lg-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="passportNumber">Passport Number <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="passportNumber" id="passportNumber"
                                            type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="bankname">Nationality <span>*</span></label>
                                    </div>
                                    <select id="country" class="select2 form-select" data-allow-clear="true">
                                        <option value="">Select Country</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AX">Aland Islands</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                        <option value="AS">American Samoa</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AO">Angola</option>
                                        <option value="AI">Anguilla</option>
                                        <option value="AQ">Antarctica</option>
                                        <option value="AG">Antigua and Barbuda</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AM">Armenia</option>
                                        <option value="AW">Aruba</option>
                                        <option value="AU">Australia</option>
                                        <option value="AT">Austria</option>
                                        <option value="AZ">Azerbaijan</option>
                                        <option value="BS">Bahamas</option>
                                        <option value="BH">Bahrain</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="BB">Barbados</option>
                                        <option value="BY">Belarus</option>
                                        <option value="BE">Belgium</option>
                                        <option value="BZ">Belize</option>
                                        <option value="BJ">Benin</option>
                                        <option value="BM">Bermuda</option>
                                        <option value="BT">Bhutan</option>
                                        <option value="BO">Bolivia</option>
                                        <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                        <option value="BA">Bosnia and Herzegovina</option>
                                        <option value="BW">Botswana</option>
                                        <option value="BV">Bouvet Island</option>
                                        <option value="BR">Brazil</option>
                                        <option value="IO">British Indian Ocean Territory</option>
                                        <option value="BN">Brunei Darussalam</option>
                                        <option value="BG">Bulgaria</option>
                                        <option value="BF">Burkina Faso</option>
                                        <option value="BI">Burundi</option>
                                        <option value="KH">Cambodia</option>
                                        <option value="CM">Cameroon</option>
                                        <option value="CA">Canada</option>
                                        <option value="CV">Cape Verde</option>
                                        <option value="KY">Cayman Islands</option>
                                        <option value="CF">Central African Republic</option>
                                        <option value="TD">Chad</option>
                                        <option value="CL">Chile</option>
                                        <option value="CN">China</option>
                                        <option value="CX">Christmas Island</option>
                                        <option value="CC">Cocos (Keeling) Islands</option>
                                        <option value="CO">Colombia</option>
                                        <option value="KM">Comoros</option>
                                        <option value="CG">Congo</option>
                                        <option value="CD">Congo, Democratic Republic of the Congo</option>
                                        <option value="CK">Cook Islands</option>
                                        <option value="CR">Costa Rica</option>
                                        <option value="CI">Cote D'Ivoire</option>
                                        <option value="HR">Croatia</option>
                                        <option value="CU">Cuba</option>
                                        <option value="CW">Curacao</option>
                                        <option value="CY">Cyprus</option>
                                        <option value="CZ">Czech Republic</option>
                                        <option value="DK">Denmark</option>
                                        <option value="DJ">Djibouti</option>
                                        <option value="DM">Dominica</option>
                                        <option value="DO">Dominican Republic</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EG">Egypt</option>
                                        <option value="SV">El Salvador</option>
                                        <option value="GQ">Equatorial Guinea</option>
                                        <option value="ER">Eritrea</option>
                                        <option value="EE">Estonia</option>
                                        <option value="ET">Ethiopia</option>
                                        <option value="FK">Falkland Islands (Malvinas)</option>
                                        <option value="FO">Faroe Islands</option>
                                        <option value="FJ">Fiji</option>
                                        <option value="FI">Finland</option>
                                        <option value="FR">France</option>
                                        <option value="GF">French Guiana</option>
                                        <option value="PF">French Polynesia</option>
                                        <option value="TF">French Southern Territories</option>
                                        <option value="GA">Gabon</option>
                                        <option value="GM">Gambia</option>
                                        <option value="GE">Georgia</option>
                                        <option value="DE">Germany</option>
                                        <option value="GH">Ghana</option>
                                        <option value="GI">Gibraltar</option>
                                        <option value="GR">Greece</option>
                                        <option value="GL">Greenland</option>
                                        <option value="GD">Grenada</option>
                                        <option value="GP">Guadeloupe</option>
                                        <option value="GU">Guam</option>
                                        <option value="GT">Guatemala</option>
                                        <option value="GG">Guernsey</option>
                                        <option value="GN">Guinea</option>
                                        <option value="GW">Guinea-Bissau</option>
                                        <option value="GY">Guyana</option>
                                        <option value="HT">Haiti</option>
                                        <option value="HM">Heard Island and Mcdonald Islands</option>
                                        <option value="VA">Holy See (Vatican City State)</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HK">Hong Kong</option>
                                        <option value="HU">Hungary</option>
                                        <option value="IS">Iceland</option>
                                        <option value="IN">India</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IR">Iran, Islamic Republic of</option>
                                        <option value="IQ">Iraq</option>
                                        <option value="IE">Ireland</option>
                                        <option value="IM">Isle of Man</option>
                                        <option value="IL">Israel</option>
                                        <option value="IT">Italy</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JP">Japan</option>
                                        <option value="JE">Jersey</option>
                                        <option value="JO">Jordan</option>
                                        <option value="KZ">Kazakhstan</option>
                                        <option value="KE">Kenya</option>
                                        <option value="KI">Kiribati</option>
                                        <option value="KP">Korea, Democratic People's Republic of</option>
                                        <option value="KR">Korea, Republic of</option>
                                        <option value="XK">Kosovo</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="KG">Kyrgyzstan</option>
                                        <option value="LA">Lao People's Democratic Republic</option>
                                        <option value="LV">Latvia</option>
                                        <option value="LB">Lebanon</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LY">Libyan Arab Jamahiriya</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LT">Lithuania</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="MO">Macao</option>
                                        <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                                        <option value="MG">Madagascar</option>
                                        <option value="MW">Malawi</option>
                                        <option value="MY">Malaysia</option>
                                        <option value="MV">Maldives</option>
                                        <option value="ML">Mali</option>
                                        <option value="MT">Malta</option>
                                        <option value="MH">Marshall Islands</option>
                                        <option value="MQ">Martinique</option>
                                        <option value="MR">Mauritania</option>
                                        <option value="MU">Mauritius</option>
                                        <option value="YT">Mayotte</option>
                                        <option value="MX">Mexico</option>
                                        <option value="FM">Micronesia, Federated States of</option>
                                        <option value="MD">Moldova, Republic of</option>
                                        <option value="MC">Monaco</option>
                                        <option value="MN">Mongolia</option>
                                        <option value="ME">Montenegro</option>
                                        <option value="MS">Montserrat</option>
                                        <option value="MA">Morocco</option>
                                        <option value="MZ">Mozambique</option>
                                        <option value="MM">Myanmar</option>
                                        <option value="NA">Namibia</option>
                                        <option value="NR">Nauru</option>
                                        <option value="NP">Nepal</option>
                                        <option value="NL">Netherlands</option>
                                        <option value="AN">Netherlands Antilles</option>
                                        <option value="NC">New Caledonia</option>
                                        <option value="NZ">New Zealand</option>
                                        <option value="NI">Nicaragua</option>
                                        <option value="NE">Niger</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="NU">Niue</option>
                                        <option value="NF">Norfolk Island</option>
                                        <option value="MP">Northern Mariana Islands</option>
                                        <option value="NO">Norway</option>
                                        <option value="OM">Oman</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PW">Palau</option>
                                        <option value="PS">Palestinian Territory, Occupied</option>
                                        <option value="PA">Panama</option>
                                        <option value="PG">Papua New Guinea</option>
                                        <option value="PY">Paraguay</option>
                                        <option value="PE">Peru</option>
                                        <option value="PH">Philippines</option>
                                        <option value="PN">Pitcairn</option>
                                        <option value="PL">Poland</option>
                                        <option value="PT">Portugal</option>
                                        <option value="PR">Puerto Rico</option>
                                        <option value="QA">Qatar</option>
                                        <option value="RE">Reunion</option>
                                        <option value="RO">Romania</option>
                                        <option value="RU">Russian Federation</option>
                                        <option value="RW">Rwanda</option>
                                        <option value="BL">Saint Barthelemy</option>
                                        <option value="SH">Saint Helena</option>
                                        <option value="KN">Saint Kitts and Nevis</option>
                                        <option value="LC">Saint Lucia</option>
                                        <option value="MF">Saint Martin</option>
                                        <option value="PM">Saint Pierre and Miquelon</option>
                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                        <option value="WS">Samoa</option>
                                        <option value="SM">San Marino</option>
                                        <option value="ST">Sao Tome and Principe</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="SN">Senegal</option>
                                        <option value="RS">Serbia</option>
                                        <option value="CS">Serbia and Montenegro</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SL">Sierra Leone</option>
                                        <option value="SG">Singapore</option>
                                        <option value="SX">Sint Maarten</option>
                                        <option value="SK">Slovakia</option>
                                        <option value="SI">Slovenia</option>
                                        <option value="SB">Solomon Islands</option>
                                        <option value="SO">Somalia</option>
                                        <option value="ZA">South Africa</option>
                                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                                        <option value="SS">South Sudan</option>
                                        <option value="ES">Spain</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="SD">Sudan</option>
                                        <option value="SR">Suriname</option>
                                        <option value="SJ">Svalbard and Jan Mayen</option>
                                        <option value="SZ">Swaziland</option>
                                        <option value="SE">Sweden</option>
                                        <option value="CH">Switzerland</option>
                                        <option value="SY">Syrian Arab Republic</option>
                                        <option value="TW">Taiwan, Province of China</option>
                                        <option value="TJ">Tajikistan</option>
                                        <option value="TZ">Tanzania, United Republic of</option>
                                        <option value="TH">Thailand</option>
                                        <option value="TL">Timor-Leste</option>
                                        <option value="TG">Togo</option>
                                        <option value="TK">Tokelau</option>
                                        <option value="TO">Tonga</option>
                                        <option value="TT">Trinidad and Tobago</option>
                                        <option value="TN">Tunisia</option>
                                        <option value="TR">Turkey</option>
                                        <option value="TM">Turkmenistan</option>
                                        <option value="TC">Turks and Caicos Islands</option>
                                        <option value="TV">Tuvalu</option>
                                        <option value="UG">Uganda</option>
                                        <option value="UA">Ukraine</option>
                                        <option value="AE">United Arab Emirates</option>
                                        <option value="GB">United Kingdom</option>
                                        <option value="US">United States</option>
                                        <option value="UM">United States Minor Outlying Islands</option>
                                        <option value="UY">Uruguay</option>
                                        <option value="UZ">Uzbekistan</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="VE">Venezuela</option>
                                        <option value="VN">Viet Nam</option>
                                        <option value="VG">Virgin Islands, British</option>
                                        <option value="VI">Virgin Islands, U.s.</option>
                                        <option value="WF">Wallis and Futuna</option>
                                        <option value="EH">Western Sahara</option>
                                        <option value="YE">Yemen</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabwe</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="issueDate">Issue Date <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" type="date" value="2024-01-05" id="issueDate">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="expiryDate">Expiry Date <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" type="date" value="2024-01-05" id="expiryDate">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit__btn text-center">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- passport information modal end -->

<!-- passport information modal start -->
<div id="social__info" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Social Account Information</h5>
                <button type="button" class="bd-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark-large"></i></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="card__wrapper mb-20">
                        <div class="row gy-20 align-items-center justify-content-center">
                            <div class="col-lg-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="linkedinName">Linkedin Name <span>*</span></label>
                                    </div>
                                    <div class="from__input-box">
                                        <div class="input-group">
                                            <span class="input-group-text">@</span>
                                            <input type="text" id="linkedinName" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="xName">X Name <span>*</span></label>
                                    </div>
                                    <div class="from__input-box">
                                        <div class="input-group">
                                            <span class="input-group-text">@</span>
                                            <input type="text" id="xName" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="facebookName">Facebook Name <span>*</span></label>
                                    </div>
                                    <div class="from__input-box">
                                        <div class="input-group">
                                            <span class="input-group-text">@</span>
                                            <input type="text" id="facebookName" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="instagramName">Instagram Name <span>*</span></label>
                                    </div>
                                    <div class="from__input-box">
                                        <div class="input-group">
                                            <span class="input-group-text">@</span>
                                            <input type="text" id="instagramName" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="whatsAppsNumber">WhatsApps Number <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="whatsAppsNumber" id="whatsAppsNumber"
                                            type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit__btn text-center">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- passport information modal end -->
<!-- Modal -->
<div class="modal custom-modal fade" id="attendance_info" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Attendance Info</h5>
                <button type="button" class="bd-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark-large"></i></button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="card__wrapper mb-20">
                        <div class="row gy-20 align-items-center mb-20">
                            <div class="col-lg-8">
                                <h5 class="table-avatar">
                                    <a class="employee__avatar mr-5" href="employee-profile.html"><img
                                            class="img-48 border-circle" src="assets/images/avatar/avatar1.png"
                                            alt="User Image"></a>
                                    <a href="employee-profile.html">Emily Johnson</a>
                                </h5>
                            </div>
                            <div class="col-lg-4">
                                <div class="employee__working-shift">
                                    <span class="bd-badge bg-success">Day Shift</span>
                                </div>
                            </div>
                        </div>
                        <div class="row gy-20">
                            <div class="col-lg-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label class="form-check-label" for="clockInTime">Clock In Time</label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" id="clockInTime" type="text"
                                            placeholder="Select Date.." readonly="readonly">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label class="form-check-label" for="clockOutTime">Clock Out Time</label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" id="clockOutTime" type="text"
                                            placeholder="Select Date.." readonly="readonly">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form__input-box">
                                    <div class="form__input-title">
                                        <label>Work Location <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <select class="form-control">
                                            <option value="office">Office</option>
                                            <option value="home">Home</option>
                                            <option value="project">Project</option>
                                            <option value="client">Client</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit__btn text-center">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--end modal-->

<!-- add new warning modal start -->
<div id="addNewWarning" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Warning</h5>
                <button type="button" class="bd-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark-large"></i></button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="card__wrapper">
                        <div class="row gy-20">
                            <div class="col-md-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="employeeName">Employee Name <span>*</span></label>
                                    </div>
                                    <div class="from__input-box">
                                        <select id="employeeName" class="multiple-img">
                                            <option data-image="assets/images/avatar/avatar15.png">Emily Davis
                                            </option>
                                            <option data-image="assets/images/avatar/avatar5.png">Ethan Mitchell
                                            </option>
                                            <option data-image="assets/images/avatar/avatar9.png">Jane Smith
                                            </option>
                                            <option data-image="assets/images/avatar/avatar.png">Michael Johnson
                                            </option>
                                            <option data-image="assets/images/avatar/avatar1.png">Robert Wilson
                                            </option>
                                            <option data-image="assets/images/avatar/avatar7.png">Mazharul Islam
                                            </option>
                                            <option data-image="assets/images/avatar/avatar2.png">Aiden Carter
                                            </option>
                                            <option data-image="assets/images/avatar/avatar3.png">Sophia Miller
                                            </option>
                                            <option data-image="assets/images/avatar/avatar4.png">Isabella Wright
                                            </option>
                                            <option data-image="assets/images/avatar/avatar5.png">Harper Martinez
                                            </option>
                                            <option data-image="assets/images/avatar/avatar6.png">Abigail Reed
                                            </option>
                                            <option data-image="assets/images/avatar/avatar8.png">Benjamin Hayes
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="subject">Subject <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="subject" id="subject" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="startingDate">Warning Date <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" id="startingDate" type="text" placeholder=""
                                            readonly="readonly">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label>Description <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <textarea class="form-control" name="description"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit__btn d-flex align-items-center justify-content-end gap-10">
                        <button class="btn btn-danger">Cancel</button>
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- add new warning modal end -->

<!-- warning edit modal start -->
<div id="warningEdit" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Warning</h5>
                <button type="button" class="bd-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark-large"></i></button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="card__wrapper">
                        <div class="row gy-20">
                            <div class="col-md-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="employeeName2">Employee Name <span>*</span></label>
                                    </div>
                                    <div class="from__input-box">
                                        <select id="employeeName2" class="multiple-img">
                                            <option data-image="assets/images/avatar/avatar11.png" selected="">Barbara
                                                Hill</option>
                                            <option data-image="assets/images/avatar/avatar5.png">Ethan Mitchell
                                            </option>
                                            <option data-image="assets/images/avatar/avatar9.png">Jane Smith
                                            </option>
                                            <option data-image="assets/images/avatar/avatar.png">Michael Johnson
                                            </option>
                                            <option data-image="assets/images/avatar/avatar1.png">Robert Wilson
                                            </option>
                                            <option data-image="assets/images/avatar/avatar7.png">Mazharul Islam
                                            </option>
                                            <option data-image="assets/images/avatar/avatar2.png">Aiden Carter
                                            </option>
                                            <option data-image="assets/images/avatar/avatar3.png">Sophia Miller
                                            </option>
                                            <option data-image="assets/images/avatar/avatar4.png">Isabella Wright
                                            </option>
                                            <option data-image="assets/images/avatar/avatar5.png">Harper Martinez
                                            </option>
                                            <option data-image="assets/images/avatar/avatar6.png">Abigail Reed
                                            </option>
                                            <option data-image="assets/images/avatar/avatar8.png">Benjamin Hayes
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="subject2">Subject <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="subject2" id="subject2" type="text"
                                            value="Insubordination">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="startingDate2">Warning Date <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" id="startingDate2" type="text" value="Dec 12, 2024"
                                            readonly="readonly">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label>Description <span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <textarea class="form-control"
                                            name="description2">Refusal to perform assigned tasks.</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit__btn d-flex align-items-center justify-content-end gap-10">
                        <button class="btn btn-danger">Cancel</button>
                        <button class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- warning edit modal end -->

<!-- new Leave modal start -->
<div id="addNewLeave" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Leave Request</h5>
                <button type="button" class="bd-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark-large"></i></button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="row gy-20">
                        <div class="col-xl-12">
                            <div class="card__wrapper mb-20">
                                <div class="row gy-20">
                                    <div class="col-md-12">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label for="largeSelect" class="form-label">Leave
                                                    Type<span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <select id="largeSelect" class="form-select">
                                                    <option value="0">Select Leave Type</option>
                                                    <option value="1">Medical Leave</option>
                                                    <option value="2">Personal Leave</option>
                                                    <option value="3">Vacation Leave</option>
                                                    <option value="4">Monthly Leave</option>
                                                    <option value="5">Yearly Leave</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label class="form-check-label" for="dateDuration">Leave
                                                    Duration</label>
                                            </div>
                                            <div class="form__input">
                                                <input class="form-control" id="dateDuration" type="text" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label for="numberDays">Number of days <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <input class="form-control" name="numberDays" id="numberDays"
                                                    type="text" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label>Reason <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <textarea class="form-control" name="name" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit__btn text-center">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- new Leave modal end -->