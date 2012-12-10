<?php
$this->breadcrumbs=array(
	'Jaherat Avak Tables',
);

$this->menu=array(
	array('label'=>'Create JaheratAvakTable', 'url'=>array('create')),
	array('label'=>'Manage JaheratAvakTable', 'url'=>array('admin')),
);
?>

<h1>Jaherat Avak Tables</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
