<?php /* @var $this Controller */


$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />
	
	<title>Distribuidora | Dashboard</title>
	

	<link rel="stylesheet" href="js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/neon-core.css">
	<link rel="stylesheet" href="css/neon-theme.css">
	<link rel="stylesheet" href="css/neon-forms.css">
	<link rel="stylesheet" href="css/custom.css">

	<script src="js/jquery-1.11.0.min.js"></script>

	<!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	
</head>
<body class="page-body  page-fade" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->	
	
	<div class="sidebar-menu">
		
			
		<header class="logo-env">
			
			<!-- logo -->
			<div class="logo">
				<a href="index.php">
					<img src="images/logo@2x.png" width="120" alt="" />
				</a>
			</div>
			
						<!-- logo collapse icon -->
						
			<div class="sidebar-collapse">
				<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>
			
									
			
			<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
			<div class="sidebar-mobile-menu visible-xs">
				<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
					<i class="entypo-menu"></i>
				</a>
			</div>
			
		</header>
				
		
		
				
		
				
		<ul id="main-menu" class="">
			<!-- add class "multiple-expanded" to allow multiple submenus to open -->
			<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
			<!-- Search Bar -->
			<?php $id_user = Yii::app()->user->getId();
                                $model2 = User::model()->findByPk($id_user);
                                 $tipo = $model2->id_tipoUser;
                                ?>
			<li class="produto">
				<a href="index.php?r=localizacao/index">
					<i class="entypo-gauge"></i>
					<span class="localizacao">Localização</span>
				</a>
				<ul>
                                    <li class="">
						<a href="index.php?r=localizacao/index">
							<span>Atual</span>
						</a>
					</li>
                                   <li class="">
						<a href="index.php?r=localizacao/historico">
							<span>Historico</span>
						</a>
					</li>
					
				
				</ul>
			</li>
                        <?php if($tipo == "1"){
                            
                        echo '<li>'.
				'<a href="index.php?r=categoria">'.
					'<i class="entypo-layout"></i>'.
					'<span class="categoria">Categoria</span>'.
				'</a>'.
				'<ul>'.
					'<li>'.
						'<a href="index.php?r=categoria">'.
							'<span>Lista</span>'.
						'</a>'.
					'</li>'.
					'<li>'.
						'<a href="index.php?r=categoria/create">'.
							'<span>Nova</span>'.
						'</a>'.
					'</li>'.
					
				'</ul>'.
			'</li>'.
			'<li>'.
				'<a href="index.php?r=consultor">'.
					'<i class="entypo-monitor"></i>'.
					'<span class="consultor">Consultor</span>'.
				'</a>'.
                            '<ul>'.
					'<li>'.
						'<a href="index.php?r=consultor">'.
							'<span>Lista</span>'.
						'</a>'.
					'</li>'.
					'<li>'.
						'<a href="index.php?r=consultor/create">'.
							'<span>Nova</span>'.
						'</a>'.
					'</li>'.
					
				'</ul>'.
                        '</li>'; }?>
			
		</ul>
				
	</div>	
<div class="main-content">
		
<div class="row">
	
	<!-- Profile Info and Notifications -->
	<div class="col-md-6 col-sm-8 clearfix">
		
		<ul class="user-info pull-left pull-none-xsm">
		
						<!-- Profile Info -->
			<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
				
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<img src="images/thumb-1@2x.png" alt="" class="img-circle" width="44" />
					<?php 
                                echo $model2->username
                                        ?>
				</a>
				
				<ul class="dropdown-menu">
					
					<!-- Reverse Caret -->
					<li class="caret"></li>
					
					<!-- Profile sub-links -->
					<li>
						<a href="index.php?r=perfil">
							<i class="entypo-user"></i>
							Editar Perfil
						</a>
					</li>
					
					
				</ul>
			</li>
		
		</ul>
				
	
	
	</div>
	
	
	<!-- Raw Links -->
	<div class="col-md-6 col-sm-4 clearfix hidden-xs">
		
		<ul class="list-inline links-list pull-right">
			
			<!-- Language Selector -->			
			
			<li class="sep"></li>
			
			<li>
				<a href="index.php?r=site/Logout">
					Sair <i class="entypo-logout right"></i>
				</a>
			</li>
		</ul>
		
	</div>
	
</div>
<?php   $url =(explode('r=',$actual_link));
$url1 = $url[1];
         $menu = (explode('/', $url1));
          
