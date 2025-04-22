<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2025-04-22 15:47:16
$layout_defs["RC_Orders"]["subpanel_setup"]['rc_orders_rc_inventory'] = array (
  'order' => 100,
  'module' => 'RC_Inventory',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_RC_ORDERS_RC_INVENTORY_FROM_RC_INVENTORY_TITLE',
  'get_subpanel_data' => 'rc_orders_rc_inventory',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


//auto-generated file DO NOT EDIT
$layout_defs['RC_Orders']['subpanel_setup']['rc_orders_rc_inventory']['override_subpanel_name'] = 'RC_Orders_subpanel_rc_orders_rc_inventory';

?>