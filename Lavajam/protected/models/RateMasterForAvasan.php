<?php

/**
 * This is the model class for table "rate_master_for_avasan".
 *
 * The followings are the available columns in table 'rate_master_for_avasan':
 * @property integer $id
 * @property string $size
 * @property integer $rate
 * @property string $color
 * @property integer $created_by
 * @property string $created_date
 */
class RateMasterForAvasan extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RateMasterForAvasan the static model class
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
		return 'rate_master_for_avasan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('size, rate, color, created_by, created_date', 'required','message'=>""),
			array('rate, created_by', 'numerical', 'integerOnly'=>true,'message'=>""),
			array('size', 'length', 'max'=>15),
			array('color', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, size, rate, color, created_by, created_date', 'safe', 'on'=>'search'),
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
			'size' => 'Size',
			'rate' => 'Rate Amount',
			'color' => 'Rate Type Color',
			'created_by' => 'Created By',
			'created_date' => 'Creation Date',
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
		$criteria->compare('size',$this->size,true);
		$criteria->compare('rate',$this->rate);
		$criteria->compare('color',$this->color,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('created_date',$this->created_date,true);

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
		   // self::$_items[$model->academic_terms_period_id]=$model->academic_terms_period_name."-".$model->academic_term_period;
			self::$_items[$model->id]=$model->color." ".$model->size;
	    	}
}
