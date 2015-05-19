<?php
/* @var $this PremioController */
/* @var $model Premio */
/* @var $form CActiveForm */
if($model->imagem == null){
$model->imagem = "sem-imagem.jpg";
}
        ?>

 <div class="row">
	<div class="col-md-12">
		 
		<div class="panel panel-primary" data-collapsed="0">
		
			<div class="panel-heading">
				<div class="panel-title">
					Formulario
				</div>
				
				<div class="panel-options">
					<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
                    <div class="panel-body">
<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'premio-form',
        'enableAjaxValidation' => false,
        'htmlOptions' => array('enctype' => 'multipart/form-data', 'class'=>"form-horizontal form-groups-bordered"),
    ));
    ?>	<div class="form-group">
						<label class="col-sm-3 control-label">Categoria</label>
						
						<div class="col-sm-5 input-group">
                                                  
                                                    <?php echo $form->dropDownList($model, 'id_categoria', CHtml::listData(Categoria::model()->findAll(),'id','nome'),array("class"=>"form-control")) ?>
                                                   <span class="input-group-btn">
									
                                                                        <a href="javascript:;" onclick="jQuery('#modal-NovaCategoria').modal('show', {backdrop: 'static'});" class="btn btn-blue">Adicionar +</a>
								</span>
						</div>
					</div>
					<div class="form-group">
						<label for="nome" class="col-sm-3 control-label">Nome</label>
						
						<div class="col-sm-5">
                                                    <?php echo $form->textField($model, 'nome', array('type'=>"text", 'class'=>"form-control", 'placeholder'=>"Nome do produto")); ?>
                                                    <?php echo $form->error($model, 'nome'); ?>
							
						</div>
					</div>
					
					<div class="form-group">
						<label for="pontos" class="col-sm-3 control-label">Valor</label>
						
						<div class="col-sm-5">
                                                    <?php echo $form->textField($model, 'pontos', array( 'type'=>"text", 'class'=>"form-control", 'placeholder'=>"Valor do produto")); ?>
                            <?php echo $form->error($model, 'pontos'); ?>
							
						</div>
					</div>
					
					
					
					<div class="form-group">
						<label for="imagem" class="col-sm-3 control-label">Imagem</label>
						
						<div class="col-sm-5">
                                                     <?php echo $form->fileField($model, 'imagem', array('onchange'=>'handleFiles(this.files)',"class"=>"form-control")); ?>
                                <?php echo $form->error($model, 'imagem'); ?>
                               
						<a id="imagemUpload"><img src="imagens/<?php echo $model->imagem ?>" width="220"></a>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
                                                      <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-blue', "value"=>'Salvar')); ?>
							
						</div>
					</div>
	

    <?php $this->endWidget(); ?>

</div>
                    </div>
                </div>
        </div>
 </div>
<script>
$(function(){
    $("#uploadImagem").val('<?php echo ($model->imagem) ?>');
});
function handleFiles(files) {
debugger;
  for (var i = 0; i < files.length; i++) {
    var file = files[i];
    var imageType = /image.*/;
    
    if (!file.type.match(imageType)) {
      continue;
    }
    
    var img = document.createElement("img");
    img.classList.add("obj");
    img.file = file;
    $("#imagemUpload").html(img);
    
    var reader = new FileReader();
    reader.onload = (function(aImg) { return function(e) { aImg.src = e.target.result; }; })(img);
    reader.readAsDataURL(file);
  }
}
</script>




