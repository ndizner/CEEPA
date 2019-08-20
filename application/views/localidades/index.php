<div class="pull-right">
	<a href="<?php echo site_url('localidad/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Localidad</th>
		<th>Descripcion</th>
		<th>Actions</th>
    </tr>
	<?php foreach($localidades as $l){ ?>
    <tr>
		<td><?php echo $l['id_localidad']; ?></td>
		<td><?php echo $l['descripcion']; ?></td>
		<td>
            <a href="<?php echo site_url('localidad/edit/'.$l['id_localidad']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('localidad/remove/'.$l['id_localidad']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
