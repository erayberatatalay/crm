<?php

require_once('include/MVC/View/views/view.list.php');

class RC_InventoryViewList extends ViewList
{
    public function preDisplay()
    {
        parent::preDisplay();

        // Listelemeye özel override yapılacaksa buraya
        $this->lv->displayColumns['PRODUCT_REF']['module'] = 'AOS_Products';
        $this->lv->displayColumns['PRODUCT_REF']['link'] = true;
        $this->lv->displayColumns['PRODUCT_REF']['id'] = 'rs_product_id_c';
        $this->lv->displayColumns['PRODUCT_REF']['rname'] = 'name';
    }
}
