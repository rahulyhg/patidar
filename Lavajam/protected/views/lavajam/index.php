<?php
$this->breadcrumbs=array(
	'Lavajams',
);

$this->menu=array(
	array('label'=>'Create Lavajam', 'url'=>array('create')),
	array('label'=>'Manage Lavajam', 'url'=>array('admin')),
);
?>

<h1>Lavajams</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
