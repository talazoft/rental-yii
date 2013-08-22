<?php

/**
 * This is the model class for table "{{expenditures}}".
 *
 * The followings are the available columns in table '{{expenditures}}':
 * @property integer $id
 * @property string $prop_tax_asses
 * @property string $fed_state_income_tax
 * @property string $realestate_loan_payment
 * @property string $payment_contract
 * @property string $living_expenses
 * @property string $other
 * @property integer $rd_applicant_info_id
 *
 * The followings are the available model relations:
 * @property ApplicantInfo $rdApplicantInfo
 */
class Expenditures extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Expenditures the static model class
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
		return '{{expenditures}}';
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
			array('prop_tax_asses, fed_state_income_tax, realestate_loan_payment, payment_contract, living_expenses, other', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, prop_tax_asses, fed_state_income_tax, realestate_loan_payment, payment_contract, living_expenses, other, rd_applicant_info_id', 'safe', 'on'=>'search'),
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
			'prop_tax_asses' => 'Prop Tax Asses',
			'fed_state_income_tax' => 'Fed State Income Tax',
			'realestate_loan_payment' => 'Realestate Loan Payment',
			'payment_contract' => 'Payment Contract',
			'living_expenses' => 'Living Expenses',
			'other' => 'Other',
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
		$criteria->compare('prop_tax_asses',$this->prop_tax_asses,true);
		$criteria->compare('fed_state_income_tax',$this->fed_state_income_tax,true);
		$criteria->compare('realestate_loan_payment',$this->realestate_loan_payment,true);
		$criteria->compare('payment_contract',$this->payment_contract,true);
		$criteria->compare('living_expenses',$this->living_expenses,true);
		$criteria->compare('other',$this->other,true);
		$criteria->compare('rd_applicant_info_id',$this->rd_applicant_info_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}