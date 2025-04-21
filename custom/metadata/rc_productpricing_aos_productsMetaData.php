<?php
// created: 2025-04-21 16:17:20
$dictionary["rc_productpricing_aos_products"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'rc_productpricing_aos_products' => 
    array (
      'lhs_module' => 'RC_ProductPricing',
      'lhs_table' => 'rc_productpricing',
      'lhs_key' => 'id',
      'rhs_module' => 'AOS_Products',
      'rhs_table' => 'aos_products',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'rc_productpricing_aos_products_c',
      'join_key_lhs' => 'rc_productpricing_aos_productsrc_productpricing_ida',
      'join_key_rhs' => 'rc_productpricing_aos_productsaos_products_idb',
    ),
  ),
  'table' => 'rc_productpricing_aos_products_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'rc_productpricing_aos_productsrc_productpricing_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'rc_productpricing_aos_productsaos_products_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'rc_productpricing_aos_productsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'rc_productpricing_aos_products_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'rc_productpricing_aos_productsrc_productpricing_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'rc_productpricing_aos_products_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'rc_productpricing_aos_productsaos_products_idb',
      ),
    ),
  ),
);