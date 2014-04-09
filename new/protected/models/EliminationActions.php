<?php

/**
 * This is the model class for table "EliminationActions".
 *
 * The followings are the available columns in table 'EliminationActions':
 * @property string $id
 * @property integer $Number
 * @property integer $Depth
 * @property string $InjectionPressure
 * @property string $Material
 * @property string $Note
 * @property string $id_EliminationMethod
 * @property string $id_InjectionTechnology
 * @property integer $ActionsQuantity
 * @property string $id_Trouble
 * @property string $id_Stratigraphy
 *
 * The followings are the available model relations:
 * @property EliminationMethod $idEliminationMethod
 * @property InjectionTechnology $idInjectionTechnology
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
			array('Number, Depth, ActionsQuantity', 'numerical', 'integerOnly'=>true),
			array('InjectionPressure, Material, Note, id_EliminationMethod, id_InjectionTechnology, id_Trouble, id_Stratigraphy', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Number, Depth, InjectionPressure, Material, Note, id_EliminationMethod, id_InjectionTechnology, ActionsQuantity, id_Trouble, id_Stratigraphy', 'safe', 'on'=>'search'),
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
			'idEliminationMethod' => array(self::BELONGS_TO, 'EliminationMethod', 'id_EliminationMethod'),
			'idInjectionTechnology' => array(self::BELONGS_TO, 'InjectionTechnology', 'id_InjectionTechnology'),
			'idStratigraphy' => array(self::BELONGS_TO, 'Stratigraphy', 'id_Stratigraphy'),
			'idTrouble' => array(self::BELONGS_TO, 'Trouble', 'id_Trouble'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Number' => 'Number',
			'Depth' => 'Depth',
			'InjectionPressure' => 'Injection Pressure',
			'Material' => 'Material',
			'Note' => 'Note',
			'id_EliminationMethod' => 'Id Elimination Method',
			'id_InjectionTechnology' => 'Id Injection Technology',
			'ActionsQuantity' => 'Actions Quantity',
			'id_Trouble' => 'Id Trouble',
			'id_Stratigraphy' => 'Id Stratigraphy',
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
		$criteria->compare('Number',$this->Number);
		$criteria->compare('Depth',$this->Depth);
		$criteria->compare('InjectionPressure',$this->InjectionPressure,true);
		$criteria->compare('Material',$this->Material,true);
		$criteria->compare('Note',$this->Note,true);
		$criteria->compare('id_EliminationMethod',$this->id_EliminationMethod,true);
		$criteria->compare('id_InjectionTechnology',$this->id_InjectionTechnology,true);
		$criteria->compare('ActionsQuantity',$this->ActionsQuantity);
		$criteria->compare('id_Trouble',$this->id_Trouble,true);
		$criteria->compare('id_Stratigraphy',$this->id_Stratigraphy,true);

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
