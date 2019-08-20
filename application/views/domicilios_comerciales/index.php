<div class="pull-right">
	<a href="<?php echo site_url('domicilio_comercial/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Domicilio Comer</th>
		<th>Id Localidad</th>
		<th>Id Provincia</th>
		<th>Calle</th>
		<th>Numero</th>
		<th>Actions</th>
    </tr>
	<?php foreach($domicilios_comerciales as $d){ ?>
    <tr>
		<td><?php echo $d['id_domicilio_comer']; ?></td>
		<td><?php echo $d['id_localidad']; ?></td>
		<td><?php echo $d['id_provincia']; ?></td>
		<td><?php echo $d['calle']; ?></td>
		<td><?php echo $d['numero']; ?></td>
		<td>
            <a href="<?php echo site_url('domicilio_comercial/edit/'.$d['id_domicilio_comer']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('domicilio_comercial/remove/'.$d['id_domicilio_comer']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
