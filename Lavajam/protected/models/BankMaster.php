<?php

/**
 * This is the model class for table "bank_master".
 *
 * The followings are the available columns in table 'bank_master':
 * @property integer $id
 * @property string $bank_name
 * @property string $bank_short_name
 * @property string $created_date
 * @property integer $creation_by
 */
class BankMaster extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BankMaster the static model class
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
		return 'bank_master';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bank_name, bank_short_name, created_date, creation_by', 'required','message'=>''),
			array('creation_by', 'numerical', 'integerOnly'=>true),
			array('bank_name', 'length', 'max'=>30),
			array('bank_name', 'unique','message'=>'Already Exist.'),
			array('bank_short_name', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, bank_name, bank_short_name, created_date, creation_by', 'safe', 'on'=>'search'),
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
			'bank_name' => 'Bank Name',
			'bank_short_name' => 'Bank Short Name',
			'created_date' => 'Creation Date',
			'creation_by' => 'Created By',
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
		$criteria->compare('bank_name',$this->bank_name,true);
		$criteria->compare('bank_short_name',$this->bank_short_name,true);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('creation_by',$this->creation_by);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
