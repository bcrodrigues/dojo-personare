<?php

/**
 * This is the model class for table "calculator".
 *
 * The followings are the available columns in table 'calculator':
 * @property integer $id
 * @property integer $currentValue
 * @property integer $state
 */
class Calculator extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Calculator the static model class
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
		return 'calculator';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('currentValue', 'required'),
			array('currentValue, state', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, currentValue, state', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'currentValue' => 'Current Value',
			'state' => 'State',
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
		$criteria->compare('currentValue',$this->currentValue);
		$criteria->compare('state',$this->state);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
	
	public function add($number1,$number2)
	{	
		// Verifica se é um valor número
		if (!is_numeric($number1) || !is_numeric($number2)){
			throw new Exception('Parâmetro não é numérico');
		}			
			
		//soma os dois valores
		return $number1 + $number2;
	}
	
	public function subtract($number1,$number2)
	{	
		if ( !is_numeric($number1) ||  !is_numeric($number2) ) {
			throw new IntegerException('Parâmetro não é numérico');
		}			
		return $number1 - $number2;
	}
	
}