<?php

/**
 * This is the model class for table "rate_master".
 *
 * The followings are the available columns in table 'rate_master':
 * @property integer $id
 * @property integer $rate_page_no
 * @property integer $rate_type_color
 * @property integer $rate_amount
 * @property string $creation_date
 * @property integer $created_by
 */
class RateMaster extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RateMaster the static model class
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
		return 'rate_master';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rate_page_no, rate_type_color, rate_amount, creation_date, created_by', 'required','message'=>''),
			array('rate_page_no,  rate_amount, created_by', 'numerical', 'integerOnly'=>true,'message'=>''),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, rate_page_no, rate_type_color, rate_amount, creation_date, created_by', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'rate_page_no' => 'Page No',
			'rate_type_color' => 'Type Color',
			'rate_amount' => 'Amount',
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
		$criteria->compare('rate_page_no',$this->rate_page_no);
		$criteria->compare('rate_type_color',$this->rate_type_color);
		$criteria->compare('rate_amount',$this->rate_amount);
		$criteria->compare('creation_date',$this->creation_date,true);
		$criteria->compare('created_by',$this->created_by);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
