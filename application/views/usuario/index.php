<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Usuarios Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('usuario/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Usuario</th>
						<th>Usuario Estado</th>
						<th>Id Tipo Usuario</th>
						<th>Password</th>
						<th>Nombre</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($usuarios as $u){ ?>
                    <tr>
						<td><?php echo $u['id_usuario']; ?></td>
						<td><?php echo $u['usuario_estado']; ?></td>
						<td><?php echo $u['id_tipo_usuario']; ?></td>
						<td><?php echo $u['password']; ?></td>
						<td><?php echo $u['nombre']; ?></td>
						<td>
                            <a href="<?php echo site_url('usuario/edit/'.$u['id_usuario']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('usuario/remove/'.$u['id_usuario']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
