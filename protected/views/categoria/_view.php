<?php
/* @var $this CategoriaController */
/* @var $data Categoria */
?>


<tr class="even gradeC">
			 <td><?php echo ($data->id)?></td>
       <td><?php echo CHtml::encode($data->nome); ?></td>
                        
    
  
    <td>
      		<a href="index.php?r=categoria/update/&id=<?php echo ($data->id)?>" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-pencil"></i>
					Editar
				</a>
				
				
				
				  <a href="javascript:;" onclick="jQuery('#modal-5').modal('show', {backdrop: 'static'});" role="button" data-id="<?php echo ($data->id)?>" data-controller="categoria" class="btn btndelete btn-danger btn-sm btn-icon icon-left">
					<i class="entypo-cancel"></i>
					Deletar
				</a>
			
        
    </td>
		</tr>
