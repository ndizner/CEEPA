<?php echo form_open('datos_personales/edit/'.$dato_personal['id_datos_personales'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="estado_psicofisico" class="col-md-4 control-label">Estado Psicofisico</label>
		<div class="col-md-8">
			<input type="checkbox" name="estado_psicofisico" value="1" <?php echo ($dato_personal['estado_psicofisico']==1 ? 'checked="checked"' : ''); ?> id='estado_psicofisico' />
		</div>
	</div>
	<div class="form-group">
		<label for="id_localidad" class="col-md-4 control-label">Localidad</label>
		<div class="col-md-8">
			<select name="id_localidad" class="form-control">
				<option value="">select localidad</option>
				<?php 
				foreach($all_localidades as $localidad)
				{
					$selected = ($localidad['id_localidad'] == $dato_personal['id_localidad']) ? ' selected="selected"' : "";

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
					$selected = ($provincia['id_provincia'] == $dato_personal['id_provincia']) ? ' selected="selected"' : "";

					echo '<option value="'.$provincia['id_provincia'].'" '.$selected.'>'.$provincia['id_provincia'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="nombre" class="col-md-4 control-label"><span class="text-danger">*</span>Nombre</label>
		<div class="col-md-8">
			<input type="text" name="nombre" value="<?php echo ($this->input->post('nombre') ? $this->input->post('nombre') : $dato_personal['nombre']); ?>" class="form-control" id="nombre" />
			<span class="text-danger"><?php echo form_error('nombre');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="apellido" class="col-md-4 control-label"><span class="text-danger">*</span>Apellido</label>
		<div class="col-md-8">
			<input type="text" name="apellido" value="<?php echo ($this->input->post('apellido') ? $this->input->post('apellido') : $dato_personal['apellido']); ?>" class="form-control" id="apellido" />
			<span class="text-danger"><?php echo form_error('apellido');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="fecha_nacimiento" class="col-md-4 control-label"><span class="text-danger">*</span>Fecha Nacimiento</label>
		<div class="col-md-8">
			<input type="text" name="fecha_nacimiento" value="<?php echo ($this->input->post('fecha_nacimiento') ? $this->input->post('fecha_nacimiento') : $dato_personal['fecha_nacimiento']); ?>" class="form-control" id="fecha_nacimiento" />
			<span class="text-danger"><?php echo form_error('fecha_nacimiento');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="tel" class="col-md-4 control-label">Tel</label>
		<div class="col-md-8">
			<input type="text" name="tel" value="<?php echo ($this->input->post('tel') ? $this->input->post('tel') : $dato_personal['tel']); ?>" class="form-control" id="tel" />
			<span class="text-danger"><?php echo form_error('tel');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-md-4 control-label"><span class="text-danger">*</span>Email</label>
		<div class="col-md-8">
			<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $dato_personal['email']); ?>" class="form-control" id="email" />
			<span class="text-danger"><?php echo form_error('email');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="calle" class="col-md-4 control-label"><span class="text-danger">*</span>Calle</label>
		<div class="col-md-8">
			<input type="text" name="calle" value="<?php echo ($this->input->post('calle') ? $this->input->post('calle') : $dato_personal['calle']); ?>" class="form-control" id="calle" />
			<span class="text-danger"><?php echo form_error('calle');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="numero" class="col-md-4 control-label"><span class="text-danger">*</span>Numero</label>
		<div class="col-md-8">
			<input type="text" name="numero" value="<?php echo ($this->input->post('numero') ? $this->input->post('numero') : $dato_personal['numero']); ?>" class="form-control" id="numero" />
			<span class="text-danger"><?php echo form_error('numero');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="codigo_postal" class="col-md-4 control-label"><span class="text-danger">*</span>Codigo Postal</label>
		<div class="col-md-8">
			<input type="text" name="codigo_postal" value="<?php echo ($this->input->post('codigo_postal') ? $this->input->post('codigo_postal') : $dato_personal['codigo_postal']); ?>" class="form-control" id="codigo_postal" />
			<span class="text-danger"><?php echo form_error('codigo_postal');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="contacto_emergencia" class="col-md-4 control-label"><span class="text-danger">*</span>Contacto Emergencia</label>
		<div class="col-md-8">
			<input type="text" name="contacto_emergencia" value="<?php echo ($this->input->post('contacto_emergencia') ? $this->input->post('contacto_emergencia') : $dato_personal['contacto_emergencia']); ?>" class="form-control" id="contacto_emergencia" />
			<span class="text-danger"><?php echo form_error('contacto_emergencia');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="tel_emergencia" class="col-md-4 control-label"><span class="text-danger">*</span>Tel Emergencia</label>
		<div class="col-md-8">
			<input type="text" name="tel_emergencia" value="<?php echo ($this->input->post('tel_emergencia') ? $this->input->post('tel_emergencia') : $dato_personal['tel_emergencia']); ?>" class="form-control" id="tel_emergencia" />
			<span class="text-danger"><?php echo form_error('tel_emergencia');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="parentesco_emergencia" class="col-md-4 control-label"><span class="text-danger">*</span>Parentesco Emergencia</label>
		<div class="col-md-8">
			<input type="text" name="parentesco_emergencia" value="<?php echo ($this->input->post('parentesco_emergencia') ? $this->input->post('parentesco_emergencia') : $dato_personal['parentesco_emergencia']); ?>" class="form-control" id="parentesco_emergencia" />
			<span class="text-danger"><?php echo form_error('parentesco_emergencia');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>