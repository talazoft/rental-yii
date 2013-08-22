<?php

/**
 * This is the model class for table "{{monthly_income}}".
 *
 * The followings are the available columns in table '{{monthly_income}}':
 * @property integer $id
 * @property string $salary_or_wage
 * @property string $devidends
 * @property string $rental
 * @property string $bussiness_income
 * @property string $other
 * @property integer $rd_applicant_info_id
 *
 * The followings are the available model relations:
 * @property ApplicantInfo $rdApplicantInfo
 */
class MonthlyIncome extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MonthlyIncome the static model class
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
		return '{{monthly_income}}';
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
			array('salary_or_wage, devidends, rental, bussiness_income, other', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, salary_or_wage, devidends, rental, bussiness_income, other, rd_applicant_info_id', 'safe', 'on'=>'search'),
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
			'salary_or_wage' => 'Salary Or Wage',
			'devidends' => 'Devidends',
			'rental' => 'Rental',
			'bussiness_income' => 'Bussiness Income',
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
		$criteria->compare('salary_or_wage',$this->salary_or_wage,true);
		$criteria->compare('devidends',$this->devidends,true);
		$criteria->compare('rental',$this->rental,true);
		$criteria->compare('bussiness_income',$this->bussiness_income,true);
		$criteria->compare('other',$this->other,true);
		$criteria->compare('rd_applicant_info_id',$this->rd_applicant_info_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}