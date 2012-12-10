<?php
$this->breadcrumbs=array(
	'Jaharat Type Masters',
);

$this->menu=array(
	array('label'=>'Create JaharatTypeMaster', 'url'=>array('create')),
	array('label'=>'Manage JaharatTypeMaster', 'url'=>array('admin')),
);
?>

<h1>Jaharat Type Masters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
