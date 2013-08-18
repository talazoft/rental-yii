<?php

/**
 * This is the model class for table "{{applicant_info}}".
 *
 * The followings are the available columns in table '{{applicant_info}}':
 * @property integer $id
 * @property string $firstname
 * @property string $middlename
 * @property string $lastname
 * @property string $birthday
 * @property string $ssn
 * @property string $idtype
 * @property string $idnum
 * @property string $has_pet
 * @property integer $pet_num
 * @property integer $rd_application_information_id
 * @property string $years_live_planned
 * @property string $cellphone
 * @property string $homephone
 * @property string $email
 *
 * The followings are the available model relations:
 * @property ApplicationInformation $rdApplicationInformation
 * @property CreditInfo[] $creditInfos
 * @property DependantInfo[] $dependantInfos
 * @property EmploymentInfo[] $employmentInfos
 * @property FinanceInfo[] $financeInfos
 * @property GeneralInfo[] $generalInfos
 * @property PersonalRefrence[] $personalRefrences
 * @property ResidentalHistory[] $residentalHistories
 * @property VehicleInfo[] $vehicleInfos
 */
class ApplicantInfo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ApplicantInfo the static model class
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
		return '{{applicant_info}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('firstname, lastname, birthday, ssn, rd_application_information_id', 'required'),
			array('pet_num, rd_application_information_id', 'numerical', 'integerOnly'=>true),
			array('firstname, middlename, lastname, email', 'length', 'max'=>50),
			array('birthday', 'length', 'max'=>20),
			array('ssn, idtype, idnum, has_pet, years_live_planned', 'length', 'max'=>45),
			array('cellphone, homephone', 'length', 'max'=>25),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, firstname, middlename, lastname, birthday, ssn, idtype, idnum, has_pet, pet_num, rd_application_information_id, years_live_planned, cellphone, homephone, email', 'safe', 'on'=>'search'),
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
			'rdApplicationInformation' => array(self::BELONGS_TO, 'ApplicationInformation', 'rd_application_information_id'),
			'creditInfos' => array(self::HAS_MANY, 'CreditInfo', 'rd_applicant_info_id'),
			'dependantInfos' => array(self::HAS_MANY, 'DependantInfo', 'rd_applicant_info_id'),
			'employmentInfos' => array(self::HAS_MANY, 'EmploymentInfo', 'rd_applicant_info_id'),
			'financeInfos' => array(self::HAS_MANY, 'FinanceInfo', 'rd_applicant_info_id'),
			'generalInfos' => array(self::HAS_MANY, 'GeneralInfo', 'rd_applicant_info_id'),
			'personalRefrences' => array(self::HAS_MANY, 'PersonalRefrence', 'rd_applicant_info_id'),
			'residentalHistories' => array(self::HAS_MANY, 'ResidentalHistory', 'rd_applicant_info_id'),
			'vehicleInfos' => array(self::HAS_MANY, 'VehicleInfo', 'rd_applicant_info_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'firstname' => 'Firstname',
			'middlename' => 'Middlename',
			'lastname' => 'Lastname',
			'birthday' => 'Birthday',
			'ssn' => 'Ssn',
			'idtype' => 'Idtype',
			'idnum' => 'Idnum',
			'has_pet' => 'Has Pet',
			'pet_num' => 'Pet Num',
			'rd_application_information_id' => 'Rd Application Information',
			'years_live_planned' => 'Years Live Planned',
			'cellphone' => 'Cellphone',
			'homephone' => 'Homephone',
			'email' => 'Email',
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
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('middlename',$this->middlename,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('birthday',$this->birthday,true);
		$criteria->compare('ssn',$this->ssn,true);
		$criteria->compare('idtype',$this->idtype,true);
		$criteria->compare('idnum',$this->idnum,true);
		$criteria->compare('has_pet',$this->has_pet,true);
		$criteria->compare('pet_num',$this->pet_num);
		$criteria->compare('rd_application_information_id',$this->rd_application_information_id);
		$criteria->compare('years_live_planned',$this->years_live_planned,true);
		$criteria->compare('cellphone',$this->cellphone,true);
		$criteria->compare('homephone',$this->homephone,true);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}