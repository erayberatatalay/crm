<?php

$calendar_modules['RC_Orders'] = array(
    'order' => 10,
    'fields' => array(
        'name' => 'name', // Takvimde gösterilecek başlık
        'date_start' => 'delivery_date_c', // Teslimat tarihi
        'date_end' => 'delivery_date_c',   // Aynı gün bitebilir
    ),
    'conditions' => array(
        'deleted' => 0,
    ),
    'title' => 'LBL_ORDERS', // Takvim başlığı
);
