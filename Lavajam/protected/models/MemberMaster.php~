<?php

/**
 * This is the model class for table "member_master".
 *
 * The followings are the available columns in table 'member_master':
 * @property integer $id
 * @property integer member_number
 * @property string $member_name
 * @property string $member_address
 * @property integer $member_zone
 * @property string $member_birthdate
 * @property string $creation_date
 * @property integer $created_by
 */
class MemberMaster extends CActiveRecord
{
	public $zone_name;

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MemberMaster the static model class
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
		return 'member_master';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('member_name, member_address, member_zone, member_birthdate,member_number, creation_date, created_by', 'required','message'=>''),
			array('member_zone,member_number, created_by', 'numerical', 'integerOnly'=>true,'message'=>''),
			array('member_name', 'length', 'max'=>30),
			array('member_address', 'length', 'max'=>100),
			array('member_birthdate','checkdate','message'=>'Birth Date Must be Less Than Current Date'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			//array('id, member_name, member_address, member_zone, member_birthdate, creation_date, created_by ,zone_name', 'safe', 'on'=>'search'),
			array('id, member_name,member_number, member_address, member_zone, zone_name, member_birthdate, creation_date, created_by', 'safe', 'on'=>'search'),
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

			'Rel_member' => array(self::BELONGS_TO, 'ZoneMaster', 'member_zone'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'member_name' => 'Member Name',
			'member_address' => 'Member Address',
			'member_zone' => 'Member Zone',
			'member_birthdate' => 'Member Birthdate',
			'creation_date' => 'Creation Date',
			'created_by' => 'Created By',
			'member_number' => 'Member Number',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function checkdate($attribute,$params)
	{
		$my_date = date("Y-m-d");
		if($this->member_birthdate > $my_date)
		{
			
			$this->addError('member_birthdate','Birth Date Must be Less Than Current Date'); 
		}	
	}

	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria; 

		$criteria->compare('id',$this->id);
		$criteria->with = array('Rel_member');
		$criteria->compare('Rel_member.zone_name',$this->zone_name,true);  
		$criteria->compare('member_name',$this->member_name,true);
		$criteria->compare('member_number',$this->member_number,true);
		$criteria->compare('member_address',$this->member_address,true);
		//$criteria->compare('member_zone',$this->member_zone,true);
		$criteria->compare('member_birthdate',$this->member_birthdate,true);
		$criteria->compare('creation_date',$this->creation_date,true);
		$criteria->compare('created_by',$this->created_by,true);
		 
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
		    self::$_items[$model->id]=$model->member_number." ".$model->member_name;
	    }
	
}
