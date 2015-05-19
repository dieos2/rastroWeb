<?php
/* @var $this PremioController */
/* @var $model Premio */


?>
<div class="row">
<hr />
			<ol class="breadcrumb bc-3">
						<li>
				<a href="index.php"><i class="entypo-home"></i>Home</a>
			</li>
					<li>
			
							<a href="index.php/premios">Produtos</a>
					</li>
				<li class="active">
			
							<strong>Novo</strong>
					</li>
					</ol>
			
<h2>Cadastro de Produto</h2>
<br />








<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>

<script>
    jQuery(function(){
      jQuery('#btn-NovaCategoria').click(function (){
            
            debugger;
           var nome = jQuery('#form-NovaCategoria').find('input[id=nome]').val();
           
             <?php
                echo Chtml::ajax(array(
                        'url'=>array('categoria/createajax'),
                        'type'=>'post',
                        'data'=>'js:{nome:nome}',
                        'success'=>"function(data){
                            debugger;
                            data = data.replace('\"', '').replace('[','').replace(']','').replace('\"','');
                            
                            $('#Premio_id_categoria').append(new Option(nome, data));
                            jQuery('#Premio_id_categoria').val(data);
                             jQuery('#modal-NovaCategoria').modal('hide');
                            }"
                ));
            ?>
      
       
         
        
           
        });
})    
</script>