<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Venta Edit</h3>
            </div>
			<?php echo form_open('venta/edit/'.$venta['id_ventas']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="venta_estado" value="1" <?php echo ($venta['venta_estado']==1 ? 'checked="checked"' : ''); ?> id='venta_estado' />
							<label for="venta_estado" class="control-label"><span class="text-danger">*</span>Venta Estado</label>
							<span class="text-danger"><?php echo form_error('venta_estado');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_condicion_venta" class="control-label"><span class="text-danger">*</span>Condicion Ventum</label>
						<div class="form-group">
							<select name="id_condicion_venta" class="form-control">
								<option value="">select condicion_ventum</option>
								<?php 
								foreach($all_condicion_venta as $condicion_ventum)
								{
									$selected = ($condicion_ventum['id_cond_venta'] == $venta['id_condicion_venta']) ? ' selected="selected"' : "";

									echo '<option value="'.$condicion_ventum['id_cond_venta'].'" '.$selected.'>'.$condicion_ventum['descripcion'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_condicion_venta');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_cond_iva" class="control-label"><span class="text-danger">*</span>Condicion Iva</label>
						<div class="form-group">
							<select name="id_cond_iva" class="form-control">
								<option value="">select condicion_iva</option>
								<?php 
								foreach($all_condicion_iva as $condicion_iva)
								{
									$selected = ($condicion_iva['id_cond_iva'] == $venta['id_cond_iva']) ? ' selected="selected"' : "";

									echo '<option value="'.$condicion_iva['id_cond_iva'].'" '.$selected.'>'.$condicion_iva['descripcion'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_cond_iva');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_domicilio_comercial" class="control-label"><span class="text-danger">*</span>Domicilio Comercial</label>
						<div class="form-group">
							<select name="id_domicilio_comercial" class="form-control">
								<option value="">select domicilio_comercial</option>
								<?php 
								foreach($all_domicilio_comercial as $domicilio_comercial)
								{
									$selected = ($domicilio_comercial['id_domicilio_comer'] == $venta['id_domicilio_comercial']) ? ' selected="selected"' : "";

									echo '<option value="'.$domicilio_comercial['id_domicilio_comer'].'" '.$selected.'>'.$domicilio_comercial['id_domicilio_comer'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_domicilio_comercial');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="fecha_operacion" class="control-label"><span class="text-danger">*</span>Fecha Operacion</label>
						<div class="form-group">
							<input type="text" name="fecha_operacion" value="<?php echo ($this->input->post('fecha_operacion') ? $this->input->post('fecha_operacion') : $venta['fecha_operacion']); ?>" class="has-datepicker form-control" id="fecha_operacion" />
							<span class="text-danger"><?php echo form_error('fecha_operacion');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tipo_doc" class="control-label"><span class="text-danger">*</span>Tipo Doc</label>
						<div class="form-group">
							<input type="text" name="tipo_doc" value="<?php echo ($this->input->post('tipo_doc') ? $this->input->post('tipo_doc') : $venta['tipo_doc']); ?>" class="form-control" id="tipo_doc" />
							<span class="text-danger"><?php echo form_error('tipo_doc');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="num_documento" class="control-label"><span class="text-danger">*</span>Num Documento</label>
						<div class="form-group">
							<input type="text" name="num_documento" value="<?php echo ($this->input->post('num_documento') ? $this->input->post('num_documento') : $venta['num_documento']); ?>" class="form-control" id="num_documento" />
							<span class="text-danger"><?php echo form_error('num_documento');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="razon_soc" class="control-label"><span class="text-danger">*</span>Razon Soc</label>
						<div class="form-group">
							<input type="text" name="razon_soc" value="<?php echo ($this->input->post('razon_soc') ? $this->input->post('razon_soc') : $venta['razon_soc']); ?>" class="form-control" id="razon_soc" />
							<span class="text-danger"><?php echo form_error('razon_soc');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label"><span class="text-danger">*</span>Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $venta['email']); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="prod_servicio" class="control-label"><span class="text-danger">*</span>Prod Servicio</label>
						<div class="form-group">
							<input type="text" name="prod_servicio" value="<?php echo ($this->input->post('prod_servicio') ? $this->input->post('prod_servicio') : $venta['prod_servicio']); ?>" class="form-control" id="prod_servicio" />
							<span class="text-danger"><?php echo form_error('prod_servicio');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="precio_unitario" class="control-label"><span class="text-danger">*</span>Precio Unitario</label>
						<div class="form-group">
							<input type="text" name="precio_unitario" value="<?php echo ($this->input->post('precio_unitario') ? $this->input->post('precio_unitario') : $venta['precio_unitario']); ?>" class="form-control" id="precio_unitario" />
							<span class="text-danger"><?php echo form_error('precio_unitario');?></span>
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