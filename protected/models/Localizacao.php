<?php

/**
 * This is the model class for table "{{localizacao}}".
 *
 * The followings are the available columns in table '{{localizacao}}':
 * @property integer $id
 * @property integer $numero_equipamento
 * @property string $numeo_central
 * @property string $lat
 * @property string $long
 * @property string $speed
 * @property string $data
 * @property string $bat
 * @property string $signal
 * @property integer $imei
 */
class Localizacao extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{localizacao}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('numero_equipamento, imei', 'numerical', 'integerOnly'=>true),
			array('numeo_central, lat, long, speed, bat, signal', 'length', 'max'=>20),
			array('data', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, numero_equipamento, numeo_central, lat, long, speed, data, bat, signal, imei', 'safe', 'on'=>'search'),
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
			'numero_equipamento' => 'Numero Equipamento',
			'numeo_central' => 'Numeo Central',
			'lat' => 'Lat',
			'long' => 'Long',
			'speed' => 'Speed',
			'data' => 'Data',
			'bat' => 'Bat',
			'signal' => 'Signal',
			'imei' => 'Imei',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('numero_equipamento',$this->numero_equipamento);
		$criteria->compare('numeo_central',$this->numeo_central,true);
		$criteria->compare('lat',$this->lat,true);
		$criteria->compare('long',$this->long,true);
		$criteria->compare('speed',$this->speed,true);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('bat',$this->bat,true);
		$criteria->compare('signal',$this->signal,true);
		$criteria->compare('imei',$this->imei);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Localizacao the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
