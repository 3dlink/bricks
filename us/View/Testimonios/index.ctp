<div class="testimonios index">
 <!--List  Open-->
      <article class="card shadow-1">
          <fieldset>
            <legend>Testimonios</legend>
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
              <div class="col-md-6">
                <div class=" margenesVerticales" style="text-align: right;">
                  <buttom onclick="window.location.href=WEBROOT+'testimonios/add';" class="btn btn-primary">Agregar Testimonio</buttom>
                </div>
              </div>
              <div style="clear:both;"></div>
            </div>
            <!--Search Close-->
            <div class="margenesHorizontales">
              <table class="table table-striped">
                <tr>
                  <th>Testimonio</th>
                  <th>Firma</th>
                  <th></th>
                </th>

                <?php foreach ($testimonios as $item): ?>
									<tr>
                    <td><?php echo h($item['Testimonio']['testimonio']); ?>&nbsp;</td>
										<td><?php echo h($item['Testimonio']['autor']); ?>&nbsp;</td>
	                  <td>
	                    <div style="display: block; width: 80px; margin: 0 auto;">
                        <?php if($this->UserAuth->getGroupId() == 1){ ?>
  	                      <a href="<?php echo $this->webroot;?>testimonios/edit/<?php echo $item['Testimonio']['id'];?>" title="Editar testimonio" class="menuTable">
  	                        <span class="glyphicon glyphicon-pencil"></span>
  	                      </a>
  	                      <a href="<?php echo $this->webroot;?>testimonios/delete/<?php echo $item['Testimonio']['id'];?>" onclick="if (confirm(&quot;¿Seguro que desea borrar el testimonio?&quot;)) { return true; } return false;" class="menuTable">
  	                        <span class="glyphicon glyphicon-remove"></span></a>
                        <?php } ?>
	                      <!-- <a href="<?php echo $this->webroot;?>testimonios/view/<?php echo $item['Testimonio']['id'];?>" title="Ver testimonio" class="menuTable">
	                        <span class="glyphicon glyphicon-eye-open"></span>
	                      </a> -->
	                    </div>                  
	                  </td>
									</tr>
								<?php endforeach; ?>
              </table>
            </div> 
          </fieldset>          
      </article>
<p>
<?php echo $this->Paginator->counter(array('format' => __('Página {:page} de {:pages}, mostrando {:current} testimono de {:count} en total.')));?>
</p>
<ul class="pagination">
<?php
  echo $this->Paginator->prev('&laquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&laquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
  echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentLink' => true, 'currentClass' => 'active', 'currentTag' => 'a'));
  echo $this->Paginator->next('&raquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&raquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
?>
</ul>

</div>	