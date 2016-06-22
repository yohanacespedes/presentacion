<?php

/**
 * This is the model class for table "pago".
 *
 * The followings are the available columns in table 'pago':
 * @property integer $IdPago
 * @property integer $IDEmpresa
 * @property string $Fecha
 * @property integer $Importe
 * @property string $Estado
 * @property integer $idCredi
 *
 * The followings are the available model relations:
 * @property Credito $idCredi0
 */
class Pago extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pago';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IDEmpresa, Importe, idCredi', 'numerical', 'integerOnly'=>true),
			array('Fecha', 'length', 'max'=>20),
			array('Estado', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IdPago, IDEmpresa, Fecha, Importe, Estado, idCredi', 'safe', 'on'=>'search'),
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
			'idCredi0' => array(self::BELONGS_TO, 'Credito', 'idCredi'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IdPago' => 'Id Pago',
			'IDEmpresa' => 'Idempresa',
			'Fecha' => 'Fecha',
			'Importe' => 'Importe',
			'Estado' => 'Estado',
			'idCredi' => 'Id Credi',
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

		$criteria->compare('IdPago',$this->IdPago);
		$criteria->compare('IDEmpresa',$this->IDEmpresa);
		$criteria->compare('Fecha',$this->Fecha,true);
		$criteria->compare('Importe',$this->Importe);
		$criteria->compare('Estado',$this->Estado,true);
		$criteria->compare('idCredi',$this->idCredi);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pago the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
