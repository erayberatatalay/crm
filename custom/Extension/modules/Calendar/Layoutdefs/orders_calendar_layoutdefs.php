<?php

$layout_defs['Calendar']['subpanel_setup']['rc_orders'] = array(
    'order' => 100,
    'module' => 'RC_Orders', // <- Sipariş modülünün adı
    'subpanel_name' => 'default',
    'sort_order' => 'asc',
    'sort_by' => 'delivery_date_c', // <- Takvimde kullanılacak tarih alanı
    'title_key' => 'LBL_ORDERS',
    'get_subpanel_data' => 'rc_orders',
    'top_buttons' => array(),
);
