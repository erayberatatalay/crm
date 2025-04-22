<?php
/* Smarty version 4.5.3, created on 2025-04-22 17:50:07
  from 'C:\xampp8.2\htdocs\suitecrm\modules\AOR_Reports\tpls\EditViewFooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6807baaf30ccb6_19370135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b77aca86e2d2f1a82fddbb7f2535a5ac29dc723' => 
    array (
      0 => 'C:\\xampp8.2\\htdocs\\suitecrm\\modules\\AOR_Reports\\tpls\\EditViewFooter.tpl',
      1 => 1745252409,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/EditView/footer.tpl' => 1,
  ),
),false)) {
function content_6807baaf30ccb6_19370135 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="report-editview-footer">

{literal}
    <?php echo '<script'; ?>
 src="modules/AOR_Reports/js/jqtree/tree.jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="modules/AOR_Fields/fieldLines.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="modules/AOR_Conditions/conditionLines.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="modules/AOR_Charts/chartLines.js"><?php echo '</script'; ?>
>

    <link rel="stylesheet" href="include/javascript/jquery/themes/base/jquery-ui.min.css">
    <?php echo '<script'; ?>
 src="include/javascript/jquery/jquery-ui-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="modules/AOR_Reports/AOR_Report_Before.js"><?php echo '</script'; ?>
>
{/literal}

<ul class="nav nav-tabs tab-togglers">
    <li class="tab-toggler toggle-detailpanel_fields active">
        <a>{$MOD.LBL_AOR_FIELDS_SUBPANEL_TITLE}</a>
    </li>
    <li class="tab-toggler toggle-detailpanel_conditions ">
        <a>{$MOD.LBL_AOR_CONDITIONS_SUBPANEL_TITLE}</a>
    </li>
    <li class="tab-toggler toggle-detailpanel_charts ">
        <a>{$MOD.LBL_AOR_CHARTS_SUBPANEL_TITLE}</a>
    </li>
</ul>
<div class="clearfix"></div>
<div class="aor-tab-content panel panel-default">
    <div class="edit view edit508" id="detailpanel_fields_select">
        <h4>{$MOD.LBL_AOR_MODULETREE_SUBPANEL_TITLE}</h4>
        <div id="fieldTree" class="dragbox aor_dragbox"></div>

        <br>

        <h4>{$MOD.LBL_AOR_FIELDS_SUBPANEL_TITLE} <span id="module-name"></span></h4>
        <div id="fieldTreeLeafs" class="dragbox aor_dragbox"></div>

    </div>
    <div class="tab-panels" id="detailpanel_fields_display">
        <div class="toggle-panel" id="detailpanel_fields">
            <table id="group_display_table" style="display: none;">
                <tbody>
                <tr>
                    <td>{$MOD.LBL_MAIN_GROUPS}</td>
                    <td>
                        <select id="group_display" name="aor_fields_group_display[0]"></select>
                        <select id="group_display_1" name="aor_fields_group_display[1]" style="display: none;"></select>
                        {literal}
                            <?php echo '<script'; ?>
 type="text/javascript">
                              $(function(){
                                setInterval(function(){
                                  if($('#group_display').val() == -1) {
                                    $('#group_display_1').val(-1);
                                    $('#group_display_1').css('display', 'none');
                                  }
                                  else {
                                    if($('#group_display_1').val() == $('#group_display').val()) {
                                      $('#group_display_1').val(-1);
                                    }
                                    $('#group_display_1 option').show();
                                    $('#group_display_1 option[value="' + $('#group_display').val() + '"]').hide();

                                    // todo: temporary remove the secondary select for multi-group report
                                    $('#group_display_1').css('display', 'none');
                                    $('#group_display_1').val(-1);

                                    //$('#group_display_1').css('display', 'block');
                                  }

                                }, 100);
                              });
                            <?php echo '</script'; ?>
>
                        {/literal}
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="drop-area" id="fieldLines" style="min-height: 450px;">
            </div>
        </div>
        <div class="toggle-panel hidden" id="detailpanel_conditions">
            <table id="aor_condition_parenthesis_table">
                <tbody id="aor_condition_parenthesis_btn" class="connectedSortableConditions">
                <tr class="parentheses-btn"><td class="condition-sortable-handle">
                    <span title="{$MOD.LBL_ADD_PARENTHESIS}">( ... ) {$MOD.LBL_ADD_PARENTHESIS}</span>
                    </td></tr>
                </tbody>
            </table>
            <div class="drop-area" id="aor_conditionLines"  style="min-height: 450px;">
            </div>


        </div>
        <div class="toggle-panel hidden" id="detailpanel_charts">
            <div id="chartLines">
                <table>
                    <thead id="chartHead" style="display: none;">
                    <tr>
                        <td></td>
                        <td>{$MOD.LBL_CHART_TITLE}</td>
                        <td>{$MOD.LBL_CHART_TYPE}</td>
                        <td>{$MOD.LBL_CHART_X_FIELD}</td>
                        <td>{$MOD.LBL_CHART_Y_FIELD}</td>
                    </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
            <button id="addChartButton" type="button" class="button">{$MOD.LBL_ADD_CHART}</button>
        </div>
    </div>
</div>

{literal}
<?php echo '<script'; ?>
 type="text/javascript" src="modules/AOR_Reports/AOR_Report_After.js"><?php echo '</script'; ?>
>
{/literal}
</div>

<div style="clear: both;"></div>
<div style="display: block; float: none;">
    <?php $_smarty_tpl->_subTemplateRender("file:include/EditView/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div><?php }
}
