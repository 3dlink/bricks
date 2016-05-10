<section id="preguntas">
	<div id="preguntas_content">
			<h6>FAQ</h6>

			<div class="panel-group">
				<?php foreach ($faqs as $key=>$value) { ?>
					<div class="panel panel-default">
						<a id="a_<?php echo $value['Faq']['id']; ?>" data-toggle="collapse" data-target="#collapse<?php echo $value['Faq']['id']; ?>">
							<div class="panel-heading">
								<div class="plus">+</div>
								<h4 class="panel-title">
									<?php echo $value['Faq']['ask']; ?>
								</h4>
							</div>
						</a>
						<div id="collapse<?php echo $value['Faq']['id']; ?>" class="panel-collapse collapse <?php if($key==0) echo 'in'; ?>">
							<div class="panel-body">
								<div class="body-panel">
									<p><?php echo nl2br($value['Faq']['answer']); ?></p>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
	</div>
</section>