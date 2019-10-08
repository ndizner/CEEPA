<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Condicion Iva Add</h3>
            </div>
            <?php echo form_open('condicion_iva/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="descripcion" class="control-label"><span class="text-danger">*</span>Descripcion</label>
						<div class="form-group">
							<input type="text" name="descripcion" value="<?php echo $this->input->post('descripcion'); ?>" class="form-control" id="descripcion" />
							<span class="text-danger"><?php echo form_error('descripcion');?></span>
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