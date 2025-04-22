<?php
$module_name = 'RC_Orders';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'customer_id',
            'studio' => 'visible',
            'label' => 'LBL_CUSTOMER_ID',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'delivery_date',
            'label' => 'LBL_DELIVERY_DATE',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 'name',
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'photo',
            'studio' => 'visible',
            'label' => 'LBL_PHOTO',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'order_date',
            'label' => 'LBL_ORDER_DATE',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 'description',
          1 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
          1 => '',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'invoice_status',
            'studio' => 'visible',
            'label' => 'LBL_INVOICE_STATUS',
          ),
          1 => '',
        ),
        8 => 
        array (
          0 => 'assigned_user_name',
          1 => '',
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'tax_type',
            'studio' => 'visible',
            'label' => 'LBL_TAX_TYPE',
          ),
          1 => '',
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'total_price',
            'label' => 'LBL_TOTAL_PRICE',
          ),
          1 => '',
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'paid',
            'studio' => 'visible',
            'label' => 'LBL_PAID',
          ),
          1 => '',
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'delivery_note',
            'label' => 'LBL_DELIVERY_NOTE',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
