<<<<<<< HEAD
<?php
=======
<?php
>>>>>>> cf7eb53e7662c9e2b2cfbeaa9620eabf4e791af0

/**
 * This is the model class for table "Juego".
 *
 * The followings are the available columns in table 'Juego':
<<<<<<< HEAD
 * @property integer $idJuego
 * @property string $nombreJuego
 *
 * The followings are the available model relations:
 * @property Expancion[] $expancions
 * @property Producto[] $productos
 */
class Juego extends CActiveRecord
=======
 * @property integer $idJuego
 * @property string $nombreJuego
 *
 * The followings are the available model relations:
 * @property Expancion[] $expancions
 * @property Producto[] $productos
 */
class Juego extends CActiveRecord
>>>>>>> cf7eb53e7662c9e2b2cfbeaa9620eabf4e791af0
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Juego';
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
			array('nombreJuego', 'required'),
			array('nombreJuego', 'length', 'max'=>20),
=======
			array('nombreJuego', 'required'),
			array('nombreJuego', 'length', 'max'=>20),
>>>>>>> cf7eb53e7662c9e2b2cfbeaa9620eabf4e791af0
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idJuego, nombreJuego', 'safe', 'on'=>'search'),
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
			'expancions' => array(self::HAS_MANY, 'Expancion', 'perteneceJuego'),
			'productos' => array(self::HAS_MANY, 'Producto', 'juego'),
=======
			'expancions' => array(self::HAS_MANY, 'Expancion', 'perteneceJuego'),
			'productos' => array(self::HAS_MANY, 'Producto', 'juego'),
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
			'idJuego' => 'Id Juego',
			'nombreJuego' => 'Nombre Juego',
=======
			'idJuego' => 'Id Juego',
			'nombreJuego' => 'Nombre Juego',
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
		$criteria->compare('idJuego',$this->idJuego);
		$criteria->compare('nombreJuego',$this->nombreJuego,true);
=======
		$criteria->compare('idJuego',$this->idJuego);
		$criteria->compare('nombreJuego',$this->nombreJuego,true);
>>>>>>> cf7eb53e7662c9e2b2cfbeaa9620eabf4e791af0

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Juego the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
