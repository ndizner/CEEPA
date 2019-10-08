<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tipo Usuario Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tipo_usuario/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Tipo Usuario</th>
						<th>Tipo Usuario Estado</th>
						<th>Descripcion</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tipo_usuario as $t){ ?>
                    <tr>
						<td><?php echo $t['id_tipo_usuario']; ?></td>
						<td><?php echo $t['tipo_usuario_estado']; ?></td>
						<td><?php echo $t['descripcion']; ?></td>
						<td>
                            <a href="<?php echo site_url('tipo_usuario/edit/'.$t['id_tipo_usuario']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tipo_usuario/remove/'.$t['id_tipo_usuario']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
