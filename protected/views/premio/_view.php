<tr class="even gradeC">
			 <td><a class="" href="index.php?r=premio/update/&id=<?php echo ($data->id)?>"><img src="imagens/<?php echo $data->imagem?>" class="img-polaroid" style="max-height: 48px; max-width: 70px" /></a></td>
       <td><?php echo CHtml::encode($data->idCategoria->nome); ?></td>
                         <td><?php echo CHtml::encode($data->nome); ?></td>
    <td><?php echo number_format($data->pontos,0,'','.'); ?></td>
  
    <td>
      		<a href="index.php?r=premio/update/&id=<?php echo ($data->id)?>" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-pencil"></i>
					Editar
				</a>
				
				
				
				  <a href="javascript:;" onclick="jQuery('#modal-6').modal('show', {backdrop: 'static'});" role="button" data-id="<?php echo ($data->id)?>" data-controller="premio" class="btn btndelete btn-danger btn-sm btn-icon icon-left">
					<i class="entypo-cancel"></i>
					Deletar
				</a>
			
        
    </td>
		</tr>