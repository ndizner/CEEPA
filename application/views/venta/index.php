<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Ventas Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('venta/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Ventas</th>
						<th>Venta Estado</th>
						<th>Id Condicion Venta</th>
						<th>Id Cond Iva</th>
						<th>Id Domicilio Comercial</th>
						<th>Fecha Operacion</th>
						<th>Tipo Doc</th>
						<th>Num Documento</th>
						<th>Razon Soc</th>
						<th>Email</th>
						<th>Prod Servicio</th>
						<th>Precio Unitario</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($ventas as $v){ ?>
                    <tr>
						<td><?php echo $v['id_ventas']; ?></td>
						<td><?php echo $v['venta_estado']; ?></td>
						<td><?php echo $v['id_condicion_venta']; ?></td>
						<td><?php echo $v['id_cond_iva']; ?></td>
						<td><?php echo $v['id_domicilio_comercial']; ?></td>
						<td><?php echo $v['fecha_operacion']; ?></td>
						<td><?php echo $v['tipo_doc']; ?></td>
						<td><?php echo $v['num_documento']; ?></td>
						<td><?php echo $v['razon_soc']; ?></td>
						<td><?php echo $v['email']; ?></td>
						<td><?php echo $v['prod_servicio']; ?></td>
						<td><?php echo $v['precio_unitario']; ?></td>
						<td>
                            <a href="<?php echo site_url('venta/edit/'.$v['id_ventas']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('venta/remove/'.$v['id_ventas']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
