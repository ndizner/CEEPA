<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Provincias Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('provincia/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
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
                            <a href="<?php echo site_url('provincia/edit/'.$p['id_provincia']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('provincia/remove/'.$p['id_provincia']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
