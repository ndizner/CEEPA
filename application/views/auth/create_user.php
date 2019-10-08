<!-- Main-body start -->
<?php echo form_open("auth/create_user", array('id' => 'myform'));?>
<!-- <div id="infoMessage"><?php echo $message;?></div> -->
                           <div class="main-body">
                               <div class="page-wrapper">
                                   <div class="page-body">
                                       <div class="row">
                                           <div class="col-sm-12">
                                               <!-- Zero config.table start -->
                                               <div class="card">
                                                   <div class="card-header">
                                                     <h5><?php echo lang('create_user_heading');?></h5>
                                                     <span><?php echo lang('create_user_subheading');?></span>
                                                       <div class="card-header-right">
                                                           <i class="icofont icofont-rounded-down"></i>
                                                           <i onclick="myFunction()" class="icofont icofont-refresh"></i>
                                                           <i class="icofont icofont-close-circled"></i>
                                                       </div>
                                                   </div>
                                                   <div class="card-block">
                                                     <div class="row form-group">
                                                           <div class="col-md-4">
                                                              <?php echo lang('create_user_fname_label', 'first_name');?> <br />
                                                              <?php echo form_input($first_name);?>
                                                              <span class="text-danger">  <?= form_error('first_name') ?></span>
                                                           </div>
                                                           <div class="col-md-4">
                                                              <?php echo lang('create_user_lname_label', 'last_name');?> <br />
                                                              <?php echo form_input($last_name);?>
                                                              <span class="text-danger">  <?= form_error('last_name') ?></span>
                                                           </div>
                                                           <div class="col-md-4">
                                                              <?php echo lang('create_user_validation_identity_label', 'last_identityname');?> <br />
                                                              <?php echo form_input($identity);?>
                                                              <span class="text-danger">  <?= form_error('identity') ?></span>
                                                           </div>

                                                        </div>
                                                        <div class="row form-group">
                                                              <div class="col-md-4">
                                                                  <?php echo lang('create_user_email_label', 'email');?> <br />
                                                                  <?php echo form_input($email);?>
                                                                  <span class="text-danger"><?= form_error('email') ?></span>
                                                              </div>
                                                              <div class="col-md-4">
                                                                  <?php echo lang('create_user_password_label', 'password');?> <br />
                                                                  <?php echo form_input($password);?>
                                                                  <span class="text-danger"><?= form_error('password') ?></span>
                                                              </div>
                                                               <div class="col-md-4">
                                                                  <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
                                                                  <?php echo form_input($password_confirm);?>
                                                                  <span class="text-danger">  <?= form_error('password_confirm') ?></span>
                                                              </div>
                                                           </div>

                                                      <div class="row form-group">
                                                        <div class="col-md-4">
                                                        <label class="control-label">Perfil</label>
                                                          <select name="groups[]"  class="form-control" >
                                                          <?php
                                                          foreach($groupos as $group){
                                                            if ($group['id'] == $this->config->item('Administrator')){
                                                            $disabled = 'disabled=disabled';
                                                              }else{
                                                              $disabled = '';
                                                            }
                                                          echo '<option value="'.$group['id'].'" '.$disabled.' >'. htmlspecialchars($group['description'],ENT_QUOTES,'UTF-8').'</option>';
                                                          }
                                                          ?>
                                                          </select>
                                                        <span class="text-danger"><?php echo form_error('groups[]');?></span>
                                                        </div>
                                                      </div>
                                                      <div class="box-footer">
                                                        <button type="submit" class="btn btn-success">
                                                          <i class="fa fa-check"></i> <?php echo lang('create_user_submit_btn');?>
                                                        </button>
                                                      </div>

                                                      <?php echo form_close();?>


                                                   </div>
                                               </div>
                                               <!-- Zero config.table end -->


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
