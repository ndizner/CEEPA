<div class="pull-right">
	<a href="<?php echo site_url('usuario/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Usuario</th>
		<th>Id Tipo Usuario</th>
		<th>Id Estado Usuario</th>
		<th>Password</th>
		<th>Nombre</th>
		<th>Actions</th>
    </tr>
	<?php foreach($usuarios as $u){ ?>
    <tr>
		<td><?php echo $u['id_usuario']; ?></td>
		<td><?php echo $u['id_tipo_usuario']; ?></td>
		<td><?php echo $u['id_estado_usuario']; ?></td>
		<td><?php echo $u['password']; ?></td>
		<td><?php echo $u['nombre']; ?></td>
		<td>
            <a href="<?php echo site_url('usuario/edit/'.$u['id_usuario']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('usuario/remove/'.$u['id_usuario']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
