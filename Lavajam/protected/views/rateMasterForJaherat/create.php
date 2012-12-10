<?php
$this->breadcrumbs=array(
	'Jaherats Rate Details '=>array('admin'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List RateMasterForJaherat', 'url'=>array('index')),
	array('label'=>'', 'url'=>array('admin'),'linkOptions'=>array('class'=>'Manage','title'=>'Manage')),
);
?>

<h1>Create Jaherat Rate Details</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
