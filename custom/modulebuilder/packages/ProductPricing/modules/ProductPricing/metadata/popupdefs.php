<?php
$popupMeta = array (
    'moduleMain' => 'RC_ProductPricing',
    'varName' => 'RC_ProductPricing',
    'orderBy' => 'rc_productpricing.name',
    'whereClauses' => array (
  'day_count' => 'rc_productpricing.day_count',
  'price' => 'rc_productpricing.price',
  'modified_user_id' => 'rc_productpricing.modified_user_id',
  'date_modified' => 'rc_productpricing.date_modified',
  'created_by' => 'rc_productpricing.created_by',
  'date_entered' => 'rc_productpricing.date_entered',
  'rc_productpricing_aos_products_name' => 'rc_productpricing.rc_productpricing_aos_products_name',
),
    'searchInputs' => array (
  4 => 'day_count',
  5 => 'price',
  6 => 'modified_user_id',
  7 => 'date_modified',
  8 => 'created_by',
  9 => 'date_entered',
  10 => 'rc_productpricing_aos_products_name',
),
    'searchdefs' => array (
  'day_count' => 
  array (
    'type' => 'int',
    'label' => 'LBL_DAY_COUNT',
    'width' => '10%',
    'name' => 'day_count',
  ),
  'price' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_PRICE',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'price',
  ),
  'modified_user_id' => 
  array (
    'type' => 'assigned_user_name',
    'label' => 'LBL_MODIFIED',
    'width' => '10%',
    'name' => 'modified_user_id',
  ),
  'date_modified' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'name' => 'date_modified',
  ),
  'created_by' => 
  array (
    'type' => 'assigned_user_name',
    'label' => 'LBL_CREATED',
    'width' => '10%',
    'name' => 'created_by',
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'name' => 'date_entered',
  ),
  'rc_productpricing_aos_products_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_RC_PRODUCTPRICING_AOS_PRODUCTS_FROM_AOS_PRODUCTS_TITLE',
    'width' => '10%',
    'id' => 'RC_PRODUCTPRICING_AOS_PRODUCTSAOS_PRODUCTS_IDA',
    'name' => 'rc_productpricing_aos_products_name',
  ),
),
    'listviewdefs' => array (
  'DAY_COUNT' => 
  array (
    'type' => 'int',
    'label' => 'LBL_DAY_COUNT',
    'width' => '10%',
    'default' => true,
    'name' => 'day_count',
  ),
  'PRICE' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_PRICE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'price',
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => true,
    'name' => 'created_by_name',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
    'name' => 'date_entered',
  ),
  'RC_PRODUCTPRICING_AOS_PRODUCTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_RC_PRODUCTPRICING_AOS_PRODUCTS_FROM_AOS_PRODUCTS_TITLE',
    'id' => 'RC_PRODUCTPRICING_AOS_PRODUCTSAOS_PRODUCTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
),
);
