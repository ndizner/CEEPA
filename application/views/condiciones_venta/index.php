<div class="pull-right">
	<a href="<?php echo site_url('condicion_venta/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Cond Venta</th>
		<th>Descripcion</th>
		<th>Actions</th>
    </tr>
	<?php foreach($condiciones_venta as $c){ ?>
    <tr>
		<td><?php echo $c['id_cond_venta']; ?></td>
		<td><?php echo $c['descripcion']; ?></td>
		<td>
            <a href="<?php echo site_url('condicion_venta/edit/'.$c['id_cond_venta']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('condicion_venta/remove/'.$c['id_cond_venta']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
