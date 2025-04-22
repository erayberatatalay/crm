<?php
// created: 2025-04-22 15:47:16
$dictionary["rc_orders_rc_inventory"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'rc_orders_rc_inventory' => 
    array (
      'lhs_module' => 'RC_Orders',
      'lhs_table' => 'rc_orders',
      'lhs_key' => 'id',
      'rhs_module' => 'RC_Inventory',
      'rhs_table' => 'rc_inventory',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'rc_orders_rc_inventory_c',
      'join_key_lhs' => 'rc_orders_rc_inventoryrc_orders_ida',
      'join_key_rhs' => 'rc_orders_rc_inventoryrc_inventory_idb',
    ),
  ),
  'table' => 'rc_orders_rc_inventory_c',
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
      'name' => 'rc_orders_rc_inventoryrc_orders_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'rc_orders_rc_inventoryrc_inventory_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'rc_orders_rc_inventoryspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'rc_orders_rc_inventory_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'rc_orders_rc_inventoryrc_orders_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'rc_orders_rc_inventory_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'rc_orders_rc_inventoryrc_inventory_idb',
      ),
    ),
  ),
);