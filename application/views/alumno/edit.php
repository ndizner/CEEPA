<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Alumno Edit</h3>
            </div>
			<?php echo form_open('alumno/edit/'.$alumno['id_alumnos']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="alumno_estado" value="1" <?php echo ($alumno['alumno_estado']==1 ? 'checked="checked"' : ''); ?> id='alumno_estado' />
							<label for="alumno_estado" class="control-label"><span class="text-danger">*</span>Alumno Estado</label>
							<span class="text-danger"><?php echo form_error('alumno_estado');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_carrera" class="control-label"><span class="text-danger">*</span>Carrera</label>
						<div class="form-group">
							<select name="id_carrera" class="form-control">
								<option value="">select carrera</option>
								<?php 
								foreach($all_carreras as $carrera)
								{
									$selected = ($carrera['id_carrera'] == $alumno['id_carrera']) ? ' selected="selected"' : "";

									echo '<option value="'.$carrera['id_carrera'].'" '.$selected.'>'.$carrera['descripcion'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_carrera');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_curso" class="control-label"><span class="text-danger">*</span>Curso</label>
						<div class="form-group">
							<select name="id_curso" class="form-control">
								<option value="">select curso</option>
								<?php 
								foreach($all_cursos as $curso)
								{
									$selected = ($curso['id_cursos'] == $alumno['id_curso']) ? ' selected="selected"' : "";

									echo '<option value="'.$curso['id_cursos'].'" '.$selected.'>'.$curso['descripcion'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_curso');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_localidad" class="control-label"><span class="text-danger">*</span>Localidad</label>
						<div class="form-group">
							<select name="id_localidad" class="form-control">
								<option value="">select localidad</option>
								<?php 
								foreach($all_localidades as $localidad)
								{
									$selected = ($localidad['id_localidad'] == $alumno['id_localidad']) ? ' selected="selected"' : "";

									echo '<option value="'.$localidad['id_localidad'].'" '.$selected.'>'.$localidad['descripcion'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_localidad');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nombre" class="control-label"><span class="text-danger">*</span>Nombre</label>
						<div class="form-group">
							<input type="text" name="nombre" value="<?php echo ($this->input->post('nombre') ? $this->input->post('nombre') : $alumno['nombre']); ?>" class="form-control" id="nombre" />
							<span class="text-danger"><?php echo form_error('nombre');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="apellido" class="control-label"><span class="text-danger">*</span>Apellido</label>
						<div class="form-group">
							<input type="text" name="apellido" value="<?php echo ($this->input->post('apellido') ? $this->input->post('apellido') : $alumno['apellido']); ?>" class="form-control" id="apellido" />
							<span class="text-danger"><?php echo form_error('apellido');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="edad" class="control-label"><span class="text-danger">*</span>Edad</label>
						<div class="form-group">
							<input type="text" name="edad" value="<?php echo ($this->input->post('edad') ? $this->input->post('edad') : $alumno['edad']); ?>" class="form-control" id="edad" />
							<span class="text-danger"><?php echo form_error('edad');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="dni" class="control-label">Dni</label>
						<div class="form-group">
							<input type="text" name="dni" value="<?php echo ($this->input->post('dni') ? $this->input->post('dni') : $alumno['dni']); ?>" class="form-control" id="dni" />
							<span class="text-danger"><?php echo form_error('dni');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="domicilio" class="control-label">Domicilio</label>
						<div class="form-group">
							<input type="text" name="domicilio" value="<?php echo ($this->input->post('domicilio') ? $this->input->post('domicilio') : $alumno['domicilio']); ?>" class="form-control" id="domicilio" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="estudios" class="control-label"><span class="text-danger">*</span>Estudios</label>
						<div class="form-group">
							<input type="text" name="estudios" value="<?php echo ($this->input->post('estudios') ? $this->input->post('estudios') : $alumno['estudios']); ?>" class="form-control" id="estudios" />
							<span class="text-danger"><?php echo form_error('estudios');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $alumno['email']); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="telefono" class="control-label"><span class="text-danger">*</span>Telefono</label>
						<div class="form-group">
							<input type="text" name="telefono" value="<?php echo ($this->input->post('telefono') ? $this->input->post('telefono') : $alumno['telefono']); ?>" class="form-control" id="telefono" />
							<span class="text-danger"><?php echo form_error('telefono');?></span>
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