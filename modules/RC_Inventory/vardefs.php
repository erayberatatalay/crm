<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

$dictionary['RC_Inventory'] = array(
    'table' => 'rc_inventory',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array(
        'rs_product_id_c' => array(
            'required' => false,
            'name' => 'rs_product_id_c',
            'vname' => 'LBL_PRODUCT_REF_RS_PRODUCT_ID',
            'type' => 'id',
            'reportable' => false,
        ),

        'product_ref' => array(
            'required' => false,
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
        ),


        'barcode' => array(
            'name' => 'barcode',
            'vname' => 'LBL_BARCODE',
            'type' => 'varchar',
            'len' => 255,
            'reportable' => true,
        ),
        'serial_number' => array(
            'name' => 'serial_number',
            'vname' => 'LBL_SERIAL_NUMBER',
            'type' => 'varchar',
            'len' => 255,
            'reportable' => true,
        ),
        'status' => array(
            'name' => 'status',
            'vname' => 'LBL_STATUS',
            'type' => 'enum',
            'options' => 'inventory_status_list',
            'reportable' => true,
        ),
        'product_problems' => array(
            'name' => 'product_problems',
            'vname' => 'LBL_PRODUCT_PROBLEMS',
            'type' => 'multienum',
            'options' => 'product_problems_list', // bu listeyi custom/Extension/application/Ext/Language/... içinde oluşturacağız
            'studio' => 'visible',
            'isMultiSelect' => true,
            'reportable' => true,
        ),
        'note' => array(
            'name' => 'note',
            'vname' => 'LBL_NOTE',
            'type' => 'text',
            'reportable' => true,
        ),
        'returns_at' => array(
            'name' => 'returns_at',
            'vname' => 'LBL_RETURNS_AT',
            'type' => 'date',
            'reportable' => true,
        ),
        'note_ariza' => array(
            'name' => 'note_ariza',
            'vname' => 'LBL_NOTE_ARIZA',
            'type' => 'text',
            'reportable' => true,
        ),
        'image' => array(
            'name' => 'image',
            'vname' => 'LBL_IMAGE',
            'type' => 'image',
            'dbType' => 'varchar',
            'len' => 255,
            'reportable' => true,
        ),
        'cost' => array(
            'name' => 'cost',
            'vname' => 'LBL_COST',
            'type' => 'currency',
            'reportable' => true,
        ),
        'inventory_count_date' => array(
            'name' => 'inventory_count_date',
            'vname' => 'LBL_INVENTORY_COUNT_DATE',
            'type' => 'datetime',
            'reportable' => true,
        ),
        'inventory_count' => array(
            'name' => 'inventory_count',
            'vname' => 'LBL_INVENTORY_COUNT',
            'type' => 'int',
            'reportable' => true,
        ),
        'product_receipt_date' => array(
            'name' => 'product_receipt_date',
            'vname' => 'LBL_PRODUCT_RECEIPT_DATE',
            'type' => 'datetime',
            'reportable' => true,
        ),
        'loss_customers' => array(
            'name' => 'loss_customers',
            'vname' => 'LBL_LOSS_CUSTOMERS',
            'type' => 'int',
            'reportable' => true,
        ),
    ),
    'relationships' => array(),
    'optimistic_locking' => true,
    'unified_search' => true,
);
if (!class_exists('VardefManager')) {
    require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('RC_Inventory', 'RC_Inventory', array('basic', 'assignable', 'security_groups'));
