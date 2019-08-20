<div class="pull-right">
	<a href="<?php echo site_url('condicion_iva/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Cond Iva</th>
		<th>Descripcion</th>
		<th>Actions</th>
    </tr>
	<?php foreach($condiciones_iva as $c){ ?>
    <tr>
		<td><?php echo $c['id_cond_iva']; ?></td>
		<td><?php echo $c['descripcion']; ?></td>
		<td>
            <a href="<?php echo site_url('condicion_iva/edit/'.$c['id_cond_iva']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('condicion_iva/remove/'.$c['id_cond_iva']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
