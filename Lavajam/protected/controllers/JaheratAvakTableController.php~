<?php

class JaheratAvakTableController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','test'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new JaheratAvakTable;

		// Uncomment the following line if AJAX validation is needed
		 $this->performAjaxValidation($model);

		if(isset($_POST['JaheratAvakTable']))
		{
			$model->attributes=$_POST['JaheratAvakTable'];
			$pname=$_POST['JaheratAvakTable']['party_id'];
			$pid=substr($pname,0,1);
			$model->party_id = $pid;
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		 $this->performAjaxValidation($model);
		
		if(isset($_POST['JaheratAvakTable']))
		{
			$model->attributes=$_POST['JaheratAvakTable'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('JaheratAvakTable');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new JaheratAvakTable('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['JaheratAvakTable']))
			$model->attributes=$_GET['JaheratAvakTable'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=JaheratAvakTable::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='jaherat-avak-table-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	public function actionTest()
        {
		$data = array();
		$paid_amt = JaheratAvakTable::model()->findAll(array('condition'=>'bill_no_of_jaharat="'.$_REQUEST['JaheratAvakTable']['bill_no_of_jaharat'].'"'));
		$data = Jaharat::model()->findByAttributes(array('jaharat_biil_no'=>$_REQUEST['JaheratAvakTable']['bill_no_of_jaharat']));
		 $paid_amount = 0;
		if($paid_amt)
		{
			foreach($paid_amt as $p)
			{
				$paid_amount  += $p['amount'];
			}
		}
		else
		{
		   $paid_amount = 0; 
		}

		if($data){
		$name = PartyMaster::model()->findByPk($data['party_no'])->party_name;	
		$bill_date   =  $data-> jaharat_bill_date;
		$net_amount  =  $data->	jaharat_net_amount- $paid_amount;
		}
		else
		{
			$net_amount = '';
		}
		if($data['jaharat_net_amount'] == $paid_amount)
		{
			$net_amount = 'No Unpaid Amount';
			
		}
		echo CJSON::encode(array(
					                	
			      
                       'unpaid_amt' => $net_amount,
		       'paid_amt' => $paid_amount,
		       'bdate' => $bill_date,
		       'pname' =>$data['party_no']." ".$name,
                   ));
 


	
        }
	
}
