<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">
	
	<?php Yii::app()->bootstrap->registerAllCss(); ?>

<?php Yii::app()->bootstrap->registerCoreScripts(); ?>	
	
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mbmenu">
		<?php $this->widget('application.extensions.mbmenu.MbMenu',array(
			'items'=>array(
				array('label'=>'Incio', 'url'=>array('/site/index')),
				array('label'=>'Directorio', 'url'=>array('/site/index'),
						'items'=>array(
                                     array('label'=>'Cliente', 'url'=>array('/cliente/admin')),
                                     array('label'=>'Usuario', 'url'=>array('/usuario/admin'),),
                                        array('label'=>'Rol', 'url'=>array('/rol/admin'),),
                                                                               
                                            
                                  )




					),

				 array('label'=>'Prestamos', 'url'=>array('/site/index'), 
                              'items'=>array(
                                     array('label'=>'Credito', 'url'=>array('/credito/admin')),
                                     array('label'=>'Liquidacion', 'url'=>array('/pago/admin'),),
                                        array('label'=>'Plan de Pago', 'url'=>array('/plandepago/admin'),),
                                                                               
                                            
                                  )
                            ),
				
				array('label'=>'Acerca de', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contacto', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> EMPRESA.<br/>
		Todos los derechos reservados.<br/>
		
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
