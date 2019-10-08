<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Usuario Add</h3>
            </div>
            <?php echo form_open('usuario/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="usuario_estado" value="1"  id="usuario_estado" />
							<label for="usuario_estado" class="control-label">Usuario Estado</label>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_tipo_usuario" class="control-label">Tipo Usuario</label>
						<div class="form-group">
							<select name="id_tipo_usuario" class="form-control">
								<option value="">select tipo_usuario</option>
								<?php 
								foreach($all_tipo_usuario as $tipo_usuario)
								{
									$selected = ($tipo_usuario['id_tipo_usuario'] == $this->input->post('id_tipo_usuario')) ? ' selected="selected"' : "";

									echo '<option value="'.$tipo_usuario['id_tipo_usuario'].'" '.$selected.'>'.$tipo_usuario['descripcion'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="password" class="control-label">Password</label>
						<div class="form-group">
							<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nombre" class="control-label">Nombre</label>
						<div class="form-group">
							<input type="text" name="nombre" value="<?php echo $this->input->post('nombre'); ?>" class="form-control" id="nombre" />
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