<?php
 // created: 2025-04-21 15:55:55
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
