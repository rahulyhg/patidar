<?php
$this->breadcrumbs=array(
	'Avsan'=>array('admin'),
	'Manage',
);

$this->menu=array(
	//array('label'=>'List Avsan', 'url'=>array('index')),
	array('label'=>'', 'url'=>array('create'),'linkOptions'=>array('class'=>'Create','title'=>'Create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('avsan-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Avsans</h1>
<!--
<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>
-->
<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'avsan-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
		'header'=>'SN.',
		'class'=>'IndexColumn',
		),
		//'id',
		'avsan_number',		
		array(
		 'name'=>'member_name',
//                'type'=>'raw',		
                'value'=> '$data->rel_avsan_member->member_name',
	          ),
		'ausan_name',
		'ausan_sender_name',
		'ausan_sender_address',
		'ausan_date',
		array(
		 'name'=>'size',
//                'type'=>'raw',		
                'value'=> '$data->rel_avsan_size->size',
	          ),
		'ausan_total_amount',
		'discount',
		'avsan_net_amount',
		//'creation_date',
			/*
		'creation_by',
		*/
		array(
			'class'=>'CButtonColumn',
			'template' => '{view}&nbsp;{update}&nbsp;{delete}',
			'buttons'=>array(
					'view' => array(
				                'label'=>'View', // text label of the button
						'url'=>'Yii::app()->createUrl("avsan/view", array("id"=>$data->id))',
						 'imageUrl'=> Yii::app()->baseUrl.'/images/view.png',  // image URL of the button. If not set or false, a text link is used
				        ),
					'update' => array(
						        'label'=>'Update', // text label of the button
							'url'=>'Yii::app()->createUrl("avsan/update", array("id"=>$data->id))',
						  'imageUrl'=> Yii::app()->baseUrl.'/images/update.png',  // image URL of the button. If not set or false, a text link is used
						),
					'delete' => array(
						        'label'=>'delete', // text label of the button
						  'imageUrl'=> Yii::app()->baseUrl.'/images/delete.png',  // image URL of the button. If not set or false, a text link is used
						),
				 ),
		),
	),
)); ?>