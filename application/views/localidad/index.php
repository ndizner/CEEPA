<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Localidades Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('localidades/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Localidad</th>
						<th>Id Provincia</th>
						<th>Descripcion</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($localidades as $l){ ?>
                    <tr>
						<td><?php echo $l['id_localidad']; ?></td>
						<td><?php echo $l['id_provincia']; ?></td>
						<td><?php echo $l['descripcion']; ?></td>
						<td>
                            <a href="<?php echo site_url('localidades/edit/'.$l['id_localidad']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('localidades/remove/'.$l['id_localidad']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
