<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Curso Add</h3>
            </div>
            <?php echo form_open('curso/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="curso_estado" value="1"  id="curso_estado" />
							<label for="curso_estado" class="control-label"><span class="text-danger">*</span>Curso Estado</label>
							<span class="text-danger"><?php echo form_error('curso_estado');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_profesor" class="control-label"><span class="text-danger">*</span>Profesor</label>
						<div class="form-group">
							<select name="id_profesor" class="form-control">
								<option value="">select profesor</option>
								<?php 
								foreach($all_profesores as $profesor)
								{
									$selected = ($profesor['id_profesores'] == $this->input->post('id_profesor')) ? ' selected="selected"' : "";

									echo '<option value="'.$profesor['id_profesores'].'" '.$selected.'>'.$profesor['apellido'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_profesor');?></span>
						</div>
					</div>
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