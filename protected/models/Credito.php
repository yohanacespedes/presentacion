<?php

/**
 * This is the model class for table "credito".
 *
 * The followings are the available columns in table 'credito':
 * @property integer $IdCredito
 * @property integer $IDEmpresa
 * @property integer $CuotasPagadas
 * @property string $Fecha
 * @property integer $Importe
 * @property integer $Interes
 * @property integer $Saldo
 * @property string $Estado
 * @property integer $idCli
 * @property integer $idU
 *
 * The followings are the available model relations:
 * @property Cliente $idCli0
 * @property Usuario $idU0
 * @property Pago[] $pagos
 * @property Plandepago[] $plandepagos
 */
class Credito extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'credito';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IDEmpresa, CuotasPagadas, Importe, Interes, Saldo, idCli, idU', 'numerical', 'integerOnly'=>true),
			array('Fecha, Estado', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IdCredito, IDEmpresa, CuotasPagadas, Fecha, Importe, Interes, Saldo, Estado, idCli, idU', 'safe', 'on'=>'search'),
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
			'idCli0' => array(self::BELONGS_TO, 'Cliente', 'idCli'),
			'idU0' => array(self::BELONGS_TO, 'Usuario', 'idU'),
			'pagos' => array(self::HAS_MANY, 'Pago', 'idCredi'),
			'plandepagos' => array(self::HAS_MANY, 'Plandepago', 'idCred'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IdCredito' => 'Id Credito',
			'IDEmpresa' => 'Idempresa',
			'CuotasPagadas' => 'Cuotas Pagadas',
			'Fecha' => 'Fecha',
			'Importe' => 'Importe',
			'Interes' => 'Interes',
			'Saldo' => 'Saldo',
			'Estado' => 'Estado',
			'idCli' => 'Id Cli',
			'idU' => 'Id U',
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

		$criteria->compare('IdCredito',$this->IdCredito);
		$criteria->compare('IDEmpresa',$this->IDEmpresa);
		$criteria->compare('CuotasPagadas',$this->CuotasPagadas);
		$criteria->compare('Fecha',$this->Fecha,true);
		$criteria->compare('Importe',$this->Importe);
		$criteria->compare('Interes',$this->Interes);
		$criteria->compare('Saldo',$this->Saldo);
		$criteria->compare('Estado',$this->Estado,true);
		$criteria->compare('idCli',$this->idCli);
		$criteria->compare('idU',$this->idU);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Credito the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
