<?php echo form_open('profesor/edit/'.$profesor['id_profesores'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_curso" class="col-md-4 control-label">Curso</label>
		<div class="col-md-8">
			<select name="id_curso" class="form-control">
				<option value="">select curso</option>
				<?php 
				foreach($all_cursos as $curso)
				{
					$selected = ($curso['id_cursos'] == $profesor['id_curso']) ? ' selected="selected"' : "";

					echo '<option value="'.$curso['id_cursos'].'" '.$selected.'>'.$curso['id_cursos'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="id_carrera" class="col-md-4 control-label">Carrera</label>
		<div class="col-md-8">
			<select name="id_carrera" class="form-control">
				<option value="">select carrera</option>
				<?php 
				foreach($all_carreras as $carrera)
				{
					$selected = ($carrera['id_carrera'] == $profesor['id_carrera']) ? ' selected="selected"' : "";

					echo '<option value="'.$carrera['id_carrera'].'" '.$selected.'>'.$carrera['id_carrera'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="id_estado_usuario" class="col-md-4 control-label">Estado Usuario</label>
		<div class="col-md-8">
			<select name="id_estado_usuario" class="form-control">
				<option value="">select estado_usuario</option>
				<?php 
				foreach($all_estados_usuario as $estado_usuario)
				{
					$selected = ($estado_usuario['id_estado_usuario'] == $profesor['id_estado_usuario']) ? ' selected="selected"' : "";

					echo '<option value="'.$estado_usuario['id_estado_usuario'].'" '.$selected.'>'.$estado_usuario['id_estado_usuario'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="id_datos_personales" class="col-md-4 control-label">Dato Personal</label>
		<div class="col-md-8">
			<select name="id_datos_personales" class="form-control">
				<option value="">select dato_personal</option>
				<?php 
				foreach($all_datos_personales as $dato_personal)
				{
					$selected = ($dato_personal['id_datos_personales'] == $profesor['id_datos_personales']) ? ' selected="selected"' : "";

					echo '<option value="'.$dato_personal['id_datos_personales'].'" '.$selected.'>'.$dato_personal['id_datos_personales'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="id_tipo_usuario" class="col-md-4 control-label">Tipo Usuario</label>
		<div class="col-md-8">
			<select name="id_tipo_usuario" class="form-control">
				<option value="">select tipo_usuario</option>
				<?php 
				foreach($all_tipo_usuarios as $tipo_usuario)
				{
					$selected = ($tipo_usuario['id_tipo_usuario'] == $profesor['id_tipo_usuario']) ? ' selected="selected"' : "";

					echo '<option value="'.$tipo_usuario['id_tipo_usuario'].'" '.$selected.'>'.$tipo_usuario['id_tipo_usuario'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>