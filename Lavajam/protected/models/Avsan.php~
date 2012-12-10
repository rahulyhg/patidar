<?php

/**
 * This is the model class for table "avsan".
 *
 * The followings are the available columns in table 'avsan':
 * @property integer $id
 * @property integer $member_no
 * @property string $ausan_name
 * @property string $ausan_sender_name
 * @property string $ausan_sender_address
 * @property string $ausan_date
 * @property integer $ausan_no_of_picture
 * @property integer $ausan_total_amount
 * @property string $creation_date
 * @property integer $creation_by
 * @property integer $avsan_size
 */
class Avsan extends CActiveRecord
{
	public $member_name,$size;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Avsan the static model class
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
		return 'avsan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('member_no, ausan_name,avsan_number,avsan_size, ausan_sender_name, ausan_sender_address, ausan_date,  ausan_total_amount, creation_date, creation_by,avsan_net_amount,discount', 'required','message'=>''),
			array('member_no,avsan_size, ausan_no_of_picture, ausan_total_amount, creation_by, avsan_net_amount, discount', 'numerical', 'integerOnly'=>true,'message'=>''),
			array('ausan_name, ausan_sender_name', 'length', 'max'=>50),
			array('ausan_sender_address', 'length', 'max'=>100),
			array('avsan_number', 'unique','message'=>'Already Exist.'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, member_no, ausan_name, ausan_sender_name, ausan_sender_address, ausan_date, ausan_no_of_picture, ausan_total_amount, creation_date, creation_by, member_name,avsan_number,avsan_size,size', 'safe', 'on'=>'search'),
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
			'rel_avsan_member' => array(self::BELONGS_TO, 'MemberMaster','member_no'),
			'rel_avsan_size' => array(self::BELONGS_TO, 'RateMasterForAvasan','avsan_size'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'member_no' => 'Member Name',
			'ausan_name' => 'Avsan Person Name',
			'ausan_sender_name' => 'Avsan Sender Name',
			'ausan_sender_address' => 'Avsan Sender Address',
			'ausan_date' => 'Avsan Date',
			'ausan_no_of_picture' => 'Avsan No Of Picture',
			'ausan_total_amount' => 'Total Amount',
			'creation_date' => 'Creation Date',
			'creation_by' => 'Created  By',
			'avsan_size' => 'Size',
			'discount' => 'Discount (%)',
			'avsan_net_amount' => 'Net Amount',
			'avsan_number'=>'Avsan Bill No',
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

		$criteria->with = array('rel_avsan_member','rel_avsan_size');  
		$criteria->compare('rel_avsan_member.member_name',$this->member_name,true); 
		$criteria->compare('rel_avsan_size.size',$this->size,true);
		$criteria->compare('id',$this->id);
		$criteria->compare('member_no',$this->member_no);
		$criteria->compare('ausan_name',$this->ausan_name,true);
		$criteria->compare('avsan_number',$this->avsan_number,true);
		$criteria->compare('ausan_sender_name',$this->ausan_sender_name,true);
		$criteria->compare('ausan_sender_address',$this->ausan_sender_address,true);
		$criteria->compare('ausan_date',$this->ausan_date,true);
		$criteria->compare('ausan_no_of_picture',$this->ausan_no_of_picture);
		$criteria->compare('ausan_total_amount',$this->ausan_total_amount);
		$criteria->compare('creation_date',$this->creation_date,true);
		$criteria->compare('creation_by',$this->creation_by);
		$criteria->compare('discount',$this->discount);
		$criteria->compare('avsan_net_amount',$this->avsan_net_amount);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	
}
