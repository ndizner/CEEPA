<?php echo form_open('domicilio_comercial/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_localidad" class="col-md-4 control-label">Localidad</label>
		<div class="col-md-8">
			<select name="id_localidad" class="form-control">
				<option value="">select localidad</option>
				<?php 
				foreach($all_localidades as $localidad)
				{
					$selected = ($localidad['id_localidad'] == $this->input->post('id_localidad')) ? ' selected="selected"' : "";

					echo '<option value="'.$localidad['id_localidad'].'" '.$selected.'>'.$localidad['id_localidad'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="id_provincia" class="col-md-4 control-label">Provincia</label>
		<div class="col-md-8">
			<select name="id_provincia" class="form-control">
				<option value="">select provincia</option>
				<?php 
				foreach($all_provincias as $provincia)
				{
					$selected = ($provincia['id_provincia'] == $this->input->post('id_provincia')) ? ' selected="selected"' : "";

					echo '<option value="'.$provincia['id_provincia'].'" '.$selected.'>'.$provincia['id_provincia'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="calle" class="col-md-4 control-label">Calle</label>
		<div class="col-md-8">
			<input type="text" name="calle" value="<?php echo $this->input->post('calle'); ?>" class="form-control" id="calle" />
		</div>
	</div>
	<div class="form-group">
		<label for="numero" class="col-md-4 control-label">Numero</label>
		<div class="col-md-8">
			<input type="text" name="numero" value="<?php echo $this->input->post('numero'); ?>" class="form-control" id="numero" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>