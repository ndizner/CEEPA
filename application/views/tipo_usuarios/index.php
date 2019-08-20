<div class="pull-right">
	<a href="<?php echo site_url('tipo_usuario/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Tipo Usuario</th>
		<th>Descripcion</th>
		<th>Actions</th>
    </tr>
	<?php foreach($tipo_usuarios as $t){ ?>
    <tr>
		<td><?php echo $t['id_tipo_usuario']; ?></td>
		<td><?php echo $t['descripcion']; ?></td>
		<td>
            <a href="<?php echo site_url('tipo_usuario/edit/'.$t['id_tipo_usuario']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('tipo_usuario/remove/'.$t['id_tipo_usuario']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
