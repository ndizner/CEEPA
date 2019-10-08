<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Cursos Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('curso/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Cursos</th>
						<th>Curso Estado</th>
						<th>Id Profesor</th>
						<th>Descripcion</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($cursos as $c){ ?>
                    <tr>
						<td><?php echo $c['id_cursos']; ?></td>
						<td><?php echo $c['curso_estado']; ?></td>
						<td><?php echo $c['id_profesor']; ?></td>
						<td><?php echo $c['descripcion']; ?></td>
						<td>
                            <a href="<?php echo site_url('curso/edit/'.$c['id_cursos']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('curso/remove/'.$c['id_cursos']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
