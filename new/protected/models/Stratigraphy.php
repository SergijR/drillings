<?php

/**
 * This is the model class for table "Stratigraphy".
 *
 * The followings are the available columns in table 'Stratigraphy':
 * @property string $id
 * @property string $Name
 * @property string $Index
 * @property string $id_Stratigraphy
 * @property string $id_Level
 * @property string $Description
 *
 * The followings are the available model relations:
 * @property Fluid[] $flus
 * @property EliminationActions[] $eliminationActions
 * @property Trouble[] $troubles
 * @property SF[] $sFs
 * @property Level $idLevel
 * @property Stratigraphy $idStratigraphy
 * @property Stratigraphy[] $stratigraphies
 */
class Stratigraphy extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Stratigraphy';
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
			array('Name, Index, id_Stratigraphy, id_Level, Description', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Name, Index, id_Stratigraphy, id_Level, Description', 'safe', 'on'=>'search'),
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
			'flus' => array(self::HAS_MANY, 'Fluid', 'id_Stratigraphy'),
			'eliminationActions' => array(self::HAS_MANY, 'EliminationActions', 'id_Stratigraphy'),
			'troubles' => array(self::HAS_MANY, 'Trouble', 'id_Stratigraphy'),
			'sFs' => array(self::HAS_MANY, 'SF', 'id2'),
			'idLevel' => array(self::BELONGS_TO, 'Level', 'id_Level'),
			'idStratigraphy' => array(self::BELONGS_TO, 'Stratigraphy', 'id_Stratigraphy'),
			'stratigraphies' => array(self::HAS_MANY, 'Stratigraphy', 'id_Stratigraphy'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Name' => 'Name',
			'Index' => 'Index',
			'id_Stratigraphy' => 'Id Stratigraphy',
			'id_Level' => 'Id Level',
			'Description' => 'Description',
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
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('Index',$this->Index,true);
		$criteria->compare('id_Stratigraphy',$this->id_Stratigraphy,true);
		$criteria->compare('id_Level',$this->id_Level,true);
		$criteria->compare('Description',$this->Description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Stratigraphy the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
