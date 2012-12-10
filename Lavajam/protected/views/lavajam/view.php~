<?php
$this->breadcrumbs=array(
	'Lavajams'=>array('admin'),
	$model->id,
);

$this->menu=array(
	//array('label'=>'List Lavajam', 'url'=>array('index')),
	array('label'=>'', 'url'=>array('create'),'linkOptions'=>array('class'=>'Create','title'=>'Create')),
	array('label'=>'', 'url'=>array('update', 'id'=>$model->id),'linkOptions'=>array('class'=>'Edit','title'=>'Update')),
	array('label'=>'', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?', 'class'=>'Delete','title'=>'Delete')),
	array('label'=>'', 'url'=>array('admin'),'linkOptions'=>array('class'=>'Manage','title'=>'Manage')),
);
?>

<h1>View Lavajam <?php //echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		//'member_no',
		array(
		 'name'=>'member_name',
//                'type'=>'raw',		
                'value'=> $model->rel_lavajam_member->member_name,
	          ),
		'lavajam_page_no',
		'lavajam_date',
		'lavajam_no_of',
		'lavajam_amount',
		'lavajam_no_from',
		'lavajam_no_to',
		'creation_date',
		//'created_by',
		array(
		 'name'=>'created_by',
//                'type'=>'raw',		
                'value'=>User::model()->findByPk($model->created_by)->user_id,
	          ),
	),
)); ?>
