<div class="pull-right">
	<a href="<?php echo site_url('provincia/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Provincia</th>
		<th>Descripcion</th>
		<th>Actions</th>
    </tr>
	<?php foreach($provincias as $p){ ?>
    <tr>
		<td><?php echo $p['id_provincia']; ?></td>
		<td><?php echo $p['descripcion']; ?></td>
		<td>
            <a href="<?php echo site_url('provincia/edit/'.$p['id_provincia']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('provincia/remove/'.$p['id_provincia']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
