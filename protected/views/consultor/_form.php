<?php
/* @var $this LojaController */
/* @var $model Loja */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'consultor-form',
	'enableAjaxValidation'=>false,
)); ?>

	 <div class="row-fluid">
        <?php echo $form->errorSummary($model); ?>
        <div class="span6">                

            <div class="block">
                <div class="head">                                
                    <h2>Formulário </h2>

                </div> 

                <div class="data-fluid">
 <div class="row-form">
                        <div class="span3">Nome de Usuario:</div>
                        <div class="span9">
                            <div class="input-prepend">
                                <span class="add-on orange"><i class="icon-user icon-white"></i></span>

                                <input type="text" name="username"/>
                                
                            </div>  <span class="bottom">*Nome de usuario para login</span></div>
                    </div>
                    <div class="row-form">
                        <div class="span3">Nome:</div>
                        <div class="span9">
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-user icon-white"></i></span>

                                <?php echo $form->textField($model, 'nome', array('maxlength' => 100)); ?>
                                <?php echo $form->error($model, 'nome'); ?>
                            </div> <span class="bottom">*Nome do Consultor</span> </div>
                    </div>
                    <div class="row-form">
                        <div class="span3">E-mail:</div>
                        <div class="span9">
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-envelope icon-white"></i></span>
                                <?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 100)); ?>
                                <?php echo $form->error($model, 'email'); ?>
                            </div> <span class="bottom">*Email para ativação da conta</span>
                        </div> </div>
                    <div class="row-form">
                        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn')); ?>
                    </div> 
                </div>
            </div>

        </div>
    </div>

                    
                    
                    
                    
		

<?php $this->endWidget(); ?>

</div><!-- form -->