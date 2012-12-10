<?php

/**
 * This is the model class for table "party_master".
 *
 * The followings are the available columns in table 'party_master':
 * @property integer $id
 * @property string $party_name
 * @property string $party_address_1
 * @property string $party_address_2
 * @property string $party_address_3
 * @property string $creation_date
 * @property integer $created_by
 */
class PartyMaster extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PartyMaster the static model class
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
		return 'party_master';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('party_name, party_address_1, party_address_2, party_address_3, creation_date, created_by', 'required','message'=>''),
			array('created_by', 'numerical', 'integerOnly'=>true),
			array('party_name, party_address_1, party_address_2, party_address_3', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, party_name, party_address_1, party_address_2, party_address_3, creation_date, created_by', 'safe', 'on'=>'search'),
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
			'party_name' => 'Party Name',
			'party_address_1' => 'Party Address 1',
			'party_address_2' => 'Party Address 2',
			'party_address_3' => 'Party Address 3',
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
		$criteria->compare('party_name',$this->party_name,true);
		$criteria->compare('party_address_1',$this->party_address_1,true);
		$criteria->compare('party_address_2',$this->party_address_2,true);
		$criteria->compare('party_address_3',$this->party_address_3,true);
		$criteria->compare('creation_date',$this->creation_date,true);
		$criteria->compare('created_by',$this->created_by);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	private static $_items=array();

        public static function items()
        {
            if(isset(self::$_items))
                self::loadItems();
            return self::$_items;
        }

   	 public static function item($code)
   	 {
		if(!isset(self::$_items))
		    self::loadItems();
		return isset(self::$_items[$code]) ? self::$_items[$code] : false;
   	 }

   	 private static function loadItems()
	    {
		self::$_items=array();
		$models=self::model()->findAll();
		foreach($models as $model)
		    self::$_items[$model->id]=$model->id." ".$model->party_name;
	    }
}
