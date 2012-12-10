<?php

/**
 * This is the model class for table "jaherat_wise_avak_table".
 *
 * The followings are the available columns in table 'jaherat_wise_avak_table':
 * @property integer $id
 * @property integer $receipt_no
 * @property string $receipt_date
 * @property integer $bill_no_of_jaherat
 * @property string $bill_date_of_jaherat
 * @property integer $party_no
 * @property integer $amount
 */
class JaheratWiseAvakTable extends CActiveRecord
{
	public $party_name,$unpaid_amount,$paid_amount;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return JaheratWiseAvakTable the static model class
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
		return 'jaherat_wise_avak_table';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('receipt_no, receipt_date, bill_no_of_jaherat, bill_date_of_jaherat, party_no, amount', 'required','message'=>''),
			array('receipt_no, bill_no_of_jaherat, party_no, amount', 'numerical', 'integerOnly'=>true,'message'=>''),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, receipt_no, receipt_date, bill_no_of_jaherat, bill_date_of_jaherat, party_no, amount, party_name', 'safe', 'on'=>'search'),
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
			'Rel_jaharatwiseavak_party' => array(self::BELONGS_TO, 'PartyMaster','party_no'),
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
			'bill_no_of_jaherat' => 'Jaherat Bill No',
			'bill_date_of_jaherat' => 'Jaherat Bill Date ',
			'party_no' => 'Party Name',
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

		$criteria->with = array('Rel_jaharatwiseavak_party');  
		$criteria->compare('Rel_jaharatwiseavak_party.party_name',$this->party_name,true); 
		$criteria->compare('id',$this->id);
		$criteria->compare('receipt_no',$this->receipt_no);
		$criteria->compare('receipt_date',$this->receipt_date,true);
		$criteria->compare('bill_no_of_jaherat',$this->bill_no_of_jaherat);
		$criteria->compare('bill_date_of_jaherat',$this->bill_date_of_jaherat,true);
		$criteria->compare('party_no',$this->party_no);
		$criteria->compare('amount',$this->amount);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
}
