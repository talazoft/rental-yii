<?php

/**
 * This is the model class for table "{{residental_history}}".
 *
 * The followings are the available columns in table '{{residental_history}}':
 * @property integer $id
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $year_month_moved_in
 * @property string $agent_landlord_type
 * @property string $agent_landlord_name
 * @property string $agent_landlord_phone
 * @property string $unit
 * @property string $rent
 * @property string $leave_reason
 * @property integer $rd_applicant_info_id
 *
 * The followings are the available model relations:
 * @property ApplicantInfo $rdApplicantInfo
 */
class ResidentalHistory extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ResidentalHistory the static model class
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
		return '{{residental_history}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('address, city, state, zip, year_month_moved_in, agent_landlord_type, rent, leave_reason, rd_applicant_info_id', 'required'),
			array('rd_applicant_info_id', 'numerical', 'integerOnly'=>true),
			array('address, year_month_moved_in, agent_landlord_name', 'length', 'max'=>150),
			array('city, state, agent_landlord_type, unit', 'length', 'max'=>45),
			array('zip', 'length', 'max'=>10),
			array('agent_landlord_phone', 'length', 'max'=>25),
			array('rent', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, address, city, state, zip, year_month_moved_in, agent_landlord_type, agent_landlord_name, agent_landlord_phone, unit, rent, leave_reason, rd_applicant_info_id', 'safe', 'on'=>'search'),
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
			'rdApplicantInfo' => array(self::BELONGS_TO, 'ApplicantInfo', 'rd_applicant_info_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'address' => 'Address',
			'city' => 'City',
			'state' => 'State',
			'zip' => 'Zip',
			'year_month_moved_in' => 'Year Month Moved In',
			'agent_landlord_type' => 'Agent Landlord Type',
			'agent_landlord_name' => 'Agent Landlord Name',
			'agent_landlord_phone' => 'Agent Landlord Phone',
			'unit' => 'Unit',
			'rent' => 'Rent',
			'leave_reason' => 'Leave Reason',
			'rd_applicant_info_id' => 'Rd Applicant Info',
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
		$criteria->compare('address',$this->address,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('year_month_moved_in',$this->year_month_moved_in,true);
		$criteria->compare('agent_landlord_type',$this->agent_landlord_type,true);
		$criteria->compare('agent_landlord_name',$this->agent_landlord_name,true);
		$criteria->compare('agent_landlord_phone',$this->agent_landlord_phone,true);
		$criteria->compare('unit',$this->unit,true);
		$criteria->compare('rent',$this->rent,true);
		$criteria->compare('leave_reason',$this->leave_reason,true);
		$criteria->compare('rd_applicant_info_id',$this->rd_applicant_info_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}