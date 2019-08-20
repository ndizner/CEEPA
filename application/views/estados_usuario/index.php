<div class="pull-right">
	<a href="<?php echo site_url('estado_usuario/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Estado Usuario</th>
		<th>Descripcion</th>
		<th>Actions</th>
    </tr>
	<?php foreach($estados_usuario as $e){ ?>
    <tr>
		<td><?php echo $e['id_estado_usuario']; ?></td>
		<td><?php echo $e['descripcion']; ?></td>
		<td>
            <a href="<?php echo site_url('estado_usuario/edit/'.$e['id_estado_usuario']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('estado_usuario/remove/'.$e['id_estado_usuario']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
