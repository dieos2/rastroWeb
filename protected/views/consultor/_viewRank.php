<?php
/* @var $this ArquitetoController */
/* @var $data Arquiteto */
?>
<tr>

    <td><?php echo CHtml::encode($data->nome); ?></td>
    <td><?php echo CHtml::encode($data->codigo); ?></td>
    <td><?php echo CHtml::encode($data->email); ?></td>

    <td>
        <?php
       
$conta = 0;
        $pontos = Pontuacao::model()->findAllByAttributes(array('id_arquiteto'=>$data->id,));
         foreach ($pontos as $item)
    {
            $dataHoje = strtotime(date("m/d/Y"));
            $dataExp  = explode('/',$item->data_exp);
            $novaDataExp = strtotime(intval($dataExp[1]).'/'.intval($dataExp[0]).'/'.intval($dataExp[2]));
            if($dataHoje <= $novaDataExp){
      $conta = $conta + $item->pontos;
    }}
      echo $conta ;
       
        ?>
    </td>
</tr>