?>
	<?php echo $content; ?>
    </div>
	
	
<div id="chat" class="fixed" data-current-user="Art Ramadani" data-order-by-status="1" data-max-chat-history="25">
	
	<div class="chat-inner">
	
		
		<h2 class="chat-header">
			<a href="#" class="chat-close" data-animate="1"><i class="entypo-cancel"></i></a>
			
			<i class="entypo-users"></i>
			Chat
			<span class="badge badge-success is-hidden">0</span>
		</h2>
		
		
		<div class="chat-group" id="group-1">
			<strong>Favorites</strong>
			
			<a href="#" id="sample-user-123" data-conversation-history="#sample_history"><span class="user-status is-online"></span> <em>Catherine J. Watkins</em></a>
			<a href="#"><span class="user-status is-online"></span> <em>Nicholas R. Walker</em></a>
			<a href="#"><span class="user-status is-busy"></span> <em>Susan J. Best</em></a>
			<a href="#"><span class="user-status is-offline"></span> <em>Brandon S. Young</em></a>
			<a href="#"><span class="user-status is-idle"></span> <em>Fernando G. Olson</em></a>
		</div>
		
		
		<div class="chat-group" id="group-2">
			<strong>Work</strong>
			
			<a href="#"><span class="user-status is-offline"></span> <em>Robert J. Garcia</em></a>
			<a href="#" data-conversation-history="#sample_history_2"><span class="user-status is-offline"></span> <em>Daniel A. Pena</em></a>
			<a href="#"><span class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a>
		</div>
		
		
		<div class="chat-group" id="group-3">
			<strong>Social</strong>
			
			<a href="#"><span class="user-status is-busy"></span> <em>Velma G. Pearson</em></a>
			<a href="#"><span class="user-status is-offline"></span> <em>Margaret R. Dedmon</em></a>
			<a href="#"><span class="user-status is-online"></span> <em>Kathleen M. Canales</em></a>
			<a href="#"><span class="user-status is-offline"></span> <em>Tracy J. Rodriguez</em></a>
		</div>
	
	</div>
	
	<!-- conversation template -->
	<div class="chat-conversation">
		
		<div class="conversation-header">
			<a href="#" class="conversation-close"><i class="entypo-cancel"></i></a>
			
			<span class="user-status"></span>
			<span class="display-name"></span> 
			<small></small>
		</div>
		
		<ul class="conversation-body">	
		</ul>
		
		<div class="chat-textarea">
			<textarea class="form-control autogrow" placeholder="Type your message"></textarea>
		</div>
		
	</div>
	
</div>


<!-- Chat Histories -->
<ul class="chat-history" id="sample_history">
	<li>
		<span class="user">Art Ramadani</span>
		<p>Are you here?</p>
		<span class="time">09:00</span>
	</li>
	
	<li class="opponent">
		<span class="user">Catherine J. Watkins</span>
		<p>This message is pre-queued.</p>
		<span class="time">09:25</span>
	</li>
	
	<li class="opponent">
		<span class="user">Catherine J. Watkins</span>
		<p>Whohoo!</p>
		<span class="time">09:26</span>
	</li>
	
	<li class="opponent unread">
		<span class="user">Catherine J. Watkins</span>
		<p>Do you like it?</p>
		<span class="time">09:27</span>
	</li>
</ul>




<!-- Chat Histories -->
<ul class="chat-history" id="sample_history_2">
	<li class="opponent unread">
		<span class="user">Daniel A. Pena</span>
		<p>I am going out.</p>
		<span class="time">08:21</span>
	</li>
	
	<li class="opponent unread">
		<span class="user">Daniel A. Pena</span>
		<p>Call me when you see this message.</p>
		<span class="time">08:27</span>
	</li>
</ul>
</div>
    !-- Sample Modal (Default skin) -->
<div class="modal fade" id="sample-modal-dialog-1">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Widget Options - Default Modal</h4>
			</div>
			
			<div class="modal-body">
				<p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now.</p>
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>

