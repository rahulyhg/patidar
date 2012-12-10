<?php
$this->breadcrumbs=array(
	'Bank Masters'=>array('admin'),
	$model->bank_name,
);

$this->menu=array(
	//array('label'=>'List BankMaster', 'url'=>array('index')),
	array('label'=>'', 'url'=>array('create'),'linkOptions'=>array('class'=>'Create','title'=>'Create')),
	array('label'=>'', 'url'=>array('update', 'id'=>$model->id),'linkOptions'=>array('class'=>'Edit','title'=>'Update')),
	array('label'=>'', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?', 'class'=>'Delete','title'=>'Delete')),
	array('label'=>'', 'url'=>array('admin'),'linkOptions'=>array('class'=>'Manage','title'=>'Manage')),
);
?>

<h1>View Bank<?php //echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'bank_name',
		'bank_short_name',
		'created_date',
		array(
		 'name'=>'creation_by',
//                'type'=>'raw',		
                'value'=>User::model()->findByPk($model->creation_by)->user_id,
	          ),
		//'creation_by',
	),
)); ?>
