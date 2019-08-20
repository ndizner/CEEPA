<?php echo form_open('usuario/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_tipo_usuario" class="col-md-4 control-label">Tipo Usuario</label>
		<div class="col-md-8">
			<select name="id_tipo_usuario" class="form-control">
				<option value="">select tipo_usuario</option>
				<?php 
				foreach($all_tipo_usuarios as $tipo_usuario)
				{
					$selected = ($tipo_usuario['id_tipo_usuario'] == $this->input->post('id_tipo_usuario')) ? ' selected="selected"' : "";

					echo '<option value="'.$tipo_usuario['id_tipo_usuario'].'" '.$selected.'>'.$tipo_usuario['id_tipo_usuario'].'</option>';
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
					$selected = ($estado_usuario['id_estado_usuario'] == $this->input->post('id_estado_usuario')) ? ' selected="selected"' : "";

					echo '<option value="'.$estado_usuario['id_estado_usuario'].'" '.$selected.'>'.$estado_usuario['id_estado_usuario'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="password" class="col-md-4 control-label"><span class="text-danger">*</span>Password</label>
		<div class="col-md-8">
			<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
			<span class="text-danger"><?php echo form_error('password');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="nombre" class="col-md-4 control-label"><span class="text-danger">*</span>Nombre</label>
		<div class="col-md-8">
			<input type="text" name="nombre" value="<?php echo $this->input->post('nombre'); ?>" class="form-control" id="nombre" />
			<span class="text-danger"><?php echo form_error('nombre');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>