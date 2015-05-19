<hr />


<script type="text/javascript">
jQuery(document).ready(function($) 
{
	// Sample Toastr Notification
	setTimeout(function()
	{			
		var opts = {
			"closeButton": true,
			"debug": false,
			"positionClass": rtl() || public_vars.$pageContainer.hasClass('right-sidebar') ? "toast-top-left" : "toast-top-right",
			"toastClass": "black",
			"onclick": null,
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
		};

		toastr.success("You have been awarded with 1 year free subscription. Enjoy it!", "Account Subcription Updated", opts);
	}, 3000);
	
	
	// Sparkline Charts
	$('.inlinebar').sparkline('html', {type: 'bar', barColor: '#ff6264'} );
	$('.inlinebar-2').sparkline('html', {type: 'bar', barColor: '#445982'} );
	$('.inlinebar-3').sparkline('html', {type: 'bar', barColor: '#00b19d'} );
	$('.bar').sparkline([ [1,4], [2, 3], [3, 2], [4, 1] ], { type: 'bar' });
	$('.pie').sparkline('html', {type: 'pie',borderWidth: 0, sliceColors: ['#3d4554', '#ee4749','#00b19d']});
	$('.linechart').sparkline();
	$('.pageviews').sparkline('html', {type: 'bar', height: '30px', barColor: '#ff6264'} );
	$('.uniquevisitors').sparkline('html', {type: 'bar', height: '30px', barColor: '#00b19d'} );
	
	
	$(".monthly-sales").sparkline([1,2,3,5,6,7,2,3,3,4,3,5,7,2,4,3,5,4,5,6,3,2], {
		type: 'bar',
		barColor: '#485671',
		height: '80px',
		barWidth: 10,
		barSpacing: 2
	});	
	
	 
	 $("#calendar").fullCalendar({
		header: {
			left: '',
			right: '',
		},
		
		firstDay: 1,
		height: 200,
	});
	// JVector Maps
	var map = $("#map");
	
	map.vectorMap({
		map: 'europe_merc_en',
		zoomMin: '3',
		backgroundColor: '#383f47',
		focusOn: { x: 0.5, y: 0.8, scale: 3 }
	});		
	
			
	
	// Line Charts
	var line_chart_demo = $("#line-chart-demo");
	
	var line_chart = Morris.Line({
		element: 'line-chart-demo',
		data: [
			{ y: '2006', a: 100, b: 90 },
			{ y: '2007', a: 75,  b: 65 },
			{ y: '2008', a: 50,  b: 40 },
			{ y: '2009', a: 75,  b: 65 },
			{ y: '2010', a: 50,  b: 40 },
			{ y: '2011', a: 75,  b: 65 },
			{ y: '2012', a: 100, b: 90 }
		],
		xkey: 'y',
		ykeys: ['a', 'b'],
		labels: ['October 2013', 'November 2013'],
		redraw: true
	});
	
	line_chart_demo.parent().attr('style', '');
	
	
	// Donut Chart
	var donut_chart_demo = $("#donut-chart-demo");
	
	donut_chart_demo.parent().show();
	
	var donut_chart = Morris.Donut({
		element: 'donut-chart-demo',
		data: [
			{label: "Download Sales", value: getRandomInt(10,50)},
			{label: "In-Store Sales", value: getRandomInt(10,50)},
			{label: "Mail-Order Sales", value: getRandomInt(10,50)}
		],
		colors: ['#707f9b', '#455064', '#242d3c']
	});
	
	donut_chart_demo.parent().attr('style', '');
	
	
	// Area Chart
	var area_chart_demo = $("#area-chart-demo");
	
	area_chart_demo.parent().show();
	
	var area_chart = Morris.Area({
		element: 'area-chart-demo',
		data: [
			{ y: '2006', a: 100, b: 90 },
			{ y: '2007', a: 75,  b: 65 },
			{ y: '2008', a: 50,  b: 40 },
			{ y: '2009', a: 75,  b: 65 },
			{ y: '2010', a: 50,  b: 40 },
			{ y: '2011', a: 75,  b: 65 },
			{ y: '2012', a: 100, b: 90 }
		],
		xkey: 'y',
		ykeys: ['a', 'b'],
		labels: ['Series A', 'Series B'],
		lineColors: ['#303641', '#576277']
	});
	
	area_chart_demo.parent().attr('style', '');
	
	
	
	
	
});


function getRandomInt(min, max) 
{
	return Math.floor(Math.random() * (max - min + 1)) + min;
}
</script>

