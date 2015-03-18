<<<<<<< HEAD
<?php
=======
<?php
>>>>>>> cf7eb53e7662c9e2b2cfbeaa9620eabf4e791af0

/**
 * This is the model class for table "Usuarios".
 *
 * The followings are the available columns in table 'Usuarios':
<<<<<<< HEAD
 * @property integer $IDUsuarios
 * @property string $nombreUsuario
 * @property string $contrasena
 * @property integer $tiposDeUsuarios
 *
 * The followings are the available model relations:
 * @property Rol $tiposDeUsuarios0
 */
class Usuarios extends CActiveRecord
=======
 * @property integer $IDUsuarios
 * @property string $nombreUsuario
 * @property string $contraseña
 * @property integer $tiposDeUsuarios
 *
 * The followings are the available model relations:
 * @property Rol $tiposDeUsuarios0
 */
class Usuarios extends CActiveRecord
>>>>>>> cf7eb53e7662c9e2b2cfbeaa9620eabf4e791af0
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
<<<<<<< HEAD
			array('nombreUsuario, contrasena, tiposDeUsuarios', 'required'),
			array('tiposDeUsuarios', 'numerical', 'integerOnly'=>true),
			array('nombreUsuario', 'length', 'max'=>10),
			array('contrasena', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDUsuarios, nombreUsuario, contrasena, tiposDeUsuarios', 'safe', 'on'=>'search'),
=======
			array('nombreUsuario, contraseña, tiposDeUsuarios', 'required'),
			array('tiposDeUsuarios', 'numerical', 'integerOnly'=>true),
			array('nombreUsuario', 'length', 'max'=>10),
			array('contraseña', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDUsuarios, nombreUsuario, contraseña, tiposDeUsuarios', 'safe', 'on'=>'search'),
>>>>>>> cf7eb53e7662c9e2b2cfbeaa9620eabf4e791af0
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
<<<<<<< HEAD
			'tiposDeUsuarios0' => array(self::BELONGS_TO, 'Rol', 'tiposDeUsuarios'),
=======
			'tiposDeUsuarios0' => array(self::BELONGS_TO, 'Rol', 'tiposDeUsuarios'),
>>>>>>> cf7eb53e7662c9e2b2cfbeaa9620eabf4e791af0
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
<<<<<<< HEAD
			'IDUsuarios' => 'Idusuarios',
			'nombreUsuario' => 'Nombre Usuario',
			'contrasena' => 'Contraseña',
			'tiposDeUsuarios' => 'Tipo De Usuarios',
=======
			'IDUsuarios' => 'Idusuarios',
			'nombreUsuario' => 'Nombre Usuario',
			'contraseña' => 'Contraseña',
			'tiposDeUsuarios' => 'Tipos De Usuarios',
>>>>>>> cf7eb53e7662c9e2b2cfbeaa9620eabf4e791af0
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

<<<<<<< HEAD
		$criteria->compare('IDUsuarios',$this->IDUsuarios);
		$criteria->compare('nombreUsuario',$this->nombreUsuario,true);
		$criteria->compare('tiposDeUsuarios',$this->tiposDeUsuarios);
=======
		$criteria->compare('IDUsuarios',$this->IDUsuarios);
		$criteria->compare('nombreUsuario',$this->nombreUsuario,true);
		$criteria->compare('contraseña',$this->contraseña,true);
		$criteria->compare('tiposDeUsuarios',$this->tiposDeUsuarios);
>>>>>>> cf7eb53e7662c9e2b2cfbeaa9620eabf4e791af0

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
