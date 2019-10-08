<div class="main-body">
    <div class="page-wrapper">
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                          <h5><?php echo lang('create_group_heading');?></h5>
                          <span><p><?php echo lang('create_group_subheading');?></p></span>
                            <div class="card-header-right">
                                <i class="icofont icofont-rounded-down"></i>
                                <i onclick="myFunction()" class="icofont icofont-refresh"></i>
                                <i class="icofont icofont-close-circled"></i>
                            </div>
                        </div>
                        <?php echo form_open(current_url());?>
                        <div class="card-block">
                          <div class="row form-group">
                                <div class="col-md-4">
                                  <?php echo lang('edit_group_name_label', 'group_name');?> <br />
                                     <?php echo form_input($group_name);?>
                                 <span class="text-danger">  <?= form_error('group_name') ?></span>
                              </div>
                              <div class="col-md-4">
                                      <?php echo lang('edit_group_desc_label', 'description');?> <br />
                                   <?php echo form_input($group_description);?>
                                 <span class="text-danger">  <?= form_error('description') ?></span>
                              </div>
                            </div>
                            <div class="box-footer">
                              <button type="submit" class="btn btn-success">
                                <i class="fa fa-check"></i> <?php echo lang('edit_group_submit_btn');?>
                              </button>
                            </div>
                        </div>

                    </div>
                    <!-- Zero config.table end -->
                     <?php echo form_close();?>

                </div>
            </div>
        </div>
        <!-- Page-body end -->
    </div>
</div>
<!-- Main-body end -->
<div id="styleSelector">

</div>

<script>
function myFunction() {
document.getElementById("myform").reset();
}
</script>
