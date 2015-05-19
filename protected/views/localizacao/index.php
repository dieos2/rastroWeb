<?php
/* @var $this LocalizacaoController */
/* @var $dataProvider CActiveDataProvider */



?>
<div class="panel panel-primary" data-collapsed="0" style="zoom: 1; position: static;">
			
			<!-- panel head -->
			<div class="panel-heading">
				<div class="panel-title">Light Panel</div>
				
				<div class="panel-options">
					
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
			
			<!-- panel body -->
			<div class="panel-body">
				
				
				
			

				
				<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=false"></script>
				<script type="text/javascript">
			
				  function initialize() {
					var mapDiv = document.getElementById('normal');
					
                                        
                                        
                                        
                                        
                                        
                                         var myLatlng = new google.maps.LatLng('<?php echo $model->lat ?>', '<?php echo $model->long ?>');
                                        var mapOptions = {
                                          zoom: 16,
                                          center: myLatlng,
                                          mapTypeId: google.maps.MapTypeId.ROADMAP
                                        };
                                        var map = new google.maps.Map(mapDiv, mapOptions);
                                        var contentString = '<div id="content">'+
                                           '<div id="siteNotice">'+
                                           '</div>'+
                                           '<h1 id="firstHeading" class="firstHeading"><?php echo $model->lat?> <?php echo $model->long?></h1>'+
                                           '<div id="bodyContent">'+
                                           '<p><b>Data</b>, <?php echo $model->data ?> <br/>' +
                                           '<b>Velocidade</b>, <?php echo $model->speed ?> Km/h<br/>' +
                                           '<b>Nivel Bateria</b>, <?php if($model->bat == 'F'){ echo 'Cheio';}else if($model->bat == 'L'){echo 'Fraco';}else{echo 'Medio';} ?> <br/>' +
                                           '<b>Nivel Sinal</b>, <?php if($model->signal == 'F'){ echo 'Cheio';}else if($model->bat == 'L'){echo 'Fraco';}else{echo 'Medio';} ?> <br/>' +
                                          
                                           '</div>'+
                                           '</div>';

                                       var infowindow = new google.maps.InfoWindow({
                                           content: contentString
                                       });
                                      var marker = new google.maps.Marker({
                                                                                 position: myLatlng,
                                                                                 map: map,
                                                                                 title: '<?php echo $model->data ?>'
                                                                             });

                                       google.maps.event.addListener(marker, 'click', function() {
                                         infowindow.open(map,marker);
                                       });

                                       Reload();
                                       
                                                              
				  }
				  
			function Reload(){
                            
                             setTimeout(function() {
                                  var $this = jQuery('.panel');
			
			blockUI($this);
			$this.addClass('reloading');
			
			setTimeout(function()
			{
				unblockUI($this)
				$this.removeClass('reloading');
				location.reload();
			}, 1000);
                                       
                                        }, 45000);
                           
                        }
				  google.maps.event.addDomListener(window, 'load', initialize);
				</script>
				<div id="normal" style="height: 500px; width: 100%"></div>
				
			</div>
                        </div>
			
		