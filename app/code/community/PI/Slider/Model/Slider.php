<?php
class PI_Slider_Model_Slider extends Mage_Core_Model_Abstract
{

function productSlider()
{
      $_totalDisplay	= Mage::getStoreConfig('logo/logo/numbers');
	if($_totalDisplay=='' || $_totalDisplay==NULL)
		$_totalDisplay = 8;

	$cur_date    	= date("Y-m-d");

	$prodCollection = Mage::getModel('catalog/product')->getCollection();
 		$prodCollection->addFieldToFilter('start_slider_date_product', array('date' => true, 'to' => $cur_date))
 		->addFieldToFilter('end_slider_date_product', array(
 			array('date' => true, 'from' => $cur_date)
 			), 'left');
		$prodCollection->getSelect()->limit($_totalDisplay);

		return $prodCollection;
}

function categorySlider()
{
	$_totalDisplay	= Mage::getStoreConfig('logo/logo/numbers');
	if($_totalDisplay=='' || $_totalDisplay==NULL)
		$_totalDisplay = 8;

	$cur_date    	= date("Y-m-d");

	$collection = Mage::getModel('catalog/category')->getCollection();
		$collection->addAttributeToFilter('start_slider_date_category', array('date' => true, 'to' => $cur_date))
		->addFieldToFilter('end_slider_date_category', array(
			array('date' => true, 'from' => $cur_date)
			), 'left');
		$collection->getSelect()->limit($_totalDisplay);
		return $collection;
}
}
?>