<div class="row">
<div class="col-sm-3">
	
		<div class="tile-stats tile-red">
			<div class="icon"><i class="entypo-users"></i></div>
			<div class="num" data-start="0" data-end="03" data-postfix="" data-duration="1500" data-delay="0">0</div>
			
			<h3>Salas</h3>
			<p>Com aluguel atrasado</p>
		</div>
		
	</div>
	
	<div class="col-sm-3">
	
		<div class="tile-stats tile-green">
			<div class="icon"><i class="entypo-chart-bar"></i></div>
			<div class="num" data-start="0" data-end="1000" data-postfix="" data-duration="1500" data-delay="600">0</div>
			
			<h3>Recebidos</h3>
			<p>no mês de Janeiro.</p>
		</div>
		
	</div>
	
	<div class="col-sm-3">
	
		<div class="tile-stats tile-aqua">
			<div class="icon"><i class="entypo-mail"></i></div>
			<div class="num" data-start="0" data-end="2" data-postfix="" data-duration="1500" data-delay="1200">0</div>
			
			<h3>Contratos</h3>
			<p>que precisão ser renovados.</p>
		</div>
		
	</div>
	
	<div class="col-sm-3">
	
		<div class="tile-stats tile-blue">
			<div class="icon"><i class="entypo-rss"></i></div>
			<div class="num" data-start="0" data-end="15" data-postfix="" data-duration="1500" data-delay="1800">0</div>
			
			<h3>Inquilinos</h3>
			<p>Distribuidos em 10 salas</p>
		</div>
		
	</div>
</div>


<br />
<div class="row">
	

	
	<div class="col-sm-12">
		
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title">Aluguéis a receber</div>
				
				<div class="panel-options">
					<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
				
			<table class="table table-bordered table-responsive">
				<thead>
		
		<tr>
			
			<th>Nome</th>
                        <th>Sala</th>
			<th>Vencimento</th>
                        <th>Referência</th>
			<th>Detalhes</th>
			
		</tr>
	</thead>
	<tbody>
		  <tr class="even gradeA">
			<td>Dr Carlos Alberto Alves Tavares</td>
                        <td>Sala 1</td>
                        <td><p class="bs-example bs-baseline-top"><button type="button" class="btn btn-red btn-xs">10/01/15</button></p></td>
                        <td>Janeiro</td>
			<td>
                        <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
					<i class="entypo-info"></i>
					Detalhes
				</a></td>
			
			
		</tr>
		  <tr class="even gradeA">
			<td>Dr Luiz Pedro Ruschel</td>
                         <td>Sala 2</td>
                        <td><p class="bs-example bs-baseline-top"><button type="button" class="btn btn-red btn-xs">10/01/15</button></p></td>
                        <td>Janeiro</td>
			<td>
                        <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
					<i class="entypo-info"></i>
					Detalhes
				</a></td>
			
			
		</tr>
		  <tr class="even gradeA">
			<td>Dr Rafael Machado Karsburg</td>
                         <td>Sala 3</td>
                       <td><p class="bs-example bs-baseline-top"><button type="button" class="btn btn-red btn-xs">10/01/15</button></p></td>
                        <td>Janeiro</td>
			<td>
                        <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
					<i class="entypo-info"></i>
					Detalhes
				</a></td>
			
			
		</tr>
		  <tr class="even gradeA">
			<td>Dr Ronaldo Da Silva Lemes</td>
                         <td>Sala 4</td>
                       <td><p class="bs-example bs-baseline-top"><button type="button" class="btn btn-red btn-xs">10/01/15</button></p></td>
                        <td>Janeiro</td>
			<td>
                        <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
					<i class="entypo-info"></i>
					Detalhes
				</a></td>
			
			
		</tr>
		  <tr class="even gradeA">
			<td>Dr Carla Vandame da Silva</td>
                         <td>Sala 5</td>
                        
                        <td><p class="bs-example bs-baseline-top"><button type="button" class="btn btn-red btn-xs">10/01/15</button></p></td>
                        <td>Janeiro</td>
			<td>
                        <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
					<i class="entypo-info"></i>
					Detalhes
				</a></td>
			
			
		</tr>
                 <tr class="even gradeA">
			<td>Dr Expedito Ubiratan H Cardoso</td>
                         <td>Sala 6</td>
                       
                        <td><p class="bs-example bs-baseline-top"><button type="button" class="btn btn-red btn-xs">10/01/15</button></p></td>
                        <td>Janeiro</td>
			<td>
                        <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
					<i class="entypo-info"></i>
					Detalhes
				</a></td>
			
			
		</tr>
                 <tr class="even gradeA">
			<td>Dr Ernani Peres Neto</td>
                         <td>Sala 7</td>
                        
                       <td><p class="bs-example bs-baseline-top"><button type="button" class="btn btn-red btn-xs">10/01/15</button></p></td>
                        <td>Janeiro</td>
			<td>
                        <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
					<i class="entypo-info"></i>
					Detalhes
				</a></td>
		</tr>
                <tr class="even gradeA">
			<td>Dr Claudio Stapassoli Filho</td>
                         <td>Sala 8</td>
                        
                        <td><p class="bs-example bs-baseline-top"><button type="button" class="btn btn-red btn-xs">10/01/15</button></p></td>
                        <td>Janeiro</td>
			<td>
                        <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
					<i class="entypo-info"></i>
					Detalhes
				</a></td>
			
			
		</tr>
                 <tr class="even gradeA">
			<td>Dr Enio Paulo Pereira De Araujo</td>
                         <td>Sala 9</td>
                        
                        <td><p class="bs-example bs-baseline-top"><button type="button" class="btn btn-red btn-xs">10/01/15</button></p></td>
                        <td>Janeiro</td>
			<td>
                        <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
					<i class="entypo-info"></i>
					Detalhes
				</a></td>
			
			
		</tr>
                 <tr class="even gradeA">
			<td>Dr Luiz Alberto Domingues Matte</td>
                         <td>Sala 10</td>
                        
                        <td><p class="bs-example bs-baseline-top"><button type="button" class="btn btn-red btn-xs">10/01/15</button></p></td>
                        <td>Janeiro</td>
			<td>
                        <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
					<i class="entypo-info"></i>
					Detalhes
				</a></td>
			
			
		</tr>
                <tr class="even gradeA">
			<td>Dr Angela Chapon Cordeiro Madeir</td>
                         <td>Sala 11</td>
                        
                        <td><p class="bs-example bs-baseline-top"><button type="button" class="btn btn-red btn-xs">10/01/15</button></p></td>
                        <td>Janeiro</td>
			<td>
                        <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
					<i class="entypo-info"></i>
					Detalhes
				</a></td>
			
			
		</tr>
	</tbody>
	
			</table>
		</div>
		
	</div>
	