<!-- Sample Modal (Skin inverted) -->
<div class="modal invert fade" id="sample-modal-dialog-2">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Widget Options - Inverted Skin Modal</h4>
			</div>
			
			<div class="modal-body">
				<p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now.</p>
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<!-- Modal 6 (Long Modal)-->
<div class="modal fade" id="modal-6">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Deletar produto</h4>
			</div>
			
			<div class="modal-body">
			
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="field-1" class="control-label">Você tem certeza que deseja deletar esse produto?</label>
							
							
						</div>	
						
					</div>
					
					
				</div>
			
				
				
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                <a href="" id="" type="button" class="adelete btn btn-info">Deletar</a>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal-5">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Deletar categoria</h4>
			</div>
			
			<div class="modal-body">
			
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="field-1" class="control-label">Você tem certeza que deseja deletar essa categoria?</label>
							
							
						</div>	
						
					</div>
					
					
				</div>
			
				
				
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                <a href="" id="" type="button" class="adelete btn btn-info">Deletar</a>
			</div>
		</div>
	</div>
</div>
<!-- Modal Cria Nova Categoria (Long Modal)-->
<div class="modal fade" id="modal-NovaCategoria">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Nova Categoria</h4>
			</div>
			
			<div class="modal-body">
			<form id="form-NovaCategoria" class="form-inline" role="form" data-validate="parsley">
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="nome" class="control-label">Nome</label>
                                                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Categoria">
					
                                     
                                      
                                    
							
						</div>	
						
					</div>
					
					
				</div>
			</form>
				
				
			</div>
			
			<div class="modal-footer">
				
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<a  id="btn-NovaCategoria" class="btn btn-info">Criar</a>
			</div>
		</div>
	</div>
</div>



<!-- Sample Modal (Skin gray) -->
<div class="modal gray fade" id="sample-modal-dialog-3">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Widget Options - Gray Skin Modal</h4>
			</div>
			
			<div class="modal-body">
				<p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now.</p>
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
	<link rel="stylesheet" href="js/jvectormap/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" href="js/rickshaw/rickshaw.min.css">
  <link rel="stylesheet" href="js/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="js/select2/select2.css">
	<link rel="stylesheet" href="js/selectboxit/jquery.selectBoxIt.css">
	<link rel="stylesheet" href="js/daterangepicker/daterangepicker-bs3.css">
	<link rel="stylesheet" href="js/icheck/skins/minimal/_all.css">
	<link rel="stylesheet" href="js/icheck/skins/square/_all.css">
	<link rel="stylesheet" href="js/icheck/skins/flat/_all.css">
	<link rel="stylesheet" href="js/icheck/skins/futurico/futurico.css">
	<link rel="stylesheet" href="js/icheck/skins/polaris/polaris.css">
	<!-- Bottom Scripts -->
           <script src="js/gsap/main-gsap.js"></script>
	<script src="js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
        <script src="js/select2/select2.min.js"></script>
	<script src="js/bootstrap-tagsinput.min.js"></script>
        
	<script src="js/typeahead.min.js"></script>
	<script src="js/selectboxit/jquery.selectBoxIt.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-timepicker.min.js"></script>
	<script src="js/bootstrap-colorpicker.min.js"></script>
	<script src="js/daterangepicker/moment.min.js"></script>
	<script src="js/daterangepicker/daterangepicker.js"></script>
	<script src="js/jquery.multi-select.js"></script>
	<script src="js/icheck/icheck.min.js"></script>
     
         <script src="js/jquery.dataTables.min.js"></script>
	<script src="js/datatables/TableTools.min.js"></script>
	<script src="js/dataTables.bootstrap.js"></script>
	<script src="js/datatables/jquery.dataTables.columnFilter.js"></script>
	<script src="js/datatables/lodash.min.js"></script>
        
	<script src="js/bootstrap.js"></script>
	<script src="js/joinable.js"></script>
	<script src="js/resizeable.js"></script>
	<script src="js/neon-api.js"></script>
	<script src="js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
	<script src="js/jquery.sparkline.min.js"></script>
	<script src="js/rickshaw/vendor/d3.v3.js"></script>
	<script src="js/rickshaw/rickshaw.min.js"></script>
	<script src="js/raphael-min.js"></script>
	<script src="js/morris.min.js"></script>
	<script src="js/toastr.js"></script>
	<script src="js/neon-chat.js"></script>
	<script src="js/neon-custom.js"></script>
	<script src="js/neon-demo.js"></script>
       
	
	
	
	
        <script>
            jQuery(function(){
                jQuery(".summary").hide();
                 $(".btndelete").on('click',function(){
                     debugger;
            $(".adelete").attr('href','index.php?r='+$(this).attr('data-controller')+'/deletar&id='+$(this).attr('data-id'));
        });
        debugger;
        $("span.<?php echo $menu[0] ; ?>").trigger("click");
     
            });
            </script>
</body>
</html>
