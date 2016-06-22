<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $IdUsuario
 * @property integer $IDEmpresa
 * @property string $Nombre
 * @property string $ApellidoPaterno
 * @property string $ApellidoMaterno
 * @property integer $CI
 * @property string $Direccion
 * @property integer $Telefono
 * @property string $login
 * @property string $passwok
 * @property integer $Estado
 *
 * The followings are the available model relations:
 * @property Credito[] $creditos
 * @property Rol[] $rols
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IDEmpresa, CI, Telefono, Estado', 'numerical', 'integerOnly'=>true),
			array('Nombre, ApellidoPaterno, ApellidoMaterno, Direccion, login, passwok', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IdUsuario, IDEmpresa, Nombre, ApellidoPaterno, ApellidoMaterno, CI, Direccion, Telefono, login, passwok, Estado', 'safe', 'on'=>'search'),
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
			'creditos' => array(self::HAS_MANY, 'Credito', 'idU'),
			'rols' => array(self::HAS_MANY, 'Rol', 'idUs'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IdUsuario' => 'Id Usuario',
			'IDEmpresa' => 'Idempresa',
			'Nombre' => 'Nombre',
			'ApellidoPaterno' => 'Apellido Paterno',
			'ApellidoMaterno' => 'Apellido Materno',
			'CI' => 'Ci',
			'Direccion' => 'Direccion',
			'Telefono' => 'Telefono',
			'login' => 'Login',
			'passwok' => 'Passwok',
			'Estado' => 'Estado',
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

		$criteria->compare('IdUsuario',$this->IdUsuario);
		$criteria->compare('IDEmpresa',$this->IDEmpresa);
		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('ApellidoPaterno',$this->ApellidoPaterno,true);
		$criteria->compare('ApellidoMaterno',$this->ApellidoMaterno,true);
		$criteria->compare('CI',$this->CI);
		$criteria->compare('Direccion',$this->Direccion,true);
		$criteria->compare('Telefono',$this->Telefono);
		$criteria->compare('login',$this->login,true);
		$criteria->compare('passwok',$this->passwok,true);
		$criteria->compare('Estado',$this->Estado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
