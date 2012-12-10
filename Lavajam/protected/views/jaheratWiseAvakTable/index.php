<?php
$this->breadcrumbs=array(
	'Jaherat Wise Avak Tables',
);

$this->menu=array(
	array('label'=>'Create JaheratWiseAvakTable', 'url'=>array('create')),
	array('label'=>'Manage JaheratWiseAvakTable', 'url'=>array('admin')),
);
?>

<h1>Jaherat Wise Avak Tables</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
