<div class="works index">
 <!--List  Open-->
      <article class="card shadow-1">
          <fieldset>
            <legend>Video de Cómo Funciona</legend>
            <!--Search Open-->
            <div class="margenesHorizontales">
              <div class="col-md-6">
                <div class=" margenesVerticales">
	              	<form class="right" role="search" method="get">
	                 <div class="input-group">
	                  </div>  
									</form>            
                </div>
              </div>
              <div style="clear:both;"></div>
            </div>
            <!--Search Close-->
            <div class="margenesHorizontales">
              <table class="table table-striped">
                <tr>
                  <th>Nombre</th>
                  <th>URL</th>
                  <th></th>
                </th>

                <?php foreach ($works as $item): ?>
									<tr>
                    <td><?php echo h($item['Work']['name']); ?>&nbsp;</td>
                    <td><?php echo h($item['Work']['url']); ?>&nbsp;</td>
	                  <td>
	                    <div style="display: block; width: 80px; margin: 0 auto;">
                        <?php if($this->UserAuth->getGroupId() == 1){ ?>
  	                      <a href="<?php echo $this->webroot;?>works/edit/<?php echo $item['Work']['id'];?>" title="Editar work" class="menuTable">
  	                        <span class="glyphicon glyphicon-pencil"></span>
  	                      </a>
                        <?php } ?>
	                      <a href="<?php echo $this->webroot;?>comoFunciona" title="Ver work" class="menuTable">
	                        <span class="glyphicon glyphicon-eye-open"></span>
	                      </a>
	                    </div>                  
	                  </td>
									</tr>
								<?php endforeach; ?>
              </table>
            </div> 
          </fieldset>          
      </article>


</div>	