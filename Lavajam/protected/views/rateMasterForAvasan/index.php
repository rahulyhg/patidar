<?php
$this->breadcrumbs=array(
	'Rate Master For Avasans',
);

$this->menu=array(
	array('label'=>'Create RateMasterForAvasan', 'url'=>array('create')),
	array('label'=>'Manage RateMasterForAvasan', 'url'=>array('admin')),
);
?>

<h1>Rate Master For Avasans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
