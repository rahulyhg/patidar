<?php
$this->breadcrumbs=array(
	'Party Masters',
);

$this->menu=array(
	array('label'=>'Create PartyMaster', 'url'=>array('create')),
	array('label'=>'Manage PartyMaster', 'url'=>array('admin')),
);
?>

<h1>Party Masters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
