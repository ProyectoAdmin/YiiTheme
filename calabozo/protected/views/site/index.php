<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<html>
<head>
	<title></title>
</head>
<body>

	
	<section id="header">
				<div class="inner">
 				<span class="image fit"><img  id="pokeball" src="<?php echo Yii::app()->request->baseUrl; ?>/img/poke.png" alt="" /></span>
					<h1>Calabozo del androide<strong></strong><br />
						Juega Bonito.</h1>
					<p>Los mejores coleccionables, pokemon, mitos y leyendas, heroclix y más </p>
					<ul class="actions">
						<li><a href="#one" class="button scrolly">Lee más</a></li>
					</ul>
				</div>
</section>



	<section id="one" class="main style1">
				<div class="container">
					<div class="row 150%">
						<div class="6u 12u$(medium)">
							<header class="major">
								<h2>Lo mejor para tu colección.</h2>
							</header>
							<p>En el Calabozo del Androide nos dedicadamos a juegos de TCG, ademas de artículos coleccionables y Videojuegos..</p>
						</div>
						<div class="6u$ 12u$(medium) important(medium)">
							<span class="image fit"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/img1.jpg" alt="" /></span>
						</div>
					</div>
				</div>
			</section>


				<section id="four" class="main style2 special">
				<div class="container">
					<header class="major">
						<h2>¿Qué estas esperando?</h2>
					</header>
					<p>Completa tu coleccion o comienza una, el calabozo del androide.</p>
					<ul class="actions uniform">
						<!-- <li><?php echo CHtml::link('Sign Up', array('users/Create'), array('class'=>'button special')); ?></li> -->
						<li><?php echo CHtml::link('Log in', array('Site/login'), array('class'=>'button')); ?></li>

					</ul>
				</div>
			</section>

		   


</body>
</html>

