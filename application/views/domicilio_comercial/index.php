<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Domicilio Comercial Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('domicilio_comercial/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Domicilio Comer</th>
						<th>Dom Comer Estado</th>
						<th>Id Localidad</th>
						<th>Id Provincia</th>
						<th>Calle</th>
						<th>Numero</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($domicilio_comercial as $d){ ?>
                    <tr>
						<td><?php echo $d['id_domicilio_comer']; ?></td>
						<td><?php echo $d['dom_comer_estado']; ?></td>
						<td><?php echo $d['id_localidad']; ?></td>
						<td><?php echo $d['id_provincia']; ?></td>
						<td><?php echo $d['calle']; ?></td>
						<td><?php echo $d['numero']; ?></td>
						<td>
                            <a href="<?php echo site_url('domicilio_comercial/edit/'.$d['id_domicilio_comer']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('domicilio_comercial/remove/'.$d['id_domicilio_comer']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
