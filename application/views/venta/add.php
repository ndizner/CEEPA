<?php echo form_open('venta/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_condicion_venta" class="col-md-4 control-label">Condicion Venta</label>
		<div class="col-md-8">
			<select name="id_condicion_venta" class="form-control">
				<option value="">select condicion_venta</option>
				<?php 
				foreach($all_condiciones_venta as $condicion_venta)
				{
					$selected = ($condicion_venta['id_cond_venta'] == $this->input->post('id_condicion_venta')) ? ' selected="selected"' : "";

					echo '<option value="'.$condicion_venta['id_cond_venta'].'" '.$selected.'>'.$condicion_venta['id_cond_venta'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="id_cond_iva" class="col-md-4 control-label">Condicion Iva</label>
		<div class="col-md-8">
			<select name="id_cond_iva" class="form-control">
				<option value="">select condicion_iva</option>
				<?php 
				foreach($all_condiciones_iva as $condicion_iva)
				{
					$selected = ($condicion_iva['id_cond_iva'] == $this->input->post('id_cond_iva')) ? ' selected="selected"' : "";

					echo '<option value="'.$condicion_iva['id_cond_iva'].'" '.$selected.'>'.$condicion_iva['id_cond_iva'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="id_domicilio_comercial" class="col-md-4 control-label">Domicilio Comercial</label>
		<div class="col-md-8">
			<select name="id_domicilio_comercial" class="form-control">
				<option value="">select domicilio_comercial</option>
				<?php 
				foreach($all_domicilios_comerciales as $domicilio_comercial)
				{
					$selected = ($domicilio_comercial['id_domicilio_comer'] == $this->input->post('id_domicilio_comercial')) ? ' selected="selected"' : "";

					echo '<option value="'.$domicilio_comercial['id_domicilio_comer'].'" '.$selected.'>'.$domicilio_comercial['id_domicilio_comer'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="fecha_operacion" class="col-md-4 control-label">Fecha Operacion</label>
		<div class="col-md-8">
			<input type="text" name="fecha_operacion" value="<?php echo $this->input->post('fecha_operacion'); ?>" class="form-control" id="fecha_operacion" />
		</div>
	</div>
	<div class="form-group">
		<label for="tipo_doc" class="col-md-4 control-label">Tipo Doc</label>
		<div class="col-md-8">
			<input type="text" name="tipo_doc" value="<?php echo $this->input->post('tipo_doc'); ?>" class="form-control" id="tipo_doc" />
		</div>
	</div>
	<div class="form-group">
		<label for="num_documento" class="col-md-4 control-label">Num Documento</label>
		<div class="col-md-8">
			<input type="text" name="num_documento" value="<?php echo $this->input->post('num_documento'); ?>" class="form-control" id="num_documento" />
		</div>
	</div>
	<div class="form-group">
		<label for="razon_soc" class="col-md-4 control-label">Razon Soc</label>
		<div class="col-md-8">
			<input type="text" name="razon_soc" value="<?php echo $this->input->post('razon_soc'); ?>" class="form-control" id="razon_soc" />
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-md-4 control-label">Email</label>
		<div class="col-md-8">
			<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
		</div>
	</div>
	<div class="form-group">
		<label for="prod_servicio" class="col-md-4 control-label">Prod Servicio</label>
		<div class="col-md-8">
			<input type="text" name="prod_servicio" value="<?php echo $this->input->post('prod_servicio'); ?>" class="form-control" id="prod_servicio" />
		</div>
	</div>
	<div class="form-group">
		<label for="precio_unitario" class="col-md-4 control-label">Precio Unitario</label>
		<div class="col-md-8">
			<input type="text" name="precio_unitario" value="<?php echo $this->input->post('precio_unitario'); ?>" class="form-control" id="precio_unitario" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>