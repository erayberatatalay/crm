<?php
// created: 2025-04-21 18:23:08
$dictionary["RC_ProductPricing"]["fields"]["rc_productpricing_aos_products"] = array (
  'name' => 'rc_productpricing_aos_products',
  'type' => 'link',
  'relationship' => 'rc_productpricing_aos_products',
  'source' => 'non-db',
  'module' => 'AOS_Products',
  'bean_name' => 'AOS_Products',
  'vname' => 'LBL_RC_PRODUCTPRICING_AOS_PRODUCTS_FROM_AOS_PRODUCTS_TITLE',
  'id_name' => 'rc_productpricing_aos_productsaos_products_ida',
);
$dictionary["RC_ProductPricing"]["fields"]["rc_productpricing_aos_products_name"] = array (
  'name' => 'rc_productpricing_aos_products_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RC_PRODUCTPRICING_AOS_PRODUCTS_FROM_AOS_PRODUCTS_TITLE',
  'save' => true,
  'id_name' => 'rc_productpricing_aos_productsaos_products_ida',
  'link' => 'rc_productpricing_aos_products',
  'table' => 'aos_products',
  'module' => 'AOS_Products',
  'rname' => 'name',
);
$dictionary["RC_ProductPricing"]["fields"]["rc_productpricing_aos_productsaos_products_ida"] = array (
  'name' => 'rc_productpricing_aos_productsaos_products_ida',
  'type' => 'link',
  'relationship' => 'rc_productpricing_aos_products',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_RC_PRODUCTPRICING_AOS_PRODUCTS_FROM_RC_PRODUCTPRICING_TITLE',
);
