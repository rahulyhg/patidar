<?php
$this->breadcrumbs=array(
	'Avsans Rate Details'=>array('admin'),
	$model->id,
);

$this->menu=array(
	//array('label'=>'List RateMasterForAvasan', 'url'=>array('index')),
	array('label'=>'', 'url'=>array('create'),'linkOptions'=>array('class'=>'Create','title'=>'Create')),
	array('label'=>'', 'url'=>array('update', 'id'=>$model->id),'linkOptions'=>array('class'=>'Edit','title'=>'Update')),
	array('label'=>'', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?', 'class'=>'Delete','title'=>'Delete')),
	array('label'=>'', 'url'=>array('admin'),'linkOptions'=>array('class'=>'Manage','title'=>'Manage')),
);
?>

<h1>View Avsan Rate Details <?php //echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'size',
		'rate',
		'color',
		array(
		 'name'=>'created_by',
//                'type'=>'raw',		
                'value'=>User::model()->findByPk($model->created_by)->user_id,
	          ),
		'created_date',
	),
)); ?>
