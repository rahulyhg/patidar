<?php
$this->breadcrumbs=array(
	'Expense Masters',
);

$this->menu=array(
	array('label'=>'Create ExpenseMaster', 'url'=>array('create')),
	array('label'=>'Manage ExpenseMaster', 'url'=>array('admin')),
);
?>

<h1>Expense Masters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
