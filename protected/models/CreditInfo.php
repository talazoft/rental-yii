<?php

/**
 * This is the model class for table "{{credit_info}}".
 *
 * The followings are the available columns in table '{{credit_info}}':
 * @property integer $id
 * @property string $bank_name
 * @property string $branch
 * @property string $phone_no
 * @property string $account_type
 * @property string $approx_balance
 * @property integer $rd_applicant_info_id
 *
 * The followings are the available model relations:
 * @property ApplicantInfo $rdApplicantInfo
 */
class CreditInfo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CreditInfo the static model class
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
		return '{{credit_info}}';
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
			array('bank_name, branch', 'length', 'max'=>100),
			array('phone_no, approx_balance', 'length', 'max'=>45),
			array('account_type', 'length', 'max'=>35),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, bank_name, branch, phone_no, account_type, approx_balance, rd_applicant_info_id', 'safe', 'on'=>'search'),
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
			'bank_name' => 'Bank Name',
			'branch' => 'Branch',
			'phone_no' => 'Phone No',
			'account_type' => 'Account Type',
			'approx_balance' => 'Approx Balance',
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
		$criteria->compare('bank_name',$this->bank_name,true);
		$criteria->compare('branch',$this->branch,true);
		$criteria->compare('phone_no',$this->phone_no,true);
		$criteria->compare('account_type',$this->account_type,true);
		$criteria->compare('approx_balance',$this->approx_balance,true);
		$criteria->compare('rd_applicant_info_id',$this->rd_applicant_info_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}