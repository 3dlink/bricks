 	<!--Form Open-->
      <article class="card shadow-1">
        <?php echo $this->Form->create('User', array('action' => 'addUser')); ?>
<?php $userito = $this->Session->read('UserAuth'); ?>
          <fieldset>
            <legend>Agregar Persona</legend>
            <div class="margenesHorizontales">
                <div>
                    <div class="col-md-6">
                        <?php 
                            $group = $this->UserAuth->getGroupId();
                            if($group==1){ ?>
                              <div class="form-group">
                                 <label>Entidad</label>
                                 <?php echo $this->Form->input("entity_id" ,array('type' => 'select', 'label' => false,'div' => false,'class'=>"form-control" ))?>
                              </div>
                          <?php  }else{ ?>
                              <div class="form-group">
                                 <label>Entidad</label>
                                 <?php echo $this->Form->input("entity_id" ,array('type' => 'select', 'disabled' => true, 'value'=>$userito['User']['entity_id'], 'label' => false,'div' => false,'class'=>"form-control" ))?>
                                    <input name="data[User][entity_id]" type="hidden" value="<?php echo $userito['User']['entity_id']; ?>">
                              </div>
                          <?php  } ?>
                        <!-- <div class="form-group">
                            <label>Entidad</label>
                            <?php echo $this->Form->input("entity_id" ,array('type' => 'select', 'label' => false,'div' => false,'class'=>"form-control" ))?>
                        </div> -->
                    </div>
					<div class="col-md-6">
            			<div class="form-group">
							<label>Correo Electrónico</label>
			                <?php echo $this->Form->input("email" ,array('label' => false,'div' => false,'class'=>"form-control","placeholder"=>"Correo Electrónico" ))?>
						</div>
            		</div>
                </div>
            	<div>
            		<div class="col-md-6">
            			<div class="form-group">
							<label>Tipo</label>
			                <?php echo $this->Form->input("user_group_id" ,array('type' => 'select', 'label' => false,'div' => false,'class'=>"form-control" ))?>
			                </select>
						</div>
            		</div>
					<div class="col-md-6">
            			<div class="form-group">
							<label>Cédula</label>
			                <?php echo $this->Form->input("cedula" ,array('label' => false,'div' => false,'class'=>"form-control","placeholder"=>"Cédula" ))?>
						</div>
            		<div style="clear:both;"></div>
            	</div>
            	<div>
            		<div class="col-md-6">
            			<div class="form-group">
			                <label>Nombre</label>
			                <?php echo $this->Form->input("first_name" ,array('label' => false,'div' => false,'class'=>"form-control","placeholder"=>"Nombre" ))?>
						</div>
            		</div>
            		<div class="col-md-6">
            			<div class="form-group">
							<label>Apellido</label>
			                <?php echo $this->Form->input("last_name" ,array('label' => false,'div' => false,'class'=>"form-control","placeholder"=>"Apellido" ))?>
						</div>
            		</div>
            		<div style="clear:both;"></div>
            	</div>            	
            	<div>            		
            		<div class="col-md-6">
            			<div class="form-group">
							<label>Local</label>
			                <?php echo $this->Form->input("phone" ,array('label' => false,'div' => false,'class'=>"form-control","placeholder"=>"Local" ))?>
						</div>
            		</div>
            		<div class="col-md-6">
            			<div class="form-group">
			                <label>Móvil</label>
			                <?php echo $this->Form->input("movil" ,array('label' => false,'div' => false,'class'=>"form-control","placeholder"=>"Móvil" ))?>
						</div>
            		</div>
            		<div style="clear:both;"></div>
            	</div>
            	<div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Autorizado a Declarar Desastre</label>
                            <select class="form-control" name="data[User][autorizado]">
                                <?php if(isset($this->data['User']['autorizado'])):?>
                                    <?php if($this->data['User']['autorizado']):?>
                                        <option value="0" >No</option>
                                        <option value="1" selected>Si</option>
                                    <?php else:?>
                                        <option value="0" selected>No</option>
                                        <option value="1" >Si</option>
                                    <?php endif;?>
                                <?php else:?>
                                    <option value="0" selected>No</option>
                                    <option value="1" >Si</option>
                                <?php endif;?>
                            </select>
                        </div>
                    </div>
            		<div class="col-md-6">
            			<div class="form-group">
							<label>Cargo</label>
			                <?php echo $this->Form->input("office" ,array('label' => false,'div' => false,'class'=>"form-control","placeholder"=>"Cargo" ))?>
						</div>
            		</div>
            		<div style="clear:both;"></div>
            	</div>            	
            	<div>
            		<div class="col-md-6">
            			<div class="form-group">
			                <label>Contraseña</label>
			                <?php echo $this->Form->input("password" ,array("type"=>"password",'label' => false,'div' => false,'class'=>"form-control","placeholder"=>"Contraseña" ))?>
						</div>
            		</div>
            		<div class="col-md-6">
            			<div class="form-group">
							<label>Repetir contraseña</label>
			                <?php echo $this->Form->input("cpassword" ,array("type"=>"password",'label' => false,'div' => false,'class'=>"form-control","placeholder"=>"Repetir contraseña" ))?>
						</div>
            		</div>
            		<div style="clear:both;"></div>
            	</div>
				<div class="margenesVerticales" style="text-align:right;">
					<input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'allUsers';" title="regresar" value = "Atr&aacute;s" style="width: 79px;">
					<button class="btn btn-primary">
						Guardar
					</button>
				</div>
			</div>          
          </fieldset>          
        <?php echo $this->Form->end(); ?>
      </article>
	<!--Form Close-->
   