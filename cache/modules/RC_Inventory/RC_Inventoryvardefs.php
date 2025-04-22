<?php 
 $GLOBALS["dictionary"]["RC_Inventory"]=array (
  'table' => 'rc_inventory',
  'audited' => true,
  'inline_edit' => true,
  'duplicate_merge' => true,
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => true,
      'comment' => 'Unique identifier',
      'inline_edit' => false,
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'type' => 'name',
      'link' => true,
      'dbType' => 'varchar',
      'len' => 255,
      'unified_search' => true,
      'full_text_search' => 
      array (
        'boost' => 3,
      ),
      'required' => true,
      'importable' => 'required',
      'duplicate_merge' => 'enabled',
      'merge_filter' => 'selected',
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'group' => 'created_by_name',
      'comment' => 'Date record created',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'inline_edit' => false,
      'required' => false,
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'group' => 'modified_by_name',
      'comment' => 'Date record last modified',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'inline_edit' => false,
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'group' => 'modified_by_name',
      'dbType' => 'id',
      'reportable' => true,
      'comment' => 'User who last modified record',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'modified_by_name' => 
    array (
      'name' => 'modified_by_name',
      'vname' => 'LBL_MODIFIED_NAME',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'rname' => 'user_name',
      'table' => 'users',
      'id_name' => 'modified_user_id',
      'module' => 'Users',
      'link' => 'modified_user_link',
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_CREATED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'group' => 'created_by_name',
      'comment' => 'User who created record',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'created_by_name' => 
    array (
      'name' => 'created_by_name',
      'vname' => 'LBL_CREATED',
      'type' => 'relate',
      'reportable' => false,
      'link' => 'created_by_link',
      'rname' => 'user_name',
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'created_by',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'importable' => 'false',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'rows' => 6,
      'cols' => 80,
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => '0',
      'reportable' => false,
      'comment' => 'Record deletion indicator',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'rc_inventory_created_by',
      'vname' => 'LBL_CREATED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'rc_inventory_modified_user',
      'vname' => 'LBL_MODIFIED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'assigned_user_id' => 
    array (
      'name' => 'assigned_user_id',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'vname' => 'LBL_ASSIGNED_TO_ID',
      'group' => 'assigned_user_name',
      'type' => 'relate',
      'table' => 'users',
      'module' => 'Users',
      'reportable' => true,
      'isnull' => 'false',
      'dbType' => 'id',
      'audited' => true,
      'comment' => 'User ID assigned to record',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_name' => 
    array (
      'name' => 'assigned_user_name',
      'link' => 'assigned_user_link',
      'vname' => 'LBL_ASSIGNED_TO_NAME',
      'rname' => 'user_name',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'assigned_user_id',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 'rc_inventory_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'duplicate_merge' => 'enabled',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'table' => 'users',
    ),
    'SecurityGroups' => 
    array (
      'name' => 'SecurityGroups',
      'type' => 'link',
      'relationship' => 'securitygroups_rc_inventory',
      'module' => 'SecurityGroups',
      'bean_name' => 'SecurityGroup',
      'source' => 'non-db',
      'vname' => 'LBL_SECURITYGROUPS',
    ),
    'rs_product_id_c' => 
    array (
      'required' => false,
      'name' => 'rs_product_id_c',
      'vname' => 'LBL_PRODUCT_REF_RS_PRODUCT_ID',
      'type' => 'id',
      'reportable' => false,
    ),
    'product_ref' => 
    array (
      'required' => true,
      'source' => 'non-db',
      'name' => 'product_ref',
      'vname' => 'LBL_PRODUCT_REF',
      'type' => 'relate',
      'id_name' => 'rs_product_id_c',
      'module' => 'AOS_Products',
      'rname' => 'name',
      'link' => true,
      'reportable' => true,
      'studio' => 'visible',
      'save' => true,
      'inline_edit' => true,
      'merge_filter' => 'disabled',
    ),
    'barcode' => 
    array (
      'name' => 'barcode',
      'vname' => 'LBL_BARCODE',
      'type' => 'varchar',
      'len' => 255,
      'reportable' => true,
      'required' => true,
    ),
    'serial_number' => 
    array (
      'name' => 'serial_number',
      'vname' => 'LBL_SERIAL_NUMBER',
      'type' => 'varchar',
      'len' => 255,
      'reportable' => true,
      'required' => true,
      'inline_edit' => true,
      'merge_filter' => 'disabled',
    ),
    'status' => 
    array (
      'name' => 'status',
      'vname' => 'LBL_STATUS',
      'type' => 'enum',
      'options' => 'inventory_status_list',
      'reportable' => true,
    ),
    'product_problems' => 
    array (
      'name' => 'product_problems',
      'vname' => 'LBL_PRODUCT_PROBLEMS',
      'type' => 'multienum',
      'options' => 'product_problems_list',
      'studio' => 'visible',
      'isMultiSelect' => true,
      'reportable' => true,
    ),
    'note' => 
    array (
      'name' => 'note',
      'vname' => 'LBL_NOTE',
      'type' => 'text',
      'reportable' => true,
    ),
    'returns_at' => 
    array (
      'name' => 'returns_at',
      'vname' => 'LBL_RETURNS_AT',
      'type' => 'date',
      'reportable' => true,
    ),
    'note_ariza' => 
    array (
      'name' => 'note_ariza',
      'vname' => 'LBL_NOTE_ARIZA',
      'type' => 'text',
      'reportable' => true,
    ),
    'image' => 
    array (
      'name' => 'image',
      'vname' => 'LBL_IMAGE',
      'type' => 'image',
      'dbType' => 'varchar',
      'len' => 255,
      'reportable' => true,
      'required' => true,
      'inline_edit' => true,
      'merge_filter' => 'disabled',
      'border' => '',
      'width' => '120',
      'height' => '',
    ),
    'cost' => 
    array (
      'name' => 'cost',
      'vname' => 'LBL_COST',
      'type' => 'currency',
      'reportable' => true,
      'required' => true,
      'inline_edit' => true,
      'merge_filter' => 'disabled',
      'enable_range_search' => false,
    ),
    'inventory_count_date' => 
    array (
      'name' => 'inventory_count_date',
      'vname' => 'LBL_INVENTORY_COUNT_DATE',
      'type' => 'datetime',
      'reportable' => true,
    ),
    'inventory_count' => 
    array (
      'name' => 'inventory_count',
      'vname' => 'LBL_INVENTORY_COUNT',
      'type' => 'int',
      'reportable' => true,
    ),
    'product_receipt_date' => 
    array (
      'name' => 'product_receipt_date',
      'vname' => 'LBL_PRODUCT_RECEIPT_DATE',
      'type' => 'datetime',
      'reportable' => true,
      'required' => true,
      'inline_edit' => true,
      'merge_filter' => 'disabled',
    ),
    'loss_customers' => 
    array (
      'name' => 'loss_customers',
      'vname' => 'LBL_LOSS_CUSTOMERS',
      'type' => 'int',
      'reportable' => true,
    ),
    'rc_inventory_aos_products_1' => 
    array (
      'name' => 'rc_inventory_aos_products_1',
      'type' => 'link',
      'relationship' => 'rc_inventory_aos_products_1',
      'source' => 'non-db',
      'module' => 'AOS_Products',
      'bean_name' => 'AOS_Products',
      'vname' => 'LBL_RC_INVENTORY_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
    ),
    'rc_orders_rc_inventory' => 
    array (
      'name' => 'rc_orders_rc_inventory',
      'type' => 'link',
      'relationship' => 'rc_orders_rc_inventory',
      'source' => 'non-db',
      'module' => 'RC_Orders',
      'bean_name' => false,
      'vname' => 'LBL_RC_ORDERS_RC_INVENTORY_FROM_RC_ORDERS_TITLE',
      'id_name' => 'rc_orders_rc_inventoryrc_orders_ida',
    ),
    'rc_orders_rc_inventory_name' => 
    array (
      'name' => 'rc_orders_rc_inventory_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_RC_ORDERS_RC_INVENTORY_FROM_RC_ORDERS_TITLE',
      'save' => true,
      'id_name' => 'rc_orders_rc_inventoryrc_orders_ida',
      'link' => 'rc_orders_rc_inventory',
      'table' => 'rc_orders',
      'module' => 'RC_Orders',
      'rname' => 'name',
    ),
    'rc_orders_rc_inventoryrc_orders_ida' => 
    array (
      'name' => 'rc_orders_rc_inventoryrc_orders_ida',
      'type' => 'link',
      'relationship' => 'rc_orders_rc_inventory',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_RC_ORDERS_RC_INVENTORY_FROM_RC_INVENTORY_TITLE',
    ),
  ),
  'relationships' => 
  array (
    'rc_inventory_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'RC_Inventory',
      'rhs_table' => 'rc_inventory',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'rc_inventory_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'RC_Inventory',
      'rhs_table' => 'rc_inventory',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'rc_inventory_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'RC_Inventory',
      'rhs_table' => 'rc_inventory',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'securitygroups_rc_inventory' => 
    array (
      'lhs_module' => 'SecurityGroups',
      'lhs_table' => 'securitygroups',
      'lhs_key' => 'id',
      'rhs_module' => 'RC_Inventory',
      'rhs_table' => 'rc_inventory',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'securitygroups_records',
      'join_key_lhs' => 'securitygroup_id',
      'join_key_rhs' => 'record_id',
      'relationship_role_column' => 'module',
      'relationship_role_column_value' => 'RC_Inventory',
    ),
  ),
  'optimistic_locking' => true,
  'unified_search' => true,
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'rc_inventorypk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'templates' => 
  array (
    'security_groups' => 'security_groups',
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => false,
);