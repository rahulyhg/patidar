<?php
$this->breadcrumbs=array(
	'Expenses'=>array('admin'),
	$model->expense_voucher_no,
);

$this->menu=array(
	//array('label'=>'List Expense', 'url'=>array('index')),
	array('label'=>'', 'url'=>array('create'),'linkOptions'=>array('class'=>'Create','title'=>'Create')),
	array('label'=>'', 'url'=>array('update', 'id'=>$model->id),'linkOptions'=>array('class'=>'Edit','title'=>'Update')),
	array('label'=>'', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?', 'class'=>'Delete','title'=>'Delete')),
	array('label'=>'', 'url'=>array('admin'),'linkOptions'=>array('class'=>'Manage','title'=>'Manage')),
);
?>

<h1>View Expense<?php //echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'expense_voucher_no',		
		//'expense_master_id',
		array(
		 'name'=>'expense_name',
//                'type'=>'raw',		
                'value'=>$model->rel_expense_expensemaster->expense_name,
	          ),
		'expense_amount',
		'expense_date',
	),
)); ?>
