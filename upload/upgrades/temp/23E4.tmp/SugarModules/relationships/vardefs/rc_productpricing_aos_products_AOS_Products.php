<?php
// created: 2025-04-21 15:43:11
$dictionary["AOS_Products"]["fields"]["rc_productpricing_aos_products"] = array (
  'name' => 'rc_productpricing_aos_products',
  'type' => 'link',
  'relationship' => 'rc_productpricing_aos_products',
  'source' => 'non-db',
  'module' => 'RC_ProductPricing',
  'bean_name' => false,
  'vname' => 'LBL_RC_PRODUCTPRICING_AOS_PRODUCTS_FROM_RC_PRODUCTPRICING_TITLE',
  'id_name' => 'rc_productpricing_aos_productsrc_productpricing_ida',
);
$dictionary["AOS_Products"]["fields"]["rc_productpricing_aos_products_name"] = array (
  'name' => 'rc_productpricing_aos_products_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RC_PRODUCTPRICING_AOS_PRODUCTS_FROM_RC_PRODUCTPRICING_TITLE',
  'save' => true,
  'id_name' => 'rc_productpricing_aos_productsrc_productpricing_ida',
  'link' => 'rc_productpricing_aos_products',
  'table' => 'rc_productpricing',
  'module' => 'RC_ProductPricing',
  'rname' => 'name',
);
$dictionary["AOS_Products"]["fields"]["rc_productpricing_aos_productsrc_productpricing_ida"] = array (
  'name' => 'rc_productpricing_aos_productsrc_productpricing_ida',
  'type' => 'link',
  'relationship' => 'rc_productpricing_aos_products',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_RC_PRODUCTPRICING_AOS_PRODUCTS_FROM_AOS_PRODUCTS_TITLE',
);
