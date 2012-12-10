<?php

/**
 * This is the model class for table "jaharat".
 *
 * The followings are the available columns in table 'jaharat':
 * @property integer $id
 * @property integer $party_no
 * @property integer $member_no
 * @property string $jaharat_date
 * @property integer $jaharat_biil_no
 * @property string $jaharat_from_date
 * @property string $jaharat_to_date
 * @property string $jaharat_ank_no_from
 * @property string $jaharat_ank_no_to
 * @property integer $jaharat_type
 * @property integer $jaharat_page_no
 * @property integer $jaharat_by_column
 * @property integer $jaharat_by_cm
 * @property integer $jaharat_rate
 * @property integer $jaharat_total_amount
 * @property integer $jaharat_discount
 * @property integer $jaharat_kasar
 * @property integer $jaharat_net_amount
 * @property string $jaharat_receive_date
 * @property string $creation_date
 * @property integer $created_by
 */
class Jaharat extends CActiveRecord
{
	public $member_name,$party_name,$jaharat_type_name;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Jaharat the static model class
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
		return 'jaharat';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('party_no, member_no, jaharat_date, jaharat_biil_no, jaharat_from_date, jaharat_to_date,  jaharat_type, jaharat_page_no, jaharat_by_column, jaharat_by_cm, jaharat_rate, jaharat_total_amount, jaharat_discount, jaharat_kasar, jaharat_net_amount, creation_date, created_by,jaharat_ank_no_from, jaharat_ank_no_to,jaharat_bill_date,jaharat_type_color', 'required','message'=>''),
			array('party_no, member_no, jaharat_biil_no, jaharat_type, jaharat_page_no, jaharat_by_column, jaharat_by_cm, jaharat_rate, jaharat_total_amount, jaharat_discount, jaharat_kasar, jaharat_net_amount,jaharat_ank_no_from, jaharat_ank_no_to, created_by', 'numerical', 'integerOnly'=>true,'message'=>''),
			array('jaharat_biil_no', 'unique','message'=>'Already Exist.'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, party_no, member_no, jaharat_date, jaharat_biil_no, jaharat_from_date, jaharat_to_date, jaharat_ank_no_from, jaharat_ank_no_to, jaharat_type, jaharat_page_no, jaharat_by_column, jaharat_by_cm, jaharat_rate, jaharat_total_amount, jaharat_discount, jaharat_kasar, jaharat_net_amount, jaharat_receive_date, creation_date, created_by,member_name,party_name,jaharat_type_name, jaharat_bill_date, jaharat_type_color', 'safe', 'on'=>'search'),
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

			'rel_jaharat_member' => array(self::BELONGS_TO, 'MemberMaster','member_no'),
			'rel_jaharat_party' => array(self::BELONGS_TO, 'PartyMaster','party_no'),
			'rel_jaharat_jaharatype' => array(self::BELONGS_TO, 'JaharatTypeMaster','jaharat_type'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'party_no' => 'Party Name',
			'member_no' => 'Member Name',
			'jaharat_date' => 'Jaherat Date',
			'jaharat_biil_no' => ' Biil No',
			'jaharat_from_date' => ' From Date',
			'jaharat_to_date' => ' To Date',
			'jaharat_ank_no_from' => 'From Ank No',
			'jaharat_ank_no_to' => 'To Ank No',
			'jaharat_type' => 'Jaherat Type',
			'jaharat_page_no' => 'Jaherat Page No',
			'jaharat_by_column' => 'Jaherat By Column',
			'jaharat_by_cm' => 'Jaherat By Cm',
			'jaharat_rate' => ' Rate',
			'jaharat_total_amount' => ' Total Amount',
			'jaharat_discount' => ' Discount (%)',
			'jaharat_kasar' => ' Kasar',
			'jaharat_net_amount' => ' Net Amount',
			'jaharat_receive_date' => 'Receive Date',
			'creation_date' => 'Creation Date',
			'created_by' => 'Created By',
			'jaharat_bill_date' => 'Jaherat Bill Date',
			'jaharat_type_color' => 'Jaherat Type Color',
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


		$criteria->with = array('rel_jaharat_member','rel_jaharat_party','rel_jaharat_jaharatype');  
		$criteria->compare('rel_jaharat_member.member_name',$this->member_name,true); 
		$criteria->compare('rel_jaharat_party.party_name',$this->party_name,true); 
		$criteria->compare('rel_jaharat_jaharatype.jaharat_type_name',$this->jaharat_type_name,true);  
		$criteria->compare('party_no',$this->party_no);
		$criteria->compare('member_no',$this->member_no);
		$criteria->compare('jaharat_date',$this->jaharat_date,true);
		$criteria->compare('jaharat_biil_no',$this->jaharat_biil_no);
		$criteria->compare('jaharat_from_date',$this->jaharat_from_date,true);
		$criteria->compare('jaharat_to_date',$this->jaharat_to_date,true);
		$criteria->compare('jaharat_ank_no_from',$this->jaharat_ank_no_from);
		$criteria->compare('jaharat_ank_no_to',$this->jaharat_ank_no_to);
		$criteria->compare('jaharat_type',$this->jaharat_type);
		$criteria->compare('jaharat_page_no',$this->jaharat_page_no);
		$criteria->compare('jaharat_by_column',$this->jaharat_by_column);
		$criteria->compare('jaharat_by_cm',$this->jaharat_by_cm);
		$criteria->compare('jaharat_rate',$this->jaharat_rate);
		$criteria->compare('jaharat_total_amount',$this->jaharat_total_amount);
		$criteria->compare('jaharat_discount',$this->jaharat_discount);
		$criteria->compare('jaharat_kasar',$this->jaharat_kasar);
		$criteria->compare('jaharat_net_amount',$this->jaharat_net_amount);
		$criteria->compare('jaharat_receive_date',$this->jaharat_receive_date,true);
		$criteria->compare('creation_date',$this->creation_date,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('jaharat_bill_date',$this->jaharat_bill_date,true);
		$criteria->compare('jaharat_type_color',$this->jaharat_type_color);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
