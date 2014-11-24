<?php

/**
 * This is the model class for table "Square".
 *
 * The followings are the available columns in table 'Square':
 * @property string $id
 * @property string $name
 * @property string $id_arch
 * @property string $id_born
 *
 * The followings are the available model relations:
 * @property SF[] $sFs
 * @property US[] $uSes
 * @property Trouble[] $troubles
 * @property Arch $idArch
 * @property Born $idBorn
 * @property Fluid[] $flus
 * @property Pore[] $pores
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
			array('name, id_arch, id_born', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, id_arch, id_born', 'safe', 'on'=>'search'),
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
			'sFs' => array(self::HAS_MANY, 'SF', 'id1'),
			'uSes' => array(self::HAS_MANY, 'US', 'id2'),
			'troubles' => array(self::HAS_MANY, 'Trouble', 'id_square'),
			'idArch' => array(self::BELONGS_TO, 'Arch', 'id_arch'),
			'idBorn' => array(self::BELONGS_TO, 'Born', 'id_born'),
			'flus' => array(self::HAS_MANY, 'Fluid', 'id_square'),
			'pores' => array(self::HAS_MANY, 'Pore', 'id_square'),
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
			'id_arch' => 'Id Arch',
			'id_born' => 'Id Born',
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
		$criteria->compare('id_arch',$this->id_arch,true);
		$criteria->compare('id_born',$this->id_born,true);

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
