<?php
$this->breadcrumbs=array(
	'Expense Group Masters',
);

$this->menu=array(
	array('label'=>'Create ExpenseGroupMaster', 'url'=>array('create')),
	array('label'=>'Manage ExpenseGroupMaster', 'url'=>array('admin')),
);
?>

<h1>Expense Group Masters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
