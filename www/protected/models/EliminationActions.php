<?php

/**
 * This is the model class for table "EliminationActions".
 *
 * The followings are the available columns in table 'EliminationActions':
 * @property string $id
 * @property integer $number
 * @property integer $depth
 * @property string $injectionpressure
 * @property string $material
 * @property string $note
 * @property string $id_eliminationmethod
 * @property string $id_injectiontechnology
 * @property integer $actions_quantity
 * @property string $id_trouble
 * @property string $id_stratigraphy
 *
 * The followings are the available model relations:
 * @property EliminationMethod $idEliminationmethod
 * @property InjectionTechnology $idInjectiontechnology
 * @property Stratigraphy $idStratigraphy
 * @property Trouble $idTrouble
 */
class EliminationActions extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'EliminationActions';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id', 'required'),
			array('number, depth, actions_quantity', 'numerical', 'integerOnly'=>true),
			array('injectionpressure, material, note, id_eliminationmethod, id_injectiontechnology, id_trouble, id_stratigraphy', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, number, depth, injectionpressure, material, note, id_eliminationmethod, id_injectiontechnology, actions_quantity, id_trouble, id_stratigraphy', 'safe', 'on'=>'search'),
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
			'idEliminationmethod' => array(self::BELONGS_TO, 'EliminationMethod', 'id_eliminationmethod'),
			'idInjectiontechnology' => array(self::BELONGS_TO, 'InjectionTechnology', 'id_injectiontechnology'),
			'idStratigraphy' => array(self::BELONGS_TO, 'Stratigraphy', 'id_stratigraphy'),
			'idTrouble' => array(self::BELONGS_TO, 'Trouble', 'id_trouble'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'number' => 'Number',
			'depth' => 'Depth',
			'injectionpressure' => 'Injectionpressure',
			'material' => 'Material',
			'note' => 'Note',
			'id_eliminationmethod' => 'Id Eliminationmethod',
			'id_injectiontechnology' => 'Id Injectiontechnology',
			'actions_quantity' => 'Actions Quantity',
			'id_trouble' => 'Id Trouble',
			'id_stratigraphy' => 'Id Stratigraphy',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('number',$this->number);
		$criteria->compare('depth',$this->depth);
		$criteria->compare('injectionpressure',$this->injectionpressure,true);
		$criteria->compare('material',$this->material,true);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('id_eliminationmethod',$this->id_eliminationmethod,true);
		$criteria->compare('id_injectiontechnology',$this->id_injectiontechnology,true);
		$criteria->compare('actions_quantity',$this->actions_quantity);
		$criteria->compare('id_trouble',$this->id_trouble,true);
		$criteria->compare('id_stratigraphy',$this->id_stratigraphy,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EliminationActions the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
