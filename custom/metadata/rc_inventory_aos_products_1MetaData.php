<?php
// created: 2025-04-22 02:22:42
$dictionary["rc_inventory_aos_products_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'rc_inventory_aos_products_1' => 
    array (
      'lhs_module' => 'RC_Inventory',
      'lhs_table' => 'rc_inventory',
      'lhs_key' => 'id',
      'rhs_module' => 'AOS_Products',
      'rhs_table' => 'aos_products',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'rc_inventory_aos_products_1_c',
      'join_key_lhs' => 'rc_inventory_aos_products_1rc_inventory_ida',
      'join_key_rhs' => 'rc_inventory_aos_products_1aos_products_idb',
    ),
  ),
  'table' => 'rc_inventory_aos_products_1_c',
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
      'name' => 'rc_inventory_aos_products_1rc_inventory_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'rc_inventory_aos_products_1aos_products_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'rc_inventory_aos_products_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'rc_inventory_aos_products_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'rc_inventory_aos_products_1rc_inventory_ida',
        1 => 'rc_inventory_aos_products_1aos_products_idb',
      ),
    ),
  ),
);