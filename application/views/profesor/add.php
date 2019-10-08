<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Profesor Add</h3>
            </div>
            <?php echo form_open('profesores/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="profesor_estado" value="1"  id="profesor_estado" />
							<label for="profesor_estado" class="control-label"><span class="text-danger">*</span>Profesor Estado</label>
							<span class="text-danger"><?php echo form_error('profesor_estado');?></span>
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
									$selected = ($localidad['id_localidad'] == $this->input->post('id_localidad')) ? ' selected="selected"' : "";

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
							<input type="text" name="nombre" value="<?php echo $this->input->post('nombre'); ?>" class="form-control" id="nombre" />
							<span class="text-danger"><?php echo form_error('nombre');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="apellido" class="control-label"><span class="text-danger">*</span>Apellido</label>
						<div class="form-group">
							<input type="text" name="apellido" value="<?php echo $this->input->post('apellido'); ?>" class="form-control" id="apellido" />
							<span class="text-danger"><?php echo form_error('apellido');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="edad" class="control-label">Edad</label>
						<div class="form-group">
							<input type="text" name="edad" value="<?php echo $this->input->post('edad'); ?>" class="form-control" id="edad" />
							<span class="text-danger"><?php echo form_error('edad');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="dni" class="control-label"><span class="text-danger">*</span>Dni</label>
						<div class="form-group">
							<input type="text" name="dni" value="<?php echo $this->input->post('dni'); ?>" class="form-control" id="dni" />
							<span class="text-danger"><?php echo form_error('dni');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="domicilio" class="control-label"><span class="text-danger">*</span>Domicilio</label>
						<div class="form-group">
							<input type="text" name="domicilio" value="<?php echo $this->input->post('domicilio'); ?>" class="form-control" id="domicilio" />
							<span class="text-danger"><?php echo form_error('domicilio');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="estudios" class="control-label"><span class="text-danger">*</span>Estudios</label>
						<div class="form-group">
							<input type="text" name="estudios" value="<?php echo $this->input->post('estudios'); ?>" class="form-control" id="estudios" />
							<span class="text-danger"><?php echo form_error('estudios');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label"><span class="text-danger">*</span>Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="telefono" class="control-label"><span class="text-danger">*</span>Telefono</label>
						<div class="form-group">
							<input type="text" name="telefono" value="<?php echo $this->input->post('telefono'); ?>" class="form-control" id="telefono" />
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