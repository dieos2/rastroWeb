

<hr />
			<ol class="breadcrumb bc-3">
						<li>
				<a href="index.html"><i class="entypo-home"></i>Home</a>
			</li>
					<li>
			
							<a href="tables-main.html">Condominio</a>
					</li>
				<li class="active">
			
							<strong>Despesas Extra</strong>
					</li>
					</ol>
			
<h2>Despesas Extras</h2>

<br />


<table class="table table-bordered datatable" id="table-3">
	<thead>
		<tr class="replace-inputs">
			
			
			
			
		</tr>
		<tr>
			
			<th>Id</th>
                        <th>Sala</th>
			<th>Descrição</th>
                        <th>Valor</th>
                        <th>Data</th>
			<th>Detalhes</th>
			
		</tr>
	</thead>
							

	<tbody>
		
		 <tr class="even gradeA">
			<td>1</td>
                        <td>Sala 1</td>
                        <td>Crédito 3 Diarias</td>
                        <td>10,00</td>
                        <td>05/12/14</td>
			<td><a href="#" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-pencil"></i>
					Editar
				</a>
                        <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
					<i class="entypo-info"></i>
					Detalhes
				</a></td>
			
			
		</tr>
                 <tr class="even gradeA">
			<td>2</td>
                         <td>Sala 1</td>
                        <td>Conserto Forro</td>
                        <td>10,00</td>
                        <td>05/12/14</td>
			<td><a href="#" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-pencil"></i>
					Editar
				</a>
                        <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
					<i class="entypo-info"></i>
					Detalhes
				</a></td>
			
			
		</tr>
                 <tr class="even gradeA">
			<td>3</td>
                         <td>Sala 1</td>
                        <td>Pagamento IPTU 2012</td>
                        <td>10,00</td>
                        <td>05/12/14</td>
			<td><a href="#" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-pencil"></i>
					Editar
				</a>
                        <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
					<i class="entypo-info"></i>
					Detalhes
				</a></td>
			
			
		</tr>
                 <tr class="even gradeA">
			<td>4</td>
                         <td>Sala 1</td>
                        <td>Pagamento IPTU 2010 parcela 2/2</td>
                        <td>10,00</td>
                        <td>05/12/14</td>
			<td><a href="#" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-pencil"></i>
					Editar
				</a>
                        <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
					<i class="entypo-info"></i>
					Detalhes
				</a></td>
			
			
		</tr>
                 <tr class="even gradeA">
			<td>5</td>
                         <td>Sala 1</td>
                        <td>Provisão IPTU 2010 parcela 3/3</td>
                        <td>20,00</td>
                        <td>05/12/14</td>
			<td><a href="#" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-pencil"></i>
					Editar
				</a>
                        <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
					<i class="entypo-info"></i>
					Detalhes
				</a></td>
			
			
		</tr>
                 <tr class="even gradeA">
			<td>6</td>
                        <td>Sala 1</td>
                        <td>EVENTUAL 02</td>
                        <td>40,00</td>
                        <td>05/12/14</td>
			<td><a href="#" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-pencil"></i>
					Editar
				</a>
                        <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
					<i class="entypo-info"></i>
					Detalhes
				</a></td>
			
			
		</tr>
                 <tr class="even gradeA">
			<td>7</td>
                        <td>Sala 1</td>
                        <td>CRÉDITO 01</td>
                        <td>80,00</td>
                        <td>05/12/14</td>
			<td><a href="#" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-pencil"></i>
					Editar
				</a>
                        <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
					<i class="entypo-info"></i>
					Detalhes
				</a></td>
			
			
		</tr>
                 <tr class="even gradeA">
			<td>8</td>
                        <td>Sala 1</td>
                        <td>CRÉDITO 02</td>
                        <td>50,00</td>
                        <td>05/12/14</td>
			<td><a href="#" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-pencil"></i>
					Editar
				</a>
                        <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
					<i class="entypo-info"></i>
					Detalhes
				</a></td>
			
			
		</tr>
               
	</tbody>
	<tfoot>
		<tr>
			<th>Id</th>
                        <th>Sala</th>
			<th>Descrição</th>
                        <th>Valor</th>
                        <th>Data</th>
			<th>Detalhes</th>
			
		</tr>
	</tfoot>
</table>

<script type="text/javascript">
	jQuery(document).ready(function($)
	{
		var table = $("#table-3").dataTable({
			"sPaginationType": "bootstrap",
			"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
			"bStateSave": true
		});
		
		table.columnFilter({
			"sPlaceHolder" : "head:after"
		});
	});
</script>


<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/datatables/TableTools.min.js"></script>
	<script src="js/dataTables.bootstrap.js"></script>
	<script src="js/datatables/jquery.dataTables.columnFilter.js"></script>
	<script src="js/datatables/lodash.min.js"></script>
