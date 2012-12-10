<?php
$this->breadcrumbs=array(
	'Rate Masters',
);

$this->menu=array(
	array('label'=>'Create RateMaster', 'url'=>array('create')),
	array('label'=>'Manage RateMaster', 'url'=>array('admin')),
);
?>

<h1>Rate Masters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
