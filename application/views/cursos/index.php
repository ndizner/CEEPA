<div class="pull-right">
	<a href="<?php echo site_url('curso/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Cursos</th>
		<th>Id Profesor</th>
		<th>Descripcion</th>
		<th>Cant Alumnos</th>
		<th>Duracion Dias</th>
		<th>Horario Inicio</th>
		<th>Horario Fin</th>
		<th>Dia Cursada</th>
		<th>Turno</th>
		<th>Actions</th>
    </tr>
	<?php foreach($cursos as $c){ ?>
    <tr>
		<td><?php echo $c['id_cursos']; ?></td>
		<td><?php echo $c['id_profesor']; ?></td>
		<td><?php echo $c['descripcion']; ?></td>
		<td><?php echo $c['cant_alumnos']; ?></td>
		<td><?php echo $c['duracion_dias']; ?></td>
		<td><?php echo $c['horario_inicio']; ?></td>
		<td><?php echo $c['horario_fin']; ?></td>
		<td><?php echo $c['dia_cursada']; ?></td>
		<td><?php echo $c['turno']; ?></td>
		<td>
            <a href="<?php echo site_url('curso/edit/'.$c['id_cursos']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('curso/remove/'.$c['id_cursos']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
