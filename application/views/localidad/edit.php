<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Localidad Edit</h3>
            </div>
			<?php echo form_open('localidades/edit/'.$localidad['id_localidad']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_provincia" class="control-label"><span class="text-danger">*</span>Provincia</label>
						<div class="form-group">
							<select name="id_provincia" class="form-control">
								<option value="">select provincia</option>
								<?php 
								foreach($all_provincias as $provincia)
								{
									$selected = ($provincia['id_provincia'] == $localidad['id_provincia']) ? ' selected="selected"' : "";

									echo '<option value="'.$provincia['id_provincia'].'" '.$selected.'>'.$provincia['descripcion'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_provincia');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="descripcion" class="control-label"><span class="text-danger">*</span>Descripcion</label>
						<div class="form-group">
							<input type="text" name="descripcion" value="<?php echo ($this->input->post('descripcion') ? $this->input->post('descripcion') : $localidad['descripcion']); ?>" class="form-control" id="descripcion" />
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