<?php
$this->breadcrumbs=array(
	'Jaherats'=>array('admin'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List Jaharat', 'url'=>array('index')),
	array('label'=>'', 'url'=>array('admin'),'linkOptions'=>array('class'=>'Manage','title'=>'Manage')),
);
?>

<h1>Create Jaherat</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
