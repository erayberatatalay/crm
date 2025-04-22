<?php
$module_name = 'RC_Orders';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CUSTOMER_ID' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CUSTOMER_ID',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'DELIVERY_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DELIVERY_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'PAID' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PAID',
    'width' => '10%',
    'default' => true,
  ),
  'TOTAL_PRICE' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_TOTAL_PRICE',
    'width' => '10%',
    'default' => true,
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'DELIVERY_NOTE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DELIVERY_NOTE',
    'width' => '10%',
    'default' => false,
  ),
  'ORDER_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_ORDER_DATE',
    'width' => '10%',
    'default' => false,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'INVOICE_STATUS' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_INVOICE_STATUS',
    'width' => '10%',
    'default' => false,
  ),
);
;
?>
