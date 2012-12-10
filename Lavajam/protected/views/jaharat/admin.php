<?php
$this->breadcrumbs=array(
	'Jaherats'=>array('admin'),
	'Manage',
);

$this->menu=array(
	//array('label'=>'List Jaharat', 'url'=>array('index')),
	array('label'=>'', 'url'=>array('create'),'linkOptions'=>array('class'=>'Create','title'=>'Create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('jaharat-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Jaherats</h1>
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
	'id'=>'jaharat-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
		'header'=>'SN.',
		'class'=>'IndexColumn',
		),
		//'id',
		'jaharat_biil_no',
		'jaharat_page_no',
		'jaharat_date',
		'jaharat_bill_date',
		array(
		 'name'=>'member_name',
//                'type'=>'raw',		
                'value'=> '$data->rel_jaharat_member->member_name',
	          ),
		array(
		 'name'=>'party_name',
//                'type'=>'raw',		
                'value'=> '$data->rel_jaharat_party->party_name',
	          ),
		array(
		 'name'=>'jaharat_type_name',
//                'type'=>'raw',		
                'value'=> '$data->rel_jaharat_jaharatype->jaharat_type_name',
	          ),
		'jaharat_type_color',
		//'party_no',
		//'member_no',
		//'jaharat_ank_no_from',
		//'jaharat_ank_no_to',
		//'jaharat_type',
		//'jaharat_page_no',
		//'jaharat_by_column',
		//'jaharat_by_cm',
		//'jaharat_rate',
		//'jaharat_total_amount',
		//'jaharat_discount',
		//'jaharat_kasar',
		//'jaharat_net_amount',
		//'jaharat_receive_date',
		//'creation_date',
		/*
		'created_by',
		*/
		array(
			'class'=>'CButtonColumn',
			'template' => '{view}&nbsp;{update}&nbsp;{delete}',
			'buttons'=>array(
					'view' => array(
				                'label'=>'View', // text label of the button
						'url'=>'Yii::app()->createUrl("jaharat/view", array("id"=>$data->id))',
						 'imageUrl'=> Yii::app()->baseUrl.'/images/view.png',  // image URL of the button. If not set or false, a text link is used
				        ),
					'update' => array(
						        'label'=>'Update', // text label of the button
							'url'=>'Yii::app()->createUrl("jaharat/update", array("id"=>$data->id))',
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
