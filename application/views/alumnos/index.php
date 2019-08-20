<div class="pull-right">
	<a href="<?php echo site_url('alumno/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Alumnos</th>
		<th>Id Carrera</th>
		<th>Id Curso</th>
		<th>Id Estado Usuario</th>
		<th>Id Datos Personales</th>
		<th>Actions</th>
    </tr>
	<?php foreach($alumnos as $a){ ?>
    <tr>
		<td><?php echo $a['id_alumnos']; ?></td>
		<td><?php echo $a['id_carrera']; ?></td>
		<td><?php echo $a['id_curso']; ?></td>
		<td><?php echo $a['id_estado_usuario']; ?></td>
		<td><?php echo $a['id_datos_personales']; ?></td>
		<td>
            <a href="<?php echo site_url('alumno/edit/'.$a['id_alumnos']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('alumno/remove/'.$a['id_alumnos']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
