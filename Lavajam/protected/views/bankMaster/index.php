<?php
$this->breadcrumbs=array(
	'Bank Masters',
);

$this->menu=array(
	array('label'=>'Create BankMaster', 'url'=>array('create')),
	array('label'=>'Manage BankMaster', 'url'=>array('admin')),
);
?>

<h1>Bank Masters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
