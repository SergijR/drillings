<?php

/**
 * This is the model class for table "Pore".
 *
 * The followings are the available columns in table 'Pore':
 * @property string $id
 * @property string $no
 * @property string $construction
 * @property string $id_square
 * @property integer $bottomhole
 *
 * The followings are the available model relations:
 * @property Trouble[] $troubles
 * @property Fluid[] $flus
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
			array('bottomhole', 'numerical', 'integerOnly'=>true),
			array('no, construction, id_square', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, no, construction, id_square, bottomhole', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function attributeExports() 
	{
		return array(
			'id',
			'name',
			'price',
			'status',
			'description',
			'category.name',
			//'category_id'	
		);
	}	
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'troubles' => array(self::HAS_MANY, 'Trouble', 'id_pore'),
			'flus' => array(self::HAS_MANY, 'Fluid', 'id_pore'),
			'idSquare' => array(self::BELONGS_TO, 'Square', 'id_square'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'no' => 'No',
			'construction' => 'Construction',
			'id_square' => 'Id Square',
			'bottomhole' => 'Bottomhole',
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
		$criteria->compare('no',$this->no,true);
		$criteria->compare('construction',$this->construction,true);
		$criteria->compare('id_square',$this->id_square,true);
		$criteria->compare('bottomhole',$this->bottomhole);

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
