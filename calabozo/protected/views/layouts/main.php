<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap-3.0.0/css/bootstrap.min.css" media="screen, projection" >
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">

	<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
	<?php Yii::app()->clientScript->registerCoreScript('jquery.ui');?>

	<?php 
	$baseUrl = Yii::app()->baseUrl;
	$cs = Yii::app()->getClientScript();
	$cs->registerScriptFile($baseUrl.'/js/skel.min.js');
	$cs->registerScriptFile($baseUrl.'/js/init.js');
	$cs->registerScriptFile($baseUrl.'/js/jquery.scrolly.min.js');

	?>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

</head>
<body>

<div class="container" id="page">


     <div id="header-content-container">
          <div id="header-content">
              <div id="headerlogo"><h2>Calabozo de el androide</h2></div>
	
		<div class="navbarU">
				<?php $this->widget('zii.widgets.CMenu',array(
					'items'=>array(
						array('label'=>'Inicio', 'url'=>array('/site/index')),
						//array('label'=>'Acerca', 'url'=>array('/site/page', 'view'=>'about')),
	     			    array('label'=>'Registro producto', 'url'=>array('/producto')), 
					    array('label'=>'Registro usuario', 'url'=>array('/usuarios')),
					    array('label'=>'Registro rol', 'url'=>array('/rol')),
					    array('label'=>'Registro juego', 'url'=>array('/juego')),
					    array('label'=>'Registro expansion', 'url'=>array('/expansion')),
						//array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Contacto', 'url'=>array('/site/contact')),
						array('label'=>'Login', 'url'=>array('/site/login')),
						array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					),
				)); ?>
		</div>
	
		<div id="hsearch">
		                 	<div id="headermenu">
		                 	 </div>
		                 	 </div>
	                 	</div>
                 </div>
            </div>


	<!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>


<section id="footer">
				<ul class="icons">
					<li><a href="https://www.facebook.com/ElCalabozoDelAndroideGdl" trajet="_blank" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; Uinit</li> GVSDAN<li>
				</ul>
			</section><!-- footer -->

</div><!-- page -->

</body>
</html>
