<?php
$this->breadcrumbs=array(
	'Member'=>array('admin'),
	//$model->id=>array('view','id'=>$model->id),
	$model->member_name,
	'Update',
);

$this->menu=array(
	//array('label'=>'List MemberMaster', 'url'=>array('index')),
	
	array('label'=>'', 'url'=>array('create'),'linkOptions'=>array('class'=>'Create','title'=>'Create')),
	array('label'=>'', 'url'=>array('view', 'id'=>$model->id),'linkOptions'=>array('class'=>'View','title'=>'View')),
	array('label'=>'', 'url'=>array('admin'),'linkOptions'=>array('class'=>'Manage','title'=>'Manage')),
);
?>

<h1>Update Member <?php //echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
