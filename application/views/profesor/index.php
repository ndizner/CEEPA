<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Profesores Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('profesores/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Profesores</th>
						<th>Profesor Estado</th>
						<th>Id Localidad</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Edad</th>
						<th>Dni</th>
						<th>Domicilio</th>
						<th>Estudios</th>
						<th>Email</th>
						<th>Telefono</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($profesores as $p){ ?>
                    <tr>
						<td><?php echo $p['id_profesores']; ?></td>
						<td><?php echo $p['profesor_estado']; ?></td>
						<td><?php echo $p['id_localidad']; ?></td>
						<td><?php echo $p['nombre']; ?></td>
						<td><?php echo $p['apellido']; ?></td>
						<td><?php echo $p['edad']; ?></td>
						<td><?php echo $p['dni']; ?></td>
						<td><?php echo $p['domicilio']; ?></td>
						<td><?php echo $p['estudios']; ?></td>
						<td><?php echo $p['email']; ?></td>
						<td><?php echo $p['telefono']; ?></td>
						<td>
                            <a href="<?php echo site_url('profesores/edit/'.$p['id_profesores']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('profesores/remove/'.$p['id_profesores']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
