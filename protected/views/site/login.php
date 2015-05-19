<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />
	
	<title>Neon | Login</title>
	

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
<body class="page-body login-page login-form-fall" data-url="http://neon.dev">


<!-- This is needed when you send requests via Ajax --><script type="text/javascript">
var baseurl = '';
</script>

<div class="login-container">
	
	<div class="login-header login-caret">
		
		<div class="login-content">
			
			<a href="index.html" class="logo">
				<img src="images/logo@2x.png" width="120" alt="" />
			</a>
			
			<p class="description">Dear user, log in to access the admin area!</p>
			
			<!-- progress bar indicator -->
			<div class="login-progressbar-indicator">
				<h3>43%</h3>
				<span>logging in...</span>
			</div>
		</div>
		
	</div>
	
	<div class="login-progressbar">
		<div></div>
	</div>
	
	<div class="login-form">
		
		<div class="login-content">
			
			<div class="form-login-error">
				<h3>Invalid login</h3>
				<p>Enter <strong>demo</strong>/<strong>demo</strong> as login and password.</p>
			</div>
			        <div class="form">
       
       
            
         
      
			 <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
				
				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-user"></i>
						</div>
						
						   <?php echo $form->textField($model,'username', array("class"=>"form-control", "placeholder"=>"Username")); ?>
		<?php echo $form->error($model,'username'); ?>
					</div>
					
				</div>
				
				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-key"></i>
						</div>
						
						  <?php echo $form->passwordField($model,'password', array("class"=>"form-control", "placeholder"=>"Username")); ?>
		<?php echo $form->error($model,'password'); ?>
					</div>
				
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block btn-login">
						<i class="entypo-login"></i>
						Login In
					</button>
				</div>
						
			
			
			
		
			  <?php $this->endWidget(); ?>
    </div> 
		</div>
		
	</div>
	
</div>


	<!-- Bottom Scripts -->
	<script src="js/gsap/main-gsap.js"></script>
	<script src="js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/joinable.js"></script>
	<script src="js/resizeable.js"></script>
	<script src="js/neon-api.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/neon-login.js"></script>
	<script src="js/neon-custom.js"></script>
	<script src="js/neon-demo.js"></script>

</body>
</html>