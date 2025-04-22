<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2025-04-22 02:22:42
$dictionary["RC_Inventory"]["fields"]["rc_inventory_aos_products_1"] = array (
  'name' => 'rc_inventory_aos_products_1',
  'type' => 'link',
  'relationship' => 'rc_inventory_aos_products_1',
  'source' => 'non-db',
  'module' => 'AOS_Products',
  'bean_name' => 'AOS_Products',
  'vname' => 'LBL_RC_INVENTORY_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
);


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


 // created: 2025-04-22 00:28:13
$dictionary['RC_Inventory']['fields']['barcode']['required']=true;

 

 // created: 2025-04-22 00:31:52
$dictionary['RC_Inventory']['fields']['cost']['required']=true;
$dictionary['RC_Inventory']['fields']['cost']['inline_edit']=true;
$dictionary['RC_Inventory']['fields']['cost']['merge_filter']='disabled';
$dictionary['RC_Inventory']['fields']['cost']['enable_range_search']=false;

 

 // created: 2025-04-22 00:28:48
$dictionary['RC_Inventory']['fields']['date_entered']['required']=false;

 

 // created: 2025-04-22 00:30:54
$dictionary['RC_Inventory']['fields']['image']['required']=true;
$dictionary['RC_Inventory']['fields']['image']['inline_edit']=true;
$dictionary['RC_Inventory']['fields']['image']['merge_filter']='disabled';
$dictionary['RC_Inventory']['fields']['image']['border']='';
$dictionary['RC_Inventory']['fields']['image']['width']='120';
$dictionary['RC_Inventory']['fields']['image']['height']='';

 

 // created: 2025-04-22 00:31:24
$dictionary['RC_Inventory']['fields']['product_receipt_date']['required']=true;
$dictionary['RC_Inventory']['fields']['product_receipt_date']['inline_edit']=true;
$dictionary['RC_Inventory']['fields']['product_receipt_date']['merge_filter']='disabled';

 

 // created: 2025-04-22 00:29:44
$dictionary['RC_Inventory']['fields']['product_ref']['required']=true;
$dictionary['RC_Inventory']['fields']['product_ref']['inline_edit']=true;
$dictionary['RC_Inventory']['fields']['product_ref']['merge_filter']='disabled';

 

 // created: 2025-04-22 00:29:27
$dictionary['RC_Inventory']['fields']['serial_number']['required']=true;
$dictionary['RC_Inventory']['fields']['serial_number']['inline_edit']=true;
$dictionary['RC_Inventory']['fields']['serial_number']['merge_filter']='disabled';

 
?>