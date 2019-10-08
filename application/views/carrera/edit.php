<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Carrera Edit</h3>
            </div>
			<?php echo form_open('carrera/edit/'.$carrera['id_carrera']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="carrera_estado" class="control-label"><span class="text-danger">*</span>Carrera</label>
						<div class="form-group">
							<select name="carrera_estado" class="form-control">
								<option value="">select carrera</option>
								<?php 
								foreach($all_carreras as $carrera)
								{
									$selected = ($carrera['id_carrera'] == $carrera['carrera_estado']) ? ' selected="selected"' : "";

									echo '<option value="'.$carrera['id_carrera'].'" '.$selected.'>'.$carrera['descripcion'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('carrera_estado');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="descripcion" class="control-label"><span class="text-danger">*</span>Descripcion</label>
						<div class="form-group">
							<input type="text" name="descripcion" value="<?php echo ($this->input->post('descripcion') ? $this->input->post('descripcion') : $carrera['descripcion']); ?>" class="form-control" id="descripcion" />
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