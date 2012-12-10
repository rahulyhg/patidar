<?php
$this->breadcrumbs=array(
	'Jaharats',
);

$this->menu=array(
	array('label'=>'Create Jaharat', 'url'=>array('create')),
	array('label'=>'Manage Jaharat', 'url'=>array('admin')),
);
?>

<h1>Jaharats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
