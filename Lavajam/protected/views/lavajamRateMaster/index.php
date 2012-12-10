<?php
$this->breadcrumbs=array(
	'Lavajam Rate Masters',
);

$this->menu=array(
	array('label'=>'Create LavajamRateMaster', 'url'=>array('create')),
	array('label'=>'Manage LavajamRateMaster', 'url'=>array('admin')),
);
?>

<h1>Lavajam Rate Masters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
