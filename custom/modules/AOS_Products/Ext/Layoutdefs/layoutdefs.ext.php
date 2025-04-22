<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2025-04-22 02:22:42
$layout_defs["AOS_Products"]["subpanel_setup"]['rc_inventory_aos_products_1'] = array (
  'order' => 100,
  'module' => 'RC_Inventory',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_RC_INVENTORY_AOS_PRODUCTS_1_FROM_RC_INVENTORY_TITLE',
  'get_subpanel_data' => 'rc_inventory_aos_products_1',
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


 // created: 2025-04-21 18:23:08
$layout_defs["AOS_Products"]["subpanel_setup"]['rc_productpricing_aos_products'] = array (
  'order' => 100,
  'module' => 'RC_ProductPricing',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_RC_PRODUCTPRICING_AOS_PRODUCTS_FROM_RC_PRODUCTPRICING_TITLE',
  'get_subpanel_data' => 'rc_productpricing_aos_products',
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
$layout_defs['AOS_Products']['subpanel_setup']['rc_productpricing_aos_products']['override_subpanel_name'] = 'AOS_Products_subpanel_rc_productpricing_aos_products';

?>