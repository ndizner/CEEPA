<div class="pull-right">
	<a href="<?php echo site_url('profesor/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Profesores</th>
		<th>Id Curso</th>
		<th>Id Carrera</th>
		<th>Id Estado Usuario</th>
		<th>Id Datos Personales</th>
		<th>Id Tipo Usuario</th>
		<th>Actions</th>
    </tr>
	<?php foreach($profesores as $p){ ?>
    <tr>
		<td><?php echo $p['id_profesores']; ?></td>
		<td><?php echo $p['id_curso']; ?></td>
		<td><?php echo $p['id_carrera']; ?></td>
		<td><?php echo $p['id_estado_usuario']; ?></td>
		<td><?php echo $p['id_datos_personales']; ?></td>
		<td><?php echo $p['id_tipo_usuario']; ?></td>
		<td>
            <a href="<?php echo site_url('profesor/edit/'.$p['id_profesores']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('profesor/remove/'.$p['id_profesores']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
