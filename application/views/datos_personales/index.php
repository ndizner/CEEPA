<div class="pull-right">
	<a href="<?php echo site_url('datos_personales/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Datos Personales</th>
		<th>Estado Psicofisico</th>
		<th>Id Localidad</th>
		<th>Id Provincia</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Fecha Nacimiento</th>
		<th>Tel</th>
		<th>Email</th>
		<th>Calle</th>
		<th>Numero</th>
		<th>Codigo Postal</th>
		<th>Contacto Emergencia</th>
		<th>Tel Emergencia</th>
		<th>Parentesco Emergencia</th>
		<th>Actions</th>
    </tr>
	<?php foreach($datos_personales as $d){ ?>
    <tr>
		<td><?php echo $d['id_datos_personales']; ?></td>
		<td><?php echo $d['estado_psicofisico']; ?></td>
		<td><?php echo $d['id_localidad']; ?></td>
		<td><?php echo $d['id_provincia']; ?></td>
		<td><?php echo $d['nombre']; ?></td>
		<td><?php echo $d['apellido']; ?></td>
		<td><?php echo $d['fecha_nacimiento']; ?></td>
		<td><?php echo $d['tel']; ?></td>
		<td><?php echo $d['email']; ?></td>
		<td><?php echo $d['calle']; ?></td>
		<td><?php echo $d['numero']; ?></td>
		<td><?php echo $d['codigo_postal']; ?></td>
		<td><?php echo $d['contacto_emergencia']; ?></td>
		<td><?php echo $d['tel_emergencia']; ?></td>
		<td><?php echo $d['parentesco_emergencia']; ?></td>
		<td>
            <a href="<?php echo site_url('datos_personales/edit/'.$d['id_datos_personales']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('datos_personales/remove/'.$d['id_datos_personales']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
