<?php
?>
<div class="row">
<hr />
			<ol class="breadcrumb bc-3">
						<li>
				<a href="index.php"><i class="entypo-home"></i>Home</a>
			</li>
					<li>
			
							<a href="index.php/premios">Categoria</a>
					</li>
				<li class="active">
			
							<strong>Novo</strong>
					</li>
					</ol>
			
<h2>Cadastro de Produto</h2>
<br />



<?php $this->renderPartial('_form', array('model'=>$model)); ?>