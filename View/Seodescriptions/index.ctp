<div class="seodescriptions index">
 <!--List  Open-->
      <article class="card shadow-1">
          <fieldset>
            <legend>SEO Description</legend>
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
                  <th>Description</th>
                  <th></th>
                </th>

                <?php foreach ($seodescriptions as $item): ?>
									<tr>
                    <td><?php echo h($item['Seodescription']['description']); ?>&nbsp;</td>
	                  <td>
	                    <div style="display: block; width: 80px; margin: 0 auto;">
                        <?php if($this->UserAuth->getGroupId() == 1){ ?>
  	                      <a href="<?php echo $this->webroot;?>seodescriptions/edit/<?php echo $item['Seodescription']['id'];?>" title="Editar description" class="menuTable">
  	                        <span class="glyphicon glyphicon-pencil"></span>
  	                      </a>
                        <?php } ?>
	                    </div>                  
	                  </td>
									</tr>
								<?php endforeach; ?>
              </table>
            </div> 
          </fieldset>          
      </article>


</div>	