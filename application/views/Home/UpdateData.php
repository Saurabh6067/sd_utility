<?php defined("BASEPATH") or exit("No direct scripts allowed here"); ?>
<?php
if (isset($action)) {
    switch ($action) {

        case "EditLeaveType":
        ?>
            <form action="<?= base_url('Admin/AddLeaveType/Update') ?>" method="post">
                <input type="hidden" name="id" value="<?= $list[0]->id; ?>">

                <div class="form-group">
                    <label for="">Leave Type</label>
                    <input type="text" name="leavetype" value="<?= $list[0]->leavetype; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Day</label>
                    <input type="text" name="day" value="<?= $list[0]->day; ?>" class="form-control">
                </div>
                <div class="float-right">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        <?php
            break;


        case "EditBlog":
        ?>
            <form action="<?= base_url('Admin/ManageBlog/Update') ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $list[0]->id; ?>">
                <div class="form-group">
                    <label for="">Blog Type</label>
                    <input type="text" name="type" value="<?= $list[0]->type; ?>" class="form-control">
                </div>
                <img src="<?php echo base_url('uploads/blog/' . $list[0]->image); ?>" style="height:60px;width:60px">
                <div class="form-group">
                    <input type="file" class="form-control" data-height="100" name="image" title="Choose Image" accept="image/jpg, image/png, image/jpeg, image/gif" data-default-file="<?php echo base_url('uploads/blog/' . $list[0]->image); ?>">
                </div>
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" value="<?= $list[0]->title; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" class="form-control"><?= $list[0]->description; ?></textarea>
                </div>

                <div class="float-right">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>

        <?php
            break;

        case "EditPlan":
        ?>
            <form action="<?= base_url('Admin/ManagePlan/Update') ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $list[0]->id; ?>">
                <div class="form-group">
                    <label for="">Plan Name</label>
                    <input type="text" name="plan_name" value="<?= $list[0]->plan_name; ?>" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Plan Title</label>
                    <input type="text" name="plan_title" value="<?= $list[0]->plan_title; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Plan Rate</label>
                    <input type="number" name="plan_rate" value="<?= $list[0]->plan_rate; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Plan Minute</label>
                    <input type="number" name="plan_minute" value="<?= $list[0]->plan_minute; ?>" class="form-control">
                </div>

                <div class="float-right">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>

        <?php
            break;

        case "EditBannerPicture":
        ?>
            <form action="<?= base_url('Admin/ManageBannerPicture/Update') ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $list[0]->id; ?>">
                <img src="<?php echo base_url('uploads/bannerpicture/' . $list[0]->image); ?>" style="height:60px;width:60px">
                <div class="form-group">
                    <input type="file" class="form-control" data-height="100" name="image" title="Choose Image" accept="image/jpg, image/png, image/jpeg, image/gif" data-default-file="<?php echo base_url('uploads/bannerpicture/' . $list[0]->image); ?>">
                </div>
                <div class="float-right">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
<?php
            break;
    }
} else {
    echo 'Action is required.';
}
?>