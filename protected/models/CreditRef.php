<?php

/**
 * This is the model class for table "{{credit_ref}}".
 *
 * The followings are the available columns in table '{{credit_ref}}':
 * @property integer $id
 * @property string $credit_ref
 * @property string $address
 * @property string $phone
 * @property string $account
 * @property string $amount
 * @property integer $rd_applicant_info_id
 *
 * The followings are the available model relations:
 * @property ApplicantInfo $rdApplicantInfo
 */
class CreditRef extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CreditRef the static model class
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
		return '{{credit_ref}}';
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
			array('credit_ref, address, phone, account, amount', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, credit_ref, address, phone, account, amount, rd_applicant_info_id', 'safe', 'on'=>'search'),
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
			'credit_ref' => 'Credit Ref',
			'address' => 'Address',
			'phone' => 'Phone',
			'account' => 'Account',
			'amount' => 'Amount',
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
		$criteria->compare('credit_ref',$this->credit_ref,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('account',$this->account,true);
		$criteria->compare('amount',$this->amount,true);
		$criteria->compare('rd_applicant_info_id',$this->rd_applicant_info_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}