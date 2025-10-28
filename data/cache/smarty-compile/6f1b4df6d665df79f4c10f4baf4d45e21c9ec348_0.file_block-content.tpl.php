<?php
/* Smarty version 5.4.3, created on 2025-10-29 02:25:05
  from 'file:block-content.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69011891507818_51063421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f1b4df6d665df79f4c10f4baf4d45e21c9ec348' => 
    array (
      0 => 'block-content.tpl',
      1 => 1756839092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69011891507818_51063421 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet-nukeviet5.0\\themes\\admin_future\\modules\\themes';
?><link type="text/css" href="<?php echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/js/jquery-ui/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/js/language/jquery.ui.datepicker-<?php echo (defined('NV_LANG_INTERFACE') ? constant('NV_LANG_INTERFACE') : null);?>
.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo (defined('NV_STATIC_URL') ? constant('NV_STATIC_URL') : null);?>
themes/<?php echo $_smarty_tpl->getValue('TEMPLATE');?>
/js/nv.block.content.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/js/select2/select2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/js/select2/i18n/<?php echo (defined('NV_LANG_INTERFACE') ? constant('NV_LANG_INTERFACE') : null);?>
.js"><?php echo '</script'; ?>
>
<form class="p-1 ajax-submit" method="post" action="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('MODULE_NAME');?>
&amp;<?php echo (defined('NV_OP_VARIABLE') ? constant('NV_OP_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('OP');?>
&amp;selectthemes=<?php echo $_smarty_tpl->getValue('SELECTTHEMES');
if (!( !$_smarty_tpl->hasVariable('BLOCKREDIRECT') || empty($_smarty_tpl->getValue('BLOCKREDIRECT')))) {?>&amp;blockredirect=<?php echo $_smarty_tpl->getValue('BLOCKREDIRECT');
}?>" id="block-content-form" data-page-url="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('MODULE_NAME');?>
" data-selectthemes="<?php echo $_smarty_tpl->getValue('SELECTTHEMES');?>
" data-callback="nvBlockCtCallback" novalidate>
    <div class="card border-primary border-1 mb-3">
        <div class="card-header fs-5 fw-medium py-2 text-bg-primary">
            <?php echo $_smarty_tpl->getValue('LANG')->getModule('theme',"<span class=\"text-capitalize\">".((string)$_smarty_tpl->getValue('SELECTTHEMES'))."</span>");?>

            <i class="fa-solid fa-angle-right mx-2"></i>
            <?php if (( !true || empty($_smarty_tpl->getValue('ROW')['bid']))) {
echo $_smarty_tpl->getValue('LANG')->getModule('block_add');
} else {
echo $_smarty_tpl->getValue('LANG')->getModule('block_edit');
}?>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-sm-3 col-form-label text-sm-end text-truncate fw-medium" title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('of_module');?>
"><?php echo $_smarty_tpl->getValue('LANG')->getModule('of_module');?>
:</div>
                <div class="col-sm-9">
                    <div class="row g-2">
                        <div class="col-6">
                            <select name="module_type" class="form-select" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('of_module');?>
">
                                <option value=""><?php echo $_smarty_tpl->getValue('LANG')->getModule('block_select_type');?>
</option>
                                <option value="theme"<?php if ($_smarty_tpl->getValue('ROW')['module'] == 'theme') {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('LANG')->getModule('block_type_theme');?>
</option>
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('LIST_MODULES'), 'module');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('module')->value) {
$foreach0DoElse = false;
?>
                                <option value="<?php echo $_smarty_tpl->getValue('module')['value'];?>
"<?php if ($_smarty_tpl->getValue('module')['value'] == $_smarty_tpl->getValue('ROW')['module']) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('module')['title'];?>
</option>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                        <div class="col-6">
                            <select name="file_name" class="form-select" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('block_select');?>
" data-default="<?php echo $_smarty_tpl->getValue('LANG')->getModule('block_select');?>
">
                                <?php echo $_smarty_tpl->getValue('BLOCKLIST');?>

                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div id="block_config" class="d-none"></div>
            <div class="row mb-3">
                <label for="element_title" class="col-sm-3 col-form-label text-sm-end text-truncate fw-medium" title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('block_title');?>
"><?php echo $_smarty_tpl->getValue('LANG')->getModule('block_title');?>
:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="element_title" name="title" value="<?php echo $_smarty_tpl->getValue('ROW')['title'];?>
" maxlength="250">
                </div>
            </div>
            <div class="row mb-3">
                <label for="element_link" class="col-sm-3 col-form-label text-sm-end text-truncate fw-medium" title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('block_link');?>
"><?php echo $_smarty_tpl->getValue('LANG')->getModule('block_link');?>
:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="element_link" name="link" value="<?php echo $_smarty_tpl->getValue('ROW')['link'];?>
" maxlength="255">
                </div>
            </div>
            <div class="row mb-3">
                <label for="element_template" class="col-sm-3 col-form-label text-sm-end text-truncate fw-medium" title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('block_tpl');?>
"><?php echo $_smarty_tpl->getValue('LANG')->getModule('block_tpl');?>
:</label>
                <div class="col-9 col-sm-5">
                    <select class="form-select" id="element_template" name="template">
                        <option value=""><?php echo $_smarty_tpl->getValue('LANG')->getModule('block_default');?>
</option>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('LIST_TEMPLATES'), 'template');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('template')->value) {
$foreach1DoElse = false;
?>
                        <?php if (!( !$_smarty_tpl->hasVariable('template') || empty($_smarty_tpl->getValue('template'))) && $_smarty_tpl->getValue('template') != 'default') {?>
                        <option value="<?php echo $_smarty_tpl->getValue('template');?>
"<?php if ($_smarty_tpl->getValue('template') == $_smarty_tpl->getValue('ROW')['template']) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('template');?>
</option>
                        <?php }?>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="element_position" class="col-sm-3 col-form-label text-sm-end text-truncate fw-medium" title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('block_pos');?>
"><?php echo $_smarty_tpl->getValue('LANG')->getModule('block_pos');?>
:</label>
                <div class="col-9 col-sm-5">
                    <select class="form-select select2" id="element_position" name="position">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('POSITIONS'), 'position');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('position')->value) {
$foreach2DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getValue('position')['tag'];?>
"<?php if ($_smarty_tpl->getValue('position')['tag'] == $_smarty_tpl->getValue('ROW')['position']) {?> selected<?php }?>>
                            <?php if (( !true || empty($_smarty_tpl->getValue('position')['module']))) {?>
                                <?php echo $_smarty_tpl->getValue('position')['name'];?>

                            <?php } else { ?>
                                <?php if ((true && (true && null !== ($_smarty_tpl->getValue('SITE_MODS')[$_smarty_tpl->getValue('position')['module']] ?? null)))) {?>
                                    <?php echo $_smarty_tpl->getValue('SITE_MODS')[$_smarty_tpl->getValue('position')['module']]['custom_title'];?>
: <?php echo $_smarty_tpl->getValue('position')['name'];?>

                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->getValue('position')['module'];?>
: <?php echo $_smarty_tpl->getValue('position')['name'];?>

                                <?php }?>
                            <?php }?>
                        </option>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="element_dtime_type" class="col-sm-3 col-form-label text-sm-end text-truncate fw-medium" title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('dtime_type');?>
"><?php echo $_smarty_tpl->getValue('LANG')->getModule('dtime_type');?>
:</label>
                <div class="col-9 col-sm-5">
                    <select class="form-select" id="element_dtime_type" name="dtime_type" data-current="<?php echo $_smarty_tpl->getValue('ROW')['dtime_type'];?>
">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('DTIME_TYPES'), 'key');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value) {
$foreach3DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getValue('key');?>
"<?php if ($_smarty_tpl->getValue('key') == $_smarty_tpl->getValue('ROW')['dtime_type']) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('LANG')->getModule("dtime_type_".((string)$_smarty_tpl->getValue('key')));?>
</option>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </div>
            <div id="dtime_details"><?php echo $_smarty_tpl->getValue('DTIME_DETAILS');?>
</div>
            <div class="row mb-3">
                <div class="col-sm-3 col-form-label text-sm-end text-truncate fw-medium" title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('show_device');?>
"><?php echo $_smarty_tpl->getValue('LANG')->getModule('show_device');?>
:</div>
                <div class="col-sm-9">
                    <?php
$_smarty_tpl->assign('device', null);$_smarty_tpl->tpl_vars['device']->step = 1;$_smarty_tpl->tpl_vars['device']->total = (int) ceil(($_smarty_tpl->tpl_vars['device']->step > 0 ? 4+1 - (1) : 1-(4)+1)/abs($_smarty_tpl->tpl_vars['device']->step));
if ($_smarty_tpl->tpl_vars['device']->total > 0) {
for ($_smarty_tpl->tpl_vars['device']->value = 1, $_smarty_tpl->tpl_vars['device']->iteration = 1;$_smarty_tpl->tpl_vars['device']->iteration <= $_smarty_tpl->tpl_vars['device']->total;$_smarty_tpl->tpl_vars['device']->value += $_smarty_tpl->tpl_vars['device']->step, $_smarty_tpl->tpl_vars['device']->iteration++) {
$_smarty_tpl->tpl_vars['device']->first = $_smarty_tpl->tpl_vars['device']->iteration === 1;$_smarty_tpl->tpl_vars['device']->last = $_smarty_tpl->tpl_vars['device']->iteration === $_smarty_tpl->tpl_vars['device']->total;?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="element_active_device_<?php echo $_smarty_tpl->getValue('device');?>
" name="active_device[]" value="<?php echo $_smarty_tpl->getValue('device');?>
"<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('device'),$_smarty_tpl->getValue('ROW')['active_device'],true)) {?> checked<?php }?>>
                        <label class="form-check-label" for="element_active_device_<?php echo $_smarty_tpl->getValue('device');?>
"><?php echo $_smarty_tpl->getValue('LANG')->getModule("show_device_".((string)$_smarty_tpl->getValue('device')));?>
</label>
                    </div>
                    <?php }
}
?>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3 col-form-label text-sm-end text-truncate fw-medium" title="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('groups_view');?>
"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('groups_view');?>
:</div>
                <div class="col-9 col-sm-5">
                    <div data-nv-toggle="scroll" class="show-list-ugroup">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('GROUPS_LIST'), 'group_title', false, 'group_id');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('group_id')->value => $_smarty_tpl->getVariable('group_title')->value) {
$foreach4DoElse = false;
?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="element_groups_view_<?php echo $_smarty_tpl->getValue('group_id');?>
" name="groups_view[]" value="<?php echo $_smarty_tpl->getValue('group_id');?>
"<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('group_id'),$_smarty_tpl->getValue('ROW')['groups_view'])) {?> checked<?php }?>>
                            <label class="form-check-label" for="element_groups_view_<?php echo $_smarty_tpl->getValue('group_id');?>
"><?php echo $_smarty_tpl->getValue('group_title');?>
</label>
                        </div>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            </div>
            <?php if (!( !true || empty($_smarty_tpl->getValue('ROW')['bid']))) {?>
            <div class="alert alert-info d-flex align-items-center" role="alert">
                <div class="me-3"><i class="fa-solid fa-bell fa-3x"></i></div>
                <div><?php echo $_smarty_tpl->getValue('LANG')->getModule('block_group_notice');?>
</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-9 offset-sm-3">
                    <div><?php echo $_smarty_tpl->getValue('LANG')->getModule('block_groupbl',$_smarty_tpl->getValue('ROW')['bid'],$_smarty_tpl->getValue('BLOCKS_NUM'));?>
</div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="element_leavegroup" name="leavegroup" value="1" role="switch">
                        <label class="form-check-label" for="element_leavegroup"><?php echo $_smarty_tpl->getValue('LANG')->getModule('block_leavegroup');?>
</label>
                    </div>
                </div>
            </div>
            <?php }?>
            <div class="row mb-3">
                <div class="col-sm-3 col-form-label text-sm-end text-truncate fw-medium py-0" title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('add_block_module');?>
"><?php echo $_smarty_tpl->getValue('LANG')->getModule('add_block_module');?>
:</div>
                <div class="col-sm-9">
                    <div class="form-check mb-sm-0 form-check-inline<?php if (!$_smarty_tpl->getValue('ROW')['block_global']) {?> d-none<?php }?>" id="check_all_func_1">
                        <input class="form-check-input" type="radio" id="element_all_func_1" name="all_func" value="1"<?php if ($_smarty_tpl->getValue('ROW')['all_func'] == 1) {?> checked<?php }?>>
                        <label class="form-check-label" for="element_all_func_1"><?php echo $_smarty_tpl->getValue('LANG')->getModule('add_block_all_module');?>
</label>
                    </div>
                    <div class="form-check mb-sm-0 form-check-inline" id="check_all_func_0">
                        <input class="form-check-input" type="radio" id="element_all_func_0" name="all_func" value="0"<?php if ($_smarty_tpl->getValue('ROW')['all_func'] == 0) {?> checked<?php }?>>
                        <label class="form-check-label" for="element_all_func_0"><?php echo $_smarty_tpl->getValue('LANG')->getModule('add_block_select_module');?>
</label>
                    </div>
                </div>
            </div>
            <div id="shows_all_func"<?php if ($_smarty_tpl->getValue('ROW')['all_func']) {?> class="d-none"<?php }?>>
                <table class="table table-bordered table-striped">
                    <thead class="align-middle">
                        <tr>
                            <th class="text-nowrap text-bg-secondary fw-125">
                                <?php echo $_smarty_tpl->getValue('LANG')->getModule('block_select_module');?>

                            </th>
                            <th class="text-bg-secondary">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="text-truncate me-2"><?php echo $_smarty_tpl->getValue('LANG')->getModule('block_select_function');?>
</div>
                                    <button type="button" name="checkallmod" class="btn btn-secondary btn-sm text-nowrap"><i class="fa-solid fa-check-double"></i> <?php echo $_smarty_tpl->getValue('LANG')->getModule('block_checkall');?>
</button>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('MOD_FUNCS'), 'm_data', false, 'm_title');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('m_title')->value => $_smarty_tpl->getVariable('m_data')->value) {
$foreach5DoElse = false;
?>
                        <tr class="funclist" id="idmodule_<?php echo $_smarty_tpl->getValue('m_title');?>
">
                            <td>
                                <div class="form-check m-0">
                                    <input<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('m_data')['funcs']) <= $_smarty_tpl->getValue('m_data')['func_checked']) {?> checked<?php }?> class="form-check-input checkmodule" type="checkbox" id="element_checkmodule_<?php echo $_smarty_tpl->getValue('m_title');?>
">
                                    <label class="form-check-label text-truncate-3" title="<?php echo $_smarty_tpl->getValue('m_data')['title'];?>
" for="element_checkmodule_<?php echo $_smarty_tpl->getValue('m_title');?>
"><?php echo $_smarty_tpl->getValue('m_data')['title'];?>
</label>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('m_data')['funcs'], 'func_data', false, 'func_id');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('func_id')->value => $_smarty_tpl->getVariable('func_data')->value) {
$foreach6DoElse = false;
?>
                                    <div class="col-6 col-sm-3">
                                        <div class="form-check m-0">
                                            <input<?php if ($_smarty_tpl->getValue('func_data')['checked']) {?> checked<?php }?> class="form-check-input" type="checkbox" id="element_func_id_<?php echo $_smarty_tpl->getValue('m_title');?>
_<?php echo $_smarty_tpl->getValue('func_id');?>
" name="func_id[]" value="<?php echo $_smarty_tpl->getValue('func_id');?>
">
                                            <label class="form-check-label d-block text-truncate" title="<?php echo $_smarty_tpl->getValue('func_data')['name'];?>
" for="element_func_id_<?php echo $_smarty_tpl->getValue('m_title');?>
_<?php echo $_smarty_tpl->getValue('func_id');?>
"><?php echo $_smarty_tpl->getValue('func_data')['name'];?>
</label>
                                        </div>
                                    </div>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </div>
                            </td>
                        </tr>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3 col-form-label text-sm-end text-truncate fw-medium py-0" title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('status');?>
"><?php echo $_smarty_tpl->getValue('LANG')->getModule('status');?>
:</div>
                <div class="col-sm-9">
                    <div class="form-check mb-sm-0 form-check-inline">
                        <input class="form-check-input" type="radio" id="element_act_1" name="act" value="1"<?php if ($_smarty_tpl->getValue('ROW')['act']) {?> checked<?php }?>>
                        <label class="form-check-label" for="element_act_1"><?php echo $_smarty_tpl->getValue('LANG')->getModule('act_1');?>
</label>
                    </div>
                    <div class="form-check mb-sm-0 form-check-inline">
                        <input class="form-check-input" type="radio" id="element_act_0" name="act" value="0"<?php if (!$_smarty_tpl->getValue('ROW')['act']) {?> checked<?php }?>>
                        <label class="form-check-label" for="element_act_0"><?php echo $_smarty_tpl->getValue('LANG')->getModule('act_0');?>
</label>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="element_heading" class="col-sm-3 col-form-label text-sm-end text-truncate fw-medium" title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('block_heading');?>
"><?php echo $_smarty_tpl->getValue('LANG')->getModule('block_heading');?>
:</label>
                <div class="col-sm-9">
                    <select class="form-select w-auto mw-100" name="heading" id="element_heading">
                        <?php
$_smarty_tpl->assign('i', null);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 6+1 - (0) : 0-(6)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                        <option value="<?php echo $_smarty_tpl->getValue('i');?>
"<?php if ($_smarty_tpl->getValue('ROW')['heading'] == $_smarty_tpl->getValue('i')) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('LANG')->getModule("block_heading_".((string)$_smarty_tpl->getValue('i')));?>
</option>
                        <?php }
}
?>
                    </select>
                    <div class="form-text"><?php echo $_smarty_tpl->getValue('LANG')->getModule('block_heading_note');?>
.</div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body p-3 text-center">
            <input type="hidden" name="bid" value="<?php echo $_smarty_tpl->getValue('ROW')['bid'];?>
">
            <input type="hidden" name="checkss" value="<?php echo $_smarty_tpl->getValue('ROW')['checkss'];?>
">
            <button type="submit" name="confirm" value="1" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('LANG')->getModule('block_confirm');?>
</button>
            <button data-toggle="closeWindow" type="button" class="btn btn-secondary"><?php echo $_smarty_tpl->getValue('LANG')->getModule('back');?>
</button>
        </div>
    </div>
</form>
<?php }
}
