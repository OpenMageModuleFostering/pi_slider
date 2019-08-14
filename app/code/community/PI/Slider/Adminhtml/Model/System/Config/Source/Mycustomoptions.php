<?php
class PI_Slider_Adminhtml_Model_System_Config_Source_Mycustomoptions
{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 1, 'label'=>Mage::helper('adminhtml')->__('Category')),
            array('value' => 2, 'label'=>Mage::helper('adminhtml')->__('Product'))
        );
    }

}
?>
