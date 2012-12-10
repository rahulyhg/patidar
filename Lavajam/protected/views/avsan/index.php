<?php
$this->breadcrumbs=array(
	'Avsans',
);

$this->menu=array(
	array('label'=>'Create Avsan', 'url'=>array('create')),
	array('label'=>'Manage Avsan', 'url'=>array('admin')),
);
?>

<h1>Avsans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
