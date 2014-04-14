<?php

/**
 * This is the model class for table "Square".
 *
 * The followings are the available columns in table 'Square':
 * @property string $id
 * @property string $Name
 * @property string $id_Arch
 * @property string $id_Born
 *
 * The followings are the available model relations:
 * @property Fluid[] $flus
 * @property Pore[] $pores
 * @property Trouble[] $troubles
 * @property US[] $uSes
 * @property SF[] $sFs
 * @property Arch $idArch
 * @property Born $idBorn
 */
class Square extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Square';
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
			array('Name, id_Arch, id_Born', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Name, id_Arch, id_Born', 'safe', 'on'=>'search'),
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
			'fluid' => array(self::HAS_MANY, 'Fluid', 'id_Square'),
			'pores' => array(self::HAS_MANY, 'Pore', 'id_Square'),
			'troubles' => array(self::HAS_MANY, 'Trouble', 'id_Square'),
			'uSes' => array(self::HAS_MANY, 'US', 'id2'),
			'sFs' => array(self::HAS_MANY, 'SF', 'id1'),
			'idArch' => array(self::BELONGS_TO, 'Arch', 'id_Arch'),
			'idBorn' => array(self::BELONGS_TO, 'Born', 'id_Born'),
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
			'id_Arch' => 'Id Arch',
			'id_Born' => 'Id Born',
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
		$criteria->compare('id_Arch',$this->id_Arch,true);
		$criteria->compare('id_Born',$this->id_Born,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Square the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
