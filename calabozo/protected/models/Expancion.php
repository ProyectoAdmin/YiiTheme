<?php

/**
 * This is the model class for table "Expancion".
 *
 * The followings are the available columns in table 'Expancion':
 * @property integer $idExpancion
 * @property integer $perteneceJuego
 * @property string $nombrExpancion
 *
 * The followings are the available model relations:
 * @property Juego $perteneceJuego0
 * @property Producto[] $productos
 */
class Expancion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Expancion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('perteneceJuego, nombrExpancion', 'required'),
			array('perteneceJuego', 'numerical', 'integerOnly'=>true),
			array('nombrExpancion', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idExpancion, perteneceJuego, nombrExpancion', 'safe', 'on'=>'search'),
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
			'perteneceJuego0' => array(self::BELONGS_TO, 'Juego', 'perteneceJuego'),
			'productos' => array(self::HAS_MANY, 'Producto', 'expancion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idExpancion' => 'Id Expancion',
			'perteneceJuego' => 'Pertenece Juego',
			'nombrExpancion' => 'Nombr Expancion',
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

		$criteria->compare('idExpancion',$this->idExpancion);
		$criteria->compare('perteneceJuego',$this->perteneceJuego);
		$criteria->compare('nombrExpancion',$this->nombrExpancion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Expancion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
