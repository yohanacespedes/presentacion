<h1>bienvenido <i><?php echo CHtml::encode(Yii::app()->name); ?></i>
</h1>



<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

$this->widget('zii.widgets.CMenu', array(
        'items'=>array(
                array(
                        'label'=>CHtml::image(Yii::app()->request->baseUrl."/images/prestamos.png"),
                ),
        ),
        'encodeLabel' => false,
));
?>





