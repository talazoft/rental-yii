<?php

/**
 * This is the model class for table "{{application_information}}".
 *
 * The followings are the available columns in table '{{application_information}}':
 * @property integer $id
 * @property integer $num_of_applicant
 * @property string $selection
 * @property string $sub_selection
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $zipcode
 * @property string $anticipated_date
 * @property string $refered_lead
 * @property string $venue
 * @property string $agent_name
 * @property string $agent_phone
 * @property string $tenant_name
 * @property integer $is_existing_tenant
 * @property string $other_val
 * @property string $created_date
 * @property string $prime_applic_cellphone
 * @property string $prime_applic_homephone
 * @property string $prime_applic_email
 * @property string $prime_appic_signature
 * @property string $save_deposit
 * @property string $unit
 * @property string $monthly_rent
 * @property string $payment_type
 *
 * The followings are the available model relations:
 * @property ApplicantInfo[] $applicantInfos
 */
class ApplicationInformation extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ApplicationInformation the static model class
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
		return '{{application_information}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('num_of_applicant, is_existing_tenant', 'numerical', 'integerOnly'=>true),
			array('selection, sub_selection, address, agent_name, tenant_name, prime_applic_email', 'length', 'max'=>150),
			array('city, venue, refered_lead', 'length', 'max'=>50),
			array('state, zipcode, save_deposit, unit, monthly_rent', 'length', 'max'=>45),
			array('anticipated_date', 'length', 'max'=>11),
			array('agent_phone, prime_applic_cellphone, prime_applic_homephone', 'length', 'max'=>25),
			array('payment_type', 'length', 'max'=>10),
			array('other_val, created_date, prime_appic_signature', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, num_of_applicant, selection, sub_selection, address, city, state, zipcode, anticipated_date, refered_lead, venue, agent_name, agent_phone, tenant_name, is_existing_tenant, other_val, created_date, prime_applic_cellphone, prime_applic_homephone, prime_applic_email, prime_appic_signature, save_deposit, unit, monthly_rent, payment_type', 'safe', 'on'=>'search'),
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
			'applicantInfos' => array(self::HAS_MANY, 'ApplicantInfo', 'rd_application_information_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'num_of_applicant' => 'Number of Applicant',
			'selection' => 'Selection',
			'sub_selection' => 'Sub Selection',
			'address' => 'located at (Address)','Address',
			'city' => 'City',
			'state' => 'State',
			'zipcode' => 'Zipcode',
			'anticipated_date' => 'Anticipated Move in date of',
			'refered_lead' => 'Refered Lead',
			'venue' => 'Venue',
			'agent_name' => 'Agent Name',
			'agent_phone' => 'Agent Phone',
			'tenant_name' => 'Tenant Name',
			'is_existing_tenant' => 'Is Existing Tenant',
			'other_val' => 'Other Val',
			'created_date' => 'Created Date',
			'prime_applic_cellphone' => 'Prime Applic Cellphone',
			'prime_applic_homephone' => 'Prime Applic Homephone',
			'prime_applic_email' => 'Prime Applic Email',
			'prime_appic_signature' => 'Prime Appic Signature',
			'save_deposit' => 'Save Deposit $',
			'unit' => 'Unit',
			'monthly_rent' => 'Monthly Rent of $',
			'payment_type' => 'Payment Type',
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
		$criteria->compare('num_of_applicant',$this->num_of_applicant);
		$criteria->compare('selection',$this->selection,true);
		$criteria->compare('sub_selection',$this->sub_selection,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('zipcode',$this->zipcode,true);
		$criteria->compare('anticipated_date',$this->anticipated_date,true);
		$criteria->compare('refered_lead',$this->refered_lead);
		$criteria->compare('venue',$this->venue,true);
		$criteria->compare('agent_name',$this->agent_name,true);
		$criteria->compare('agent_phone',$this->agent_phone,true);
		$criteria->compare('tenant_name',$this->tenant_name,true);
		$criteria->compare('is_existing_tenant',$this->is_existing_tenant);
		$criteria->compare('other_val',$this->other_val,true);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('prime_applic_cellphone',$this->prime_applic_cellphone,true);
		$criteria->compare('prime_applic_homephone',$this->prime_applic_homephone,true);
		$criteria->compare('prime_applic_email',$this->prime_applic_email,true);
		$criteria->compare('prime_appic_signature',$this->prime_appic_signature,true);
		$criteria->compare('save_deposit',$this->save_deposit,true);
		$criteria->compare('unit',$this->unit,true);
		$criteria->compare('monthly_rent',$this->monthly_rent,true);
		$criteria->compare('payment_type',$this->payment_type,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}