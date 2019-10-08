<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Users Group Add</h3>
            </div>
            <?php echo form_open('users_group/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="user_id" class="control-label"><span class="text-danger">*</span>User</label>
						<div class="form-group">
							<select name="user_id" class="form-control">
								<option value="">select user</option>
								<?php 
								foreach($all_users as $user)
								{
									$selected = ($user['id'] == $this->input->post('user_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$user['id'].'" '.$selected.'>'.$user['username'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('user_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="group_id" class="control-label"><span class="text-danger">*</span>Group</label>
						<div class="form-group">
							<select name="group_id" class="form-control">
								<option value="">select group</option>
								<?php 
								foreach($all_groups as $group)
								{
									$selected = ($group['id'] == $this->input->post('group_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$group['id'].'" '.$selected.'>'.$group['description'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('group_id');?></span>
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