List  Open-->
      <article class="card shadow-1">
          <fieldset>
            <legend>Personas registradas</legend>
            <!--Search Open-->
            <div class="margenesHorizontales">
              <div class="col-md-6">
                <div class=" margenesVerticales">
                 <form class="right" role="search" method="get">
                 	<div class="input-group">
	                    <input type="text" class="form-control" placeholder="Buscar usuarios..." name="filtro">
	                    <span class="input-group-btn">
	                      <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
	                    </span>
					</div>  
				</form>           
                </div>
              </div>
              <div class="col-md-6">
                <div class=" margenesVerticales" style="text-align: right;">
                  <a class="btn btn-primary" href="<?php echo $this->webroot.'addUser';?>">Agregar persona</a>
                </div>
              </div>
              <div style="clear:both;"></div>
            </div>
            <!--Search Close-->
            <div class="margenesHorizontales">
              <div class="table-responsive">
              <table class="table table-striped">
                <tr>
                  <th>Correo Electrónico</th>
                  <th>Nombre y Apellido</th>
                  <!-- <th>Cédula</th> -->
                  <th>Entidad</th>
                  <th>Tipo</th>
                  <th>Autorizado</th>
                  <th>Teléfono</th>
                  <th></th>
                </th>
                <?php foreach ($users as $row): ?>
	                <tr>
	                  <td><?php echo $row['User']['email']; ?></td>
	                  <td><?php echo $row['User']['first_name'].' '.$row['User']['last_name']; ?></td>
					  <!-- <td><?php echo $row['User']['cedula']; ?></td> -->
	                  <td><?php echo $row['Entity']['nombre']; ?></td>
	                  <td><?php echo $row['UserGroup']['name']; ?></td>
	                  <td><?php if($row['User']['autorizado']){echo 'Si';}else{echo 'No';} ?></td>
	                  <td><?php echo $row['User']['phone']; ?></td>
	                  <td>
	                    <div style="display: block; width: 80px; margin: 0 auto;">
	                      <a href="<?php echo $this->webroot.'editUser/'.$row['User']['id'];?>" class="menuTable" title="Editar persona">
	                        <span class="glyphicon glyphicon-pencil"></span>
	                      </a>
	                      <?php if ($row['User']['active']==0): ?>
		                      <a href="<?php echo $this->webroot.'usermgmt/users/makeActiveInactive/'.$row['User']['id'].'/1';?>" class="menuTable" title="Activar persona">
		                        <span class="glyphicon glyphicon-ok"></span>
		                      </a>
	                      <?php else: ?>
		                      <a href="<?php echo $this->webroot.'usermgmt/users/makeActiveInactive/'.$row['User']['id'].'/0';?>" class="menuTable" title="Desactivar persona">
		                        <span class="glyphicon glyphicon-remove"></span>
		                      </a>
	                      <?php endif;?>
	                      <a href="<?php echo $this->webroot.'viewUser/'.$row['User']['id'];?>" class="menuTable" title="Ver persona">
	                        <span class="glyphicon glyphicon-eye-open"></span>
	                      </a>
	                    </div>                  
	                  </td>
	                </tr>
                <?php endforeach; ?>
              </table>
              </div>
            </div> 
          </fieldset>          
      </article>
<!--List  Close