<?php

/**
 * This is the model class for table "{{employment_info}}".
 *
 * The followings are the available columns in table '{{employment_info}}':
 * @property integer $id
 * @property string $employment_type
 * @property string $employer
 * @property string $employer_address
 * @property string $position
 * @property string $department
 * @property string $phone
 * @property string $employment_length
 * @property string $salary
 * @property string $supervisor_name
 * @property string $bussines_name
 * @property string $bussiness_type
 * @property string $years_in_bussiness
 * @property string $stay_length
 * @property string $landlord_name
 * @property string $landlord_phone
 * @property integer $rd_applicant_info_id
 *
 * The followings are the available model relations:
 * @property ApplicantInfo $rdApplicantInfo
 */
class EmploymentInfo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return EmploymentInfo the static model class
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
		return '{{employment_info}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rd_applicant_info_id', 'required'),
			array('rd_applicant_info_id', 'numerical', 'integerOnly'=>true),
			array('employment_type', 'length', 'max'=>30),
			array('employer, employer_address', 'length', 'max'=>50),
			array('position, department, phone, salary, supervisor_name, bussines_name, bussiness_type, years_in_bussiness, stay_length, landlord_name, landlord_phone', 'length', 'max'=>45),
			array('employment_length', 'length', 'max'=>25),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, employment_type, employer, employer_address, position, department, phone, employment_length, salary, supervisor_name, bussines_name, bussiness_type, years_in_bussiness, stay_length, landlord_name, landlord_phone, rd_applicant_info_id', 'safe', 'on'=>'search'),
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
			'employment_type' => 'Employment Type',
			'employer' => 'Employer',
			'employer_address' => 'Employer Address',
			'position' => 'Position',
			'department' => 'Department',
			'phone' => 'Phone',
			'employment_length' => 'Employment Length',
			'salary' => 'Salary',
			'supervisor_name' => 'Supervisor Name',
			'bussines_name' => 'Bussines Name',
			'bussiness_type' => 'Bussiness Type',
			'years_in_bussiness' => 'Years In Bussiness',
			'stay_length' => 'Stay Length',
			'landlord_name' => 'Landlord Name',
			'landlord_phone' => 'Landlord Phone',
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
		$criteria->compare('employment_type',$this->employment_type,true);
		$criteria->compare('employer',$this->employer,true);
		$criteria->compare('employer_address',$this->employer_address,true);
		$criteria->compare('position',$this->position,true);
		$criteria->compare('department',$this->department,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('employment_length',$this->employment_length,true);
		$criteria->compare('salary',$this->salary,true);
		$criteria->compare('supervisor_name',$this->supervisor_name,true);
		$criteria->compare('bussines_name',$this->bussines_name,true);
		$criteria->compare('bussiness_type',$this->bussiness_type,true);
		$criteria->compare('years_in_bussiness',$this->years_in_bussiness,true);
		$criteria->compare('stay_length',$this->stay_length,true);
		$criteria->compare('landlord_name',$this->landlord_name,true);
		$criteria->compare('landlord_phone',$this->landlord_phone,true);
		$criteria->compare('rd_applicant_info_id',$this->rd_applicant_info_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}