<?php 

function t( $text, $replaces = '') {
	
	$lang = Yii::t('common',$text);
	if (is_array($replaces)) {
		foreach($replaces as $key=>$replace){
			$lang = str_replace ( $key ,$replace ,$lang );
		}
	}
	
	return $lang;
	
}


class FiltersForm extends CFormModel
{
    public $filters = array();
 
    /**
     * Override magic getter for filters
     */
    public function __get($name)
    {
        if(!array_key_exists($name, $this->filters))
            $this->filters[$name] = null;
        return $this->filters[$name];
    }
 
    /**
     * Filter input array by key value pairs
     * @param array $data rawData
     * @return array filtered data array
     */
   public function filter(CArrayDataProvider $data)
    {
        $temp = $data->getData();
 
        foreach ($temp AS $index => $item)
        {
            foreach ($this->filters AS $key => $value)
            {
                if($value == '') continue; // bypass empty filter
 
                $test = false;  // value to test for
 
                if($item instanceof CModel)
                {
                    if(isset($item->$key) == false ) throw new CException("Property ".get_class($item)."::{$key} does not exist!");
                    $test = $item->$key;
                }
                elseif(is_array($item))
                {
                    if(!array_key_exists($key, $item)) throw new CException("Key {$key} does not exist in Array!");
                    $test = $item[$key];
                }
                else
                    throw new CException("Data in CArrayDataProvider must be an array of arrays or CModels!");
 
                if(stripos($test, $value) === false)
                    unset($temp[$index]);
            }
        }
 
        $data->setData(array_values($temp));
        return $data;
    }
}




//проверка переменных, смотреть так:  VarDumper::dump($_SERVER);
class VarDumper extends CVarDumper {
    /**
     * Displays a variable.
     * This method achieves the similar functionality as var_dump and print_r
     * but is more robust when handling complex objects such as Yii controllers.
     * @param mixed variable to be dumped
     * @param integer maximum depth that the dumper should go into the variable. Defaults to 10.
     * @param boolean whether the result should be syntax-highlighted
     */
    public static function dump($var,$depth=10,$highlight=true){
        echo self::dumpAsString($var,$depth,$highlight);
    }
}
?>