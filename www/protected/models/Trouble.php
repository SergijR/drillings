<?php

/**
 * This is the model class for table "Trouble".
 *
 * The followings are the available columns in table 'Trouble':
 * @property string $id
 * @property string $activity
 * @property string $method
 * @property double $time
 * @property string $eliminationdate
 * @property string $id_square
 * @property string $interval
 * @property string $rock
 * @property string $id_ubr
 * @property string $id_units1
 * @property string $id_units2
 * @property string $id_pore
 * @property string $id_troubletype
 * @property boolean $circulationloss
 * @property double $fluiddensity
 * @property boolean $result
 * @property string $id_eliminationmethod
 * @property string $id_injectiontechnology
 * @property string $id_stratigraphy
 * @property string $id_arch
 * @property string $id_fluidtype
 * @property string $id_born
 * @property double $interval_ot
 * @property double $interval_do
 *
 * The followings are the available model relations:
 * @property Arch $idArch
 * @property Born $idBorn
 * @property EliminationMethod $idEliminationmethod
 * @property FluidType $idFluidtype
 * @property InjectionTechnology $idInjectiontechnology
 * @property Pore $idPore
 * @property Square $idSquare
 * @property Stratigraphy $idStratigraphy
 * @property TroubleType $idTroubletype
 * @property UBR $idUbr
 * @property Units1 $idUnits1
 * @property Units2 $idUnits2
 * @property EliminationActions[] $eliminationActions
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
			array('time, fluiddensity, interval_ot, interval_do', 'numerical'),
			array('activity, method, eliminationdate, id_square, interval, rock, id_ubr, id_units1, id_units2, id_pore, id_troubletype, circulationloss, result, id_eliminationmethod, id_injectiontechnology, id_stratigraphy, id_arch, id_fluidtype, id_born', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, activity, method, time, eliminationdate, id_square, interval, rock, id_ubr, id_units1, id_units2, id_pore, id_troubletype, circulationloss, fluiddensity, result, id_eliminationmethod, id_injectiontechnology, id_stratigraphy, id_arch, id_fluidtype, id_born, interval_ot, interval_do', 'safe', 'on'=>'search'),
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
			'idEliminationmethod' => array(self::BELONGS_TO, 'EliminationMethod', 'id_eliminationmethod'),
			'idFluidtype' => array(self::BELONGS_TO, 'FluidType', 'id_fluidtype'),
			'idInjectiontechnology' => array(self::BELONGS_TO, 'InjectionTechnology', 'id_injectiontechnology'),
			'idPore' => array(self::BELONGS_TO, 'Pore', 'id_pore'),
			'idSquare' => array(self::BELONGS_TO, 'Square', 'id_square'),
			'idStratigraphy' => array(self::BELONGS_TO, 'Stratigraphy', 'id_stratigraphy'),
			'idTroubletype' => array(self::BELONGS_TO, 'TroubleType', 'id_troubletype'),
			'idUbr' => array(self::BELONGS_TO, 'UBR', 'id_ubr'),
			'idUnits1' => array(self::BELONGS_TO, 'Units1', 'id_units1'),
			'idUnits2' => array(self::BELONGS_TO, 'Units2', 'id_units2'),
			'eliminationActions' => array(self::HAS_MANY, 'EliminationActions', 'id_trouble'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'activity' => 'Activity',
			'method' => 'Method',
			'time' => 'Time',
			'eliminationdate' => 'Eliminationdate',
			'id_square' => 'Id Square',
			'interval' => 'Interval',
			'rock' => 'Rock',
			'id_ubr' => 'Id Ubr',
			'id_units1' => 'Id Units1',
			'id_units2' => 'Id Units2',
			'id_pore' => 'Id Pore',
			'id_troubletype' => 'Id Troubletype',
			'circulationloss' => 'Circulationloss',
			'fluiddensity' => 'Fluiddensity',
			'result' => 'Result',
			'id_eliminationmethod' => 'Id Eliminationmethod',
			'id_injectiontechnology' => 'Id Injectiontechnology',
			'id_stratigraphy' => 'Id Stratigraphy',
			'id_arch' => 'Id Arch',
			'id_fluidtype' => 'Id Fluidtype',
			'id_born' => 'Id Born',
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
		$criteria->compare('activity',$this->activity,true);
		$criteria->compare('method',$this->method,true);
		$criteria->compare('time',$this->time);
		$criteria->compare('eliminationdate',$this->eliminationdate,true);
		$criteria->compare('id_square',$this->id_square,true);
		$criteria->compare('interval',$this->interval,true);
		$criteria->compare('rock',$this->rock,true);
		$criteria->compare('id_ubr',$this->id_ubr,true);
		$criteria->compare('id_units1',$this->id_units1,true);
		$criteria->compare('id_units2',$this->id_units2,true);
		$criteria->compare('id_pore',$this->id_pore,true);
		$criteria->compare('id_troubletype',$this->id_troubletype,true);
		$criteria->compare('circulationloss',$this->circulationloss);
		$criteria->compare('fluiddensity',$this->fluiddensity);
		$criteria->compare('result',$this->result);
		$criteria->compare('id_eliminationmethod',$this->id_eliminationmethod,true);
		$criteria->compare('id_injectiontechnology',$this->id_injectiontechnology,true);
		$criteria->compare('id_stratigraphy',$this->id_stratigraphy,true);
		$criteria->compare('id_arch',$this->id_arch,true);
		$criteria->compare('id_fluidtype',$this->id_fluidtype,true);
		$criteria->compare('id_born',$this->id_born,true);
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
