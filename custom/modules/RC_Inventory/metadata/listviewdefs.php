<?php

$module_name = 'RC_Inventory';

$listViewDefs[$module_name] = array(
    'NAME' => array(
        'width' => '20%',
        'label' => 'LBL_NAME',
        'default' => true,
        'link' => true
    ),
    'PRODUCT_REF' => array(
        'width' => '20%',
        'label' => 'LBL_PRODUCT_REF',
        'type' => 'relate',
        'module' => 'AOS_Products',
        'id_name' => 'rs_product_id_c',
        'rname' => 'name',
        'link' => true,
        'default' => true,
        'related_fields' => array('rs_product_id_c'),
    ),
    'SERIAL_NUMBER' => array(
        'width' => '10%',
        'label' => 'LBL_SERIAL_NUMBER',
        'default' => true,
    ),
    'BARCODE' => array(
        'width' => '10%',
        'label' => 'LBL_BARCODE',
        'default' => true,
    ),
);
