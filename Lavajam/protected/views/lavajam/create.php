<?php
$this->breadcrumbs=array(
	'Lavajams'=>array('admin'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List Lavajam', 'url'=>array('index')),
	array('label'=>'', 'url'=>array('admin'),'linkOptions'=>array('class'=>'Manage','title'=>'Manage')),
);
?>

<h1>Create Lavajam</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
