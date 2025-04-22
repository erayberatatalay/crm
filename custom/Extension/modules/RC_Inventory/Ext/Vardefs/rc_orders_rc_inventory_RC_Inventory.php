<?php
// created: 2025-04-22 15:47:16
$dictionary["RC_Inventory"]["fields"]["rc_orders_rc_inventory"] = array (
  'name' => 'rc_orders_rc_inventory',
  'type' => 'link',
  'relationship' => 'rc_orders_rc_inventory',
  'source' => 'non-db',
  'module' => 'RC_Orders',
  'bean_name' => false,
  'vname' => 'LBL_RC_ORDERS_RC_INVENTORY_FROM_RC_ORDERS_TITLE',
  'id_name' => 'rc_orders_rc_inventoryrc_orders_ida',
);
$dictionary["RC_Inventory"]["fields"]["rc_orders_rc_inventory_name"] = array (
  'name' => 'rc_orders_rc_inventory_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RC_ORDERS_RC_INVENTORY_FROM_RC_ORDERS_TITLE',
  'save' => true,
  'id_name' => 'rc_orders_rc_inventoryrc_orders_ida',
  'link' => 'rc_orders_rc_inventory',
  'table' => 'rc_orders',
  'module' => 'RC_Orders',
  'rname' => 'name',
);
$dictionary["RC_Inventory"]["fields"]["rc_orders_rc_inventoryrc_orders_ida"] = array (
  'name' => 'rc_orders_rc_inventoryrc_orders_ida',
  'type' => 'link',
  'relationship' => 'rc_orders_rc_inventory',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_RC_ORDERS_RC_INVENTORY_FROM_RC_INVENTORY_TITLE',
);
