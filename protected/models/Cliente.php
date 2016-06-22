<?php

/**
 * This is the model class for table "cliente".
 *
 * The followings are the available columns in table 'cliente':
 * @property integer $IdCliente
 * @property integer $IDEmpresa
 * @property string $Nombre
 * @property string $ApellidoPaterno
 * @property string $ApellidoMaterno
 * @property integer $Ci
 * @property string $Direccion
 * @property integer $Telefono
 * @property integer $MZ
 * @property integer $UV
 * @property integer $Nit
 *
 * The followings are the available model relations:
 * @property Credito[] $creditos
 */
class Cliente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IDEmpresa, Ci, Telefono, MZ, UV, Nit', 'numerical', 'integerOnly'=>true),
			array('Nombre, ApellidoPaterno, ApellidoMaterno, Direccion', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IdCliente, IDEmpresa, Nombre, ApellidoPaterno, ApellidoMaterno, Ci, Direccion, Telefono, MZ, UV, Nit', 'safe', 'on'=>'search'),
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
			'creditos' => array(self::HAS_MANY, 'Credito', 'idCli'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IdCliente' => 'Id Cliente',
			'IDEmpresa' => 'Idempresa',
			'Nombre' => 'Nombre',
			'ApellidoPaterno' => 'Apellido Paterno',
			'ApellidoMaterno' => 'Apellido Materno',
			'Ci' => 'Ci',
			'Direccion' => 'Direccion',
			'Telefono' => 'Telefono',
			'MZ' => 'Mz',
			'UV' => 'Uv',
			'Nit' => 'Nit',
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

		$criteria->compare('IdCliente',$this->IdCliente);
		$criteria->compare('IDEmpresa',$this->IDEmpresa);
		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('ApellidoPaterno',$this->ApellidoPaterno,true);
		$criteria->compare('ApellidoMaterno',$this->ApellidoMaterno,true);
		$criteria->compare('Ci',$this->Ci);
		$criteria->compare('Direccion',$this->Direccion,true);
		$criteria->compare('Telefono',$this->Telefono);
		$criteria->compare('MZ',$this->MZ);
		$criteria->compare('UV',$this->UV);
		$criteria->compare('Nit',$this->Nit);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cliente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
