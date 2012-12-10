<?php
$this->breadcrumbs=array(
	'Avsan'=>array('admin'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List Avsan', 'url'=>array('index')),
	array('label'=>'', 'url'=>array('admin'),'linkOptions'=>array('class'=>'Manage','title'=>'Manage')),
);
?>

<h1>Create Avsan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
