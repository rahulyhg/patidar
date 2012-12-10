<?php
$this->breadcrumbs=array(
	'Avsan Avak Tables',
);

$this->menu=array(
	array('label'=>'Create AvsanAvakTable', 'url'=>array('create')),
	array('label'=>'Manage AvsanAvakTable', 'url'=>array('admin')),
);
?>

<h1>Avsan Avak Tables</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
