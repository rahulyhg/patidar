<?php

/**
 * This is the model class for table "bank_slip".
 *
 * The followings are the available columns in table 'bank_slip':
 * @property integer $id
 * @property integer $slip_no
 * @property integer $member_id
 */
class BankSlip extends CActiveRecord
{
	public $member_name;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BankSlip the static model class
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
		return 'bank_slip';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('slip_no, member_id', 'required','message'=>''),
			array('slip_no, member_id', 'numerical', 'integerOnly'=>true,'message'=>''),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, slip_no, member_id,member_name', 'safe', 'on'=>'search'),
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
		
			'rel_bankslip_member' => array(self::BELONGS_TO, 'MemberMaster','member_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'slip_no' => 'Slip No',
			'member_id' => 'Member Name',
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
		
		$criteria->with = array('rel_bankslip_member');  
		$criteria->compare('rel_bankslip_member.member_name',$this->member_name,true);  
		$criteria->compare('id',$this->id);
		$criteria->compare('slip_no',$this->slip_no);
		$criteria->compare('member_id',$this->member_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
