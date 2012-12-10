<?php
$this->breadcrumbs=array(
	'Rate Master For Jaherats',
);

$this->menu=array(
	array('label'=>'Create RateMasterForJaherat', 'url'=>array('create')),
	array('label'=>'Manage RateMasterForJaherat', 'url'=>array('admin')),
);
?>

<h1>Rate Master For Jaherats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
