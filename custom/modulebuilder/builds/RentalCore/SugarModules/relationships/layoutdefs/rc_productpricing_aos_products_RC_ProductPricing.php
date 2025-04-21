<?php
 // created: 2025-04-21 15:43:11
$layout_defs["RC_ProductPricing"]["subpanel_setup"]['rc_productpricing_aos_products'] = array (
  'order' => 100,
  'module' => 'AOS_Products',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_RC_PRODUCTPRICING_AOS_PRODUCTS_FROM_AOS_PRODUCTS_TITLE',
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
