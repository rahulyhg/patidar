<?php
$this->breadcrumbs=array(
	'Expense Group Details'=>array('admin'),
	$model->expense_group_name,
);

$this->menu=array(
	//array('label'=>'List ExpenseGroupMaster', 'url'=>array('index')),
	array('label'=>'', 'url'=>array('create'),'linkOptions'=>array('class'=>'Create','title'=>'Create')),
	array('label'=>'', 'url'=>array('update', 'id'=>$model->id),'linkOptions'=>array('class'=>'Edit','title'=>'Update')),
	array('label'=>'', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?', 'class'=>'Delete','title'=>'Delete')),
	array('label'=>'', 'url'=>array('admin'),'linkOptions'=>array('class'=>'Manage','title'=>'Manage')),
);
?>

<h1>View Expense Group Details<?php //echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'expense_group_name',
		'creation_date',
		//'created_by',
		array(
		 'name'=>'created_by',
//                'type'=>'raw',		
                'value'=>User::model()->findByPk($model->created_by)->user_id,
	          ),
	),
)); ?>
