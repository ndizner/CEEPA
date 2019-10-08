<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Alumnos Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('alumno/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Alumnos</th>
						<th>Alumno Estado</th>
						<th>Id Carrera</th>
						<th>Id Curso</th>
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
                    <?php foreach($alumnos as $a){ ?>
                    <tr>
						<td><?php echo $a['id_alumnos']; ?></td>
						<td><?php echo $a['alumno_estado']; ?></td>
						<td><?php echo $a['id_carrera']; ?></td>
						<td><?php echo $a['id_curso']; ?></td>
						<td><?php echo $a['id_localidad']; ?></td>
						<td><?php echo $a['nombre']; ?></td>
						<td><?php echo $a['apellido']; ?></td>
						<td><?php echo $a['edad']; ?></td>
						<td><?php echo $a['dni']; ?></td>
						<td><?php echo $a['domicilio']; ?></td>
						<td><?php echo $a['estudios']; ?></td>
						<td><?php echo $a['email']; ?></td>
						<td><?php echo $a['telefono']; ?></td>
						<td>
                            <a href="<?php echo site_url('alumno/edit/'.$a['id_alumnos']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('alumno/remove/'.$a['id_alumnos']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
