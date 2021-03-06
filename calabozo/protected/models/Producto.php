<?php

/**
 * This is the model class for table "Producto".
 *
 * The followings are the available columns in table 'Producto':
 * @property integer $IDProducto
 * @property string $nombreColeccionable
 * @property integer $juego
 * @property integer $expansion
 * @property string $rutaImagen
 * @property double $precio
 * @property integer $piezasEnExistencia
 * @property string $fechaDeRegistro
 *
 * The followings are the available model relations:
 * @property Expansion $expansion0
 * @property Juego $juego0
 */
class Producto extends CActiveRecord
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
			array('nombreColeccionable, juego, expansion, precio, piezasEnExistencia, fechaDeRegistro', 'required'),
			array('juego, expansion, piezasEnExistencia', 'numerical', 'integerOnly'=>true),
			array('precio', 'numerical'),
			array('nombreColeccionable', 'length', 'max'=>25),
			array('rutaImagen', 'file',  'allowEmpty'=>false,
			                  'types'=>'png, jpg, jpeg, gif',
			                  'maxSize'=>array(1024 * 2000),
			                  'message'=>'Debes Seleccionar Foto'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDProducto, nombreColeccionable, juego, expansion, rutaImagen, precio, piezasEnExistencia, fechaDeRegistro', 'safe', 'on'=>'search'),
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
			'expansion0' => array(self::BELONGS_TO, 'Expansion', 'expansion'),
			'juego0' => array(self::BELONGS_TO, 'Juego', 'juego'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDProducto' => 'Idproducto',
			'nombreColeccionable' => 'Nombre Coleccionable',
			'juego' => 'Juego',
			'expansion' => 'Expansion',
			'rutaImagen' => 'Ruta Imagen',
			'precio' => 'Precio',
			'piezasEnExistencia' => 'Piezas En Existencia',
			'fechaDeRegistro' => 'Fecha De Registro',
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

		$criteria=new CDbCriteria;

		$criteria->compare('IDProducto',$this->IDProducto);
		$criteria->compare('nombreColeccionable',$this->nombreColeccionable,true);
		$criteria->compare('juego',$this->juego);
		$criteria->compare('expansion',$this->expansion);
		$criteria->compare('precio',$this->precio);
		$criteria->compare('piezasEnExistencia',$this->piezasEnExistencia);
		$criteria->compare('fechaDeRegistro',$this->fechaDeRegistro,true);

			$_SESSION['Productos'] = new CActiveDataProvider($this,array(
				'criteria'=>$criteria,
				'pagination'=>false,
			)
		);

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

	
	
}


