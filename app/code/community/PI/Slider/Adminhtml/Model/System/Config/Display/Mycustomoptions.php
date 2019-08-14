<?php
class PI_Slider_Adminhtml_Model_System_Config_Display_Mycustomoptions
{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 1, 'label'=>Mage::helper('adminhtml')->__('Enable')),
            array('value' => 2, 'label'=>Mage::helper('adminhtml')->__('Disable'))
        );
    }

}
?>
