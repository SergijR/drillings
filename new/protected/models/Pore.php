<?php

/**
 * This is the model class for table "Pore".
 *
 * The followings are the available columns in table 'Pore':
 * @property string $id
 * @property string $No
 * @property string $Construction
 * @property string $id_Square
 * @property integer $Bottomhole
 *
 * The followings are the available model relations:
 * @property Square $idSquare
 */
class Pore extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Pore';
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
			array('Bottomhole', 'numerical', 'integerOnly'=>true),
			array('No, Construction, id_Square', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, No, Construction, id_Square, Bottomhole', 'safe', 'on'=>'search'),
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
			'idSquare' => array(self::BELONGS_TO, 'Square', 'id_Square'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'No' => 'No',
			'Construction' => 'Construction',
			'id_Square' => 'Id Square',
			'Bottomhole' => 'Bottomhole',
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
		$criteria->compare('No',$this->No,true);
		$criteria->compare('Construction',$this->Construction,true);
		$criteria->compare('id_Square',$this->id_Square,true);
		$criteria->compare('Bottomhole',$this->Bottomhole);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pore the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
