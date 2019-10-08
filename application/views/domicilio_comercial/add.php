<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Domicilio Comercial Add</h3>
            </div>
            <?php echo form_open('domicilio_comercial/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="dom_comer_estado" value="1"  id="dom_comer_estado" />
							<label for="dom_comer_estado" class="control-label"><span class="text-danger">*</span>Dom Comer Estado</label>
							<span class="text-danger"><?php echo form_error('dom_comer_estado');?></span>
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
						<label for="id_provincia" class="control-label"><span class="text-danger">*</span>Provincia</label>
						<div class="form-group">
							<select name="id_provincia" class="form-control">
								<option value="">select provincia</option>
								<?php 
								foreach($all_provincias as $provincia)
								{
									$selected = ($provincia['id_provincia'] == $this->input->post('id_provincia')) ? ' selected="selected"' : "";

									echo '<option value="'.$provincia['id_provincia'].'" '.$selected.'>'.$provincia['descripcion'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_provincia');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="calle" class="control-label"><span class="text-danger">*</span>Calle</label>
						<div class="form-group">
							<input type="text" name="calle" value="<?php echo $this->input->post('calle'); ?>" class="form-control" id="calle" />
							<span class="text-danger"><?php echo form_error('calle');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="numero" class="control-label"><span class="text-danger">*</span>Numero</label>
						<div class="form-group">
							<input type="text" name="numero" value="<?php echo $this->input->post('numero'); ?>" class="form-control" id="numero" />
							<span class="text-danger"><?php echo form_error('numero');?></span>
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