<?php
$this->breadcrumbs=array(
	'Jaherats Rate Details '=>array('admin'),
	//$model->id=>array('view','id'=>$model->id),
	$model->rate_type_color,
	'Update',
);

$this->menu=array(
	//array('label'=>'List RateMasterForJaherat', 'url'=>array('index')),
	array('label'=>'', 'url'=>array('create'),'linkOptions'=>array('class'=>'Create','title'=>'Create')),
	array('label'=>'', 'url'=>array('view', 'id'=>$model->id),'linkOptions'=>array('class'=>'View','title'=>'View')),
	array('label'=>'', 'url'=>array('admin'),'linkOptions'=>array('class'=>'Manage','title'=>'Manage')),
);
?>

<h1>Update Jaherat Rate Details <?php //echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
