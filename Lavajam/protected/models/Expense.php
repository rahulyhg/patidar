<?php

/**
 * This is the model class for table "expense".
 *
 * The followings are the available columns in table 'expense':
 * @property integer $id
 * @property integer $expense_voucher_no
 * @property string $expense_date
 * @property integer $expense_master_id
 * @property integer $expense_amount
 */
class Expense extends CActiveRecord
{
	public $expense_name;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Expense the static model class
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
		return 'expense';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('expense_voucher_no, expense_date, expense_master_id, expense_amount', 'required','message'=>''),
			array('expense_voucher_no, expense_master_id, expense_amount', 'numerical', 'integerOnly'=>true,'message'=>''),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, expense_voucher_no, expense_date, expense_master_id, expense_amount,expense_name', 'safe', 'on'=>'search'),
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
			'rel_expense_expensemaster' => array(self::BELONGS_TO, 'ExpenseMaster','expense_master_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'expense_voucher_no' => 'Expense Voucher No',
			'expense_date' => 'Expense Date',
			'expense_master_id' => 'Expense',
			'expense_amount' => 'Expense Amount',
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

		$criteria->compare('id',$this->id);
		$criteria->with = array('rel_expense_expensemaster');  
		$criteria->compare('rel_expense_rel_expense_expensemaster.expense_name',$this->expense_name,true); 
		$criteria->compare('expense_voucher_no',$this->expense_voucher_no);
		$criteria->compare('expense_date',$this->expense_date,true);
		$criteria->compare('expense_master_id',$this->expense_master_id);
		$criteria->compare('expense_amount',$this->expense_amount);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
