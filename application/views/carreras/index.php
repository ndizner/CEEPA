<div class="pull-right">
	<a href="<?php echo site_url('carrera/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Carrera</th>
		<th>Descripcion</th>
		<th>Actions</th>
    </tr>
	<?php foreach($carreras as $c){ ?>
    <tr>
		<td><?php echo $c['id_carrera']; ?></td>
		<td><?php echo $c['descripcion']; ?></td>
		<td>
            <a href="<?php echo site_url('carrera/edit/'.$c['id_carrera']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('carrera/remove/'.$c['id_carrera']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
