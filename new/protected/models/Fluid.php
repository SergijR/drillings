<?php

/**
 * This is the model class for table "Fluid".
 *
 * The followings are the available columns in table 'Fluid':
 * @property string $id
 * @property string $Date
 * @property string $Interval
 * @property string $id_FluidType
 * @property string $Composition
 * @property double $Density1
 * @property integer $Viscosity1
 * @property double $filtration1
 * @property double $MudcakeThickness1
 * @property double $SSV1
 * @property double $SSV10
 * @property double $SurfaceTension
 * @property string $id_UBR
 * @property string $id_square
 * @property string $id_pore
 * @property double $Density2
 * @property integer $Viscosity2
 * @property double $Filtration2
 * @property double $MudcakeThickness2
 * @property string $id_Stratigraphy
 * @property string $id_Arch
 * @property string $id_poretype
 * @property string $ProjectNumber
 * @property double $interval1
 * @property string $id_Born
 * @property double $interval2
 *
 * The followings are the available model relations:
 * @property Arch $idArch
 * @property Born $idBorn
 * @property PoreType $idPoreType
 * @property Stratigraphy $idStratigraphy
 * @property FluidType $idFluidType
 * @property Pore $idPore
 * @property Square $idSquare
 * @property UBR $idUBR
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
			array('Viscosity1, Viscosity2', 'numerical', 'integerOnly'=>true),
			array('Density1, filtration1, MudcakeThickness1, SSV1, SSV10, SurfaceTension, Density2, Filtration2, MudcakeThickness2, interval1, interval2', 'numerical'),
			array('Date, Interval, id_FluidType, Composition, id_UBR, id_square, id_pore, id_Stratigraphy, id_Arch, id_poretype, ProjectNumber, id_Born', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Date, Interval, id_FluidType, Composition, Density1, Viscosity1, filtration1, MudcakeThickness1, SSV1, SSV10, SurfaceTension, id_UBR, id_square, id_pore, Density2, Viscosity2, Filtration2, MudcakeThickness2, id_Stratigraphy, id_Arch, id_poretype, ProjectNumber, interval1, id_Born, interval2', 'safe', 'on'=>'search'),
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
			'idArch' => array(self::BELONGS_TO, 'Arch', 'id_Arch'),
			'idBorn' => array(self::BELONGS_TO, 'Born', 'id_Born'),
			'idPoreType' => array(self::BELONGS_TO, 'PoreType', 'id_poretype'),
			'idStratigraphy' => array(self::BELONGS_TO, 'Stratigraphy', 'id_Stratigraphy'),
			'idFluidType' => array(self::BELONGS_TO, 'FluidType', 'id_FluidType'),
			'idPore' => array(self::BELONGS_TO, 'Pore', 'id_pore'),
			'idSquare' => array(self::BELONGS_TO, 'Square', 'id_square'),
			'idUBR' => array(self::BELONGS_TO, 'UBR', 'id_UBR'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Date' => 'Date',
			'Interval' => 'Interval',
			'id_FluidType' => 'Id Fluid Type',
			'Composition' => 'Composition',
			'Density1' => 'Density1',
			'Viscosity1' => 'Viscosity1',
			'filtration1' => 'filtration1',
			'MudcakeThickness1' => 'Mudcake Thickness1',
			'SSV1' => 'Ssv1',
			'SSV10' => 'Ssv10',
			'SurfaceTension' => 'Surface Tension',
			'id_UBR' => 'Id Ubr',
			'id_square' => 'Id Square',
			'id_pore' => 'Id Pore',
			'Density2' => 'Density2',
			'Viscosity2' => 'Viscosity2',
			'Filtration2' => 'Filtration2',
			'MudcakeThickness2' => 'Mudcake Thickness2',
			'id_Stratigraphy' => 'Id Stratigraphy',
			'id_Arch' => 'Id Arch',
			'id_poretype' => 'Id Pore Type',
			'ProjectNumber' => 'Project Number',
			'interval1' => 'Interval1',
			'id_Born' => 'Id Born',
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
		$criteria->compare('Date',$this->Date,true);
		$criteria->compare('Interval',$this->Interval,true);
		$criteria->compare('id_FluidType',$this->id_FluidType,true);
		$criteria->compare('Composition',$this->Composition,true);
		$criteria->compare('Density1',$this->Density1);
		$criteria->compare('Viscosity1',$this->Viscosity1);
		$criteria->compare('filtration1',$this->filtration1);
		$criteria->compare('MudcakeThickness1',$this->MudcakeThickness1);
		$criteria->compare('SSV1',$this->SSV1);
		$criteria->compare('SSV10',$this->SSV10);
		$criteria->compare('SurfaceTension',$this->SurfaceTension);
		$criteria->compare('id_UBR',$this->id_UBR,true);
		$criteria->compare('id_square',$this->id_square,true);
		$criteria->compare('id_pore',$this->id_pore,true);
		$criteria->compare('Density2',$this->Density2);
		$criteria->compare('Viscosity2',$this->Viscosity2);
		$criteria->compare('Filtration2',$this->Filtration2);
		$criteria->compare('MudcakeThickness2',$this->MudcakeThickness2);
		$criteria->compare('id_Stratigraphy',$this->id_Stratigraphy,true);
		$criteria->compare('id_Arch',$this->id_Arch,true);
		$criteria->compare('id_poretype',$this->id_poretype,true);
		$criteria->compare('ProjectNumber',$this->ProjectNumber,true);
		$criteria->compare('interval1',$this->interval1);
		$criteria->compare('id_Born',$this->id_Born,true);
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
