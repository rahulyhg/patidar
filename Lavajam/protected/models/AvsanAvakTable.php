<?php

/**
 * This is the model class for table "avsan_avak_table".
 *
 * The followings are the available columns in table 'avsan_avak_table':
 * @property integer $id
 * @property integer $receipt_no
 * @property string $receipt_date
 * @property integer $bill_no_of_avasan
 * @property string $bill_date_of_avasan
 * @property integer $member_no
 * @property integer $bank_master_id
 * @property integer $cheque_dd_no
 * @property string $payment_type
 * @property integer $amount
 */
class AvsanAvakTable extends CActiveRecord
{
	public $Avsan_Person_Name,$Avsan_Sender_Name,$unpaid_amount,$paid_amount;
	public $bank_name,$member_name;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AvsanAvakTable the static model class
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
		return 'avsan_avak_table';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('receipt_no, receipt_date, bill_no_of_avasan, payment_type, amount', 'required','message'=>''),
			array('receipt_no, member_no, bank_master_id, cheque_dd_no, amount', 'numerical', 'integerOnly'=>true,'message'=>''),
			array('payment_type', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, receipt_no, receipt_date, bill_no_of_avasan, bill_date_of_avasan, member_no, bank_master_id, cheque_dd_no, payment_type, amount,bank_name,member_name', 'safe', 'on'=>'search'),
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
			'Rel_avsanavak_member' => array(self::BELONGS_TO, 'MemberMaster','member_no'),
			'Rel_avsanavak_bank' => array(self::BELONGS_TO, 'BankMaster','bank_master_id'),
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
			'bill_no_of_avasan' => 'Avasan Bill No ',
			'bill_date_of_avasan' => 'Avasan Bill Date ',
			'member_no' => 'Member Name',
			'bank_master_id' => 'Bank Name',
			'cheque_dd_no' => 'Cheque/Draft No',
			'payment_type' => 'Payment Type',
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

		$criteria->with = array('Rel_avsanavak_member','Rel_avsanavak_bank');  
		$criteria->compare('Rel_avsanavak_member.member_name',$this->member_name,true); 
		$criteria->compare('Rel_avsanavak_bank.bank_name',$this->bank_name,true); 
		$criteria->compare('id',$this->id);
		$criteria->compare('receipt_no',$this->receipt_no);
		$criteria->compare('receipt_date',$this->receipt_date,true);
		$criteria->compare('bill_no_of_avasan',$this->bill_no_of_avasan);
		$criteria->compare('bill_date_of_avasan',$this->bill_date_of_avasan,true);
		$criteria->compare('member_no',$this->member_no);
		$criteria->compare('bank_master_id',$this->bank_master_id);
		$criteria->compare('cheque_dd_no',$this->cheque_dd_no);
		$criteria->compare('payment_type',$this->payment_type,true);
		$criteria->compare('amount',$this->amount);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
