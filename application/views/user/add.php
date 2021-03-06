<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">User Add</h3>
            </div>
            <?php echo form_open('user/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="password" class="control-label"><span class="text-danger">*</span>Password</label>
						<div class="form-group">
							<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
							<span class="text-danger"><?php echo form_error('password');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="forgotten_password_selector" class="control-label">Forgotten Password Selector</label>
						<div class="form-group">
							<input type="password" name="forgotten_password_selector" value="<?php echo $this->input->post('forgotten_password_selector'); ?>" class="form-control" id="forgotten_password_selector" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="forgotten_password_code" class="control-label">Forgotten Password Code</label>
						<div class="form-group">
							<input type="password" name="forgotten_password_code" value="<?php echo $this->input->post('forgotten_password_code'); ?>" class="form-control" id="forgotten_password_code" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="forgotten_password_time" class="control-label">Forgotten Password Time</label>
						<div class="form-group">
							<input type="password" name="forgotten_password_time" value="<?php echo $this->input->post('forgotten_password_time'); ?>" class="form-control" id="forgotten_password_time" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ip_address" class="control-label">Ip Address</label>
						<div class="form-group">
							<input type="text" name="ip_address" value="<?php echo $this->input->post('ip_address'); ?>" class="form-control" id="ip_address" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="username" class="control-label"><span class="text-danger">*</span>Username</label>
						<div class="form-group">
							<input type="text" name="username" value="<?php echo $this->input->post('username'); ?>" class="form-control" id="username" />
							<span class="text-danger"><?php echo form_error('username');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label"><span class="text-danger">*</span>Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="activation_selector" class="control-label">Activation Selector</label>
						<div class="form-group">
							<input type="text" name="activation_selector" value="<?php echo $this->input->post('activation_selector'); ?>" class="form-control" id="activation_selector" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="activation_code" class="control-label">Activation Code</label>
						<div class="form-group">
							<input type="text" name="activation_code" value="<?php echo $this->input->post('activation_code'); ?>" class="form-control" id="activation_code" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="remember_selector" class="control-label">Remember Selector</label>
						<div class="form-group">
							<input type="text" name="remember_selector" value="<?php echo $this->input->post('remember_selector'); ?>" class="form-control" id="remember_selector" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="remember_code" class="control-label">Remember Code</label>
						<div class="form-group">
							<input type="text" name="remember_code" value="<?php echo $this->input->post('remember_code'); ?>" class="form-control" id="remember_code" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="created_on" class="control-label">Created On</label>
						<div class="form-group">
							<input type="text" name="created_on" value="<?php echo $this->input->post('created_on'); ?>" class="form-control" id="created_on" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="last_login" class="control-label">Last Login</label>
						<div class="form-group">
							<input type="text" name="last_login" value="<?php echo $this->input->post('last_login'); ?>" class="form-control" id="last_login" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="active" class="control-label">Active</label>
						<div class="form-group">
							<input type="text" name="active" value="<?php echo $this->input->post('active'); ?>" class="form-control" id="active" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="first_name" class="control-label"><span class="text-danger">*</span>First Name</label>
						<div class="form-group">
							<input type="text" name="first_name" value="<?php echo $this->input->post('first_name'); ?>" class="form-control" id="first_name" />
							<span class="text-danger"><?php echo form_error('first_name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="last_name" class="control-label"><span class="text-danger">*</span>Last Name</label>
						<div class="form-group">
							<input type="text" name="last_name" value="<?php echo $this->input->post('last_name'); ?>" class="form-control" id="last_name" />
							<span class="text-danger"><?php echo form_error('last_name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="company" class="control-label">Company</label>
						<div class="form-group">
							<input type="text" name="company" value="<?php echo $this->input->post('company'); ?>" class="form-control" id="company" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="phone" class="control-label"><span class="text-danger">*</span>Phone</label>
						<div class="form-group">
							<input type="text" name="phone" value="<?php echo $this->input->post('phone'); ?>" class="form-control" id="phone" />
							<span class="text-danger"><?php echo form_error('phone');?></span>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>