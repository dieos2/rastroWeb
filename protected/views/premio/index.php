<?php
/* @var $this PremioController */
/* @var $dataProvider CActiveDataProvider */

?>
<div class="row">
<h3>Lista de Produtos</h3>
<br />
</div>
<table class="table table-bordered datatable" id="table-premio">
	<thead>
		<tr>
			<th width="10" id="thbusca"></th>
                        <th width="20%" colspan="">Filtrar Categoria</th>
                            
		</tr>
                <tr>
			<th width="10">Image</th>
                           <th width="20%">Categoria</th>
                            <th width="40%">Nome</th>
                            <th width="10%">Valor</th>
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
			<th width="10">Image</th>
                        <th width="20%">Categoria</th>
                            <th width="40%">Nome</th>
                            <th width="10%">Valor</th>
                            <th width="20%">Ação</th>
		</tr>
	</tfoot>
</table>

<script type="text/javascript">
	jQuery(document).ready(function($)
	{
            
		
		var table = $("#table-premio").dataTable({
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
             jQuery(".dataTables_filter").append('<div class="export-data"><div class="DTTT btn-group"><a href="index.php?r=premio/create" class="btn btn-success" type="button">Novo Produto</a><a href="index.php?r=premio/GerarPDF&id=<?php echo $id_categoria?>"" class="btn btn-white DTTT_button_print" id="ToolTables_table-4_4" title="View print view"><span>PDF</span></a></div></div>')
	});
</script>

        