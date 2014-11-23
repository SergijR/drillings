<?php

/**
 * This is the model class for table "Stratigraphy".
 *
 * The followings are the available columns in table 'Stratigraphy':
 * @property string $id
 * @property string $name
 * @property string $index
 * @property string $id_stratigraphy
 * @property string $id_level
 * @property string $description
 *
 * The followings are the available model relations:
 * @property SF[] $sFs
 * @property Trouble[] $troubles
 * @property EliminationActions[] $eliminationActions
 * @property Fluid[] $flus
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
			array('name, index, id_stratigraphy, id_level, description', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, index, id_stratigraphy, id_level, description', 'safe', 'on'=>'search'),
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
			'sFs' => array(self::HAS_MANY, 'SF', 'id2'),
			'troubles' => array(self::HAS_MANY, 'Trouble', 'id_stratigraphy'),
			'eliminationActions' => array(self::HAS_MANY, 'EliminationActions', 'id_stratigraphy'),
			'flus' => array(self::HAS_MANY, 'Fluid', 'id_stratigraphy'),
			'idLevel' => array(self::BELONGS_TO, 'Level', 'id_level'),
			'idStratigraphy' => array(self::BELONGS_TO, 'Stratigraphy', 'id_stratigraphy'),
			'stratigraphies' => array(self::HAS_MANY, 'Stratigraphy', 'id_stratigraphy'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'index' => 'Index',
			'id_stratigraphy' => 'Id Stratigraphy',
			'id_level' => 'Id Level',
			'description' => 'Description',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('index',$this->index,true);
		$criteria->compare('id_stratigraphy',$this->id_stratigraphy,true);
		$criteria->compare('id_level',$this->id_level,true);
		$criteria->compare('description',$this->description,true);

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
