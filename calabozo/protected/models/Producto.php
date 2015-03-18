<<<<<<< HEAD
<?php
=======
<?php
>>>>>>> cf7eb53e7662c9e2b2cfbeaa9620eabf4e791af0

/**
 * This is the model class for table "Producto".
 *
 * The followings are the available columns in table 'Producto':
<<<<<<< HEAD
 * @property integer $IDProducto
 * @property string $nombreColeccionable
 * @property integer $juego
 * @property integer $expansion
 * @property string $imagen
 * @property double $precio
 * @property integer $piezasEnExistencia
 * @property string $fechaDeRegistro
 *
 * The followings are the available model relations:
 * @property Expansion $expansion0
 * @property Juego $juego0
 */
class Producto extends CActiveRecord
=======
 * @property integer $IDProducto
 * @property string $nombreColeccionable
 * @property integer $juego
 * @property integer $expancion
 * @property string $imagen
 * @property double $precio
 * @property integer $piezasEnExistencia
 * @property string $fechaDeRegistro
 *
 * The followings are the available model relations:
 * @property Expancion $expancion0
 * @property Juego $juego0
 */
class Producto extends CActiveRecord
>>>>>>> cf7eb53e7662c9e2b2cfbeaa9620eabf4e791af0
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Producto';
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
			array('nombreColeccionable, juego, expansion, imagen, precio, piezasEnExistencia, fechaDeRegistro', 'required'),
			array('juego, expansion, piezasEnExistencia', 'numerical', 'integerOnly'=>true),
			array('precio', 'numerical'),
			array('nombreColeccionable', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDProducto, nombreColeccionable, juego, expansion, imagen, precio, piezasEnExistencia, fechaDeRegistro', 'safe', 'on'=>'search'),
=======
			array('nombreColeccionable, juego, expancion, imagen, precio, piezasEnExistencia, fechaDeRegistro', 'required'),
			array('juego, expancion, piezasEnExistencia', 'numerical', 'integerOnly'=>true),
			array('precio', 'numerical'),
			array('nombreColeccionable', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDProducto, nombreColeccionable, juego, expancion, imagen, precio, piezasEnExistencia, fechaDeRegistro', 'safe', 'on'=>'search'),
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
			'expansion0' => array(self::BELONGS_TO, 'Expansion', 'expansion'),
			'juego0' => array(self::BELONGS_TO, 'Juego', 'juego'),
=======
			'expancion0' => array(self::BELONGS_TO, 'Expancion', 'expancion'),
			'juego0' => array(self::BELONGS_TO, 'Juego', 'juego'),
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
			'IDProducto' => 'Idproducto',
			'nombreColeccionable' => 'Nombre Coleccionable',
			'juego' => 'Juego',
			'expansion' => 'Expansion',
			'imagen' => 'Imagen',
			'precio' => 'Precio',
			'piezasEnExistencia' => 'Piezas En Existencia',
			'fechaDeRegistro' => 'Fecha De Registro',
		);
	}

=======
			'IDProducto' => 'Idproducto',
			'nombreColeccionable' => 'Nombre Coleccionable',
			'juego' => 'Juego',
			'expancion' => 'Expancion',
			'imagen' => 'Imagen',
			'precio' => 'Precio',
			'piezasEnExistencia' => 'Piezas En Existencia',
			'fechaDeRegistro' => 'Fecha De Registro',
		);
	}


>>>>>>> cf7eb53e7662c9e2b2cfbeaa9620eabf4e791af0
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
		$criteria->compare('IDProducto',$this->IDProducto);
		$criteria->compare('nombreColeccionable',$this->nombreColeccionable,true);
		$criteria->compare('juego',$this->juego);
		$criteria->compare('expansion',$this->expansion);
		$criteria->compare('imagen',$this->imagen,true);
		$criteria->compare('precio',$this->precio);
		$criteria->compare('piezasEnExistencia',$this->piezasEnExistencia);
		$criteria->compare('fechaDeRegistro',$this->fechaDeRegistro,true);
=======
		$criteria->compare('IDProducto',$this->IDProducto);
		$criteria->compare('nombreColeccionable',$this->nombreColeccionable,true);
		$criteria->compare('juego',$this->juego);
		$criteria->compare('expancion',$this->expancion);
		$criteria->compare('imagen',$this->imagen,true);
		$criteria->compare('precio',$this->precio);
		$criteria->compare('piezasEnExistencia',$this->piezasEnExistencia);
		$criteria->compare('fechaDeRegistro',$this->fechaDeRegistro,true);
>>>>>>> cf7eb53e7662c9e2b2cfbeaa9620eabf4e791af0

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Producto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
<<<<<<< HEAD
=======


 	protected function beforeSave()
    {
        if ($this->FECHA_ALTA=='')
        {
            $this->FECHA_ALTA=NULL;
        }
        elseif ($this->FECHA_ALTA!='')
        {      
            $this->FECHA_ALTA = date('Y-m-d', CDateTimeParser::parse($this->FECHA_ALTA, 'dd-MM-yyyy'));
        }              
       
        return parent::beforeSave();
        
	}
>>>>>>> cf7eb53e7662c9e2b2cfbeaa9620eabf4e791af0
}
