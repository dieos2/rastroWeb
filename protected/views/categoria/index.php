<?php
/* @var $this CategoriaController */
/* @var $dataProvider CActiveDataProvider */


?>

<div class="row">
<h3>Lista de Categorias</h3>
<br />
</div>
<table class="table table-bordered datatable" id="table-categoria">
	<thead>
           <tr>
			<th width="10" id="thbusca"></th>
                        <th width="20%" colspan="">Filtrar Categoria</th>
                            
		</tr>
		<tr>
			<th width="10%">Id</th>
                           <th width="70%">Nome</th>
                            <th width="20%">Ação</th>
                          
		</tr>
	</thead>
	<tbody>
		 <?php
                        $this->widget('zii.widgets.CListView', array(
                            'dataProvider' => $dataProvider,
                            'itemView' => '_view',
                        ));
                        ?>
		
	</tbody>
	<tfoot>
		<tr>
			<th width="10%">Id</th>
                           <th width="70%">Nome</th>
                            <th width="20%">Ação</th>
		</tr>
	</tfoot>
</table>

<script type="text/javascript">
	jQuery(document).ready(function($)
	{
            
		
		var table = $("#table-categoria").dataTable({
			"sPaginationType": "bootstrap",
			"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                       
			"bStateSave": true
		});
		
		table.columnFilter({
			sPlaceHolder : "head:after",
                        aoColumns: [
null,
{ type: "text" }]
		});
              
              jQuery(".dataTables_filter").append('<div class="export-data"><div class="DTTT btn-group"><a href="index.php?r=categoria/create" class="btn btn-success" type="button">Nova Categoria</a></div></div>');
	});
</script>