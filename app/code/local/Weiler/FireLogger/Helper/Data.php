<?php
class Weiler_FireLogger_Helper_Data extends Mage_Core_Helper_Abstract
{

	public function log($value)
	{
		$this->getFireLogger()->log($value);
		return $this;
	}

	public function debug($value)
	{
		if($value instanceof Varien_Object){
			$value = $value->debug();
		}
		
		$this->log($value);
		return $this;
	}
	
	public function getFireLogger()
	{
		return Mage::getSingleton('firelogger/firelogger');
	}
	
}