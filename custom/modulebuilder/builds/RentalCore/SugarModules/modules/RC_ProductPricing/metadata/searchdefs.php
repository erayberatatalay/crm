<?php
$module_name = 'RC_ProductPricing';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'day_count' => 
      array (
        'type' => 'int',
        'label' => 'LBL_DAY_COUNT',
        'width' => '10%',
        'default' => true,
        'name' => 'day_count',
      ),
      'price' => 
      array (
        'type' => 'currency',
        'label' => 'LBL_PRICE',
        'currency_format' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'price',
      ),
      'created_by' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_CREATED',
        'width' => '10%',
        'default' => true,
        'name' => 'created_by',
      ),
      'rc_productpricing_aos_products_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_RC_PRODUCTPRICING_AOS_PRODUCTS_FROM_AOS_PRODUCTS_TITLE',
        'id' => 'RC_PRODUCTPRICING_AOS_PRODUCTSAOS_PRODUCTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'rc_productpricing_aos_products_name',
      ),
    ),
    'advanced_search' => 
    array (
      'day_count' => 
      array (
        'type' => 'int',
        'label' => 'LBL_DAY_COUNT',
        'width' => '10%',
        'default' => true,
        'name' => 'day_count',
      ),
      'price' => 
      array (
        'type' => 'currency',
        'label' => 'LBL_PRICE',
        'currency_format' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'price',
      ),
      'modified_user_id' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'modified_user_id',
      ),
      'date_modified' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_modified',
      ),
      'created_by' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_CREATED',
        'width' => '10%',
        'default' => true,
        'name' => 'created_by',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'rc_productpricing_aos_products_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_RC_PRODUCTPRICING_AOS_PRODUCTS_FROM_AOS_PRODUCTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'RC_PRODUCTPRICING_AOS_PRODUCTSAOS_PRODUCTS_IDA',
        'name' => 'rc_productpricing_aos_products_name',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
