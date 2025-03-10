<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<?php
if ($this->session->flashdata('res') == 'success') {
    echo '<script>$.notify("' . $this->session->flashdata('msg') . '","success")</script>';
} else if ($this->session->flashdata('res') == 'error') {
    echo '<script>$.notify("' . $this->session->flashdata('msg') . '","error")</script>';
}
?>

<!-- JS here -->
<script src="<?= base_url('assets/Home/js/vendor/calendar-activision.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/vendor/jquery-3.7.0.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/vendor/isotope.pkgd.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/vendor/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/vendor/magnific-popup.min.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/vendor/ajax-form.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/vendor/jquery.repeater.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/waypoints.min.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/dayjs.min.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/loader.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/jsvectormap.min.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/world-merc.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/swiper-bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/popper.min.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/simplebar.min.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/simplebar-active.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/backtotop.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/smooth-scrollbar.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/cleave.min.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/datatables.min.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/dataTables.bootstrap5.min.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/dataTables.buttons.min.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/jszip.min.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/pdfmake.min.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/vfs_fonts.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/buttons.html5.min.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/buttons.print.min.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/buttons.colVis.min.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/steps-form.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/dropify.min.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/dropzone.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/tinymce.min.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/custom.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/typeahead.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/bloodhound.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/select2.full.min.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/jquery.timepicker.min.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/flatpickr.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/tagify.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/jquery-ui.min.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/sweetalert2.all.min.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/apexcharts.min.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/fullcalendar.min.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/plugins/ion.rangeSlider.min.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/vendor/custom-tagify.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/vendor/height-equal.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/vendor/custom-chart.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/vendor/rangeslider-script.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/vendor/jquery.barrating.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/vendor/rating-script.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/main.js') ?>"></script>
<script src="<?= base_url('assets/Home/js/vendor/sidebar.js') ?>"></script>

<div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">

            <div class="modal-header px-4">
                <h5 class="modal-title" id="exampleModalCenterTitle">Update Data</h5>
            </div>

            <!-- Body Start Here -->
            <div class="modal-body px-4">
            </div>
            <!-- Body End Here -->

        </div>
    </div>
</div>

    <!-- Delete here  -->
    <script>
       function DeleteWithoutImage(id, table){
            var status = true;
            Swal.fire({
                title: "Are You Sure?",
                text: "You Want To Delete?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "<?= base_url('Admin/DeleteWithoutImage') ?>",
                        type: "post",
                        data: {
                            'id': id,
                            'table': table
                        },
                        success: function(response) {
                            if (response == 1) {
                                Swal.fire({
                                    title: 'Success!',
                                    text: 'Delete Successfully!',
                                    icon: 'success',
                                    confirmButtonText: 'OK',
                                }).then(() => {
                                    window.location.reload();
                                });
                            } else {
                                Swal.fire({
                                    title: 'Error!',
                                    text: 'Deletion failed!',
                                    icon: 'error',
                                    confirmButtonText: 'OK'
                                });
                            }
                        }
                    });
                }
            });
            return status;
        }

        // Edit 
        function Edit(id) {
            $("#EditModal").modal("show");
            $("#EditModal .modal-body").html("<center><i class='fa fa-2x fa-spin fa-spinner'></i></center>");
            $("#EditModal .modal-body").load("<?php echo base_url('Admin/AddLeaveType/Edit/') ?>" + id);
        }
    </script>