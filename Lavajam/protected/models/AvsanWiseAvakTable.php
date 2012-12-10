<?php

/**
 * This is the model class for table "avsan_wise_avak_table".
 *
 * The followings are the available columns in table 'avsan_wise_avak_table':
 * @property integer $id
 * @property integer $receipt_no
 * @property string $receipt_date
 * @property integer $bill_no_of_avasan
 * @property string $bill_date_of_avasan
 * @property integer $member_no
 * @property integer $amount
 */
class AvsanWiseAvakTable extends CActiveRecord
{
	public $Avsan_Person_Name,$Avsan_Sender_Name,$unpaid_amount,$paid_amount;
	public $member_name;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AvsanWiseAvakTable the static model class
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
		return 'avsan_wise_avak_table';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('receipt_no, receipt_date, bill_no_of_avasan, amount', 'required','message'=>''),
			array('receipt_no,   amount', 'numerical', 'integerOnly'=>true,'message'=>''),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, receipt_no, receipt_date, bill_no_of_avasan, bill_date_of_avasan,member_no, amount,member_name', 'safe', 'on'=>'search'),
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
			'Rel_avsanwiseavak_member' => array(self::BELONGS_TO, 'MemberMaster','member_no'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'receipt_no' => 'Receipt No',
			'receipt_date' => 'Receipt Date',
			'bill_no_of_avasan' => 'Avsan Bill No',
			'bill_date_of_avasan' => 'Avsan Bill Date',
			'member_no' => 'Member Name',
			'amount' => 'Amount',
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

		$criteria->with = array('Rel_avsanwiseavak_member');  
		$criteria->compare('Rel_avsanwiseavak_member.member_name',$this->member_name,true); 
		$criteria->compare('id',$this->id);
		$criteria->compare('receipt_no',$this->receipt_no);
		$criteria->compare('receipt_date',$this->receipt_date,true);
		$criteria->compare('bill_no_of_avasan',$this->bill_no_of_avasan);
		$criteria->compare('bill_date_of_avasan',$this->bill_date_of_avasan,true);
		$criteria->compare('member_no',$this->member_no);
		$criteria->compare('amount',$this->amount);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
}
