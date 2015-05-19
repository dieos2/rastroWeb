<?php
/* @var $this PremioController */
/* @var $model Premio */

?>
     <div class="page-header">
                    <div class="icon">
                        <span class="ico-pen-2"></span>
                    </div>
                    <h1>Produtos <small>EDITA PRODUTOS</small></h1>
                </div>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>