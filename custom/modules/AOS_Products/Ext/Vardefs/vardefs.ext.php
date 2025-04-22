<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2025-04-22 02:22:42
$dictionary["AOS_Products"]["fields"]["rc_inventory_aos_products_1"] = array (
  'name' => 'rc_inventory_aos_products_1',
  'type' => 'link',
  'relationship' => 'rc_inventory_aos_products_1',
  'source' => 'non-db',
  'module' => 'RC_Inventory',
  'bean_name' => 'RC_Inventory',
  'vname' => 'LBL_RC_INVENTORY_AOS_PRODUCTS_1_FROM_RC_INVENTORY_TITLE',
);


// created: 2025-04-21 18:23:08
$dictionary["AOS_Products"]["fields"]["rc_productpricing_aos_products"] = array (
  'name' => 'rc_productpricing_aos_products',
  'type' => 'link',
  'relationship' => 'rc_productpricing_aos_products',
  'source' => 'non-db',
  'module' => 'RC_ProductPricing',
  'bean_name' => 'RC_ProductPricing',
  'side' => 'right',
  'vname' => 'LBL_RC_PRODUCTPRICING_AOS_PRODUCTS_FROM_RC_PRODUCTPRICING_TITLE',
);


 // created: 2025-04-21 18:37:56
$dictionary['AOS_Products']['fields']['brand']['inline_edit']=true;
$dictionary['AOS_Products']['fields']['brand']['merge_filter']='disabled';

 

 // created: 2025-04-21 23:12:52
$dictionary['AOS_Products']['fields']['model']['inline_edit']=true;
$dictionary['AOS_Products']['fields']['model']['merge_filter']='disabled';

 

 // created: 2025-04-21 22:54:52
$dictionary['AOS_Products']['fields']['status_c']['default']='';
$dictionary['AOS_Products']['fields']['status_c']['inline_edit']=true;
$dictionary['AOS_Products']['fields']['status_c']['options']='product_type_dom';
$dictionary['AOS_Products']['fields']['status_c']['merge_filter']='disabled';

 

 // created: 2025-04-21 23:13:04
$dictionary['AOS_Products']['fields']['tech_specs']['inline_edit']=true;
$dictionary['AOS_Products']['fields']['tech_specs']['merge_filter']='disabled';
$dictionary['AOS_Products']['fields']['tech_specs']['rows']='4';
$dictionary['AOS_Products']['fields']['tech_specs']['cols']='20';

 

 // created: 2025-04-21 18:41:41
$dictionary['AOS_Products']['fields']['type']['inline_edit']=true;
$dictionary['AOS_Products']['fields']['type']['merge_filter']='disabled';

 
?>