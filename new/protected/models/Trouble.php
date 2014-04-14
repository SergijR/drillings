<?php

/**
 * This is the model class for table "Trouble".
 *
 * The followings are the available columns in table 'Trouble':
 * @property string $id
 * @property string $Activity
 * @property string $Method
 * @property double $Time
 * @property string $EliminationDate
 * @property string $id_Square
 * @property string $Interval
 * @property string $Rock
 * @property string $id_UBR
 * @property string $id_Units1
 * @property string $id_Units2
 * @property string $id_Pore
 * @property string $id_TroubleType
 * @property boolean $CirculationLoss
 * @property double $FluidDensity
 * @property boolean $Result
 * @property string $id_EliminationMethod
 * @property string $id_InjectionTechnology
 * @property string $id_Stratigraphy
 * @property string $id_Arch
 * @property string $id_FluidType
 * @property string $id_Born
 * @property double $interval_ot
 * @property double $interval_do
 *
 * The followings are the available model relations:
 * @property EliminationActions[] $eliminationActions
 * @property Arch $idArch
 * @property Born $idBorn
 * @property EliminationMethod $idEliminationMethod
 * @property FluidType $idFluidType
 * @property InjectionTechnology $idInjectionTechnology
 * @property Square $idSquare
 * @property Stratigraphy $idStratigraphy
 * @property TroubleType $idTroubleType
 * @property UBR $idUBR
 * @property Units1 $idUnits1
 * @property Units2 $idUnits2
 */
class Trouble extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Trouble';
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
			array('Time, FluidDensity, interval_ot, interval_do', 'numerical'),
			array('Activity, Method, EliminationDate, id_Square, Interval, Rock, id_UBR, id_Units1, id_Units2, id_Pore, id_TroubleType, CirculationLoss, Result, id_EliminationMethod, id_InjectionTechnology, id_Stratigraphy, id_Arch, id_FluidType, id_Born', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Activity, Method, Time, EliminationDate, id_Square, Interval, Rock, id_UBR, id_Units1, id_Units2, id_Pore, id_TroubleType, CirculationLoss, FluidDensity, Result, id_EliminationMethod, id_InjectionTechnology, id_Stratigraphy, id_Arch, id_FluidType, id_Born, interval_ot, interval_do', 'safe', 'on'=>'search'),
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
			'eliminationActions' => array(self::HAS_MANY, 'EliminationActions', 'id_Trouble'),
			'idArch' => array(self::BELONGS_TO, 'Arch', 'id_Arch'),
			'idBorn' => array(self::BELONGS_TO, 'Born', 'id_Born'),
			'idEliminationMethod' => array(self::BELONGS_TO, 'EliminationMethod', 'id_EliminationMethod'),
			'idFluidType' => array(self::BELONGS_TO, 'FluidType', 'id_FluidType'),
			'idInjectionTechnology' => array(self::BELONGS_TO, 'InjectionTechnology', 'id_InjectionTechnology'),
			'idSquare' => array(self::BELONGS_TO, 'Square', 'id_Square'),
			'idStratigraphy' => array(self::BELONGS_TO, 'Stratigraphy', 'id_Stratigraphy'),
			'idTroubleType' => array(self::BELONGS_TO, 'TroubleType', 'id_TroubleType'),
			'idUBR' => array(self::BELONGS_TO, 'UBR', 'id_UBR'),
			'idUnits1' => array(self::BELONGS_TO, 'Units1', 'id_Units1'),
			'idUnits2' => array(self::BELONGS_TO, 'Units2', 'id_Units2'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Activity' => 'Activity',
			'Method' => 'Method',
			'Time' => 'Time',
			'EliminationDate' => 'Elimination Date',
			'id_Square' => 'Id Square',
			'Interval' => 'Interval',
			'Rock' => 'Rock',
			'id_UBR' => 'Id Ubr',
			'id_Units1' => 'Id Units1',
			'id_Units2' => 'Id Units2',
			'id_Pore' => 'Id Pore',
			'id_TroubleType' => 'Id Trouble Type',
			'CirculationLoss' => 'Circulation Loss',
			'FluidDensity' => 'Fluid Density',
			'Result' => 'Result',
			'id_EliminationMethod' => 'Id Elimination Method',
			'id_InjectionTechnology' => 'Id Injection Technology',
			'id_Stratigraphy' => 'Id Stratigraphy',
			'id_Arch' => 'Id Arch',
			'id_FluidType' => 'Id Fluid Type',
			'id_Born' => 'Id Born',
			'interval_ot' => 'Interval Ot',
			'interval_do' => 'Interval Do',
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
		$criteria->compare('Activity',$this->Activity,true);
		$criteria->compare('Method',$this->Method,true);
		$criteria->compare('Time',$this->Time);
		$criteria->compare('EliminationDate',$this->EliminationDate,true);
		$criteria->compare('id_Square',$this->id_Square,true);
		$criteria->compare('Interval',$this->Interval,true);
		$criteria->compare('Rock',$this->Rock,true);
		$criteria->compare('id_UBR',$this->id_UBR,true);
		$criteria->compare('id_Units1',$this->id_Units1,true);
		$criteria->compare('id_Units2',$this->id_Units2,true);
		$criteria->compare('id_Pore',$this->id_Pore,true);
		$criteria->compare('id_TroubleType',$this->id_TroubleType,true);
		$criteria->compare('CirculationLoss',$this->CirculationLoss);
		$criteria->compare('FluidDensity',$this->FluidDensity);
		$criteria->compare('Result',$this->Result);
		$criteria->compare('id_EliminationMethod',$this->id_EliminationMethod,true);
		$criteria->compare('id_InjectionTechnology',$this->id_InjectionTechnology,true);
		$criteria->compare('id_Stratigraphy',$this->id_Stratigraphy,true);
		$criteria->compare('id_Arch',$this->id_Arch,true);
		$criteria->compare('id_FluidType',$this->id_FluidType,true);
		$criteria->compare('id_Born',$this->id_Born,true);
		$criteria->compare('interval_ot',$this->interval_ot);
		$criteria->compare('interval_do',$this->interval_do);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Trouble the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
