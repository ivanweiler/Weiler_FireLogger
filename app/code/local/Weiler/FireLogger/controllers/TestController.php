<?php
class Weiler_FireLogger_TestController extends Mage_Core_Controller_Front_Action
{
	public function indexAction()
	{
		Mage::helper('firelogger')->log('Hello World 1');
		//die();
		
		$this->_redirect('*/*/index2');
	}
	
	public function index2Action()
	{
		$this->getResponse()->setBody('Hello World 2');
		
		Mage::helper('firelogger')->log('Hello World 2');
		
		$product = Mage::getModel('catalog/product')->load(100);
		
		Mage::helper('firelogger')->debug($product);
	}
	
}