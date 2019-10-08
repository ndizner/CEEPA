<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Condicion Iva Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('condicion_iva/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Cond Iva</th>
						<th>Descripcion</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($condicion_iva as $c){ ?>
                    <tr>
						<td><?php echo $c['id_cond_iva']; ?></td>
						<td><?php echo $c['descripcion']; ?></td>
						<td>
                            <a href="<?php echo site_url('condicion_iva/edit/'.$c['id_cond_iva']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('condicion_iva/remove/'.$c['id_cond_iva']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
