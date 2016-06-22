<?php

/**
 * This is the model class for table "plandepago".
 *
 * The followings are the available columns in table 'plandepago':
 * @property integer $IdPlan
 * @property integer $IDEmpresa
 * @property integer $idCred
 * @property string $FechaPago
 * @property integer $Importe
 * @property integer $Interes
 * @property integer $NroCuotas
 * @property integer $Total
 *
 * The followings are the available model relations:
 * @property Credito $idCred0
 */
class Plandepago extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'plandepago';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IDEmpresa, idCred, Importe, Interes, NroCuotas, Total', 'numerical', 'integerOnly'=>true),
			array('FechaPago', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IdPlan, IDEmpresa, idCred, FechaPago, Importe, Interes, NroCuotas, Total', 'safe', 'on'=>'search'),
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
			'idCred0' => array(self::BELONGS_TO, 'Credito', 'idCred'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IdPlan' => 'Id Plan',
			'IDEmpresa' => 'Idempresa',
			'idCred' => 'Id Cred',
			'FechaPago' => 'Fecha Pago',
			'Importe' => 'Importe',
			'Interes' => 'Interes',
			'NroCuotas' => 'Nro Cuotas',
			'Total' => 'Total',
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

		$criteria->compare('IdPlan',$this->IdPlan);
		$criteria->compare('IDEmpresa',$this->IDEmpresa);
		$criteria->compare('idCred',$this->idCred);
		$criteria->compare('FechaPago',$this->FechaPago,true);
		$criteria->compare('Importe',$this->Importe);
		$criteria->compare('Interes',$this->Interes);
		$criteria->compare('NroCuotas',$this->NroCuotas);
		$criteria->compare('Total',$this->Total);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Plandepago the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
