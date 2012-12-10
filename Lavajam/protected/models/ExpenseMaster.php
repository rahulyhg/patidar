<?php

/**
 * This is the model class for table "expense_master".
 *
 * The followings are the available columns in table 'expense_master':
 * @property integer $id
 * @property string $expense_name
 * @property integer $expense_group_id
 * @property string $creation_date
 * @property integer $created_by
 */
class ExpenseMaster extends CActiveRecord
{
	public $expense_group_name;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ExpenseMaster the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'expense_master';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('expense_name, expense_group_id, creation_date, created_by', 'required','message'=>''),
			array('expense_group_id, created_by', 'numerical', 'integerOnly'=>true,'message'=>''),
			array('expense_name', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, expense_name, expense_group_id, creation_date, created_by,expense_group_name', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'rel_expense_expensegroup' => array(self::BELONGS_TO, 'ExpenseGroupMaster','expense_group_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'expense_name' => 'Expense Name',
			'expense_group_id' => 'Expense Group Name',
			'creation_date' => 'Creation Date',
			'created_by' => 'Created By',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;
		$criteria->with = array('rel_expense_expensegroup');  
		
		$criteria->compare('rel_expense_expensegroup.expense_group_name',$this->expense_group_name,true); 

		$criteria->compare('id',$this->id);
		$criteria->compare('expense_name',$this->expense_name,true);
		$criteria->compare('expense_group_id',$this->expense_group_id);
		$criteria->compare('creation_date',$this->creation_date,true);
		$criteria->compare('created_by',$this->created_by);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
