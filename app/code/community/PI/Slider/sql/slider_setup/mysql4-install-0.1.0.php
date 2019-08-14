<?php
 
$installer = $this;
$setup = new Mage_Eav_Model_Entity_Setup('core_setup');
$installer->startSetup();

$setup->addAttribute('catalog_product', 'start_slider_date_product', array(
    'group'         => 'Slider Products',
    'input'         => 'date',
    'type'          => 'datetime',
    'label'         => 'Start Slider Date',
    'backend'       => 'eav/entity_attribute_backend_datetime',
    'visible'       => 1,
    'required'      => 0,
    'user_defined' => 1,
    'searchable' => 1,
    'filterable' => 0,
    'comparable'    => 1,
    'visible_on_front' => 1,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
));
$setup->addAttribute('catalog_product', 'end_slider_date_product', array(
    'group'         => 'Slider Products',
    'input'         => 'date',
    'type'          => 'datetime',
    'label'         => 'End Slider Date',
    'backend'       => 'eav/entity_attribute_backend_datetime',
    'visible'       => 1,
    'required'      => 0,
    'user_defined' => 1,
    'searchable' => 1,
    'filterable' => 0,
    'comparable'    => 1,
    'visible_on_front' => 1,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
));
$setup->addAttribute('catalog_product', 'product_link', array(
    'group'         => 'Slider Products',
    'input'         => 'text',
    'type'          => 'varchar',
    'label'         => 'Link',
    'backend'       => '',
    'visible'       => 1,
    'required'      => 0,
    'user_defined' => 1,
    'searchable' => 1,
    'filterable' => 0,
    'comparable'    => 1,
    'visible_on_front' => 1,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
));

$setup->addAttribute('catalog_category', 'start_slider_date_category', array(
    'group'         => 'Slider Brands',
    'input'         => 'date',
    'type'          => 'datetime',
    'label'         => 'Start Slider Date',
    'backend'       => 'eav/entity_attribute_backend_datetime',
    'visible'       => 1,
    'required'      => 0,
    'user_defined' => 1,
    'searchable' => 1,
    'filterable' => 0,
    'comparable'    => 1,
    'visible_on_front' => 1,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
));
$setup->addAttribute('catalog_category', 'end_slider_date_category', array(
    'group'         => 'Slider Brands',
    'input'         => 'date',
    'type'          => 'datetime',
    'label'         => 'End Slider Date',
    'backend'       => 'eav/entity_attribute_backend_datetime',
    'visible'       => 1,
    'required'      => 0,
    'user_defined' => 1,
    'searchable' => 1,
    'filterable' => 0,
    'comparable'    => 1,
    'visible_on_front' => 1,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
));
$setup->addAttribute('catalog_category', 'category_link', array(
    'group'         => 'Slider Brands',
    'input'         => 'text',
    'type'          => 'varchar',
    'label'         => 'Link',
    'backend'       => '',
    'visible'       => 1,
    'required'      => 0,
    'user_defined' => 1,
    'searchable' => 1,
    'filterable' => 0,
    'comparable'    => 1,
    'visible_on_front' => 1,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
));

$installer->endSetup();

?>

