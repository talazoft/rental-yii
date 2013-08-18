<?php

/**
 * This is the model class for table "{{general_info}}".
 *
 * The followings are the available columns in table '{{general_info}}':
 * @property integer $id
 * @property integer $bankrupt
 * @property string $bankrupted_at
 * @property integer $is_questioned
 * @property string $questioned_at
 * @property integer $is_evicted
 * @property string $explanation
 * @property integer $rd_applicant_info_id
 *
 * The followings are the available model relations:
 * @property ApplicantInfo $rdApplicantInfo
 */
class GeneralInfo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return GeneralInfo the static model class
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
		return '{{general_info}}';
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
			array('bankrupt, is_questioned, is_evicted, rd_applicant_info_id', 'numerical', 'integerOnly'=>true),
			array('bankrupted_at, questioned_at', 'length', 'max'=>45),
			array('explanation', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, bankrupt, bankrupted_at, is_questioned, questioned_at, is_evicted, explanation, rd_applicant_info_id', 'safe', 'on'=>'search'),
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
			'bankrupt' => 'Bankrupt',
			'bankrupted_at' => 'Bankrupted At',
			'is_questioned' => 'Is Questioned',
			'questioned_at' => 'Questioned At',
			'is_evicted' => 'Is Evicted',
			'explanation' => 'Explanation',
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
		$criteria->compare('bankrupt',$this->bankrupt);
		$criteria->compare('bankrupted_at',$this->bankrupted_at,true);
		$criteria->compare('is_questioned',$this->is_questioned);
		$criteria->compare('questioned_at',$this->questioned_at,true);
		$criteria->compare('is_evicted',$this->is_evicted);
		$criteria->compare('explanation',$this->explanation,true);
		$criteria->compare('rd_applicant_info_id',$this->rd_applicant_info_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}