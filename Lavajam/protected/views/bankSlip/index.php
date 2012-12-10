<?php
$this->breadcrumbs=array(
	'Bank Slips',
);

$this->menu=array(
	array('label'=>'Create BankSlip', 'url'=>array('create')),
	array('label'=>'Manage BankSlip', 'url'=>array('admin')),
);
?>

<h1>Bank Slips</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
