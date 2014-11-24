<?php

/**
 * This is the model class for table "Fluid".
 *
 * The followings are the available columns in table 'Fluid':
 * @property string $id
 * @property string $date
 * @property string $interval
 * @property string $id_fluidtype
 * @property string $composition
 * @property double $density1
 * @property integer $viscosity1
 * @property double $filtration1
 * @property double $mudcakethickness1
 * @property double $ssv1
 * @property double $ssv10
 * @property double $surfacetension
 * @property string $id_ubr
 * @property string $id_square
 * @property string $id_pore
 * @property double $density2
 * @property integer $viscosity2
 * @property double $filtration2
 * @property double $mudcakethickness2
 * @property string $id_stratigraphy
 * @property string $id_arch
 * @property string $id_poretype
 * @property string $project_number
 * @property double $interval1
 * @property string $id_born
 * @property double $interval2
 *
 * The followings are the available model relations:
 * @property Arch $idArch
 * @property Born $idBorn
 * @property PoreType $idPoretype
 * @property Stratigraphy $idStratigraphy
 * @property FluidType $idFluidtype
 * @property Pore $idPore
 * @property Square $idSquare
 * @property UBR $idUbr
 */
class Fluid extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Fluid';
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
			array('viscosity1, viscosity2', 'numerical', 'integerOnly'=>true),
			array('density1, filtration1, mudcakethickness1, ssv1, ssv10, surfacetension, density2, filtration2, mudcakethickness2, interval1, interval2', 'numerical'),
			array('date, interval, id_fluidtype, composition, id_ubr, id_square, id_pore, id_stratigraphy, id_arch, id_poretype, project_number, id_born', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, date, interval, id_fluidtype, composition, density1, viscosity1, filtration1, mudcakethickness1, ssv1, ssv10, surfacetension, id_ubr, id_square, id_pore, density2, viscosity2, filtration2, mudcakethickness2, id_stratigraphy, id_arch, id_poretype, project_number, interval1, id_born, interval2', 'safe', 'on'=>'search'),
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
			'idArch' => array(self::BELONGS_TO, 'Arch', 'id_arch'),
			'idBorn' => array(self::BELONGS_TO, 'Born', 'id_born'),
			'idPoretype' => array(self::BELONGS_TO, 'PoreType', 'id_poretype'),
			'idStratigraphy' => array(self::BELONGS_TO, 'Stratigraphy', 'id_stratigraphy'),
			'idFluidtype' => array(self::BELONGS_TO, 'FluidType', 'id_fluidtype'),
			'idPore' => array(self::BELONGS_TO, 'Pore', 'id_pore'),
			'idSquare' => array(self::BELONGS_TO, 'Square', 'id_square'),
			'idUbr' => array(self::BELONGS_TO, 'UBR', 'id_ubr'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'date' => 'Date',
			'interval' => 'Interval',
			'id_fluidtype' => 'Id Fluidtype',
			'composition' => 'Composition',
			'density1' => 'Density1',
			'viscosity1' => 'Viscosity1',
			'filtration1' => 'Filtration1',
			'mudcakethickness1' => 'Mudcakethickness1',
			'ssv1' => 'Ssv1',
			'ssv10' => 'Ssv10',
			'surfacetension' => 'Surfacetension',
			'id_ubr' => 'Id Ubr',
			'id_square' => 'Id Square',
			'id_pore' => 'Id Pore',
			'density2' => 'Density2',
			'viscosity2' => 'Viscosity2',
			'filtration2' => 'Filtration2',
			'mudcakethickness2' => 'Mudcakethickness2',
			'id_stratigraphy' => 'Id Stratigraphy',
			'id_arch' => 'Id Arch',
			'id_poretype' => 'Id Poretype',
			'project_number' => 'Project Number',
			'interval1' => 'Interval1',
			'id_born' => 'Id Born',
			'interval2' => 'Interval2',
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
		$criteria->compare('date',$this->date,true);
		$criteria->compare('interval',$this->interval,true);
		$criteria->compare('id_fluidtype',$this->id_fluidtype,true);
		$criteria->compare('composition',$this->composition,true);
		$criteria->compare('density1',$this->density1);
		$criteria->compare('viscosity1',$this->viscosity1);
		$criteria->compare('filtration1',$this->filtration1);
		$criteria->compare('mudcakethickness1',$this->mudcakethickness1);
		$criteria->compare('ssv1',$this->ssv1);
		$criteria->compare('ssv10',$this->ssv10);
		$criteria->compare('surfacetension',$this->surfacetension);
		$criteria->compare('id_ubr',$this->id_ubr,true);
		$criteria->compare('id_square',$this->id_square,true);
		$criteria->compare('id_pore',$this->id_pore,true);
		$criteria->compare('density2',$this->density2);
		$criteria->compare('viscosity2',$this->viscosity2);
		$criteria->compare('filtration2',$this->filtration2);
		$criteria->compare('mudcakethickness2',$this->mudcakethickness2);
		$criteria->compare('id_stratigraphy',$this->id_stratigraphy,true);
		$criteria->compare('id_arch',$this->id_arch,true);
		$criteria->compare('id_poretype',$this->id_poretype,true);
		$criteria->compare('project_number',$this->project_number,true);
		$criteria->compare('interval1',$this->interval1);
		$criteria->compare('id_born',$this->id_born,true);
		$criteria->compare('interval2',$this->interval2);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Fluid the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
