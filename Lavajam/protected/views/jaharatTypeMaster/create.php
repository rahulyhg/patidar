<?php
$this->breadcrumbs=array(
	'Jaherat Type'=>array('admin'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List JaharatTypeMaster', 'url'=>array('index')),
	array('label'=>'', 'url'=>array('admin'),'linkOptions'=>array('class'=>'Manage','title'=>'Manage')),
);
?>

<h1>Create Jaherat Type</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
