<!-- Main-body start -->
                           <div class="main-body">
                               <div class="page-wrapper">
                                   <div class="page-body">
                                       <div class="row">
                                           <div class="col-sm-12">
                                               <!-- Zero config.table start -->
                                               <div class="card">
                                                   <div class="card-header">
                                                     <h5><?php echo lang('index_heading');?></h5>
                                                     <span><p><?php echo anchor('auth/create_user', lang('index_create_user_link'))?> | <?php echo anchor('auth/create_group', lang('index_create_group_link'))?>| <?php echo anchor('auth/', lang('active_users'))?></p></span>
                                                       <div class="card-header-right">
                                                           <i class="icofont icofont-rounded-down"></i>
                                                           <i class="icofont icofont-refresh"></i>
                                                           <i class="icofont icofont-close-circled"></i>
                                                       </div>
                                                   </div>
                                                   <div class="card-block">
                                                       <div class="dt-responsive table-responsive">
                                                           <table id="simpletable1" class="table table-striped table-bordered nowrap">
                                                               <thead>
                                                                   <tr>
                                                                     <th><?php echo lang('index_fname_th');?></th>
                                                                    <th><?php echo lang('index_lname_th');?></th>
                                                                    <th><?php echo lang('index_email_th');?></th>
                                                                    <th><?php echo lang('index_identity_th');?></th>
                                                                    <th><?php echo lang('index_last_login_th');?></th>
                                                                    <th><?php echo lang('index_groups_th');?></th>

                                                                    <th><?php echo lang('index_status_th');?></th>
                                                                    <th class="nosort"><?php echo lang('index_action_th');?></th>
                                                                   </tr>
                                                               </thead>
                                                               <tbody>
                                                                 <?php foreach ($users as $user):?>
                                                                   <tr id="<?php echo $user->id?>">
                                                                           <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
                                                                           <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
                                                                           <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
                                                                           <td><?php echo htmlspecialchars($user->username,ENT_QUOTES,'UTF-8');?></td>
                                                                           <td><?php echo htmlspecialchars(date('Y-m-d H:i:s',$user->last_login),ENT_QUOTES,'UTF-8');?></td>
                                                                     <td>
                                                                       <?php foreach ($user->groups as $group):?>
                                                                         <?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
                                                                               <?php endforeach?>


                                                                     </td>

                                                                     <td>


                                                                    </td>
                                                                     <td>
                                                                      <a href="<?php echo base_url("auth/edit_user/".$user->id) ;?>" class="btn btn-info btn-outline-info"><i class="icofont icofont-ui-edit"></i></a>
                                                                      <?php
                                                                         if($user->active){

                                                                             ?>
                                                                             <button onclick=Disable(<?=$user->id?>) class="btn btn-danger btn-outline-danger"><i class="icofont icofont-circled-down"></i></button>
                                                                             <?php
                                                                         }else{
                                                                           ?>
                                                                           <button onclick=Enable(<?=$user->id?>) class="btn btn-success btn-outline-success"><i class="icofont icofont-circled-up"></i></button>

                                                                           <?php
                                                                         }
                                                                       ?>

                                                                     </td>
                                                                   </tr>
                                                                 <?php endforeach;?>
                                                               </tbody>
                                                               <tfoot>
                                                                   <tr>
                                                                     <th><?php echo lang('index_fname_th');?></th>
                                                                    <th><?php echo lang('index_lname_th');?></th>
                                                                    <th><?php echo lang('index_email_th');?></th>
                                                                    <th><?php echo lang('index_identity_th');?></th>
                                                                    <th><?php echo lang('index_last_login_th');?></th>
                                                                    <th><?php echo lang('index_groups_th');?></th>

                                                                    <th><?php echo lang('index_status_th');?></th>
                                                                    <th class="nosort"><?php echo lang('index_action_th');?></th>
                                                                   </tr>
                                                               </tfoot>
                                                           </table>
                                                       </div>
                                                   </div>
                                               </div>
                                               <!-- Zero config.table end -->


                                           </div>
                                       </div>
                                   </div>
                                   <!-- Page-body end -->
                               </div>
                           </div>
                           <!-- Main-body end -->
                           <div id="styleSelector">

                           </div>


 <script>
 function Enable(id) {
   swal({
     title: '¿Confirmar?',
     text: "El Usuario no podrá tener acceso al sistema",
     type: 'warning',
     showCancelButton: true,
     confirmButtonColor: '#3085d6',
     cancelButtonColor: '#d33',
     confirmButtonText: 'Si, delete it!'
   }).then((result) => {
     if (result.value) {
       $.ajax({
                    // Pace.start();
                 type: "POST",
                 url: "<?php echo base_url(); ?>" + "Auth/activate",
                 data : {id:id},
                 success: function(data) {
                   console.log('respuesta: ' + data);
                   if(data==200){
                      $('#' + id).fadeOut(1500);
                     swal(
                       'Exito!',
                       'Se inhabilito correctamente al usuario',
                       'success'
                     )
                   }else{
                     swal(
                       'Error!',
                       data,
                       'error'
                     )
                   }


                 },
                 error: function(data){
                    console.log('error: ' + data);
                 }
             });

     }
   })
 }
 </script>
