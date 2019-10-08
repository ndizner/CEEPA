<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tipo Usuario Add</h3>
            </div>
            <?php echo form_open('tipo_usuario/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="tipo_usuario_estado" value="1"  id="tipo_usuario_estado" />
							<label for="tipo_usuario_estado" class="control-label">Tipo Usuario Estado</label>
						</div>
					</div>
					<div class="col-md-6">
						<label for="descripcion" class="control-label">Descripcion</label>
						<div class="form-group">
							<input type="text" name="descripcion" value="<?php echo $this->input->post('descripcion'); ?>" class="form-control" id="descripcion" />
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