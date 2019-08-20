<?php echo form_open('curso/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_profesor" class="col-md-4 control-label">Profesor</label>
		<div class="col-md-8">
			<select name="id_profesor" class="form-control">
				<option value="">select profesor</option>
				<?php 
				foreach($all_profesores as $profesor)
				{
					$selected = ($profesor['id_profesores'] == $this->input->post('id_profesor')) ? ' selected="selected"' : "";

					echo '<option value="'.$profesor['id_profesores'].'" '.$selected.'>'.$profesor['id_profesores'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="descripcion" class="col-md-4 control-label"><span class="text-danger">*</span>Descripcion</label>
		<div class="col-md-8">
			<input type="text" name="descripcion" value="<?php echo $this->input->post('descripcion'); ?>" class="form-control" id="descripcion" />
			<span class="text-danger"><?php echo form_error('descripcion');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="cant_alumnos" class="col-md-4 control-label"><span class="text-danger">*</span>Cant Alumnos</label>
		<div class="col-md-8">
			<input type="text" name="cant_alumnos" value="<?php echo $this->input->post('cant_alumnos'); ?>" class="form-control" id="cant_alumnos" />
			<span class="text-danger"><?php echo form_error('cant_alumnos');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="duracion_dias" class="col-md-4 control-label"><span class="text-danger">*</span>Duracion Dias</label>
		<div class="col-md-8">
			<input type="text" name="duracion_dias" value="<?php echo $this->input->post('duracion_dias'); ?>" class="form-control" id="duracion_dias" />
			<span class="text-danger"><?php echo form_error('duracion_dias');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="horario_inicio" class="col-md-4 control-label"><span class="text-danger">*</span>Horario Inicio</label>
		<div class="col-md-8">
			<input type="text" name="horario_inicio" value="<?php echo $this->input->post('horario_inicio'); ?>" class="form-control" id="horario_inicio" />
			<span class="text-danger"><?php echo form_error('horario_inicio');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="horario_fin" class="col-md-4 control-label"><span class="text-danger">*</span>Horario Fin</label>
		<div class="col-md-8">
			<input type="text" name="horario_fin" value="<?php echo $this->input->post('horario_fin'); ?>" class="form-control" id="horario_fin" />
			<span class="text-danger"><?php echo form_error('horario_fin');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="dia_cursada" class="col-md-4 control-label"><span class="text-danger">*</span>Dia Cursada</label>
		<div class="col-md-8">
			<input type="text" name="dia_cursada" value="<?php echo $this->input->post('dia_cursada'); ?>" class="form-control" id="dia_cursada" />
			<span class="text-danger"><?php echo form_error('dia_cursada');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="turno" class="col-md-4 control-label"><span class="text-danger">*</span>Turno</label>
		<div class="col-md-8">
			<input type="text" name="turno" value="<?php echo $this->input->post('turno'); ?>" class="form-control" id="turno" />
			<span class="text-danger"><?php echo form_error('turno');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>