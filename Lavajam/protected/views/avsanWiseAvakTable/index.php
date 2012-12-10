<?php
$this->breadcrumbs=array(
	'Avsan Wise Avak Tables',
);

$this->menu=array(
	array('label'=>'Create AvsanWiseAvakTable', 'url'=>array('create')),
	array('label'=>'Manage AvsanWiseAvakTable', 'url'=>array('admin')),
);
?>

<h1>Avsan Wise Avak Tables</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