</div>
<br />

<div class="row">
	<div class="col-sm-8">
	
		<div class="panel panel-primary" id="charts_env">
		
			<div class="panel-heading">
				<div class="panel-title">Faturado/Recebido</div>
				
				<div class="panel-options">
					<ul class="nav nav-tabs">
						<li class=""><a href="#area-chart" data-toggle="tab">Area Chart</a></li>
						<li class="active"><a href="#line-chart" data-toggle="tab">Line Charts</a></li>
						<li class=""><a href="#pie-chart" data-toggle="tab">Pie Chart</a></li>
					</ul>
				</div>
			</div>
	
			<div class="panel-body">
			
				<div class="tab-content">
				
					<div class="tab-pane" id="area-chart">							
						<div id="area-chart-demo" class="morrischart" style="height: 300px"></div>
					</div>
					
					<div class="tab-pane active" id="line-chart">
						<div id="line-chart-demo" class="morrischart" style="height: 300px"></div>
					</div>
					
					<div class="tab-pane" id="pie-chart">
						<div id="donut-chart-demo" class="morrischart" style="height: 300px;"></div>
					</div>
					
				</div>
				
			</div>

			
			
		</div>	

	</div>

		<div class="col-sm-4">
		<div class="panel panel-primary panel-table">
			<div class="panel-heading">
				<div class="panel-title">
					<h3>Eventos</h3>
					<span>eventos deste mês</span>
				</div>
				
				<div class="panel-options">
					<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
			<div class="panel-body">
				<div id="calendar" class="calendar-widget">
				</div>
			</div>
		</div>
	</div>
</div>

<br />


<script type="text/javascript">
	// Code used to add Todo Tasks
	jQuery(document).ready(function($)
	{
		var $todo_tasks = $("#todo_tasks");
		
		$todo_tasks.find('input[type="text"]').on('keydown', function(ev)
		{
			if(ev.keyCode == 13)
			{
				ev.preventDefault();
				
				if($.trim($(this).val()).length)
				{
					var $todo_entry = $('<li><div class="checkbox checkbox-replace color-white"><input type="checkbox" /><label>'+$(this).val()+'</label></div></li>');
					$(this).val('');
					
					$todo_entry.appendTo($todo_tasks.find('.todo-list'));
					$todo_entry.hide().slideDown('fast');
					replaceCheckboxes();
				}
			}
		});
	});
</script>

