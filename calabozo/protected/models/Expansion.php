<?php

/**
 * This is the model class for table "Expansion".
 *
 * The followings are the available columns in table 'Expansion':
 * @property integer $idExpansion
 * @property integer $perteneceJuego
 * @property string $nombreExpansion
 *
 * The followings are the available model relations:
 * @property Juego $perteneceJuego0
 * @property Producto[] $productos
 */
class Expansion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Expansion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('perteneceJuego, nombreExpansion', 'required'),
			array('perteneceJuego', 'numerical', 'integerOnly'=>true),
			array('nombreExpansion', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idExpansion, perteneceJuego, nombreExpansion', 'safe', 'on'=>'search'),
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
			'productos' => array(self::HAS_MANY, 'Producto', 'expansion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idExpansion' => 'Id Expansion',
			'perteneceJuego' => 'Pertenece al Juego',
			'nombreExpansion' => 'Nombre Expansión',
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

		$criteria->compare('idExpansion',$this->idExpansion);
		$criteria->compare('perteneceJuego',$this->perteneceJuego);
		$criteria->compare('nombreExpansion',$this->nombreExpansion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Expansion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
