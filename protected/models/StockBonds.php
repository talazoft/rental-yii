<?php

/**
 * This is the model class for table "{{stock_bonds}}".
 *
 * The followings are the available columns in table '{{stock_bonds}}':
 * @property integer $id
 * @property string $stock_bonds
 * @property string $where_quote
 * @property string $market_cost
 * @property string $title_name
 * @property string $quantity
 * @property string $value
 * @property integer $rd_finance_info_id
 *
 * The followings are the available model relations:
 * @property FinanceInfo $rdFinanceInfo
 */
class StockBonds extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return StockBonds the static model class
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
		return '{{stock_bonds}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rd_finance_info_id', 'required'),
			array('rd_finance_info_id', 'numerical', 'integerOnly'=>true),
			array('stock_bonds, where_quote, market_cost, title_name, quantity, value', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, stock_bonds, where_quote, market_cost, title_name, quantity, value, rd_finance_info_id', 'safe', 'on'=>'search'),
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
			'rdFinanceInfo' => array(self::BELONGS_TO, 'FinanceInfo', 'rd_finance_info_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'stock_bonds' => 'Stock Bonds',
			'where_quote' => 'Where Quote',
			'market_cost' => 'Market Cost',
			'title_name' => 'Title Name',
			'quantity' => 'Quantity',
			'value' => 'Value',
			'rd_finance_info_id' => 'Rd Finance Info',
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
		$criteria->compare('stock_bonds',$this->stock_bonds,true);
		$criteria->compare('where_quote',$this->where_quote,true);
		$criteria->compare('market_cost',$this->market_cost,true);
		$criteria->compare('title_name',$this->title_name,true);
		$criteria->compare('quantity',$this->quantity,true);
		$criteria->compare('value',$this->value,true);
		$criteria->compare('rd_finance_info_id',$this->rd_finance_info_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}