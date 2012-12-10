<?php

/**
 * This is the model class for table "lavajam".
 *
 * The followings are the available columns in table 'lavajam':
 * @property integer $id
 * @property integer $member_no
 * @property integer $lavajam_page_no
 * @property string $lavajam_date
 * @property integer $lavajam_no_of
 * @property integer $lavajam_amount
 * @property integer $lavajam_no_from
 * @property integer $lavajam_no_to
 * @property string $creation_date
 * @property integer $created_by
 */
class Lavajam extends CActiveRecord
{
	public $member_name;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Lavajam the static model class
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
		return 'lavajam';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('member_no, lavajam_page_no, lavajam_date, lavajam_no_of, lavajam_amount, lavajam_no_from, lavajam_no_to, creation_date, created_by', 'required','message'=>''),
			array('member_no, lavajam_page_no, lavajam_no_of, lavajam_amount, lavajam_no_from, lavajam_no_to, created_by', 'numerical', 'integerOnly'=>true,'message'=>''),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, member_no, lavajam_page_no, lavajam_date, lavajam_no_of, lavajam_amount, lavajam_no_from, lavajam_no_to, creation_date, created_by,member_name', 'safe', 'on'=>'search'),
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
			'rel_lavajam_member' => array(self::BELONGS_TO, 'MemberMaster','member_no'),
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
			'lavajam_page_no' => 'Lavajam Page No',
			'lavajam_date' => 'Lavajam Date',
			'lavajam_no_of' => 'Lavajam No Of',
			'lavajam_amount' => 'Lavajam Amount',
			'lavajam_no_from' => 'Lavajam No From',
			'lavajam_no_to' => 'Lavajam No To',
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

		$criteria->compare('id',$this->id);
		$criteria->with = array('rel_lavajam_member');  
		$criteria->compare('rel_lavajam_member.member_name',$this->member_name,true); 
		$criteria->compare('member_no',$this->member_no);
		$criteria->compare('lavajam_page_no',$this->lavajam_page_no);
		$criteria->compare('lavajam_date',$this->lavajam_date,true);
		$criteria->compare('lavajam_no_of',$this->lavajam_no_of);
		$criteria->compare('lavajam_amount',$this->lavajam_amount);
		$criteria->compare('lavajam_no_from',$this->lavajam_no_from);
		$criteria->compare('lavajam_no_to',$this->lavajam_no_to);
		$criteria->compare('creation_date',$this->creation_date,true);
		$criteria->compare('created_by',$this->created_by);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
