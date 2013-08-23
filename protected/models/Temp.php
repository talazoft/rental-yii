<?php

/**
 * This is the model class for table "temp".
 *
 * The followings are the available columns in table 'temp':
 * @property integer $id
 * @property string $selection1
 * @property string $selection2
 * @property string $city
 * @property string $anticipated_date
 * @property string $deposit
 * @property string $unit
 * @property string $state
 * @property string $zipcode
 * @property string $monthlyrent
 * @property string $address
 */
class Temp extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Temp the static model class
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
		return 'temp';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('selection1, selection2, anticipated_date, deposit, unit, state, zipcode, monthlyrent', 'length', 'max'=>50),
			array('city, address', 'length', 'max'=>150),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, selection1, selection2, city, anticipated_date, deposit, unit, state, zipcode, monthlyrent, address', 'safe', 'on'=>'search'),
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
			'selection1' => 'Selection1',
			'selection2' => 'Selection2',
			'city' => 'City',
			'anticipated_date' => 'Anticipated Date',
			'deposit' => 'Deposit',
			'unit' => 'Unit',
			'state' => 'State',
			'zipcode' => 'Zipcode',
			'monthlyrent' => 'Monthlyrent',
			'address' => 'Address',
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
		$criteria->compare('selection1',$this->selection1,true);
		$criteria->compare('selection2',$this->selection2,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('anticipated_date',$this->anticipated_date,true);
		$criteria->compare('deposit',$this->deposit,true);
		$criteria->compare('unit',$this->unit,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('zipcode',$this->zipcode,true);
		$criteria->compare('monthlyrent',$this->monthlyrent,true);
		$criteria->compare('address',$this->address,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}