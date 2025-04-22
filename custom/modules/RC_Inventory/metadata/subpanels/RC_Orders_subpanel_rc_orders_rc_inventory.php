<?php
// created: 2025-04-22 15:59:01
$subpanel_layout['list_fields'] = array (
  'product_ref' => 
  array (
    'type' => 'relate',
    'link' => true,
    'studio' => 'visible',
    'vname' => 'LBL_PRODUCT_REF',
    'id' => 'RS_PRODUCT_ID_C',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'AOS_Products',
    'target_record_key' => 'rs_product_id_c',
  ),
  'serial_number' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_SERIAL_NUMBER',
    'width' => '10%',
    'default' => true,
  ),
  'barcode' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_BARCODE',
    'width' => '10%',
    'default' => true,
  ),
  'status' => 
  array (
    'type' => 'enum',
    'vname' => 'LBL_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'cost' => 
  array (
    'type' => 'currency',
    'vname' => 'LBL_COST',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'RC_Inventory',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'RC_Inventory',
    'width' => '5%',
    'default' => true,
  ),
);